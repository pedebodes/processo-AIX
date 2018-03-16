<?php

namespace App\Repositories;

use App\Models\Aluno;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlunoRepository
 * @package App\Repositories
 * @version March 16, 2018, 5:02 pm UTC
 *
 * @method Aluno findWithoutFail($id, $columns = ['*'])
 * @method Aluno find($id, $columns = ['*'])
 * @method Aluno first($columns = ['*'])
*/
class AlunoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'situacao',
        'cep',
        'logradouro',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'avatar',
        'id_curso',
        'turma',
        'data_matricula'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Aluno::class;
    }
}
