@extends('layouts.admin')
@section('title', 'Create Product')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="row">
                <div class="col-sm-6 ">
                    <h2 class="page-title" >@yield("title")</h2>
                </div>
                <div class="col-sm-6 ">
                    <a class="btn btn-primary" href="{{url('/products')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
                    </a>
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
      <form method="post" action="{{ route('products.store') }}">
	 	@csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Trade Name"/>
                </div>
            </div><!--Name-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="application" placeholder="Application:"/>
                </div>
            </div><!--application-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
					<input type="text" class="form-control" name="market_association" placeholder="Market Association:"/>
     
                </div>
            </div><!--market_association-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
					<input type="text" class="form-control" name="product_category" placeholder="Product Category:"/>
                </div>
            </div><!--product_category-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
	                 <textarea name="description_uses" rows="3" class="form-control" type="text" placeholder="Description Uses:"></textarea>
                </div>
            </div><!--description_uses-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_range" placeholder="Product Range:"/>
                </div>
            </div><!--product_range-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
					<input type="text" class="form-control" name="inci_name" placeholder="Inci Name:"/>
                </div>
            </div><!--inci_name-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
					<input type="text" class="form-control" name="percent_active" placeholder="Percent Active:"/>
                </div>
            </div><!--percent_active-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
					<input type="text" class="form-control" name="recommended_dosage" placeholder="Recommended Dosage:"/>
                </div>
            </div><!--recommended_dosage-->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit Product</button>
            </div>
        </div>
	</form>
@endsection