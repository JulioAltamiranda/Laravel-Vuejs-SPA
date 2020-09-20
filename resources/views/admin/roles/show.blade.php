@extends('admin.layouts.master')
@section('content')
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Role: <span class="text-primary">{{$role->name}}</span></h4>
                <ul class="list-style-none mt-4 p-0">
                    <h5 class="font-medium ">Permisos</h5>
                    @foreach($role->getAllPermissions() as $permission)
                        <li># {{$permission->display_name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
