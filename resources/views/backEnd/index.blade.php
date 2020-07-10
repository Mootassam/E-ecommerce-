@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')

<div class="ecommerce-widget">


    <div class="row">
        <!-- ============================================================== -->
        <!-- sales  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Sales</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{$tat}} TND </h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end sales  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- new customer  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Totale Clients</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{$user}}</h1>
                    </div>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end new customer  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- visitor  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Revenue per user

                    </h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{$revenue}}</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end visitor  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- total orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Total Orders</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{$totC}}</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                        <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end total orders  -->
        <!-- ============================================================== -->
    </div>


    <div class="row">
        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- recent orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Recent Orders</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">Users_email</th>
                                    <th class="border-0">Phone</th>
                                    <th class="border-0">Country</th>
                                    <th class="border-0">Adresse</th>
                                    <th class="border-0">city</th>



                                    <th class="border-0">Poste Code Id</th>
                                    <th class="border-0">Created_at</th>
                                    <th class="border-0">Coupon_Code</th>

                                    <th class="border-0">Totale</th>
                                    <th class="border-0">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)
                                <tr>
                                    <td>{{$item->users_email}}</td>
                                    <td>{{$item->mobile}}</td>
                                    <td>{{$item->country}} </td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->city}}</td>
                                    <td>{{$item->pincode}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->coupon_code}} TND </td>
                                    <td>{{$item->grand_total}} TND </td>
                                    <td><span class="badge-dot badge-success mr-1"></span>{{$item->order_status}} </td>

                                </tr>
                                @endforeach

                                <tr>
                                    <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end recent orders  -->


        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- customer acquistion  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- end customer acquistion  -->
        <!-- ============================================================== -->
    </div>


</div>


@endsection

