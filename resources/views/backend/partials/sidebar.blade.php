<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        @if(auth()->user()->role=='admin')
        <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    {{auth()->user()->name}}
                </a>
            </li>
                    
               
       
                <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
          </li>
        

          <li  class="nav-item">
            <a class="nav-link active" href="{{route('user.list')}}">
              <span data-feather="users"></span>
              Users
               </a>
              </li>


          

          <li class="nav-item">
            <a class="nav-link active" href="{{route('officeemployee.list')}}">
              <span data-feather="users"></span>
              OfficeEmployees
               </a>
              </li>
            
              <li class="nav-item">
            <a class="nav-link active" href="{{route('driver.list')}}">
              <span data-feather="users"></span>
              Drivers
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="{{route('transport.list')}}">
              <span data-feather="users"></span>
              Transports
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="{{route('regulartrip.list')}}">
              <span data-feather="users"></span>
               Trips
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="{{route('schedule.list')}}">
              <span data-feather="shopping-cart"></span>
              Schedules
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" href="{{route('location.list')}}">
              <span data-feather="users"></span>
              Locations
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link active" href="{{route('fuelcost.list')}}">
              <span data-feather="users"></span>
              Fuel cost
            </a>
          </li>



         
          
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
            @endif
            <!-- @if(auth()->user()->role=='officeemployee')

            <li class="nav-item">
            <a class="nav-link active" href="{{route('schedule.list')}}">
              <span data-feather="shopping-cart"></span>
              Schedules
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link active" href="{{route('officeemployee.list')}}">
              <span data-feather="users"></span>
              OfficeEmployees
               </a>
              </li>

               
          <li class="nav-item">
            <a class="nav-link active" href="{{route('urgenttrip.create')}}">
              <span data-feather="users"></span>
             Need Urgent Trip
               </a>
              </li>

              <li class="nav-item">
            <a class="nav-link active" href="">
              <span data-feather="users"></span>
             Review
               </a>
              </li>

              @endif

              @if(auth()->user()->role=='driver')
              <li class="nav-item">
            <a class="nav-link active" href="{{route('driver.list')}}">
              <span data-feather="users"></span>
              Drivers
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="{{route('transport.list')}}">
              <span data-feather="users"></span>
              Transports
            </a>
          </li>
<li class="nav-item">
<a class="nav-link active" href="{{route('schedule.list')}}">
  <span data-feather="shopping-cart"></span>
  Schedules
</a>
</li>
@endif -->
        </ul>

        
        
      </div>
    </nav>