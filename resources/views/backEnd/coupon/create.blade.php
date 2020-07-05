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

                <form action="{{route('coupon.store')}}" method="post" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                        <label for="coupon_code" class="control-label">Coupon Code</label>
                            <input type="text" name="coupon_code" id="coupon_code" class="form-control" value="{{old('coupon_code')}}"
                                   title="" required="required" minlength="5" maxlength="15" >
                            <span class="text-danger">{{$errors->first('coupon_code')}}</span>

                    </div>
                    <div class="control-group">
                        <label for="amount" class="control-label">Amount</label>
                            <input type="number" min="0" name="amount" id="amount" class="form-control" value="{{old('amount')}}" title="" required="required" >
                            <span class="text-danger">{{$errors->first('amount')}}</span>

                    </div>

                    <div class="control-group">
                        <label for="amount_type" class="control-label">Amount Type</label>
                            <select name="amount_type" id="amount_type" class="form-control" >
                                <option value="Percentage">Percentage</option>
                            </select>
                            <span class="text-danger">{{$errors->first('amount_type')}}</span>

                    </div>

                    <div class="control-group">
                        <label for="expiry_date" class="control-label">Expiry Date</label>
                            <div class="input-prepend">
                                <div  data-date="12-02-2012" class="input-append date datepicker">
                                    <input class="form-control" type="text" name="expiry_date" id="expiry_date" value="{{old('expiry_date')}}"  data-date-format="yyyy-mm-dd" class="span11"  placeholder="yyyy-mm-dd">
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>
                            <span class="text-danger">{{$errors->first('expiry_date')}}</span>

                    </div>

                        <label class="control-label">Enable :</label>
                        <div class="controls">
                            <input type="checkbox" name="status" id="status" value="1">
                            <span class="text-danger">{{$errors->first('status')}}</span>
                        </div>

                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Add New Coupon</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


