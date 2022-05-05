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

                    <div class="col-md-8 bg-gray-100 p-2 ">

                        <h2 class="content-title fw-bold fs-16">STUDY PAST QUESTIONS</h2>
                        <div class="row g-3 m-0 mb-3  pb-3 past-questions-list bg-white">

                            <?php

                               foreach (["Commerce","Agric Science","Government","History","Economics","Insurance","Mathematics","Data Processing","Chemistry","Fine Arts","Biology"] as $key => $value) {

                                    echo "<div class='col-md-4 d-flex'>
                                            <img src='assets/images/gsmarena_00.jpg' class='me-2' style='width: 30px;height: 30px;' alt='...'>
                                            <a href='#'>{$value}</a>
                                        </div>";
                               }

                           ?>

                        </div>

                        <header class="content-title news-header">
                            <h2>News Updates</h2>
                            <p>SEE THE BEST PHONES RIGHT NOW IN OUR ALL-NEW</p>
                        </header>
                        <div class="row gy-3 m-0 py-0 card-list">
                           <?php

                           foreach ([1,2,3,4,5,6,7,8,9,10,11] as $key => $value) {
                              echo  "<div class='card bg-white p-0'>
                                          <div class='row g-0'>
                                            <div class='col-md-4'>
                                              <img src='assets/images/gsmarena_00.jpg' class='w-100 h-100' alt='...'>
                                            </div>
                                            <div class='col-md-8'>
                                              <div class='card-body'>
                                                <h5 class='card-title'><a href='view_news.php' class='stretched-link'>ppo Reno8 Lite leaks: a rebranded Reno7 Lite for Europe</a></h5>
                                                <p class='card-text'>Never mind that the Reno7 Lite is already available in Europe and that it is already a rebranded Reno7 Z.</p>
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
                    </div>

                </div>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>