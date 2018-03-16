<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Aluno
 * @package App\Models
 * @version March 16, 2018, 1:12 pm UTC
 *
 * @property string nome
 * @property string situacao
 * @property string cep
 * @property string logradouro
 * @property string complemento
 * @property string bairro
 * @property string cidade
 * @property string uf
 * @property string avatar
 */
class Aluno extends Model
{
    use SoftDeletes;

    public $table = 'alunos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'situacao',
        'cep',
        'logradouro',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'avatar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string',
        'situacao' => 'string',
        'cep' => 'string',
        'logradouro' => 'string',
        'complemento' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'uf' => 'string',
        'avatar' => 'file'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'avatar' => 'mimes:jpeg,jpg,png'
    ];

    
}
