<div class="aiz-sidebar-wrap">
    <div class="aiz-sidebar left c-scrollbar">
        <div class="aiz-side-nav-logo-wrap">
            {{-- <a  class="d-block text-left">
                @if(get_setting('system_logo_white') != null)
                    <img class="mw-100" src="{{ uploaded_asset(get_setting('system_logo_white')) }}" class="brand-icon" alt="{{ get_setting('site_name') }}">
                @else
                    <img class="mw-100" src="{{ static_asset('assets/img/logo.png') }}" class="brand-icon" alt="{{ get_setting('site_name') }}">
                @endif
            </a> --}}
        </div>
        <div class="aiz-side-nav-wrap">
            {{-- <div class="px-20px mb-3">
                <input class="form-control bg-soft-secondary border-0 form-control-sm text-white" type="text" name="" placeholder="('Search in menu')" id="menu-search" onkeyup="menuSearch()">
            </div> --}}
            {{-- <ul class="aiz-side-nav-list" id="search-menu">
            </ul> --}}
            <ul class="aiz-side-nav-list" id="main-menu" data-toggle="aiz-side-menu">
                <li class="aiz-side-nav-item">
                    <a  class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{('Dashboard')}}</span>
                    </a>
                </li>
                <!-- movie -->
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-shopping-cart aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{('Movies')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <!--Submenu-->
                        <ul class="aiz-side-nav-list level-2">
                            <li class="aiz-side-nav-item">
                                <a class="aiz-side-nav-link" >
                                    <span class="aiz-side-nav-text">{{('Create a new movie')}}</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{('All Movies')}}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                
                <!-- users -->
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-user-friends aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{ ('Users') }}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                                <a  class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{ ('Create new User') }}</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a  class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{ ('Users list') }}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                
            </ul><!-- .aiz-side-nav -->
        </div><!-- .aiz-side-nav-wrap -->
    </div><!-- .aiz-sidebar -->
    <div class="aiz-sidebar-overlay"></div>
</div><!-- .aiz-sidebar -->
