@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-12">
        <div class="row mb-3">
            <h2>
                <span class="h2-action-blog">Listado de parametros</span>
            </h2>
        </div>
        @if (count($parametros) > 0)
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" width="100%">
                        <tr>
                            <th width="10%" class="text-center">ID</th>
                            <th width="15%" class="text-center">Key Parametro</th>
                            <th width="45%" class="text-center">Descripción</th>
                            <th width="15%" class="text-center">Valor</th>
                            <th width="15%" class="text-center">&nbsp;</th>
                        </tr>
                        @foreach ($parametros as $parametro)
                        <tr>
                            <td class="text-center">{{ $parametro->id }}</td>
                            <td class="text-center">{{ $parametro->key }}</td>
                            <td>{{ $parametro->description }}</td>
                            <td>{{ $parametro->value }}</td>
                            <td>
                                <button class="btn btn-secondary mb-1" title="Editar">
                                    <a href="{{ asset('parametros') }}/{{ $parametro->id }}/edit">
                                        <i class="bi bi-pencil-square" style="color:#fff;"></i>
                                    </a>
                                </button>
                                <button class="btn btn-primary mb-1" title="Ver">
                                    <a href="{{ asset('/') }}" target="_blank">
                                        <i class="bi bi-eye" style="color:#fff;"></i>
                                    </a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $parametros->links() }}
                </div>
            </div>
        @else
            <div class="alert alert-info" role="alert">
                No hay registros para mostrar
            </div>
        @endif
    </div>
</div>
@endsection
