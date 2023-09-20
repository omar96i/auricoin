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
                <h2 class="text-title">Carta de creditos Back to Back</h2>
            </div>
        </div>

        <div class="navbar w-full h-fit bg-orange-gradient flex justify-between align-middle px-2 py-3 text-nav mt-3">
            <div class="flex divide-x-2 divide-black">
                <a href="{{ route('home') }}" class="px-2">Cartas de credito</a>
                <a href="{{ route('back-to-back-index') }}" class="px-2">Carta de credito Back to Back</a>
                <a href="{{ route('back-to-back-conditions') }}" class="px-2">Condiciones</a>
                <a href="{{ route('back-to-back-form') }}" class="px-2">Solicitud</a>
                <a href="{{ route('back-to-back-bills') }}" class="px-2">Gastos y comisiones</a>
            </div>
        </div>
    </header>
    <img src="{{ asset('back-to-back-image.png') }}" alt="" class="img-fluid" width="100%">
    <div class="p-5">
        <h5>Carta de Crédito</h5>
        <p>La carta de crédito de importación es un instrumento de pago usual en el comercio exterior e interior y se define como una orden condicionada de pago que emite una institución de crédito.</p>
        <p>
            El BEA, banco emisor, por cuenta y orden de personas morales –empresas importadoras, compradoras u ordenantes, a favor de otra empresa, vendedora o beneficiaria, con el compromiso de honrar el pago a su favor, contra la presentación de determinados documentos relativos a la venta de mercancías o prestación de servicios, los cuales deben cumplir estrictamente los términos y condiciones estipulados en la carta de crédito.
        </p>
        <h6>¿A quién va dirigido?</h6>
        <p>
            Empresas registradas en el BEA que importan bienes y/o servicios (materias primas, insumos o componentes para sus procesos de producción y/o productos terminados.
        </p>
        <h6>
            Beneficios
        </h6>
        <p>
            Da confianza a la empresa importadora, compradora u ordenante que recibirá la mercancía según lo pactado con e la empresa vendedora o beneficiaria.
        </p>
        <p>
            Asegura a la empresa vendedora la realización del pago, siempre y cuando los documentos sean entregados en tiempo y forma y concuerden con los términos de la carta de crédito.
        </p>
        <p>
            Eliminación de los obstáculos de tiempo, espacio e idioma, ya que la empresa importadora no se tiene que trasladar al lugar de la empresa exportadora para hacer cumplir los términos y condiciones de compra.
        </p>
        <h6>
            Requisitos
        </h6>
        <p>
            ·         Llenar todos los campos de solicitud de carta de crédito.
        </p>
        <p>
            ·         Anexar la documentación legal de la empresa requerida por El BEA para la debida identificación del cliente (solo la primera operación)
        </p>
        <p>
            Cumplir con los requisitos de crédito para solicitar una línea de crédito con El BEA para la emisión de cartas de crédito si es mayor a 3.375,03 Auricoin (RIC), lo que equivale en dólares americanos a $ 3.000.000,00 USD, o bien, cubrir el 100% del valor de la operación mediante un depósito (provisión de fondos en dinero Auricoin (RIC).
        </p>
        <p>
            Cubrir el importe de la comisión correspondiente en dinero Aurcoin (AUR).
        </p>
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
