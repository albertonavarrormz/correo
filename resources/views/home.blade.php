@extends('template')

@section('styles')
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
@endsection

@section('title', 'Administracion de Correo')

@section('contenido')
    <nav class="navbar navbar-light bg-faded">
      <a class="navbar-brand" href="{{ route('tabla') }}">Correo</a>
    </nav>
    <div align="center">
        <img src="img/edificio.jpg" class="rounded" alt="Responsive image" width="600" height="400">        
    </div>
    <div align="center" class="container">
        <br>
        <form action="{{ route('Correo.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset>
            <div class="form-group row">
                  <label for="id_tipo_tramite" class="col-2 col-form-label">Tipo de Tramite</label>
                  <div class="col-10">
                    <select class="form-control" id="id_tipo_tramite" name="tipo_tramite">
                      <option>Expedientes</option>
                      <option>Antecedentes</option>
                      <option>Correspondencia</option>
                      <option>Antecedentes recibidos</option>
                    </select>
                  </div>
            </div>
            <div class="form-group row">
                <label for="id_accion" class="col-2 col-form-label">Accion</label>
                <div class="col-10">
                    <select class="form-control" id="id_accion" name="accion">
                      <option>Recibe</option>
                      <option>Envia</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                  <label for="id_remitente" class="col-2 col-form-label">Remitente</label>
                  <div class="col-10">
                    <input class="form-control" type="text" value=" " id="id_remitente" name="remitente">
                  </div>
            </div>
            <div class="form-group row">
                  <label for="id_corresponde" class="col-2 col-form-label">A quien va dirigido</label>
                  <div class="col-10">
                    <input class="form-control" type="text" value=" " id="id_corresponde" name="corresponde">
                  </div>
            </div>
            <div class="form-group row">
                  <label for="id_fecharecibo" class="col-2 col-form-label">Fecha de Documento</label>
                  <div class="col-10">
                    <input class="form-control" type="text" id="datepicker" name="fecha_recibo">
                  </div>
            </div>
            <div class="form-group row">
                  <label for="id_persona" class="col-2 col-form-label">Realizo</label>
                  <div class="col-10">
                    <select class="form-control" id="id_persona" name="persona">
                      <option>Ana Gaitan</option>
                      <option>Alicia Zermeño</option>
                      <option>Patricia Reyes</option>
                      <option>Alberto Navarro</option>
                      <option>otra persona</option>
                    </select>
                  </div>
            </div>
            <div class="form-group row">
                <label for="id_prioridad" class="col-2 col-form-label">Prioridad</label>
                <div class="col-10">
                     <select class="form-control" id="id_prioridad" name="prioridad">
                      <option>Alta</option>
                      <option>Media</option>
                      <option>Baja</option>
                    </select>
                </div>             
            </div>
            <div class="form-group row">
                <label for="id_motivo" class="col-2 col-form-label">Motivo o Contenido</label>
                <div class="col-10">
                 <textarea class="form-control" id="id_motivo" rows="5" name="motivo"></textarea>   
                </div>    
            </div>
            <div class="form-group row">
                <label for="id_archivo" class="col-2 col-form-label">Subir Archivo</label>
                <div class="col-10">
                  <input type="file" class="form-control-file" id="id_archivo" aria-describedby="fileHelp" name="archivo1">
                  <small id="fileHelp" class="form-text text-muted">subir el archivo comprobante</small>  
                </div>
            </div>
            <button type="submit" name="button-1" class="btn btn-primary btn-block">Enviar</button>              
            </fieldset>
        </form>
    </div>
@endsection
@section('scripts')
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="/js/calendario.js"></script>
  <script>

  </script>
@endsection
    

