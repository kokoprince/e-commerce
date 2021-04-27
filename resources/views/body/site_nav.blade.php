
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="header-top-wraper" >
        <div class="row">
            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                <div class="menu-switcher-pro">
                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                <div class="header-top-menu tabl-d-n">
                    <div class="breadcome-heading">
                        <form method="post" role="search" class="">
                            @csrf
                            <input type="text" style="color: white" placeholder="Search..." class="form-control search_data">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="header-right-info">
                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle" >
                            </a>
                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn" style="position: absolute;left:-450%">
                                <li><a href="{{ route('login') }}" class="logout"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
