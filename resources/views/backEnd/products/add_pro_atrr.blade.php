@extends('backEnd.layouts.master')
@section('title','Add Attribute')
@section('content')
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="row">

            <div class="col-lg-4">
                <div class="card">
                    <h5 class="card-header">Basic Form</h5>
                    <div class="card-body">
                        <form action="{{route('product_attr.store')}}" method="post" role="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="products_id" value="{{$product->id}}">

                            <div class="form-group">
                                <label for="inputUserName"><i class="fas fa-assistive-listening-systems"></i> Systéme d’exploitation, mémoire et applications </label>
                               <textarea name="system" id="" class="form-control" ></textarea>
                               <span class="text-danger">{{$errors->first('system')}}</span>

                            </div>
                            <div class="form-group">
                                <label for="inputEmail"> <i class="fas fa-desktop"></i> Ecran</label>
                                <textarea name="ecran" id="" class="form-control" ></textarea>
                                <span class="text-danger">{{$errors->first('ecran')}}</span>

                            </div>
                            <div class="form-group">
                                <label for="inputPassword"><i class="fa fa-camera-retro" aria-hidden="true"></i>

                                    Appareil photo</label>
                                <textarea name="photo" id="" class="form-control" ></textarea>
                                <span class="text-danger">{{$errors->first('photo')}}</span>

                            </div>
                            <div class="form-group">
                                <label for="inputRepeatPassword"> <i class="fas fa-wifi"></i> Réseaux et connectivité</label>
                                <textarea name="reseaux" id="" class="form-control" ></textarea>
                                <span class="text-danger">{{$errors->first('reseaux')}}</span>

                            </div>
                            <div class="form-group">
                                <label for="inputRepeatPassword"> <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                    Dimensions et poids</label>
                                <textarea name="poids" id="" class="form-control" ></textarea>
                                <span class="text-danger">{{$errors->first('poids')}}</span>

                            </div>
                            <div class="form-group">
                                <label for="inputRepeatPassword"> <i class="fas fa-battery-three-quarters"></i> Autonomie</label>
                                <textarea name="battery" id="" class="form-control" ></textarea>
                                <span class="text-danger">{{$errors->first('battery')}}</span>

                            </div>
                            <div class="form-group">
                                <label for="inputRepeatPassword"> <i class="fas fa-microchip"></i> Processeur:</label>
                                <textarea name="Processeur" id="" class="form-control" ></textarea>
                                <span class="text-danger">{{$errors->first('Processeur')}}</span>

                            </div>
                            <div class="form-group">
                                <label for="inputRepeatPassword"> <i class="fas fa-hdd" aria-hidden="true"></i> Memoire</label>
                                <textarea name="memoire" id="" class="form-control" ></textarea>
                                <span class="text-danger">{{$errors->first('memoire')}}</span>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-success">Submit</button>
                                        <button class="btn btn-space btn-secondary">cancel</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <div class="col-lg-8">

            <div class="tab-vertical">
                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-vertical-tab" data-toggle="tab" href="#home-vertical" role="tab" aria-controls="home" aria-selected="true">Atrributes Produits </a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent3">

                        <h5 class="card-header">Mise a jour les attribues </h5>
                        <div class="card-body">
                            <form action="{{route('product_attr.update',$product->id)}}" method="post" role="form">
                                {{method_field("PUT")}}
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                @foreach($attributes as $attribute)
                                <input type="hidden" name="id[]" value="{{$attribute->id}}" >
                                <div class="form-group">
                                    <label for="inputUserName"><i class="fas fa-assistive-listening-systems"></i> Systéme d’exploitation, mémoire et applications </label>

                                    <textarea name="system[]"  value="{{$attribute->system}}"id="" class="form-control" >{{$attribute->system}}</textarea>

                                </div>
                                <div class="form-group">
                                    <label for="inputEmail"> <i class="fas fa-desktop"></i> Ecran</label>
                                    <textarea name="ecran[]"  value="{{$attribute->ecran}}"id="" class="form-control" >{{$attribute->ecran}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword"><i class="fa fa-camera-retro" aria-hidden="true"></i>

                                        Appareil photo</label>
                                    <textarea name="photo[]" value="{{$attribute->photo}}" id="" class="form-control" >{{$attribute->photo}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputRepeatPassword"> <i class="fas fa-wifi"></i> Réseaux et connectivité</label>
                                    <textarea name="reseaux[]"  value="{{$attribute->reseaux}}"  id="" class="form-control" >{{$attribute->reseaux}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputRepeatPassword"> <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                        Dimensions et poids</label>
                                    <textarea name="poids[]" id=""  value="{{$attribute->poids}}" class="form-control" >{{$attribute->poids}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputRepeatPassword"> <i class="fas fa-battery-three-quarters"></i> Autonomie</label>
                                    <textarea name="battery" id=""  value="{{$attribute->battery}}" class="form-control" >{{$attribute->battery}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputRepeatPassword"> <i class="fas fa-microchip"></i> Processeur:</label>
                                    <textarea name="Processeur[]" id=""  value="{{$attribute->Processeur}}" class="form-control" >{{$attribute->Processeur}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputRepeatPassword"> <i class="fas fa-hdd" aria-hidden="true"></i> Memoire</label>
                                    <textarea name="memoire[]" id=""  value="{{$attribute->memoire}}" class="form-control" >{{$attribute->memoire}}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                        <label class="be-checkbox custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Edit</button>
                                            <button class="btn btn-space btn-secondary">Delete</button>
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>

    </div>
@endsection

