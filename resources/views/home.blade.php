@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-12">
        <div class="row">
            <h2>
                <span class="h2-action-blog">Listado de blogs</span>
            </h2>
            <a href="/blog/create">
                <button class="btn btn-primary float-end mb-3" name="action">
                    Nuevo blog &nbsp; 
                    <i class="bi bi-plus-lg"></i>
                </button>
            </a>
        </div>
        @if (count($blogs) > 0)
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" width="100%">
                        <tr>
                            <th width="10%" class="text-center">Imágen</th>
                            <th width="20%" class="text-center">Título del blog</th>
                            <th width="10%" class="text-center">Usuario</th>
                            <th width="10%" class="text-center">Fecha</th>
                            <th width="40%" class="text-center">Contenido</th>
                            <th width="5%" class="text-center">&nbsp;</th>
                        </tr>
                        @foreach ($blogs as $blog)
                        <tr>
                            <td>
                                <img src="{{ asset('img/blog') }}/{{$blog->image}}" class="rounded mx-auto d-block" alt="Imagen blog {{ $blog->title }}" width="100%">
                            </td>
                            <td>{{ $blog->title }}</td>
                            <td class="text-center">{{ $blog->name }}</td>
                            <td class="text-center">{{ $blog->updated_at }}</td>
                            <td>{!! html_entity_decode(\Illuminate\Support\Str::limit($blog->content, 280, $end='...'), ENT_QUOTES, 'UTF-8') !!}</td>
                            <td>
                                <button class="btn btn-secondary mb-1" title="Editar">
                                    <a href="{{ asset('blog') }}/{{ $blog->slug }}/edit">
                                        <i class="bi bi-pencil-square" style="color:#fff;"></i>
                                    </a>
                                </button>
                                <button class="btn btn-primary mb-1" title="Ver">
                                    <a href="{{ asset('blog') }}/{{ $blog->slug }}" target="_blank">
                                        <i class="bi bi-eye" style="color:#fff;"></i>
                                    </a>
                                </button>
                                <form action="/blog/{{ $blog->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger mb-1" type="submit" title="Eliminar">
                                        <i class="bi bi-trash3-fill" style="color:#fff;"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $blogs->links() }}
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
