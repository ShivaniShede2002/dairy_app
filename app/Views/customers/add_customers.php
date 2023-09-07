<?php include(APPPATH . 'Views/Home/header.php') ?>
<!-- menu profile quick info -->
<?php include(APPPATH . 'Views/Home/profilemenu.php') ?>
<!-- /menu profile quick info -->
<!-- <br /> -->

<!-- sidebar menu -->
<?php include(APPPATH . 'Views/Home/sidemenu.php') ?>
<!-- /sidebar menu -->

<!-- top navigation -->
<?php include(APPPATH . 'Views/Home/topmenu.php') ?>
<!-- /top navigation -->


<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Add Customers</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
							action="<?= base_url('CustomersController/store_customers') ?>" method="post">

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Customers
									Name<span class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6">
									<input type="text" id="full_name" name="full_name" required="required"
										class="form-control ">
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="phone">Phone
									Number<span class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6">
									<input type="number" id="phone" name="phone" required="required"
										class="form-control ">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="whatsapp">Whatsapp<span
										class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6">
									<input type="number" id="whatsapp" name="whatsapp" required="required"
										class="form-control ">
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email<span
										class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6">
									<input type="email" id="email" name="email" required="required"
										class="form-control ">
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address<span
										class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6">
									<textarea class="form-control" id="address" name="address" rows="3"
										required></textarea>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="area_id">Area<span
										class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6">
									<select class="select2_single form-control" tabindex="-1" name="area_id"
										id="area_id" for="area_id">
										<option selected>Customer Area</option>
										<?php foreach ($areas as $item): ?>
											<option value="<?= $item['area_id'] ?>"><?= $item['area_name'] ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="latitude">Latitude<span
										class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6">
									<input type="text" id="latitude" name="latitude" required="required"
										class="form-control ">
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align"
									for="longitude">longitude<span class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6">
									<input type="text" id="longitude" name="longitude" required="required"
										class="form-control ">
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="item form-group">
								<div class="col-md-6 col-sm-6 offset-md-3">
									<a href="<?= base_url('CustomersController') ?>" class="btn btn-primary">Cancel</a>

									<!-- <button class="btn btn-primary" type="button">Cancel</button> -->
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- /page content -->


<!-- /footer content -->
<?php include(APPPATH . 'Views/Home/footer.php') ?>