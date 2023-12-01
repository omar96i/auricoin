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
                <a href="{{ route('showall-2') }}" class="px-2">Lista de carta de creditos</a>
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

                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="">Nombre de la Empresa</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" class="form-control mr-2" name="ordenante_nombre_empresa" value="{{ $letter->ordenante_nombre_empresa }}" disabled>

                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="ordenante_direccion" class="form-label">Dirección</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_direccion" value="{{ $letter->ordenante_direccion }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>
                <!-- Ciudad -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_ciudad" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_ciudad" value="{{ $letter->ordenante_ciudad }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- País -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_pais" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_pais" value="{{ $letter->ordenante_pais }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Código Postal -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_codigo_postal" class="form-label">Código Postal</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_codigo_postal" value="{{ $letter->ordenante_codigo_postal }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono de la Empresa -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_telefono_empresa" class="form-label">Teléfono de la Empresa</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_telefono_empresa" value="{{ $letter->ordenante_telefono_empresa }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Correo Electrónico -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_correo_electronico" class="form-label">Correo Electrónico</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_correo_electronico" value="{{ $letter->ordenante_correo_electronico }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Fecha de Constitución -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_fecha_constitucion" class="form-label">Fecha de Constitución</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="date" name="ordenante_fecha_constitucion" value="{{ $letter->ordenante_fecha_constitucion }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Rama que explota -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_rama_explota" class="form-label">Rama que explota</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_rama_explota" value="{{ $letter->ordenante_rama_explota }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Número de Billetera RIC -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_numero_billetera_ric" class="form-label">Número de Billetera RIC</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_numero_billetera_ric" value="{{ $letter->ordenante_numero_billetera_ric }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Página Web -->
                <div class="col-12 col-sm-3">
                    <label for="ordenante_pagina_web" class="form-label">Página Web</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="ordenante_pagina_web" value="{{ $letter->ordenante_pagina_web }}">

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

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 1er. Nombre -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_primer_nombre" class="form-label">1er. Nombre</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_primer_nombre" value="{{ $letter->representante_legal_primer_nombre }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 2do. Nombre -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_segundo_nombre" class="form-label">2do. Nombre</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_segundo_nombre" value="{{ $letter->representante_legal_segundo_nombre }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 1er. Apellido -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_primer_apellido" class="form-label">1er. Apellido</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_primer_apellido" value="{{ $letter->representante_legal_primer_apellido }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 2do. Apellido -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_segundo_apellido" class="form-label">2do. Apellido</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_segundo_apellido" value="{{ $letter->representante_legal_segundo_apellido }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Estado Civil -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_estado_civil" class="form-label">Estado Civil</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_estado_civil" value="{{ $letter->representante_legal_estado_civil }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Fecha de Nacimiento -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="date" name="representante_legal_fecha_nacimiento" value="{{ $letter->representante_legal_fecha_nacimiento }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Dirección de Residencia -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_direccion_residencia" class="form-label">Dirección de Residencia</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_direccion_residencia" value="{{ $letter->representante_legal_direccion_residencia }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Ciudad -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_ciudad" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_ciudad" value="{{ $letter->representante_legal_ciudad }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- País -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_pais" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_pais" value="{{ $letter->representante_legal_pais }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Código Postal -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_codigo_postal" class="form-label">Código Postal</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_codigo_postal" value="{{ $letter->representante_legal_codigo_postal }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono Residencial -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_telefono_residencial" class="form-label">Teléfono Residencial</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_telefono_residencial" value="{{ $letter->representante_legal_telefono_residencial }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono Móvil -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_telefono_movil" class="form-label">Teléfono Móvil</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_telefono_movil" value="{{ $letter->representante_legal_telefono_movil }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Correo Electrónico -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_correo_electronico" class="form-label">Correo Electrónico</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_correo_electronico" value="{{ $letter->representante_legal_correo_electronico }}">

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

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Nombre de la Empresa -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_nombre_empresa" class="form-label">Nombre de la Empresa</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_nombre_empresa" value="{{ $letter->empresa_beneficiaria_nombre_empresa }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Dirección -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_direccion" class="form-label">Dirección</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_direccion" value="{{ $letter->empresa_beneficiaria_direccion }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Ciudad -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_ciudad" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_ciudad" value="{{ $letter->empresa_beneficiaria_ciudad }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- País -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_pais" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_pais" value="{{ $letter->empresa_beneficiaria_pais }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Código Postal -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_codigo_postal" class="form-label">Código Postal</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_codigo_postal" value="{{ $letter->empresa_beneficiaria_codigo_postal }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono de la Empresa -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_telefono_empresa" class="form-label">Teléfono de la Empresa</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_telefono_empresa" value="{{ $letter->empresa_beneficiaria_telefono_empresa }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Correo Electrónico -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_correo_electronico" class="form-label">Correo Electrónico</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_correo_electronico" value="{{ $letter->empresa_beneficiaria_correo_electronico }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Fecha de Constitución -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_fecha_constitucion" class="form-label">Fecha de Constitución</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="date" name="empresa_beneficiaria_fecha_constitucion" value="{{ $letter->empresa_beneficiaria_fecha_constitucion }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Rama que explota -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_rama_explota" class="form-label">Rama que explota</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_rama_explota" value="{{ $letter->empresa_beneficiaria_rama_explota }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Número de Billetera RIC -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_numero_billetera_ric" class="form-label">Número de Billetera RIC</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_numero_billetera_ric" value="{{ $letter->empresa_beneficiaria_numero_billetera_ric }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Página Web -->
                <div class="col-12 col-sm-3">
                    <label for="empresa_beneficiaria_pagina_web" class="form-label">Página Web</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="empresa_beneficiaria_pagina_web" value="{{ $letter->empresa_beneficiaria_pagina_web }}">

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

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 1er. Nombre -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_primer_nombre2" class="form-label">1er. Nombre</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_primer_nombre2" value="{{ $letter->representante_legal_primer_nombre2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 2do. Nombre -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_segundo_nombre2" class="form-label">2do. Nombre</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_segundo_nombre2" value="{{ $letter->representante_legal_segundo_nombre2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 1er. Apellido -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_primer_apellido2" class="form-label">1er. Apellido</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_primer_apellido2" value="{{ $letter->representante_legal_primer_apellido2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- 2do. Apellido -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_segundo_apellido2" class="form-label">2do. Apellido</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_segundo_apellido2" value="{{ $letter->representante_legal_segundo_apellido2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Estado Civil -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_estado_civil2" class="form-label">Estado Civil</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_estado_civil2" value="{{ $letter->representante_legal_estado_civil2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Fecha de Nacimiento -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_fecha_nacimiento2" class="form-label">Fecha de Nacimiento</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_fecha_nacimiento2" value="{{ $letter->representante_legal_fecha_nacimiento2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Dirección de Residencia -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_direccion_residencia2" class="form-label">Dirección de Residencia</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_direccion_residencia2" value="{{ $letter->representante_legal_direccion_residencia2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Ciudad -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_ciudad2" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_ciudad2" value="{{ $letter->representante_legal_ciudad2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- País -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_pais2" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_pais2" value="{{ $letter->representante_legal_pais2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Código Postal -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_codigo_postal2" class="form-label">Código Postal</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_codigo_postal2" value="{{ $letter->representante_legal_codigo_postal2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono Residencial -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_telefono_residencial2" class="form-label">Teléfono Residencial</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_telefono_residencial2" value="{{ $letter->representante_legal_telefono_residencial2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Teléfono Móvil -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_telefono_movil2" class="form-label">Teléfono Móvil</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_telefono_movil2" value="{{ $letter->representante_legal_telefono_movil2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Correo Electrónico -->
                <div class="col-12 col-sm-3">
                    <label for="representante_legal_correo_electronico2" class="form-label">Correo Electrónico</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="representante_legal_correo_electronico2" value="{{ $letter->representante_legal_correo_electronico2 }}">

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

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Red social N° 2 -->
                <div class="col-12 col-sm-3">
                    <label for="red_social_2" class="form-label">Red social N° 2</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="red_social_2" value="{{ $letter->red_social_2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Red social N° 3 -->
                <div class="col-12 col-sm-3">
                    <label for="red_social_3" class="form-label">Red social N° 3</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="red_social_3" value="{{ $letter->red_social_3 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Red social N° 4 -->
                <div class="col-12 col-sm-3">
                    <label for="red_social_4" class="form-label">Red social N° 4</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="red_social_4" value="{{ $letter->red_social_4 }}">

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

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_pais" class="form-label">País de Ubicación</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_pais" value="{{ $letter->entidad_bancaria_1_pais }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_telefono" class="form-label">Teléfono</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_telefono" value="{{ $letter->entidad_bancaria_1_telefono }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_persona_contacto" class="form-label">Persona de Contacto</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_persona_contacto" value="{{ $letter->entidad_bancaria_1_persona_contacto }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Entidad Bancaria 2 -->
                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_nombre_2" class="form-label">Nombre de la Entidad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_nombre_2" value="{{ $letter->entidad_bancaria_1_nombre_2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_pais_2" class="form-label">País de Ubicación</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_pais_2" value="{{ $letter->entidad_bancaria_1_pais_2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_telefono_2" class="form-label">Teléfono</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_telefono_2" value="{{ $letter->entidad_bancaria_1_telefono_2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_1_persona_contacto_2" class="form-label">Persona de Contacto</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_1_persona_contacto_2" value="{{ $letter->entidad_bancaria_1_persona_contacto_2 }}">

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

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_pais" class="form-label">País de Ubicación</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_pais" value="{{ $letter->entidad_bancaria_2_pais }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_telefono" class="form-label">Teléfono</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_telefono" value="{{ $letter->entidad_bancaria_2_telefono }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_persona_contacto" class="form-label">Persona de Contacto</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_persona_contacto" value="{{ $letter->entidad_bancaria_2_persona_contacto }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <!-- Entidad Bancaria 2 - Segunda instancia -->
                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_nombre_2" class="form-label">Nombre de la Empresa</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_nombre_2" value="{{ $letter->entidad_bancaria_2_nombre_2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_pais_2" class="form-label">País de Ubicación</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_pais_2" value="{{ $letter->entidad_bancaria_2_pais_2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_telefono_2" class="form-label">Teléfono</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_telefono_2" value="{{ $letter->entidad_bancaria_2_telefono_2 }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="entidad_bancaria_2_persona_contacto_2" class="form-label">Persona de Contacto</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="entidad_bancaria_2_persona_contacto_2" value="{{ $letter->entidad_bancaria_2_persona_contacto_2 }}">

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

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_moneda" class="form-label">Moneda</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_moneda" value="{{ $letter->condiciones_moneda }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_vigencia_dias" class="form-label">Vigencia en días</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_vigencia_dias" value="{{ $letter->condiciones_vigencia_dias }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_valor_numeros" class="form-label">Valor en Números</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_valor_numeros" value="{{ $letter->condiciones_valor_numeros }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-9">
                    <label for="condiciones_valor_letras" class="form-label">Valor en Letras</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_valor_letras" value="{{ $letter->condiciones_valor_letras }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_tolerancia" class="form-label">Tolerancia</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_tolerancia" value="{{ $letter->condiciones_tolerancia }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="condiciones_despachos_parciales" class="form-label">Despachos Parciales</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_despachos_parciales" value="{{ $letter->condiciones_despachos_parciales }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_transbordos" class="form-label">Transbordos</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_transbordos" value="{{ $letter->condiciones_transbordos }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_puerto_embarque" class="form-label">Puerto/Aeropuerto de embarque</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_puerto_embarque" value="{{ $letter->condiciones_puerto_embarque }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_ciudad_embarque" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_ciudad_embarque" value="{{ $letter->condiciones_ciudad_embarque }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_pais_embarque" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_pais_embarque" value="{{ $letter->condiciones_pais_embarque }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_puerto_destino" class="form-label">Puerto/Aeropuerto de destino</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_puerto_destino" value="{{ $letter->condiciones_puerto_destino }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <label for="condiciones_ciudad_destino" class="form-label">Ciudad</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_ciudad_destino" value="{{ $letter->condiciones_ciudad_destino }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_pais_destino" class="form-label">País</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_pais_destino" value="{{ $letter->condiciones_pais_destino }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 text-center">
                    <label for="condiciones_avisada" class="form-label">Avisada</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_avisada" value="{{ $letter->condiciones_avisada }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 text-center">
                    <label for="condiciones_confirmada" class="form-label">Confirmada</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_confirmada" value="{{ $letter->condiciones_confirmada }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_fecha_maxima_embarque" class="form-label">Fecha máxima de embarque</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="date" name="condiciones_fecha_maxima_embarque" value="{{ $letter->condiciones_fecha_maxima_embarque }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="condiciones_forma_pago" class="form-label">Forma de Pago</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_forma_pago" value="{{ $letter->condiciones_forma_pago }}">

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

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_2_dias_aceptacion" class="form-label">Días</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_2_dias_aceptacion" value="{{ $letter->condiciones_2_dias_aceptacion }}">

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

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_2_aceptacion_porcentaje" class="form-label">Aceptación %</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_2_aceptacion_porcentaje" value="{{ $letter->condiciones_2_aceptacion_porcentaje }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_2_dias" class="form-label">Días</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_2_dias" value="{{ $letter->condiciones_2_dias }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_2_a_partir_de" class="form-label">A partir de:</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_2_a_partir_de" value="{{ $letter->condiciones_2_a_partir_de }}">

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

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="condiciones_3_lugar_destino" class="form-label">Lugar final de destino:</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_3_lugar_destino" value="{{ $letter->condiciones_3_lugar_destino }}">

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-12">
                    <label for="condiciones_3_termino_negociacion" class="form-label">Término de negociación:</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_3_termino_negociacion" value="{{ $letter->condiciones_3_termino_negociacion }}">

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

                        <!-- Puedes agregar más elementos aquí si es necesario -->
                    </div>
                </div>

                <div class="col-6">
                    <label for="condiciones_3_comisiones_ordenante" class="form-label">Ordenante</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" type="text" name="condiciones_3_comisiones_ordenante" value="{{ $letter->condiciones_3_comisiones_ordenante }}">

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

                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Aéreo</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_aereo }}" type="text" class="form-control" name="documento_transporte_aereo">

                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Terrestre</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_terrestre }}" type="text" class="form-control" name="documento_transporte_terrestre">

                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Combinado</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_combinado }}" type="text" class="form-control" name="documento_transporte_combinado">

                    </div>
                </div>

                <div class="col-12">
                    <label for="">Consignado a: </label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_consignado_a }}" type="text" class="form-control" name="documento_transporte_consignado_a">

                    </div>
                </div>

                <div class="col-12">
                    <label for="">Notificado a: </label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_notificado_a }}" type="text" class="form-control" name="documento_transporte_notificado_a">

                    </div>
                </div>
                <div class="col-12">
                    <label for="">Lista de Embarque</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_lista_embarque }}" type="text" class="form-control" name="documento_transporte_lista_embarque">

                    </div>
                </div>

                <div class="col-12">
                    <label for="">Certificado de Origen</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_certificado_origen }}" type="text" class="form-control" name="documento_transporte_certificado_origen">

                    </div>
                </div>

                <div class="col-12">
                    <label for="">Carta informe embarque</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_carta_informe_embarque }}" type="text" class="form-control" name="documento_transporte_carta_informe_embarque">

                    </div>
                </div>

                <div class="col-12">
                    <label for="">Carta envío documentos</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->documento_transporte_carta_envio_documentos }}" type="text" class="form-control" name="documento_transporte_carta_envio_documentos">

                    </div>
                </div>
                <div class="col-12">
                    <label for="">Otros documentos</label>
                    @if($letter->documento_transporte_otros_documentos_1)
                        <div class="d-flex align-items-center">
                            <a href="{{ asset($letter->documento_transporte_otros_documentos_1) }}" target="_blank" class="mr-2">Ver Archivo</a>

                        </div>
                    @else
                        <p>No hay archivo adjunto</p>
                    @endif
                </div>

                <div class="col-12 mt-3">
                    <label for=""><strong>Otras Condiciones adicionales</strong> </label>
                    <textarea disabled class="form-control mr-2" cols="30" rows="10" name="documento_transporte_otras_condiciones_adicionales">{{ $letter->documento_transporte_otras_condiciones_adicionales }}</textarea>

                    <div class="d-flex align-items-center mt-2">

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

                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <label for="">Código</label>
                    <div class="d-flex align-items-center">
                        <input disabled class="form-control mr-2" value="{{ $letter->agente_auricoin_codigo }}" type="text" class="form-control" name="agente_auricoin_codigo">

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

                        </div>
                    @else
                        <p>No hay archivo adjunto</p>
                    @endif
                </div>
                <div class="col-12">
                    <button class="bg-orange-gradient px-6 py-1 font-black float-right" type="button" id="enviarButton">
                        APROBAR
                    </button>
                </div>

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
                var letterId = $("#myDiv").data('letter-id');
                $.ajax({
                    url: "/update3/"+letterId,  // Ajusta la URL según tu estructura de rutas
                    method: "GET",
                    success: function() {
                        window.location.href = "/show3";
                    },
                    error: function() {
                        alert("Hubo un error al actualizar el estado.");
                    }
                });
            });
        });
    </script>
</body>
</html>
<script>
</script>
