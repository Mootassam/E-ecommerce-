<!--sidebar-menu-->
<div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <li class="nav-divider">
                    Menu
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{$menu_active==1? ' active':''}}" href="{{url('/admin')}}"  ><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                </li>

                <li class="nav-item ">

                    <a class="nav-link {{$menu_active==2? ' active':''}}" href="{{url('/admin/category/create')}}"  ><i class="fa fa-fw fa-user-circle"></i>Add Categories <span class="badge badge-success">6</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{$menu_active==3? ' active':''}}" href="{{route('category.index')}}"  ><i class="fa fa-fw fa-user-circle"></i>List Categories <span class="badge badge-success">6</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{$menu_active==4? ' active':''}}" href="{{url('/admin/product/create')}}" ><i class="fa fa-fw fa-user-circle"></i>Add New Products <span class="badge badge-success">6</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{$menu_active==5? ' active':''}}" href="{{route('product.index')}}"  ><i class="fa fa-fw fa-user-circle"></i>List Products <span class="badge badge-success">6</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{$menu_active==6? ' active':''}}" href="{{route('coupon.create')}}"  ><i class="fa fa-fw fa-user-circle"></i>Add New Coupon <span class="badge badge-success">6</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link a{{$menu_active==7? ' active':''}}"href="{{route('coupon.index')}}"  ><i class="fa fa-fw fa-user-circle"></i>List Coupons <span class="badge badge-success">6</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>


<!--sidebar-menu-->
