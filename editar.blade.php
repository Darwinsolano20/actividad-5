@extends("theme.$theme.layout")
@section('titulo')
    EDITAR USUARIOS
@endsection

@section("styles")
<link href="{{asset("assets/js/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css"/>
@endsection

@section("scriptsPlugins")
<script src="{{asset("assets/js/bootstrap-fileinput/js/fileinput.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/js/locales/es.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/themes/fas/theme.min.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/usuario/editar.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')        
        <div class="card card-navy">
            <div class="card-header">
                <h3 class="card-title"><b>Administracion </b> | Editar Usuario | {{$data->nombre}}</h3>
            <div class="card-tools">
                    <a href="{{route("usuario")}}" class="btn btn-outline-primary">
                        <i></i> Volver
                    </a>
                </div>
            </div>
            <form action="{{route('actualizar_usuario', ['id' => $data->id])}}" id="form-general" class="form-horizontal form--label-right" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf @method("put")
                <div class="card-body">
                    @include('ADMINISTRACION.usuario.form')
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            @include('includes.boton-form-editar')
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
