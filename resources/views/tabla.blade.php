@extends('template')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
@endsection

@section('title', 'Administracion de Correo')

@section('contenido')

    <div class="row col-lg-12">
        <div   class="table-responsive">
            <table id="example" class="table table-striped table-bordered table-hover table-bordered" cellspacing="0" width="100%">  
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Tipo Tramite</th>
                        <th>Accion</th>
                        <th>Remitente</th>
                        <th>Fecha de Registro</th>
                        <th>Fecha de Recibo</th>
                        <th>Persona</th>
                        <th>Prioridad</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($correos as $correo)
                    <tr>
                        <td>{{ $correo->id }}</td>
                        <td>{{ $correo->tipo_tramite }}</td>
                        <td>{{ $correo->accion }}</td>
                        <td>{{ $correo->remitente }}</td>
                        <td>{{ Carbon\Carbon::parse($correo->fecha_registro)->format('d/m/Y') }}</td>
                        <td>{{ Carbon\Carbon::parse($correo->fecha_recibo)->format('d/m/Y') }}</td>
                        <td>{{ $correo->persona }}</td>
                        <td>{{ $correo->prioridad }}</td>
                        <td><a href="{{ route('Correo.show', $correo->id) }}" class="btn btn-lg btn-primary">Detalle</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
    </div>
    
@endsection
@section('scripts')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="/js/tabla.js"></script>
@endsection


<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>



</body>

</html>






