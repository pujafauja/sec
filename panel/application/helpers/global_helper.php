<?php

function is_selected($data, $select)
{
    return ($data == $select) ? 'selected' : '';
}

function nestedPrice($sparepartid, $selected)
{
    $ci =& get_instance();
    $data = $ci->db->get_where('tb_sparepart', ['id' => $sparepartid])->row();

    $option = "<option value='$data->het' ".is_selected($data->het, $selected).">HET</option>";
    $option .= "<option value='$data->het1' ".is_selected($data->het1, $selected).">H1</option>";
    $option .= "<option value='$data->het2' ".is_selected($data->het2, $selected).">H2</option>";
    $option .= "<option value='$data->het3' ".is_selected($data->het3, $selected).">H3</option>";
    $option .= "<option value='$data->grosir' ".is_selected($data->grosir, $selected).">GROSIR</option>";

    $html = "<div class='input-group input-group-sm'>
                <select class='form-control' style='width=20px !important' id='typePrice' name='part-harga[$data->id]'>
                    $option
                </select>
                <div class='input-group-prepend'>
                    <div class='input-group-text'>-</div>
                </div>
                <input type='text' data-a-sep='.' data-a-dec=',' style='width=40px !important' data-m-dec='0' id='dataPrice' class='form-control' value='$selected'>
            </div>";

    return $html;
}

function addpayment($source, $tagihan, $is_picking = false, $is_other = false, $table = null, $kategori = 'in', $customerid = 0, $supplierid = 0, $invoice = NULL)
{
    $ci =& get_instance();
    if ($is_other) {
        $data = [
            'tanggal'    => date('Y-m-d H:s:i'),
            'status'     => '0',
            'tagihan'    => $tagihan,
            'customerid' => $customerid,
            'supplierid' => $supplierid,
            'no'         => $invoice,
            'type'       => $kategori,
            'source'     => json_encode($source)
        ];
        $ci->db->insert('tb_payments', $data);
    }else{
        $sql = "SELECT * FROM tb_payments WHERE JSON_EXTRACT(source , '$.$table') = ".$source[$table];
        if(!$is_picking)
            $tagihan = 0;
        $data = [
            'tanggal'    => date('Y-m-d H:s:i'),
            'status'     => '0',
            'tagihan'    => $tagihan,
            'customerid' => $customerid,
            'supplierid' => $supplierid,
            'no'         => $invoice,
            'type'       => $kategori,
            'source'     => json_encode($source)
        ];
        $row = $ci->db->query($sql);
        if($row->num_rows()){
            $ci->db->update('tb_payments', $data , ['id' => $row->row()->id]);
        }else{
            $ci->db->insert('tb_payments', $data);
        }    
    }
}

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";die;
}

function sprint_f($length = 3, $no = 1) {
    return sprintf("%0".$length."d", $no);
}


