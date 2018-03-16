@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Curso
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')


 <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">XML Import</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ URL::to('carga') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="xml_file" class="col-md-4 control-label">Importar XML</label>
                                <div class="col-md-6">
                                    <input id="xml_file" type="file" class="form-control" name="xml_file" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Processar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    
    
    
    </div>
@endsection