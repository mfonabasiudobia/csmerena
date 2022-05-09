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

        <?php require_once("inc/top-ads.php"); ?>

        <section>
            <div class="container bg-white">
                
                <div class="row gx-4">
                    
                    <?php require_once("inc/dashboard-sidebar.php"); ?>

                    <div class="col-lg-8 order-1 order-md-2 bg-white border p-0 view-news">

                    <main class="p-3">
                    
                        <div class="row">
                            <section class="col-md-4">
                                <div class="bg-warning p-2 text-white">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <h1>2</h1>
                                            <div>Orders</div>
                                        </div>
                                        <div class="right">
                                            <i class="fas fa-shopping-cart fs-30"></i>
                                        </div>
                                    </section>
                                    <a href="#" class="d-block text-decoration-none text-white fs-13 py-1 text-center">
                                        <span>More Info</span>
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </section>

                             <section class="col-md-4">
                                <div class="bg-success p-2 text-white">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <h1>₦0</h1>
                                            <div>Earnings</div>
                                        </div>
                                        <div class="right">
                                            <i class="fas fa-money fs-30"></i>
                                        </div>
                                    </section>
                                    <a href="#" class="d-block text-decoration-none text-white fs-13 py-1 text-center">
                                        <span>More Info</span>
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </section>


                             <section class="col-md-4">
                                <div class="bg-danger p-2 text-white">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <h1>2</h1>
                                            <div>SMS Units</div>
                                        </div>
                                        <div class="right">
                                            <i class="fas fa-shopping-cart fs-30"></i>
                                        </div>
                                    </section>
                                    <a href="#" class="d-block text-decoration-none text-white fs-13 py-1 text-center">
                                        <span>More Info</span>
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </section>
                        </div>

                    </main>

                    </div>

                </div>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>