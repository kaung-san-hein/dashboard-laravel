<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo" style="text-align: center;">
        <a href="http://www.rcs-mm.com" class="simple-text logo-normal">
            {{ __('Real Code Solutions') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="https://bestprofilepictures.com/wp-content/uploads/2021/04/Cool-Profile-Picture.jpg" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        {{ auth()->user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#employees">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                    <p>{{ __('Employees') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="employees">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'employees' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('employees') }}">
                                <i class="material-icons">-</i>
                                <span class="sidebar-normal">{{ __('ALL') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'create-employee' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('create.employee') }}">
                                <i class="material-icons">-</i>
                                <span class="sidebar-normal">{{ __('Create') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#products">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                    <p>{{ __('Products') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="products">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'products' ? ' active' : '' }}">
                            <a class="nav-link" href="">
                                <i class="material-icons">-</i>
                                <span class="sidebar-normal">{{ __('ALL') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'create-product' ? ' active' : '' }}">
                            <a class="nav-link" href="">
                                <i class="material-icons">-</i>
                                <span class="sidebar-normal">{{ __('Create') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#shops">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                    <p>{{ __('Shops') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="shops">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'shop' ? ' active' : '' }}">
                            <a class="nav-link" href="">
                                <i class="material-icons">-</i>
                                <span class="sidebar-normal">{{ __('ALL') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'create-shop' ? ' active' : '' }}">
                            <a class="nav-link" href="">
                                <i class="material-icons">-</i>
                                <span class="sidebar-normal">{{ __('Create') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>