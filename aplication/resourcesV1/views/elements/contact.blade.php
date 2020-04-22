<div class="container-fluid contact">
    <div class="row background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                
                    <div class="col-md-12 text-center">
                        <h1>Entre em contato</h1>
                        <hr><br>
                    </div>

                    <div class="row">
                        <div class="col box-contact hvr-grow">
                            <i class="fab fa-whatsapp fa-2x"></i>
                            <h5>whatsapp</h5>
                            <a href="tel:+5514996376294"><h6>+55 (14) 99637-6294</h6></a>
                        </div>
                        <div class="col box-contact hvr-grow">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <h5>Endereço</h5>
                            <h6>R. João José Garcez Novaes, nº 530</h6>
                            <h6>Lins-São Paulo - Brasil</h6>
                        </div>
                        <div class="col box-contact hvr-grow">
                            <i class="far fa-envelope-open fa-2x"></i>
                            <h5>E-mail</h5>
                             <a href="mailto:contato@wedgard.com"><h6>contato@wedgard.com</h6></a>
                        </div>
                    </div>

                    <div class="row justify-content-md-center "  id="contato">
                        <div class="content-contact">
                            {!! Form::open([ 'route' => 'contato']) !!}
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Informe o seu nome', 'required' => true]) }}
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Informe o seu e-mail', 'required' => true]) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Informe o motivo do contato', 'required' => true]) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                {{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Deixe aqui a sua mensagem', 'rows' => 10, 'required' => true]) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            {{ Form::submit('Entrar em contato', ['class' => 'btn btn-default btn-block hvr-float-shadow']) }}
                                        </div>
                                    </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
