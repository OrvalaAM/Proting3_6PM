<div class="cotainer-fluid ml-4 mr-5">
    <h3> <i class="fas fa-edit"></i> EDIT NEWS</h3>

    <?php foreach ($news as $ns) : ?>
    <form method="post" action="<?php echo base_url() . 'admin/news_admin/update' ?>">

        <div class="form-group">
            <label for="">Nama</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $ns->id ?>">
            <input type="text" name="nama" class="form-control" value="<?php echo $ns->nama ?>">
        </div>

        <div class="form-group">
            <label for="">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" value="<?php echo $ns->deskripsi ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3"> Save </button>
    </form>
    <?php endforeach; ?>
</div>