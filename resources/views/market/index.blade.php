@extends('layouts.admin')
@section('title', 'Markets')
@section('content')
    <div class="container-fluid px-lg-5">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col py-3">
                <h2 class="page-title" >@yield("title")</h2>
            </div>
            <div class="col py-3">
                <a class="btn btn-primary" href="{{ route('market.create') }}"> Add New Market</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered table-responsive" style="margin-top:20px;">
        <tr>
            <th>Order Number</th>
            <th>Market Image</th>
            <th>Market Name</th>
            <th>Description</th>
            <th>LinkedIn URL</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($market as $marketing)
            <tr>
                <td>{{ $marketing->orderNumber }}</td>
                <td><img src="{{ Storage::url($marketing->marketImage) }}" class="img-thumbnail " height="75" width="75" alt="" /></td>

                <td>{{ $marketing->marketName }}</td>
                <td>{{ $marketing->description }}</td>
                <td>{{ $marketing->linkedinURL }}</td>

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