<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail News</h5>
        <div class="card-body">

            <?php foreach ($news as $ns) : ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url() . '/uploads/' . $ns->image ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">

                        <tr>
                            <td>Title</td>
                            <td><strong> <?php echo $ns->nama ?> </strong></td>
                        </tr>

                        <tr>
                            <td>Deskripsi</td>
                            <td><strong> <?php echo $ns->deskripsi ?> </strong></td>
                        </tr>

                    </table>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>