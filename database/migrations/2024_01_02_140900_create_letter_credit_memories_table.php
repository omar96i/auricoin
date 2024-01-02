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
        Schema::create('letter_credit_memories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('letter_credit_id')->constrained();
            $table->integer('sequence_of_the_total')->nullable();
            $table->string('form_of_documentary_credit')->nullable();
            $table->string('credit_number')->default('1194CRIP')->nullable();
            $table->string('reference_to_the_notice')->nullable();
            $table->date('date_of_issue')->nullable();
            $table->string('applicable_rules')->nullable();
            $table->string('place_expiration')->nullable();
            $table->date('date_expiration')->nullable();
            $table->string('enchange_ot_payer')->nullable();
            $table->string('ordering')->nullable();
            $table->string('beneficiary')->nullable();
            $table->string('beneficiary_direction')->nullable();
            $table->string('beneficiary_wallet_number')->nullable();
            $table->string('beneficiary_email')->nullable();
            $table->string('coint_payment')->nullable();
            $table->string('tolerance')->nullable();
            $table->string('number_commissions')->nullable();
            $table->string('partial_shipments')->nullable();
            $table->string('merchandise_loading_place')->nullable();
            $table->string('outside')->nullable();
            $table->string('destination')->nullable();
            $table->string('merchandise_destination')->nullable();
            $table->date('maximum_embargo_date')->nullable();
            $table->date('transfer_start_date')->nullable();
            $table->date('transfer_end_date')->nullable();
            $table->string('transshipment')->nullable();
            $table->text('description')->nullable();
            $table->text('required_document')->nullable();
            $table->string('place_of_destination')->nullable();
            $table->date('max_date_for_boarding')->nullable();
            $table->string('payment_condition')->nullable();
            $table->string('merchandise_description')->nullable();
            $table->string('ordering_duty')->nullable();
            $table->text('document_required')->nullable();
            $table->string('condition_additional')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('expenses')->nullable();
            $table->string('presentation_period_days')->nullable();
            $table->string('confirmation_instructions')->nullable();
            $table->string('instructions_payments')->nullable();
            $table->string('report')->nullable();
            $table->string('information_sender')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter_credit_memories');
    }
};
