<?php

namespace App\Http\Controllers;

use App\Models\LetterCredit;
use App\Models\LetterCreditMemory;
use Illuminate\Http\Request;

class LetterCreditController extends Controller
{
    public function store(Request $request){
        $file_1 = $request->file('empresa_acta_constitutiva_modificaciones');
        $file_2 = $request->file('empresa_registro_informacion_tributario');
        $file_3 = $request->file('empresa_factura_proforma');
        $file_4 = $request->file('empresa_contrato_compra_venta');
        $file_5 = $request->file('empresa_documento_identificacion_personal');
        $file_6 = $request->file('documento_transporte_otros_documentos_1');
        $letter = new LetterCredit($request->all());
        if ($file_1) {
            $nombreArchivo1 = $file_1->getClientOriginalName();
            $file_1->move(public_path('archivos'), $nombreArchivo1);
            $letter->empresa_acta_constitutiva_modificaciones = 'archivos/' . $nombreArchivo1;
        }

        if ($file_2) {
            $nombreArchivo2 = $file_2->getClientOriginalName();
            $file_2->move(public_path('archivos'), $nombreArchivo2);
            $letter->empresa_registro_informacion_tributario = 'archivos/' . $nombreArchivo2;
        }

        if ($file_3) {
            $nombreArchivo3 = $file_3->getClientOriginalName();
            $file_3->move(public_path('archivos'), $nombreArchivo3);
            $letter->empresa_factura_proforma = 'archivos/' . $nombreArchivo3;
        }

        if ($file_4) {
            $nombreArchivo4 = $file_4->getClientOriginalName();
            $file_4->move(public_path('archivos'), $nombreArchivo4);
            $letter->empresa_contrato_compra_venta = 'archivos/' . $nombreArchivo4;
        }

        if ($file_5) {
            $nombreArchivo5 = $file_5->getClientOriginalName();
            $file_5->move(public_path('archivos'), $nombreArchivo5);
            $letter->empresa_documento_identificacion_personal = 'archivos/' . $nombreArchivo5;
        }

        if ($file_6) {
            $nombreArchivo6 = $file_6->getClientOriginalName();
            $file_6->move(public_path('archivos'), $nombreArchivo6);
            $letter->documento_transporte_otros_documentos_1 = 'archivos/' . $nombreArchivo6;
        }
        $letter->save();
        return redirect()->route('home');
    }

    public function memorySave(Request $request){
        $memoery = new LetterCreditMemory($request->all());
        $memoery->save();
        $letter = LetterCredit::find($request->letter_credit_id);

        $letter->update([
            'status' => 'revisado'
        ]);
        return $this->show();
    }

    public function show(){
        return view('show', ['letters' => LetterCredit::where('status', 'pendiente')->get()]);
    }

    public function showAll(){
        return view('show2', ['letters' => LetterCredit::where('status', 'revisado')->get()]);
    }

    public function showAll2(){
        return view('show3', ['letters' => LetterCredit::where('status', 'confirmado')->get()]);
    }

    public function showAll3(){
        return view('letter', ['letters' => LetterCredit::with('letter_credit_memory')->where('status', 'aprobado')->get()]);
    }

    public function statusChange(LetterCredit $letter){
        return view('status', ['letter' => $letter]);
    }

    public function updateStatus(LetterCredit $letter){
        $letter->update([
            'status' => 'revisado'
        ]);

        // Redirigir a la ruta show con el ID del letter
        return response()->json(['status' => true]);
    }

    public function updateStatus2(LetterCredit $letter){
        $letter->update([
            'status' => 'confirmado'
        ]);

        // Redirigir a la ruta show con el ID del letter
        return $this->showAll();
    }

    public function updateStatus3(LetterCredit $letter){
        $letter->update([
            'status' => 'aprobado'
        ]);

        // Redirigir a la ruta show con el ID del letter
        return response()->json(['status' => true]);
    }

    public function show2(LetterCredit $letter){
        return view('letter_credit_memory.confirm', ['letter' => $letter->load('letter_credit_memory')]);
    }

