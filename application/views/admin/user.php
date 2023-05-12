<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahbarang"><i
            class="fas fa-plus fa-sm"></i> Insert User </button>

    <table class="table table-border ">
        <tr>
            <th>NO</th>
            <th>USERNAME</th>
            <th>ROLE ID</th>
        </tr>
        <?php
        $no = 1;
        foreach ($user as $us) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $us->username ?></td>
            <td><?php echo $us->role_id ?></td>
            </td>
        </tr>

        <?php endforeach; ?>


    </table>

</div>

<div class="modal fade" id="tambahbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/conf_user/tambahData' ?>" method="post"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Role_id</label>
                        <select name="role_id" id="" class="form-control">
                            <option value="admin">1</option>
                            <option value="user">2</option>
                        </select>
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