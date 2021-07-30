@extends('layouts.admin')
@section('title', 'Create Market')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="row">
                <div class="col-sm-6 pull-left">
                    <h2 class="page-title" >@yield("title")</h2>
                </div>
                <div class="col-sm-6 pull-right">
                    <a class="btn btn-primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
                    </a>
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
    <form method="post" action="{{ route('markets.store') }}">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Market Title"/>
                </div>
            </div><!--title-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea name="description" rows="3" class="form-control" type="text" placeholder="Brief summary about this market"></textarea>

                </div>
            </div><!--description-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="linkedin_url" placeholder="Provide Market LinkedIn URL"/>

                </div>
            </div><!--linkedin_url-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="order_number" placeholder="Provide Market Order Number"/>
                </div>
            </div><!--order_number-->

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit Product</button>
            </div>
        </div>
    </form>
@endsection