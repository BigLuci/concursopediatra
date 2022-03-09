<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidato extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'candidatos';

    protected $fillable = [
        'cpf',
        'name',
        'sex',
        'nationality',
        'birth_place',
        'birth_date',
        'marital_status',
        'parentage_1',
        'parentage_2',
        'crm',
        'rg',
        'issuing_agency',
        'pcd',
        'specialization',
        'deficiency',
        'cid',
        'doc_id',
        'doc_cpf',
        'doc_cv',
        'doc_medicine',
        'doc_re_esp',
        'doc_crm',
        'doc_deficiency',
        'phone',
        'email',
    ];
}
