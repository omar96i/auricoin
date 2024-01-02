<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LetterCreditMemory extends Model
{
    use HasFactory;

    protected $fillable = [
        'letter_credit_id',
        'sequence_of_the_total',
        'form_of_documentary_credit',
        'credit_number',
        'reference_to_the_notice',
        'date_of_issue',
        'applicable_rules',
        'place_expiration',
        'date_expiration',
        'enchange_ot_payer',
        'ordering',
        'beneficiary',
        'beneficiary_direction',
        'beneficiary_wallet_number',
        'beneficiary_email',
        'coint_payment',
        'tolerance',
        'number_commissions',
        'partial_shipments',
        'merchandise_loading_place',
        'outside',
        'destination',
        'merchandise_destination',
        'maximum_embargo_date',
        'transfer_start_date',
        'transfer_end_date',
        'transshipment',
        'description',
        'required_document',
        'place_of_destination',
        'max_date_for_boarding',
        'payment_condition',
        'merchandise_description',
        'ordering_duty',
        'document_required',
        'condition_additional',
        'payment_method',
        'expenses',
        'presentation_period_days',
        'confirmation_instructions',
        'instructions_payments',
        'report',
        'information_sender',
    ];

    /**
     * Get the letter_credit that owns the LetterCreditMemory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function letter_credit(): BelongsTo
    {
        return $this->belongsTo(LetterCredit::class, 'letter_credit_id');
    }
}
