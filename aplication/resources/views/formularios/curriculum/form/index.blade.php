<div class="container-fluid contact">
        <div class="row background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    
                        <div class="col-md-12 text-center">
                            <h2>Envio de Currículos</h2>
                        </div>
    
                        <div class="row justify-content-center " >
                            <div class="content-contact">
                                {!! Form::open([ 'url' => 'emailcurriculum']) !!}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                {{ Form::password('chave', null, ['class' => 'form-control', 'placeholder' => 'Informe a chave de acesso', 'required' => true]) }}
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Informe o nome', 'required' => true]) }}
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Informe o Título', 'required' => true]) }}
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Informe o e-mail', 'required' => true]) }}
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            {{ Form::submit('Enviar e-mail', ['class' => 'btn btn-info btn-block hvr-float-shadow']) }}
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
    
                        
                        @if( !empty($retorno))
                            <div class="row  justify-content-center ">
                                <div class="col-8" style="padding-top:50px;">
                                    <div class="alert alert-primary" role="alert">
                                        {{ $retorno }}
                                    </div>
                                </div>
                            </div>
                        @endif
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    