<script>
  $(function () {
    <?php echo "var baseUrl = '". base_url() . "';"; ?>
    var form_kode = '';
    form_kode += '<div class="form-group" style="width: 95%">';
    form_kode += '     <label for="kode">Kode</label>';
    form_kode += '     <input type="text" class="form-control" name="kode"  placeholder=" Kode .." required >';
    form_kode += '</div>';

    var form_nama = '';
    form_nama += '<div class="form-group" style="width: 95%">';
    form_nama += '  <label for="nama">Nama</label>';
    form_nama += '  <input type="text" class="form-control" id="nama" name="nama"  placeholder=" Nama .." required >';
    form_nama += '</div>';

    var form_telfon = '';
    form_telfon += '<div class="form-group" style="width: 95%">';
    form_telfon += '    <label for="telfon">Telfon</label>';
    form_telfon += '    <input type="text" class="form-control" name="telfon"  placeholder=" Telfon .." required >';
    form_telfon += '</div>';

    var form_layanan = '';
    form_layanan += '<div class="form-group" style="width: 95%">';
    form_layanan += '   <label for="layanan">Layanan</label>';
    form_layanan += '   <input type="text" class="form-control" name="layanan"  placeholder=" Layanan .." required >';
    form_layanan += '</div>';

    var form_foto = '';
    form_foto += '<div class="form-group" style="padding-top: 20px">';
    form_foto += '  <label for="foto">Unggah Gambar (Layanan)</label>';
    form_foto += '  <input type="file" name="foto_modal"  size="20" >';
    form_foto += '</div>';
    $('#tbl_dokter').DataTable();
    $('#tbl_poli').DataTable();
    $('#tbl_layanan').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    });

    $(".btn-delete").click(function(){
        var val = confirm('Anda Yakin Ingin Menghapus ? ');
        if(val == true){
            var param = $(this).attr('data-param');
            var id = $(this).attr('data-id');
            var faskes_id = $("input[name=faskes_id]").val();
            $.ajax({
                url : baseUrl + "C_a_faskes/delete_det",
                method:'POST',  // what to expect back from the PHP script, if anything
                data: { id: id, param: param },
                success : function(response){
                    var res = response;
                    if(res > 0){
                        window.location = baseUrl + "C_a_faskes/content/"+faskes_id;
                    }else{
                        window.location = baseUrl + "C_a_faskes/content/"+faskes_id;
                    }
                }
            });
        }
    });
    $(".del_galeri").click(function(){
        var val = confirm('Anda Yakin Ingin Menghapus ? ');
        if(val == true){
            var param = $(this).attr('data-param');
            var id = $(this).attr('data-id');
            var faskes_id = $("input[name=faskes_id]").val();
            $.ajax({
                    url : baseUrl + "C_a_faskes/delete_det",
                    method:'POST',  // what to expect back from the PHP script, if anything
                    data: { id: id, param: param },
                    success : function(response){
                        var res = response;
                        if(res > 0){
                            window.location = baseUrl + "C_a_faskes/content/"+faskes_id;
                        }else{
                            window.location = baseUrl + "C_a_faskes/content/"+faskes_id;
                        }
                    }
                });
        }
    });
    $(".btn-edit").click(function(){
        $("#content-isi").html('');
        var content_isi = '';
        var param = $(this).attr('data-param');
        var id = $(this).attr('data-id');
        $("input[name=param]").val(param);
        $("input[name=id]").val(id);
       


        if(param == 'dokter'){
            content_isi += form_nama;
            content_isi += form_telfon;
            content_isi += form_foto;
        }else if(param == 'poli'){
            content_isi += form_kode;
            content_isi += form_nama;

        }else if(param == 'layanan'){
            content_isi += form_layanan;
        }else if(param == 'galeri'){
            content_isi += form_foto;
        }
        $("#content-isi").append(content_isi);
        $.ajax({
            url : baseUrl + "C_a_faskes/getDetail",
            method:'POST',  // what to expect back from the PHP script, if anything
            data:  { id: id, param: param },
            success : function(response){
                var res = JSON.parse(response);
                if(param == 'dokter'){
                    $("input[name=nama]").val(res.faskesdetdokter_nama);
                    $("input[name=telfon]").val(res.faskesdetdokter_telfon);
                }else if(param == 'poli'){
                    content_isi += form_kode;
                    content_isi += form_nama;
                    $("input[name=nama]").val(res.faskesdetpoli_nama);
                    $("input[name=kode]").val(res.faskesdetpoli_kode);
                }else if(param == 'layanan'){
                    content_isi += form_layanan;
                    $("input[name=layanan]").val(res.faskesdetlayanan_nama);
                }
            }
        });
        $("#modal-contentFaskes").modal("show");
    });
    $(".btn-show").click(function(){
        $("#content-isi").html('');
        var content_isi = '';
        var param = $(this).attr('data-value');
        $("input[name=param]").val(param);
        $("input[name=id]").val(0);
       


        if(param == 'dokter'){
            content_isi += form_nama;
            content_isi += form_telfon;
            content_isi += form_foto;

        }else if(param == 'poli'){
            content_isi += form_kode;
            content_isi += form_nama;

        }else if(param == 'layanan'){
            content_isi += form_layanan;
        }else if(param == 'galeri'){
            content_isi += form_foto;
        }
        $("#content-isi").append(content_isi);
        $("#modal-contentFaskes").modal("show");
    });

    $("#form-modal").submit(function(e){
        e.preventDefault();
        //var editor = CKEDITOR.instances['#editor1'].getData();
        //function untuk mengambil value dari ckeditor
        //var data = CKEDITOR.instances.editor1.getData();
        var form = $(this);
        var form_data = new FormData(form[0]);
        var faskes_id = $("input[name=faskes_id]").val();
        $.ajax({
            url : baseUrl + "C_a_faskes/task",
            method:'POST',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success : function(response){
                var res = response;
                if(res > 0){
                 $("#modal-contentFaskes").modal("hide");
                 window.location = baseUrl + "C_a_faskes/content/"+faskes_id;
                }
            }
        });
    });


  });
</script>
