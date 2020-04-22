<div class="container-fluid portfolio container-fluid-portfolio  box-margin" id="portfolio">
    <div class="container-fluid "style="background:#fff">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 text-center">
                    <h2>Portfólio</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row box-bg">
        <div class="col-md-12">
            <div class="row justify-content-center  simplefilter">
                <div class="col-md-1 col-sm-2 col-6 col-xs-auto icon text-center box-filter active" data-filter="all">
                    <i class="fas fa-chart-line"></i>
                    <h6>Todos</h6>
                </div>
                <div class="col-md-1 col-sm-2 col-6 col-xs-auto icon text-center box-filter" data-filter="globe">
                    <i class="fas fa-globe "></i>
                    <h6>Site</h6>
                </div>
                <div class="col-md-1 col-sm-2 col-6 col-xs-auto icon text-center box-filter" data-filter="desktop">
                    <i class="fas fa-desktop  "></i>
                    <h6>Sistemas Web</h6>
                </div>
                <div class="col-md-1 col-sm-2 col-6 col-xs-auto icon text-center box-filter" data-filter="mobile">
                    <i class="fas fa-mobile-alt "></i>
                    <h6>Aplicativos</h6>
                </div>
                <div class="col-md-1 col-sm-2 col-6 col-xs-auto icon text-center box-filter" data-filter="cart">
                    <i class="fas fa-shopping-cart"></i>
                    <h6>E-commerce</h6>
                </div>
            </div>

            <div class="filtr-container box">
                <div class="row row-itens">
                    
                    @php( $data = ( new \App\Http\Controllers\PortfolioController)->index() ) 
                    @php( $i = 0 )
                    @foreach( $data as $dt)

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 filtr-item " data-category="{{ $dt['category'] }}">
                            <div class="hovereffect box-item">
                                <div style="background-image:url({{asset( $dt['img'] )}});" class="img-portfolio">

                                    <div class="overlay">
                                        <div class="content">
                                            <h4>{{ $dt['title'] }}</h4>
                                            <p>
                                                {{ $dt['description'] }}
                                            </p>
                                            <a href="{{ asset('/#contato') }}"><i class="fa-box fas fa-envelope"></i></a>
                                            <a data-toggle="modal" data-target="#modalPortfolio" onclick="dataModal('{!! $dt['project'] !!}', '{!! $dt['category'] !!}')"><i class="fa-box fas fa-folder-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach    
                </div>
            </div>
        </div>
    </div>
</div>
    