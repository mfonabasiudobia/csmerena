<header x-data="{nav : false, search : false}">

<div class="p-2 d-md-none" x-show="search">
    <div class="input-group container">
                  <input type="text" class="form-control fs-12 bg-gray-100" placeholder="Search..">
                  <span class="input-group-text bg-red-900 text-gray-100">
                      <i class="fas fa-search"></i>
                  </span>
    </div>
</div>
<section class="bg-gray-200 top-header">
    <div class="container text-gray-100 my-0">
        <div class="row bg-gray-500 py-2">
            <div class="col d-flex justify-content-start align-items-center left">
                <button class="btn text-gray-100 d-block d-md-none" x-on:click="nav = !nav">
                    <i :class="nav ? 'fas fa-times' : 'fas fa-bars'" ></i>
                </button>
               <a href="index.php" class="ms-2 fs-25 text-gray-100 fw-bold">GSMERAZE</a>
            </div>
            <div class="col d-flex align-items-center d-none d-md-block">
                <div class="input-group ">
                  <input type="text" class="form-control fs-12 bg-gray-100" placeholder="Search..">
                  <span class="input-group-text bg-gray-100 text-gray-500">
                      <i class="fas fa-search"></i>
                  </span>
                </div>
            </div>
            <div class="col d-flex align-items-center justify-content-end right">

                <a href="#" class="me-2 d-none d-md-inline-block fs-18">
                    <i class="fas fa-lightbulb"></i>
                    <span>TIP US</span>
                </a>

                <span class="me-2 d-none d-md-inline-block">|</span>

                <a href="#" class="me-2 d-none d-md-inline-block fs-18">
                    <i class="fab fa-youtube"></i>
                    <span>1.9M</span>
                </a>

                <a href="#" class="me-2 d-none d-md-inline-block fs-18">
                    <i class="fas fa-rss"></i>
                    <span>RSS</span>
                </a>


                <a href="#" class="me-2 d-none d-md-inline-block fs-18">
                    <i class="fab fa-instagram"></i>
                    <span>1.9M</span>
                </a>

                <a href="#" class="me-2 d-none d-md-inline-block fs-18">
                    <i class="fas fa-shopping-cart"></i>
                    <span>CART</span>
                </a>

                <span class="me-2 d-none d-md-inline-block">|</span>

                 <a href="#" class="me-3">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Login</span>
                </a>

                <a href="#" class="me-3 fs-18">
                    <i class="fas fa-user-plus"></i>
                    <span>Signup</span>
                </a>

                <span class="dropup rounded-0">
                    <a href="#" class="me-2 fs-18" type="button" id="profile-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle"></i>
                    <span>Profile</span>
                </a>
                  <ul class="dropdown-menu py-0 fs-14" aria-labelledby="profile-dropdown">
                    <li class="py-1">
                        <a href='#' class="dropdown-item d-inline-block w-100 text-gray-500"><i class="me-2 fas fa-th"></i> Dashboard</a></li>
                    <li class="py-1">
                        <a href='#' class="dropdown-item d-inline-block w-100 text-gray-500"><i class="me-2 fas fa-user"></i> View Profile</a></li>
                    <li class="py-1">
                        <a href='#' class="dropdown-item d-inline-block w-100 text-gray-500"><i class="me-2 fas fa-user-circle"></i> Update Profile</a></li>
                    <li class="m-0 p-0"><hr class="p-0 m-0 dropdown-divider"></li>
                    <li class="py-1">
                        <a href='#' class="dropdown-item d-inline-block w-100 text-gray-500"><i class="me-2 fas fa-sign-out-alt"></i> Logout</a></li>
                  </ul>
                </span>

            </div>
          </div>
    </div>
</section>
<nav class="destop-nav p-0" >
          <ul class="container p-0 bg-gray-700 d-flex align-items-center overflow-auto">
            <li class="flex-fill"><a href="#">Home</a></li>
            <li class="flex-fill"><a href="#">News</a></li>
            <li class="flex-fill"><a href="#">Reviews</a></li>
            <li class="flex-fill"><a href="#">Videos</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="#">Features</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="#">Phone number</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="marketplace.php">Buy an Item</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="#">Merge</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="#">Coverage</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="#">Contact</a></li>
            <li class="d-inline-block flex-fill d-md-none"><a href="#" x-on:click="search = !search" class="search"><i class="fas fa-search"></i></a></li>
         </ul>
</nav>

<nav class="mobile-nav bg-gray-200 text-gray-100 overflow-auto d-md-none" :class="nav ? 'd-block d-md-none' : 'd-none'">
        <div class="container socials d-flex justify-content-center pt-2">
                <a href="#" class="me-2 fs-18">
                    <i class="fas fa-lightbulb"></i>
                </a>
                  
                <a href="#" class="me-2 fs-18">
                    <i class="fab fa-youtube"></i>

                </a>

                <a href="#" class="me-2 fs-18">
                    <i class="fas fa-rss"></i>
                </a>


                <a href="#" class="me-2 fs-18">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="#" class="me-2 fs-18">
                    <i class="fas fa-shopping-cart"></i>
                </a>
        </div>
        
        <div class="row gy-4 mt-2 px-2">
            <div class="col-4 px-0">
                <ul class="list-style-none border-end border-secondary">
                    <li class="flex-fill"><a href="#">Home</a></li>
                    <li class="flex-fill"><a href="#">News</a></li>
                    <li class="flex-fill"><a href="#">Reviews</a></li>
                    <li class="flex-fill"><a href="#">Videos</a></li>
                 </ul>
            </div>

            <div class="col-4 px-0">
                <ul class="list-style-none border-end border-secondary">
                    <li class="flex-fill"><a href="#">Home</a></li>
                    <li class="flex-fill"><a href="#">News</a></li>
                    <li class="flex-fill"><a href="#">Reviews</a></li>
                    <li class="flex-fill"><a href="#">Videos</a></li>
                 </ul>
            </div>


            <div class="col-4 px-0">
                <ul class="list-style-none border-secondary">
                    <li class="flex-fill"><a href="#">Home</a></li>
                    <li class="flex-fill"><a href="#">News</a></li>
                    <li class="flex-fill"><a href="#">Reviews</a></li>
                    <li class="flex-fill"><a href="#">Videos</a></li>
                 </ul>
            </div>


            <div class="col-4 px-0">
                <ul class="list-style-none border-end border-secondary">
                    <li class="flex-fill"><a href="#">Home</a></li>
                    <li class="flex-fill"><a href="#">News</a></li>
                    <li class="flex-fill"><a href="#">Reviews</a></li>
                    <li class="flex-fill"><a href="#">Videos</a></li>
                 </ul>
            </div>


            <div class="col-4 px-0">
                <ul class="list-style-none border-end border-secondary">
                    <li class="flex-fill"><a href="#">Home</a></li>
                    <li class="flex-fill"><a href="#">News</a></li>
                    <li class="flex-fill"><a href="#">Reviews</a></li>
                    <li class="flex-fill"><a href="#">Videos</a></li>
                 </ul>
            </div>


            <div class="col-4 px-0">
                <ul class="list-style-none border-secondary">
                    <li class="flex-fill"><a href="#">Home</a></li>
                    <li class="flex-fill"><a href="#">News</a></li>
                    <li class="flex-fill"><a href="#">Reviews</a></li>
                    <li class="flex-fill"><a href="#">Videos</a></li>
                 </ul>
            </div>
        </div>
</nav>
</header>
