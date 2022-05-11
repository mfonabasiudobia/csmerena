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

                    <div class="col-lg-8 order-1 order-md-2 bg-gray-700 p-2 tagged-news">


                    <section class="d-grid gap-3">
                        <section class="text-white position-relative overflow-hidden view-news-header-bg-withNoFilter" style="background-image: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5) ),url('./assets/images/ian-schneider-WymR2nYtj5M-unsplash.jpg');">

                              <header class="fs-13 p-3">
                                <div class="d-flex col-md-8  fs-12 align-items-center tags">
                                                  <div class="fw-light text-nowrap me-2 oswald-font">POPULAR TAGS</div>
                                                  <div class="tag-wrapper">
                                                      <a href="#">Featured</a>
                                                      <a href="#">Android</a>
                                                      <a href="#">Nokia</a>
                                                      <a href="#">Sunny</a>
                                                  </div>
                                    </div>
                              </header>

                              <main class="d-flex flex-column align-items-start justify-content-end px-3 position-relative z-10 pt-5">
                                  <h1 class="fw-bold text-shadow">Articles tagged "Headphones"</h1>
                              </main>

                              <footer class="fs-14 fw-bold px-3 mb-3 mt-2">
                                  <div class="d-flex col-md-8  fs-12 oswald-font align-items-center">
                                                  <div class="fw-light text-nowrap me-2">SEARCH FOR</div>
                                                  <input type="text" class="form-control form-control-sm w-100 me-2" placeholder="Search..">
                                                  <button class="btn btn-sm fs-12 btn-light">
                                                      SEARCH
                                                  </button>
                                    </div>
                              </footer>
                          </section>

                          <?php  if(false){ ?>
                            <div class="row gy-3 m-0 py-0 card-list">
                               <?php

                               foreach ([1,2,3,4,5,6] as $key => $value) {
                                  echo  "<div class='card bg-white p-0'>
                                              <div class='row g-0'>
                                                <div class='col-4 col-md-5 left'>
                                                  <img src='assets/images/gsmarena_00.jpg' alt='...'>
                                                </div>
                                                <div class='col-8 col-md-7'>
                                                  <div class='card-body'>
                                                    <h5 class='card-title oswald-font'><a href='view_news.php' class='stretched-link'>KZ X Crinacle CRN (ZEX Pro) wired IEM review</a></h5>
                                                    <p class='card-text d-none fs-12 d-md-block'>Sony is a headphone company. Sometimes that is easy to forget because Sony is also a camera company, a TV company, a gaming company and a bunch of other things. It's the maker of the premier active noise-canceling headphones and earbuds in the...</p>
                                                    <p class='card-text fs-13 d-flex justify-content-end'>
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

                              <footer class='main-footer  bg-gray-100 my-3 px-2 py-2 d-md-flex align-items-center justify-content-between'>

                                                     <div class="py-1 d-flex align-items-center justify-content-start">
                                                         <div class="d-flex align-items-center fs-13 pagination">
                                                             <span>Pages:</span> &nbsp;&nbsp;
                                                             <a href="#" class="btn inactive btn-sm">1</a>
                                                             <a href="#" class="btn inactive btn-sm">2</a>
                                                             <a href="#" class="active btn btn-sm">3</a>
                                                              <a href="#" class="btn inactive btn-sm">4</a>
                                                             <a href="#" class="btn inactive btn-sm">5</a>
                                                         </div>
                                                     </div>

                                                     <div class="py-1 d-flex align-items-center justify-content-end">
                                                         <a href="#" class="btn px-3 py-2 fw-bold bg-white border lh-0 me-1 border">
                                                            <i class="fas fa-caret-left fs-20"></i>
                                                         </a>
                                                          <a href="#" class="btn px-3 py-2 fw-bold bg-white border lh-0 border">
                                                            <i class="fas fa-caret-right fs-20"></i>
                                                         </a>
                                                     </div>
                             </footer>

                             <?php  }else{ ?>

                                <div class="alert alert-info">
                                    No Post in this category
                                </div>

                              <?php  }?>
                        </section>

                    </div>

                </div>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>