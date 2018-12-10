<script>
    $(function () {
        <?php 
        echo "var baseUrl = '". base_url() . "';";
        echo "var param = '". $this->input->get('booking') . "';";
        
        ?>      
        
        if(param == 'on'){
            $(".cmb-book" ).prop('checked', true);
        }else{
            $(".cmb-book" ).prop('checked', false);
        }

        $(".cmb-book" ).change(function(){
            if($(this).prop("checked") == true){
                ubah('on');
            }else{
                ubah('off');
            }
        });

        function ubah(param){
            var link = baseUrl+'C_faskes?booking='+param;
            window.location.href = link;
        }

    });
</script>