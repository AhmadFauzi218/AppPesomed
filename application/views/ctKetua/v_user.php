
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
<div class="col-lg-10" style="width: 113%;">
          
          <div class="col-md-12 mt" style="width: 100%;">
             <a href="javascript:;" class="btn btn-primary btn-lg btn-block btn-round" data-toggle="modal" data-target="#ModalaAdd"><i class="fa fa-plus-circle">&nbspTambah User</i></a><br><br>  
             
            <div class="content-panel">
              <table class="table table-hover" id="mydata">
                <h4><i class="fa fa-angle-right"></i> User</h4>
                <hr>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Skpd</th>
                    <th>Email</th>
                    <th>No Telpn</th>
                    <th>Level</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
              </table>
            </div>
          </div>

        </div><!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">

                            <input type="hidden" name="id" id="textkode" value="">
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
        <!--END MODAL HAPUS-->
         <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <label class="control-label col-xs-7">Tambah User</label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                  
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">                        
                            <input name="username" id="username" class="form-control input-lg" type="text" placeholder="Username" style="width:335px;" required autocomplete="off"  >
                        </div>
                    </div>
                </div>


                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" id="password" class="form-control input-lg" type="password" placeholder="password" style="width:335px;" required autocomplete="off" title="password menggunakan md5">
                        </div>
                    </div>
                </div>


                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >SKPD</label>
                        <div class="col-xs-9">
                            <input name="skpd" id="skpd" class="form-control input-lg" type="text" placeholder="SKPD" style="width:335px;" required autocomplete="off" title="isi skpd">
                        </div>
                    </div>
                </div>

                 <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Email</label>
                        <div class="col-xs-9">
                            <input name="email" id="email" class="form-control input-lg" type="text" placeholder="EMAIL" style="width:335px;" required autocomplete="off" title="Isi Email Dengan Benar">
                        </div>
                    </div>
                </div>              

                 <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Telpn</label>
                        <div class="col-xs-9">
                            <input name="no_telpn" id="no_telpn" class="form-control input-lg" type="text" placeholder="NO Telpn" style="width:335px;" required autocomplete="off" title="Isi No Telpn Dengan Benar">
                        </div>
                    </div>
                </div>

            <div class="form-body">
                <div class="form-group">
                   <label class="control-label col-xs-3" >Level</label>             
                <div class="col-xs-9">
                    <select class="form-control"  id="level" name="level" style="width:335px;">
                        <option value="">~~Level User~~</option>
                        <option value="pengguna">Pengguna</option>
                        <option value="anggota">Anggota</option>
                        <option value="ketua">Ketua</option>
                    </select>
                </div>
                </div>
              </div>

        </div>
     </form>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-info" id="btn_simpan">Save</button>
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
        url  : '<?php echo base_url() ?>ketua/user/data_user',
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var no = '1';
          for (var i = 0; i < data.length; i++) {
            html += '<tr>'+
                        '<td align ="center" width="1px">'+ no++ +'</td>'+
                        '<td>'+data[i].username+'</td>'+
                        '<td>'+data[i].password+'</td>'+
                        '<td>'+data[i].skpd+'</td>'+
                        '<td>'+data[i].email+'</td>'+
                        '<td>'+data[i].no_telpn+'</td>'+
                        '<td>'+data[i].level+'</td>'+
                        '<td style="text-align:right;">'+                        
                          '<a href="javascript:;" class="btn btn-danger fa fa-times item_hapus" data="'+data[i].id+'">Hapus</a>'+

                        '</td>'+
                    '</tr>';
          }
        $('#show_data').html(html);
        }
      });
    }
          $('#show_data').on('click','.item_hapus',function(){
            var kode=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="id"]').val(kode);
        });
       //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var id=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('ketua/user/hapus')?>",
            dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                              swal({
                        title:"Hapus Data ",
                        text:"Anda Berhasil Menghapus User",
                        type: "success",
                      })
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
                return false;
            });

    $('#btn_simpan').on('click',function(){
      if (!$("#username").val()) {
        alert('Username Belum Diisi');
        $("#username").focus();
        return false;
      }
       if (!$("#password").val()) {
        alert('Password Belum Diisi');
        $("#password").focus();
        return false;
      }      
       if (!$("#level").val()) {
        alert('Level User Belum Diisi');
        $("#level").focus();
        return false;
      }
        var username = $('#username').val();
        var password = $('#password').val();
        var skpd= $('#skpd').val();
        var email= $('#email').val();
        var no_telpn= $('#no_telpn').val();
        var level= $('#level').val();
       $.ajax({
        type:"POST",
       url :"<?php echo base_url('ketua/user/simpan_user'); ?>",
        dataType:"JSON",
        data: {username:username,password:password,skpd:skpd,email:email,no_telpn:no_telpn,level:level},
        success: function(data){
          swal({
    title:"Tambah User",
    text:"Anda Berhasil Menambahkan User ",
    type: "success",
  })
          $('[name = "username"]').val("");
          $('[name = "password"]').val("");
          $('[name = "skpd"]').val("");
          $('[name = "email"]').val("");
          $('[name = "no_telpn"]').val("");
          $('[name = "level"]').val("");
          $('#ModalaAdd').modal('hide');
          tampil_data().load();
        }
      });
      return false;
    });


});
</script>
