@extends ('PagPlantilla')

@section('Titulo del Monchito')
    <h1 class="display-4">PAGINA DE LISTA </h1>
@endsection

@section('seccion')
    <h3>Detalle Estudiante</h3>
    <p>ID:                   {{ $xDetAlumnos->id}}</p>
    <p>CODIGO:               {{ $xDetAlumnos->CodEst}}</p>
    <p>APELLIDOS Y NOMBRES:  {{ $xDetAlumnos->ApeEst}}, {{ $xDetAlumnos->NomEst}}</p>
    <p>FECHA DE NACIMIENTO:  {{ $xDetAlumnos->fnaEst}}</p>
    <p>TURNO:                {{ $xDetAlumnos->TurEst}}</p>
    <p>SEMESTRE:             {{ $xDetAlumnos->SemEst}}</p>
    <p>ESTADO DE MATRICULA:  {{ $xDetAlumnos->EstEst}}</p>
@endsection
    
