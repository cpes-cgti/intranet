<header>
    <div class="row" id="barra-titulo">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-6">
                    <img src="{{ asset('img/ifpe.png') }}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h1>Campus Pesqueira</h1>
                    <h3>INTRANET</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="barra-opcoes">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-10 col-xs-4 col-xs-offset-8">
                        @auth
                            <a href="{{ route('home') }}" class="btn btn-success btn-block">
                                <i class="fa fa-fw fa-unlock"></i>Área restrita
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-success btn-block">
                                <i class="fa fa-fw fa-lock"></i>Área restrita
                            </a>
                        @endauth
                </div>
            </div>
        </div>
    </div>
</header>