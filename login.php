<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="<?php echo "./assets/css/styles.css?id=". uniqid(); ?>">
</head>
<body>

    <div class="page-wrapper">
        <?php require_once("inc/header.php"); ?>

        <section class="authentication my-5">
            <div class="container d-flex justify-content-center align-items-center">
                
                <form class="col-md-6 shadow row gy-3 bg-white p-3 border">
                    <div class="col-12">
                        <h2 class="oswald-font">MEMBER LOGIN</h2>
                    </div>

                    <div class="col-12">
                        <label class="fs-14 fw-light">Username:</label>
                        <input type="text" class="form-control">
                    </div>

                     <div class="col-12">
                        <label class="fs-14 fw-light">Password:</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-12 d-flex align-items-center">
                        <input type="checkbox" id="remember-me">
                        <label class="fs-14 fw-light ms-2" for="remember-me">Remember me</label>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn w-100 bg-black text-white">Sign In</button>
                    </div>

                    <div class="col-12">
                        <a href="#">Forgot your password?</a>
                    </div>

                    <div class="col-12">
                      <span> Don't have an account? </span> <a href="register.php">Click here to create one now</a>
                    </div>

                </form>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>