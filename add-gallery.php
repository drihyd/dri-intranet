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
                <h3 class="font-weight-bold">Create a Gallery</h3>
                <div class="row mb-5">
                    <div class="col-12 col-md-6">
                        <form action="">
                            <div class="form-group">
                                <label for="my-input">Gallery</label>
                                <input id="my-input" class="form-control" type="text" name="">
                            </div>
                            <div class="form-group">
                                <label for="my-textarea">Description</label>
                                <textarea id="my-textarea" class="form-control" name="" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="my-textarea">Define a few hastags</label>
                                <textarea id="my-textarea" class="form-control" name="" rows="3"></textarea>
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