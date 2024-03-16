<?php 
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>php project</title>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-lg-7 mt-5 m-auto">
            <div class="card">
                <div class="card-header">
                    <h2>Registration Form</h2>
                </div>
                <div class="card-header">
                    <form action="signup_store.php" method="post">
                        <?php 
                        if(isset($_SESSION['email_duplicate'])){
                            ?>
                            <div class="alert bg-danger text-white"> <?php echo $_SESSION['email_duplicate']; ?> </div>
                            <?php
                        }
                        ?>
                        <div class="mb-3">
                            <label for="" class="form-label">User Name</label>
                            <input type="text" class="form-control" placeholder="enter your username" name="user_name">
                            <?php 
                            if(isset($_SESSION['name_err'])){
                                echo $_SESSION['name_err'];
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="enter email" name="email">
                             <?php 
                            if(isset($_SESSION['email_err'])){
                                echo $_SESSION['email_err'];
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="enter your password" name="password">
                             <?php 
                            if(isset($_SESSION['password_err'])){
                                echo $_SESSION['password_err'];
                            }
                            ?>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>


<?php 
session_unset();
?>