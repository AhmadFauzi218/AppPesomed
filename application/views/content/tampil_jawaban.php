<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Jawaban</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover" id="mydata">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Pertanyaan</th>
												<th>Jawaban</th>
											</tr>
										</thead>
										<tbody id="show_data">
											
										</tbody>
									</table>
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
        url  : '<?php echo base_url() ?>pengguna/dt_jawaban/data_jawaban',
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var no = '1';
          for (var i = 0; i < data.length; i++) {
            html += '<tr>'+
                        '<td align ="center" width="1px">'+ no++ +'</td>'+
                        '<td>'+data[i].username+'</td>'+
                        '<td>'+data[i].pertanyaan+'</td>'+
                        '<td>'+data[i].jawaban+'</td>'+
                        '<td style="text-align:right;">'+
                          
                        '</td>'+
                    '</tr>';
          }
        $('#show_data').html(html);
        }
      });
    }
});

</script>