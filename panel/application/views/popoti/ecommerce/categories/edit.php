<form action="<?php echo base_url('ecommerce/save-category/'.encode($category->id)) ?>" method="post" id="edit-category">
    <div class="form-group">
        <label for="">Parent</label>
        <select name="parentid" id="" class="form-control">
            <option value="">-- Empty --</option>
            <?php echo nestedKategoriSelect($categories, '', $category->parentid) ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Category Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $category->nama ?>">
    </div>
</form>