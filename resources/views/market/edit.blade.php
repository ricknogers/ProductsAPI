@extends('layouts.admin')
@section('title', 'Edit Market')
@section('content')

    <div class="row d-flex justify-content-between align-items-center">
        <div class="col py-3">
            <h2 class="page-title" >@yield("title")</h2>
        </div>
        <div class="col py-3">
            <a class="btn btn-primary" href="{{ route('market.index') }}" enctype="multipart/form-data"> Back</a>
        </div>
    </div>
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('market.update',$market->id) }}"method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="marketName" value="{{ $market->marketName }}" class="form-control" placeholder="Market Name">
                    @error('marketName')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea name="description"  style="height:150px" rows="3" class="form-control" type="text" placeholder="Description Uses:">{{ $market->description }}</textarea>
                    @error('description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="linkedinURL" value="{{ $market->linkedinURL }}" class="form-control" placeholder="LinkedIn URL">
                    @error('linkedinURL')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="orderNumber" value="{{ $market->orderNumber }}" class="form-control" placeholder="Market Order">
                    @error('orderNumber')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-12 ">
                <div class="market-upload d-flex justify-content-center">
                    <div class="market-edit">
                        <input type="file" name="marketImage" class="form-control " id="imageUpload" placeholder="Market Image" value="{{ $market->marketImage}}" >
                        <label for="imageUpload"> <i class="fas fa-edit fa-fw"></i></label>
                    </div>
                    <div class="market-preview">
                        <div id="imagePreview" style=" background-image: url('{{ Storage::url("{$market->marketImage}") }}');"></div>
                    </div>
                    @error('marketImage')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection