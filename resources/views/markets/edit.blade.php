@extends('layouts.admin')
@section('title', 'Edit Market')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="row">
                <div class="col-sm-6 pull-left">
                    <h2 class="page-title" >@yield("title")</h2>
                </div>
                <div class="col-sm-6 pull-right">
                    <a class="btn btn-primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
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

    <form action="" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="title">
                </div>
            </div><!--title-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <input type="text" name="description" class="form-control" placeholder="description">
                </div>
            </div><!--description-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Linkedin URL:</strong>
                    <input type="text" name="linkedin_url" class="form-control" placeholder="linkedin_url">
                </div>
            </div><!--linkedinURL-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Order Number:</strong>
                    <input type="text" name="order_number" class="form-control" placeholder="order_number">
                </div>
            </div><!--order_number-->

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection