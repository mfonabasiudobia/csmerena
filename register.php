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
                
                <form class="col-md-7 shadow row gy-3 bg-white p-3 border">
                    <div class="col-12">
                        <h2 class="oswald-font">MEMBER REGISTRATION</h2>
                    </div>

                    <div class="col-md-6">
                        <label class="fs-14 fw-light">First Name:</label>
                        <input type="text" class="form-control">
                    </div>

                     <div class="col-md-6">
                        <label class="fs-14 fw-light">Last Name:</label>
                        <input type="text" class="form-control">
                    </div>

                     <div class="col-md-6">
                        <label class="fs-14 fw-light">Display Name:</label>
                        <input type="text" class="form-control">
                    </div>

                     <div class="col-md-6">
                        <label class="fs-14 fw-light">Mobile Phone:</label>
                        <input type="text" class="form-control">
                    </div>

                     <div class="col-md-6">
                        <label class="fs-14 fw-light">Password:</label>
                        <input type="text" class="form-control">
                    </div>

                     <div class="col-md-6">
                        <label class="fs-14 fw-light">Confirm Password:</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn w-100 bg-black text-white">Create Account</button>
                    </div>

                    <div class="col-12">
                      <span> Already have an account?  </span> <a href="login.php">Click here to login</a>
                    </div>

                </form>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>