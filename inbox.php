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
            <div class="container">
                
                <div class="row g-3">
                    
                    <?php require_once("inc/dashboard-sidebar.php"); ?>

                    <div class="col-lg-9 inbox-wrapper">

                    <main class="p-3 d-grid gap-3 border bg-white">
                        
                     <section class="d-grid gap-4">
                            <header>
                                <h1>Inbox Messages</h1>
                                <div class="dropdown">
                                  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    All Messages
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item text-decoration-none" href="#">Unread Messages</a></li>
                                    <li><a class="dropdown-item text-decoration-none" href="#">Read Messages</a></li>
                                  </ul>
                                </div>
                            </header>
                            
                            <section class="row">
                                <div class="col-12 d-grid gap-1 border-top px-2 py-3 inbox-item">
                                    <header class="d-flex justify-content-between">
                                        <section class="d-flex align-items-center">
                                            <input type="checkbox" name="">
                                             <img src='assets/images/gsmarena_00.jpg' alt='...' class="profile-image mx-2">
                                             <div class="px-1">
                                                 <div><a href="#" class="username">Da Whiz Of Dandano</a></div>
                                                 <div>
                                                     <small class="text-muted fs-12">Jan 16 2022 at 9:28 AM</small>
                                                 </div>
                                             </div>
                                        </section>
                                        <section class="fw-bold text-sm">
                                            Unread
                                        </section>
                                    </header>
                                    <footer>
                                        <p>
                                            <a href="#">Thanks you sir, sorry am replying now. I lost my phone on 1st December. Thanks for your kind heart</a>
                                        </p>
                                        <div class="d-flex align-items-center actions">
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">View</a>
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">Mark as Read</a>
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">Delete</a>
                                        </div>
                                    </footer>
                                </div>


                                 <div class="col-12 d-grid gap-1 border-top px-2 py-3 inbox-item">
                                    <header class="d-flex justify-content-between">
                                        <section class="d-flex align-items-center">
                                            <input type="checkbox" name="">
                                             <img src='assets/images/gsmarena_00.jpg' alt='...' class="profile-image mx-2">
                                             <div class="px-1">
                                                 <div><a href="#" class="username">Da Whiz Of Dandano</a></div>
                                                 <div>
                                                     <small class="text-muted fs-12">Jan 16 2022 at 9:28 AM</small>
                                                 </div>
                                             </div>
                                        </section>
                                        <section class="fw-bold text-sm">
                                            Unread
                                        </section>
                                    </header>
                                    <footer>
                                        <p>
                                            <a href="#">Thanks you sir, sorry am replying now. I lost my phone on 1st December. Thanks for your kind heart</a>
                                        </p>
                                        <div class="d-flex align-items-center actions">
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">View</a>
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">Mark as Read</a>
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">Delete</a>
                                        </div>
                                    </footer>
                                </div>



                                 <div class="col-12 bg-light d-grid gap-1 border-top px-2 py-3 inbox-item">
                                    <header class="d-flex justify-content-between">
                                        <section class="d-flex align-items-center">
                                            <input type="checkbox" name="">
                                             <img src='assets/images/gsmarena_00.jpg' alt='...' class="profile-image mx-2">
                                             <div class="px-1">
                                                 <div><a href="#" class="username">Da Whiz Of Dandano</a></div>
                                                 <div>
                                                     <small class="text-muted fs-12">Jan 16 2022 at 9:28 AM</small>
                                                 </div>
                                             </div>
                                        </section>
                                        <section class="fw-bold text-sm">
                                            Read
                                        </section>
                                    </header>
                                    <footer>
                                        <p>
                                            <a href="#">Thanks you sir, sorry am replying now. I lost my phone on 1st December. Thanks for your kind heart</a>
                                        </p>
                                        <div class="d-flex align-items-center actions">
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">View</a>
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">Mark as Read</a>
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">Delete</a>
                                        </div>
                                    </footer>
                                </div>



                                 <div class="col-12 d-grid gap-1 border-top border-bottom px-2 py-3 inbox-item">
                                    <header class="d-flex justify-content-between">
                                        <section class="d-flex align-items-center">
                                            <input type="checkbox" name="">
                                             <img src='assets/images/gsmarena_00.jpg' alt='...' class="profile-image mx-2">
                                             <div class="px-1">
                                                 <div><a href="#" class="username">Da Whiz Of Dandano</a></div>
                                                 <div>
                                                     <small class="text-muted fs-12">Jan 16 2022 at 9:28 AM</small>
                                                 </div>
                                             </div>
                                        </section>
                                        <section class="fw-bold text-sm">
                                            <div>Read</div>
                                            <div>
                                                <i class="fas fa-reply fa-2x text-success"></i>
                                            </div>
                                        </section>
                                    </header>
                                    <footer>
                                        <p>
                                            <a href="#">Thanks you sir, sorry am replying now. I lost my phone on 1st December. Thanks for your kind heart</a>
                                        </p>
                                        <div class="d-flex align-items-center actions">
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">View</a>
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">Mark as Read</a>
                                            <a href="#" class="btn btn-danger text-white me-1 btn-sm">Delete</a>
                                        </div>
                                    </footer>
                                </div>
                            </section>

                            <footer class="d-flex align-items-center actions">
                                            <a href="#" class="btn btn-primary text-white me-1">Mark as Read</a>
                                            <a href="#" class="btn btn-primary text-white me-1">Mark as Unread</a>
                                            <a href="#" class="btn btn-primary text-white me-1">Delete</a>
                            </footer>

                            <nav aria-label="Page navigation example">
                              <ul class="pagination">
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
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