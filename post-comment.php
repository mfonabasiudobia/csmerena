order-1 order-md-2 <!DOCTYPE html>
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

                    <div class="col-lg-8 order-1 order-md-2 bg-white border p-0 view-news">

                    <main>
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

                               <div class="bg-gray-100 text-gray-500 fs-25 px-2 py-0">Post comment</div> 
                              <h1 class="fw-bold text-shadow">Samsung Galaxy Z Fold4 to come in Beige, Z Flip4 will have Blue variant</h1>
                          </main>

                          <footer class="fs-14 fw-bold oswald-font position-relative z-10 d-flex justify-content-between align-items-center" style="background: rgba(168, 157, 179, 0.6);border: 1px solid #bbb">
                              
                              <a href="#" class="btn rounded-0 px-4 text-white facebook text-shadow border-end">
                                 <i class="fas fa-eye fs-16"></i> READ
                             </a>
                             <a href="#" class="btn text-white facebook text-shadow">
                                 <i class="fas fa-comment-alt fs-16"></i> COMMENTS (4)
                             </a>

                          </footer>
                      </section>


                       <section class="bg-gray-700 overflow-hidden">
                        <header class='px-3 py-3 content-title'>
                             <h5 class="fw-bold lh-1">Post your comment</h5>
                             <div class="d-flex align-items-center justify-content-between">
                                 <span>Not logged in</span>
                                 <a href="#" class="px-2 fs-14 py-1 fw-bold bg-white border shadow-sm">LOG IN</a>
                             </div>
                         </header>

                          <form class="row p-3 gy-3" >

                            <div class="form-group">
                                <label>Your nickname (optional)</label>
                                <input class="form-control" />
                                <div class="d-flex justify-content-end mt-2">
                                     <a href="#" class="px-2 fs-14 py-1 fw-bold bg-white border shadow-sm">SIGN UP</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Your comment</label>
                                <textarea class="form-control" rows="5"></textarea>
                                <div class="d-flex justify-content-end mt-2">
                                     <a href="#" class="px-2 fs-14 py-1 fw-bold bg-white border shadow-sm">SUBMIT</a>
                                </div>
                            </div>
                             
                          </form>

                          <section class="p-3 bg-white">
                             <header>
                                 <h6 class="fw-bold lh-1">Posting rules</h6>
                             </header>
                              <ul>
                                  <li>English only</li>
                                  <li>Please no foul language, be polite and use common sense</li>
                                  <li>No expressions of hatred based on race/ethnicity, nationality, sex, sexual orientation, disability, religion and political affiliation</li>
                                  <li>No bashing - deliberately and repeatedly bashing the same brand</li>
                                  <li>No bashing - deliberately and repeatedly bashing the same brand</li>
                                  <li>No expressions of hatred based on race/ethnicity, nationality, sex, sexual orientation, disability, religion and political affiliation</li>
                                  <li>No bashing - deliberately and repeatedly bashing the same brand</li>
                                  <li>No bashing - deliberately and repeatedly bashing the same brand</li>
                                  <li>No expressions of hatred based on race/ethnicity, nationality, sex, sexual orientation, disability, religion and political affiliation</li>
                                  <li>No bashing - deliberately and repeatedly bashing the same brand</li>
                                  <li>No bashing - deliberately and repeatedly bashing the same brand</li>
                              </ul>

                              <p class="fs-12">
                                  While the administrators and moderators of this site will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every posting. Therefore you acknowledge that all posts made to these forums express the views and opinions of the author and not the administrators, moderators or webmaster (except for posts by these people) and hence will not be held liable.
                              </p>
                          </section>

                      </section>

                  </main>

                    </div>

                </div>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>