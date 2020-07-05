@extends('backEnd.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <h5 class="card-header">Ajouter une nouvelle Categorie</h5>
        <div class="card-body">


                    <form class="form-horizontal" method="post" action="{{route('category.store')}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">



                        <div class="control-group {{$errors->has('name')?' has-error':''}}">
                            <label>Nom du Category :</label>

                                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" required>
                                <span class="text-danger" id="chCategory_name" style="color: red;">{{$errors->first('name')}}</span>

                        </div>
                        <div class="control-group">
                            <label >Sub Category :</label>

                                <select class="form-control"  name="parent_id" id="parent_id">
                                        @foreach($cate_levels as $key=>$value)
                                            <option value="{{$key}}">{{$value}}</option>
                                            <?php
                                                if($key!=0){
                                                    $subCategory=DB::table('categories')->select('id','name')->where('parent_id',$key)->get();
                                                    if(count($subCategory)>0){
                                                        foreach ($subCategory as $subCate){
                                                            echo '<option value="'.$subCate->id.'">&nbsp;&nbsp;--'.$subCate->name.'</option>';
                                                        }
                                                    }
                                                }
                                            ?>
                                        @endforeach
                                </select>

                        </div>
                        <div class="control-group">
                            <label >Description :</label>

                                <textarea class="form-control"  name="description" id="description" rows="3">{{old('description')}}</textarea>

                        </div>
                        <div class="control-group{{$errors->has('url')?' has-error':''}}">
                            <label >URL (Start with http://) :</label>

                                <input class="form-control"  type="text" name="url" id="url">
                                <span class="text-danger">{{$errors->first('url')}}</span>

                        </div>
                        <div class="control-group{{$errors->has('status')?' has-error':''}}">
                            <label >Enable :</label>

                                <input class="form-control" type="checkbox" name="status" id="status" value="1">
                                <span class="text-danger">{{$errors->first('status')}}</span>

                        </div>
                        <div class="control-group">
                            <label for="control-label"></label>
                             <input type="submit" value="Ajouter " class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
@section('jsblock')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.custom.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.uniform.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/matrix.js') }}"></script>
    <script src="{{ asset('js/matrix.form_validation.js') }}"></script>
    <script src="{{ asset('js/matrix.tables.js') }}"></script>
    <script src="{{ asset('js/matrix.popover.js') }}"></script>
@endsection
