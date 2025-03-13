<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
                        <a href="{{ route('mk') }}" class="pr-4 btn btn-primary" > Archive </a>

                    </div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
{{--								<li>--}}
{{--									<a href="#">--}}
{{--										<img src="{{ asset('assets/admin/vendors/images/img.jpg') }}" alt="">--}}
{{--										<h3>John Doe</h3>--}}
{{--										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>--}}
{{--									</a>--}}
{{--								</li>--}}
{{--								<li>--}}
{{--									<a href="#">--}}
{{--										<img src="{{ asset('assets/admin/vendors/images/photo1.jpg') }}" alt="">--}}
{{--										<h3>Lea R. Frith</h3>--}}
{{--										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>--}}
{{--									</a>--}}
{{--								</li>--}}

							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="{{ asset('assets/admin/vendors/images/photo1.jpg') }}" alt="">
						</span>
						<span class="user-name">
						 {{ Auth::user()->username }}
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="#"><i class="dw dw-user1"></i> Profil</a>
						<a class="dropdown-item" href="#"><i class="dw dw-settings2"></i> Sozlamalar</a>
						<a class="dropdown-item" href="#"><i class="dw dw-help"></i> Yordam</a>
						 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="dw dw-logout"></i>
                                        {{ __('Chiqish') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

						
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg" alt=""></a>
			</div>
		</div>