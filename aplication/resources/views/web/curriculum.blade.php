@extends('components.template')

@section('content')
    
<div class="container">
    <div class="row justify-content-between top" style="padding-bottom: 32px; text-align: center;">
        <div class="col-12">
            <div class="col-md-12 box-title-profile">
                <h1 class="title-profile" style="font-weight: bold;">curriculum</h1> 
            </div>            
        </div>
    </div>

    <div class="row justify-content-between top">
        <div class="col-9">

            <div class="col-md-12 box-title-profile">
                <h1 class="title-profile">wellington edgard ribeiro pereira</h1> 
            </div>
            <div class="col-md-12">
                <ul>
                    <li><i class="fas fa-caret-right"></i> <span>Idade:</span><b>&nbsp;30 anos</b></li>
                    <li><i class="fas fa-caret-right"></i> <span>Sexo:</span><b>&nbsp;&nbsp;&nbsp;Masculino</b></li>
                    <li><i class="fas fa-caret-right"></i> <span>Cidade:</span><b>&nbsp;&nbsp;&nbsp;Lins/SP</b></li>
                    <li><i class="fas fa-caret-right"></i> <span>Whatsapp:</span><b>&nbsp;&nbsp;&nbsp;(14) 99637-6294</b></li>
                    <li><i class="fas fa-caret-right"></i> <span>E-mail:</span><b>&nbsp;&nbsp;&nbsp;wedgard.pereira@gmail.com</b></li>
                </ul>
            </div>
        </div>
        <div class="col-3">
            <div class="col-md-65">

                <img src="{{ asset('/public/images/profile.jpeg')}}" class="img-profile">
            </div>
        </div>
    </div>

    <div class="row justify-content-between top">
        <div class="col-12">
            <div class="col-md-12 box-title-profile">
                <h1 class="title-profile">Sobre mim</h1> 
            </div>
            <div class="col-md-12">
                <p>Focado no meu trabalho, procuro sempre otimizar processos e rotinas. 
                    Sou uma pessoa que não tem receio de perguntar e não guardo meus conhecimentos apenas para mim. 
                    Acredito que a partilha é a melhor forma de se conseguir a evolução profissional e pessoal.
                    Autodidata e curioso nato, procuro melhorar cada vez mais as minhas capacidades profissionais buscando a excelência naquilo que faço.
                </p>
            </div>
        </div>
    </div>

    <div class="row justify-content-between top">
        <div class="col-12">
            <div class="col-md-12 box-title-profile">
                <h1 class="title-profile">Minhas Qualidades</h1> 
            </div>
            <div class="col-md-12 chart-container">
                    <canvas id="chart"></canvas>                
            </div>
        </div>
    </div>

    <div class="row justify-content-between top">
        <div class="col-12">
            <div class="col-md-12 box-title-profile">
                <h1 class="title-profile">Minha formação</h1> 
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fas fa-caret-right"></i> 
                        Formado em <b>Técnologia em Analise de Sistemas</b> pela faculdade Unilins, situada na cidade de Lins/SP com data de formação em 01/06/2012.
                    </li>
                    <li>
                        <i class="fas fa-caret-right"></i> 
                        Curso <b>técnico em Administração</b> pela instituição Etec.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row justify-content-between top">
        <div class="col-12">
            <div class="col-md-12 box-title-profile">
                <h1 class="title-profile">Minha experiência profissional</h1> 
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fas fa-caret-right"></i> 
                        Em minha primeira experiência profissional, fui secretário de uma paróquia na cidade de Guaimbê, cumprindo um contrato por licença médica na Paróquia Nossa Senhora Aparecida.
                    </li>
                    <li>
                        <i class="fas fa-caret-right"></i> 
                        Em minha segunda oportunidade profissional, onde no período de 8 anos, exerci funções de Auxiliar geral de produção até Auxiliar Administrativo. 
                        Em 2014, senti a necessidade em focar na minha área de formação e com um acordo comum, fui desligado da empresa BSB - Brazil Safety Brands.
                    </li>
                    <li>
                        <i class="fas fa-caret-right"></i> 
                        Minha vida profissional na área de formação, se inícia em meados de 2014, com projetos pessoais para melhorar as competências técnicas e trabalhando como freelancer na empresa de marketing Lepix. 
                    </li>
                    <li>
                        <i class="fas fa-caret-right"></i> 
                        Em Agosto de 2016, dei início a minha vida profissional como Pessoa jurídica, onde presto serviços para uma empresa de marketing, a Orpit.
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div>

@endsection
@section('scripts')
    @parent
    <script>
        var data = {
                    labels: ["Mysql", "OO", "PHP", "Laravel", "JS", "Jquery", "CSS", "VueJs"],
                    datasets: [{
                            backgroundColor: "#cacaca",
                            data: [60, 65, 70, 60, 65, 65, 60, 30],
                        }]
                        
                    };

        var options = {
                    lineWidth: 100,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            stacked: true,
                            gridLines: {
                                display: true,
                                color: "#fff"
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                display: false
                            }
                        }]
                    }
                };
        Chart.Bar('chart', {
            options: options,
            data: data
        });

    </script>
@endsection