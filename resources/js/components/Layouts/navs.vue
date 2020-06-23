<template>
<div class="nav-left-sidebar sidebar-dark">
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
                  <router-link to="/Home"> <a class="nav-link" ><i class="far fa-chart-bar"></i>Dashboard </a> </router-link>
                </li>


                <li class="nav-item ">
              <router-link to="/category/index"><a class="nav-link "   ><i class="fa fa-list-alt"></i>List Categories </a></router-link>
                </li>

                <li class="nav-item ">
                 <router-link to="/product/index">   <a class="nav-link  "  ><i class="fab fa-product-hunt"></i>List Products </a> </router-link>
                </li>

                <li class="nav-item ">
                   <router-link to="/coupon/index"> <a class="nav-link"><i class="fa fa-tags"></i>List Coupons </a> </router-link>
                </li>
            </ul>
        </div>
    </nav>
</div>


<!--sidebar-menu-->

        </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
