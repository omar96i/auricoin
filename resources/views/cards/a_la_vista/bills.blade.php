<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auricoin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                <h2 class="text-title">Carta de creditos A la vista</h2>
            </div>
        </div>

        <div class="navbar w-full h-fit bg-orange-gradient flex justify-between align-middle px-2 py-3 text-nav mt-3">
            <div class="flex divide-x-2 divide-black">
                <a href="{{ route('home') }}" class="px-2">Cartas de credito</a>
                <a href="{{ route('a-la-vista-index') }}" class="px-2">Carta de credito A la vista</a>
                <a href="{{ route('a-la-vista-conditions') }}" class="px-2">Condiciones</a>
                <a href="{{ route('a-la-vista-form') }}" class="px-2">Solicitud</a>
                <a href="{{ route('a-la-vista-bills') }}" class="px-2">Gastos y comisiones</a>
            </div>
        </div>
    </header>
    <div class="p-5">
        <h4>Apertura costos</h4>
        <div class="alert alert-light" role="alert">
            <span>Tips:</span> <br>
            Todos los gastos o comisiones que genera la Carta de Crédito, El BEA la cobra en dinero Aurcoin (AUR), el valor de un Aurcoin (AUR) es el de Uno con 00/100 dólar americano ($ 1,00 USD)
        </div>
        <h5>Operaciones Internacionales: Carta de crédito (apertura)</h5>
        <h5>De importación en moneda Auricoin (RIC)</h5>
        <br><br>
        <div class="d-flex justify-content-between">
            <p>Comisión de apertura por cada 90 días o fracción</p>
            <p>AUR     0,1%</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Mínimo</p>
            <p>AUR     75</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Comisión utilización s/monto negociado</p>
            <p>        0,1%</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Mínimo</p>
            <p>AUR     75</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Comisión aceptación anual</p>
            <p>AUR     2%</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Mínimo</p>
            <p>AUR     75</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Modificaciones: C/U (no incluye prórrogas o incrementos de montos)</p>
            <p>AUR     35</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Gastos de Contrato Inteligente C/U</p>
            <p>AUR     25</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Anulaciones</p>
            <p>AUR     35</p>
        </div>
        <hr>
        <h6>Recepción costos</h6><br>
        <h5>Operaciones Internacionales: Cartas de crédito (Recepción)</h5>
        <h5>De Exportación en moneda Auricoin RIC</h5>

        <div class="d-flex justify-content-between">
            <p>Comisión por notificación</p>
            <p>AUR     35</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Comisión por confirmación por cada 90 días o fracción</p>
            <p>AUR     0,1%</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Mínimo</p>
            <p>AUR     35</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Comisión por pago s/monto negociado</p>
            <p>AUR     0,1%</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Mínimo</p>
            <p>AUR     35</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Comisión aceptación anual</p>
            <p>AUR     2%</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Mínimo</p>
            <p>AUR     35</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Modificaciones: C/U (no incluye prórrogas o incrementos de montos)</p>
            <p>AUR     35</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Cancelaciones</p>
            <p>AUR     35</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Discrepancias</p>
            <p>AUR     40</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Transferencias</p>
            <p>AUR     35</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Gastos de Contrato Inteligente</p>
            <p>AUR     25</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Comunicaciones locales</p>
            <p>AUR     2</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Gastos de Courrier</p>
            <p>AUR     45</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Portes</p>
            <p>AUR     5,5</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Cesiones</p>
            <p>AUR     100</p>
        </div>
    </div>

    <div>
        <div class="bg-orange-gradient h-4"></div>
        <p class="text-center">© 2023 Banco Exchange Auricoin</p>
        <div class="bg-orange-gradient h-4"></div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
