@extends ('PagPlantilla')

@section('Titulo del Monchito')
    <h1 class="display-4">PAGINA LISTA</h1>
@endsection

@section('seccion')
    <h3>LISTA</h3>
    <table class="table table-dark table-sm">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Codigo</th>
            <th scope="col">Apellidos y Nombres</th>
            <th scope="col">Handle</th>
        </tr>
        
        <tbody>
            @foreach($xAlumnos as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->CodEst}}</td>
                <td>
                    <a href="{{ route('Estudiante.xDetalle', $item->id)}}">
                        {{$item->ApeEst}}, {{$item->NomEst}}
                    </a>
                </td>
                <td>@mdo</td>
            </tr>
            @endforeach            
        </tbody>
    </table>
@endsection


   
