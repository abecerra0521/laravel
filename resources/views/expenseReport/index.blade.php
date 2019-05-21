@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-10">
        <h3>Gastos</h3>
    </div>
    <div class="col-2">
        <a href="/expenseReport/create" class="btn btn-primary">Agregar</a>
    </div>
</div>
<hr>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reports as $item)
        <tr>
            <th scope="row">{{ $loop->index + 1 }}</th>
            <td>{{ $item->title }}</td>
            <td></td>
            <td>
                <a href="/expenseReport/{{$item->id}}" class="btn btn-info" title="Detalles"><i
                        class="fa fa-list"></i></a>
                <a href="/expenseReport/{{$item->id}}/edit" class="btn btn-secondary" title="Editar"><i
                        class="fa fa-pencil-alt"></i></a>
                <a href="/expenseReport/{{ $item->id }}/delete" class="btn btn-danger" title="Eliminar"><i
                        class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection