<body>
    <style>
        body{
            background-image:url(https://images.pexels.com/photos/3165335/pexels-photo-3165335.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            background-size: cover;
            background-position: center;
        }
    </style>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">
                <?php
                if ($this->session->flashdata('success_register') != '') {
                    echo '<div class="alert alert-success mt-5" role="alert">';
                    echo $this->session->flashdata('success_register');
                    echo '</div>';
                }
                ?>
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <style>
                            body{
                                background-color: aliceblue;
                                opacity: 0.87;
                            }
                        </style>
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">

                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login to Continue</h1>
                                    </div>

                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form method="post" class="user" action="<?php echo base_url('auth/login') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id=""
                                                aria-describedby="" placeholder="Username" name="username">
                                            <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                            <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>') ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary form-control">Login</button>

                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <p class="small">Don't have an account? <a href="<?php echo base_url('register/index') ?>">Sign Up Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>