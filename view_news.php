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

                    <div class="col-lg-8 order-1 order-md-2 bg-white border p-0 view-news">

                      <section class="text-white position-relative overflow-hidden">
                        <div class="view-news-header-bg " style="background-image: url('./assets/images/gsmarena_04.jpg');"></div>

                          <header x-data="{ isSocialsOpen : false }" class="px-2 position-relative z-10 d-flex justify-content-end align-items-center" style="background: rgba(168, 157, 179, 0.6);border: 1px solid #bbb">

                             <a href="#" class="btn text-white facebook" x-show="isSocialsOpen">
                                 <i class="fab fa-facebook text-shadow fs-16"></i>
                             </a>
                             <a href="#" class="btn text-white twitter" x-show="isSocialsOpen">
                                 <i class="fab fa-twitter text-shadow fs-16"></i>
                             </a>
                             <button class="btn text-white" x-on:click="isSocialsOpen = !isSocialsOpen">
                                 <i class="fas fa-share-alt text-shadow fs-16"></i>
                             </button>
                          </header>

                          <main class="d-flex align-items-end p-3 position-relative z-10 pt-5" style="background: rgba(201, 185, 219, 0.6);">
                              <h1 class="fw-bold text-shadow">Samsung Galaxy Z Fold4 to come in Beige, Z Flip4 will have Blue variant</h1>
                          </main>

                          <footer class="fs-14 fw-bold oswald-font position-relative z-10 d-flex justify-content-end align-items-center" style="background: rgba(168, 157, 179, 0.6);border: 1px solid #bbb">
                              
                              <a href="readers-comment.php" class="btn text-white facebook text-shadow">
                                 <i class="fas fa-comment-alt fs-16"></i> COMMENTS (4)
                             </a>
                             <a href="post-comment.php" class="btn text-white text-shadow">
                                <i class="fas fa-pen-alt fs-16"></i> POST YOUR COMMENT
                             </a>

                          </footer>
                      </section>


                      <section class="blog-content">

                        <p>The Black and Gray choices for Z Fold4 are not new - we had them on the Z Fold3 was announced, although they were called Phantom Black and Phantom Silver. <a href="#">Looking at the clamshell,</a> Black is getting lighter to the point of arriving as Gray, the Cream option will be named Gold, and the Lavender is staying.</p>


                        <img src="assets/images/gsmarena_00.jpg" class="blog-image">

                        <p>Last year Samsung had some exclusive paint jobs for devices, purchased from its online store, and some users even had the option to mix and match panels with hinges. We expect these exclusive deals and features to remain because they bring the Korean maker ahead of its competitors, especially when more and more foldable phones are arriving on the market.</p>


                        <blockquote class="blockquote border-warning">
                              <p>A well-known quote, contained in a blockquote element.option to mix and match panels with hinges. We expect these exclusive deals and features to remain because they bring the Korean maker ahead of its competitors, especially <a href="#">Reprinting</a></p>
                        </blockquote>
                          
                      </section>

                      <section class="related-articles overflow-hidden">
                          <h6 class="oswald-font p-2 border-bottom">RELATED ARTICLES</h6>

                          <main class="row bg-gray-100 p-2 gx-2 d-flex flex-nowrap" >
                            <?php

                           foreach ([1,2,3,4] as $key => $value) {
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


                       <section class="readers-comments bg-white overflow-hidden">
                          <h6 class="oswald-font p-2 border-bottom"><a href="readers-comment.php" class="text-decoration-none">READER COMMENTS</a></h6>

                          <main class="row p-2 gy-2" >

                             <?php

                           foreach ([1,2,3,4] as $key => $value) {
                              echo  "
                                 <div class='col-12'>
                                      <main>
                                          <div class='d-flex align-items-start border-bottom pb-2'>
                                              <div>
                                                    <div class='icon'>?</div>
                                              </div>
                                              <div>
                                                  <header class='d-flex align-items-center justify-content-between'>
                                                     <div> <span class='name'>Anonymous</span></div>
                                                     <div>
                                                         <span class='me-3'><i class='far fa-clock'></i> 44 minutes ago</span>
                                                         <span><i class='fas fa-map-marker-alt'></i> Snu</span>
                                                     </div>
                                                  </header>
                                                  <p>Make it wider! Samsung went crazy on the tall thin phones, which is nice for reading, but hard for my short thumb to reach the top. Watching videos is better on a wider phone too.</p>
                                              </div>
                                          </div>
                                          <footer class='d-flex justify-content-end text-sm'>
                                              <a href='#'><i class='fas fa-reply-all'></i> Reply</a>
                                          </footer>
                                      </main>
                            </div>
                            ";
                          }

                              ?>
                          </main>
                          <footer class='main-footer bg-gray-100 d-md-flex align-items-center justify-content-between'>
                                                     <div class="py-2">
                                                         <a href="readers-comment.php" class="px-3 text-sm py-2 fw-bold bg-white border">READ ALL COMMENTS</a>
                                                         <a href="post-comment.php" class="px-3 text-sm py-2 fw-bold bg-white border">POST YOUR COMMENT</a>
                                                     </div>
                                                     <div class="text-end py-2">
                                                         Total reader comments: <strong>11</strong>
                                                     </div>
                         </footer>
                      </section>


                    </div>

                </div>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>