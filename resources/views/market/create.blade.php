@extends('layouts.admin')
@section('title', 'Add New Market')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="page-title" >@yield("title")</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('market.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There are some issues.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('market.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Market Name:</strong>
                    <input type="text" name="marketName" class="form-control" placeholder="Market Name">
                    @error('marketName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea name="description" style="height:150px" rows="3" class="form-control" type="text" placeholder="Description Uses:"></textarea>
                    @error('description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Market Image Upload</strong>

                    <input type="file" name="marketImage" class="form-control" placeholder="Market Image">
                    @error('marketImage')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>LinkedIn URL:</strong>
                    <input type="text" name="linkedinURL" class="form-control" placeholder="LinkedIn URL">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Order Number:</strong>
                    <input type="text" name="orderNumber" class="form-control" placeholder="Order Number">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection