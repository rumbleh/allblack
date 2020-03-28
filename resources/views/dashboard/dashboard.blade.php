@extends('layouts.app')

@section('content')
    @role('admin')
        <dashboard-admin></dashboard-admin>
    @endrole
    @role('user')
        <h1>Usuario representante</h1>
    @endrole
@endsection
