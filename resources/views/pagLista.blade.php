@extends ('PagPlantilla')

@section('titulo')
    <h1 class="display-4">PAGINA LISTA</h1>
@endsection

@section('seccion')
    @if(session('msj'))
        <div class="alert alert-success">
            {{ session('msj') }}
        </div>
    @endif

    <div class="btn btn-success d-grid fs-5 mb-2">Registrar nuevo seguimiento...</div>

    <form action="" method="post" class="d-grid gap-2">
        @csrf

        @error('codEst')
            <div class="alert alert-danger">
                El código es requerido
            </div>
        @enderror

        @error('nomEst')
            <div class="alert alert-danger">
                El nombre es requerido 
            </div>
        @enderror

        @if(true)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                El <strong>apellido</strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <input type="text" name="CodEst" placeholder="Código" value="{{ old('CodEst')}}" class="form-control mb-1">
        <input type="text" name="NomEst" placeholder="Nombres" value="{{ old('NomEst')}}" class="form-control mb-1">
        <input type="text" name="ApeEst" placeholder="Apellidos" value="{{ old('ApeEst')}}" class="form-control mb-1">
        <input type="text" name="fnaEst" placeholder="Fecha de nacimiento" value="{{ old('fnaEst')}}" class="form-control mb-1">
        <select name="TurMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            <option value="1">Turno Día</option>
            <option value="2">Turno Noche</option>
            <option value="3">Turno Tarde</option>
        </select>
        <select name="SemMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            @for($i=1; $i < 7; $i++)
                <option value="{{$i}}">Semestre {{$i}}</option>
            @endfor
        </select>
        <select name="EstMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            <option value="0">Inactivo</option>
            <option value="1">Activo</option>
        </select>
        <button class="btn btn-success" type="submit">Agregar</button>
    </form>

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


   
