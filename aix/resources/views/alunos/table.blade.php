<table class="table table-responsive" id="alunos-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Situacao</th>
        <th>Cep</th>
        <th>Logradouro</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Uf</th>
        <th>Avatar</th>
        <th>Id Curso</th>
        <th>Turma</th>
        <th>Data Matricula</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alunos as $aluno)
        <tr>
            <td>{!! $aluno->nome !!}</td>
            <td>{!! $aluno->situacao !!}</td>
            <td>{!! $aluno->cep !!}</td>
            <td>{!! $aluno->logradouro !!}</td>
            <td>{!! $aluno->complemento !!}</td>
            <td>{!! $aluno->bairro !!}</td>
            <td>{!! $aluno->cidade !!}</td>
            <td>{!! $aluno->uf !!}</td>
         <td><img src="{!! $aluno->avatar !!}" height="42" width="42"></td>
            <td>{!! $aluno->id_curso !!}</td>
            <td>{!! $aluno->turma !!}</td>
            <td>{!! $aluno->data_matricula !!}</td>
            <td>
                {!! Form::open(['route' => ['alunos.destroy', $aluno->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('alunos.show', [$aluno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('alunos.edit', [$aluno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>