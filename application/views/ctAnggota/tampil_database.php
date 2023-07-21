 

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
 <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                          <!--   <a href="javascript:;" class="btn btn-plus" data-toggle="modal" data-target="#ModalaAdd"><i class="zmdi zmdi-plus">Jawab</i></a><br><br>   -->
                                <h4 class="header-title">Questions Pengguna</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center" id="mydata">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                              <th>No</th>
                                              
                                              <th>Username</th>
                                              <th>pertanyaan</th>
                                              <th>Tanggal</th>
                                              <th></th>
                                                </tr>
                                            </thead<>
                                            <tbody id="show_data">
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                         <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <label class="control-label col-xs-2">Jawab Pertanyaan</label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <!-- <label class="control-label col-xs-3" >Id Pertanyaan</label> -->
                        <div class="col-xs-9">
                            <input name="id_pertanyaan" id="id_pertanyaan2" class="form-control" type="hidden" placeholder="Id Pertanyaan" style="width:335px;" readonly autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <!-- <label class="control-label col-xs-3" >Username</label> -->
                        <div class="col-xs-9">
                            <input name="username" id="username2" class="form-control" type="hidden" placeholder="Username" style="width:335px;" required autocomplete="off" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pertanyaan</label>
                        <div class="col-xs-9">
                            <textarea class="form-control input-lg" placeholder="Pertanyaan" rows="4" name="pertanyaan" autocomplete="off" title="Isi Pertanyaan" id="pertanyaan2" style="width:400px;" readonly></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal</label>
                        <div class="col-xs-9">
                            <input name="tgl" id="tgl2" class="form-control" type="text" placeholder="Tanggal" style="width:335px;" required autocomplete="off" readonly>
                        </div>
                    </div>


                    <div class="form-group">
                        <!-- <label class="control-label col-xs-3" >username</label> -->
                        <div class="col-xs-9">
                            <input name="username_add" id="username" class="form-control" type="hidden" placeholder="Username" style="width:335px;" required autocomplete="off" readonly value="<?php echo $username; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jawaban</label>
                        <div class="col-xs-9">
                            <textarea class="form-control input-lg" placeholder="Jawaban" rows="4" name="jawaban_add" autocomplete="off" title="Isi Jawaban" id="jawaban" style="width:400px;" ></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                       <!--  <label class="control-label col-xs-3" >Level</label> -->
                        <div class="col-xs-9">
                            <input name="level" id="level" class="form-control" type="hidden" placeholder="Username" style="width:335px;" required autocomplete="off" readonly value="anggota">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-info" id="btn_simpan">Save</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">

                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus barang ini?</p></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
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
        url  : '<?php echo base_url() ?>anggota/dt_anggota/data_anggota',
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var no = '1';
          for (var i = 0; i < data.length; i++) {
            html += '<tr>'+
                        '<td align ="center" width="1px">'+ no++ +'</td>'+
                        // '<td>'+data[i].id_pertanyaan+'</td>'+
                        // '<td>'+data[i].username+'</td>'+
                        '<td>'+data[i].pertanyaan+'</td>'+
                        '<td>'+data[i].tgl+'</td>'+
                        '<td style="text-align:right;">'+
                          '<a href="javascript:;" class="btn btn-info btn-xs fa fa-pencil item_edit" data="'+data[i].id_pertanyaan+'"></a>'+
                        '</td>'+
                    '</tr>';
          }
        $('#show_data').html(html);
        }
      });
    }

     $('#btn_simpan').on('click',function(){
        if (!$("#jawaban").val()) {
        alert('Jawaban Belum Diisi');
        $("#jawaban").focus();
        return false;
      }
      var username = $('#username').val();
      var id_pertanyaan = $('#id_pertanyaan2').val();
      var jawaban= $('#jawaban').val();
      var level= $('#level').val();
       $.ajax({
        type:"POST",
       url :"<?php echo base_url('anggota/dt_anggota/simpan_anggota'); ?>",
        dataType:"JSON",
        data: {username:username,id_pertanyaan:id_pertanyaan,jawaban:jawaban,level:level},
        success: function(data){
          swal({
    title:"Tambah Jawaban",
    text:"Anda Berhasil Menjawab ",
    type: "success",
  })
          $('[name = "username_add"]').val("");
          $('[name = "id_pertanyaan"]').val("");
          $('[name = "jawaban_add"]').val("");
          $('[name = "level"]').val("");
          $('#ModalaAdd').modal('hide');
          tampil_data().load();
        }
      });
      return false;
    });
   $('#show_data').on('click','.item_edit',function(){
            var id_pertanyaan=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('anggota/dt_anggota/get_anggota')?>",
                dataType : "JSON",
                data : {id_pertanyaan:id_pertanyaan},
                success: function(data){
                  $.each(data,function(id_pertanyaan,username,pertanyaan,tgl){
                  $('#ModalaEdit').modal('show');
                  $('[name="id_pertanyaan"]').val(data.id_pertanyaan);
                  $('[name="username"]').val(data.username);
                  $('[name="pertanyaan"]').val(data.pertanyaan);
                  $('[name="tgl"]').val(data.tgl);
                });
                }
            });
            return false;
        });
   // $('#btn_update').on('click',function(){

   //          var kode=$('#kode2').val();
   //          var nama=$('#nama2').val();
   //          var skpd=$('#skpd2').val();
   //          var no_telp=$('#no_telp2').val();
   //          var email=$('#email2').val();
   //          var pertanyaan=$('#pertanyaan2').val();
   //          var jawaban_anggota=$('#jawaban_anggota').val();
   //          $.ajax({
   //              type : "POST",
   //              url  : "<?php echo base_url('anggota/dt_anggota/update')?>",
   //              dataType : "JSON",
   //              data : {kode:kode,nama:nama,skpd:skpd,no_telp:no_telp,email:email,pertanyaan:pertanyaan,jawaban_anggota:jawaban_anggota},
   //              success: function(data){
   //                            swal({
   //                          title:"Jawaban Anggota",
   //                          text:"Anda Telah Menjawab pertanyaan Pengguna",
   //                          type: "success",
   //                        })
   //                  $('[name="kode_edit"]').val("");
   //                  $('[name="nama_edit"]').val("");
   //                  $('[name="skpd_edit"]').val("");
   //                  $('[name="no_telp_edit"]').val("");
   //                  $('[name="email_edit"]').val("");
   //                  $('[name="pertanyaan_edit"]').val("");
   //                  $('[name="jawaban_anggota"]').val("");
   //                  $('#ModalaEdit').modal('hide');
   //                  tampil_data();
   //              }
   //          });
   //          return false;
   //      });


});
</script>