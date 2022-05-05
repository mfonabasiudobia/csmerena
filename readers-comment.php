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
            <div class="container bg-white">
                
                <div class="row gx-4">
                    
                    <?php require_once("inc/sidebar.php"); ?>

                    <div class="col-md-8 bg-white border p-0 view-news">

                      <section class="text-white position-relative view-news-header-bg ">

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

                          <main class="d-flex flex-column align-items-start justify-content-end p-3 position-relative z-10" style="min-height: 35vh;background: rgba(201, 185, 219, 0.2);">

                               <div class="bg-gray-100 text-gray-500 fs-25 px-2 py-0">Comments</div> 
                              <h1 class="fw-bold text-shadow">Samsung Galaxy Z Fold4 to come in Beige, Z Flip4 will have Blue variant</h1>
                          </main>

                          <footer class="fs-14 fw-bold oswald-font position-relative z-10 d-flex justify-content-between align-items-center" style="background: rgba(168, 157, 179, 0.6);border: 1px solid #bbb">
                              
                              <a href="#" class="btn text-white facebook text-shadow">
                                 <i class="fas fa-eye fs-16"></i> READ
                             </a>
                             <a href="#" class="btn text-white text-shadow">
                                <i class="fas fa-pen-alt fs-16"></i> POST YOUR COMMENT
                             </a>

                          </footer>
                      </section>


                       <section class="readers-comments bg-white overflow-hidden">
                        <footer class='main-footer bg-gray-100 py-3 d-flex align-items-center justify-content-between'>
                                                     <div>
                                                         <a href="#" class="px-3 text-sm py-2 fw-bold bg-white border">POST YOUR COMMENT</a>
                                                     </div>
                                                     <div class="d-flex align-items-center">
                                                         <div class="d-flex me-3">
                                                             <span>Sort by:</span> &nbsp;
                                                             <select>
                                                                 <option>Newest first</option>
                                                                 <option>Oldest first</option>
                                                                 <option>Best rating</option>
                                                             </select>
                                                         </div>

                                                         <div class="d-flex align-items-center">
                                                             <span>Pages:</span> &nbsp;
                                                             <a href="#" class="btn btn-dark text-white btn-sm">1</a>
                                                         </div>

                                                     </div>
                         </footer>

                          <main class="row p-2 gy-2" >

                             <?php

                           foreach ([1,2,3,4] as $key => $value) {
                              echo  "
                                 <div class='col-12'>
                                      <main>
                                          <div class='d-flex align-items-start border-bottom pb-2'>
                                             <div class='text-gray-600'>
                                                  <div class='icon'>?</div>
                                                  <div class='fs-14 mt-1'>
                                                      <i class='fas fa-comment-alt'></i> 700
                                                  </div>

                                                  <div class='fs-14'>
                                                      <i class='fas fa-chevron-circle-up'></i> 200
                                                  </div>
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
                                          <footer class='d-flex justify-content-between text-sm'>
                                              <div>
                                                  <a href='#' class='me-2'>Rating 0</a>

                                                  <span class='me-3'>
                                                      <a href='#'><i class='fas fa-chevron-up'></i></a>&nbsp; | &nbsp;
                                                      <a href='#'><i class='fas fa-chevron-down'></i></a>
                                                  </span>

                                                  <a href='#'><i class='fas fa-exclamation-triangle'></i> Report</a>
                                              </div>

                                              <div>
                                                  <a href='#'><i class='fas fa-reply-all'></i> Reply</a>
                                              </div>
                                          </footer>
                                      </main>
                            </div>
                            ";
                          }

                              ?>
                          </main>
                          <footer class='main-footer bg-gray-100 py-3 d-flex align-items-center justify-content-between'>
                                                     <div>
                                                         <a href="#" class="px-3 text-sm py-2 fw-bold bg-white border">POST YOUR COMMENT</a>
                                                     </div>
                                                     <div class="d-flex align-items-center">
                                                         <div class="d-flex me-3">
                                                             <span>Sort by:</span> &nbsp;
                                                             <select>
                                                                 <option>Newest first</option>
                                                                 <option>Oldest first</option>
                                                                 <option>Best rating</option>
                                                             </select>
                                                         </div>

                                                         <div class="d-flex align-items-center">
                                                             <span>Pages:</span> &nbsp;
                                                             <a href="#" class="btn btn-dark text-white btn-sm">1</a>
                                                         </div>

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