<?php require APPROOT . '/Views/inc/header.php'; ?>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div id="login" class="col-md-12">
                    <h1 id="titre" class="text-center pt-5">Login</h1>

                    <div id="error"></div>

                    <form action="<?php echo URLROOT; ?>/UserController/login" method="post" class="form" id="form">

                        <div class="form-group">
                            <label for="name">Username:</label>
                            <input class="form-control" type="text" placeholder="Enter username" name="name" id="username" >
                            <small>Error Messege</small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="form-control" type="email" placeholder="Enter email" name="email" id="email" >
                            <small>Error Messege</small>
                        </div>

                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input class="form-control" type="password" placeholder="Enter password" name="pwd" id="password" >
                            <small>Error Messege</small>
                        </div>
                        
                        <button class="form-control btn" type="submit" name="submit" id="butt" onclick="formValidate()">login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require APPROOT . '/Views/inc/footer.php'; ?>
