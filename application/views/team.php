<!-- Carousel Section -->
<?php if ($this->session->flashdata('flash')){ ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php
    } 
    else if ($this->session->flashdata('fail')){ ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('fail'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php
   }
?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="opacity:0.9;">
        <div class="carousel-item active">
            <img src="https://media-management-service.s3.amazonaws.com/media/images/fd795da30ed20c595fa1967f70bab41d_large_cover.34.original.jpg"
                class="d-block w-100" alt="">
            <div class="carousel-caption" style="padding-bottom: 23%;">
                <h1>Find or Create Your Team Here</h1>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.esports.gg/wp-content/uploads/2022/07/29041843/Boom-Esports-skem-fbz-Tims-Yopaj-JaCkky-Mushi.jpg"
                class="d-block w-100" alt="...">
            <div class="carousel-caption" style="padding-bottom: 23%;">
                <h1>Find or Create Your Tournament Here</h1>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://wp.revivaltv.id/wp-content/uploads/2017/08/team-secret-ti7-roster.png"
                class="d-block w-100" alt="...">
            <div class="carousel-caption" style="padding-bottom: 23%;">
                <h1>Find or Create Your Tournament Here</h1>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
</div>

<!-- End Carousel Section -->

<!-- Active Team Section -->

<section class="container-fluid mt-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mb-3" style="">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://pbs.twimg.com/profile_images/1562137648570851328/eg1BT8yn_400x400.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Available Team</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3" style="">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://pbs.twimg.com/profile_images/1562137648570851328/eg1BT8yn_400x400.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Available Team</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mb-3" style="">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://pbs.twimg.com/profile_images/1562137648570851328/eg1BT8yn_400x400.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Available Team</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3" style="">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://pbs.twimg.com/profile_images/1562137648570851328/eg1BT8yn_400x400.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Available Team</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Active Team Section -->

<!-- Create Team Section -->
<section class="container-fluid" style="background-color: rgba(8, 8, 8, 0.636);">
    <div class="container p-5" style="color: white;">
        <h2 style="text-align: center;">Create Team</h2>
        <br>
        <form action = "<?= base_url(); ?>controller_team/tambahTeam" method="post"> 
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Team</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp"><?php echo set_value('nama'); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi Team</label>
                <textarea class="form-control" id="deskripsi"name="deskripsi" aria-describedby="emailHelp"><?php echo set_value('deskripsi'); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Games</label>
                <select id="game" name="game" class="form-select">
                    <option>Dota 2</option>
                    <option>MLBB</option>
                    <option>Valorant</option>
                    <option>PUBG</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kuota peserta</label>
                <input type="number" id="member" name="member" min="1" max="32">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
<!-- End Create Team Section -->

<!-- Tables -->
<div class="container">
    <div class="row text-center">
        <div class="col py-5">
            <h2>List Team</h2>
        </div>
    </div>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Nama Team</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Jenis Game</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php
                $i = 1;
                foreach ($team as $data):
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo  $i ?></th>
                    <td><?php echo $data['id_team'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['deskripsi'] ?></td>
                    <td><?php echo $data['jenis_game'] ?></td>
                    <td>
                    <a class="btn btn-info" href="" 
                        onclick="passInfoData('<?=$data['nama']?>', '<?=$data['deskripsi']?>', '<?=$data['jenis_game']?>', '<?=$data['member']?>')"data-bs-toggle="modal" data-bs-target="#infoModal">Info</a>

                        <a class="btn btn-primary" id="update" href=""
                        onclick="passUpdateData(<?=$data['id_team']?>, '<?=$data['nama']?>', '<?=$data['deskripsi']?>', '<?=$data['jenis_game']?>')"data-bs-nama="<?= $data['nama']?>" data-bs-toggle="modal" data-bs-target="#updateModal">Update</a>
                        
                        <a class="btn btn-primary" href="<?php base_url(); ?>controller_team/joinTeam/<?php echo $data['id_team'].'/'.$this->session->userdata('username')?>" onclick="">Join</a>

                        <?php
                        if($data['id_team'] == $this->session->userdata('id_team')){
                            ?><a class="btn btn-danger" href="<?php base_url(); ?>controller_team/leftTeam/<?php echo $this->session->userdata('username')?>" onclick="">Leave</a>
                        <?php
                        }?>
                        
                    </td>
                </tr>
            </tbody>
            <?php
                $i++;
                endforeach 
            ?>
    </table>
</div>


</body>

<!-- Modal Update -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>controller_team/updateTeam" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id</label>
                <input type="text" class="form-control" id="idUpdate" name="idUpdate" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Team</label>
                <input type="text" class="form-control" id="namaUpdate" name="namaUpdate">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsiUpdate" name="deskripsiUpdate"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Games</label>
                <select id="gameUpdate" name="gameUpdate" class="form-select">
                    <option>Dota 2</option>
                    <option>MLBB</option>
                    <option>Valorant</option>
                    <option>PUBG</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Info -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title align-middle" id="exampleModalLabel">INFO TEAM</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <p id="namaInfo"></p>
                <p id="gameInfo"></p>
                <p id="deskripsiInfo"></p>
                <P id="memberInfo"></p>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

        function passUpdateData(id, nama, deskripsi, jenis, member) {
            $('#idUpdate').val(id);
            $('#namaUpdate').val(nama);
            $('#deskripsiUpdate').html(deskripsi);
            $('#gameUpdate').val(jenis);
            $('#memberUpdate').html(member);
        }

        function passInfoData(nama, deskripsi, game, member) {
            $('#namaInfo').html("Nama Turnamen: " + nama);
            $('#deskripsiInfo').html("Deskripsi: " + deskripsi);
            $('#gameInfo').html("Game yang dimainkan: " + game);
            $('#memberInfo').html("Jumlah member: " + member);
        }

        function updateData(){
            var nama = ($('#namaUpdate').val());
            var deskripsi = ($('#deskripsiUpdate').val());
            if(nama == ""){
                alert("Nama belum diisi");
            } else if(deskripsi == ""){
                alert("Deskripsi belum diisi");
            }  
        }

        // function joinTeam(id_team, username){
        //    if(empty ($username)){
        //         $username = set_userdata();
        //     } else {
        //         return "Terjadi kesalahan saat bergabung dengan tim. Silakan coba lagi.";
        //     } else {
        //         return "Pengguna sudah menjadi anggota tim."; 
        //     }
        // }
</script>

</html>