@extends('admin.layouts.master')
@section('content')
    @if(auth()->user()->hasRole('admin'))
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="ti-layout-media-right-alt text-warning"></i>
                        <div class="mt-3">
                            <h3 class="card-title">{{$posts}}</h3>
                            <span class="d-block">Posts</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="ti-user text-secondary" ></i>
                        <div class="mt-3">
                            <h3 class="card-title">{{$users}}</h3>
                            <span class="d-block">Usuarios</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="ti-hand-open text-info" ></i>
                        <div class="mt-3">
                            <h3 class="card-title">{{$roles}}</h3>
                            <span class="d-block">Roles</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="ti-key text-danger" ></i>
                        <div class="mt-3">
                            <h3 class="card-title">{{$permissions}}</h3>
                            <span class="d-block">Permisos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <i class="ti-layout-media-right-alt text-warning"></i>
                    <div class="mt-3">
                        <h3 class="card-title">{{auth()->user()->posts->count()}}</h3>
                        <span class="d-block">Posts</span>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
@push('styles')
    <style>
        .card-body i{
            font-size: 27px!important;
            font-weight: bold;
        }
    </style>
@endpush
