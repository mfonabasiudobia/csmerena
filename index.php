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
                    
                    <?php require_once("inc/sidebar.php"); ?>

                    <div class="col-lg-8 order-1 order-md-2 bg-gray-100 p-2 ">

                      <section class="related-articles overflow-hidden">
                          <h6 class="oswald-font p-2 border-bottom">FEATURED</h6>

                          <main class="row bg-gray-100 p-2 gx-2 d-flex flex-nowrap" >
                            <?php

                           foreach ([1,2,3,4,5,6] as $key => $value) {
                              echo  "<div class='col-5 col-md-3'>
                                  <div class='bg-white border'>
                                      <img src='assets/images/gsmarena_00.jpg' />
                                      <p>
                                          <a href='#' class='stretched-link'>Samsung Galaxy Z Fold4 battery capacities revealed</a>
                                      </p>
                                  </div>
                              </div>";
                          }

                              ?>
                          </main>
                      </section>


                       

                        <section>
                            <header class="content-title news-header">
                            <h2>News Updates</h2>
                            <div>SEE THE BEST PHONES RIGHT NOW IN OUR ALL-NEW</div>
                            </header>
                            <div class="row gy-3 m-0 py-0 card-list">
                               <?php

                               foreach ([1,2,3,4] as $key => $value) {
                                  echo  "<div class='card bg-white p-0'>
                                              <div class='row g-0'>
                                                <div class='col-4 left'>
                                                  <img src='assets/images/gsmarena_00.jpg' alt='...'>
                                                </div>
                                                <div class='col-8'>
                                                  <div class='card-body'>
                                                    <h5 class='card-title oswald-font'><a href='view_news.php' class='stretched-link'>Never mind that the Reno7 Lite is already available in Europe</a></h5>
                                                    <p class='card-text d-none fs-14 d-md-block'>Never mind that the Reno7 Lite is already available in Europe and that it is already a rebranded Reno7 Z.</p>
                                                    <p class='card-text d-flex justify-content-end'>
                                                        <small class='text-muted me-2'><i class='far fa-clock'></i> 3 mins ago</small>
                                                        <small class='text-muted'><i class='far fa-comment-alt'></i> 2</small>
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>";
                               }


                                ?>

                            </div>

                            <div class="d-flex justify-content-center my-3">
                                 <a href="post-comment.php" class="load-more"><i class="fas fa-sync"></i>&nbsp; LOAD MORE</a>
                            </div>
                        </section>


                       <section>
                          <h2 class="content-title fw-bold fs-16">STUDY PAST QUESTIONS</h2>
                          <div class="row g-3 m-0 mb-3  pb-3 past-questions-list ">

                              <?php

                                 foreach (["Commerce","Agric Science","Government","History","Economics","Insurance","Mathematics","Data Processing","Chemistry","Fine Arts","Biology"] as $key => $value) {

                                      echo "<div class='col-6 col-md-4 col-lg-4 d-flex'>
                                              <img src='assets/images/gsmarena_00.jpg' class='me-2' style='width: 30px;height: 30px;' alt='...'>
                                              <a href='question.php'>{$value}</a>
                                          </div>";
                                 }

                             ?>

                          </div>
                       </section>

                         <section>
                            <header class="content-title news-header">
                            <h2>Gist and Gossips</h2>
                            <div>SEE THE BEST PHONES RIGHT NOW IN OUR ALL-NEW</div>
                            </header>
                            <div class="row gy-3 m-0 py-0 card-list">
                               <?php

                               foreach ([1,2,3] as $key => $value) {
                                  echo  "<div class='card bg-white p-0'>
                                              <div class='row g-0'>
                                                <div class='col-4 left'>
                                                  <img src='assets/images/gsmarena_001.jpg'  alt='...'>
                                                </div>
                                                <div class='col-8'>
                                                  <div class='card-body'>
                                                    <h5 class='card-title oswald-font'><a href='view_news.php' class='stretched-link'>Lite leaks: a rebranded Reno7 Lite for Europe</a></h5>
                                                    <p class='card-text d-none fs-14 d-md-block'>Never mind that the Reno7 Lite is already available in Europe and that it is already a rebranded Reno7 Z.</p>
                                                    <p class='card-text d-flex justify-content-end'>
                                                        <small class='text-muted me-2'><i class='far fa-clock'></i> 3 mins ago</small>
                                                        <small class='text-muted'><i class='far fa-comment-alt'></i> 2</small>
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>";
                               }


                                ?>
                            </div>
                            <div class="d-flex justify-content-center my-3">
                                 <a href="post-comment.php" class="load-more"><i class="fas fa-sync"></i>&nbsp; LOAD MORE</a>
                            </div>
                        </section>

                         <section>
                            <header class="content-title news-header">
                            <h2>Questions</h2>
                            <div>SEE THE BEST PHONES RIGHT NOW IN OUR ALL-NEW</div>
                            </header>
                            <div class="row gy-3 m-0 py-0 card-list">
                               <?php

                               foreach ([1,2,3,4] as $key => $value) {
                                  echo  "<div class='card bg-white p-0'>
                                              <div class='row g-0'>
                                                <div class='col-4 left'>
                                                  <img src='assets/images/ian-schneider-WymR2nYtj5M-unsplash.jpg' alt='...'>
                                                </div>
                                                <div class='col-8'>
                                                  <div class='card-body'>
                                                    <h5 class='card-title oswald-font'><a href='view_news.php' class='stretched-link'>Reno8 Lite leaks: a rebranded Reno7 Lite for Europe</a></h5>
                                                    <p class='card-text d-none fs-14 d-md-block'>Never mind that the Reno7 Lite is already available in Europe and that it is already a rebranded Reno7 Z.</p>
                                                    <p class='card-text d-flex justify-content-end'>
                                                        <small class='text-muted me-2'><i class='far fa-clock'></i> 3 mins ago</small>
                                                        <small class='text-muted'><i class='far fa-comment-alt'></i> 2</small>
                                                    </p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>";
                               }


                                ?>
                            </div>
                            <div class="d-flex justify-content-center my-3">
                                 <a href="post-comment.php" class="load-more"><i class="fas fa-sync"></i>&nbsp; LOAD MORE</a>
                            </div>
                        </section>

                    </div>

                </div>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>