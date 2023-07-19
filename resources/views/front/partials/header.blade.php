
<!-- navigation -->
<header>
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item">
                            <a href="mailto:info@companyname.com">portetvbenin@gmail.com</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="callto:1234565523">Nous contacter:
                                <span class="ml-2"> (00229) 62529471 / 96927055</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" id="searchOpen">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <div class="navigation">
        <div class="container-fluid px-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ route('accueil') }}">
                    <img src="{{ asset('front/images/membre/logo.svg') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto w-50 justify-content-between">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                L'Eglise
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="{{ route('about') }}">A propos</a>
                                <a class="dropdown-item" href="{{ route('equipe') }}">L'équipe</a>
                                <a class="dropdown-item" href="{{ route('annexe') }}">Annexes</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Activités
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="{{ route('activite') }}">Nos activités</a>
                                <a class="dropdown-item" href="{{ route('apointments.index') }}">Rendez-vous</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>

                        <li class="nav-item d-flex align-items-center justify-content-center ">
                            <a class="nav-link" href="">Faire un don</a>
                        </li>
                        <li class="nav-item d-flex align-items-center justify-content-center border border-dark px-3 bg-dark text-white ">
                            <a class="nav-link text-white" href="{{ route('mediatheque') }}">Médiathèque</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Search Form -->
<div class="search-form">
    <a href="#" class="close" id="searchClose">
        <i class="ti-close"></i>
    </a>
    <div class="container">
        <form action="#" class="row">
            <div class="col-lg-10 mx-auto">
                <h3>Search Here</h3>
                <div class="input-wrapper">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Enter Keywords..." required>
                    <button>
                        <i class="ti-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /navigation -->

