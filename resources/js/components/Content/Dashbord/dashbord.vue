<template>
<div>
<div class="row" >

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Total Revenue</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">$12099</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                </div>
            </div>
            <div id="sparkline-revenue"></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Affiliate Revenue</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">$12099</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                </div>
            </div>
            <div id="sparkline-revenue2"></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Refunds</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">0.00</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                    <span>N/A</span>
                </div>
            </div>
            <div id="sparkline-revenue3"></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Avg. Revenue Per User</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">$28000</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                    <span>-2.00%</span>
                </div>
            </div>
            <div id="sparkline-revenue4"></div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Recent Orders</h5>
            <div class="card-body p-0">
                <div id="content">
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-light">
                            <tr class="border-0" >
                                <th class="border-0">#</th>

                                <th class="border-0">Customer Email</th>
                                <th class="border-0">Product Id</th>
                                <th class="border-0">payment_method</th>
                                <th class="border-0">Price</th>
                                <th class="border-0">Order Time</th>
                                <th class="border-0">Customer</th>
                                <th class="border-0">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(order,index) in orders" :key="order.id" >
                                <td>{{index}}</td>

                                <td>{{order.users_email}} </td>
                                <td>{{order.pincode}} </td>
                                <td>{{order.payment_method}}</td>
                                <td>{{order.grand_total}} DNT </td>
                                <td>{{order.created_at}}</td>
                                <td>{{order.name}} </td>

                                <td  v-if="order.status =='faild' " ><span class="badge-dot badge-success mr-1" ></span>Delivered </td>
                                 <td v-if="order.order_status=='success'" ><span class="badge-dot badge-brand mr-1" ></span>InTransit </td>

                            </tr>



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
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Customer Acquisition</h5>
            <div class="card-body">
                <div class="ct-chart ct-golden-section" style="height: 354px;"></div>
                <div class="text-center">
                    <span class="legend-item mr-2">
                            <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                    <span class="legend-text">Returning</span>
                    </span>
                    <span class="legend-item mr-2">

                            <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                    <span class="legend-text">First Time</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end customer acquistion  -->
    <!-- ============================================================== -->
</div>
</div>
</template>

<script>
export default {

    data() {
        return {
            orders:{},
        }
    },
    created(){
        this.getOrder();
    },
    methods: {
        getOrder(){
            axios.get('http://localhost:8000/api/order')
            .then(res => { this.orders = res.data  })
            .catch( error => { console.log(error)})
        }
    },

}
</script>

<style>

</style>