function toRoman($number) {
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $returnValue = '';
    while ($number > 0) {
        foreach ($map as $roman => $int) {
            if($number >= $int) {
                $number -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}

function cetak($url) {
    if(isset($_GET['cetak']))
        echo '<button type="button" id="print" class="btn btn-default" onclick="window.print()"><i class="fa fa-print"></i> Cetak</button>';
    else
        echo '<button type="button" id="print" class="btn btn-default" onclick="JavaScript:newPopup(\'' . $url . '\')"><i class="fa fa-print"></i> Cetak</button>';
}

function ordered_menu($array,$parentid = 0)
{
	$temp_array = array();
	foreach($array as $element)
	{
		if($element['parentid']==$parentid)
		{
			$element['children'] = ordered_menu($array,$element['id']);
			$temp_array[] = $element;
		}
	}
	return $temp_array;
}

function getCats($array, $parentid) {
    $temp_array = array();
    foreach($array as $element)
    {
        if($element['parentid'] == $parentid)
        {
            $element['children'] = getCats($array,$element['id']);
            $temp_array[] = $element;
        }
    }
    return $temp_array;
}

function countRowSpan($array, $total = 1)
{
    if(count($array) > 0) {
        foreach($array as $index => $value) {
            if(count($value['children']) > 0) {
                countRowSpan($value['children'], $total+=1);
                // exit();
            }
        }
    }

    return $total;
}

function print_ar($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

function isloggedin() {
    $ci =& get_instance();

    if(! $ci->session->userdata('user'))
        redirect(base_url('panel'));
}

function sql_get_var($tablename, $field, $where = array(), $count = 0, $group_by = '', $sum = 0, $order = 'asc')
{
    $ci =& get_instance();

    if($count == 0 && $sum == 0) {
        $ci->db->where($where);

        if($group_by)
        	$ci->db->group_by($group_by);

        $result = $ci->db->get($tablename, 1)->result();

        if(count($result) > 0)
            return $result[0]->$field;
        else
            return NULL;
    }

    else if($count > 0) {
        $ci->db->where($where);

        if($group_by)
            $ci->db->group_by($group_by);

        $result = $ci->db->get($tablename, 1)->result();

        $ci->db->where($where);

	    if($group_by)
	    	$ci->db->group_by($group_by);        

        return $ci->db->get($tablename)->num_rows();
    }

    else if($sum > 0) {
        $ret =  $ci->db
                ->select_sum($field)
                ->from($tablename)
                ->where($where)
                ->order_by('id', $order)
                ->get()->result_array();
        if(count($ret) > 0)
            return $ret[0][$field];
        else
            return NULL;
    }
    else
        return NULL;
}
function bulatKeRatusan($totalharga)
{
    $totalharga=ceil($totalharga);
    
    if (substr($totalharga,-3)>499){
        $total_harga=round($totalharga,-3, PHP_ROUND_HALF_UP);
    } else {
        $total_harga=round($totalharga,-3, PHP_ROUND_HALF_UP )+1000;
    }                   
    return $total_harga; 
}
function getNoFormat($kode, $position = false, $digit = 3)
{
    $ci =& get_instance();

    $dbno = $ci->db->get_where('pp_no', ['kode' => $kode])->row();
    
    if($dbno->format)
    {
        $format    = ['%Y','%y','%m','%d','%urut', '%position'];
        $newformat = [date('Y'), date('y'), date('m'), date('d'), sprint_f($digit, $dbno->last + 1), $position];

        // $ci->db->update('pp_no', ['last' => $dbno->last + 1], ['kode' => $kode]);
        return str_replace($format, $newformat, $dbno->format);
    }
    else
        return false;
}

function updateNo($kode)
{
    $ci =& get_instance();

    $ci->db->set('last', 'last+1', false)->where('kode', $kode)->update('pp_no');
}

function newid($tablename, $primary = 'id') {
    $ci =& get_instance();

    $query = $ci->db->get($tablename);

    if(count($query->result()) >= 1) {
        $ci->db->order_by($primary, 'desc');
        $ci->db->select("MAX($primary) as $primary");
        $ci->db->limit(1, 0);
        $get = $ci->db->get($tablename)->result_array();

        if(count($get) > 0) {
            $newid = $get[0][$primary] + 1;
        }
    }
    else
        $newid = 1;

    return $newid;
}

function nestedCOA2($array, $data = array())
{
    $return = array();
    // $data = array();

    if(count($array))
    {
        foreach ($array as $item) {
            // if($item['parentid'] == 0)
            // {
            //     $dr_awal = 0;
            //     $cr_awal = 0;
            // }

            // if(count($item['children']) > 0) {
            //     foreach($item['children'] as $child)
            //     {
            //         $dr_awal += $child['dr_awal'];
            //         $cr_awal += $child['cr_awal'];

            //         nestedCOA($child['children']);
            //     }
            // }
            // else
            // {
                $dr_awal = $item['dr_awal'];
                $cr_awal = $item['cr_awal'];
            // }

            if($item['issub'] == '1'):
                $item['kode'] = '<strong>'.$item['kode'].'</strong>';
                $item['group'] = '<strong>'.$item['group'].'</strong>';
                $item['nama'] = '<strong>'.$item['nama'].'</strong>';
            endif;

            $return[] = "$item[kode]|$item[group]|$item[nama]|$dr_awal|$cr_awal|$item[id]";


            if(count($item['children']) > 0) {
                $return[] = nestedCOA($item['children']);
            }
        }
    }
    $return = implode('~', $return);
    return $return;
}

function nestedPopCOA($array, $parameter = '')
{
    $str = '';

    if(count($array)):
        foreach($array as $item):
            $totalchildren = count($item['children']);

            $str .= '<tr>';

            if($totalchildren):
                $str .= '<td><strong>'.$item['kode'].'</strong></td>';
            else:
                $str .= '<td>'.$item['kode'].'</td>';
            endif;

            if($totalchildren):
                $str .= '<td><strong>'.$parameter.'| '.$item['nama'].'</strong></td>';
            else:
                $str .= '<td>'.$parameter.'| '.$item['nama'].'</td>';
            endif;

            if($totalchildren <= 0):
                $str .= '<td><button class="btn btn-primary btn-sm select-this" data-id="'.encode($item['id']).'" data-value="['.$item['kode'].'] '.$item['nama'].'"><i class="mdi mdi-cursor-pointer mr-1"></i>Select</td>';
            else:
                $str .= '<td></td>';
            endif;

            $str .= '</tr>';

            if($totalchildren):
                $str .= nestedPopCOA($item['children'], $parameter.'&nbsp;&nbsp;&nbsp;&nbsp;');
            endif;
        endforeach;
    endif;

    return $str;
}

function nestedCOA($array)
{
    $str = '<ol class="dd-list"></ol>';

    if(count($array)):
        foreach($array as $item):
            $totalchildren = count($item['children']);

            $str .= '<li class="dd-item" data-id="'.$item['id'].'">';

            $str .= '<div class="dd-handle">'.$item['kode'].' '. $item['nama'] .'</div>';

            if($totalchildren):
                $str .= nestedPopCOA($item['children']);
            endif;

            $str .= '</li>';

        endforeach;
    endif;

    return $str;
}

function nestedkategori($array, $child = false) {

    if (count($array)):
        $str .= '<ol class="dd-list">';

        foreach($array as $item):
            $str .= '<li class="dd-item dd3-item" data-id="'.$item['id'].'">';
            $str .= '<div class="dd-handle dd3-handle"></div>';
            $str .= '<div class="dd3-content">'.$item['nama'];
            $str .= '<div class="float-right">
                <div class="btn-group">
                    <a href="'.base_url('ecommerce/edit-category/'.encode($item['id'])).'" class="btn btn-xs btn-primary edit-category">
                        <i class="fe-edit-2"></i>
                    </a>
                    <a href="'.base_url('ecommerce/delete-category/'.encode($item['id'])).'" class="btn btn-xs btn-danger delete-category">
                        <i class="fe-delete"></i>
                    </a>
                </div>
            </div>';
            $str .= '</div>';

            if(count($item['children']) > 0):
                $str .= nestedkategori($item['children']);
            endif;

            $str .= '</li>';
        endforeach;

        $str .= '</ol>';
    endif;

    return $str;
}

function nestedKategoriSelect($array, $additional = '', $parentid = false) {
    $str = '';

    if(count($array)):
        foreach($array as $item):
            if($parentid && $parentid == $item['id']):
                $selected = 'selected=""';
            else:
                $selected = '';
            endif;

            $str .= '<option value="'.$item['id'].'" '.$selected.'>'.$additional.' '.$item['nama'].'</option>';

            if(count($item['children']) > 0):
                $str .= nestedKategoriSelect($item['children'], $additional . '--', $parentid);
            endif;
        endforeach;
    endif;

    return $str;
}

function nestedKategoriMultipleSelect($array, $additional = '', $selectedCat = array(), $optionGroup = false) {
    $str = '';

    if(count($array)):
        foreach($array as $item):
            if(count($item['children']) > 0 && $optionGroup == false):
                $disabled = 'disabled=""';
            else:
                $disabled = '';
            endif;

            if(in_array($item['id'], $selectedCat)):
                $selected = 'selected=""';
            else:
                $selected = '';
            endif;

            $str .= '<option value="'.$item['id'].'" '.$disabled.' '.$selected.'>'.$additional.' '.$item['nama'].'</option>';

            if(count($item['children']) > 0):
                $str .= nestedKategoriMultipleSelect($item['children'], $additional . '--', $selectedCat, $optionGroup);
            endif;
        endforeach;
    endif;

    return $str;
}

function nestedMenus($array, $child = FALSE, $nextdropdown = FALSE){
    $sub = '';
    $str = '';

    if (count($array)) {
        // $str .= $nextdropdown == FALSE ? '' . PHP_EOL : '<div class="dropdown">' . PHP_EOL;
        $str .= $child == FALSE ? '' . PHP_EOL : '<div class="collapse" id="sidebar-'.$item['class'].$item['id'].'">' . PHP_EOL;

        foreach ($array as $item) {
            if(count($item['children']) < 1) {
                if($item['parentid'] < 1) {
                    $str .= '<li class="nav-item">';
                    $str .= '<a class="nav-link" href="'.site_url($item['class']).'" id="topnav-layout" role="button" aria-haspopup="true" aria-expanded="false">';
                    $str .= '<i class="'.$item['icon'].' mr-1"></i> '.$item['nama'];
                    $str .= '</a>';
                    $str .= '</li>';
                } else {
                    $str .= '<a href="'.site_url($item['class']).'" class="dropdown-item">';
                    $str .= $item['nama'];
                    $str .= '</a>';
                }
            } else {
                if($item['parentid'] < 1) {
                    $str .= '<li class="nav-item dropdown">';
                    $str .= '<a class="nav-link arrow-none" href="#" id="topnav-layout" role="button" aria-haspopup="true" aria-expanded="false">';
                    $str .= '<i class="'.$item['icon'].' mr-1"></i> '.$item['nama'].' <div class="arrow-down"></div>';
                    $str .= '</a>';
                    
                    $str .= nestedMenus($item['children'], TRUE);
                    $str .= '</div>';
                    $str .= '</li>';
                } else {
                    $str .= '<div class="dropdown">';
                    $str .= '<a class="dropdown-item arrow-none" href="'.site_url($item['class']).'" id="topnav-layout" role="button" aria-haspopup="true" aria-expanded="false">';
                    $str .= $item['nama'] .'<div class="arrow-down"></div>';
                    $str .= '</a>';
                    
                    $str .= nestedMenus($item['children'], TRUE, TRUE);
                    $str .= '</div>';
                    $str .= '</div>';
                }
            }
        }
    }
    return $str;
}

function nestedSideBar($array, $child = FALSE, $nextdropdown = FALSE){
    $sub = '';
    $str = '';

    if (count($array)) {
        // $str .= $nextdropdown == FALSE ? '' . PHP_EOL : '<div class="dropdown">' . PHP_EOL;
        // $str .= $child == FALSE ? '' . PHP_EOL : '<div class="collapse" id="sidebar-'.$item['class'].$item['id'].'">' . PHP_EOL;

        foreach ($array as $item) {
            if(count($item['children']) < 1) {
                $str .= '<li>';
                $str .= '<a href="'.base_url($item['class']).'">';
                $str .= $item['icon'] ? '<i class="'.$item['icon'].' mr-2"></i>' : '';
                $str .= '<span>'.$item['nama'].'</span>';
                $str .= '</a>';
                $str .= '</li>';
            } else {

                $str .= '<li>';
                $str .= '<a href="#sidebar-'.$item['id'].'" data-toggle="collapse">';
                $str .= $item['icon'] ? '<i class="'.$item['icon'].' mr-2"></i>' : '';
                $str .= '<span>'.$item['nama'].'</span>';
                $str .= '<span class="menu-arrow"></span>';
                $str .= '</a>';
                $str .= '<div class="collapse" id="sidebar-'.$item['id'].'">';
                $str .= '<ul class="nav-second-level">';
                $str .= nestedSideBar($item['children']);
                $str .= '</ul>';
                $str .= '</div>';
                $str .= '</li>';
            }
        }
    }
    return $str;
}

function nestedList($array, $child = false, $str = '') {
    $CI =& get_instance();
    $sub = '';

    if (count($array)) {
        $str .= $child == FALSE ? '' . PHP_EOL : '<ul>'  . PHP_EOL;

        foreach ($array as $item) {
            $active = $CI->uri->segment(1) == $item['class'] ? TRUE : FALSE;

            if(isset($item['children']) && count($item['children']))
            {
                $str .= '<li><a href="javascript: void(0);" data-id="'.$item['id'].'" data-nama="'.$item['nama'].'" data-ikon="'.$item['icon'].'" data-parentid="'.$item['parentid'].'" data-class="'.$item['class'].'" data-urutan="'.$item['urutan'].'" class="edit-this"><i class="'.$item['icon'].' mr-1"></i>'.$item['nama'].'<i class="fas fa-times delete text-danger ml-1" data-url="'.site_url("menu/delete/$item[id]").'"></i></a>';

                $str .= nestedList($item['children'],TRUE);
                $str .= '</ul>' . PHP_EOL ;
            }
            else
            {
                $str .= '<li><a href="javascript: void(0);" data-id="'.$item['id'].'" data-nama="'.$item['nama'].'" data-ikon="'.$item['icon'].'" data-parentid="'.$item['parentid'].'" data-class="'.$item['class'].'" data-urutan="'.$item['urutan'].'" class="edit-this"><i class="'.$item['icon'].' mr-1"></i>'.$item['nama'].'<i class="fas fa-times delete text-danger ml-1" data-url="'.site_url("menu/delete/$item[id]").'"></i></a>';
            }
            $str .= '</li>' . PHP_EOL ;
        }
    }
    return $str;
}

function nestedSelect($array, $child = FALSE, $additional = '', $selected = 0)
{
    $CI =& get_instance();

    $str = '';

    if (count($array)) {

        foreach ($array as $item) {
            if($selected == $item['id'])
                $select = 'selected=""';
            else
                $select = '';

            if(isset($item['children']) && count($item['children']))
            {
                $str .= '<option value="'.$item['id'].'" '.$select.'>'.$additional.' <strong>'.$item['nama'].'</strong></option>' . PHP_EOL;
                $str .= nestedSelect($item['children'],TRUE, $additional.'--');
            }
            else
            {
                $str .= '<option value="'.$item['id'].'" '.$select.'>'.$additional.' '.$item['nama'].'</option>' . PHP_EOL;
            }
        }
    }
    return $str;
}

function nestedLocation($array, $foractual = false, $child = false, $string = '', $value = '', $no = 1)
{
    $ci =& get_instance();
    $result = '';

    if(count($array)):
        foreach($array as $item):
                $result .= "<tr>";
                $result .= "<td>$no</td>";
                if(! $foractual):
                    $result .= "<td>$string $item[nama]</td>";
                else:
                    $result .= "<td><a href=".base_url('stock/input-actual/'.encode($item['id'])).">$string $item[nama]</a></td>";
                endif;
                if($item['freeze'] == 1):
                    $result .= "<td><a href='".base_url('stock/unfreeze/'.encode($item['id']))."' class='change-status badge badge-outline-info'><i class='mdi mdi-lock mr-1'></i>Freezed</a></td>";
                else:
                    $result .= "<td><a href='".base_url('stock/freeze/'.encode($item['id']))."' class='change-status badge badge-outline-warning'><i class='mdi mdi-lock-open mr-1'></i>Open</a></td>";
                endif;
                $result .= "<td>".tgl($item['last_opname'])."</td>";
                $result .= "</tr>";
                $no++;
            if(isset($item['children']) && count($item['children'])):
                $result .= nestedLocation($item['children'], $foractual, true, $string . "--", $value, $no);
            endif;
        endforeach;
    endif;

    return $result;
}

function nestedTable($array, $child = FALSE, $string = '', $value = '')
{
    $CI =& get_instance();
    $str = '';
    $oto = array();
    if($value != '') {
        $value2 = json_decode($value);
        foreach($value2 as $o => $aksi) {
            $oto[$o] = $aksi;
        }
    }

    if (count($array)) {

        foreach ($array as $item) {
            if(isset($value2) and array_key_exists($item['class'], $oto)) {
                $checked = 'checked=""';
            }
            else
                $checked = '';

                $str .= '<tr>';
                $str .= '<td>'.$string.' | <i class="'.$item['icon'].' mr-1"></i> <strong>'.$item['nama'].'</strong></td>'.PHP_EOL;
                // $str .= '<td><div class="checkbox checkbox-custom"><input type="checkbox" name="otoritas['.$item['class'].'][]" value="all" class="check-row"> <label>All Access</label></div></td>';
                $str .= '<td><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="otoritas['.$item['class'].'][]" ';
                $str .= ($value != '' and array_key_exists($item['class'], $oto) and in_array('view', $oto[$item['class']])) ? 'checked=""' : ''; 
                $str .= ' value="view" id="view'.$item['id'].'"> <label class="custom-control-label" for="view'.$item['id'].'">View</label></div></td>';
                $str .= '<td><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="otoritas['.$item['class'].'][]" ';
                $str .= ($value != '' and array_key_exists($item['class'], $oto) and in_array('add', $oto[$item['class']])) ? 'checked=""' : ''; 
                $str .= ' value="add" id="add'.$item['id'].'"> <label class="custom-control-label" for="add'.$item['id'].'">Add</label></div></td>';
                $str .= '<td><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="otoritas['.$item['class'].'][]" ';
                $str .= ($value != '' and array_key_exists($item['class'], $oto) and in_array('edit', $oto[$item['class']])) ? 'checked=""' : ''; 
                $str .= ' value="edit" id="edit'.$item['id'].'"> <label class="custom-control-label" for="edit'.$item['id'].'">Edit</label></div></td>';
                $str .= '<td><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="otoritas['.$item['class'].'][]" ';
                $str .= ($value != '' and array_key_exists($item['class'], $oto) and in_array('delete', $oto[$item['class']])) ? 'checked=""' : ''; 
                $str .= ' value="delete" id="delete'.$item['id'].'"> <label class="custom-control-label" for="delete'.$item['id'].'">Delete</label></div></td>';
                $str .= '</tr>' . PHP_EOL;
            if(isset($item['children']) && count($item['children']))
            {
                $str .= nestedTable($item['children'],TRUE, $string."&nbsp;&nbsp;&nbsp;&nbsp;", $value);
            }
        }
    }
    return $str;
}

function wizardTable($table, $id_otoritas)
{
    $ci =& get_instance();
    return $ci->db->get_where($table, ['id' => $id_otoritas])->row();
}



function get_alert($type = 'custom', $message, $position = 'top-center') {

    if($type == 'custom') {
        $heading = 'Well Done!';
        $bg      = '#5ba035';
        $type    = "success";
    }
    else if($type == 'error') {
        $bg      = '#bf441d"';
        $type    = "error";
        $heading = 'Oh no !!';
    }

    $str = '$.toast({
                    heading: \''.$heading.'\',
                    text: \''.$message.'\',
                    icon: \''.$type.'\',
                    loader: true,        // Change it to false to disable loader
                    position: \''.$position.'\',        // Change it to false to disable loader
                    bgColor: \''.$bg.'\',  // To change the background
                })';
    return $str;
}

function get_alertLogin($type = 'success', $message, $position = 'top right') {
    $str = '<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
                '.$message.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    return $str;
}

function get_flashdata($title) {
    $ci =& get_instance();

    echo $ci->session->flashdata($title);
}

function toFloat($nominal = 0) {
    if(!$nominal)
        $nominal = 0;

    $nominal = str_replace('.', '', $nominal);
    $nominal = str_replace(',', '.', $nominal);

    return $nominal;
}

function desimal($val) {
    return str_replace('.', ',', $val);
}

function tanggalwaktu($tanggal)
{
    $tahun = substr("$tanggal",0,4); 
    $bulan = substr("$tanggal", 5, 2); 
    $tgl = substr("$tanggal", 8, 2); 
    $jam = substr("$tanggal", 11, 2); 
    $mnt = substr("$tanggal", 14, 2); 
    $dtk = substr("$tanggal", 17, 2); 
    if ($bulan=="01") { $bulan1="Januari"; }
    if ($bulan=="02"){ $bulan1="Februari"; }
    if ($bulan=="03"){ $bulan1="Maret"; }
    if ($bulan=="04"){ $bulan1="April"; }
    if ($bulan=="05"){ $bulan1="Mei"; }
    if ($bulan=="06"){ $bulan1="Juni"; }
    if ($bulan=="07"){ $bulan1="Juli"; }
    if ($bulan=="08"){ $bulan1="Agustus"; }
    if ($bulan=="09"){ $bulan1="September"; }
    if ($bulan=="10"){ $bulan1="Oktober"; }
    if ($bulan=="11"){ $bulan1="November"; }
    if ($bulan=="12") {$bulan1="Desember"; }    

    $time       = mktime(0,0,0,$bulan,$tgl,$tahun);
    $hari       = getdate($time);
    $tgl        = "$tgl $bulan1 $tahun $jam:$mnt:$dtk"; 

    return $tgl;
}

function tanggalcalendar($tanggal)
{
    $tahun = substr("$tanggal",0,4); 
    $bulan = substr("$tanggal", 5, 2); 
    $tgl   = substr("$tanggal", 8, 2); 
    $jam   = substr("$tanggal", 11, 2); 
    $mnt   = substr("$tanggal", 14, 2); 
    $dtk   = substr("$tanggal", 17, 2); 

    $tgl = "$tahun-$bulan-$tgl"."T"."$jam:$mnt:$dtk"; 

    return $tgl;
}

function tanggalindo($tanggal)
{
    $tahun = substr("$tanggal",0,4);
    $bulan = substr("$tanggal", 5, 2);
    $tgl = substr("$tanggal", 8, 2);
    $jam = substr("$tanggal", 11, 2);
    $mnt = substr("$tanggal", 14, 2);
    $dtk = substr("$tanggal", 17, 2);
    if ($bulan=="01") { $bulan1="Januari"; }
    if ($bulan=="02"){ $bulan1="Februari"; }
    if ($bulan=="03"){ $bulan1="Maret"; }
    if ($bulan=="04"){ $bulan1="April"; }
    if ($bulan=="05"){ $bulan1="Mei"; }
    if ($bulan=="06"){ $bulan1="Juni"; }
    if ($bulan=="07"){ $bulan1="Juli"; }
    if ($bulan=="08"){ $bulan1="Agustus"; }
    if ($bulan=="09"){ $bulan1="September"; }
    if ($bulan=="10"){ $bulan1="Oktober"; }
    if ($bulan=="11"){ $bulan1="November"; }
    if ($bulan=="12") {$bulan1="Desember"; }
    if ($bulan=="00") {$bulan1="Januari"; }   

    $time = mktime(0,0,0,$bulan,$tgl,$tahun);
    $hari = getdate($time);
    $tgl  = "$tgl $bulan1 $tahun"; 

    return $tgl;
}

function tgl($tanggal)
{
    $tahun = substr("$tanggal",0,4); 
    $bulan = substr("$tanggal", 5, 2);
    $tgl = substr("$tanggal", 8, 2);
    $jam = substr("$tanggal", 11, 2);
    $mnt = substr("$tanggal", 14, 2);
    $dtk = substr("$tanggal", 17, 2);
    if ($bulan=="01") { $bulan1="Januari"; }
    if ($bulan=="02"){ $bulan1="Februari"; }
    if ($bulan=="03"){ $bulan1="Maret"; }
    if ($bulan=="04"){ $bulan1="April"; }
    if ($bulan=="05"){ $bulan1="Mei"; }
    if ($bulan=="06"){ $bulan1="Juni"; }
    if ($bulan=="07"){ $bulan1="Juli"; }
    if ($bulan=="08"){ $bulan1="Agustus"; }
    if ($bulan=="09"){ $bulan1="September"; }
    if ($bulan=="10"){ $bulan1="Oktober"; }
    if ($bulan=="11"){ $bulan1="November"; }
    if ($bulan=="12") {$bulan1="Desember"; }
    if ($bulan=="00") {$bulan1="Januari"; }
    
    $time       = mktime(0,0,0,$bulan,$tgl,$tahun);
    $hari       = getdate($time);
    $tgl        = "$tgl/$bulan/$tahun"; 

    return $tgl;
}

function bulantahun($tanggal)
{
    $tahun = substr("$tanggal",0,4);
    $bulan = substr("$tanggal", 5, 2);
    $tgl   = substr("$tanggal", 8, 2);
    $jam   = substr("$tanggal", 11, 2);
    $mnt   = substr("$tanggal", 14, 2);
    $dtk   = substr("$tanggal", 17, 2);    
    if ($bulan=="01") { $bulan1="Januari"; }
    if ($bulan=="02"){ $bulan1="Februari"; }
    if ($bulan=="03"){ $bulan1="Maret"; }
    if ($bulan=="04"){ $bulan1="April"; }
    if ($bulan=="05"){ $bulan1="Mei"; }
    if ($bulan=="06"){ $bulan1="Juni"; }
    if ($bulan=="07"){ $bulan1="Juli"; }
    if ($bulan=="08"){ $bulan1="Agustus"; }
    if ($bulan=="09"){ $bulan1="September"; }
    if ($bulan=="10"){ $bulan1="Oktober"; }
    if ($bulan=="11"){ $bulan1="November"; }
    if ($bulan=="12") {$bulan1="Desember"; }    

    $time       = mktime(0,0,0,$bulan,$tgl,$tahun);
    $hari       = getdate($time);
    $tgl        = "$bulan1 $tahun"; 

    return $tgl;
}

function fulldate($tanggal)
{
    $tahun = substr("$tanggal",0,4);
    $bulan = substr("$tanggal", 5, 2);
    $tgl   = substr("$tanggal", 8, 2);
    $jam   = substr("$tanggal", 11, 2);
    $mnt   = substr("$tanggal", 14, 2);
    $dtk   = substr("$tanggal", 17, 2);    
    if ($bulan=="01") { $bulan1="Jan"; }
    if ($bulan=="02"){ $bulan1="Feb"; }
    if ($bulan=="03"){ $bulan1="Mar"; }
    if ($bulan=="04"){ $bulan1="Apr"; }
    if ($bulan=="05"){ $bulan1="Mei"; }
    if ($bulan=="06"){ $bulan1="Jun"; }
    if ($bulan=="07"){ $bulan1="Jul"; }
    if ($bulan=="08"){ $bulan1="Agu"; }
    if ($bulan=="09"){ $bulan1="Sep"; }
    if ($bulan=="10"){ $bulan1="Okt"; }
    if ($bulan=="11"){ $bulan1="Nov"; }
    if ($bulan=="12") {$bulan1="Des"; }    

    $time       = mktime(0,0,0,$bulan,$tgl,$tahun);
    $hari       = getdate($time);
    $tgl        = "$tgl $bulan1 $tahun $jam:$mnt"; 

    return $tgl;
}

function my($tanggal, $first = false)
{
    if (!$first) {
        $bulan = substr("$tanggal", 0, 2);
        $tahun = substr("$tanggal",3, 4);
    }else{
        $tahun = substr("$tanggal",0, 4);        
        $bulan = substr("$tanggal", 5, 2);
    }

    if ($bulan=="01") { $bulan1="January"; }
    if ($bulan=="02"){ $bulan1="February"; }
    if ($bulan=="03"){ $bulan1="March"; }
    if ($bulan=="04"){ $bulan1="April"; }
    if ($bulan=="05"){ $bulan1="May"; }
    if ($bulan=="06"){ $bulan1="June"; }
    if ($bulan=="07"){ $bulan1="July"; }
    if ($bulan=="08"){ $bulan1="August"; }
    if ($bulan=="09"){ $bulan1="September"; }
    if ($bulan=="10"){ $bulan1="October"; }
    if ($bulan=="11"){ $bulan1="November"; }
    if ($bulan=="12") {$bulan1="December"; }    

    $tgl        = "$bulan1 $tahun"; 

    return $tgl;
}

function decodemonth($bulan)
{
    if ($bulan=="Januari"){ $bulan1="01"; }
    if ($bulan=="Februari"){ $bulan1="02"; }
    if ($bulan=="Maret"){ $bulan1="03"; }
    if ($bulan=="April"){ $bulan1="04"; }
    if ($bulan=="Mei"){ $bulan1="05"; }
    if ($bulan=="Juni"){ $bulan1="06"; }
    if ($bulan=="Juli"){ $bulan1="07"; }
    if ($bulan=="Agustus"){ $bulan1="08"; }
    if ($bulan=="September"){ $bulan1="09"; }
    if ($bulan=="Oktober"){ $bulan1="10"; }
    if ($bulan=="November"){ $bulan1="11"; }
    if ($bulan=="Desember"){ $bulan1="12"; }    

    $tgl        = $bulan1; 

    return $tgl;   
}
function getMonth($tanggal)
{
    $tahun = substr("$tanggal",0,4);
    $bulan = substr("$tanggal", 5, 2);
    $tgl   = substr("$tanggal", 8, 2);
    $jam   = substr("$tanggal", 11, 2);
    $mnt   = substr("$tanggal", 14, 2);
    $dtk   = substr("$tanggal", 17, 2);

    return $bulan;
}

function getyear($tanggal)
{
    $tahun = substr("$tanggal",0,4);
    $bulan = substr("$tanggal", 5, 2);
    $tgl   = substr("$tanggal", 8, 2);
    $jam   = substr("$tanggal", 11, 2);
    $mnt   = substr("$tanggal", 14, 2);
    $dtk   = substr("$tanggal", 17, 2);

    return $tahun;
}

function bulan($bulan)
{
    if ($bulan=="01") { $bulan1="Januari"; }
    if ($bulan=="02"){ $bulan1="Februari"; }
    if ($bulan=="03"){ $bulan1="Maret"; }
    if ($bulan=="04"){ $bulan1="April"; }
    if ($bulan=="05"){ $bulan1="Mei"; }
    if ($bulan=="06"){ $bulan1="Juni"; }
    if ($bulan=="07"){ $bulan1="Juli"; }
    if ($bulan=="08"){ $bulan1="Agustus"; }
    if ($bulan=="09"){ $bulan1="September"; }
    if ($bulan=="10"){ $bulan1="Oktober"; }
    if ($bulan=="11"){ $bulan1="November"; }
    if ($bulan=="12") {$bulan1="Desember"; }   

    $tgl = "$bulan1"; 

    return $tgl;
}

function haritanggal($tanggal) {
    $tahun = substr("$tanggal",0,4);
    $bulan = substr("$tanggal", 5, 2);
    $tgl   = substr("$tanggal", 8, 2);
    $jam   = substr("$tanggal", 11, 2);
    $mnt   = substr("$tanggal", 14, 2);
    $dtk   = substr("$tanggal", 17, 2);
    if ($bulan=="01") { $bulan1="Januari"; }
    if ($bulan=="02"){ $bulan1="Februari"; }
    if ($bulan=="03"){ $bulan1="Maret"; }
    if ($bulan=="04"){ $bulan1="April"; }
    if ($bulan=="05"){ $bulan1="Mei"; }
    if ($bulan=="06"){ $bulan1="Juni"; }
    if ($bulan=="07"){ $bulan1="Juli"; }
    if ($bulan=="08"){ $bulan1="Agustus"; }
    if ($bulan=="09"){ $bulan1="September"; }
    if ($bulan=="10"){ $bulan1="Oktober"; }
    if ($bulan=="11"){ $bulan1="November"; }
    if ($bulan=="12") {$bulan1="Desember"; }

    $time = mktime(0,0,0,$bulan,$tgl,$tahun);
    $hari = getdate($time);
    $array_hari = array("Monday" => "Senin", "Tuesday" => "Selasa", "Wednesday" => "Rabu", "Thursday" => "Kamis","Friday" => "Jum'at", "Saturday" => "Sabtu", "Sunday" => "Minggu");
    $hari = $array_hari[$hari['weekday']];
    $tgl="<strong>$hari</strong> | $tgl $bulan1 $tahun"; 

    return $tgl;
}

function mainanchor($link, $icon, $text, $btnclass = 'btn btn-sm btn-primary', $target = '') {
    $return = '<a href="'.$link.'">
                <button class="'.$btnclass.'"><i class="'.$icon.'"></i> '.$text.'</button>
            </a>';

    echo $return;
}

function popoti_pagination($allrecords, $itemperpage, $segmentHlm = 3) {
    $ci =& get_instance();

    $controller = $ci->uri->segment('1');
    $action     = $ci->uri->segment('2');
    $hlm        = $ci->uri->segment($segmentHlm);
    // $hlm        = 1;

    if(empty($action))
        $action = 'index';
    if(empty($hlm))
        $hlm = 1;

    $totpage = ceil($allrecords / $itemperpage);

    $html = '<nav aria-label="Page navigation example">
                <ul class="pagination">';

    if($hlm > 1) {
        $prev = $hlm - 1;
        $html .= '  <li class="page-item">
                        <a class="page-link" href="'.site_url("$controller/$action/1").'">
                            <i class="fa fa-angle-double-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="'.site_url("$controller/$action/$prev").'">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>';
    }

    for($p = 1; $p <= $totpage; $p++) {
        $active = '';
        if($p == $hlm)
            $active = 'active';

        $html .= '  <li class="page-item '.$active.'">
                        <a class="page-link" href="'.site_url("$controller/$action/$p").'">'.$p.'</a>
                    </li>';
    }

    if($hlm < $totpage) {
        $next = $hlm + 1;
        $html .= '  <li class="page-item">
                        <a class="page-link" href="'.site_url("$controller/$action/$next").'">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>';
    }

    if($hlm != $totpage) {
        $html .= '  <li class="page-item">
                        <a class="page-link" href="'.site_url("$controller/$action/$totpage").'">
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </li>';
    }

    $html .= '  </ul>
            </nav>';

    echo $html;
}

function customPagination($allrecords, $itemperpage, $url, $hlm = 1) {
    $ci =& get_instance();

    $totpage = ceil($allrecords / $itemperpage);

    $html = '<ul class="pagination pagination-rounded justify-content-end mb-3">';

    if($hlm > 1) {
        $prev = $hlm - 1;
        $html .= '  <li class="page-item">
                        <a class="page-link" href="'.site_url("$url/$prev").'" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>';
    }

    for($p = 1; $p <= $totpage; $p++) {
        $active = '';
        if($p == $hlm)
            $active = 'active';

        $html .= '  <li class="page-item '.$active.'">
                        <a class="page-link" href="'.site_url("$url/$p").'">'.$p.'</a>
                    </li>';
    }

    if($hlm < $totpage) {
        $next = $hlm + 1;
        $html .= '  <li class="page-item">
                        <a class="page-link" href="'.site_url("$url/$next").'" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>';
    }

    $html .= '  </ul>';

    echo $html;
}

function cmsformcari($action = "", $form = array()) {
    $action = "";
    $filter = array();
    $ci     = & get_instance();

    if(count($form) > 0) { ?>
        <div class="row" id="pencarian">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="row">
                        <form class="" action="<?php echo $action ?>" method="post">
                            <input type="hidden" name="filtered">
                            <?php foreach($form as $f) {
                                $name    = $f[0];
                                $text    = $f[1];
                                $type    = $f[2];
                                $options = $f[3];
                                $value   = $f[4]; 

                                if(!isset($ci->session->userdata('filter_data')[$name])) {
                                    $_SESSION['filter_data'][$name] = '';
                                }
                                if(!isset($ci->session->userdata('filter_data')[$value]))
                                    $_SESSION['filter_data'][$value] = '';
                                ?>

                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="inputPassword2" class=""><?php echo $text ?></label>
                                        <?php if($type == 'text') { ?>
                                            <input type="text" name="<?php echo $name ?>" class="form-control" id="" placeholder="" value="<?php echo $ci->session->userdata('filter_data')[$name]; ?>">
                                        <?php } else if($type == 'select') { ?>
                                            <select name="<?php echo $name ?>" id="" class="form-control">
                                                <option value="">-- Pilih <?php echo $text ?> --</option>
                                                <?php foreach($options as $o) { ?>
                                                    <option value="<?php echo $o[0] ?>" <?php echo ($ci->session->userdata('filter_data')[$name] == $o[0]) ? 'selected=""' : '' ?>><?php echo $o[1] ?></option>
                                                <?php } ?>
                                            </select>
                                        <?php } else if($type == 'select2') { ?>
                                            <select name="<?php echo $name ?>" id="" class="form-control select2">
                                                <option value="">-- Pilih <?php echo $text ?> --</option>
                                                <?php foreach($options as $o) { ?>
                                                    <option value="<?php echo $o[0] ?>" <?php echo ($ci->session->userdata('filter_data')[$name] == $o[0]) ? 'selected=""' : '' ?>><?php echo $o[1] ?></option>
                                                <?php } ?>
                                            </select>
                                        <?php } else if($type == 'date') { ?>
                                            <div class="input-group">
                                                <input type="text" name="<?php echo $name ?>" value="<?php echo $ci->session->userdata('filter_data')[$name]; ?>" class="form-control datepicker-autoclose">
                                                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                            </div>
                                        <?php } else if($type == 'autocomplete') { ?>
                                            <div class="input-group">
                                                <input type="hidden" name="<?php echo $name ?>" value="<?php echo $ci->session->userdata('filter_data')[$name]; ?>" class="<?php echo $name ?>">
                                                <input type="text" name="<?php echo $value ?>" value="<?php echo $ci->session->userdata('filter_data')[$value]; ?>" class="form-control autocomplete-<?php echo $name ?>">
                                                <span class="input-group-addon bg-custom b-0 text-white"><i class="fa fa-search"></i></span>
                                            </div>
                                        <?php } else if($type == 'modal') { ?>
                                            <input type="hidden" name="<?php echo $name ?>" value="<?php echo $ci->session->userdata('filter_data')[$name]; ?>">
                                            <span class="<?php echo $f[5] ?>"></span>
                                            <span class="input-group-btn">
                                                <button class="btn waves-effect waves-light btn-primary <?php echo $f[6] ?>" type="button" data-toggle="modal" data-target="<?php echo $options ?>">
                                                    <?php
                                                        echo ($value) ? $value : 'Pilih '.$text;
                                                    ?>
                                                </button>
                                            </span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php
                                if(isset($_POST['filtered'])) {
                                    $filter[$name] = $_POST[$name];
                                    if($type == 'autocomplete')
                                        $filter[$value] = $_POST[$value];
                                }
                            } ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <button type="submit" class="btn btn-default dropdown-toggle waves-effect waves-light m-t-20"><i class="fa fa-search"></i> Cari</button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end row -->
                </div> <!-- end card-box -->
            </div><!-- end col-->
        </div>
        <!-- end row -->
        <?php 
    }

    if(isset($_POST['filtered'])) {
        $controller = $ci->uri->segment(1);
        $action     = $ci->uri->segment(2);
        $segment3   = $ci->uri->segment(3);

        $ci->session->set_userdata('filter_data', $filter);

        if($segment3)
            redirect(base_url()."$controller/$action/$segment3");
        else
            redirect(base_url()."$controller/$action");
    }
}

if(1) {
    function create_slug($string){
        $string = strtolower($string);
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
    }
}

function html_cut($text, $max_length)
{
    $tags   = array();
    $result = "";

    $is_open          = false;
    $grab_open        = false;
    $is_close         = false;
    $in_double_quotes = false;
    $in_single_quotes = false;
    $tag              = "";

    $i = 0;
    $stripped = 0;

    $stripped_text = strip_tags($text);

    while ($i < strlen($text) && $stripped < strlen($stripped_text) && $stripped < $max_length)
    {
        $symbol  = $text[$i];
        $result .= $symbol;

        switch ($symbol)
        {
            case '<':
                $is_open   = true;
                $grab_open = true;
            break;

            case '"':
               if ($in_double_quotes)
                   $in_double_quotes = false;
               else
                   $in_double_quotes = true;
            break;

            case "'":
              if ($in_single_quotes)
                  $in_single_quotes = false;
              else
                  $in_single_quotes = true;
            break;

            case '/':
                if ($is_open && !$in_double_quotes && !$in_single_quotes)
                {
                    $is_close  = true;
                    $is_open   = false;
                    $grab_open = false;
                }
            break;

            case ' ':
                if ($is_open)
                    $grab_open = false;
                else
                    $stripped++;
            break;

            case '>':
                if ($is_open)
                {
                    $is_open   = false;
                    $grab_open = false;
                    array_push($tags, $tag);
                    $tag = "";
                }
                else if ($is_close)
                {
                    $is_close = false;
                    array_pop($tags);
                    $tag = "";
                }
            break;

            default:
                if ($grab_open || $is_close)
                    $tag .= $symbol;

                if (!$is_open && !$is_close)
                    $stripped++;
        }

        $i++;
    }

    while ($tags)
        $result .= "... </".array_pop($tags).">";

    return $result;
}

function saveSlug($ROUT_CONTROL, $ROUT_SLUG) {

    $CI =& get_instance();



    // cek controlnya dulu

    $checkRouteSlug = sql_get_var('tb_routes', 'id', ['route_slug' => $ROUT_SLUG]);
    $checkRouteControl = sql_get_var('tb_routes', 'id', ['route_control' => $ROUT_CONTROL]);

    if ($checkRouteSlug)
        $ROUT_ID = $checkRouteSlug;
    elseif ($checkRouteControl)
        $ROUT_ID = $checkRouteControl;
    else
        $ROUT_ID = false;



    $data = array(

        'route_control' => $ROUT_CONTROL,

        'route_slug'    => $ROUT_SLUG,

    );



    if($ROUT_ID) {

        $CI->db

            ->where('id', $ROUT_ID)

            ->update('tb_routes', $data);

    } else {

        $data['id'] = newid('tb_routes');



        $CI->db

            ->insert('tb_routes', $data);

    }

}



if (! function_exists('encode')) {

    function encode($text=''){

        return rtrim(strtr(base64_encode($text), '+/', '-_'), '=');

    }

}



if (! function_exists('decode')) {

    function decode($text=''){

        return base64_decode(str_pad(strtr($text, '-_', '+/'), strlen($text) % 4, '=', STR_PAD_RIGHT));

    }

}

function rupiah($val, $desimal = 0)

{

    $num = number_format($val,$desimal,',','.');

    return $num;

}

function cekoto($controller, $function = '', $view = false, $header = false) {
    $ci =& get_instance();
    $oto = $ci->session->userdata('otoritas');
    if($oto) {
        $otoritas = json_decode($oto, true);

        if(! $function) {
            if(! array_key_exists($controller, $otoritas)) {
                if($view):
                    if($header):
                        echo $ci->load->view('includes/header', '', TRUE);
                        echo $ci->load->view('includes/navbar', '', TRUE);
                    endif;
                    echo $ci->load->view('errors/403', '', TRUE);
                    if($header):
                        echo $ci->load->view('includes/footer', '', TRUE);
                    endif;
                    die();
                else:
                    return false;
                endif;
            } else {
                return true;
            }
        } else {
            if(array_key_exists($controller, $otoritas)) {
                return true;
            } else {
                if($view):
                    if($header):
                        echo $ci->load->view('includes/header', '', TRUE);
                        echo $ci->load->view('includes/navbar', '', TRUE);
                    endif;
                    echo $ci->load->view('errors/403', '', TRUE);
                    if($header):
                        echo $ci->load->view('includes/footer', '', TRUE);
                    endif;
                    die();
                else:
                    return false;
                endif;
            }
        }
    }
}

function gethpp($barangid) {

    $dis =& get_instance();

    $penerimaan = $dis->db->select('AVG(CASE WHEN b.currency = \'USD\' THEN e.harga * d.kurs ELSE e.harga END) as hpp')

                          ->from('tb_penerimaan_detail a')

                          ->join('tb_pof b', 'ON a.pofid = b.id', 'LEFT')

                          ->join('tb_pof_detail c', 'ON a.barangid = c.barangid and c.pofid = b.id', 'LEFT')

                          ->join('tb_ap d', 'ON b.id = d.pofid', 'LEFT')

                          ->join('tb_ap_detail e', 'ON d.id = e.apid and c.barangid = e.barangid', 'LEFT')

                          ->where('a.barangid', $barangid)

                          ->get()

                          ->row();

                          // exit();

    // $tot        = 0;

    // $hpp        = 0;

    // $totalharga = 0;



    // foreach($penerimaan as $p) {

    //     $totalharga += $p->harga;

    //     $tot++;

    // }

    // $hpp = ($totalharga > 0) ? $totalharga / $tot : 0;

    return $penerimaan->hpp;

}



function addtanggal($start, $additional, $type = 'day', $format = 'Y-m-d') {

    $stop_date = $start;

    $stop_date = date($format, strtotime($stop_date . "$additional $type"));

    return $stop_date;

}



function penyebut($nilai) {

    $nilai = abs($nilai);

    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");

    $temp = "";

    if ($nilai < 12) {

        $temp = " ". $huruf[$nilai];

    } else if ($nilai <20) {

        $temp = penyebut($nilai - 10). " belas";

    } else if ($nilai < 100) {

        $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);

    } else if ($nilai < 200) {

        $temp = " seratus" . penyebut($nilai - 100);

    } else if ($nilai < 1000) {

        $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);

    } else if ($nilai < 2000) {

        $temp = " seribu" . penyebut($nilai - 1000);

    } else if ($nilai < 1000000) {

        $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);

    } else if ($nilai < 1000000000) {

        $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);

    } else if ($nilai < 1000000000000) {

        $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));

    } else if ($nilai < 1000000000000000) {

        $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));

    }     

    return $temp;

}





function terbilang($nilai) {

    if($nilai<0) {

        $hasil = "minus ". trim(penyebut($nilai));

    } else {

        $hasil = trim(penyebut($nilai));

    }           

    return $hasil;

}



function in_array_key_r($needle, $haystack, $strict = false) {

    foreach ($haystack as $key => $item) {

        if (($strict ? $key === $needle : $key == $needle) || (is_array($item) && in_array_key_r($needle, $item, $strict))) {

            return true;

        }

    }



    return false;

}



function value_pocid($needle, $haystack, $strict = false) {

    foreach ($haystack as $key => $item) {

        if (($strict ? $key === $needle : $key == $needle) || (is_array($item) && value_pocid($needle, $item, $strict))) {

            return $item;

        }

    }



    return false;

}

function price($num) {
    if($num>1000) {

        $x = round($num);
        $x_number_format = number_format($x);
        $x_array = explode(',', $x_number_format);
        $x_parts = array('k', 'm', 'b', 't');
        $x_count_parts = count($x_array) - 1;
        $x_display = $x;
        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
        $x_display .= $x_parts[$x_count_parts - 1];

        return $x_display;

    }

    return $num;
}

?>