<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<div class="container p-4">

    <div class="row">
        <div class="col-md-4">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message-type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>
            <div class="card card-body bg-secondary mb-3">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" class="form-control bg-secondary mb-3 text-dark " autofocus>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <textarea name="description" rows="2" class="form-control bg-secondary mb-3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-outline-dark" name="save-task">
                </form>
            </div>
        </div>
        <div class="col-md-8">

        </div>
    </div>

</div>

<?php include("includes/footer.php") ?>