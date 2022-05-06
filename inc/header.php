<header x-data="{nav : false, search : false}">

<div class="p-2" x-show="search">
    <div class="input-group container">
                  <input type="text" class="form-control fs-12 bg-gray-100" placeholder="Search..">
                  <span class="input-group-text bg-red-900 text-gray-100">
                      <i class="fas fa-search"></i>
                  </span>
    </div>
</div>
<section class="bg-gray-200 top-header">
    <div class="container text-gray-100 my-0">
        <div class="row bg-gray-500 py-2 position-sticky top-0">
            <div class="col d-flex justify-content-start align-items-center left">
                <button class="btn text-gray-100" x-on:click="nav = !nav">
                    <i :class="nav ? 'fas fa-times' : 'fas fa-bars'" ></i>
                </button>
               <a href="#" class="ms-2 fs-25 text-gray-100 fw-bold">GSMERAZE</a>
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
                    <span :class="nav ? 'inline-block' : 'd-none' ">TIP US</span>
                </a>

                <span class="me-2 d-none d-md-inline-block">|</span>

                <a href="#" class="me-2 d-none d-md-inline-block fs-18">
                    <i class="fab fa-youtube"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">1.9M</span>
                </a>

                <a href="#" class="me-2 d-none d-md-inline-block fs-18">
                    <i class="fas fa-rss"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">RSS</span>
                </a>


                <a href="#" class="me-2 d-none d-md-inline-block fs-18">
                    <i class="fab fa-instagram"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">1.9M</span>
                </a>

                <a href="#" class="me-2 d-none d-md-inline-block fs-18">
                    <i class="fas fa-shopping-cart"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">CART</span>
                </a>

                <span class="me-2 d-none d-md-inline-block">|</span>

                 <a href="#" :class="nav ? 'me-3 fs-18' : 'me-2 fs-18'">
                    <i class="fas fa-sign-in-alt"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">Login</span>
                </a>

                <a href="#" class="me-2 fs-18">
                    <i class="fas fa-user-plus"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">Signup</span>
                </a>

            </div>
          </div>
    </div>
</section>
<nav class="destop-nav p-0" :class="nav ? 'd-none d-md-block' : 'd-block d-md-none'" >
          <ul class="container p-0 bg-gray-700 d-flex align-items-center overflow-auto">
            <li class="flex-fill"><a href="#">Home</a></li>
            <li class="flex-fill"><a href="#">News</a></li>
            <li class="flex-fill"><a href="#">Reviews</a></li>
            <li class="flex-fill"><a href="#">Videos</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="#">Features</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="#">Phone number</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="#">Deals</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="#">Merge</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="#">Coverage</a></li>
            <li class="d-none flex-fill d-md-inline-block"><a href="#">Contact</a></li>
            <li class="d-inline-block flex-fill d-md-none"><a href="#" x-on:click="search = !search" class="search"><i class="fas fa-search"></i></a></li>
         </ul>
</nav>

<nav class="mobile-nav bg-gray-200 text-gray-100 overflow-auto" :class="nav ? 'd-block d-md-none' : 'd-none'">
        <div class="container socials d-flex justify-content-center pt-2">
                <a href="#" class="me-2 fs-18">
                    <i class="fas fa-lightbulb"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">TIP US</span>
                </a>

                <a href="#" class="me-2 fs-18">
                    <i class="fab fa-youtube"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">1.9M</span>
                </a>

                <a href="#" class="me-2 fs-18">
                    <i class="fas fa-rss"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">RSS</span>
                </a>


                <a href="#" class="me-2 fs-18">
                    <i class="fab fa-instagram"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">1.9M</span>
                </a>

                <a href="#" class="me-2 fs-18">
                    <i class="fas fa-shopping-cart"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">CART</span>
                </a>
        </div>
        <ul class="container">
            <li class="flex-fill"><a href="#">Home</a></li>
            <li class="flex-fill"><a href="#">News</a></li>
            <li class="flex-fill"><a href="#">Reviews</a></li>
            <li class="flex-fill"><a href="#">Videos</a></li>
            <li class="flex-fill"><a href="#">Features</a></li>
            <li class="flex-fill"><a href="#">Phone number</a></li>
            <li class="flex-fill"><a href="#">Deals</a></li>
            <li class="flex-fill"><a href="#">Merge</a></li>
            <li class="flex-fill"><a href="#">Coverage</a></li>
            <li class="flex-fill"><a href="#">Contact</a></li>
         </ul>
</nav>
</header>