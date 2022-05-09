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

                    <div class="col-lg-9 view-news">

                    <main class="p-3 d-grid gap-3 border bg-white">
                        
                     <section>
                            <h1>Dashboard</h1>
                        <div class="row g-3">
                            <section class="col-md-4">
                                <div class="bg-primary text-white">
                                    <section class="d-flex px-3 p-2 justify-content-between align-items-center">
                                        <div class="left">
                                            <h1>2</h1>
                                            <div>Orders</div>
                                        </div>
                                        <div class="right">
                                            <i class="text-transparent-black fas fa-shopping-cart fa-4x"></i>
                                        </div>
                                    </section>
                                    <a href="#" class="bg-transparent-black  d-block text-decoration-none text-white fs-13 py-1 text-center">
                                        <span>More Info</span>
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </section>

                             <section class="col-md-4">
                                <div class="bg-success text-white">
                                    <section class="d-flex px-3 p-2 justify-content-between align-items-center">
                                        <div class="left">
                                            <h1>₦0</h1>
                                            <div>Earnings</div>
                                        </div>
                                        <div class="right">
                                            <i class="text-transparent-black fas fa-money-bill-alt fa-4x"></i>
                                        </div>
                                    </section>
                                    <a href="#" class="bg-transparent-black  d-block text-decoration-none text-white fs-13 py-1 text-center">
                                        <span>More Info</span>
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </section>


                             <section class="col-md-4">
                                <div class="bg-danger text-white">
                                    <section class="d-flex px-3 p-2 justify-content-between align-items-center">
                                        <div class="left">
                                            <h1>2</h1>
                                            <div>SMS Units</div>
                                        </div>
                                        <div class="right">
                                            <i class="text-transparent-black fas fa-mobile-alt fa-4x"></i>
                                        </div>
                                    </section>
                                    <a href="#" class="bg-transparent-black  d-block text-decoration-none text-white fs-13 py-1 text-center">
                                        <span>More Info</span>
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </section>
                        </div>
                        </section>

                        <section>
                            

                     <ul class="nav nav-tabs bg-gray-100 pt-2 ps-2 border" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active text-gray-500" id="inbox-tab" data-bs-toggle="tab" data-bs-target="#inbox" type="button" role="tab" aria-controls="inbox" aria-selected="true">Inbox</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link text-gray-500" id="notification-tab" data-bs-toggle="tab" data-bs-target="#notification" type="button" role="tab" aria-controls="notification" aria-selected="false">Notification</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link text-gray-500" id="friend-request-tab" data-bs-toggle="tab" data-bs-target="#friend-request" type="button" role="tab" aria-controls="friend-request" aria-selected="false">Friend Request</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                      <div class="tab-pane p-3 fade show active" id="inbox" role="tabpanel">
                         <table class="table table-striped fs-13">
                              <thead class="">
                                  <tr>
                                      <th class="border-0 border-top">Message</th>
                                      <th class="border-0 border-top">Sender</th>
                                      <th class="border-0 border-top">Sent On</th>
                                  </tr>
                              </thead>

                              <tbody>
                                  <tr>
                                      <td>
                                          <a href="#">New Message from Connect2Me</a>
                                      </td>
                                      <td>
                                          <a href="#">Alimi</a>
                                      </td>
                                      <td>
                                          5-11-2019 9:33 AM
                                      </td>
                                  </tr>

                                   <tr>
                                      <td>
                                          <a href="#">New Message from Connect2Me</a>
                                      </td>
                                      <td>
                                          <a href="#">Alimi</a>
                                      </td>
                                      <td>
                                          5-11-2019 9:33 AM
                                      </td>
                                  </tr>

                                  <tr>
                                      <td>
                                          <a href="#">New Message from Connect2Me</a>
                                      </td>
                                      <td>
                                          <a href="#">Alimi</a>
                                      </td>
                                      <td>
                                          5-11-2019 9:33 AM
                                      </td>
                                  </tr>
                              </tbody>
                          </table>

                          <div class="d-flex justify-content-end my-3">
                                 <a href="post-comment.php" class="load-more bg-red-900 text-white">ALL MESSAGES &#187;</a>
                            </div>

                      </div>



                      <div class="tab-pane fade" id="notification" role="tabpanel">
                          
                          <table class="table table-striped fs-13">
                              <thead class="">
                                  <tr>
                                      <th class="border-0 border-top"><input type="checkbox" /></th>
                                      <th class="border-0 border-top">Post</th>
                                      <th class="border-0 border-top"># Comments    </th>
                                      <th class="border-0 border-top"></th>
                                  </tr>
                              </thead>

                              <tbody>
                                  <tr>
                                     <td>
                                         <input type="checkbox" />
                                     </td>
                                      <td>
                                          <a href="#">Final Week: Myschool CBT challenge season 8 - N500,000 cash prizes, free airtime & activation pins - see instructions</a>
                                      </td>
                                      <td>
                                          92 Comments
                                      </td>
                                      <td>
                                          <button class="btn btn-danger btn-sm fs-14">Delete</button>
                                      </td>
                                  </tr>


                                   <tr>
                                     <td>
                                         <input type="checkbox" />
                                     </td>
                                      <td>
                                          <a href="#">Final Week: Myschool CBT challenge season 8 - N500,000 cash prizes, free airtime & activation pins - see instructions</a>
                                      </td>
                                      <td>
                                          92 Comments
                                      </td>
                                      <td>
                                          <button class="btn btn-danger btn-sm fs-14">Delete</button>
                                      </td>
                                  </tr>




                                 
                              </tbody>
                          </table>

                          <div class="d-flex justify-content-end my-3">
                                 <a href="post-comment.php" class="load-more bg-red-900 text-white">ALL NOTIFICATIONS &#187;</a>
                            </div>


                      </div>
                      <div class="tab-pane fade" id="friend-request" role="tabpanel" >
                          
                           <table class="table table-striped fs-13">     
                              <tbody>
                                  <tr>
                                     <td scope="row">
                                         <img src="assets/images/gsmarena_00.jpg" >
                                     </td>
                                      <td>
                                          <a href="#">Kinsley</a>
                                          <div>IBBU Male Student - 300 level</div>
                                      </td>
                                      <td>
                                          <button class="btn btn-danger btn-sm fs-14">Delete Request</button>
                                      </td>
                                  </tr>

                                 
                              </tbody>
                          </table>

                          <div class="d-flex justify-content-end my-3">
                                 <a href="post-comment.php" class="load-more bg-red-900 text-white">ALL FRIEND REQUEST &#187;</a>
                            </div>

                      </div>
                    </div>


                        </section>


                        <section class="row">
                             <div class="col-md-6">
                                 <div class="card coloured-links border">
                                      <div class="card-header">
                                        Group Recommendations
                                      </div>
                                      <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex ">
                                            <img src="assets/images/gsmarena_00.jpg" class="me-3" >
                                            <a href="#">Medicine and surgery uniuyo</a>
                                        </li>

                                        <li class="list-group-item d-flex ">
                                            <img src="assets/images/gsmarena_00.jpg" class="me-3" >
                                            <a href="#">Medicine and surgery uniuyo</a>
                                        </li>

                                        <li class="list-group-item d-flex ">
                                            <img src="assets/images/gsmarena_00.jpg" class="me-3" >
                                            <a href="#">Medicine and surgery uniuyo</a>
                                        </li>

                                        <li class="list-group-item d-flex ">
                                            <img src="assets/images/gsmarena_00.jpg" class="me-3" >
                                            <a href="#">Medicine and surgery uniuyo</a>
                                        </li>

                                        <li class="list-group-item d-flex ">
                                            <img src="assets/images/gsmarena_00.jpg" class="me-3" >
                                            <a href="#">Medicine and surgery uniuyo</a>
                                        </li>

                                        <li class="list-group-item d-flex py-3">
                                            <a href="post-comment.php" class="load-more bg-red-900 text-white me-3">FIND A GROUP</a>
                                            <a href="post-comment.php" class="load-more bg-red-900 text-white me-3">START A GROUP</a>
                                        </li>
                                      </ul>
                                    </div>
                             </div>


                               <div class="col-md-6">
                                 <div class="card coloured-links border">
                                      <div class="card-header">
                                        Connect2me
                                      </div>
                                      <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex ">
                                            <img src="assets/images/gsmarena_00.jpg" class="me-3 img-thumbnail" >
                                            <div>
                                                <a href="#">Kingsley</a> <span> (f ) UNIUYO aspirant</span>
                                            </div>
                                        </li>

                                         <li class="list-group-item d-flex ">
                                            <img src="assets/images/gsmarena_00.jpg" class="me-3 img-thumbnail" >
                                            <div>
                                                <a href="#">Kingsley</a> <span> (f ) UNIUYO aspirant</span>
                                            </div>
                                        </li>

                                         <li class="list-group-item d-flex ">
                                            <img src="assets/images/gsmarena_00.jpg" class="me-3 img-thumbnail" >
                                            <div>
                                                <a href="#">Kingsley</a> <span> (f ) UNIUYO aspirant</span>
                                            </div>
                                        </li>

                                        <li class="list-group-item d-flex py-3">
                                            <a href="post-comment.php" class="load-more bg-red-900 text-white me-3">FIND A FRIEND</a>
                                        </li>
                                      </ul>
                                    </div>
                             </div>
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