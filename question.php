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
                    
                    <?php require_once("inc/question-sidebar.php"); ?>

                    <section class="questions-wrapper col-lg-8 order-1 order-md-2 bg-white border py-3">
                        <h2>Government Past Questions</h2>
                        <main class="row gy-3">
                           <section class="p-3 bg-gray-100">
                                <form class="row g-2">

                                    <div class="col-md-4">
                                        <label class="fs-14 fw-light">Exam Type:</label>
                                        <select class="form-select form-select-sm">
                                            <option>JAMB</option>
                                            <option>WAEC</option>
                                            <option>NECO</option>
                                        </select>
                                    </div>

                                     <div class="col-md-4">
                                        <label class="fs-14 fw-light">Exam Year:</label>
                                        <select class="form-select form-select-sm">
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="fs-14 fw-light">Question Type:</label>
                                        <select class="form-select form-select-sm">
                                            <option>Objective</option>
                                            <option>Theory</option>
                                            <option>Practcal</option>
                                        </select>
                                    </div>

                                     <div class="col-12">
                                        <button type="submit" class='me-2 btn load-more bg-gray-500 text-white'>Get Questions</button>
                                        <button type="submit" class='me-2 btn load-more bg-gray-500 text-white'>Change Subjects</button>
                                    </div>
                                                        
                                </form>

                                
                           </section>

                            <section class="row gy-3">
                        
                                <?php

                                       foreach ([1,2,3,4,5] as $key => $value) {

                                          echo  "
                                    <section class='col-12 question-item'>
                                        <div class='d-flex'>
                                            <section class='pe-3'>
                                                <button class='btn option-number'>{$value}</button>
                                            </section>
                                            <section>
                                                <div class='question'>Where the constitution is supreme,unconstitutional acts of the executive and the the legislature can be checked by the courts throughs</div>

                                                <ul class='list-style-none'>
                                                    <li class='option'><span>A.</span> <span>persuasive while influence is directive</span></li>
                                                    <li class='option'><span>B.</span> <span>coercive while influence is harmful</span></li>
                                                    <li class='option'><span>C.</span> <span>coercive while influence is persuasive</span></li>
                                                    <li class='option'><span>D.</span> <span>arrogant while influence is corruptive</span></li>
                                                </ul>

                                                <footer class='py-3'>
                                                    <a href='#' class='load-more bg-gray-500 text-white'>VIEW ANSWER</a>
                                                </footer>
                                            </section>
                                        </div>
                                    </section>";

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

                </div>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>