@extends('admin.layouts.master')
@section('content')
    <div class="col-md-6">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title py-4">Nuevo usuario</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre <small class="text-muted secondary">*</small></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email <small class="text-muted secondary">*</small></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña <small class="text-muted secondary">*</small></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                            name="password" placeholder="Contraseña">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Repite la contraseña <small class="text-muted secondary">*</small></label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repetir contraseña">
                    </div>
                    @can('roles.create', auth()->user())
                        
                    <div class="form-group">
                        <label for="">Roles <span class="secondary">*</span></label>
                        <select class="select2 custom-control @error('roles') is-invalid @enderror" style="width: 100%" name="roles[]" id="roles" multiple="multiple">
                            @foreach($roles as $role)
                            <option value="{{$role->name}}">
                                {{$role->display_name}}
                            </option>
                            @endforeach
                        </select>
                        @error('roles')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    @endcan
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
            placeholder:'Selecciona uno o más roles'
        });
    </script>
@endpush