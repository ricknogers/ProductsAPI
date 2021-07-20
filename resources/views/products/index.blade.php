@extends('layouts.admin')
@section('title', 'Products')
@section('content')

    <div class="row" id="bladeAdminTitleBar">
        <div class="col-sm-6 pull-left bladeAdminTitle">
            <h2 class="page-title" >@yield("title")</h2>
        </div>
        <div class="col-sm-6 text-center bladeAdminTitle">
            <a class="btn btn-primary" href="{{url("/products/create")}}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                Add Products
            </a>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Applications</th>
            <th>Market Association</th>
            <th>Product Category</th>
            <th>Product Range</th>
            <th>Description</th>
            <th>INCI Name</th>
            <th>Percent Active</th>
            <th>Recommended Dosage</th>
            <th>Date Created</th>
        </tr>
        @foreach ($products as $product)
            <tr>
				<td>{{$product->id}}</td>
				<td>{{$product->name}}</td>
				<td>{{$product->application}}</td>
				<td>{{$product->market_association}}</td>
				<td>{{$product->product_category}}</td>
				<td>{{$product->product_range}}</td>
				<td>{{$product->description_uses}}</td>
				<td>{{$product->inci_name}}</td>
				<td>{{$product->percent_active}}</td>
				<td>{{$product->recommended_dosage}}</td>
				<td>{{$product->created_at}}</td>
            </tr>
        @endforeach
    </table>
@endsection