<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LetterCredit extends Model
{
    use HasFactory;

    protected $fillable = [
        'ordenante_registro_informacion_tributario',
        'ordenante_nombre_empresa',
        'ordenante_direccion',
        'ordenante_ciudad',
        'ordenante_pais',
        'ordenante_codigo_postal',
        'ordenante_telefono_empresa',
        'ordenante_correo_electronico',
        'ordenante_fecha_constitucion',
        'ordenante_rama_explota',
        'ordenante_numero_billetera_ric',
        'ordenante_pagina_web',
        'representante_legal_documento_identificacion',
        'representante_legal_primer_nombre',
        'representante_legal_segundo_nombre',
        'representante_legal_primer_apellido',
        'representante_legal_segundo_apellido',
        'representante_legal_estado_civil',
        'representante_legal_fecha_nacimiento',
        'representante_legal_direccion_residencia',
        'representante_legal_ciudad',
        'representante_legal_pais',
        'representante_legal_codigo_postal',
        'representante_legal_telefono_residencial',
        'representante_legal_telefono_movil',
        'representante_legal_correo_electronico',
        'empresa_beneficiaria_registro_informacion_tributario',
        'empresa_beneficiaria_nombre_empresa',
        'empresa_beneficiaria_direccion',
        'empresa_beneficiaria_ciudad',
        'empresa_beneficiaria_pais',
        'empresa_beneficiaria_codigo_postal',
        'empresa_beneficiaria_telefono_empresa',
        'empresa_beneficiaria_correo_electronico',
        'empresa_beneficiaria_fecha_constitucion',
        'empresa_beneficiaria_rama_explota',
        'empresa_beneficiaria_numero_billetera_ric',
        'empresa_beneficiaria_pagina_web',
        'representante_legal_empresa_beneficiaria_documento_identificacion',
        'representante_legal_empresa_beneficiaria_primer_nombre',
        'representante_legal_empresa_beneficiaria_segundo_nombre',
        'representante_legal_empresa_beneficiaria_primer_apellido',
        'representante_legal_empresa_beneficiaria_segundo_apellido',
        'representante_legal_empresa_beneficiaria_estado_civil',
        'representante_legal_empresa_beneficiaria_fecha_nacimiento',
        'representante_legal_empresa_beneficiaria_direccion_residencia',
        'representante_legal_empresa_beneficiaria_ciudad',
        'representante_legal_empresa_beneficiaria_pais',
        'representante_legal_empresa_beneficiaria_codigo_postal',
        'representante_legal_empresa_beneficiaria_telefono_residencial',
        'representante_legal_empresa_beneficiaria_telefono_movil',
        'representante_legal_empresa_beneficiaria_correo_electronico',
        'red_social_1',
        'red_social_2',
        'red_social_3',
        'red_social_4',
        'entidad_bancaria_1_nombre',
        'entidad_bancaria_1_pais',
        'entidad_bancaria_1_telefono',
        'entidad_bancaria_1_persona_contacto',
        'entidad_bancaria_1_nombre_2',
        'entidad_bancaria_1_pais_2',
        'entidad_bancaria_1_telefono_2',
        'entidad_bancaria_1_persona_contacto_2',
        'entidad_bancaria_2_nombre',
        'entidad_bancaria_2_pais',
        'entidad_bancaria_2_telefono',
        'entidad_bancaria_2_persona_contacto',
        'entidad_bancaria_2_nombre_2',
        'entidad_bancaria_2_pais_2',
        'entidad_bancaria_2_telefono_2',
        'entidad_bancaria_2_persona_contacto_2',
        'condiciones_forma_credito_documentario',
        'condiciones_moneda',
        'condiciones_vigencia_dias',
        'condiciones_valor_numeros',
        'condiciones_valor_letras',
        'condiciones_tolerancia',
        'condiciones_despachos_parciales',
        'condiciones_transbordos',
        'condiciones_puerto_embarque',
        'condiciones_ciudad_embarque',
        'condiciones_pais_embarque',
        'condiciones_puerto_destino',
        'condiciones_ciudad_destino',
        'condiciones_pais_destino',
        'condiciones_avisada',
        'condiciones_confirmada',
        'condiciones_fecha_maxima_embarque',
        'condiciones_forma_pago',
        'condiciones_2_aceptacion',
        'condiciones_2_dias_aceptacion',
        'condiciones_2_vista_porcentaje',
        'condiciones_2_aceptacion_porcentaje',
        'condiciones_2_dias',
        'condiciones_2_a_partir_de',
        'condiciones_3_lugar_recepcion',
        'condiciones_3_lugar_destino',
        'condiciones_3_termino_negociacion',
        'condiciones_3_comisiones_beneficiario',
        'condiciones_3_comisiones_ordenante',
        'condiciones_3_descripcion_mercancia',
        'documento_transporte_maritimo_limpo_bordo',
        'documento_transporte_aereo',
        'documento_transporte_terrestre',
        'documento_transporte_combinado',
        'documento_transporte_consignado_a',
        'documento_transporte_notificado_a',
        'documento_transporte_lista_embarque',
        'documento_transporte_certificado_origen',
        'documento_transporte_carta_informe_embarque',
        'documento_transporte_carta_envio_documentos',
        'documento_transporte_otros_documentos_1',
        'documento_transporte_otros_documentos_2',
        'documento_transporte_otros_documentos_3',
        'documento_transporte_otras_condiciones_adicionales',
        'agente_auricoin_nombres_apellidos',
        'agente_auricoin_codigo',
        'empresa_acta_constitutiva_modificaciones',
        'empresa_registro_informacion_tributario',
        'empresa_factura_proforma',
        'empresa_contrato_compra_venta',
        'empresa_documento_identificacion_personal',
        'empresa_acepto_autorizaciones',
        'status',
        'type',
        'representante_legal_documento_identificacion2',
        'representante_legal_primer_nombre2',
        'representante_legal_segundo_nombre2',
        'representante_legal_primer_apellido2',
        'representante_legal_segundo_apellido2',
        'representante_legal_estado_civil2',
        'representante_legal_fecha_nacimiento2',
        'representante_legal_direccion_residencia2',
        'representante_legal_ciudad2',
        'representante_legal_pais2',
        'representante_legal_codigo_postal2',
        'representante_legal_telefono_residencial2',
        'representante_legal_telefono_movil2',
        'representante_legal_correo_electronico2',
    ];

    /**
     * Get the letter_credit_memory associated with the LetterCredit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function letter_credit_memory(): HasOne
    {
        return $this->hasOne(LetterCreditMemory::class, 'letter_credit_id');
    }
}
