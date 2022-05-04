<header x-data="{nav : false}">
<section class="bg-gray-200 top-header">
    <div class="container text-gray-100 my-0">
        <div class="row bg-gray-500 py-2">
            <div class="col d-flex justify-content-start align-items-center left">
               <button class="btn text-gray-100" x-on:click="nav = !nav">
                    <i :class="nav ? 'fas fa-times' : 'fas fa-bars'"></i>
                </button>
               <a href="#" class="ms-2 fs-25 text-gray-100 fw-bold">GSMERAZE</a>
            </div>
            <div class="col d-flex align-items-center middle">
                <div class="input-group ">
                  <input type="text" class="form-control fs-12 bg-gray-100" placeholder="Search..">
                  <span class="input-group-text bg-gray-100 text-gray-500">
                      <i class="fas fa-search"></i>
                  </span>
                </div>
            </div>
            <div class="col d-flex align-items-center justify-content-end right">

                <a href="#" class="me-2 fs-18">
                    <i class="fas fa-lightbulb"></i>
                    <span :class="nav ? 'inline-block' : 'd-none' ">TIP US</span>
                </a>

                <span class="me-2">|</span>

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

                <span class="me-2">|</span>

                 <a href="#" class="me-2 fs-18">
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
<nav class="nav p-0" x-show="nav" >
          <ul class="container p-0 bg-gray-300 d-flex align-items-center">
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Phone number</a></li>
            <li><a href="#">Deals</a></li>
            <li><a href="#">Merge</a></li>
            <li><a href="#">Coverage</a></li>
            <li><a href="#">Contact</a></li>
         </ul>
</nav>
</header>