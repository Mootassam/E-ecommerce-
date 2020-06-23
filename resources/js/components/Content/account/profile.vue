<template>
<div class="row">
    <!-- ============================================================== -->
    <!-- profile -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
        <!-- ============================================================== -->
        <!-- card profile -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <div class="user-avatar text-center d-block">
                    <img src="assets/images/avatar-1.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                </div>
                <div class="text-center">
                    <h2 class="font-24 mb-0"></h2>
                    <p>Project Manager @Influnce</p>
                </div>
            </div>
            <div class="card-body border-top">
                <h3 class="font-16">Contact Information</h3>
                <div class="">
                    <ul class="list-unstyled mb-0">
                    <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i></li>
                    <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i></li>
                </ul>
                </div>
            </div>
            <div class="card-body border-top">
                <h3 class="font-16">Rating</h3>
                <h1 class="mb-0">4.8</h1>
                <div class="rating-star">
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <p class="d-inline-block text-dark">14 Reviews </p>
                </div>
            </div>
            <div class="card-body border-top">
                <h3 class="font-16">Social Channels</h3>
                <div class="">
                    <ul class="mb-0 list-unstyled">
                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-facebook-square mr-1 facebook-color"></i>fb.me/michaelchristy</a></li>
                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-twitter-square mr-1 twitter-color"></i>twitter.com/michaelchristy</a></li>
                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-instagram mr-1 instagram-color"></i>instagram.com/michaelchristy</a></li>
                    <li class="mb-1"><a href="#"><i class="fas fa-fw fa-rss-square mr-1 rss-color"></i>michaelchristy.com/blog</a></li>
                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-pinterest-square mr-1 pinterest-color"></i>pinterest.com/michaelchristy</a></li>
                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-youtube mr-1 youtube-color"></i>youtube/michaelchristy</a></li>
                </ul>
                </div>
            </div>
            <div class="card-body border-top">
                <h3 class="font-16">Category</h3>
                <div>
                    <a href="#" class="badge badge-light mr-1">Fitness</a><a href="#" class="badge badge-light mr-1">Life Style</a><a href="#" class="badge badge-light mr-1">Gym</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end card profile -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end profile -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- campaign data -->
    <!-- ============================================================== -->
    <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
        <!-- ============================================================== -->
        <!-- campaign tab one -->
        <!-- ============================================================== -->
        <div class="influence-profile-content pills-regular">

            <div class="tab-content" id="pills-tabContent">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>

                </div>
                <div class="tab-pane fade show active" id="pills-msg" role="tabpanel" aria-labelledby="pills-msg-tab">
                    <div class="card">
                        <h5 class="card-header">Change Password</h5>
                        <div class="card-body">
                            <form method="post" action="" name="password_validate" id="password_validate" novalidate="novalidate" >
                                <div class="row">
                                    <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4">
                                        <div class="form-group">
                                            <label for="name">Current password</label>
                                            <input type="text" class="form-control form-control-lg" name="pwd_current" id="pwd_current"  placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">New Password</label>
                                            <input type="email" class="form-control form-control-lg" name="pwd_new" id="pwd_new"  placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">Confirm Password</label>
                                            <input type="text" class="form-control form-control-lg" name="pwdnew_confirm" id="pwdnew_confirm" placeholder="">
                                        </div>

                                        <button type="submit" value="Update Password"  class="btn btn-primary float-right">Update Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end campaign tab one -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end campaign data -->
    <!-- ============================================================== -->
</div>
</template>

<script>
export default {

}
</script>

<style>

</style>
