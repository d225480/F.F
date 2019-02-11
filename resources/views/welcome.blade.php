
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
  

      

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Styles -->
        <script src="{{ asset('/js/app.js') }}"></script> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="mdl-layout mdl-js-layout ">
                <header class="mdl-layout__header">
                    <div class="mdl-layout__header-row">
                        <span class="mdl-layout-title">Title</span>
                        <div class="mdl-layout-spacer"></div>
                            <nav class="mdl-navigation mdl-layout--large-screen-only">
                                <a class="mdl-navigation__link" href="">Link</a>
                                <a class="mdl-navigation__link" href="">Link</a>
                                <a class="mdl-navigation__link" href="">Link</a>
                                <a class="mdl-navigation__link" href="">Link</a>
                            </nav>
                        </div>
                </header>
            </div>
        </div> 
        <div class="container" style="">
        <h1>Login</h1>
        <form action="#">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Text...</label>
            </div>
        </form>
        </div>
        <div class="mdl-layout mdl-layout__footer">
            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">Title</div>
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy & Terms</a></li>
                    </ul>
                </div>
            </footer>
        </div>
        <script src="{{asset('/js/vueinit.js')}}"></script>
    </body>
</html>
