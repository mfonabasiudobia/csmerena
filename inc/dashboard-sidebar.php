<div class="col-lg-3 overflow-hidden" x-data="{ show : true}">



<div class="d-block d-md-none">
    <a class="btn p-0 text-decoration-none" x-on:click='show = !show'>
      <i class="fas fa-bars border p-2 bg-white"></i>
      <span>Dashboard Menu</span>
    </a>
</div>
<div class="accordion accordion-flush border dashboard-sidebar"  id="dashboard-accordion" :class="show ? 'd-none d-md-block' : 'd-block'">

  <div class="accordion-item">
    <h2 class="accordion-header">
      <a href='#' class="accordion-button remove-arrow collapsed d-flex" >
        <div>
          <i class="fas fa-th"></i> 
        </div>
        <span>Dashboard</span>
      </a>
    </h2>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed d-flex" type="button" data-bs-toggle="collapse" data-bs-target="#flush-blog">
        <div>
          <i class="fas fa-comment-alt"></i> 
        </div>

        <span>Blog</span>
      </button>
    </h2>
    <div id="flush-blog" class="accordion-collapse collapse" data-bs-parent="#dashboard-accordion">
      <div class="accordion-body">
        <ul class="list-style-none fs-14 d-grid gap-2">
          <li>
            <a href="#">
              <i class="fas fa-chevron-right me-2"></i>
              <span>View Post</span>
            </a>
          </li>
          <li>
             <a href="#">
              <i class="fas fa-chevron-right me-2"></i>
              <span>Create Post</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
 
   <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed d-flex" type="button" data-bs-toggle="collapse" data-bs-target="#flush-events">
         <div>
          <i class="far fa-calendar-alt "></i>
        </div>

         <span>Events</span>
      </button>
    </h2>
    <div id="flush-events" class="accordion-collapse collapse" data-bs-parent="#dashboard-accordion">
      <div class="accordion-body">
        <ul class="list-style-none fs-14 d-grid gap-2">
          <li>
            <a href="#">
              <i class="fas fa-chevron-right me-2"></i>
              <span>View Post</span>
            </a>
          </li>
          <li>
             <a href="#">
              <i class="fas fa-chevron-right me-2"></i>
              <span>Create Post</span>
            </a>
          </li>
        </ul>
        </ul>
      </div>
    </div>
  </div>


   <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed d-flex" type="button" data-bs-toggle="collapse" data-bs-target="#flush-users">
         <div>
          <i class="fas fa-users "></i>
        </div>

         <span>Users</span>
      </button>
    </h2>
    <div id="flush-users" class="accordion-collapse collapse" data-bs-parent="#dashboard-accordion">
      <div class="accordion-body">
        <ul class="list-style-none fs-14 d-grid gap-2">
          <li>
            <a href="#">
              <i class="fas fa-chevron-right me-2"></i>
              <span>View Post</span>
            </a>
          </li>
          <li>
             <a href="#">
              <i class="fas fa-chevron-right me-2"></i>
              <span>Create Post</span>
            </a>
          </li>
        </ul>
        </ul>
      </div>
    </div>
  </div>


</div>

</div>