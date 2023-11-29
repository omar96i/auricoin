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

    input[type="checkbox"] {
        width: 2em;
        height: 2em;
    }

    input[type="checkbox"]:checked {
        background-color: green;
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
                <h2 class="text-title">Carta de creditos</h2>
            </div>
        </div>

        <div class="navbar w-full h-fit bg-orange-gradient flex justify-between align-middle px-2 py-3 text-nav mt-3">
            <div class="flex divide-x-2 divide-black">
                <a href="{{ route('show') }}" class="px-2">Lista de carta de creditos</a>
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
        <form>
            <div class="row">
                <!-- Primera etapa -->
                <div class="col-12">
                    <h5>Datos del Ordenante</h5>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Registro de Información Tributario</label>
                    <div class=" d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_registro_informacion_tributario" value="{{ $letter->ordenante_registro_informacion_tributario }}" disabled>
                        <input type="checkbox" class="check-style" id="ordenante_registro_informacion_tributario" name="ordenante_registro_informacion_tributario"/>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Nombre de la Empresa</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" class="form-control mr-2" name="ordenante_nombre_empresa" value="{{ $letter->ordenante_nombre_empresa }}" disabled>
                        <input type="checkbox" class="check-style" id="ordenante_nombre_empresa" name="ordenante_nombre_empresa"/>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="ordenante_direccion" class="form-label">Dirección</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_direccion" value="{{ $letter->ordenante_direccion }}">
                        <input type="checkbox" class="check-style" id="ordenante_direccion_checkbox" name="ordenante_direccion_checkbox" {{ $letter->ordenante_direccion_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>
                <!-- Ciudad -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_ciudad" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_ciudad" value="{{ $letter->ordenante_ciudad }}">
                        <input type="checkbox" class="check-style" id="ordenante_ciudad_checkbox" name="ordenante_ciudad_checkbox" {{ $letter->ordenante_ciudad_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- País -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_pais" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_pais" value="{{ $letter->ordenante_pais }}">
                        <input type="checkbox" class="check-style" id="ordenante_pais_checkbox" name="ordenante_pais_checkbox" {{ $letter->ordenante_pais_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Código Postal -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_codigo_postal" class="form-label">Código Postal</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_codigo_postal" value="{{ $letter->ordenante_codigo_postal }}">
                        <input type="checkbox" class="check-style" id="ordenante_codigo_postal_checkbox" name="ordenante_codigo_postal_checkbox" {{ $letter->ordenante_codigo_postal_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono de la Empresa -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_telefono_empresa" class="form-label">Teléfono de la Empresa</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_telefono_empresa" value="{{ $letter->ordenante_telefono_empresa }}">
                        <input type="checkbox" class="check-style" id="ordenante_telefono_empresa_checkbox" name="ordenante_telefono_empresa_checkbox" {{ $letter->ordenante_telefono_empresa_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Correo Electrónico -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_correo_electronico" class="form-label">Correo Electrónico</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_correo_electronico" value="{{ $letter->ordenante_correo_electronico }}">
                        <input type="checkbox" class="check-style" id="ordenante_correo_electronico_checkbox" name="ordenante_correo_electronico_checkbox" {{ $letter->ordenante_correo_electronico_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Fecha de Constitución -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_fecha_constitucion" class="form-label">Fecha de Constitución</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="date" name="ordenante_fecha_constitucion" value="{{ $letter->ordenante_fecha_constitucion }}">
                        <input type="checkbox" class="check-style" id="ordenante_fecha_constitucion_checkbox" name="ordenante_fecha_constitucion_checkbox" {{ $letter->ordenante_fecha_constitucion_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Rama que explota -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_rama_explota" class="form-label">Rama que explota</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_rama_explota" value="{{ $letter->ordenante_rama_explota }}">
                        <input type="checkbox" class="check-style" id="ordenante_rama_explota_checkbox" name="ordenante_rama_explota_checkbox" {{ $letter->ordenante_rama_explota_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Número de Billetera RIC -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_numero_billetera_ric" class="form-label">Número de Billetera RIC</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_numero_billetera_ric" value="{{ $letter->ordenante_numero_billetera_ric }}">
                        <input type="checkbox" class="check-style" id="ordenante_numero_billetera_ric_checkbox" name="ordenante_numero_billetera_ric_checkbox" {{ $letter->ordenante_numero_billetera_ric_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Página Web -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_pagina_web" class="form-label">Página Web</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_pagina_web" value="{{ $letter->ordenante_pagina_web }}">
                        <input type="checkbox" class="check-style" id="ordenante_pagina_web_checkbox" name="ordenante_pagina_web_checkbox" {{ $letter->ordenante_pagina_web_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
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
                <!-- Documento de Identificación -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_documento_identificacion" class="form-label">Documento de Identificación</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_documento_identificacion" value="{{ $letter->representante_legal_documento_identificacion }}">
                        <input type="checkbox" class="check-style" id="representante_legal_documento_identificacion_checkbox" name="representante_legal_documento_identificacion_checkbox" {{ $letter->representante_legal_documento_identificacion_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 1er. Nombre -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_primer_nombre" class="form-label">1er. Nombre</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_primer_nombre" value="{{ $letter->representante_legal_primer_nombre }}">
                        <input type="checkbox" class="check-style" id="representante_legal_primer_nombre_checkbox" name="representante_legal_primer_nombre_checkbox" {{ $letter->representante_legal_primer_nombre_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 2do. Nombre -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_segundo_nombre" class="form-label">2do. Nombre</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_segundo_nombre" value="{{ $letter->representante_legal_segundo_nombre }}">
                        <input type="checkbox" class="check-style" id="representante_legal_segundo_nombre_checkbox" name="representante_legal_segundo_nombre_checkbox" {{ $letter->representante_legal_segundo_nombre_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 1er. Apellido -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_primer_apellido" class="form-label">1er. Apellido</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_primer_apellido" value="{{ $letter->representante_legal_primer_apellido }}">
                        <input type="checkbox" class="check-style" id="representante_legal_primer_apellido_checkbox" name="representante_legal_primer_apellido_checkbox" {{ $letter->representante_legal_primer_apellido_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 2do. Apellido -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_segundo_apellido" class="form-label">2do. Apellido</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_segundo_apellido" value="{{ $letter->representante_legal_segundo_apellido }}">
                        <input type="checkbox" class="check-style" id="representante_legal_segundo_apellido_checkbox" name="representante_legal_segundo_apellido_checkbox" {{ $letter->representante_legal_segundo_apellido_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Estado Civil -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_estado_civil" class="form-label">Estado Civil</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_estado_civil" value="{{ $letter->representante_legal_estado_civil }}">
                        <input type="checkbox" class="check-style" id="representante_legal_estado_civil_checkbox" name="representante_legal_estado_civil_checkbox" {{ $letter->representante_legal_estado_civil_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Fecha de Nacimiento -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="date" name="representante_legal_fecha_nacimiento" value="{{ $letter->representante_legal_fecha_nacimiento }}">
                        <input type="checkbox" class="check-style" id="representante_legal_fecha_nacimiento_checkbox" name="representante_legal_fecha_nacimiento_checkbox" {{ $letter->representante_legal_fecha_nacimiento_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Dirección de Residencia -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_direccion_residencia" class="form-label">Dirección de Residencia</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_direccion_residencia" value="{{ $letter->representante_legal_direccion_residencia }}">
                        <input type="checkbox" class="check-style" id="representante_legal_direccion_residencia_checkbox" name="representante_legal_direccion_residencia_checkbox" {{ $letter->representante_legal_direccion_residencia_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Ciudad -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_ciudad" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_ciudad" value="{{ $letter->representante_legal_ciudad }}">
                        <input type="checkbox" class="check-style" id="representante_legal_ciudad_checkbox" name="representante_legal_ciudad_checkbox" {{ $letter->representante_legal_ciudad_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- País -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_pais" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_pais" value="{{ $letter->representante_legal_pais }}">
                        <input type="checkbox" class="check-style" id="representante_legal_pais_checkbox" name="representante_legal_pais_checkbox" {{ $letter->representante_legal_pais_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Código Postal -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_codigo_postal" class="form-label">Código Postal</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_codigo_postal" value="{{ $letter->representante_legal_codigo_postal }}">
                        <input type="checkbox" class="check-style" id="representante_legal_codigo_postal_checkbox" name="representante_legal_codigo_postal_checkbox" {{ $letter->representante_legal_codigo_postal_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono Residencial -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_telefono_residencial" class="form-label">Teléfono Residencial</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_telefono_residencial" value="{{ $letter->representante_legal_telefono_residencial }}">
                        <input type="checkbox" class="check-style" id="representante_legal_telefono_residencial_checkbox" name="representante_legal_telefono_residencial_checkbox" {{ $letter->representante_legal_telefono_residencial_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono Móvil -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_telefono_movil" class="form-label">Teléfono Móvil</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_telefono_movil" value="{{ $letter->representante_legal_telefono_movil }}">
                        <input type="checkbox" class="check-style" id="representante_legal_telefono_movil_checkbox" name="representante_legal_telefono_movil_checkbox" {{ $letter->representante_legal_telefono_movil_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Correo Electrónico -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_correo_electronico" class="form-label">Correo Electrónico</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_correo_electronico" value="{{ $letter->representante_legal_correo_electronico }}">
                        <input type="checkbox" class="check-style" id="representante_legal_correo_electronico_checkbox" name="representante_legal_correo_electronico_checkbox" {{ $letter->representante_legal_correo_electronico_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
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
                <!-- Registro de Información Tributario -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_registro_informacion_tributario" class="form-label">Registro de Información Tributario</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_registro_informacion_tributario" value="{{ $letter->empresa_beneficiaria_registro_informacion_tributario }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_registro_informacion_tributario_checkbox" name="empresa_beneficiaria_registro_informacion_tributario_checkbox" {{ $letter->empresa_beneficiaria_registro_informacion_tributario_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Nombre de la Empresa -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_nombre_empresa" class="form-label">Nombre de la Empresa</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_nombre_empresa" value="{{ $letter->empresa_beneficiaria_nombre_empresa }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_nombre_empresa_checkbox" name="empresa_beneficiaria_nombre_empresa_checkbox" {{ $letter->empresa_beneficiaria_nombre_empresa_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Dirección -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_direccion" class="form-label">Dirección</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_direccion" value="{{ $letter->empresa_beneficiaria_direccion }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_direccion_checkbox" name="empresa_beneficiaria_direccion_checkbox" {{ $letter->empresa_beneficiaria_direccion_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Ciudad -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_ciudad" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_ciudad" value="{{ $letter->empresa_beneficiaria_ciudad }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_ciudad_checkbox" name="empresa_beneficiaria_ciudad_checkbox" {{ $letter->empresa_beneficiaria_ciudad_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- País -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_pais" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_pais" value="{{ $letter->empresa_beneficiaria_pais }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_pais_checkbox" name="empresa_beneficiaria_pais_checkbox" {{ $letter->empresa_beneficiaria_pais_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Código Postal -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_codigo_postal" class="form-label">Código Postal</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_codigo_postal" value="{{ $letter->empresa_beneficiaria_codigo_postal }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_codigo_postal_checkbox" name="empresa_beneficiaria_codigo_postal_checkbox" {{ $letter->empresa_beneficiaria_codigo_postal_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono de la Empresa -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_telefono_empresa" class="form-label">Teléfono de la Empresa</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_telefono_empresa" value="{{ $letter->empresa_beneficiaria_telefono_empresa }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_telefono_empresa_checkbox" name="empresa_beneficiaria_telefono_empresa_checkbox" {{ $letter->empresa_beneficiaria_telefono_empresa_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Correo Electrónico -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_correo_electronico" class="form-label">Correo Electrónico</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_correo_electronico" value="{{ $letter->empresa_beneficiaria_correo_electronico }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_correo_electronico_checkbox" name="empresa_beneficiaria_correo_electronico_checkbox" {{ $letter->empresa_beneficiaria_correo_electronico_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Fecha de Constitución -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_fecha_constitucion" class="form-label">Fecha de Constitución</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="date" name="empresa_beneficiaria_fecha_constitucion" value="{{ $letter->empresa_beneficiaria_fecha_constitucion }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_fecha_constitucion_checkbox" name="empresa_beneficiaria_fecha_constitucion_checkbox" {{ $letter->empresa_beneficiaria_fecha_constitucion_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Rama que explota -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_rama_explota" class="form-label">Rama que explota</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_rama_explota" value="{{ $letter->empresa_beneficiaria_rama_explota }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_rama_explota_checkbox" name="empresa_beneficiaria_rama_explota_checkbox" {{ $letter->empresa_beneficiaria_rama_explota_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Número de Billetera RIC -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_numero_billetera_ric" class="form-label">Número de Billetera RIC</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_numero_billetera_ric" value="{{ $letter->empresa_beneficiaria_numero_billetera_ric }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_numero_billetera_ric_checkbox" name="empresa_beneficiaria_numero_billetera_ric_checkbox" {{ $letter->empresa_beneficiaria_numero_billetera_ric_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Página Web -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_pagina_web" class="form-label">Página Web</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_pagina_web" value="{{ $letter->empresa_beneficiaria_pagina_web }}">
                        <input type="checkbox" class="check-style" id="empresa_beneficiaria_pagina_web_checkbox" name="empresa_beneficiaria_pagina_web_checkbox" {{ $letter->empresa_beneficiaria_pagina_web_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
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
                <!-- Documento de Identificación -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_documento_identificacion2" class="form-label">Documento de Identificación</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_documento_identificacion2" value="{{ $letter->representante_legal_documento_identificacion2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_documento_identificacion2_checkbox" name="representante_legal_documento_identificacion2_checkbox" {{ $letter->representante_legal_documento_identificacion2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 1er. Nombre -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_primer_nombre2" class="form-label">1er. Nombre</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_primer_nombre2" value="{{ $letter->representante_legal_primer_nombre2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_primer_nombre2_checkbox" name="representante_legal_primer_nombre2_checkbox" {{ $letter->representante_legal_primer_nombre2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 2do. Nombre -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_segundo_nombre2" class="form-label">2do. Nombre</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_segundo_nombre2" value="{{ $letter->representante_legal_segundo_nombre2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_segundo_nombre2_checkbox" name="representante_legal_segundo_nombre2_checkbox" {{ $letter->representante_legal_segundo_nombre2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 1er. Apellido -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_primer_apellido2" class="form-label">1er. Apellido</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_primer_apellido2" value="{{ $letter->representante_legal_primer_apellido2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_primer_apellido2_checkbox" name="representante_legal_primer_apellido2_checkbox" {{ $letter->representante_legal_primer_apellido2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 2do. Apellido -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_segundo_apellido2" class="form-label">2do. Apellido</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_segundo_apellido2" value="{{ $letter->representante_legal_segundo_apellido2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_segundo_apellido2_checkbox" name="representante_legal_segundo_apellido2_checkbox" {{ $letter->representante_legal_segundo_apellido2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Estado Civil -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_estado_civil2" class="form-label">Estado Civil</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_estado_civil2" value="{{ $letter->representante_legal_estado_civil2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_estado_civil2_checkbox" name="representante_legal_estado_civil2_checkbox" {{ $letter->representante_legal_estado_civil2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Fecha de Nacimiento -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_fecha_nacimiento2" class="form-label">Fecha de Nacimiento</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_fecha_nacimiento2" value="{{ $letter->representante_legal_fecha_nacimiento2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_fecha_nacimiento2_checkbox" name="representante_legal_fecha_nacimiento2_checkbox" {{ $letter->representante_legal_fecha_nacimiento2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Dirección de Residencia -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_direccion_residencia2" class="form-label">Dirección de Residencia</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_direccion_residencia2" value="{{ $letter->representante_legal_direccion_residencia2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_direccion_residencia2_checkbox" name="representante_legal_direccion_residencia2_checkbox" {{ $letter->representante_legal_direccion_residencia2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Ciudad -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_ciudad2" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_ciudad2" value="{{ $letter->representante_legal_ciudad2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_ciudad2_checkbox" name="representante_legal_ciudad2_checkbox" {{ $letter->representante_legal_ciudad2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- País -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_pais2" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_pais2" value="{{ $letter->representante_legal_pais2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_pais2_checkbox" name="representante_legal_pais2_checkbox" {{ $letter->representante_legal_pais2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Código Postal -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_codigo_postal2" class="form-label">Código Postal</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_codigo_postal2" value="{{ $letter->representante_legal_codigo_postal2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_codigo_postal2_checkbox" name="representante_legal_codigo_postal2_checkbox" {{ $letter->representante_legal_codigo_postal2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono Residencial -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_telefono_residencial2" class="form-label">Teléfono Residencial</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_telefono_residencial2" value="{{ $letter->representante_legal_telefono_residencial2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_telefono_residencial2_checkbox" name="representante_legal_telefono_residencial2_checkbox" {{ $letter->representante_legal_telefono_residencial2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono Móvil -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_telefono_movil2" class="form-label">Teléfono Móvil</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_telefono_movil2" value="{{ $letter->representante_legal_telefono_movil2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_telefono_movil2_checkbox" name="representante_legal_telefono_movil2_checkbox" {{ $letter->representante_legal_telefono_movil2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Correo Electrónico -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_correo_electronico2" class="form-label">Correo Electrónico</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_correo_electronico2" value="{{ $letter->representante_legal_correo_electronico2 }}">
                        <input type="checkbox" class="check-style" id="representante_legal_correo_electronico2_checkbox" name="representante_legal_correo_electronico2_checkbox" {{ $letter->representante_legal_correo_electronico2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
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

                <!-- Red social N° 1 -->
                <div class="col-12 col-sm-3">
                    <label for="red_social_1" class="form-label">Red social N° 1</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="red_social_1" value="{{ $letter->red_social_1 }}">
                        <input type="checkbox" class="check-style" id="red_social_1_checkbox" name="red_social_1_checkbox" {{ $letter->red_social_1_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Red social N° 2 -->
                <div class="col-12 col-sm-3">
                    <label for="red_social_2" class="form-label">Red social N° 2</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="red_social_2" value="{{ $letter->red_social_2 }}">
                        <input type="checkbox" class="check-style" id="red_social_2_checkbox" name="red_social_2_checkbox" {{ $letter->red_social_2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Red social N° 3 -->
                <div class="col-12 col-sm-3">
                    <label for="red_social_3" class="form-label">Red social N° 3</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="red_social_3" value="{{ $letter->red_social_3 }}">
                        <input type="checkbox" class="check-style" id="red_social_3_checkbox" name="red_social_3_checkbox" {{ $letter->red_social_3_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Red social N° 4 -->
                <div class="col-12 col-sm-3">
                    <label for="red_social_4" class="form-label">Red social N° 4</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="red_social_4" value="{{ $letter->red_social_4 }}">
                        <input type="checkbox" class="check-style" id="red_social_4_checkbox" name="red_social_4_checkbox" {{ $letter->red_social_4_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
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

                <!-- Entidad Bancaria 1 -->
                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_nombre" class="form-label">Nombre de la Entidad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_nombre" value="{{ $letter->entidad_bancaria_1_nombre }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_1_nombre_checkbox" name="entidad_bancaria_1_nombre_checkbox" {{ $letter->entidad_bancaria_1_nombre_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_pais" class="form-label">País de Ubicación</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_pais" value="{{ $letter->entidad_bancaria_1_pais }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_1_pais_checkbox" name="entidad_bancaria_1_pais_checkbox" {{ $letter->entidad_bancaria_1_pais_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_telefono" class="form-label">Teléfono</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_telefono" value="{{ $letter->entidad_bancaria_1_telefono }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_1_telefono_checkbox" name="entidad_bancaria_1_telefono_checkbox" {{ $letter->entidad_bancaria_1_telefono_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_persona_contacto" class="form-label">Persona de Contacto</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_persona_contacto" value="{{ $letter->entidad_bancaria_1_persona_contacto }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_1_persona_contacto_checkbox" name="entidad_bancaria_1_persona_contacto_checkbox" {{ $letter->entidad_bancaria_1_persona_contacto_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Entidad Bancaria 2 -->
                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_nombre_2" class="form-label">Nombre de la Entidad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_nombre_2" value="{{ $letter->entidad_bancaria_1_nombre_2 }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_1_nombre_2_checkbox" name="entidad_bancaria_1_nombre_2_checkbox" {{ $letter->entidad_bancaria_1_nombre_2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_pais_2" class="form-label">País de Ubicación</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_pais_2" value="{{ $letter->entidad_bancaria_1_pais_2 }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_1_pais_2_checkbox" name="entidad_bancaria_1_pais_2_checkbox" {{ $letter->entidad_bancaria_1_pais_2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_telefono_2" class="form-label">Teléfono</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_telefono_2" value="{{ $letter->entidad_bancaria_1_telefono_2 }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_1_telefono_2_checkbox" name="entidad_bancaria_1_telefono_2_checkbox" {{ $letter->entidad_bancaria_1_telefono_2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_persona_contacto_2" class="form-label">Persona de Contacto</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_persona_contacto_2" value="{{ $letter->entidad_bancaria_1_persona_contacto_2 }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_1_persona_contacto_2_checkbox" name="entidad_bancaria_1_persona_contacto_2_checkbox" {{ $letter->entidad_bancaria_1_persona_contacto_2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
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

                <!-- Entidad Bancaria 2 -->
                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_nombre" class="form-label">Nombre de la Empresa</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_nombre" value="{{ $letter->entidad_bancaria_2_nombre }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_2_nombre_checkbox" name="entidad_bancaria_2_nombre_checkbox" {{ $letter->entidad_bancaria_2_nombre_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_pais" class="form-label">País de Ubicación</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_pais" value="{{ $letter->entidad_bancaria_2_pais }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_2_pais_checkbox" name="entidad_bancaria_2_pais_checkbox" {{ $letter->entidad_bancaria_2_pais_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_telefono" class="form-label">Teléfono</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_telefono" value="{{ $letter->entidad_bancaria_2_telefono }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_2_telefono_checkbox" name="entidad_bancaria_2_telefono_checkbox" {{ $letter->entidad_bancaria_2_telefono_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_persona_contacto" class="form-label">Persona de Contacto</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_persona_contacto" value="{{ $letter->entidad_bancaria_2_persona_contacto }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_2_persona_contacto_checkbox" name="entidad_bancaria_2_persona_contacto_checkbox" {{ $letter->entidad_bancaria_2_persona_contacto_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Entidad Bancaria 2 - Segunda instancia -->
                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_nombre_2" class="form-label">Nombre de la Empresa</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_nombre_2" value="{{ $letter->entidad_bancaria_2_nombre_2 }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_2_nombre_2_checkbox" name="entidad_bancaria_2_nombre_2_checkbox" {{ $letter->entidad_bancaria_2_nombre_2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_pais_2" class="form-label">País de Ubicación</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_pais_2" value="{{ $letter->entidad_bancaria_2_pais_2 }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_2_pais_2_checkbox" name="entidad_bancaria_2_pais_2_checkbox" {{ $letter->entidad_bancaria_2_pais_2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_telefono_2" class="form-label">Teléfono</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_telefono_2" value="{{ $letter->entidad_bancaria_2_telefono_2 }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_2_telefono_2_checkbox" name="entidad_bancaria_2_telefono_2_checkbox" {{ $letter->entidad_bancaria_2_telefono_2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_persona_contacto_2" class="form-label">Persona de Contacto</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_persona_contacto_2" value="{{ $letter->entidad_bancaria_2_persona_contacto_2 }}">
                        <input type="checkbox" class="check-style" id="entidad_bancaria_2_persona_contacto_2_checkbox" name="entidad_bancaria_2_persona_contacto_2_checkbox" {{ $letter->entidad_bancaria_2_persona_contacto_2_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
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
                    <label for="condiciones_forma_credito_documentario" class="form-label">Forma de Crédito Documentario</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_forma_credito_documentario" value="{{ $letter->condiciones_forma_credito_documentario }}">
                        <input type="checkbox" class="check-style" id="condiciones_forma_credito_documentario_checkbox" name="condiciones_forma_credito_documentario_checkbox" {{ $letter->condiciones_forma_credito_documentario_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_moneda" class="form-label">Moneda</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_moneda" value="{{ $letter->condiciones_moneda }}">
                        <input type="checkbox" class="check-style" id="condiciones_moneda_checkbox" name="condiciones_moneda_checkbox" {{ $letter->condiciones_moneda_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_vigencia_dias" class="form-label">Vigencia en días</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_vigencia_dias" value="{{ $letter->condiciones_vigencia_dias }}">
                        <input type="checkbox" class="check-style" id="condiciones_vigencia_dias_checkbox" name="condiciones_vigencia_dias_checkbox" {{ $letter->condiciones_vigencia_dias_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_valor_numeros" class="form-label">Valor en Números</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_valor_numeros" value="{{ $letter->condiciones_valor_numeros }}">
                        <input type="checkbox" class="check-style" id="condiciones_valor_numeros_checkbox" name="condiciones_valor_numeros_checkbox" {{ $letter->condiciones_valor_numeros_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-9">
                    <label for="condiciones_valor_letras" class="form-label">Valor en Letras</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_valor_letras" value="{{ $letter->condiciones_valor_letras }}">
                        <input type="checkbox" class="check-style" id="condiciones_valor_letras_checkbox" name="condiciones_valor_letras_checkbox" {{ $letter->condiciones_valor_letras_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_tolerancia" class="form-label">Tolerancia</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_tolerancia" value="{{ $letter->condiciones_tolerancia }}">
                        <input type="checkbox" class="check-style" id="condiciones_tolerancia_checkbox" name="condiciones_tolerancia_checkbox" {{ $letter->condiciones_tolerancia_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="condiciones_despachos_parciales" class="form-label">Despachos Parciales</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_despachos_parciales" value="{{ $letter->condiciones_despachos_parciales }}">
                        <input type="checkbox" class="check-style" id="condiciones_despachos_parciales_checkbox" name="condiciones_despachos_parciales_checkbox" {{ $letter->condiciones_despachos_parciales_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_transbordos" class="form-label">Transbordos</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_transbordos" value="{{ $letter->condiciones_transbordos }}">
                        <input type="checkbox" class="check-style" id="condiciones_transbordos_checkbox" name="condiciones_transbordos_checkbox" {{ $letter->condiciones_transbordos_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_puerto_embarque" class="form-label">Puerto/Aeropuerto de embarque</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_puerto_embarque" value="{{ $letter->condiciones_puerto_embarque }}">
                        <input type="checkbox" class="check-style" id="condiciones_puerto_embarque_checkbox" name="condiciones_puerto_embarque_checkbox" {{ $letter->condiciones_puerto_embarque_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_ciudad_embarque" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_ciudad_embarque" value="{{ $letter->condiciones_ciudad_embarque }}">
                        <input type="checkbox" class="check-style" id="condiciones_ciudad_embarque_checkbox" name="condiciones_ciudad_embarque_checkbox" {{ $letter->condiciones_ciudad_embarque_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_pais_embarque" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_pais_embarque" value="{{ $letter->condiciones_pais_embarque }}">
                        <input type="checkbox" class="check-style" id="condiciones_pais_embarque_checkbox" name="condiciones_pais_embarque_checkbox" {{ $letter->condiciones_pais_embarque_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_puerto_destino" class="form-label">Puerto/Aeropuerto de destino</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_puerto_destino" value="{{ $letter->condiciones_puerto_destino }}">
                        <input type="checkbox" class="check-style" id="condiciones_puerto_destino_checkbox" name="condiciones_puerto_destino_checkbox" {{ $letter->condiciones_puerto_destino_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="condiciones_ciudad_destino" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_ciudad_destino" value="{{ $letter->condiciones_ciudad_destino }}">
                        <input type="checkbox" class="check-style" id="condiciones_ciudad_destino_checkbox" name="condiciones_ciudad_destino_checkbox" {{ $letter->condiciones_ciudad_destino_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_pais_destino" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_pais_destino" value="{{ $letter->condiciones_pais_destino }}">
                        <input type="checkbox" class="check-style" id="condiciones_pais_destino_checkbox" name="condiciones_pais_destino_checkbox" {{ $letter->condiciones_pais_destino_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 text-center">
                    <label for="condiciones_avisada" class="form-label">Avisada</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_avisada" value="{{ $letter->condiciones_avisada }}">
                        <input type="checkbox" class="check-style" id="condiciones_avisada_checkbox" name="condiciones_avisada_checkbox" {{ $letter->condiciones_avisada_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 text-center">
                    <label for="condiciones_confirmada" class="form-label">Confirmada</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_confirmada" value="{{ $letter->condiciones_confirmada }}">
                        <input type="checkbox" class="check-style" id="condiciones_confirmada_checkbox" name="condiciones_confirmada_checkbox" {{ $letter->condiciones_confirmada_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_fecha_maxima_embarque" class="form-label">Fecha máxima de embarque</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="date" name="condiciones_fecha_maxima_embarque" value="{{ $letter->condiciones_fecha_maxima_embarque }}">
                        <input type="checkbox" class="check-style" id="condiciones_fecha_maxima_embarque_checkbox" name="condiciones_fecha_maxima_embarque_checkbox" {{ $letter->condiciones_fecha_maxima_embarque_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_forma_pago" class="form-label">Forma de Pago</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_forma_pago" value="{{ $letter->condiciones_forma_pago }}">
                        <input type="checkbox" class="check-style" id="condiciones_forma_pago_checkbox" name="condiciones_forma_pago_checkbox" {{ $letter->condiciones_forma_pago_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Octava etapa -->
                <div class="col-12 mt-2">
                    <h5>Si la forma de pago es diferente a la vista diligencie: </h5>
                </div>
                <div class="col-12 col-sm-6">
                    <label for="condiciones_2_aceptacion" class="form-label">Aceptación</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_2_aceptacion" value="{{ $letter->condiciones_2_aceptacion }}">
                        <input type="checkbox" class="check-style" id="condiciones_2_aceptacion_checkbox" name="condiciones_2_aceptacion_checkbox" {{ $letter->condiciones_2_aceptacion_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_2_dias_aceptacion" class="form-label">Días</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_2_dias_aceptacion" value="{{ $letter->condiciones_2_dias_aceptacion }}">
                        <input type="checkbox" class="check-style" id="condiciones_2_dias_aceptacion_checkbox" name="condiciones_2_dias_aceptacion_checkbox" {{ $letter->condiciones_2_dias_aceptacion_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 mt-2">
                    <h5>Mixto: </h5>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_2_vista_porcentaje" class="form-label">Vista %</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_2_vista_porcentaje" value="{{ $letter->condiciones_2_vista_porcentaje }}">
                        <input type="checkbox" class="check-style" id="condiciones_2_vista_porcentaje_checkbox" name="condiciones_2_vista_porcentaje_checkbox" {{ $letter->condiciones_2_vista_porcentaje_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_2_aceptacion_porcentaje" class="form-label">Aceptación %</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_2_aceptacion_porcentaje" value="{{ $letter->condiciones_2_aceptacion_porcentaje }}">
                        <input type="checkbox" class="check-style" id="condiciones_2_aceptacion_porcentaje_checkbox" name="condiciones_2_aceptacion_porcentaje_checkbox" {{ $letter->condiciones_2_aceptacion_porcentaje_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_2_dias" class="form-label">Días</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_2_dias" value="{{ $letter->condiciones_2_dias }}">
                        <input type="checkbox" class="check-style" id="condiciones_2_dias_checkbox" name="condiciones_2_dias_checkbox" {{ $letter->condiciones_2_dias_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_2_a_partir_de" class="form-label">A partir de:</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_2_a_partir_de" value="{{ $letter->condiciones_2_a_partir_de }}">
                        <input type="checkbox" class="check-style" id="condiciones_2_a_partir_de_checkbox" name="condiciones_2_a_partir_de_checkbox" {{ $letter->condiciones_2_a_partir_de_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Novena etapa -->
                <div class="col-12 mt-2">
                    <h5>En caso de requerirse documento de transporte combinado </h5>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_3_lugar_recepcion" class="form-label">Lugar de Recepción</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_3_lugar_recepcion" value="{{ $letter->condiciones_3_lugar_recepcion }}">
                        <input type="checkbox" class="check-style" id="condiciones_3_lugar_recepcion_checkbox" name="condiciones_3_lugar_recepcion_checkbox" {{ $letter->condiciones_3_lugar_recepcion_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_3_lugar_destino" class="form-label">Lugar final de destino:</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_3_lugar_destino" value="{{ $letter->condiciones_3_lugar_destino }}">
                        <input type="checkbox" class="check-style" id="condiciones_3_lugar_destino_checkbox" name="condiciones_3_lugar_destino_checkbox" {{ $letter->condiciones_3_lugar_destino_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12">
                    <label for="condiciones_3_termino_negociacion" class="form-label">Término de negociación:</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_3_termino_negociacion" value="{{ $letter->condiciones_3_termino_negociacion }}">
                        <input type="checkbox" class="check-style" id="condiciones_3_termino_negociacion_checkbox" name="condiciones_3_termino_negociacion_checkbox" {{ $letter->condiciones_3_termino_negociacion_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>


                <!-- Decima etapa -->
                <div class="col-12 mt-2">
                    <h5>Comisiones y gastos fuera del pais del ordenante por cuenta del:</h5>
                </div>

                <div class="col-6">
                    <label for="condiciones_3_comisiones_beneficiario" class="form-label">Beneficiario</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_3_comisiones_beneficiario" value="{{ $letter->condiciones_3_comisiones_beneficiario }}">
                        <input type="checkbox" class="check-style" id="condiciones_3_comisiones_beneficiario_checkbox" name="condiciones_3_comisiones_beneficiario_checkbox" {{ $letter->condiciones_3_comisiones_beneficiario_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-6">
                    <label for="condiciones_3_comisiones_ordenante" class="form-label">Ordenante</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_3_comisiones_ordenante" value="{{ $letter->condiciones_3_comisiones_ordenante }}">
                        <input type="checkbox" class="check-style" id="condiciones_3_comisiones_ordenante_checkbox" name="condiciones_3_comisiones_ordenante_checkbox" {{ $letter->condiciones_3_comisiones_ordenante_checkbox ? 'checked' : '' }}>
                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>
                 <!-- Onceaba etapa -->
                 <div class="col-12 mt-2">
                    <h5>Descripción de la mercancia </h5>
                </div>

                <div class="col-12">
                    <label for="condiciones_3_descripcion_mercancia" class="form-label">Describir brevemente la mercancía e indicar cantidades:</label>
                    <textarea disabled class="form-control mr-2" name="condiciones_3_descripcion_mercancia">{{ $letter->condiciones_3_descripcion_mercancia }}</textarea>

                    <div class="d-flex align-items-center mt-2">
                        <input type="checkbox" class="check-style" id="condiciones_3_descripcion_mercancia_checkbox" name="condiciones_3_descripcion_mercancia_checkbox">
                    </div>
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
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_maritimo_limpo_bordo }}" type="text" class="form-control" name="documento_transporte_maritimo_limpo_bordo">
                        <input type="checkbox" class="check-style" id="maritimo_limpo_bordo_checkbox" name="maritimo_limpo_bordo_checkbox">
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Aéreo</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_aereo }}" type="text" class="form-control" name="documento_transporte_aereo">
                        <input type="checkbox" class="check-style" id="aereo_checkbox" name="aereo_checkbox">
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Terrestre</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_terrestre }}" type="text" class="form-control" name="documento_transporte_terrestre">
                        <input type="checkbox" class="check-style" id="terrestre_checkbox" name="terrestre_checkbox">
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Combinado</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_combinado }}" type="text" class="form-control" name="documento_transporte_combinado">
                        <input type="checkbox" class="check-style" id="combinado_checkbox" name="combinado_checkbox">
                    </div>
                </div>

                <div class="col-12">
                    <label for="">Consignado a: </label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_consignado_a }}" type="text" class="form-control" name="documento_transporte_consignado_a">
                        <input type="checkbox" class="check-style" id="consignado_a_checkbox" name="consignado_a_checkbox">
                    </div>
                </div>

                <div class="col-12">
                    <label for="">Notificado a: </label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_notificado_a }}" type="text" class="form-control" name="documento_transporte_notificado_a">
                        <input type="checkbox" class="check-style" id="notificado_a_checkbox" name="notificado_a_checkbox">
                    </div>
                </div>
                <div class="col-12">
                    <label for="">Lista de Embarque</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_lista_embarque }}" type="text" class="form-control" name="documento_transporte_lista_embarque">
                        <input type="checkbox" class="check-style" id="lista_embarque_checkbox" name="lista_embarque_checkbox">
                    </div>
                </div>

                <div class="col-12">
                    <label for="">Certificado de Origen</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_certificado_origen }}" type="text" class="form-control" name="documento_transporte_certificado_origen">
                        <input type="checkbox" class="check-style" id="certificado_origen_checkbox" name="certificado_origen_checkbox">
                    </div>
                </div>

                <div class="col-12">
                    <label for="">Carta informe embarque</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_carta_informe_embarque }}" type="text" class="form-control" name="documento_transporte_carta_informe_embarque">
                        <input type="checkbox" class="check-style" id="carta_informe_embarque_checkbox" name="carta_informe_embarque_checkbox">
                    </div>
                </div>

                <div class="col-12">
                    <label for="">Carta envío documentos</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_carta_envio_documentos }}" type="text" class="form-control" name="documento_transporte_carta_envio_documentos">
                        <input type="checkbox" class="check-style" id="carta_envio_documentos_checkbox" name="carta_envio_documentos_checkbox">
                    </div>
                </div>
                <div class="col-12">
                    <label for="">Otros documentos</label>
                    @if($letter->documento_transporte_otros_documentos_1)
                        <div class="d-flex align-items-center">
                            <a href="{{ asset($letter->documento_transporte_otros_documentos_1) }}" target="_blank" class="mr-2">Ver Archivo</a>
                            <input class="check-style" type="checkbox" name="documento_transporte_otros_documentos_1">
                        </div>
                    @else
                        <p>No hay archivo adjunto</p>
                    @endif
                </div>

                <div class="col-12 mt-3">
                    <label for=""><strong>Otras Condiciones adicionales</strong> </label>
                    <textarea disabled class="form-control mr-2" cols="30" rows="10" name="documento_transporte_otras_condiciones_adicionales">{{ $letter->documento_transporte_otras_condiciones_adicionales }}</textarea>

                    <div class="d-flex align-items-center mt-2">
                        <input type="checkbox" class="check-style" id="documento_transporte_otras_condiciones_adicionales" name="documento_transporte_otras_condiciones_adicionales">
                    </div>
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
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->agente_auricoin_nombres_apellidos }}" type="text" class="form-control" name="agente_auricoin_nombres_apellidos">
                        <input type="checkbox" class="check-style" id="agente_nombres_apellidos_checkbox" name="agente_nombres_apellidos_checkbox">
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Código</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->agente_auricoin_codigo }}" type="text" class="form-control" name="agente_auricoin_codigo">
                        <input type="checkbox" class="check-style" id="agente_codigo_checkbox" name="agente_codigo_checkbox">
                    </div>
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
                    @if($letter->empresa_acta_constitutiva_modificaciones)
                    <div class="d-flex align-items-center">
                        <a href="{{ asset($letter->empresa_acta_constitutiva_modificaciones) }}" target="_blank" class="mr-2">Ver Archivo</a>
                        <input class="check-style" type="checkbox" name="empresa_acta_constitutiva_modificaciones_checkbox" >
                    </div>

                    @else
                        <p>No hay archivo adjunto</p>
                    @endif
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Registro de Información Tributario</label>
                    @if($letter->empresa_registro_informacion_tributario)
                    <div class="d-flex align-items-center">
                        <a href="{{ asset($letter->empresa_registro_informacion_tributario) }}" target="_blank" class="mr-2">Ver Archivo</a>
                        <input class="check-style" type="checkbox" name="empresa_registro_informacion_tributario_checkbox">
                    </div>

                    @else
                        <p>No hay archivo adjunto</p>
                    @endif
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Factura Pro-forma</label>
                    @if($letter->empresa_factura_proforma)
                        <div class="d-flex align-items-center">
                            <a href="{{ asset($letter->empresa_factura_proforma) }}" target="_blank" class="mr-2">Ver Archivo</a>
                            <input class="check-style" type="checkbox" name="empresa_factura_proforma_checkbox">
                        </div>
                    @else
                        <p>No hay archivo adjunto</p>
                    @endif
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Contrato de Compra Venta</label>
                    @if($letter->empresa_contrato_compra_venta)
                        <div class="d-flex align-items-center">
                            <a href="{{ asset($letter->empresa_contrato_compra_venta) }}" target="_blank" class="mr-2">Ver Archivo</a>
                            <input class="check-style" type="checkbox" name="empresa_contrato_compra_venta_checkbox">
                        </div>
                    @else
                        <p>No hay archivo adjunto</p>
                    @endif
                </div>

                <div class="col-12 mt-2">
                    <h5>Representante Legal  </h5>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Documento de Identificación Personal</label>
                    @if($letter->empresa_documento_identificacion_personal)
                        <div class="d-flex align-items-center">

                            <a href="{{ asset($letter->empresa_documento_identificacion_personal) }}" target="_blank" class="mr-2">Ver Archivo</a>
                            <input class="check-style" type="checkbox" name="empresa_documento_identificacion_personal_checkbox">
                        </div>
                    @else
                        <p>No hay archivo adjunto</p>
                    @endif
                </div>
                @if ($letter->status == 'pendiente')
                    <div class="col-12">
                        <button class="bg-orange-gradient px-6 py-1 font-black float-right" type="button" id="enviarButton">
                            APROBAR
                        </button>
                    </div>
                @endif

                <div id="myDiv" data-letter-id="{{ $letter->id }}"></div>
            </div>
        </form>

    </div>

    <div>
        <div class="bg-orange-gradient h-4"></div>
        <p class="text-center">© 2023 Banco Exchange Auricoin</p>
        <div class="bg-orange-gradient h-4"></div>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#enviarButton").on("click", function() {
                // Buscar todos los checkboxes dentro del formulario
                var checkboxes = $("input[type='checkbox']");

                // Verificar si todos los checkboxes están marcados
                var todosMarcados = checkboxes.length === checkboxes.filter(":checked").length;
                var letterId = $("#myDiv").data('letter-id');
                if (todosMarcados) {
                    $.ajax({
                        url: "/update/"+letterId,  // Ajusta la URL según tu estructura de rutas
                        method: "GET",
                        success: function() {
                            window.location.href = "/show";
                        },
                        error: function() {
                            alert("Hubo un error al actualizar el estado.");
                        }
                    });
                } else {
                    alert("FALTAN OPCIONES POR VALIDAR");
                }



            });
        });
    </script>
</body>
</html>
<script>
</script>
