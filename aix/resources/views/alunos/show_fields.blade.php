<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Matricula:') !!}
    <p>{!! $aluno->id !!}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $aluno->nome !!}</p>
</div>

<!-- Situacao Field -->
<div class="form-group">
    {!! Form::label('situacao', 'Situacao:') !!}
    {{--  <p>{!! $aluno->situacao !!}</p>  --}}
        <p>@if($aluno->situacao == "A")
                    Ativo
                @else
                Inativo
            @endif           
      </p>
</div>

<!-- Cep Field -->
<div class="form-group">
    {!! Form::label('cep', 'Cep:') !!}
    <p>{!! $aluno->cep !!}</p>
</div>

<!-- Logradouro Field -->
<div class="form-group">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    <p>{!! $aluno->logradouro !!}</p>
</div>

<!-- Complemento Field -->
<div class="form-group">
    {!! Form::label('complemento', 'Complemento:') !!}
    <p>{!! $aluno->complemento !!}</p>
</div>

<!-- Bairro Field -->
<div class="form-group">
    {!! Form::label('bairro', 'Bairro:') !!}
    <p>{!! $aluno->bairro !!}</p>
</div>

<!-- Cidade Field -->
<div class="form-group">
    {!! Form::label('cidade', 'Cidade:') !!}
    <p>{!! $aluno->cidade !!}</p>
</div>

<!-- Uf Field -->
<div class="form-group">
    {!! Form::label('uf', 'Uf:') !!}
    <p>{!! $aluno->uf !!}</p>
</div>

<!-- Avatar Field -->
<div class="form-group">
    {!! Form::label('avatar', 'Avatar:') !!}
    {{--  <p>{!! $aluno->avatar !!}</p>  --}}
    <p><img src="{!! $aluno->avatar !!}" height="42" width="42"></p>
</div>

<!-- Id Curso Field -->
<div class="form-group">
    {!! Form::label('id_curso', 'Curso:') !!}
    <p>{!! $curso->nome !!}</p>
</div>

<!-- Turma Field -->
<div class="form-group">
    {!! Form::label('turma', 'Turma:') !!}
    <p>{!! $aluno->turma !!}</p>
</div>

<!-- Data Matricula Field -->
<div class="form-group">
    {!! Form::label('data_matricula', 'Data Matricula:') !!}
    <p>{!! $aluno->data_matricula !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $aluno->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $aluno->updated_at !!}</p>
</div>

