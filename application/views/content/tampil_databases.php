
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
                        <div class="col-lg-9" style="color: dodgerblue;">
                            <div class="col-md-20">
                                <!-- DATA TABLE-->
                                <div class="au-card recent-report" style="width:130%;">
                                  <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                    <div class="bg-overlay bg-overlay--blue"></div>
                                    <h3>
                                        <i class="zmdi zmdi-comment-text"></i>New Questions</h3>
                                    <!-- <button class="au-btn-plus">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button> -->
                                    <a href="javascript:;" class="au-btn-plus" data-toggle="modal" data-target="#ModalaAdd"><i class="zmdi zmdi-plus"></i></a>
                                </div>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3 table-hover table-striped " align="center" id="mydata" >
                                        <thead>
                                            <tr>
                                                <th align="center" width="1px;">No</th>
                                                <!-- <th>Username</th>
                                                <th>Id Pertanyaan</th> -->
                                                <th>Pertanyaan</th>
                                                <th>Tanggal Pertanyaan</th>
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

                      <!-- Modal -->
                      <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <label class="control-label col-xs-9">Ajukan Pertanyaan</label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                
            </div>
            <form class="form-horizontal">
            <div class="modal-body">
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                            <input name="username" id="username" class="form-control input-lg" type="text" placeholder="Username" style="width:335px;" required autocomplete="off" readonly value="<?php echo $this->session->userdata('username'); ?>">
                        </div>
                    </div>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pertanyaan</label>
                        <span class="text-danger"></span>
                        <div class="col-xs-9">
                            <textarea class="form-control input-lg" placeholder="Pertanyaan" rows="4" name="pertanyaan" autocomplete="off" title="isi pertanyaan" id="pertanyaan" style="width:400px;" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal</label>
                        <span class="text-danger"></span>
                        <div class="col-xs-9">
                            <input name="tgl" id="tgl" class="form-control input-lg" type="date" placeholder="Tanggal" style="width:335px;" required autocomplete="off">
                        </div>
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

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Ubah Pengajuan</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >id permohonan</label>
                        <div class="col-xs-9">
                            <input name="id_pertanyaan_edit" id="id_permohonan2" class="form-control" type="text" placeholder="id permohonan" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >jurusan</label>
                        <div class="col-xs-9">
                            <input name="pertanyaan_edit" id="jurusan2" class="form-control" type="text" placeholder="Jurusan" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >waktu</label>
                        <div class="col-xs-9">
                            <input name="tgl_edit" id="waktu_pelaksanaan2" class="form-control" type="text" placeholder="waktu" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->
        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">

                            <input type="hidden" name="id_pertanyaan" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus pertanyaan ini?</p></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->
       
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
        url  : '<?php echo base_url() ?>pengguna/dt_pengguna/data_pengguna',
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var no = '1';
          for (var i = 0; i < data.length; i++) {
            html += '<tr>'+
                        '<td align ="center" width="1px">'+ no++ +'</td>'+
                        // '<td>'+data[i].username+'</td>'+
                        // '<td>'+data[i].id_pertanyaan+'</td>'+
                        '<td>'+data[i].pertanyaan+'</td>'+
                        '<td>'+data[i].tgl+'</td>'+
                        '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-primary fa fa-pencil item_edit" data="'+data[i].id_pertanyaan+'"></a>'+' '+

                                    '<a href="javascript:;" class="btn btn-danger btn-xs fa fa-times item_hapus" data="'+data[i].id_pertanyaan+'"></a>'+

                        '</td>'+
                    '</tr>';
          }
        $('#show_data').html(html);
        }
      });
    }
   
     $('#btn_simpan').on('click',function(){
    if (!$("#username").val()) {
        alert('Anda Harus Merefresh Terlebih Dahulu');
        return false;
      }
        if (!$("#pertanyaan").val()) {
        alert('Maaf pertanyaan tidak boleh kosong');
        $("#pertanyaan").focus();
        return false;
      }
      if (!$("#tgl").val()) {
        alert('Maaf Tanggal tidak boleh kosong');
        $("#tgl").focus();
        return false;
      }
      var username = $('#username').val();
      var pertanyaan= $('#pertanyaan').val();
      var tgl=$('#tgl').val();

       $.ajax({
        type:"POST",
       url :"<?php echo base_url('pengguna/dt_pengguna/simpan_pengguna/'); ?>",
        dataType:"JSON",
        data: {username:username,pertanyaan:pertanyaan,tgl:tgl},
        success: function(data){
          swal({
    title:"Tambah Pertanyaan",
    text:"Anda Berhasil Bertanya",
    type: "success",
  })
          $('[name = "username"]').val("");
          $('[name = "pertanyaan"]').val("");
          $('[name = "tgl"]').val("");
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
                url  : "<?php echo base_url('pengguna/c_pengguna/get_pengguna')?>",
                dataType : "JSON",
                data : {id_pertanyaan:id_pertanyaan},
                success: function(data){
                  $.each(data,function(id_pertanyaan,pertanyaan,tgl){
                  $('#ModalaEdit').modal('show');
                  $('[name="id_pertanyaan_edit"]').val(data.id_pertanyaan);
                  $('[name="pertanyaan_edit"]').val(data.pertanyaan);
                  $('[name="tgl_edit"]').val(data.tgl);
                });
                }
            });
            return false;
        });
     //Update Barang
        $('#btn_update').on('click',function(){

            var kode=$('#kode2').val();
            var nama=$('#nama2').val();
            var skpd=$('#skpd2').val();
            var no_telp=$('#no_telp2').val();
            var email=$('#email2').val();
            var pertanyaan=$('#pertanyaan2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('pengguna/dt_pengguna/update')?>",
                dataType : "JSON",
                data : {kode:kode,nama:nama,skpd:skpd,no_telp:no_telp,email:email,pertanyaan:pertanyaan},
                success: function(data){
                              swal({
                            title:"Ubah Data",
                            text:"Anda Berhasil Mengubah Data Pengguna",
                            type: "success",
                          })
                    $('[name="kode_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="skpd_edit"]').val("");
                    $('[name="no_telp_edit"]').val("");
                    $('[name="email_edit"]').val("");
                    $('[name="pertanyaan_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });

//Hapus Barang
      $('#show_data').on('click','.item_hapus',function(){
            var kode=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="id_pertanyaan"]').val(kode);
        
        });
       //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var id_pertanyaan=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('pengguna/dt_pengguna/hapus')?>",
            dataType : "JSON",
                    data : {id_pertanyaan:id_pertanyaan},
                    success: function(data){
                              swal({
                        title:"Hapus Data ",
                        text:"Anda Berhasil menghapus",
                        type: "success",
                      })
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
                return false;
            });

 
});
  
    </script>