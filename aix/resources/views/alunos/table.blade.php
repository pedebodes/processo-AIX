<table class="table table-responsive " id="alunos-table" style="overflow-x:auto;">
    <thead>
        <tr>
             <th>Matricula</th>
            <th>Nome</th>
        <th>Situacao</th>
        <th>Cep</th>
        <th>Logradouro</th>
        {{--  <th>Complemento</th>  --}}
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Uf</th>
        <th>Avatar</th>
        <th>Curso</th>
        <th>Turma</th>
        <th>Data Matricula</th>
            <th colspan="3">Ação</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alunos as $aluno)
        <tr>
             <td>{!! $aluno->id !!}</td>
            <td>{!! $aluno->nome !!}</td>
            <td>
            @if($aluno->situacao == 'A')
                Ativo
            @else
                Inativo
             @endif   
            </td>
            <td>{!! $aluno->cep !!}</td>
            <td>{!! $aluno->logradouro !!} - {!! $aluno->complemento !!}</td>
            {{--  <td>{!! $aluno->complemento !!}</td>  --}}
            <td>{!! $aluno->bairro !!}</td>
            <td>{!! $aluno->cidade !!}</td>
            <td>{!! $aluno->uf !!}</td>    
            <td><img src="{!! $aluno->avatar !!}" height="42" width="42"></td>
            <td>{!! $aluno->curso !!}</td>
            <td>{!! $aluno->turma !!}</td>
            <td>{!! date('d/m/Y',strtotime($aluno->data_matricula)) !!}</td>
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