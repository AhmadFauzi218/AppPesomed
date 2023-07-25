<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Dashboard</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding bg-primary text-center">
									<div class="padding-top-30 padding-bottom-30">
										<i class="fa fa-thumbs-o-up fa-5x"></i>
										<h3>Applikasi Pemilihan Sosial Media</h3>
									</div>
								</div>
								<div class="col-lg-12 col-md-12" style="color: dodgerblue;">
                            <div class="col-md-6">
                                <!-- DATA TABLE-->
                                <div class="au-card recent-report" style="">
                                  <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                    <div class="bg-overlay bg-overlay--blue"></div>
                                    <h3>
                                        <i class="zmdi zmdi-comment-text"></i> 

                                  <?php

                                    $user = 'root';
                                    $pass = '';
                                    $db = 'db_konsultasi';

                                    //Replace 'sample tutorial' with the name of your database

                                    $con = mysqli_connect("localhost", $user, $pass, $db);

                                    $sql = "SELECT * FROM user where level='anggota'";

                                    $result = mysqli_query($con, $sql);

                                    $num_rows = mysqli_num_rows($result);

                                    printf("Data User Pendaftar: %d\n", $num_rows);

                                    ?>
                                    <!-- <button class="au-btn-plus">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button> -->
                                    <!-- <a href="javascript:;" class="au-btn-plus" data-toggle="modal" data-target="#ModalaAdd"><i class="zmdi zmdi-plus"></i></a> -->
                                </div>
                               

                          </div>
                        </div>
                       <div class="col-md-6">
                                <!-- DATA TABLE-->
                                <div class="au-card recent-report" style="">
                                  <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                    <div class="bg-overlay bg-overlay--blue"></div>
                                    <h3>

                                        <i class="zmdi zmdi-comment-text"></i>
                                        <?php

                                    $user = 'root';
                                    $pass = '';
                                    $db = 'db_konsultasi';

                                    //Replace 'sample tutorial' with the name of your database

                                    $con = mysqli_connect("localhost", $user, $pass, $db);

                                    $sql = "SELECT * FROM jawaban a INNER JOIN pertanyaan b ON a.id_pertanyaan=b.id_pertanyaan ORDER BY b.id_pertanyaan ASC";

                                    $result = mysqli_query($con, $sql);

                                    $num_rows = mysqli_num_rows($result);

                                    printf("Data User Menjawab: %d\n", $num_rows);

                                    ?>

                                </h3>
                                    <!-- <button class="au-btn-plus">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button> -->
                                    <!-- <a href="javascript:;" class="au-btn-plus" data-toggle="modal" data-target="#ModalaAdd"><i class="zmdi zmdi-plus"></i></a> -->
                                </div>
                               

                          </div>
                        </div>

                        <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-line-chart"></i> Grafik </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="">Filter Nama</label>
                                    <select class="filter_nama" style="width: 150px;">
                                        <option value=""></option>
                                        <?php foreach ($nama as $nm) : ?>
                                            <option value="<?= $nm->username; ?>"><?= $nm->pertanyaan; ?><?= $nm->jawaban; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="init-loading grafik" style="height:600px;width:100%;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xs-6">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-line-chart"></i> Grafik Stacked</h3>
                            </div>
                            <div class="box-body">
                                <div class="init-loading grafik_stacked" style="height:640px;width:100%;"></div>
                            </div>
                        </div>
                    </div> -->
                      </div>
							</div>