    public function show3(LetterCredit $letter){
        return view('show_letter2', ['letter' => $letter]);
    }

    public function show4(LetterCredit $letter){
        return view('letter_credit_memory.show', ['letter' => $letter->load('letter_credit_memory')]);
    }

    // A la vista card
    public function a_la_vista_index(){
        return view('cards.a_la_vista.index');
    }

    public function a_la_vista_bills(){
        return view('cards.a_la_vista.bills');
    }

    public function a_la_vista_conditions(){
        return view('cards.a_la_vista.condition');
    }

    public function a_la_vista_form(){
        return view('cards.a_la_vista.form');
    }

     // Back to Back card
     public function back_to_back_index(){
        return view('cards.back_to_back.index');
    }

    public function back_to_back_bills(){
        return view('cards.back_to_back.bills');
    }

    public function back_to_back_conditions(){
        return view('cards.back_to_back.condition');
    }

    public function back_to_back_form(){
        return view('cards.back_to_back.form');
    }

     // Clausula roja card
     public function clausula_roja_index(){
        return view('cards.clausula_roja.index');
    }

    public function clausula_roja_bills(){
        return view('cards.clausula_roja.bills');
    }

    public function clausula_roja_conditions(){
        return view('cards.clausula_roja.condition');
    }

    public function clausula_roja_form(){
        return view('cards.clausula_roja.form');
    }

     // Diferida card
     public function diferida_index(){
        return view('cards.diferida.index');
    }

    public function diferida_bills(){
        return view('cards.diferida.bills');
    }

    public function diferida_conditions(){
        return view('cards.diferida.condition');
    }

    public function diferida_form(){
        return view('cards.diferida.form');
    }

     // Directa card
     public function direct_index(){
        return view('cards.direct.index');
    }

    public function direct_bills(){
        return view('cards.direct.bills');
    }

    public function direct_conditions(){
        return view('cards.direct.condition');
    }

    public function direct_form(){
        return view('cards.direct.form');
    }

     // Importacion card
     public function importacion_index(){
        return view('cards.importacion.index');
    }

    public function importacion_bills(){
        return view('cards.importacion.bills');
    }

    public function importacion_conditions(){
        return view('cards.importacion.condition');
    }

    public function importacion_form(){
        return view('cards.importacion.form');
    }

     // Irrevocable card
     public function irrevocable_index(){
        return view('cards.irrevocable.index');
    }

    public function irrevocable_bills(){
        return view('cards.irrevocable.bills');
    }

    public function irrevocable_conditions(){
        return view('cards.irrevocable.condition');
    }

    public function irrevocable_form(){
        return view('cards.irrevocable.form');
    }

     // Revocable card
     public function revocable_index(){
        return view('cards.revocable.index');
    }

    public function revocable_bills(){
        return view('cards.revocable.bills');
    }

    public function revocable_conditions(){
        return view('cards.revocable.condition');
    }

    public function revocable_form(){
        return view('cards.revocable.form');
    }

     // Rotativa card
     public function rotativa_index(){
        return view('cards.rotativa.index');
    }

    public function rotativa_bills(){
        return view('cards.rotativa.bills');
    }

    public function rotativa_conditions(){
        return view('cards.rotativa.condition');
    }

    public function rotativa_form(){
        return view('cards.rotativa.form');
    }

     // Standby card
     public function standby_index(){
        return view('cards.standby.index');
    }

    public function standby_bills(){
        return view('cards.standby.bills');
    }

    public function standby_conditions(){
        return view('cards.standby.condition');
    }

    public function standby_form(){
        return view('cards.standby.form');
    }

     // transferible card
     public function transferible_index(){
        return view('cards.transferible.index');
    }

    public function transferible_bills(){
        return view('cards.transferible.bills');
    }

    public function transferible_conditions(){
        return view('cards.transferible.condition');
    }

    public function transferible_form(){
        return view('cards.transferible.form');
    }
}
