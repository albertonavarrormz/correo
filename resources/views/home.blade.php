@extends('template')

@section('styles')
<link rel="stylesheet" href="css/style.css">
@endsection

@section('title', 'Administracion de Correo')

@section('contenido')

    <div align="center">
        <img src="/img/edificio.jpg" class="rounded" alt="Responsive image" width="600" height="400">        
    </div>
    <div align="center" class="container">
        <br>
        <form>
            {{ csrf_field() }}
            <div class="form-group row">
                  <label for="id_tipo_tramite" class="col-2 col-form-label">Tipo de Tramite</label>
                  <div class="col-10">
                    <select class="form-control" id="id_tipo_tramite">
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
                    <select class="form-control" id="id_accion">
                      <option>Recibe</option>
                      <option>Envia</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                  <label for="id_remitente" class="col-2 col-form-label">Remitente</label>
                  <div class="col-10">
                    <input class="form-control" type="text" value=" " id="id_remitente">
                  </div>
            </div>
            <div class="form-group row">
                  <label for="id_corresponde" class="col-2 col-form-label">A quien va dirigido</label>
                  <div class="col-10">
                    <input class="form-control" type="text" value=" " id="id_corresponde">
                  </div>
            </div>
            <div class="form-group row">
                  <label for="id_fecharecibo" class="col-2 col-form-label">Fecha de Documento</label>
                  <div class="col-10">
                    <input class="form-control" type="date" value=" " id="id_fecharecibo">
                  </div>
            </div>
            <div class="form-group row">
                  <label for="id_persona" class="col-2 col-form-label">Realizo</label>
                  <div class="col-10">
                    <select class="form-control" id="id_persona">
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
                     <select class="form-control" id="id_prioridad">
                      <option>Alta</option>
                      <option>Media</option>
                      <option>Baja</option>
                    </select>
                </div>             
            </div>
            <div class="form-group row">
                <label for="id_motivo" class="col-2 col-form-label">Motivo o Contenido</label>
                <div class="col-10">
                 <textarea class="form-control" id="id_motivo" rows="5"></textarea>   
                </div>    
            </div>
            <div class="form-group row">
                <label for="id_archivo" class="col-2 col-form-label">Subir Archivo</label>
                <div class="col-10">
                  <input type="file" class="form-control-file" id="id_archivo" aria-describedby="fileHelp">
                  <small id="fileHelp" class="form-text text-muted">subir el archivo comprobante</small>  
                </div>
            </div>

            <button type="submit" name="button-1" class="btn btn-primary btn-block">Enviar</button>
        </form>
    </div>
@endsection
@section('scripts')
@endsection
    

