@extends('layout')

@section('title','Ingreso')

@section('content')
<table cellpadding="3" cellspacing="5">
    <tr>
        <h2>Ingreso </h2>
    </tr>
    <form action="{{ route('alumnos.store') }}" method="post">
        @csrf
        <tr>
            <th>Nombre</th>
            <td><input type="text" name="cAluNombre" value="{{ old('cAluNombre') }}"><br>{{ $errors->first('cAluNombre') }}</td>
        </tr>
        <tr>
            <th>Curso</th>
            <td><input type="text" name="cAluCurso" value="{{ old('cAluCurso') }}"><br>{{ $errors->first('cAluCurso') }}</td>
        </tr>
        <tr>
            <th>Nota 1</th>
            <td><input type="number" step="0.01" name="nAluNota1" value="{{ old('nAluNota1') }}"><br>{{ $errors->first('nAluNota1') }}</td>
        </tr>
        <tr>
            <th>Nota 2</th>
            <td><input type="number" step="0.01" name="nAluNota2" value="{{ old('nAluNota2') }}"><br>{{ $errors->first('nAluNota2') }}</td>
        </tr>
        <tr>
            <th>Fecha de Registro</th>
            <td><input type="date" name="dAluFecRegistro" value="{{ old('dAluFecRegistro') }}"><br>{{ $errors->first('dAluFecRegistro') }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button>Guardar</button></td>
        </tr>
    </form>
</table>
@endsection
