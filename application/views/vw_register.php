<body>
	<style>
		body{
			background-image:url("https://images.pexels.com/photos/3165335/pexels-photo-3165335.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
			background-size: cover;
			background-position: center;
		}
		form{
  			padding: 4em 4em 2em;
			margin: auto;
 			box-shadow: 3px 3px 10px rgba(1,4,5,0.3);
  			border-radius: 20px;			
		}
		.card{
			opacity: 0.87;
			margin-left: 250px;
			margin-right: 250px;
			font-weight: 650;
			margin-top: 2.70cm;

		}
		.card-header{
			color: black;
			font-weight: 250;
			text-decoration-color: gray;
			font-family:sans-serif;
			text-align: center;
			font-size: x-large;
			
		}
		.form-group{
			color: black;
		}
		.form-control{
			border-radius: 9000px;
		}
		.btn{
			border-radius: 5px;
		}
</style>
		
	    <div class="container">
	        <div class="card">
	            <div class="card-header">
	                Create Account
	            </div>
	            <div class="card-body">
					
	                <?php
                    if ($this->session->flashdata('error') != '') {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    }
                    ?>
	                <form method="post" action="<?php echo base_url(); ?>index.php/register/proses">
					
	                    <div class="form-group">
	                        <label for="nama">Nama</label>
	                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
	                    </div>
	                    <div class="form-group">
	                        <label for="username">Username</label>
	                        <input type="text" class="form-control" name="username" id="username"
	                            placeholder="Username">
	                    </div>
	                    <div class="form-group">
	                        <label for="password">Password</label>
	                        <input type="password" class="form-control" name="password" id="password"
	                            placeholder="Password">
	                    </div>

	                    <button type="submit" class="btn btn-primary form-control">Sign Up</button>
	                </form>
	            </div>
	        </div>
	    </div>

	</body>