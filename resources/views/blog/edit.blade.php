@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
    <div class="row">
        <h2>
            <span class="h2-action-blog">{{ $action }} Blog - </span>
            <span class="h2-action-blog-name">{{ $blog->title }}</span>
        </h2>
        <a href="{{ asset('home') }}">
            <button class="btn btn-primary float-end mb-3" name="action">
                <i class="bi bi-backspace-fill"></i> &nbsp; 
                Volver
            </button>
        </a>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <form action="/blog/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row mt-2">
                    <div class="col-sm-12">
                        <label for="title" class="form-label">Título del Blog</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" placeholder="Título del blog">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-8">
                        <label for="image" class="form-label">Imagén principal</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <img src="{{ asset('img/blog') }}/{{ $blog->image }}" alt="Imágen del blog '{{ $blog->title }}'" width="200px">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12">
                        <label for="content" class="form-label">Contenido del blog</label>
                        <textarea id="contentBlog" name="content">
                            {{ $blog->content }}
                        </textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-secondary" name="action">
                            <a href="{{ asset('home') }}">
                                <i class="bi bi-backspace-fill"></i> &nbsp; Volver
                            </a>
                        </button>
                        <button class="btn btn-primary" type="submit" name="action">
                            Guardar &nbsp; 
                            <i class="bi bi-save-fill"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection