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

        <section>
            <div class="container">
                
                <div class="row gx-4">
                    
                    <section class="questions-wrapper col-lg-8 order-2 order-md-1  py-3">
                        <main class="row gy-3 px-2 bg-white border">
                            <h2>Marketplace</h2>
                           <section class="p-3 bg-gray-100">
                                <form class="row g-2">

                                    <div class="col-md-4">
                                        <label class="fs-14 fw-light">Category:</label>
                                        <select class="form-select form-select-sm">
                                            <option>JAMB</option>
                                            <option>WAEC</option>
                                            <option>NECO</option>
                                        </select>
                                    </div>

                                     <div class="col-md-4">
                                        <label class="fs-14 fw-light">School:</label>
                                        <select class="form-select form-select-sm">
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="fs-14 fw-light">Keyword:</label>
                                        <select class="form-select form-select-sm">
                                            <option>Objective</option>
                                            <option>Theory</option>
                                            <option>Practcal</option>
                                        </select>
                                    </div>

                                     <div class="col-12">
                                        <button type="submit" class='me-2 btn load-more bg-gray-500 text-white'>Search</button>
                                    </div>
                                                        
                                </form>

                                
                           </section>

                            <section class="row gy-4">
                         <?php

                               foreach ([1,2,3] as $key => $value) {
                                  echo  "
                                <div class='card bg-white p-0 ps-3'>
                                              <div class='row g-0'>
                                                <div class='col-4 col-md-2'>
                                                  <img src='assets/images/gsmarena_002.jpg' class='w-100 h-100' alt='...'>
                                                </div>
                                                <div class='col-8 col-md-10'>
                                                  <div class='card-body py-0'>
                                                    <h5 class='card-title lh-1'><a href='view-product.php' class='stretched-link fs-14 fw-bold'>ppo Reno8 Lite leaks: a rebranded Reno7 Lite for Europe</a></h5>
                                                    <div class='card-text fs-13'>
                                                        <span>&#8358;5,000</span>
                                                        <span class='bg-success px-1 rounded text-light'>UNIBEN</span>

                                                        <span class='bg-danger px-1 rounded text-light'>New</span>
                                                    </div>
                                                    <div class='card-text fs-11 py-2'>
                                                        <span>Posted: 19th April 2022</span>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                </div>";

                            }

                                ?>

                                </section>

                                <nav aria-label="Page navigation example">
                                  <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                      <a class="page-link" href="#">Next</a>
                                    </li>
                                  </ul>
                                </nav>


                        </main>

                    </section>

                    <?php require_once("inc/sidebar.php"); ?>

                </div>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>