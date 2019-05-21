@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <h3>Crear gasto</h3>
    </div>
</div>
<hr>
<div class="row">
    <!-- <form action="/expense" method="post"> -->
    <form action="/expenseReport/{{ $report }}/expense" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-md-6">
                <label for="title" class="col-form-label">Descripci&oacute;n</label>
                <input type="text" class="form-control" name="title" id="title"
                    value="{{ old('description',  isset($expense->title) ? $expense->description : '') }}">
            </div>
            <div class="col-md-6">
                <label for="total" class="col-form-label">Total</label>
                <input type="number" class="form-control" name="total" id="total"
                    value="{{ old('amount',  isset($expense->amount) ? $expense->amount : '') }}">
            </div>
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
            <a href="/expenseReport/{{ $report }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection