@extends('backEnd.layouts.master')

@section('content')
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done!</strong> {{Session::get('message')}}
            </div>
        @endif


         <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Liste des categories</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                    <thead>
                    <tr>
                        <th>Nom du Categorie</th>
                        <th>Categorie pere </th>
                        <th>date de creation </th>
                        <th>Status</th>
                        <th>Les Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <?php
                                $parent_cates = DB::table('categories')->select('name')->where('id',$category->parent_id)->get();
                            ?>
                            <tr class="gradeC">
                                <td>{{$category->name}}</td>
                                <td>
                                    @foreach($parent_cates as $parent_cate)
                                        {{$parent_cate->name}}
                                    @endforeach
                                </td>
                                <td style="text-align: center;">{{$category->created_at->diffForHumans()}}</td>
                                <td style="text-align: center;">{{($category->status==0)?' Disabled':'Enable'}}</td>
                                <td style="text-align: center;">
                                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                    <a href="javascript:" rel="{{$category->id}}" rel1="delete-category" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                                </div>
                            </div>
                        </div>
                    </div>
         </div>
            </div>
        </div>
    </div>
@endsection

