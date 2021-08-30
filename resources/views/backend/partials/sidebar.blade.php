<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          
          </li><li class="nav-item">
            <a class="nav-link" href="{{route('category.list')}}">
              <span data-feather="file"></span>
              Category
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.list')}}">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('user.list')}}">
              <span data-feather="users"></span>
              Users
               </a>
              </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.info')}}">
              <span data-feather="users"></span>
              Admins
               </a>
              </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('officeemployee.info')}}">
              <span data-feather="users"></span>
              OfficeEmployees
               </a>
              </li>
            
              <li class="nav-item">
            <a class="nav-link" href="{{route('driver.info')}}">
              <span data-feather="users"></span>
              Drivers
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('regulartrip.list')}}">
              <span data-feather="users"></span>
              Regular Trips
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('schedule.list')}}">
              <span data-feather="shopping-cart"></span>
              Schedules
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('location.list')}}">
              <span data-feather="users"></span>
              Locations
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('fuelcost.list')}}">
              <span data-feather="users"></span>
              Fuel cost
            </a>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="{{route('transport.info')}}">
              <span data-feather="users"></span>
              Transports
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
         
        </ul>

        
        
      </div>
    </nav>