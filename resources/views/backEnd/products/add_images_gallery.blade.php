@extends('backEnd.layouts.master')
@section('content')
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif

        <div class="row">
            <!-- ============================================================== -->
            <!--  slides with indicator  -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Ajouter Des images </h5>
                    <div class="card-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{url('products/small',$product->image)}}" width="50%" height="50%" alt="First slide">
                                </div>
                            </div>
                            <div class="widget-content nopadding">
                                <ul class="recent-posts">
                                    <li>
                                        <div class="article-post">
                                            <span class="user-info">Product Code : <b>{{$product->p_code}}</b></span>
                                            <p>Product Color : <b>{{$product->p_color}}</b></p>
                                        </div>
                                    </li>
                                    <li>
                                        <form action="{{route('image-gallery.store')}}" method="post" role="form" enctype="multipart/form-data">
                                            <legend>Can Add Multi Images</legend>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <div class="form-group">
                                                <input type="hidden" name="products_id" value="{{$product->id}}">
                                                <input type="file" name="image[]" id="id_imageGallery" class="form-control" multiple="multiple" required>
                                                <span class="text-danger">{{$errors->first('image')}}</span>
                                                <button type="submit" class="btn btn-success">Upload</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end slides with indicator  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!--  slides with control  -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Slides with Captions</h5>
                    <div class="card-body">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php $i=1; ?>
                            @foreach($imageGalleries as $imageGallery)
                                <div class="carousel-item active">
                                    <img src="{{url('products/small',$imageGallery->image)}}"  class="d-block w-100" alt="Image" width="60">
                                    <div class="carousel-caption d-none d-md-block">
                                        <a href="javascript:" rel="{{$imageGallery->id}}" rel1="delete-imageGallery" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                                    </div>
                                </div>
                             @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                               <span class="sr-only">Previous</span>  </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>  </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
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
