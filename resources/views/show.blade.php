@extends('layout')

@section('title','Alumno | ' . $alumno->nombre)

@section('content')
<style>
.action-buttons {
    display: flex;
    align-items: center;
    gap: 10px;
}

.action-button {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 1.2em;
}

</style>

<div class="action-buttons" style="background-color: white;">
    <h5>Alumno <strong><span>{{ $alumno->cAluNombre }}</strong></span></h5>
</div>


<table class="table" style="background-color: white;" >
    <tr><th>Alumno:</th> <td>{{ $alumno->cAluNombre }}</td></tr>

    <tr><th>Curso:</th><td>{{ $alumno->cAluCurso }}</td></tr>

    <tr><th>Nota 1:</th><td>{{ $alumno->nAluNota1 }}</td></tr>
    
    <tr><th>Nota 2:</th><td>{{ $alumno->nAluNota2 }}</td></tr>

    <tr><th>Promedio:</th><td>{{ $alumno->nAluPromedio }}</td></tr>

    <tr><th>Condición:</th><td>{{ $alumno->cAluCondicion }}</td></tr>
    
    <tr><th>Fecha de Registro:</th><td>{{ $alumno->created_at->diffForHumans() }}</td></tr>
</table>
@endsection
