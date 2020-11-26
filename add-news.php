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
                <h3 class="font-weight-bold mb-4">Add an Announcement</h3>

                <div class="row mb-5">
                    <div class="col col-md-6">
                        <form method="get" action="">
                            <div class="form-group">
                                <label for="my-input">Headline</label>
                                <input id="my-input" class="form-control" type="text" name="">
                            </div>
                            <div class="form-group">
                                <label for="my-textarea">Extract</label>
                                <textarea id="my-textarea" class="form-control" name="" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <span id="photo">Upload Featured Image</span>
                                <label for="file-upload">Browse<input type="file" id="file-upload" required=""></label>
                             </div>
                            <button type="submit" class="btn btn-warning mt-3 px-4">Save draft & Preview</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-10 col-sm-12">
                        <div class="white-box">
                            <h3 class="font-weight-bold mb-3">Announcement</h3>
                            <div class="card">
                                <div class="card-body p-0 row">
                                    <div class="col-md-4 col-sm-5">
                                        <img class="img-fluid" src="./plugins/images/Holdiays.png" alt="" class="rounded-1">
                                    </div>
                                    <div class="col-md-8 col-sm-7">
                                        <h5 class="text-blue font-weight-bold">Arijit singh</h5>
                                        <div class="mb-3">
                                            <span class="text-dark">Donec ac condimentum massa. Etiam pellentesque
                                                pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui
                                                pellentesque molestie feugiat. Aenean commodo dui </span>
                                        </div>
                                        <a href="javacript:void(0)"
                                            class="btn btn-primary mb-0 rounded-1 py-1 px-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning mt-3 px-4">Publish</button>
                    </div>
                    <!-- /.col -->
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