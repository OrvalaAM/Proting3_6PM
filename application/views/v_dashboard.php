<!-- Home Section -->
<div class="container-fluid "
    style="background-color: rgb(255, 255, 255); padding: 8%; margin-top: -10%; padding-top: 20%;">
    <div class="container">
        <div class="row">
            <div class="col p-4" style="margin-top: 9%;">
                <h1 class="fw-bold" style="font-family: Faster One; font-size: 52px;">WELCOME TO <br />LAPAK
                    ESPORT</br></h1>
                <h4>Place to Find Team, Tournament, and Esport News</h4>
                <div class="mt-4">
                    <a href="register.html" type="button" class="btn btn-primary">Get Started</a>
                </div>
            </div>
            <div class="col">
                <img src="/assets/img/spec.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- End Home Section -->

<div class="container-fluid">
    <h1 style="width: 100%; text-align: center; margin-top: 50px;">NEWS</h1>
    <div class="row text-center mt-5">

        <?php foreach ($news as $ns) : ?>

        <div class="card ml-3 mt-4" style="width: 21rem; margin-bottom: 30px;">
            <img src="<?php echo base_url() . '/uploads/' . $ns->image ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"> <?php echo $ns->nama ?> </h5>
                <small> <?php echo $ns->deskripsi ?> </small><br>
                <?php echo anchor("dashboard/detail/{$ns->id}", '<div class="btn btn-success btn-sm"> Detail </div>') ?>
            </div>
        </div>

        <?php endforeach; ?>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>