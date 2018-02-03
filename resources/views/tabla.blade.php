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
                        <th>Tipo Tramite</th>
                        <th>Remitente</th>
                        <th>A quien va Dirigido</th>
                        <th>Fecha Documento</th>
                        <th>Realizo</th>
                        <th>Prioridad</th>
                        <th>Accion</th>
                        <th>Motivo</th>
                        <th>Archivo</th>
                    </tr>
                </thead>
                <tbody>       
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td><button type="button" class="btn btn-outline-primary">Archivo</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td><button type="button" class="btn btn-outline-primary">Archivo</button></td>
                    </tr>
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






