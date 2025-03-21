<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }

        footer {
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="#80cbc4 teal lighten-3">
        <div class="nav-wrapper container">
            <a href="{{ route('user.index') }}" class="brand-logo center">Projeto Nefrologia</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right">
                <i class="material-icons">menu</i>
            </a>

            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li>
                    <a href="{{ route('user.index') }}" class="valign-wrapper">
                        <span class="material-icons" style="margin-left: 5px;">home</span>Home
                    </a>
                </li>
                <li>
                    <a href="" class="valign-wrapper">
                        <span class="material-icons" style="margin-left: 5px;">play_arrow</span>Vídeos
                    </a>
                </li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li>
                    <a class="dropdown-trigger valign-wrapper" href="#!" data-target="dropdown-admin">
                        <span class="material-icons" style="margin-right: 5px;">admin_panel_settings</span>Admin
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
            </ul>

            <!-- Dropdown Structure -->
            <ul id="dropdown-admin" class="dropdown-content" style="top: 100% !important;">
                <li><a href="{{ route('login.form') }}">Logar</a></li>
                @if (Auth::check())
                    <li><a href="{{ route('login.logout') }}">Sair</a></li>
                @endif
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li>
            <a href="{{ route('user.index') }}" class="valign-wrapper">
                <span class="material-icons" style="margin-left: 5px;">home</span>Home
            </a>
        </li>
        <li>
            <a href="" class="valign-wrapper">
                <span class="material-icons" style="margin-left: 5px;">play_arrow</span>Vídeos
            </a>
        </li>
        <li>
            <ul class="collapsible">
                <li>
                    <div class="collapsible-header valign-wrapper">
                        <span class="material-icons" style="margin-right: 5px;">admin_panel_settings</span>Admin
                        <i class="material-icons right">arrow_drop_down</i>
                    </div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ route('login.form') }}">Logar</a></li>
                            @if (Auth::check())
                                <li><a href="{{ route('login.logout') }}">Sair</a></li>
                            @endif
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>

    <div class="content">
        @yield('conteudo')
    </div>

    <footer class="page-footer teal lighten-3" style="padding: 0; margin: 0;">
        <div style="display: flex; justify-content: center; align-items: center; padding: 8px 0; width: 100%;">
            <h6 class="white-text" style="margin: 0; font-size: 1rem;">
                Projeto desenvolvido pelo IFPR
            </h6>
        </div>
        <div
            style="background-color: #004d40; display: flex; justify-content: center; align-items: center; padding: 4px 0; width: 100%;">
            <p class="white-text" style="margin: 0; font-size: 0.8rem;">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4" href="" style="font-size: 0.8rem;">IFPR</a>
            </p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems);

            var dropdowns = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(dropdowns, {
                alignment: 'right',
                constrainWidth: false,
                coverTrigger: false
            });

            var collapsibles = document.querySelectorAll('.collapsible');
            M.Collapsible.init(collapsibles);
        });
    </script>
</body>

</html>