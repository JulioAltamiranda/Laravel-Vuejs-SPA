@extends('admin.layouts.master')
@section('content')
    <div class="col-md-6">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title py-4">Actualizar role</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.roles.update', $role) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Identificador<span class="secondary">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            value="{{ old('name',$role->name) }}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="display_name">Nombre<span class="secondary">*</span></label>
                        <input type="text" class="form-control @error('display_name') is-invalid @enderror" id="display_name"
                            name="display_name" value="{{ old('display_name',$role->display_name) }}">
                        @error('display_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Permisos<span class="secondary">*</span></label>
                        <select class="select2 p-2 form-control @error('permissions') is-invalid @enderror" id="permissions" name="permissions[]" multiple="multiple" style="width:100%;">
                            @foreach($permissions as $permission)
                                <option value="{{$permission->name}}"  {{ collect(old('permissions',$role->getAllPermissions()->pluck('id')))->contains($permission->id) ?'selected':'' }}>{{$permission->display_name}}</option>
                            @endforeach
                        </select>
                        @error('permissions')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="/assets/plugins/select2/select2.min.css">
@endpush
@push('scripts')
    <script src="/assets/plugins/select2/select2.min.js"></script>
    <script>
        $(".select2").select2({
            placeholder:'Selecciona uno o más permisos'
        });
    </script>
@endpush