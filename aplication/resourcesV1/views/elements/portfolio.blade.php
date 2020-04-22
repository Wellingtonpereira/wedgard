<div class="container-fluid portfolio" id="portfolio">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 text-center">
                <h2>Portfólio</h2>
                <hr><br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row justify-content-md-center justify-content-lg-center simplefilter">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-auto icon text-center box-filter active" data-filter="all">
                    <i class="fas fa-chart-line fa-2x"></i>
                    <h6>Todos</h6>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-auto icon text-center box-filter" data-filter="globe">
                    <i class="fas fa-globe fa-2x "></i>
                    <h6>Site</h6>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-auto icon text-center box-filter" data-filter="desktop">
                    <i class="fas fa-desktop fa-2x "></i>
                    <h6>Sistemas Web</h6>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-auto icon text-center box-filter" data-filter="mobile">
                    <i class="fas fa-mobile-alt fa-2x "></i>
                    <h6>Aplicativos</h6>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-auto icon text-center box-filter" data-filter="cart">
                    <i class="fas fa-shopping-cart fa-2x "></i>
                    <h6>E-commerce</h6>
                </div>
            </div>

            <div class="filtr-container box">
                <div class="row">
                    
                    @php( $data = ( new \App\Http\Controllers\PortfolioController)->index() ) 

                    @foreach( $data as $dt)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="{{ $dt['category'] }}">
                                <div class="hovereffect">
                                    <img class="img-fluid" src="{{asset( $dt['img'] )}}" alt="">
                                    <div class="overlay">
                                        <h2>{{ $dt['title'] }}</h2>
                                        <p>
                                            {{ $dt['description'] }}
                                        </p>
                                        <p>
                                            <a href="{{ asset('/#contato') }}"><i class="fa-box fas fa-envelope fa-2x"></i></a>
                                            <a data-toggle="modal" data-target="#modalPortfolio" onclick="dataModal('{!! $dt['project'] !!}', '{!! $dt['category'] !!}')"><i class="fa-box fas fa-folder-open fa-2x"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
