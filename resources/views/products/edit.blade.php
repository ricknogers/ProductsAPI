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
                    <a class="btn btn-primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
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

    <form action="" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div><!--Name-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Application:</strong>
                    <input type="text" name="application" class="form-control" placeholder="application">
                </div>
            </div><!--application-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Market Association:</strong>
                    <input type="text" name="market_association" class="form-control" placeholder="market_association">
                </div>
            </div><!--market_association-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Category:</strong>
                    <input type="text" name="product_category" class="form-control" placeholder="product_category">
                </div>
            </div><!--product_category-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Range:</strong>
                    <input type="text" name="product_range" class="form-control" placeholder="product_range">
                </div>
            </div><!--product_range-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description Uses:</strong>
                    <textarea class="form-control" style="height:50px" name="description_uses"
                              placeholder="description_uses"></textarea>
                </div>
            </div><!--description_uses-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Inci Name:</strong>
                    <input type="text" name="inci_name" class="form-control" placeholder="inci_name">
                </div>
            </div><!--inci_name-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Percent Active:</strong>
                    <input type="text" name="percent_active" class="form-control" placeholder="percent_active">
                </div>
            </div><!--percent_active-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Recommended Dosage:</strong>
                    <input type="text" name="recommended_dosage" class="form-control" placeholder="recommended_dosage">
                </div>
            </div><!--recommended_dosage-->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection