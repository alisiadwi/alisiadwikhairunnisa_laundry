<?php 
session_start();
include_once '../template/header.php'; 
include_once '../template/sidebar.php'; 
include_once '../template/topbar.php'; 
?>

<?php
include_once '../../controllers/c_outlet.php';

$outlet = new c_outlet();
?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Tambah Pengguna </small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                 
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <!-- start form  -->
            <div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Tambah Pengguna</h2>
									<ul class="nav navbar-right panel_toolbox">
										
								</div>
								<div class="x_content">
									<br />
									<form action="../../routers/r_pengguna.php?aksi=tambah" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="id" class="form-control" hidden>
											</div>
										</div>
										
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="username" class="form-control" type="text" name="username">
											</div>
										</div>
                                        <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="password" class="form-control" type="password" name="password">
											</div>
                                        </div>
                                        
                                        <div class="item form-group">
											<label for="role" class="col-form-label col-md-3 col-sm-3 label-align">Role</label>
											<div class="col-md-6 col-sm-6 ">
                                                 <select id="role" class="form-control" name="role">
                                            <option>Choose option</option>
                                            <option value ="owner">Owner</option>
                                            <option value ="kasir">Kasir</option>
                                            <option value ="admin">Admin</option>
                                        </select>
											</div>
										</div>

										<div class="item form-group">
											<label for="outlet" class="col-form-label col-md-3 col-sm-3 label-align">Outlet</label>
											<div class="col-md-6 col-sm-6 ">
                                                <select id="outlet" class="form-control" name="id_outlet">
                                            	<option>Choose option</option>

                                            		<?php foreach ($outlet->tampil() as $o) { ?>
														<option value="<?= $o->id ?>"><?= $o->nama ?></option>
													<?php } ?> 
                                            	</select>
											</div>
											<div class="ln_solid"></div>

										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="submit" name="tambah">Simpan</button>
											</div>
										</div>
										
									</form>
								</div>
							</div>
						</div>
					</div>			
            <!-- end form  -->
											
          </div>
        </div>
        <!-- /page content -->
<?php include_once '../template/footer.php';?>
