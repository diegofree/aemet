@extends('adminlte::page')

@section('title', 'DiegoTIC')

@section('content_header')
    <h1>LISTADO de Estaciones Metereológicas</h1>
@stop

@section('content')
    @livewire('admin.stations-index')
@stop