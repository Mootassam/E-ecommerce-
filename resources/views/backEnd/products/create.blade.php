@extends('backEnd.layouts.master')
@section('content')
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="col-lg-12">
            <div class="card">
                <h5 class="card-header">Ajouter un Coupon </h5>
                <div class="card-body">

                <form action="{{route('product.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                        <label class="control-label">Select Categorie</label>
                        <div class="controls">
                            <select  class="form-control" name="categories_id">
                                @foreach($categories as $key=>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    <?php
                                        if($key!=0){
                                            $sub_categories=DB::table('categories')->select('id','name')->where('parent_id',$key)->get();
                                            if(count($sub_categories)>0){
                                                foreach ($sub_categories as $sub_category){
                                                    echo '<option value="'.$sub_category->id.'">&nbsp;&nbsp;--'.$sub_category->name.'</option>';
                                                }
                                            }
                                        }
                                    ?>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label">Nom du produit </label>
                            <input  type="text" name="p_name" id="p_name" class="form-control" value="{{old('p_name')}}" title="" required="required" >
                            <span class="text-danger">{{$errors->first('p_name')}}</span>

                    </div>
                    <div class="control-group">
                        <label for="p_code" class="control-label">Code</label>
                            <input  type="text" name="p_code" id="p_code" class="form-control" value="{{old('p_code')}}" title="" required="required" >
                            <span class="text-danger">{{$errors->first('p_code')}}</span>
                    </div>
                    <div class="control-group">
                        <label for="p_color" class="control-label">Color</label>
                            <input class="form-control"  type="text" name="p_color" id="p_color" value="{{old('p_color')}}" required="required" >
                            <span class="text-danger">{{$errors->first('p_color')}}</span>

                    </div>
                    <div class="control-group">
                        <label for="description" class="control-label">Description</label>
                            <textarea  class="form-control"  name="description" id="description" rows="6" placeholder="Product Description" >{{old('description')}}</textarea>
                            <span class="text-danger">{{$errors->first('description')}}</span>
                    </div>
                    <div class="control-group">
                        <label for="price" class="control-label">Price</label>
                            <div class="input-prepend"> <span class="add-on">$</span>
                                <input class="form-control"  type="number" name="price" id="price" class="" value="{{old('price')}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('price')}}</span>
                            </div>

                    </div>
                    <div class="control-group">

                            <div class="input-prepend"> <span class="add-on"></span>
                                <input class="form-control"  type="hidden" name="amount" id="price" class="" value="1" title="" required="required">
                                <span class="text-danger">{{$errors->first('amount')}}</span>
                            </div>

                    </div>

                    <div class="control-group">
                        <label for="price" class="control-label">Stock</label>
                            <div class="input-prepend"> <span class="add-on"></span>
                                <input class="form-control"  type="number" name="stock" id="price" class="" value="{{old('stock')}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('stock')}}</span>
                            </div>

                    </div>
                    <div class="control-group">
                        <label class="control-label">Image upload</label>
                        <div class="controls">
                            <input class="form-control"  type="file" name="image" id="image"/>
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Add New Product</button>
                        </div>
                    </div>
                </form>
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
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endsection
