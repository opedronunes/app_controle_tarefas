@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Tarefa</h5>
                    <div class="d-flex gap-1">
                        <a href="{{route('tarefa.create')}}">Nova</a>
                        <a href="{{route('tarefa.exportacao')}}">Exportar</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tarefa</th>
                            <th scope="col">Data conclusão</th>
                            <th scope="col">Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarefas as $t)
                                <tr>
                                    <th scope="row">{{$t->id}}</th>
                                    <td>{{ $t->tarefa }}</td>
                                    <td>{{ date('d/m/Y', strtotime($t->data_limite_conclusao)) }}</td>
                                    <td class="d-flex gap-2">
                                        <div>
                                            <a href="{{ route('tarefa.edit', $t->id) }}">Editar</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('tarefa.destroy', $t->id) }}" id="form_{{$t->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" onclick="document.getElementById('form_{{$t->id}}').submit()" >Excluir</a>
                                        </div>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                      </table>
                      <nav>
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Voltar</a></li>
                          @for ($i = 1; $i <= $tarefas->lastPage(); $i++)
                            <li class="page-item {{$tarefas->currentPage() == $i ? 'active' : '' }} ">
                                <a class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a>
                            </li>  
                          @endfor
                          <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Avançar</a></li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
