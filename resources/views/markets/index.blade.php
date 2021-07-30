@extends('layouts.admin')
@section('title', 'Markets')
@section('content')

    <div class="row" id="bladeAdminTitleBar">
        <div class="col-sm-6 pull-left bladeAdminTitle">
            <h2 class="page-title" >@yield("title")</h2>
        </div>
        <div class="col-sm-6 text-center bladeAdminTitle">
            <a class="btn btn-primary" href="{{url("/markets/create")}}" title="Create a market"> <i class="fas fa-plus-circle"></i>
                Add Markets
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
            <th>Title</th>
            <th>Description</th>
            <th>Linkedin URL</th>
            <th>Order Number</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($markets as $market)
            <tr>
                <td>{{$market->id}}</td>
                <td>{{$market->title}}</td>
                <td>{{$market->description}}</td>
                <td>{{$market->linkedin_url}}</td>
                <td>{{$market->order_number}}</td>
                <td>
                    <form action="{{ route('markets.destroy',$market->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('markets.show',$market->id) }}"><i class="fas fa-eye"></i></a>

                        <a class="btn btn-primary" href="{{ route('markets.edit',$market->id) }}"><i class="far fa-edit"></i>
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