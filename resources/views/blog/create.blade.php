@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
    <div class="row">
        <h2>
            <span class="h2-action-blog">{{ $action }} Blog</span>
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
            <form action="/blog" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-2">
                    <div class="col-sm-12">
                        <label for="title" class="form-label">Título del Blog</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Título del blog">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-8">
                        <label for="image" class="form-label">Imágen principal</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="col-sm-12 col-md-4">&nbsp;</div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12">
                        <label for="content" class="form-label">Contenido del blog</label>
                        <textarea id="contentBlog" name="content">
                            <p><span style="background-color: #fbeeb8;"><strong>Borre esto...... y escriba aqu&iacute; el contenido del blog, puede usar im&aacute;genes, t&iacute;tulos, subtitulos y dem&aacute;s recursos en pantalla.</strong></span></p>
                        </textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 text-center">
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