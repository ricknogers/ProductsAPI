@extends('layouts.admin')
@section('title', 'Products')
@section('content')
    <div class="container-fluid px-lg-5">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col py-3">
                <h2 class="page-title" >@yield("title")</h2>
            </div>
            <div class="col py-3">
                <a class="btn btn-primary" href="{{ route('product.create') }}"> Add New Market</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered table-responsive" style="margin-top:20px;">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Application</th>
                <th>Market</th>
                <th>Description</th>
                <th>Product Range</th>
{{--                <th>INCI Range</th>--}}
{{--                <th>% Active</th>--}}
{{--                <th>Recommended Dosage</th>--}}

                <th width="280px">Action</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title}}</td>
                    <td>{{ $product->application}}</td>
                    <td>{{ $product->market_id}}</td>
                    <td>{{ $marketing->description }}</td>


                    <td>
                        <form action="{{ route('market.destroy',$marketing->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('market.show',$marketing->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('market.edit',$marketing->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {!! $market->links() !!}
    </div>

@endsection