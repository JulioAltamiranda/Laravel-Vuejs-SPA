@extends('admin.layouts.master')
@section('page-titles')
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Imagenes</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Posts</a></li>
                <li class="breadcrumb-item active">Imagenes</li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="row">
            @if($post->images->count())
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title py-4">
                                Imágenes del post
                            </h5>
                        </div>
                        <div class="card-body">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($post->images as $image)
                                        <div class="{{$loop->first?'carousel-item active':'carousel-item'}}">
                                        <img src="{{$image->name}}" class="img-fluid" alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title py-4">Nueva imagen</h5>
                    </div>
                    <div class="card-body">
                        <div class="dropzone"></div>
                        <a href="" class="btn btn-primary mt-4">Guardar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('styles')
    <link href="/assets/plugins/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
    <script src="/assets/plugins/dropzone-master/dist/dropzone.js"></script>
<style>
   .dropzone{
       border: 1px dashed #e9ecef;
       color: #2d3748;
       font-size: 14px;
   }
</style>

    <script>
        var myDropzone = new Dropzone('.dropzone', {
            url: '/dashboard/posts/{{ $post->id }}/images',
            paramName: 'image',
            acceptedFiles: 'image/*',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },

            dictDefaultMessage: 'Arrastra las imágenes o haz clic aquí para subirlas'
        });
        Dropzone.autoDiscover = false;

    </script>
@endpush
