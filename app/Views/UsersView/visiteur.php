<!-- header -->
<?php require APPROOT .'/views/inc/header.php';?>
<?php require_once APPROOT . '/Views/inc/navbar.php'; ?>

<!-- end header -->


    <form class="form-inline" action="<?php echo URLROOT; ?>/UserController/signup" method="post">
        <!-- <a type="submit" href="UserController/insert" class="form-control btn" id="butt" name="add">Add</a> -->

    </form>
    <div>
        <h1 id="titre" class="text-center">La Princesse de Clèves</h1>
    </div>
    <div class="row">
        <div class="col pt-2">
            <img src="Image_Blog3.png" alt="img" class="img-thumbnail" width="400" height="400">
        </div>
        <div class="col-6 pt-5">
            <p>La Princesse de Clèves est un roman de Madame de La 
                Fayette, d'abord publié anonymement en 1678.
                Le roman prend pour cadre la vie à la cour des Valois 
                « dans les dernières années du règne de Henri Second », 
                comme l'indique le narrateur dans les premières lignes 
                du récit. Il peut donc être défini comme un roman 
                historique, même s'il inaugure, par bien des aspects 
                (souci de vraisemblance, construction rigoureuse, 
                introspection des personnages) ….
            </p>
        </div>
    </div>
    <div>
        <h1 id="titre" class="pt-5">Chapitres:</h1>
        <?php foreach($data as $row): ?>

            <div class="row pt-5">
                <div class="col-6">
                    <img src="Image_Blog2.png" alt="img" class="img-thumbnail" width="400">
                </div>

                <div class="col-5 pt-5">
                    <h2><?php echo $row->Titre; ?></h2>
                    <p><?php echo $row->Discription; ?></p>
                    <span><?php $time = strtotime($row->Date); $day = date('D,d M Y', $time); echo $day; ?></span>

                </div>

                
            </div>

        <?php endforeach; ?>
    </div>



<!-- footer -->
<?php require APPROOT .'/Views/inc/footer.php'; ?>
<!-- end footer -->