@extends('layouts.admin')
@section('title', 'Show Product')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('/products')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <form method="post" action="{{ route('products.show') }}">
        @csrf
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Trade Name</th>
            <th>Application</th>
            <th>Market</th>
            <th>Product Category</th>
            <th>Product Range</th>
            <th>Description Uses</th>
            <th>INCI Name</th>
            <th>% Active</th>
            <th>Recommended Dosage</th>
            <th>Date Created</th>

            <th width="280px">Actions</th>
        </tr>

            <tr>
                <td>{{$products->name}}</td>
                <td>{{$products->application}}</td>
                <td>{{$products->market_id}}</td>
                <td>{{$products->product_category}}</td>
                <td>{{$products->product_range}}</td>
                <td>{{$products->description_uses}}</td>
                <td>{{$products->inci_name}}</td>
                <td>{{$products->percent_active}}</td>
                <td>{{$products->recommended_dosage}}</td>
                <td>{{$products->date_created}}</td>
            </tr>

    </table>
@endsection