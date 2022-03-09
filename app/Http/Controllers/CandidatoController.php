<?php

namespace App\Http\Controllers;

use Request;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Candidato;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CandidatosRequest;

class CandidatoController extends Controller
{

    public function lista()
    {
        $candidatos = Candidato::all();

        return view('website.listagem')->with('candidatos', $candidatos);
    }

    public function listaJson()
    {
        $candidatos = Candidato::all();
        return response()->json($candidatos);
    }

    public function inscricao()
    {
        return view('website.inscricao');
    }


    public function adiciona(CandidatosRequest $request)
    {

        if ($request->hasFile('doc_id') && $request->file('doc_id')->isValid()) {

            $cpf = $request->cpf;

            $extension = $request->doc_id->extension();

            $nameFile = "id_{$cpf}.{$extension}";

            $file_id = $request->doc_id->storeAs('uploads', $nameFile, 'public');

            if (!$file_id)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        };

        if ($request->hasFile('doc_cpf') && $request->file('doc_cpf')->isValid()) {

            $cpf = $request->cpf;

            $extension = $request->doc_cpf->extension();

            $nameFile = "cpf_{$cpf}.{$extension}";

            $file_cpf = $request->doc_cpf->storeAs('uploads', $nameFile, 'public');

            if (!$file_cpf)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        };

        if ($request->hasFile('doc_cv') && $request->file('doc_cv')->isValid()) {

            $cpf = $request->cpf;

            $extension = $request->doc_cv->extension();

            $nameFile = "cv_{$cpf}.{$extension}";

            $file_cv = $request->doc_cv->storeAs('uploads', $nameFile, 'public');

            if (!$file_cv)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        };

        if ($request->hasFile('doc_medicine') && $request->file('doc_medicine')->isValid()) {

            $cpf = $request->cpf;

            $extension = $request->doc_medicine->extension();

            $nameFile = "diploma_{$cpf}.{$extension}";

            $file_medicine = $request->doc_medicine->storeAs('uploads', $nameFile, 'public');

            if (!$file_medicine)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        };

        if ($request->hasFile('doc_re_esp') && $request->file('doc_re_esp')->isValid()) {

            $cpf = $request->cpf;

            $extension = $request->doc_re_esp->extension();

            $nameFile = "resi_esp_{$cpf}.{$extension}";

            $file_re_esp = $request->doc_re_esp->storeAs('uploads', $nameFile, 'public');

            if (!$file_re_esp)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        };

        if ($request->hasFile('doc_crm') && $request->file('doc_crm')->isValid()) {

            $cpf = $request->cpf;

            $extension = $request->doc_crm->extension();

            $nameFile = "crm_{$cpf}.{$extension}";

            $file_crm = $request->doc_crm->storeAs('uploads', $nameFile, 'public');

            if (!$file_crm)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        };
        
        if ($request->hasFile('doc_deficiency') && $request->file('doc_deficiency')->isValid()) {

            $cpf = $request->cpf;

            $extension = $request->doc_deficiency->extension();

            $nameFile = "laudo_{$cpf}.{$extension}";

            $file_deficiency = $request->doc_deficiency->storeAs('uploads', $nameFile, 'public');
        } else {
            $file_deficiency = null;
        };

        Candidato::create([
            'cpf' => $request->cpf,
            'name' => $request->name,
            'sex' => $request->sex,
            'nationality' => $request->nationality,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'marital_status' => $request->marital_status,
            'parentage_1' => $request->parentage_1,
            'parentage_2' => $request->parentage_2,
            'crm' => $request->crm,
            'rg' => $request->rg,
            'issuing_agency' => $request->issuing_agency,
            'specialization' => $request->specialization,
            'pcd' => $request->pcd,
            'deficiency' => $request->deficiency,
            'cid' => $request->cid,

            'doc_id' => $file_id,
            'doc_cpf' => $file_cpf,
            'doc_cv' => $file_cv,
            'doc_medicine' => $file_medicine,
            'doc_re_esp' => $file_re_esp,
            'doc_crm' => $file_crm,
            'doc_deficiency' => $file_deficiency,

            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return view('website.registrado');
    }

    // public function download($doc_id)
    // {
    //     try {
    //         $file = Candidato::find($doc_id);
    //     } catch (Exception $e) {
    //         return abort(404, $e);
    //     }
    //     return Storage::download($file);
    // }

    public function exclui()
    {
        $candidatos = Candidato::all();
        return view('website.excluir')->with('candidatos', $candidatos);
    }

    public function remove($id)
    {
        $candidato = Candidato::find($id);
        $candidato->delete();
        return redirect()
            ->action('App\Http\Controllers\CandidatoController@exclui');
    }

    public function show($id)
    {
        $candidato = Candidato::findOrFail($id);
        return view('website.dados_candidato', ['candidato' => $candidato]);
    }

    public function home()
    {
        return view('website.home');
    }
}