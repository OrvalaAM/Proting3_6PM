<!-- Content Section -->

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
            <img src="https://wallpapercave.com/wp/wp2532627.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption" style="padding-bottom: 23%;">
                <h1>Find or Create Your Tournament Here</h1>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://i.pinimg.com/originals/36/dc/6a/36dc6a363d5009a70ea3d72ea071ef5f.jpg"
                class="d-block w-100" alt="...">
            <div class="carousel-caption" style="padding-bottom: 23%;">
                <h1>Find or Create Your Tournament Here</h1>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://i.pinimg.com/originals/c6/32/b3/c632b3bc2ec8f30871d02bb21d3e29e2.jpg"
                class="d-block w-100" alt="...">
            <div class="carousel-caption" style="padding-bottom: 23%;">
                <h1>Find or Create Your Tournament Here</h1>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
</div>

<!-- End Content Section -->


<!-- Card Section -->
<section class="container-fluid mt-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DOTA 2</h5>
                        <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Valorant</h5>
                        <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mobile Legend</h5>
                        <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PUBG</h5>
                        <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="w-100">
                <a href="" style="font-size: 14px;">More Games >></a>
            </div>
        </div>
    </div>
</section>
<!-- End Card Section -->

<br />
<br />

<!-- Create Tournament Section -->
<section class="container-fluid" style="background-color: rgba(8, 8, 8, 0.636);">
    <div class="container p-5" style="color: white;">
        <h2 style="text-align: center;">Create Tournament</h2>
        <br>
        <form action="<?= base_url(); ?>controller_tournament/tambahTournament" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Turnamen</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama'); ?>">
                <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" aria-describedby="emailHelp"> <?php echo set_value('deskripsi'); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tempat</label>
                <textarea class="form-control" id="tempat" name="tempat" aria-describedby="emailHelp"> <?php echo set_value('tempat'); ?></textarea>
                <small class="form-text text-danger"><?= form_error('tempat') ?>.</small>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp"></textarea>
                <small class="form-text text-danger"><?= form_error('tanggal') ?>.</small>
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
                <input type="number" id="kuota" name="kuota" min="1" max="32">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
<!-- End Create Tournament Section -->

<br />
<br />

<!-- Schedule Section -->

<section class="container-fluid">
    <h2 style="text-align: center;">Schedule</h2>
    <br>
    <div class="container-fluid">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Turnamen</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Peserta</th>
                </tr>
            </thead>
            <?php
                $i = 1;
                foreach ($tournament as $data):
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo  $i ?></th>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['deskripsi'] ?></td>
                    <td>
                        <a class="btn btn-info" href="" onclick="passInfoData('<?=$data['nama']?>', '<?=$data['deskripsi']?>', 
                        '<?=$data['tempat']?>', '<?=$data['tanggal']?>', '<?=$data['jenis_games']?>')"
                        data-bs-toggle="modal" data-bs-target="#infoModal">Info</a>

                        <a class="btn btn-primary" href="<?php base_url(); ?>controller_tournament/gabungTournament/<?php echo $data['id_tour'].'/'.$this->session->userdata('nama_team')?>" onclick="">Join</a>

                        
                    </td>
                    <td><?php $jumlah = 0;
                    foreach($participant as $peserta){
                        if($data['id_tour'] == $peserta['id_tour']){
                            ?> <li>
                                <?php
                                    echo $peserta['nama'];
                                    $jumlah++;
                                ?>
                            </li><?php
                        }
                    }
                    echo 'Total peserta: '.$jumlah.'/'.$data['kuota'];?></td>
                </tr>
            </tbody>
            <?php
                $i++;
                endforeach 
            ?>
        </table>
    </div>
</section>

<!-- Modal Update -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>controller_tournament/ubahTournament" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id</label>
                <input type="text" class="form-control" id="idUpdate" name="idUpdate" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Turnamen</label>
                <input type="text" class="form-control" id="namaUpdate" name="namaUpdate">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsiUpdate" name="deskripsiUpdate"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tempat</label>
                <textarea class="form-control" id="tempatUpdate" name="tempatUpdate" aria-describedby="emailHelp"> <?php echo set_value('tempat'); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggalUpdate" name="tanggalUpdate" aria-describedby="emailHelp"></textarea>
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
                <h1 class="modal-title align-middle" id="exampleModalLabel">INFO TOURNAMENT</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <p id="namaInfo"></p>
                <p id="gameInfo"></p>
                <p id="deskripsiInfo"></p>
                <p id="tempatInfo"></p>
                <p id="tanggalInfo"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

        function passUpdateData(id, nama, deskripsi, tempat, tanggal, jenis) {
            $('#idUpdate').val(id);
            $('#namaUpdate').val(nama);
            $('#deskripsiUpdate').html(deskripsi);
            $('#tempatUpdate').val(tempat);
            $('#tanggalUpdate').val(tanggal);
            $('#gameUpdate').val(jenis);
        }

        function passInfoData(nama, deskripsi, tempat, tanggal, game) {
            $('#namaInfo').html("Nama Turnamen: " + nama);
            $('#deskripsiInfo').html("Deskripsi: " + deskripsi);
            $('#tempatInfo').html("Lokasi: " + tempat);
            $('#tanggalInfo').html("Waktu: " + tanggal);
            $('#gameInfo').html("Game yang dimainkan: " + game);
        }

        function updateData(){
            //var id = ($('#idUpdate').val());
            var nama = ($('#namaUpdate').val());
            var deskripsi = ($('#deskripsiUpdate').val());
            var tempat = ($('#tempatUpdate').val());
            //var jenis = ($('#jenisUpdate').val());
            if(nama == ""){
                alert("Nama belum diisi");
            } else if(deskripsi == ""){
                alert("Deskripsi belum diisi");
            } else if(tempat == ""){
                alert("Tempat belum diisi");
            }   
        }

        
</script>