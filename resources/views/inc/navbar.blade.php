<div class="container">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="/">ТР ПЛУС</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link {{ Request::is('o-nama') ? 'active' : '' }}" href="/o-nama">О Нама</a></li>
                       {{--  <li class="nav-item" role="presentation"><a class="nav-link {{ Request::is('usluge') ? 'active' : '' }}" href="/usluge">Услуге</a></li> --}}
                        <li class="nav-item" role="presentation"><a class="nav-link {{ Request::is('proizvodi') ? 'active' : '' }}" href="/proizvodi">Производи</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link {{ Request::is('kontakt') ? 'active' : '' }}" href="/kontakt">Контакт</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">ПАДАЈУЋИ МЕНИ</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation">НЕШТО</a>
                                <a class="dropdown-item" role="presentation">НЕШТО</a>
                                <a class="dropdown-item" role="presentation">НЕШТО</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>