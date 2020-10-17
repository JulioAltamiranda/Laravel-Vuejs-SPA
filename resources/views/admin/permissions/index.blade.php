@extends('admin.layouts.master')
@section('page-titles')
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Permisos</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Permisos</li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title py-4">Permisos</h5>
            </div>
            <div class="card-body">
                
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped ">
                        <thead>
                            <tr>
                                <th>Identificador</th>
                                <th>Nombre</th>
                                @can('permissions.update')
                                <th>Opciones</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->display_name }}</td>
                                    @can('permissions.update')  
                                    <td class="options">
                                        <a href="{{ route('admin.permissions.edit', $permission) }}"
                                        class="btn btn-sm btn-primary text-white" data-toggle="tooltip"
                                        title="Editar permiso"><i class="ti-pencil font-bold"></i></a>
                                    </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  
@endsection
@push('styles')
    <link rel="stylesheet" type="text/css" href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/datatables.net-bs4/css/responsive.dataTables.min.css">
@endpush
@push('scripts')
    <script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script>
        $("#myTable").DataTable({
            responsive:true
        });
    </script>
@endpush
