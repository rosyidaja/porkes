<script>
    $(function () {
        <?php echo "var baseUrl = '". base_url() . "';"; ?>
        var list_poli = $("select[name=list_poli]").val();
        var faskes_id = $("input[name=faskes]").val();
        listAntrian(faskes_id,list_poli);
        $("select[name=list_poli]").change(function() {
            var poli_id = $("select[name=list_poli]").val();
          listAntrian(faskes_id,poli_id);
        });
        function listAntrian(faskes_id,list_poli){
            $("tbody").html('');
            if(list_poli != '' && list_poli > 0){
                $.ajax({
                    url : baseUrl + "C_faskes/list_poli",
                    method:'POST',  // what to expect back from the PHP script, if anything
                    data: { list_poli: list_poli, faskes: faskes_id },
                    success : function(response){
                        var res = JSON.parse(response);
                        var list_antrian = '';
                        if(res.length > 0){
                            res.forEach(function(element) {
                                list_antrian += '<tr class="small">';
                                list_antrian += '<td>'+element.booking_urut+'</td>';
                                list_antrian += '<td>'+element.booking_pasien_nama+'</td>';
                                list_antrian += '<td>'+element.booking_pasien_norm+'</td>';
                                list_antrian += '<td>'+element.faskesdetpoli_nama+'</td>';
                                list_antrian += '<td>'+element.booking_status+'</td>';
                                list_antrian += '</tr>';
                            });
                        }else{
                            list_antrian += '<tr class="small">';
                            list_antrian += '<td colspan="5">Data Tidak Ada</td>';
                            list_antrian += '</tr>';
                        }
                        
                    $("tbody").append(list_antrian);
                    }
                });
            }
        }
        

    });
</script>