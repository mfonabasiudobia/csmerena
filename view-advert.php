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
            <div class="container px-0">
                
                <div class="row g-3">
                    
                    <?php require_once("inc/dashboard-sidebar.php"); ?>

                    <div class="col-lg-9 view-news">

                    <main class="p-3  border bg-white mb-3">
                        
                     <h1>Classified Adverts</h1>

                     <div class="table-responsive">
                         <table class="table table-striped">
                             <thead>
                                 <tr>
                                     <th class="border-light">Title</th>
                                     <th class="border-light">Category</th>
                                     <th class="border-light">Item Price (₦)</th>
                                     <th class="border-light">Review Status</th>
                                     <th class="border-light">Status</th>
                                     <th class="border-light">Date Posted</th>
                                 </tr>
                             </thead>

                             <tbody>
                                 <tr>
                                     <td>djdjdj</td>
                                     <td>jdjdjd</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                 </tr>

                                 <tr>
                                     <td>djdjdj</td>
                                     <td>jdjdjd</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                 </tr>


                                 <tr>
                                     <td>djdjdj</td>
                                     <td>jdjdjd</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                 </tr>


                                 <tr>
                                     <td>djdjdj</td>
                                     <td>jdjdjd</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                     <td>jdjdj</td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>

                    </main>

                    </div>

                </div>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>