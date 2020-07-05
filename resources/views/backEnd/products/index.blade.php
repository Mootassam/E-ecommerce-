@extends('backEnd.layouts.master')
@section('title','List Products')
@section('content')




    <div class="row">
        <div class="col-lg-12 ">
            <div class="row">
                @foreach($products as $product)
                <?php $i++; ?>

                <div class="col-xl-2 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="product-thumbnail">
                        <div class="product-img-head">
                            <div class="product-img">
                                <img src="{{url('products/small',$product->image)}}" alt="" class="img-fluid"></div>
                            <div class="ribbons"></div>
                            <div class="ribbons-text">New</div>
                            <div class=""><a href="javascript:" rel="{{$product->id}}"  class="product-wishlist-btn"><i class="fas fa-times-circle"></i></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-content-head">
                                <h3 class="product-title">{{$product->p_name}}</h3>
                                <div class="product-rating d-inline-block">
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                </div>
                                <div class="product-price">${{$product->price}}</div>
                            </div>
                            <div class="product-btn">
                                <a href="{{route('image-gallery.show',$product->id)}}" class="btn btn-primary">Add Images</a>
                                <a href="{{route('product_attr.show',$product->id)}}" class="btn btn-outline-light">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link " href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
            swal({
                title:'Are you sure?',
                text:"You won't be able to revert this!",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Yes, delete it!',
                cancelButtonText:'No, cancel!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
        });
    </script>
@endsection
