@extends('template')

@section('styles')
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
@endsection

@section('title', 'Administracion de Correo')

@section('contenido')
    <div class="container">
         <div class="row">
            <div class="col">
                <h1 class="letra_azulclea">Tipo de Tramite</h1>
                <label>{{$correo->tipo_tramite}}</label>
            </div>
            <div class="col">
                <h1 class="letra_azulclea">Accion</h1>
                <label>{{$correo->accion}}</label>
            </div>
            <div class="col">
                <h1 class="letra_azulclea">Remitente</h1>
                <label>{{$correo->remitente}}</label>
            </div>
            <div class="col">
                <h1 class="letra_azulclea">Fecha Registro</h1>   
                <label>{{ Carbon\Carbon::parse($correo->fecha_registro)->format('d/m/Y') }}</label>
            </div>    
         </div>
        <div class="row">
            <div class="col-lg-6">
                <h1 class="letra_azulclea">Fecha Recibo</h1>
                <label>{{ Carbon\Carbon::parse($correo->fecha_recibo)->format('d/m/Y') }}</label>   
            </div>
            <div class="col-lg-3">
                <h1 class="letra_azulclea">Persona</h1>
                <label>{{$correo->persona}}</label>
            </div>
            <div class="col -lg3">
                <h1 class="letra_azulclea">Prioridad</h1>
                <label>{{$correo->prioridad}}</label>
            </div>
            
        </div>
        <div>
                <h1 class="letra_azulclea">Motivo</h1>
                <label>{{$correo->motivo}}</label>  
        </div>
         <div class="row">
            <h1>Comprobante</h1>
            <object class="pdf" data="data:application/pdf;base64,{{base64_encode($correo->archivo1)}}" type="application/pdf"> </object>
          
        </div>
    </div>

  
@endsection
@section('scripts')
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="/js/calendario.js"></script>
  <script>

  </script>
@endsection