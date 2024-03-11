@extends('admin.layout.master')

@section('title', __('banners::common.banners'))

@section('content')

    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">{{__('main.dashboard')}}</a>
        <a class="breadcrumb-item" href="{{route('admin.banners.index')}}">{{__('banners::common.banners')}}</a>
        <span class="breadcrumb-item active">{{__('main.create')}}</span>
    </nav>

    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.banners.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('banners::admin.banners._form')
            </form>
        </div>
    </div>

@endsection
