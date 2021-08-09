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
            <th>ID</th>
            <th>Trade Name</th>
            <th>Application</th>
            <th>Market</th>
            <th>Product Category</th>
            <th>Description Uses</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
				<td>{{$product->id}}</td>
				<td>{{$product->name}}</td>
				<td>{{$product->application}}</td>
				<td>{{$product->market_id}}</td>
				<td>{{$product->product_category}}</td>
				<td>{{$product->description_uses}}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i class="fas fa-eye"></i></a>

                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i class="far fa-edit"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
@endsection