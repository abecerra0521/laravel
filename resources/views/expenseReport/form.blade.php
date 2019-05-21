@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <h3>
            @if (!isset($report))
            Crear
            @else
            Editar
            @endif Reporte
        </h3>
    </div>
</div>
<hr>
<div class="row">
    <!-- <form action="/expense" method="post"> -->
    <form action="{{ !isset($report) ? '/expenseReport' :  '/expenseReport/' . $report->id }} " method="POST">
        @csrf
        @if (isset($report))
        @method('put')
        @endif
        <div class="form-group row">
            <div class="col-md-6">
                <label for="title" class="col-form-label">Titulo</label>
                <input type="text" class="form-control" name="title" id="title"
                    value="{{ old('title',  isset($report->title) ? $report->title : '') }}">
            </div>
            {{-- <div class="col-md-6">
                <label for="date" class="col-form-label">Fecha</label>
                <input type="datetime-local" class="form-control" name="date" id="date"
                    value="{{ old('date',  isset($expense->Date) ? $expense->Date : '') }}">
        </div> --}}
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="float-right">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/expenseReport" class="btn btn-secondary">Cancelar</a>
</div>
</form>
</div>
@endsection