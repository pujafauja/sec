        <!-- Vendor js -->
        <script src="<?php echo base_url() ?>/assets/js/vendor.min.js"></script>

        <?php
        if(count($this->data['js']) > 0) {
            foreach ($this->data['js'] as $js) { ?>
                <script type="text/javascript" src="<?php echo $js ?>"></script>
            <?php }
        }
        ?>

        <!-- App js -->
        <script src="<?php echo base_url() ?>/assets/js/app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.currency').autoNumeric('init', {
                    aSep: '.',
                    aDec: ','
                });

                $(".basic-datepicker").flatpickr(), $(".datetime-datepicker").flatpickr({
                    enableTime: !0,
                    dateFormat: "Y-m-d H:i"
                })
            })
        </script>
        
    </body>
</html>