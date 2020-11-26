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
            <div class="container-fluid bg-light-sky rounded-2">
                <h3 class="font-weight-bold">Add People</h3>
                <div class="row mb-5">
                    <div class="col-12 col-md-6">
                        <form action="">
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
                                <label for="my-photo">Photo</label>
                                <input id="my-photo" class="form-control" type="file" name="">
                            </div>
                            <button type="submit" class="btn btn-warning px-3">Save & Continue</button>
                        </form>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    <?php include './inc/footer.php';?>