 

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
 <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">The Answer</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center" id="mydata">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                              <th>No</th>
                                              <th>pertanyaan</th>
                                              <th>Username</th>
                                              <th>Jawaban</th>
                                              <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="show_data">
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
                    <script type="text/javascript">

  $(document).ready(function(){
    tampil_data();

   

    function tampil_data(){
      $.ajax({
        type : 'ajax',
        url  : '<?php echo base_url() ?>anggota/dt_table/data_table',
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var no = '1';
          for (var i = 0; i < data.length; i++) {
            html += '<tr>'+
                        '<td align ="center" width="1px">'+ no++ +'</td>'+
                        '<td>'+data[i].pertanyaan+'</td>'+
                        '<td>'+data[i].username+'</td>'+
                        '<td>'+data[i].jawaban+'</td>'+
                        '<td style="text-align:right;">'+
                        

                        '</td>'+
                    '</tr>';
          }
        $('#show_data').html(html);
        }
      });
    }

     $('#btn_simpan').on('click',function(){
      var username = $('#username').val();
      var id_pertanyaan = $('#id_pertanyaan').val();
      var jawaban= $('#jawaban').val();
       $.ajax({
        type:"POST",
       url :"<?php echo base_url('anggota/dt_anggota/simpan_anggota'); ?>",
        dataType:"JSON",
        data: {username:username,id_pertanyaan:id_pertanyaan,jawaban:jawaban},
        success: function(data){
          swal({
    title:"Tambah Pengguna",
    text:"Anda Berhasil Menambah Data Pengguna",
    type: "success",
  })
          $('[name = "username"]').val("");
          $('[name = "id_pertanyaan"]').val("");
          $('[name = "jawaban"]').val("");
          $('#ModalaAdd').modal('hide');
          tampil_data().load();
        }
      });
      return false;
    });
   $('#show_data').on('click','.item_edit',function(){
            var kode=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('anggota/dt_anggota/get_anggota')?>",
                dataType : "JSON",
                data : {kode:kode},
                success: function(data){
                  $.each(data,function(kode,nama,skpd,no_telp,email,pertanyaan){
                  $('#ModalaEdit').modal('show');
                  $('[name="kode_edit"]').val(data.kode);
                  $('[name="nama_edit"]').val(data.nama);
                  $('[name="skpd_edit"]').val(data.skpd);
                  $('[name="no_telp_edit"]').val(data.no_telp);
                  $('[name="email_edit"]').val(data.email);
                  $('[name="pertanyaan_edit"]').val(data.pertanyaan);
                  $('[name="jawaban_anggota"]').val(data.jawaban_anggota);
                });
                }
            });
            return false;
        });
   $('#btn_update').on('click',function(){

            var kode=$('#kode2').val();
            var nama=$('#nama2').val();
            var skpd=$('#skpd2').val();
            var no_telp=$('#no_telp2').val();
            var email=$('#email2').val();
            var pertanyaan=$('#pertanyaan2').val();
            var jawaban_anggota=$('#jawaban_anggota').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('anggota/dt_anggota/update')?>",
                dataType : "JSON",
                data : {kode:kode,nama:nama,skpd:skpd,no_telp:no_telp,email:email,pertanyaan:pertanyaan,jawaban_anggota:jawaban_anggota},
                success: function(data){
                              swal({
                            title:"Jawaban Anggota",
                            text:"Anda Telah Menjawab pertanyaan Pengguna",
                            type: "success",
                          })
                    $('[name="kode_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="skpd_edit"]').val("");
                    $('[name="no_telp_edit"]').val("");
                    $('[name="email_edit"]').val("");
                    $('[name="pertanyaan_edit"]').val("");
                    $('[name="jawaban_anggota"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });


});
</script>