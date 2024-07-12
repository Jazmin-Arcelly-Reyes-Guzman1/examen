@extends('layout')

@section('content')
<td style="background-color: white;">
    <h2>Alumnos</h2>
        <table class="table">
            <tr>
                @if ($alumnos->count())
                    @foreach ($alumnos as $alumno)
                        <td style="background-color: white;">
                            <a href="{{ route('alumnos.show', $alumno->id) }}">{{ $alumno->cAluNombre }}</a>
                        </td>
                    @endforeach
                @else
                    <td colspan="4">No existen alumnos</td>
                @endif
            <tr>
            <tr>
                <td colspan="4">{{ $alumnos->links('pagination::bootstrap-4') }}</td>
            </tr>
        </table>
</td>
@endsection
