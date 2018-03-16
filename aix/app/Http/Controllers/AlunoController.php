<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlunoRequest;
use App\Http\Requests\UpdateAlunoRequest;
use App\Repositories\AlunoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Aluno;
use App\Models\Curso;
use DB;

class AlunoController extends AppBaseController
{
    /** @var  AlunoRepository */
    private $alunoRepository;

    public function __construct(AlunoRepository $alunoRepo)
    {
        $this->alunoRepository = $alunoRepo;
    }

    /**
     * Display a listing of the Aluno.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $sql = "select a.*,c.nome as curso from alunos a inner join cursos c on a.id_curso = c.id";
        $alunos = DB::select($sql);
        return view('alunos.index')
            ->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new Aluno.
     *
     * @return Response
     */
    public function create()
    {
        $curso = Curso::all();
        return view('alunos.create')->with('curso', $curso);;
    }

    /**
     * Store a newly created Aluno in storage.
     *
     * @param CreateAlunoRequest $request
     *
     * @return Response
     */
    public function store(CreateAlunoRequest $request)
    {
        $input = $request->all();

        $aluno = $this->alunoRepository->create($input);

        $imageName = base64_encode($request->nome . date('Y-m-d H:i:s')) . '.' . $request->file('avatar')->getClientOriginalExtension();
        $request->file('avatar')->move(base_path() . '/public/avatar/', $imageName);

        $aluno = $this->alunoRepository->findWithoutFail($aluno->id);
        $aluno->avatar = '/avatar/' . $imageName;
        $aluno->save();
 
        Flash::success('Aluno saved successfully.');

        return redirect(route('alunos.index'));
    }

    /**
     * Display the specified Aluno.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aluno = $this->alunoRepository->findWithoutFail($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }

        $curso = Curso::find($aluno->id_curso);
        
        return view('alunos.show')->with('aluno', $aluno)->with('curso', $curso);
    }

    /**
     * Show the form for editing the specified Aluno.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aluno = $this->alunoRepository->findWithoutFail($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }


        $curso = Curso::all();
         return view('alunos.edit')->with('aluno', $aluno)->with('curso',$curso);

    }

    /**
     * Update the specified Aluno in storage.
     *
     * @param  int              $id
     * @param UpdateAlunoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlunoRequest $request)
    {
        $aluno = $this->alunoRepository->findWithoutFail($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }

        $aluno = $this->alunoRepository->update($request->all(), $id);

        $imageName = base64_encode($request->nome . date('Y-m-d H:i:s')) . '.' . $request->file('avatar')->getClientOriginalExtension();
        $request->file('avatar')->move(base_path() . '/public/avatar/', $imageName);

        $aluno = $this->alunoRepository->findWithoutFail($id);
        $aluno->avatar = '/avatar/' . $imageName;
        $aluno->save();

        Flash::success('Aluno updated successfully.');

        return redirect(route('alunos.index'));
    }

    /**
     * Remove the specified Aluno from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aluno = $this->alunoRepository->findWithoutFail($id);

        if (empty($aluno)) {
            Flash::error('Aluno not found');

            return redirect(route('alunos.index'));
        }

        $this->alunoRepository->delete($id);

        Flash::success('Aluno deleted successfully.');

        return redirect(route('alunos.index'));
    }
}
