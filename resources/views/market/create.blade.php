@extends('layouts.admin')
@section('title', 'Add New Market')
@section('content')
    <div class="container-fluid px-lg-5">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col py-3">
                <h2 class="page-title" >@yield("title")</h2>
            </div>
            <div class="col py-3">
                <a class="btn btn-primary" href="{{ route('market.index') }}"> Back</a>
            </div>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Warning!</strong> Please check your fields<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form action="{{ route('market.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="marketName" class="form-control" placeholder="Market Name" value="{{old('marketName')}}" >
                    @error('marketName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea name="description" style="height:150px" rows="3" class="form-control" type="text" placeholder="Description Uses:">{{old('description')}} </textarea>
                    @error('description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 createImageUpload">
                <div class="form-group">
                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                        <input id="upload"  name="marketImage" type="file" onchange="readURL(this);"  value="{{old('marketImage')}} " class="form-control border-0">

                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                        <div class="input-group-append">
                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                        </div>
                    </div>

                    <!-- Uploaded image area-->
                    <div class="image-area mt-4"><img id="imageResult" src="#" alt="" height="200px" width="200px" class="img-thumbnail rounded shadow-sm mx-auto d-block"></div>


                    @error('marketImage')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="linkedinURL" class="form-control" placeholder="LinkedIn URL" value="{{old('linkedinURL')}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                    <input type="text" name="orderNumber" class="form-control" placeholder="Order Number" value="{{old('orderNumber')}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection