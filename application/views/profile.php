    <!-- Content Section -->

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h3 style="text-align: center; margin-bottom: 2%"> Player Profile</h3>
            </div>
        </div>
        <div class="" style="width: auto; margin-left:280px;">

            <!-- Modal -->
            <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url() . 'profile/update' ?>" method="post">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control"
                                        value="<?php echo $this->session->userdata('username') ?>">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- End Modal -->


            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0" name="username"><?php echo $this->session->userdata('username') ?> </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"></p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <div style="width: auto; text-align: center;">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#editprofile">Edit Profile
            </button>
        </div>

    </div>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    </html>