@extends('admin.layouts.master')
@section('content')
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Actualizar permiso</h4>
                <form action="{{ route('admin.permissions.update', $permission) }}" method="POST" class="mt-4">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Identificador</label>
                        <input type="text" class="form-control" disabled value="{{ $permission->name }}" id="name"
                            name="name">
                    </div>
                    <div class="form-group">
                        <label for="display_name">Nombre</label>
                        <input type="text" class="form-control @error('display_name') is-invalid @enderror" id="display_name"
                            name="display_name" value="{{ old('display_name', $permission->display_name) }}" placeholder="nombre del permiso">
                        @error('display_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
