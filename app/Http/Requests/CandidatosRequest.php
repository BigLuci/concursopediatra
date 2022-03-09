<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidatosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     *
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * 
     */
    public function rules()
    {
        return [
            'cpf' => 'required|unique:candidatos,cpf|min:14',
            'name' => 'required|max:100',
            'sex' => 'required',
            'nationality' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'marital_status' => 'required',
            'parentage_1' => 'required',
            'rg' => 'required|min:3',
            'issuing_agency' => 'required',
            'form_check' => 'required',
            'crm' => 'required',
            'pcd' => 'required',
            'deficiency' => 'required_if:pcd,Sim',
            'cid' => 'required_if:pcd,Sim',
            'specialization' => 'required',
            'phone' => 'required|unique:candidatos,phone',
            'email' => 'required|unique:candidatos,email|max:100',
            'doc_id' => 'required|file|max:5120',
            'doc_id' => 'required|file|max:5120',
            'doc_cpf' => 'required|file|max:5120',
            'doc_cv' => 'required|file|max:5120',
            'doc_medicine' => 'required|file|max:5120',
            'doc_re_esp' => 'required|file|max:5120',
            'doc_crm' => 'required|file|max:5120',
            'doc_deficiency' => 'file|max:5120',
        ];
    }

    public function messages()
    {
        return [
            'cpf.unique' => 'CPF já inscrito no sistema!',
            'cpf.min' => 'O campo CPF deve ter no mínimo 11 caracteres.',
            'name.required' => 'O campo Nome é de preenchimento obrigatório.',
            'sex.required' => 'O campo Sexo é de seleção obrigatória.',
            'nationality.required' => 'O campo Nacionalidade é de preenchimento obrigatório.',
            'birth_place.required' => 'O campo Naturalidade é de preenchimento obrigatório.',
            'birth_date.required' => 'O campo Data de Nascimento é de preenchimento obrigatório.',
            'marital_status.required' => 'O campo Estado Civil é de seleção obrigatória.',
            'parentage_1.required' => 'O campo Filiação I é de preenchimento obrigatório.',
            'rg.required' => 'O campo RG é de preenchimento obrigatório.',
            'rg.min' => 'O campo RG deve ter no mínimo 3 caracteres.',
            'rg.numeric' => 'O campo RG deve conter apenas números.',
            'issuing_agency.required' => 'O campo Órgão Emissor é de preenchimento obrigatório.',
            'form_check.required' => 'A caixa de validação é de marcação obrigatória.',
            'pcd.required' => 'O campo PCD é de seleção obrigatória.',

            'phone.unique' => 'Número de telefone já inscrito',
            'email.unique' => 'Endereço de emai-l já inscrito',

            'deficiency.required_if' => 'O campo tipo de deficiência, em caso de PCD, é obrigatório.',
            'cid.required_if' => 'O campo de classificação de doença, em caso de PCD, é obrigatório.',

            'specialization.required' => 'O campo Especialidade é de seleção obrigatória.',
            'crm.required' => 'O campo CRM é de preenchimento obrigatório.',

            'doc_id.required' => 'O envio do documento de identidade é obrigatório',
            'doc_id.max' => 'O tamanho do arquivo de identidade não pode ultrapassar 5MB',

            'doc_cpf.required' => 'O envio do documento de CPF é obrigatório',
            'doc_cpf.max' => 'O tamanho do arquivo de CPF não pode ultrapassar 5MB',
            
            'doc_cv.required' => 'O envio do currículo é obrigatório',
            'doc_cv.max' => 'O tamanho do arquivo de currículo não pode ultrapassar 5MB',

            'doc_medicine.required' => 'O envio da cópia do diploma é obrigatório',
            'doc_medicine.max' => 'O tamanho do arquivo da cópia de diploma não pode ultrapassar 5MB',

            'doc_re_esp.required' => 'O envio do documento de residência ou especialização é obrigatório',
            'doc_re_esp.max' => 'O tamanho do arquivo de cópia de residência ou especialização não pode ultrapassar 5MB',

            'doc_crm.required' => 'O envio do documento de inscrição no CRM é obrigatório',
            'doc_crm.max' => 'O tamanho do arquivo de inscrição no CRM não pode ultrapassar 5MB',

            'doc_deficiency.required_if' => 'O envio do laudo médico, em caso de PCD, é obrigatório.',
            'doc_deficiency.max' => 'O tamanho do arquivo do laudo médico não pode ultrapassar 5MB',

            'phone.required' => 'O campo Telefone é de preenchimento obrigatório.',
            'email.required' => 'O campo E-mail é de preenchimento obrigatório.',
            'email.unique' => 'Endereço de e-mail já inscrito no sistema.',
        ];
    }
}
