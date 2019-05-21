@extends('layouts.base')

@section('content')
<div>
    @isset($name)
    {{ $name }}
    @else
    <div>otro texto</div>
    @endisset
</div>
@endsection