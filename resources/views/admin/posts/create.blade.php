@extends('admin.layouts.master')
@section('page-titles')
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Nuevo post</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Nuevo post</li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title py-4">Nuevo post</h5>
            </div>
            <div class="card-body">


                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="title">Titulo<span class="secondary">*</span></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                    name="title" value="{{ old('title') }}" placeholder="titulo">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="category_id">Categoria<span class="secondary">*</span></label>
                                <select class="select2 form-control @error('category_id') is-invalid @enderror"
                                    style="width: 100%;" id="category_id" name="category_id">
                                    <option value="">Selecciona una o más etiqueta</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="">Etiquetas</label>
                                <select class="select2-multiple" style="width: 100%;" id="tags" name="tags[]"
                                    data-placeholder="Selecciona una o más etiquetas" multiple="multiple">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }} "
                                            {{ collect(old('tags'))->contains($tag->id) ? 'selected' : '' }}>
                                            {{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Descripción del post<span class="secondary">*</span></label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                    name="description"></textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Iframe <small class="text-muted">(opcional)</small></label>
                                <textarea id="iframe" style="min-height:160px; " name="iframe" class="form-control">{{old('iframe')}}</textarea>
                            </div>
                        </div>
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

    <script src="/assets/plugins/ckeditor/ckeditor.js"></script>
    <script>
        $(".select2").select2({
            tags: true
        });
        $(".select2-multiple").select2({
            tags: true,
            placeholder: "Selecciona una o muchas etiquetas"
        });
        ClassicEditor
            .create(document.querySelector('#description'), {
                toolbar: ['|', 'bold', 'numberedList', 'blockQuote'],

            })
            .catch(error => {
                console.log(error);
            });

       

    </script>
@endpush
