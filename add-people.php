<?php include './inc/header.php';?>
<?php include './inc/header-nav.php';?>
<?php include './inc/sidebar.php';?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid bg-light-sky rounded-2" id="grad1">
                <h3 class="font-weight-bold">Add People</h3>
                <div class="row">
                    <div class="col-md-6 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <!-- <ul id="progressbar">
                                <li class="active" id="account"><strong>Account</strong></li>
                                <li id="personal"><strong>Personal</strong></li>
                                <li id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>  --><!-- fieldsets -->
                            <fieldset>
                                <div class="">
                                    <h2 class="fs-title">Account Information</h2> 
                                    <div class="form-group">
                                        <label for="my-input">Name</label>
                                        <input id="my-input" class="form-control" type="text" name="">
                                    </div>
                                    <div class="form-group">
                                        <label for="my-email">Email Id</label>
                                        <input id="my-email" class="form-control" type="email" name="">
                                    </div>
                                    <div class="form-group">
                                        <label for="my-phone">Phone Number</label>
                                        <input id="my-phone" class="form-control" type="number" name="">
                                    </div>
                                    <div class="form-group">
                                        <label for="my-designation">Designation</label>
                                        <input id="my-designation" class="form-control" type="text" name="">
                                    </div>
                                    <div class="form-group">
                                        <label for="my-department">Department</label>
                                        <input id="my-department" class="form-control" type="text" name="">
                                    </div>
                                    <div class="form-group">
                                        <span id="photo">photo </span>
                                        <label for="file-upload">Browse<input type="file" id="file-upload" required=""></label>
                                     </div>
                                </div> 
                                <input type="button" name="next" class="next action-button btn btn-warning" value="Save & Continue" />
                            </fieldset>
                            <fieldset>
                                <div class="">
                                    
                                    <div class="form-group">
		                                <label for="my-address">Address</label>
		                                <textarea id="my-address" class="form-control" name="" rows="6"></textarea>
		                            </div>
		                            <div class="form-group">
		                                <label for="my-city">City</label>
		                                <input id="my-city" class="form-control" type="text" name="">
		                            </div>
		                            <div class="form-group">
		                                <label for="my-district">District</label>
		                                <input id="my-district" class="form-control" type="text" name="">
		                            </div>
		                            <div class="form-group">
		                                <label for="my-state">State</label>
		                                <input id="my-state" class="form-control" type="text" name="">
		                            </div>
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next" class="next action-button btn btn-warning" value="Confirm" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2020 © Intranet <a
                    href="https://www.deepredink.com/">deepredink.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    <?php include './inc/footer.php';?>