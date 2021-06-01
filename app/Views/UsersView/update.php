<!-- header -->
<?php require APPROOT .'/views/inc/header.php';?>
<?php require_once APPROOT . '/Views/inc/navbar.php'; ?>
<!-- end header -->
    <h1 id="titre" class="text-center pt-3">Edit Blog</h1>

    <form class="pt-4" action="" method="post">
        <div class="mb-3">
            <input type="text" class="form-control" name="titre" value="<?= $data->Titre;?>">
        </div>
        <div class="mb-3">
            <textarea type="text" class="form-control" name="discript" id="discript" ><?= $data->Discription; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="update" id="butt">Update</button>
    </form>
<!-- footer -->
<?php require APPROOT .'/Views/inc/footer.php'; ?>
<!-- end footer -->