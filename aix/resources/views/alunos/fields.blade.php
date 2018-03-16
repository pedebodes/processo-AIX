<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Situacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao', 'Situacao:') !!}
    {!! Form::text('situacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', 'Cep:') !!}
    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
</div>

<!-- Logradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    {!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
</div>

<!-- Complemento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complemento', 'Complemento:') !!}
    {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', 'Bairro:') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', 'Cidade:') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Uf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uf', 'Uf:') !!}
    {!! Form::text('uf', null, ['class' => 'form-control']) !!}
</div>

<!-- Avatar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('avatar', 'Avatar:') !!}
    {{--  {!! Form::text('avatar', null, ['class' => 'form-control']) !!}  --}}
     <input id="avatar" type="file" class="form-control" name="avatar" required>
</div>

<!-- Id Curso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_curso', 'Id Curso:') !!}
    {!! Form::text('id_curso', null, ['class' => 'form-control']) !!}
</div>

<!-- Turma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turma', 'Turma:') !!}
    {!! Form::text('turma', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Matricula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_matricula', 'Data Matricula:') !!}
    {!! Form::text('data_matricula', null, ['class' => 'form-control']) !!}
     
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('alunos.index') !!}" class="btn btn-default">Cancel</a>
</div>
