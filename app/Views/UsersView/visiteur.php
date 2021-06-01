<!-- header -->
<?php require APPROOT .'/views/inc/header.php';?>
<?php require_once APPROOT . '/Views/inc/navbar.php'; ?>

<!-- end header -->

    <div>
        <h1 id="" class="text-center pt-5">Les Blogs</h1>
    </div>
    <div class="card-columns pt-3">
        <?php $count = 0; ?>
        <?php foreach($data as $row): ?>
            <div class="card" style="" id="<?php echo $row -> id;?>">
                
                <img src="../Image_Blog2.png" alt="img" class="card-img-top" width="300" style="border:none">
                
                <div class="card-body">
                    <div class="">
                        <h4 class="card-title"><?php echo $row->Titre; ?></h4>

                        <div class="">
                            <img src="../calendar.png" alt="calendar" width="30" height="30">
                            <span class=""><?php $time = strtotime($row->Date); $day = date('D,d M Y', $time); echo $day; ?></span>
                        </div>
                        
                        
                    </div>
                    <div class="">
                        <!--  Model button -->
                        <button id="myBtn" data-toggle="modal" data-target="#<?php echo $count; ?>" class="myBtn btn btn-outline-primary col-sm-4 mt-sm-4">view</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo $count; ?>">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal Title</h5>
                                </div>

                                <div class="modal-body">
                                    <p class="card-text" id="desc"><?php echo $row->Discription;?></p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $count++; ?>
        <?php endforeach; ?>
    </div>


<!-- footer -->
<?php require APPROOT .'/Views/inc/footer.php'; ?>
<!-- end footer -->