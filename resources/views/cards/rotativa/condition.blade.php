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
                <h2 class="text-title">Carta de creditos Rotativa</h2>
            </div>
        </div>

        <div class="navbar w-full h-fit bg-orange-gradient flex justify-between align-middle px-2 py-3 text-nav mt-3">
            <div class="flex divide-x-2 divide-black">
                <a href="{{ route('home') }}" class="px-2">Cartas de credito</a>
                <a href="{{ route('rotativa-index') }}" class="px-2">Carta de credito Rotativa</a>
                <a href="{{ route('rotativa-conditions') }}" class="px-2">Condiciones</a>
                <a href="{{ route('rotativa-form') }}" class="px-2">Solicitud</a>
                <a href="{{ route('rotativa-bills') }}" class="px-2">Gastos y comisiones</a>
            </div>
        </div>
    </header>
    <div class="text-center m-3">
        <h4>CONDICIONES QUE RIGEN LA APERTURA DEL CRÉDITO DOCUMENTARIO</h4>
    </div>
    <!-- Item -->

    <div class="p-5">
        <p>Por efectecto de la solicitud de apertura de un crédito documentario y en el evento en que sea aceptado por el Banco Exchange Auricoin en adelante EL BEA. EL ORDENANTE del crédito documentario en adelante EL ORDENANTE se obliga a: </p>
        <h6>PRIMERO: </h6>
        <p>
            Pagar a EL BEA la suma o sumas pagadas por el corresponsal y/o EL BEA por efectos de la utilización o utilizaciones del crédito documentario, pago que hará en dinero Auricoin RIC. <br><br>
            a.- Pagar a EL BEA la suma o sumas pagadas por el corresponsal y/o EL BEA por efectos de la utilización o utilizaciones del crédito documentario, pago que realizará en dinero Auricoin RIC. <br><br>
            b.- Pagar a EL BEA la suma o sumas cobradas por el corresponsal y/o EL BEA por efectos de gastos o comisiones por las utilizaciones del crédito documentario, pago que hará en dinero AURCOIN AUR.
        </p>
        <h6>SEGUNDO: </h6>
        <p>
            El valor de las utilizaciones del crédito son exigibles desde el momento en que EL BEA efectue el pago de las mismas al beneficiario o desde la fecha en que su Corresponsal lo haga. Las comisiones y gastos, desde el momento que se generen.
        </p>
        <h6>TERCERO: </h6>
        <p>
            Autorizamos a EL BEA para constituir por nuestra cuenta las garantias que sean necesarias para el inmediato reembolso de las utilizaciones del crédito. El valor de los gastos y valores que llegare a desembolsar a EL BEA por motivo de ellas, se realizará al recibo de simple aviso de cobro.
        </p>
        <h6>CUARTO: </h6>
        <p>
            EL BEA podrá escoger libremente el Corresponsal que necesite para tramitar la carta de crédito y será por nuestra cuenta y riesgo todo error de interpretación u omisión en la observancia de las condiciones de la carta de crédito por parte del corresponsal escogido. Nos responzabilizamos tambien por las obligaciones legales a que se vea sometido EL BEA o su corresponsal.
        </p>
        <h6>QUINTA: </h6>
        <p>
            Aceptamos como deuda a nuestro cargo el valor de las utilizaciones que se produjeren, independientemente de la suerte que pueda correr la mercancia amparadas por el crédito.
        </p>
        <h6>SEXTA: </h6>
        <p>
            Pagar el valor de los intereses y gastos generados por la obligación que se deriva de la utilización o utilizaciones del crédito documentario en dinero Auricoin RIC y el valor de las comisiones y demás gastos en dinero Aurcoin AUR, no obstante que EL BEA por razón de operación que les da origen deba referirlos a divisas para determinar su valor,  utilizado la tasa de cambio representativa del mercado aplicable para el día de pago o la que EL BEA tenga establecida para ese tipo de operaciones si la norma cambiaria así lo exige. Los intereses a pagar se liquidarán al vencimiento de cada mes calendario o en la forma que lo disponga EL BEA, por el periodo comprendido entre la fecha de pago del corresponsal al beneficiario del crédito documentario y aquella en que EL BEA reciba el pago de la deuda.
        </p>
        <h6>SÉPTIMA:</h6>
        <p>
            EL BEA está autorizado para debitar de cualquier billetera que se encuentre asociada a la cuenta Auricoin, aperturada a nombre de EL ORDENANTE en EL BEA, el valor de las deudas de este crédito documentario, capital, intereses, comisiones, timbres y cualquier otro gasto que esta operación ocasione, como también el cobro de comisión adicional de prepago. En caso de ser necesario, EL BEA está autorizado para debitar tales deudas de las demás billeteras activas de las cuales sea titular EL ORDENANTE del crédito documentario.
        </p>
        <h6>OCTAVA: </h6>
        <p>
            Entregar oportunamente a EL BEA los documentos exigidos por las normas cambiarias para tramitar la compra o reemboldo del dinero Aurcoin AUR necesarias para efectuar el pago de los gastos y comisiones. EL BEA queda autorizado irrevocablemente para debitar de las cuentas de EL ORDENANTE el pago de capital, intereses y comisiones, siendo esta una facultad mas no una obligación y en el evento de que se ejerza, EL ORDENANTE libera a EL BEA de cualquier responzabilidad por el ejercicio de esta autorización. Asi mismo EL BEA queda facultado para efectuar todos los trámites necesarios tendientes a la cancelación total de la obligación.
        </p>
        <h6>NOVENA: </h6>
        <p>
            Los despachadores recibirán instrucciones de remitir la mercancia a la orden de EL BEA y ésta será retenida a título de prenda hasta la completa extinción de las obligaciones derivadas del crédito, si EL BEA lo estimare conveniente. En el caso de que EL BEA viere la necesidad de depositar la mercancia, serán de nuestro cargo de EL ORDENANTE, todos los costos por bodegaje y comisiones del depositario.
        </p>
        <h6>DÉCIMO:</h6>
        <p>
            Si el crédito documentario es utilizado y en el evento que las normas cambiarias así lo exijan, EL ORDENANTE se obliga a la constitución del depósito ante FONGABANA, con las caracteristicas exigidas y reglamentadas por dicha entidad.
        </p>
        <h6>UNDÉCIMO: </h6>
        <p>
            La financiación solicitada será otorgada en dinero Auricoin RIC, siendo de nuestra cuenta, es decir a cargo de EL ORDENANTE las diferencias de cambio que se presenten. La  amortización a capital se realizará al vencimiento y el cobro de intereses mes vencido. En caso de mora se cobrará sobre los saldos en mora la tasa de referencia, adicionada con el doble del spread pactado.
        </p>
        <h6>DUODÉCIMO</h6>
        <p>
            Declaramos así mismo, que será de nuestro cargo el pago de cualquier impuesto o gravamen que llegue a establecerse en el futuro y que afecte al capital y/o los intereses de la presente obligación, como tambien asumimos las variaciones que pueda tener la tasa de interés.
        </p>
        <h6>DECIMOTERCERO:</h6>
        <p>
            EL BEA podrá, si así lo estima conveniente y previa solicitud de EL ORDENANTE, aceptar el prepago parcial o total de las obligaciones originada en la utilización del crédito documentario. En tal evento, EL ORDENANTE debera notificar a EL BEA su intención de prepagar, mediante comunicación escrita, presentada por lo menos con tres (3) días hábiles de antelación a la fecha en que se desee efectuar el pago, especificando el número de la obligación, la fecha y el valor que desea prepagar. EL ORDENANTE autoriza expresamente a EL BEA para debitar de la cuenta indicada en la solicitud el valor de las comisiones originadas en el prepago.
        </p>
        <h6>DECIMOCUARTO: </h6>
        <p>EL BEA no será responsable por errores de declaración ante la Aduana, ni en las facturas consulares, ni por la oportuna presentación de los documentos para la nacionalización de la mercancía. </p>
        <h6>DECIMOQUINTO:</h6>
        <p>
            EL BEA no será responsable por las consecuencias que puedan derivarse de la demora o extravío de cartas o documentos, ni la demora, mutilación o errores de transmisión de mensajes. Tampoco será responsable por errores de traducción o interpretación de términos técnicos.
        </p>
        <h6>DECIMOSEXTO: </h6>
        <p>
            En el evento en que los gastos y comisiones que cobren los corresponsales de EL BEA en el exterior, y que sean por cuenta del beneficiario, sean rehusados en su pago, serán cubiertos por nosotros, es decir por EL ORDENANTE , a EL BEA.
        </p>
        <h6>DECIMOSÉPTIMO:</h6>
        <p>
            EL ORDENANTE manifiesta conocer y acepta expresamente las normas de las reglas internacionales que rigen los créditos documentarios en las cuales se establece que los Bancos emisores y sus corresponsales no asumen obligación ni responsabilidad alguna respecto a la forma, suficiencia, exactitud, autenticidad, veracidad, o el valor legal de algún documento, ni respecto a las condiciones generales o particulares que se indiquen en los documentos o que se agreguen a ellos, así como respecto a la descripción, cantidad, estado, peso, calidad, embalaje, despacho, valor o existencia de las mercancías representadas por los documentos y a la buena fe en los actos u omisiones, solvencias, reputación o cumplimiento de las obligaciones de los despachadores, transportadores, aseguradores de la mercancía o de cualquier otra persona relacionada con la operación.
        </p>
        <h6>DECIMOCTAVO: </h6>
        <p>
            EL ORDENANTE declara y acepta que EL BEA no es responsable por extravío, errores o demoras que puedan producirse en la tramitación o entrega de los documentos necesarios para la utilización del crédito documentario, cuando tales hechos obedezcan a circunstancias ajenas a su control directo.
        </p>
        <h6>DECIMONOVENO: </h6>
        <p>
            EL ORDENANTE acepta que EL BEA puede dar por vencido el plazo otorgado para el pago de la financiación de la utilización o utilizaciones del crédito documentario cuando EL ORDENANTE incumpla parcial o totalmente con la obligación de pagar una de la cuotas convenidas para el pago de la financiación o los intereses o cualquier otra obligación asumida a cualquier título con el BEA.
        </p>
        <h6>VIGÉSIMO: </h6>
        <p>
            EL ORDENANTE asume las responsabilidades y el pago de cualquier multa que pueda generarse en la aplicación de las normas aduaneras y los perjuicios que puedan causarse en caso de que se produzca la presentación tardía de los documentos originales o de las copias.
        </p>
        <h6>VIGESIMOPRIMERO:</h6>
        <p>
            En el evento en que el plazo de financiación solicitado ó por cualquiera de sus prólogas, exeda el plazo cambiariamente establecido, será reaponzabilidad de EL ORDENANTE el cumplimiento oportuno de los trámites exigidos por las normas cambiaras vigentes de EL BEA.
        </p>
        <h6>VIGESIMOSEGUNDO:</h6>
        <p>
            El presente convenio de apertura de crédito documentario así como su desarrollo operativo, ejecución y la (s) carta (s) de crédito emitidas al efecto, se rigen por las reglas y usos uniformes relativos a créditos documentarios de la Cámara de Comercio Internacional vigentes en la fecha de su apertura y por lo establecido en este documento.
        </p>
        <h6>VIGESIMOTERCERO:</h6>
        <p>
            Con el presente documento declaro(amos) que he(mos) sido plenamente informado(s) de las condiciones del contrato de crédito y por ende de la respectiva operación.
        </p>
        <h6>VIGESIMOCUARTO:</h6>
        <p>
            Declaro(amos) que entiendo(entendemos) y acepto(amos) que el presente documento no obliga a EL BEA y que solo en caso de aceptarla, EL BEA tendrá carácter de acreedor de la respectiva obligación, con todas las prerrogativas, facultades o condiciones reconocidas para ese carácter por la ley y/o los respectivos títulos de deuda, contratos, autorizaciones o demás documentos que suscriba(mos) al efecto. Igualmente con la aceptación del presente documento por parte de EL BEA, entiendo(emos) que EL BEA tendrá la obligación de suministrar(nos) oportunamente la información sobre la calificación y clasificación del riesgo de crédito correspondiente, una vez que sea efectuada la respectiva solicitud por el (los) suscrito (s).
        </p>
        <h6>VIGESIMOQUINTO:</h6>
        <p>
            Este contrato no requiere firma, se formaliza al deudor acepta el manifiesto donde indica: que ha leído y acepta todos los Reglamentos que rigen a la Comunidad Auricoin; que ha leído y acepta el contenido del presente documento que contiene las condiciones que rigen la apertura del crédito documentario; Que autoriza a que el BEA le debite automáticamente los gastos, comisiones y demás costos que ocacionen la emisión del crédito documentario de la(s) cuenta(s) que tiene aperturada en el BEA mi representada; cuando envíe EL ORDENANTE el código de confirmación como aceptación a las condiciones; y cuando el BEA le emita  el documento de la carta de crédito.  <br><br>El presente contrato se suscribe a los …...... días, del mes de …................................., del año ….......
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
