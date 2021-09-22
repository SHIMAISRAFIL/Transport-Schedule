<!--==============================header=================================-->
<header>
				<div class="menu_block">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="{{route('fronthome')}}">Home</a></li>
									<li class="">
									<a href="{{route('about')}}">About</a></li>
								
									
									<li><a href="{{route('contact')}}">Contacts</a></li>
									<li><a href="{{route('term')}}">Terms & Privacy</a></li>
									
									@if(auth()->user())
                        <li><a class="nav-item nav-link" href="{{route('officeemployee.logout')}}">Logout</a></li>
                        <li><a class="nav-item nav-link" href="">{{auth()->user()->name}}</a></li>
                        @else
						<li> <a class="nav-item nav-link" href="{{route('officeemployee.login')}}">Login</a></li>
						<li><a class="nav-item nav-link" href="{{route('user.signup')}}">Signup</a></li>

                            @endif

							<li><a href="{{route('front.search')}}">Search</a></li>
									
                                  

								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				



				</div>
				<div class="clear"></div>
			</header>