<div class="col-lg-4 overflow-hidden order-2 order-md-1 p-2">
                        <main class="row gy-3 bg-white py-2">
                            <section>
                            <h6 class="content-title oswald-font fs-20">Marketplace</h6>

                              <main class="row gy-2 p-0">

                            <?php

                               foreach ([1,2,3] as $key => $value) {
                                  echo  "
                                <div class='card bg-white p-0 ps-3'>
                                              <div class='row g-0'>
                                                <div class='col-4'>
                                                  <img src='assets/images/gsmarena_002.jpg' class='w-100 h-100' alt='...'>
                                                </div>
                                                <div class='col-8'>
                                                  <div class='card-body py-0'>
                                                    <h5 class='card-title oswald-font lh-1'><a href='view_news.php' class='stretched-link fs-14 fw-bold'>ppo Reno8 Lite leaks: a rebranded Reno7 Lite for Europe</a></h5>
                                                    <div class='card-text fs-13'>
                                                        <span>&#8358;5,000</span>
                                                        <span class='bg-success px-1 rounded text-light'>UNIBEN</span>

                                                        <span class='bg-danger px-1 rounded text-light'>New</span>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                </div>";

                            }

                                ?>

                              </main>

                              <div class="d-flex justify-content-end my-3">
                                 <a href="post-comment.php" class="load-more bg-red-900 text-white">VIEW MORE &#187;</a>
                            </div>

                        </section>


                        <section>
                            <h6 class="content-title oswald-font fs-20">QUICK LINKS</h6>

                              <main class="px-2">

                            <?php

                               foreach ([1,2,3,4,5] as $key => $value) {

                                  echo  "<h5 class='lh-1 border-bottom oswald-font py-2'><a href='view_news.php' class='fs-14 fw-bold'>&#187; Ppo Reno8 Lite leaks</a></h5>";

                                }

                                ?>

                              </main>

                        </section>

                        <section>
                            <h6 class="content-title oswald-font fs-20">UPCOMING EVENTS</h6>

                              <main class="row gy-2 p-0">

                            <?php

                               foreach ([1,2,3] as $key => $value) {
                                  echo  "
                                <div class='card bg-white p-0 ps-3'>
                                              <div class='row g-0'>
                                                <div class='col-3 fs-10 pt-3 pb-1 bg-danger d-flex flex-column justify-content-center align-items-center text-white'>
                                                    <h6 class='fs-16 lh-0 fw-bold'>6th</h6>
                                                    <div>May</div>
                                                    <div>2022</div>
                                                </div>
                                                <div class='col-9'>
                                                  <div class='card-body py-0'>
                                                    <h5 class='card-title lh-1'>
                                                    <a href='view_news.php' class='stretched-link oswald-font fs-14 fw-bold'>JAMB exam for 2022 UTME candidates begins</a></h5>
                                                  </div>
                                                </div>
                                              </div>
                                </div>";

                            }

                                ?>

                              </main>

                               <div class="d-flex justify-content-end my-3">
                                 <a href="post-comment.php" class="load-more bg-red-900 text-white">VIEW MORE &#187;</a>
                            </div>
                        </section>

                         <section>
                                <h6 class="oswald-font fs-20 content-title mb-2">NEWSLETTER</h6>

                              <form class="row gy-2 p-0">

                                <div class="col-12">
                                    <label class="fs-12 fw-light">Subscribe to newsletter</label>
                                    <input class="form-control" />
                                </div>

                                 <div class="col-12 d-flex justify-content-end">
                                    <button class="btn oswald-font bg-gray-500 text-white">SUBSCRIBE</button>
                                </div>

                              </form>
                        </section>

                        </main>
</div>