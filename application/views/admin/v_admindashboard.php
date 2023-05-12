<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahnews"><i
            class="fas fa-plus fa-sm"></i> Insert News</button>

    <table class="table table-border ">
        <tr>
            <th>NO</th>
            <th>TITLE</th>
            <th>DESKRIPSI</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        $no = 1;
        foreach ($news as $ns) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $ns->nama ?></td>
            <td><?php echo $ns->deskripsi ?></td>
            <td><?php echo anchor('admin/news_admin/edit/' . $ns->id, '<div class="btn btn-primary"><i class="fas fa-edit"></i></div>') ?>
            </td>
            <td><?php echo anchor('admin/news_admin/hapus/' . $ns->id, '<div class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
            </td>
        </tr>

        <?php endforeach; ?>


    </table>

</div>

<!-- modal -->
<div class="modal fade" id="tambahnews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input News</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/news_admin/tambahAksi' ?>" method="post"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="">title</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Gambar</label> <br>
                        <input type="file" name="image" class="form-control">
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