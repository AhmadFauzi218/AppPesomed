
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
<div class="col-lg-10" style="width: 113%;">
            <section class="panel">
              <header class="panel-heading wht-bg fa fa-angle-left">
                <h4 class="gen-case">
                    Questions Pengguna
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Mail">
                      </div>
                    </form>
                  </h4>
              </header>
              <div class="panel-body minimal">
                <div class="mail-option">
                  <div class="chk-all">
                    <div class="pull-left mail-checkbox">
                      <input type="checkbox" class="">
                    </div>
                    <div class="btn-group">
                      <a data-toggle="dropdown" href="#" class="btn mini all">
                        All
                        <i class="fa fa-angle-down "></i>
                        </a>
                      <ul class="dropdown-menu">
                        <li><a href="#"> None</a></li>
                        <li><a href="#"> Read</a></li>
                        <li><a href="#"> Unread</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="btn-group">
                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                      <i class=" fa fa-refresh"></i>
                      </a>
                  </div>
                  <div class="btn-group hidden-phone">
                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                      More
                      <i class="fa fa-angle-down "></i>
                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                      Move to
                      <i class="fa fa-angle-down "></i>
                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                  </div>
                  <ul class="unstyled inbox-pagination">
                    <li><span>1-50 of 99</span></li>
                    <li>
                      <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                    </li>
                    <li>
                      <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="table-inbox-wrap ">
                  <table class="table table-hover" id="mydata">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                              <th>No</th>
                                              <th>Id Pertanyaan</th>
                                              <th>Username</th>
                                              <th>Pertanyaan</th>
                                              <th>Tanggal</th>
                                              <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="show_data">
                                               
                                            </tbody>
                                        </table>
                </div>
              </div>
            </section>
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

                            <input type="hidden" name="id_pertanyaan" id="textkode" value="">
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
        url  : '<?php echo base_url() ?>ketua/dt_ketua/data_ketua',
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var no = '1';
          for (var i = 0; i < data.length; i++) {
            html += '<tr>'+
                        '<td align ="center" width="1px">'+ no++ +'</td>'+
                        '<td>'+data[i].id_pertanyaan+'</td>'+
                        '<td>'+data[i].username+'</td>'+
                        '<td>'+data[i].pertanyaan+'</td>'+
                        '<td>'+data[i].tgl+'</td>'+
                        '<td style="text-align:right;">'+                        
                          '<a href="javascript:;" class="btn btn-danger btn-xs fa fa-times item_hapus" data="'+data[i].id_pertanyaan+'"></a>'+

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
            $('[name="id_pertanyaan"]').val(kode);
        });
       //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var id_pertanyaan=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('ketua/dt_ketua/hapus')?>",
            dataType : "JSON",
                    data : {id_pertanyaan:id_pertanyaan},
                    success: function(data){
                              swal({
                        title:"Hapus Data ",
                        text:"Anda Berhasil Menghapus Data Pertanyaan",
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


<div class="col-sm-10 col-xs-10 golef" style="margin-left: 1%;">
            <section class="panel">

              <header class="panel-heading wht-bg fa fa-angle-left">
              <a href="javascript:;" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#ModalaAdd"><i class="fa fa-plus-square">&nbspJawab</i></a><br><br>  
             
                <h4 class="gen-case">
                    The Display
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Mail">
                      </div>
                    </form>
                  </h4>
              </header>
              <div class="panel-body minimal">
                <div class="mail-option">
                  <div class="chk-all">
                    <div class="pull-left mail-checkbox">
                      <input type="checkbox" class="">
                    </div>
                    <div class="btn-group">
                      <a data-toggle="dropdown" href="#" class="btn mini all">
                        All
                        <i class="fa fa-angle-down "></i>
                        </a>
                      <ul class="dropdown-menu">
                        <li><a href="#"> None</a></li>
                        <li><a href="#"> Read</a></li>
                        <li><a href="#"> Unread</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="btn-group">
                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                      <i class=" fa fa-refresh"></i>
                      </a>
                  </div>
                  <div class="btn-group hidden-phone">
                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                      More
                      <i class="fa fa-angle-down "></i>
                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                      Move to
                      <i class="fa fa-angle-down "></i>
                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                  </div>
                  <ul class="unstyled inbox-pagination">
                    <li><span>1-50 of 99</span></li>
                    <li>
                      <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                    </li>
                    <li>
                      <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="table-inbox-wrap ">
                  <table class="table table-hover" id="mydata">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                              <th>No</th>
                                              <th>Username</th>
                                              <th>id_pertanyaan</th>
                                              <th>Jawaban</th>
                                              <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="show_data2">
                                               
                                            </tbody>
                                        </table>
                </div>
              </div>
            </section>
          </div>
        </div>
             <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <label class="control-label col-xs-7">Jawaban Ketua</label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                  
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                        <small>Ketua</small>
                            <input name="username" id="username" class="form-control input-lg" type="text" placeholder="Nama" style="width:335px;" required autocomplete="off" readonly value="<?php echo $username; ?>">
                        </div>
                    </div>
                </div>


                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >id pertanyaan</label>
                        <div class="col-xs-9">
                            <input name="id_pertanyaan" id="id_pertanyaan" class="form-control input-lg" type="text" placeholder="Tulis Id Pertanyaan" style="width:335px;" required autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jawaban</label>
                        <div class="col-xs-9">
                            <textarea class="form-control input-lg" placeholder="Jawaban" rows="4" name="jawaban" autocomplete="off" title="Jawab" id="jawaban" style="width:400px;"></textarea>
                        </div>
                    </div>
                </div>

                  <div class="form-body">
                    <div class="form-group">
                        <!-- <label class="control-label col-xs-3" >Level</label> -->
                        <div class="col-xs-9">
                            <input name="level" id="level2" class="form-control input-lg" type="hidden" style="width:335px;" required autocomplete="off" value="ketua">
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
        <div class="modal fade" id="ModalHapus2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">

                            <input type="hidden" name="id" id="textkode2" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus barang ini?</p></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus2">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
<script type="text/javascript">

  $(document).ready(function(){
    tampil_data2();

   

    function tampil_data2(){
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
                        '<td>'+data[i].username+'</td>'+
                        '<td>'+data[i].id_pertanyaan+'</td>'+
                        '<td>'+data[i].jawaban+'</td>'+
                        '<td style="text-align:right;">'+
                             '<a href="javascript:;" class="btn btn-danger btn-xs fa fa-times item_hapus" data="'+data[i].id+'"></a>'+                        
                        '</td>'+
                    '</tr>';
          }
        $('#show_data2').html(html);
        }
      });
    }

     $('#btn_simpan').on('click',function(){
      if (!$("#id_pertanyaan").val()) {
        alert('id pertanyaan Belum Diisi');
        $("#id_pertanyaan").focus();
        return false;
      }
       if (!$("#jawaban").val()) {
        alert('Jawaban Belum Diisi');
        $("#jawaban").focus();
        return false;
      }
      var username = $('#username').val();
      var id_pertanyaan = $('#id_pertanyaan').val();
      var jawaban= $('#jawaban').val();
      var level= $('#level2').val();
       $.ajax({
        type:"POST",
       url :"<?php echo base_url('anggota/dt_anggota/simpan_anggota'); ?>",
        dataType:"JSON",
        data: {username:username,id_pertanyaan:id_pertanyaan,jawaban:jawaban,level:level},
        success: function(data){
          swal({
    title:"Tambah Pengguna",
    text:"Anda Berhasil Menjawab Pertanyaan Dari Pengguna",
    type: "success",
  })
          $('[name = "username"]').val("");
          $('[name = "id_pertanyaan"]').val("");
          $('[name = "jawaban"]').val("");
          $('[name = "level"]').val("");
          $('#ModalaAdd').modal('hide');
          tampil_data2().load();
        }
      });
      return false;
    });
        $('#show_data2').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus2').modal('show');
            $('[name="id"]').val(id);
        });
            //Hapus Barang
  $('#btn_hapus2').on('click',function(){
            var id=$('#textkode2').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('anggota/dt_table/hapus_jawaban')?>",
            dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                              swal({
                        title:"Hapus Data ",
                        text:"Anda Berhasil Menghapus Data Pengguna",
                        type: "success",
                      })
                            $('#ModalHapus2').modal('hide');
                            tampil_data2();
                    }
                });
                return false;
            });


});
</script>