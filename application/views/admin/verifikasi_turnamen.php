<div class="container-fluid">

    <table class="table table-border ">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>DESKRIPSI</th>
            <th>JENIS GAME</th>
            <th>TEMPAT</th>
            <th>TANGGAL</th>
            <th>KUOTA</th>
            <th>AKSI</th>
        </tr>
        <?php
        $no = 1;
        foreach ($turnamen as $data) : 
            if($data['status'] == 'processing'){
        ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['deskripsi'] ?></td>
            <td><?php echo $data['jenis_games'] ?></td>
            <td><?php echo $data['tempat'] ?></td>
            <td><?php echo $data['tanggal'] ?></td>
            <td><?php echo $data['kuota'] ?></td>
            <td>
            <a class="btn btn-primary" href="<?php base_url(); ?>control_verifikasi_turnamen/updateStatus/<?php echo $data['id_tour'].'/approved'?>">Approve</a>
            <a class="btn btn-danger" href="<?php base_url(); ?>control_verifikasi_turnamen/updateStatus/<?php echo $data['id_tour'].'/rejected'?>">Reject</a>
            </td>
        </tr>
            
        <?php }
        endforeach; ?>


    </table>

</div>