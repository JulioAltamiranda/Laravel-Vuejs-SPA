@extends('admin.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title py-4">Roles</h5>
            </div>
            <div class="card-body">
                
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Identificador</th>
                                <th>Nombre</th>
                                @if(auth()->user()->can('roles.update')||auth()->user()->can('roles.destroy')||auth()->user()->can('roles.show'))
                                <th>Opciones</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->display_name}}</td>
                                    @if(auth()->user()->can('roles.update')||auth()->user()->can('roles.destroy')||auth()->user()->can('roles.show'))
                                    <td>
                                        @can('roles.show', auth()->user())
                                        <a href="{{route('admin.roles.show',$role)}}" class="btn btn-sm btn-secondary text-white" data-toggle="tooltip"
                                            title="Ver role"><i class="ti-eye font-bold"></i></a>
                                        @endcan
                                        @can('roles.update', auth()->user())
                                        <a href="{{ route('admin.roles.edit', $role) }}"
                                            class="btn btn-sm btn-primary text-white" data-toggle="tooltip"
                                            title="Editar role"><i class="ti-pencil font-bold"></i></a>
                                        @endcan
                                        @can('roles.destroy', auth()->user())
                                        <form action="{{ route('admin.roles.destroy', $role) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger" data-toggle="tooltip"
                                                title="Eliminar role"><i class="ti-trash font-bold"></i></button>
                                        </form>
                                        @endcan
                                    </td>
                                    @endif
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
