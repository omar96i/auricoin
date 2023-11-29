<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auricoin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    .px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }
    .bg-orange-gradient{
        border-width: 1px;
        --tw-border-opacity: 1;
        border-color: rgb(0 0 0 / var(--tw-border-opacity));
        background-image: linear-gradient(to right,var(--tw-gradient-stops));
        --tw-gradient-from: #ab7c2a;
        --tw-gradient-to: rgb(171 124 42 / 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        --tw-gradient-to: rgb(253 242 141 / 0);
        --tw-gradient-stops: var(--tw-gradient-from), #fdf28d, var(--tw-gradient-to);
        --tw-gradient-to: #ab7c2a;
    }

    .leading-none {
        line-height: 1;
    }
    .font-bold {
        font-weight: 700;
    }
    .text-base {
        font-size: 1rem;
        line-height: 1.5rem;
    }
    .justify-end {
        justify-content: flex-end;
    }
    .flex {
        display: flex;
    }
    .text-black {
        --tw-text-opacity: 1;
        color: rgb(0 0 0 / var(--tw-text-opacity));
    }
    .py-0 {
        padding-top: 0;
        padding-bottom: 0;
    }
    .justify-between {
        justify-content: space-between;
    }
    .place-items-center {
        place-items: center;
    }
    .mx-4 {
        margin-left: 1rem;
        margin-right: 1rem;
    }
    .gap-8 {
        gap: 2rem;
    }
    .my-2 {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .w-24 {
        width: 6rem;
    }
    img, video {
        max-width: 100%;
        height: auto;
    }
    .text-title {
        font-size: 60px;
    }
    .align-middle {
        vertical-align: middle;
    }
    .w-full {
        width: 100%;
    }
    .h-fit {
        height: -webkit-fit-content;
        height: -moz-fit-content;
        height: fit-content;
    }
    .text-nav {
        font-size: 17px;
        font-weight: 700;
    }
    .px-2 {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }
    .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }
    a {
        color: inherit;
        text-decoration: inherit;
    }
    .bg-body{
        background: #fff2cc !important;
    }
    .bg-dark-header{
        background: #282c34 !important;
    }
    .text-white{
        color: #bfbfbf;
    }
    .h-4 {
        height: 1rem;
    }

</style>
<body class="bg-body">
    <header>
        <div class="topbar bg-orange-gradient px-3 py-3">
            <p class="font-bold text-base leading-none"><i class="fa-solid fa-lock"></i> Web oficial Banco Exchange Auricoin</p>
        </div>

        <div class="flex justify-between place-items-center mx-4">
            <div class="flex place-items-center my-2 gap-8">
                <img src="https://bancoexchangeauricoin.org/images/logo-auricoin.png" class="w-24" alt="Logo Auricoin">
                <h2 class="text-title">Carta de creditos Stand By</h2>
            </div>
        </div>

        <div class="navbar w-full h-fit bg-orange-gradient flex justify-between align-middle px-2 py-3 text-nav mt-3">
            <div class="flex divide-x-2 divide-black">
                <a href="{{ route('home') }}" class="px-2">Cartas de credito</a>
                <a href="{{ route('standby-index') }}" class="px-2">Carta de credito Stand By</a>
                <a href="{{ route('standby-conditions') }}" class="px-2">Condiciones</a>
                <a href="{{ route('standby-form') }}" class="px-2">Solicitud</a>
                <a href="{{ route('standby-bills') }}" class="px-2">Gastos y comisiones</a>
            </div>
        </div>
    </header>
    <div class="p-5">
        <div class="alert alert-light" role="alert">
            <span>Tips:</span> <br>
            <ul>
                <li>Para empezar, compártenos la siguiente información de la Empresa.</li>
                <li>Llena todos los campos que se le indican, ya que son obligatorios. </li>
                <li>Advertencia, antes de solicitar una Carta de Crédito Diferida, debes estudiar el proyecto del dinero Auricoin, lo puedes hacer en línea y totalmente gratis en www.academiaauricoin.org.</li>
            </ul>
        </div>
        <form method="POST" action="{{ route('letter-store') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" value="Carta de credito stand by" name="type" style="display: none;">
            <div class="row">
                <!-- Primera etapa -->
                <div class="col-12">
                    <h5>Datos del Ordenante</h5>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Registro de Información Tributario</label>
                    <input type="text" class="form-control" name="ordenante_registro_informacion_tributario">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Nombre de la Empresa</label>
                    <input type="text" class="form-control" name="ordenante_nombre_empresa">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Dirección</label>
                    <input type="text" class="form-control" name="ordenante_direccion">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Ciudad</label>
                    <input type="text" class="form-control" name="ordenante_ciudad">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">País</label>
                    <input type="text" class="form-control" name="ordenante_pais">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Código Postal</label>
                    <input type="text" class="form-control" name="ordenante_codigo_postal">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Teléfono de la Empresa</label>
                    <input type="text" class="form-control" name="ordenante_telefono_empresa">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Correo Electrónico</label>
                    <input type="text" class="form-control" name="ordenante_correo_electronico">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Fecha de Constitución</label>
                    <input type="date" class="form-control" name="ordenante_fecha_constitucion">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Rama que explota</label>
                    <input type="text" class="form-control" name="ordenante_rama_explota">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Número de Billetera RIC</label>
                    <input type="text" class="form-control" name="ordenante_numero_billetera_ric">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Página Web </label>
                    <input type="text" class="form-control" name="ordenante_pagina_web">
                </div>

                <hr>
                <!-- Segunda etapa -->
                <div class="col-12 mt-2">
                    <h5>Datos del Representante Legal</h5>
                </div>
                <div class="col-12">
                    <div class="alert alert-light" role="alert">
                        <span>Tips:</span> <br>
                        Compártenos la información del Representante Legal de la Empresa solicitante.
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Documento de Identificación</label>
                    <input type="text" class="form-control" name="representante_legal_documento_identificacion">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">1er. Nombre</label>
                    <input type="text" class="form-control" name="representante_legal_primer_nombre">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">2do. Nombre</label>
                    <input type="text" class="form-control" name="representante_legal_segundo_nombre">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">1er. Apellido</label>
                    <input type="text" class="form-control" name="representante_legal_primer_apellido">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">2do. Apellido</label>
                    <input type="text" class="form-control" name="representante_legal_segundo_apellido">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Estado Civil</label>
                    <input type="text" class="form-control" name="representante_legal_estado_civil">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="representante_legal_fecha_nacimiento">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Dirección de Residencia</label>
                    <input type="text" class="form-control" name="representante_legal_direccion_residencia">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Ciudad</label>
                    <input type="text" class="form-control" name="representante_legal_ciudad">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">País</label>
                    <input type="text" class="form-control" name="representante_legal_pais">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Código Postal</label>
                    <input type="text" class="form-control" name="representante_legal_codigo_postal">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Teléfono Residencial</label>
                    <input type="text" class="form-control" name="representante_legal_telefono_residencial">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Teléfono Móvil</label>
                    <input type="text" class="form-control" name="representante_legal_telefono_movil">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Correo Electrónico</label>
                    <input type="text" class="form-control" name="representante_legal_correo_electronico">
                </div>

                <!-- Tercera etapa -->
                <div class="col-12 mt-2">
                    <h5>Datos de la Empresa Beneficiaria</h5>
                </div>
                <div class="col-12">
                    <div class="alert alert-light" role="alert">
                        <span>Tips:</span> <br>
                        Compártenos la información de la empresa beneficiaria de la carta de crédito.
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Registro de Información Tributario</label>
                    <input type="text" class="form-control" name="empresa_beneficiaria_registro_informacion_tributario">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Nombre de la Empresa</label>
                    <input type="text" class="form-control" name="empresa_beneficiaria_nombre_empresa">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Dirección</label>
                    <input type="text" class="form-control" name="empresa_beneficiaria_direccion">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Ciudad</label>
                    <input type="text" class="form-control" name="empresa_beneficiaria_ciudad">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">País</label>
                    <input type="text" class="form-control" name="empresa_beneficiaria_pais">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Código Postal</label>
                    <input type="text" class="form-control" name="empresa_beneficiaria_codigo_postal">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Teléfono de la Empresa</label>
                    <input type="text" class="form-control" name="empresa_beneficiaria_telefono_empresa">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Correo Electrónico</label>
                    <input type="text" class="form-control" name="empresa_beneficiaria_correo_electronico">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Fecha de Constitución</label>
                    <input type="date" class="form-control" name="empresa_beneficiaria_fecha_constitucion">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Rama que explota</label>
                    <input type="text" class="form-control" name="empresa_beneficiaria_rama_explota">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Número de Billetera RIC</label>
                    <input type="text" class="form-control" name="empresa_beneficiaria_numero_billetera_ric">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Página Web</label>
                    <input type="text" class="form-control" name="empresa_beneficiaria_pagina_web">
                </div>
                <!-- Cuarta etapa -->
                <div class="col-12 mt-2">
                    <h5>Datos del Representante Legal de la Empresa Beneficiaria</h5>
                </div>
                <div class="col-12">
                    <div class="alert alert-light" role="alert">
                        <span>Tips:</span> <br>
                        Compártenos la información del Representante Legal de la Empresa Beneficiaria.
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Documento de Identificación</label>
                    <input type="text" class="form-control" name="representante_legal_documento_identificacion2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">1er. Nombre</label>
                    <input type="text" class="form-control" name="representante_legal_primer_nombre2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">2do. Nombre</label>
                    <input type="text" class="form-control" name="representante_legal_segundo_nombre2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">1er. Apellido</label>
                    <input type="text" class="form-control" name="representante_legal_primer_apellido2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">2do. Apellido</label>
                    <input type="text" class="form-control" name="representante_legal_segundo_apellido2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Estado Civil</label>
                    <input type="text" class="form-control" name="representante_legal_estado_civil2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="representante_legal_fecha_nacimiento2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Dirección de Residencia</label>
                    <input type="text" class="form-control" name="representante_legal_direccion_residencia2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Ciudad</label>
                    <input type="text" class="form-control" name="representante_legal_ciudad2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">País</label>
                    <input type="text" class="form-control" name="representante_legal_pais2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Código Postal</label>
                    <input type="text" class="form-control" name="representante_legal_codigo_postal2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Teléfono Residencial</label>
                    <input type="text" class="form-control" name="representante_legal_telefono_residencial2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Teléfono Móvil</label>
                    <input type="text" class="form-control" name="representante_legal_telefono_movil2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Correo Electrónico</label>
                    <input type="text" class="form-control" name="representante_legal_correo_electronico2">
                </div>
                <!-- Quinta etapa -->
                <div class="col-12 mt-2">
                    <h5>Redes Sociales</h5>
                </div>
                <div class="col-12">
                    <div class="alert alert-light" role="alert">
                        <span>Tips:</span> <br>
                        Compártenos las redes sociales, son importantes para nosotros saber de su Empresa.
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Red social N° 1</label>
                    <input type="text" class="form-control" name="red_social_1">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Red social N° 2</label>
                    <input type="text" class="form-control" name="red_social_2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Red social N° 3</label>
                    <input type="text" class="form-control" name="red_social_3">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Red social N° 4</label>
                    <input type="text" class="form-control" name="red_social_4">
                </div>

                <!-- Secta etapa -->
                <div class="col-12 mt-2">
                    <h5>Referencias Bancarias</h5>
                </div>
                <div class="col-12">
                    <div class="alert alert-light" role="alert">
                        <span>Tips:</span> <br>
                        Compártenos dos (2) entidades bancarias, con las que tenga relaciones financieras la empresa.
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Nombre de la Entidad</label>
                    <input type="text" class="form-control" name="entidad_bancaria_1_nombre">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">País de ubicación</label>
                    <input type="text" class="form-control" name="entidad_bancaria_1_pais">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Teléfono</label>
                    <input type="text" class="form-control" name="entidad_bancaria_1_telefono">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Persona de Contacto</label>
                    <input type="text" class="form-control" name="entidad_bancaria_1_persona_contacto">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Nombre de la Entidad</label>
                    <input type="text" class="form-control" name="entidad_bancaria_1_nombre_2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">País de ubicación</label>
                    <input type="text" class="form-control" name="entidad_bancaria_1_pais_2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Teléfono</label>
                    <input type="text" class="form-control" name="entidad_bancaria_1_telefono_2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Persona de Contacto</label>
                    <input type="text" class="form-control" name="entidad_bancaria_1_persona_contacto_2">
                </div>

                <!-- Septima etapa -->
                <div class="col-12 mt-2">
                    <h5>Referencias Bancarias</h5>
                </div>
                <div class="col-12">
                    <div class="alert alert-light" role="alert">
                        <span>Tips:</span> <br>
                        Compártenos dos (2) comercios, con las que sostengas negociaciones su empresa.
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Nombre de la Empresa</label>
                    <input type="text" class="form-control" name="entidad_bancaria_2_nombre">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">País de ubicación</label>
                    <input type="text" class="form-control" name="entidad_bancaria_2_pais">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Teléfono</label>
                    <input type="text" class="form-control" name="entidad_bancaria_2_telefono">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Persona de Contacto</label>
                    <input type="text" class="form-control" name="entidad_bancaria_2_persona_contacto">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Nombre de la Empresa</label>
                    <input type="text" class="form-control" name="entidad_bancaria_2_nombre_2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">País de ubicación</label>
                    <input type="text" class="form-control" name="entidad_bancaria_2_pais_2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Teléfono</label>
                    <input type="text" class="form-control" name="entidad_bancaria_2_telefono_2">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Persona de Contacto</label>
                    <input type="text" class="form-control" name="entidad_bancaria_2_persona_contacto_2">
                </div>

                <!-- Octava etapa -->
                <div class="col-12 mt-2">
                    <h5>Condiciones de la Carta de Crédito</h5>
                </div>
                <div class="col-12">
                    <div class="alert alert-light" role="alert">
                        <span>Tips:</span> <br>
                        Compartanos las condiciones de la Carta de Crédito, que negociaste con el beneficiario.
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Forma de Crédito Documentario</label>
                    <input type="text" class="form-control" name="condiciones_forma_credito_documentario">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Moneda</label>
                    <input type="text" class="form-control" name="condiciones_moneda">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Vigencia en días</label>
                    <input type="text" class="form-control" name="condiciones_vigencia_dias">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Valor en Números</label>
                    <input type="text" class="form-control" name="condiciones_valor_numeros">
                </div>
                <div class="col-12 col-sm-9">
                    <label for="">Valor en Letras </label>
                    <input type="text" class="form-control" name="condiciones_valor_letras">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Tolerancia</label>
                    <input type="text" class="form-control" name="condiciones_tolerancia">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Despachos Parciales </label>
                    <input type="text" class="form-control" name="condiciones_despachos_parciales">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Transbordos</label>
                    <input type="text" class="form-control" name="condiciones_transbordos">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Puerto/Aeropuerto de embarque</label>
                    <input type="text" class="form-control" name="condiciones_puerto_embarque">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Ciudad</label>
                    <input type="text" class="form-control" name="condiciones_ciudad_embarque">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">País</label>
                    <input type="text" class="form-control" name="condiciones_pais_embarque">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Puerto/Aeropuerto de destino</label>
                    <input type="text" class="form-control" name="condiciones_puerto_destino">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Ciudad</label>
                    <input type="text" class="form-control" name="condiciones_ciudad_destino">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">País</label>
                    <input type="text" class="form-control" name="condiciones_pais_destino">
                </div>
                <div class="col-12 col-sm-6 text-center">
                    <label for="">Avisada</label>
                    <input type="text" class="form-control" name="condiciones_avisada">
                </div>
                <div class="col-12 col-sm-6 text-center">
                    <label for="">Confirmada</label>
                    <input type="text" class="form-control" name="condiciones_confirmada">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Fecha máxima de embarque </label>
                    <input type="date" class="form-control" name="condiciones_fecha_maxima_embarque">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Forma de Pago</label>
                    <input type="text" class="form-control" name="condiciones_forma_pago">
                </div>

                <!-- Octava etapa -->
                <div class="col-12 mt-2">
                    <h5>Si la forma de pago es diferente a la vista diligencie: </h5>
                </div>
                <div class="col-12 col-sm-6">
                    <label for="">Aceptación</label>
                    <input type="text" class="form-control" name="condiciones_2_aceptacion">
                </div>
                <div class="col-12 col-sm-6">
                    <label for="">días</label>
                    <input type="text" class="form-control" name="condiciones_2_dias_aceptacion">
                </div>

                <div class="col-12 mt-2">
                    <h5>Mixto: </h5>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="">Vista %</label>
                    <input type="text" class="form-control" name="condiciones_2_vista_porcentaje">
                </div>
                <div class="col-12 col-sm-6">
                    <label for="">Aceptación %</label>
                    <input type="text" class="form-control" name="condiciones_2_aceptacion_porcentaje">
                </div>
                <div class="col-12 col-sm-6">
                    <label for="">días</label>
                    <input type="text" class="form-control" name="condiciones_2_dias">
                </div>
                <div class="col-12 col-sm-6">
                    <label for="">A partir de:</label>
                    <input type="text" class="form-control" name="condiciones_2_a_partir_de">
                </div>

                <!-- Novena etapa -->
                <div class="col-12 mt-2">
                    <h5>En caso de requerirse documento de transporte combinado </h5>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="">Lugar de Recepción</label>
                    <input type="text" class="form-control" name="condiciones_3_lugar_recepcion">
                </div>
                <div class="col-12 col-sm-6">
                    <label for="">Lugar final de destino:</label>
                    <input type="text" class="form-control" name="condiciones_3_lugar_destino">
                </div>
                <div class="col-12">
                    <label for="">Término de negociación:</label>
                    <input type="text" class="form-control" name="condiciones_3_termino_negociacion">
                </div>

                <!-- Decima etapa -->
                <div class="col-12 mt-2">
                    <h5>Comisiones y gastos fuera del pais del ordenante por cuenta del:</h5>
                </div>

                <div class="col-6">
                    <label for="">Beneficiario</label>
                    <input type="text" class="form-control" name="condiciones_3_comisiones_beneficiario">
                </div>
                <div class="col-6">
                    <label for="">Ordenante</label>
                    <input type="text" class="form-control" name="condiciones_3_comisiones_ordenante">
                </div>

                 <!-- Onceaba etapa -->
                 <div class="col-12 mt-2">
                    <h5>Descripción de la mercancia </h5>
                </div>

                <div class="col-12">
                    <label for="">Describir brevemente la mercancia e indicando cantidades:</label>
                    <input type="textarea" class="form-control" name="condiciones_3_descripcion_mercancia">
                </div>

                 <!-- Doceaba etapa -->
                 <div class="col-12 mt-2">
                    <h5>Documentos exigibles para el pago </h5>
                </div>

                <div class="col-12 mt-2">
                    <h6>Factura comercial </h6>
                </div>

                <div class="col-12">
                    <h6>Documento de transporte</h6>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Marítimo limpio a bordo </label>
                    <input type="text" class="form-control" name="documento_transporte_maritimo_limpo_bordo">
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Aéreo</label>
                    <input type="text" class="form-control" name="documento_transporte_aereo">
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Terrestre</label>
                    <input type="text" class="form-control" name="documento_transporte_terrestre">
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Combinado</label>
                    <input type="text" class="form-control" name="documento_transporte_combinado">
                </div>

                <div class="col-12">
                    <label for="">Consignado a: </label>
                    <input type="text" class="form-control" name="documento_transporte_consignado_a">
                </div>

                <div class="col-12">
                    <label for="">Notificado a: </label>
                    <input type="text" class="form-control" name="documento_transporte_notificado_a">
                </div>
                <div class="col-12">
                    <label for="">Lista de Embarque</label>
                    <input type="text" class="form-control" name="documento_transporte_lista_embarque">
                </div>
                <div class="col-12">
                    <label for="">Certificado de Origen </label>
                    <input type="text" class="form-control" name="documento_transporte_certificado_origen">
                </div>
                <div class="col-12">
                    <label for="">Carta informe embarque</label>
                    <input type="text" class="form-control" name="documento_transporte_carta_informe_embarque">
                </div>
                <div class="col-12">
                    <label for="">Carta envío documentos</label>
                    <input type="text" class="form-control" name="documento_transporte_carta_envio_documentos">
                </div>
                <div class="col-12">
                    <label for="">Otros documentos</label>
                    <input type="file" class="form-control" name="documento_transporte_otros_documentos_1">
                </div>

                <div class="col-12 mt-3">
                    <label for=""><strong>Otras Condiciones adicionales</strong> </label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" name="documento_transporte_otras_condiciones_adicionales"></textarea>
                </div>

                <div class="col-12 mt-2">
                    <h5>Agente Auricoin</h5>
                </div>

                <div class="col-12">
                    <div class="alert alert-light" role="alert">
                        <span>Tips:</span> <br>
                        Compártenos que Asesor te respaldará en esta solicitud. Solicítale su nombre completo y el código que tiene registrado en el BEA, para que lo coloque donde se te indica. Cualquier anomalía,
                        cobro de comisión o fraude que el personal del BEA, haya realizado o intentado contra su persona. Por favor no te quedes callado denúncialo a través del siguiente correo electrónico: <br> ...........
                        ............................................. <br>
                        Si está realizando esta solicitud de crédito sin asesoría, por favor omite este paso.
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Nombres y Apellidos</label>
                    <input type="text" class="form-control" name="agente_auricoin_nombres_apellidos">
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Código</label>
                    <input type="text" class="form-control" name="agente_auricoin_codigo">
                </div>

                <div class="col-12 mt-2">
                    <h5>Documentación</h5>
                </div>

                <div class="col-12">
                    <div class="alert alert-light" role="alert">
                        <span>Tips:</span> <br>
                        Documentación a anexar. <br>
                        Estimado cliente, debe adjuntar los documentos de la empresa ordenante: Acta Constitutiva y modificaciones si las hubiere, Registro de Información Tributaria y Factura Pro-Forma o Contrato <br>
                        de Compra Venta. <br>
                        Documentos Anexar del Representante legal: Documento de Identificación. Formato permitido JPG, PNG, PDF, DOC, ODT.  <br>
                    </div>
                </div>

                <div class="col-12 mt-2">
                    <h5>Empresa</h5>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Acta Constitutiva y Modificaciones</label>
                    <input type="file" class="form-control" name="empresa_acta_constitutiva_modificaciones">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Registro de Información Tributario</label>
                    <input type="file" class="form-control" name="empresa_registro_informacion_tributario">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Factura Pro-forma</label>
                    <input type="file" class="form-control" name="empresa_factura_proforma">
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Contrato de Compra Venta</label>
                    <input type="file" class="form-control" name="empresa_contrato_compra_venta">
                </div>

                <div class="col-12 mt-2">
                    <h5>Representante Legal  </h5>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Documento de Identificación Personal</label>
                    <input type="file" class="form-control" name="empresa_documento_identificacion_personal">
                </div>

                <div class="col-12 mt-2">
                    <h5>Declaración del Solicitante </h5>
                </div>

                <div class="col-12 mt-2">
                    <div class="alert alert-light" role="alert">
                        <span>Tips:</span> <br>
                        Primero: Que deseo que mi representada pertenezca a la Comunidad del dinero Auricoin, dinero este que se encuentra catalogado como una moneda de tipo social; Segundo: Declaro que:  he
                        leído, estudiado y que conozco el proyecto del dinero Auricoin RIC, ya que realicé el diplomado en nombre de mi representada en la página web www.academiaauricoin.org; Declaro en
                        nombre de mi representada que conozco y doy aquí por reproducido el documento que lleva por nombre REGLAMENTO INTERNO DE CONDUCTA, ya que el mismo se encuentra adjunto al
                        final de cada vista de la página web:  ...................................., y comprometo a mi representada a dar total cumplimiento al mismo.
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox">
                            <label  >Acepto las autorizaciones aquí descritas con relación a la consulta y reporte de la información de mi representada</label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="bg-orange-gradient px-6 py-1 font-black float-right" type="submit">
                        ENVIAR
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div>
        <div class="bg-orange-gradient h-4"></div>
        <p class="text-center">© 2023 Banco Exchange Auricoin</p>
        <div class="bg-orange-gradient h-4"></div>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<script>
</script>
