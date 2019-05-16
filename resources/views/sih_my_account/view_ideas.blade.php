@extends('layouts.default')

@section('page_title', 'Ideas My Account')

@section('content')
<div class="row p-4">
        <div class="col-12">
            <!-- Announcement Options -->
            <div class="push">
                <!--<button type="button" class="btn btn-rounded btn-danger btn-noborder float-right">
                    <i class="fa fa-times mx-5"></i>
                    <span class="d-none d-sm-inline">Delete</span>
                </button>-->
                <a  href="{{url('/my-account/ideas/create')}}">
                <button type="button" class="btn btn-rounded btn-success btn-noborder">
                    <i class="fa fa-plus mx-5"></i>
                    <span class="d-none d-sm-inline">Create</span>
                </button>
                </a>
            </div>
        </div>
        @foreach($myideas as $myidea)
        <div class="col-12 col-md-6 col-xl-6">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <img class="img-avatar" src="{{url('/assets/v1/img/avatars/avatar3.jpg')}}" alt="">
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">{{$myidea['title']}}</div>
                    <div class="font-size-sm text-muted">This is a long description of the project. This is a long description of the project. This is a long description of the project.</div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endsection