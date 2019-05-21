@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-8">
        <h3>Detalles: {{ $report->title }}</h3>
    </div>
    <div class="float-right">
        <a href="/expenseReport/{{ $report->id }}/expense/create" class="btn btn-primary">Agregar</a>
        <a href="/expenseReport/{{ $report->id }}/sendEmail" class="btn btn-info">Enviar</a>
        <a href="/expenseReport" class="btn btn-secondary">Regresar</a>
    </div>
</div>
<hr>
<div class="row">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th>Descripcion</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($report->expenses as $item)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $item->description }}</td>
                <td>{{ $item->amount }}</td>
                <td>
                    <a href="/expenseReport/{{ $report->id }}/expense/{{ $item->id }}/delete" class="btn btn-danger"
                        title="Eliminar"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection