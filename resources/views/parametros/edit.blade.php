@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
    <div class="row">
        <h2>
            <span class="h2-action-parametro">{{ $action }} Parametro - </span>
            <span class="h2-action-parametro-name">{{ $parametro->key }}</span>
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
            <form action="/parametros/{{ $parametro->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row mt-2">
                    <div class="col-sm-12">
                        <label for="value" class="form-label">Valor del Parametro</label>
                        <input type="text" class="form-control" id="value" name="value" value="{{ $parametro->value }}" placeholder="valor del parametro">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-primary" name="action">
                            <a href="{{ asset('parametros') }}">
                                <i class="bi bi-backspace-fill"></i> &nbsp; Volver
                            </a>
                        </button>
                        <button class="btn btn-primary greenbg" type="submit" name="action">
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