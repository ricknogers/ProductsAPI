@extends('layouts.admin')
@section('title', 'Edit Product')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="row">
                <div class="col-sm-6 pull-left">
                    <h2 class="page-title" >@yield("title")</h2>
                </div>
                <div class="col-sm-6 pull-right">
                    <a class="btn btn-primary" href="{{url('/products')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="name"  value="{{$products->name}}"/>
                </div>
            </div><!--Name-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="application"  value="{{$products->application}}"/>
                </div>
            </div><!--application-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="market_association"  value="{{$products->market_association}}"/>

                </div>
            </div><!--market_association-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_category"  value="{{$products->product_category}}"/>
                </div>
            </div><!--product_category-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea name="description_uses" rows="3" class="form-control" type="text"  value="{{$products->description_uses}}"></textarea>
                </div>
            </div><!--description_uses-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_range"  value="{{$products->product_range}}"/>
                </div>
            </div><!--product_range-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="inci_name"  value="{{$products->inci_name}}"/>
                </div>
            </div><!--inci_name-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="percent_active" value="{{$products->percent_active}}" />
                </div>
            </div><!--percent_active-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="recommended_dosage" value="{{$products->recommended_dosage}}"/>
                </div>
            </div><!--recommended_dosage-->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit Change</button>
            </div>
        </div>
    </form>
@endsection