<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">

            <li><a class="ai-icon" href="{{ route('dashboard') }}" aria-expanded="false">
                    <i class="la la-calendar"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-user"></i>
                    <span class="nav-text">Activités</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('activites.index') }}">Liste</a></li>
                    <li><a href="{{ route('activites.create') }}">Ajouter</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Services</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('services.index') }}">Liste</a></li>
                    <li><a href="{{ route('services.create') }}">Ajouter</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-graduation-cap"></i>
                    <span class="nav-text">Annexes</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('annexes.index') }}">Liste</a></li>
                    <li><a href="{{ route('annexes.create') }}">Ajouter</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-book"></i>
                    <span class="nav-text">Partenaires</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('partenaires.index') }}">Liste</a></li>
                    <li><a href="{{ route('partenaires.create') }}">Ajouter</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-book"></i>
                    <span class="nav-text">Témoignages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('temoignages.index') }}">Liste</a></li>
                    <li><a href="{{ route('temoignages.create') }}">Ajouter</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
