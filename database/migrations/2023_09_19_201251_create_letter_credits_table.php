<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('letter_credits', function (Blueprint $table) {
            $table->id();
            $table->string('ordenante_registro_informacion_tributario')->nullable();
            $table->string('ordenante_nombre_empresa')->nullable();
            $table->string('ordenante_direccion')->nullable();
            $table->string('ordenante_ciudad')->nullable();
            $table->string('ordenante_pais')->nullable();
            $table->string('ordenante_codigo_postal')->nullable();
            $table->string('ordenante_telefono_empresa')->nullable();
            $table->string('ordenante_correo_electronico')->nullable();
            $table->date('ordenante_fecha_constitucion')->nullable();
            $table->string('ordenante_rama_explota')->nullable();
            $table->string('ordenante_numero_billetera_ric')->nullable();
            $table->string('ordenante_pagina_web')->nullable();
            $table->string('representante_legal_documento_identificacion')->nullable();
            $table->string('representante_legal_primer_nombre')->nullable();
            $table->string('representante_legal_segundo_nombre')->nullable();
            $table->string('representante_legal_primer_apellido')->nullable();
            $table->string('representante_legal_segundo_apellido')->nullable();
            $table->string('representante_legal_estado_civil')->nullable();
            $table->date('representante_legal_fecha_nacimiento')->nullable();
            $table->string('representante_legal_direccion_residencia')->nullable();
            $table->string('representante_legal_ciudad')->nullable();
            $table->string('representante_legal_pais')->nullable();
            $table->string('representante_legal_codigo_postal')->nullable();
            $table->string('representante_legal_telefono_residencial')->nullable();
            $table->string('representante_legal_telefono_movil')->nullable();
            $table->string('representante_legal_correo_electronico')->nullable();
            $table->string('empresa_beneficiaria_registro_informacion_tributario')->nullable();
            $table->string('empresa_beneficiaria_nombre_empresa')->nullable();
            $table->string('empresa_beneficiaria_direccion')->nullable();
            $table->string('empresa_beneficiaria_ciudad')->nullable();
            $table->string('empresa_beneficiaria_pais')->nullable();
            $table->string('empresa_beneficiaria_codigo_postal')->nullable();
            $table->string('empresa_beneficiaria_telefono_empresa')->nullable();
            $table->string('empresa_beneficiaria_correo_electronico')->nullable();
            $table->date('empresa_beneficiaria_fecha_constitucion')->nullable();
            $table->string('empresa_beneficiaria_rama_explota')->nullable();
            $table->string('empresa_beneficiaria_numero_billetera_ric')->nullable();
            $table->string('empresa_beneficiaria_pagina_web')->nullable();
            $table->string('representante_legal_documento_identificacion2')->nullable();
            $table->string('representante_legal_primer_nombre2')->nullable();
            $table->string('representante_legal_segundo_nombre2')->nullable();
            $table->string('representante_legal_primer_apellido2')->nullable();
            $table->string('representante_legal_segundo_apellido2')->nullable();
            $table->string('representante_legal_estado_civil2')->nullable();
            $table->date('representante_legal_fecha_nacimiento2')->nullable();
            $table->string('representante_legal_direccion_residencia2')->nullable();
            $table->string('representante_legal_ciudad2')->nullable();
            $table->string('representante_legal_pais2')->nullable();
            $table->string('representante_legal_codigo_postal2')->nullable();
            $table->string('representante_legal_telefono_residencial2')->nullable();
            $table->string('representante_legal_telefono_movil2')->nullable();
            $table->string('representante_legal_correo_electronico2')->nullable();
            $table->string('red_social_1')->nullable();
            $table->string('red_social_2')->nullable();
            $table->string('red_social_3')->nullable();
            $table->string('red_social_4')->nullable();
            $table->string('entidad_bancaria_1_nombre')->nullable();
            $table->string('entidad_bancaria_1_pais')->nullable();
            $table->string('entidad_bancaria_1_telefono')->nullable();
            $table->text('entidad_bancaria_1_persona_contacto')->nullable();
            $table->text('entidad_bancaria_1_nombre_2')->nullable();
            $table->text('entidad_bancaria_1_pais_2')->nullable();
            $table->text('entidad_bancaria_1_telefono_2')->nullable();
            $table->text('entidad_bancaria_1_persona_contacto_2')->nullable();
            $table->text('entidad_bancaria_2_nombre')->nullable();
            $table->text('entidad_bancaria_2_pais')->nullable();
            $table->text('entidad_bancaria_2_telefono')->nullable();
            $table->text('entidad_bancaria_2_persona_contacto')->nullable();
            $table->text('entidad_bancaria_2_nombre_2')->nullable();
            $table->text('entidad_bancaria_2_pais_2')->nullable();
            $table->text('entidad_bancaria_2_telefono_2')->nullable();
            $table->text('entidad_bancaria_2_persona_contacto_2')->nullable();
            $table->text('condiciones_forma_credito_documentario')->nullable();
            $table->text('condiciones_moneda')->nullable();
            $table->integer('condiciones_vigencia_dias')->nullable();
            $table->decimal('condiciones_valor_numeros', 15, 2)->nullable();
            $table->string('condiciones_valor_letras')->nullable();
            $table->decimal('condiciones_tolerancia', 15, 2)->nullable();
            $table->string('condiciones_despachos_parciales')->nullable();
            $table->string('condiciones_transbordos')->nullable();
            $table->string('condiciones_puerto_embarque')->nullable();
            $table->string('condiciones_ciudad_embarque')->nullable();
            $table->string('condiciones_pais_embarque')->nullable();
            $table->string('condiciones_puerto_destino')->nullable();
            $table->text('condiciones_ciudad_destino')->nullable();
            $table->text('condiciones_pais_destino')->nullable();
            $table->text('condiciones_avisada')->nullable();
            $table->text('condiciones_confirmada')->nullable();
            $table->date('condiciones_fecha_maxima_embarque')->nullable();
            $table->text('condiciones_forma_pago')->nullable();
            $table->text('condiciones_2_aceptacion')->nullable();
            $table->integer('condiciones_2_dias_aceptacion')->nullable();
            $table->decimal('condiciones_2_vista_porcentaje', 5, 2)->nullable();
            $table->decimal('condiciones_2_aceptacion_porcentaje', 5, 2)->nullable();
            $table->integer('condiciones_2_dias')->nullable();
            $table->text('condiciones_2_a_partir_de')->nullable();
            $table->text('condiciones_3_lugar_recepcion')->nullable();
            $table->text('condiciones_3_lugar_destino')->nullable();
            $table->string('condiciones_3_termino_negociacion')->nullable();
            $table->string('condiciones_3_comisiones_beneficiario')->nullable();
            $table->string('condiciones_3_comisiones_ordenante')->nullable();
            $table->text('condiciones_3_descripcion_mercancia')->nullable();
            $table->string('documento_transporte_maritimo_limpo_bordo')->nullable();
            $table->string('documento_transporte_aereo')->nullable();
            $table->string('documento_transporte_terrestre')->nullable();
            $table->string('documento_transporte_combinado')->nullable();
            $table->string('documento_transporte_consignado_a')->nullable();
            $table->string('documento_transporte_notificado_a')->nullable();
            $table->string('documento_transporte_lista_embarque')->nullable();
            $table->string('documento_transporte_certificado_origen')->nullable();
            $table->string('documento_transporte_carta_informe_embarque')->nullable();
            $table->string('documento_transporte_carta_envio_documentos')->nullable();
            $table->string('documento_transporte_otros_documentos_1')->nullable();
            $table->string('documento_transporte_otros_documentos_2')->nullable();
            $table->string('documento_transporte_otros_documentos_3')->nullable();
            $table->text('documento_transporte_otras_condiciones_adicionales')->nullable();
            $table->string('agente_auricoin_nombres_apellidos')->nullable();
            $table->string('agente_auricoin_codigo')->nullable();
            $table->string('empresa_acta_constitutiva_modificaciones')->nullable();
            $table->string('empresa_registro_informacion_tributario')->nullable();
            $table->string('empresa_factura_proforma')->nullable();
            $table->string('empresa_contrato_compra_venta')->nullable();
            $table->string('empresa_documento_identificacion_personal')->nullable();
            $table->boolean('empresa_acepto_autorizaciones')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter_credits');
    }
};
