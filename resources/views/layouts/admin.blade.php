<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="XUA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,intial-scale=1">
        
        <!--csrf-->
        <meta name="csrf-token" content="{{csrf_token() }}">
        
        <!--各ページにタイトルタグを入れる-->
        <title>@yield('title')</title>
        
        <!--script-->
        <script src="{{ secure_asset('js/app.js') }}"defer></script>
        
        <!--fonts-->
        <link rel="dnss-prefetch" href="https:fonts.gstatic.com">
        <link href="https://fontsgoogleapis.com/css?family=Ralewau:300,400,600" rel="stylesheet" type="text/css">
        
        <!--cssを読み込む-->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        
        <!--後半で作成するcssを読み込む-->
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        
        
    </head>
    
    <body>
        <div id="app"><link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" tupe="button" data-toggler="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <!--left side navber-->
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                        
                        <!--right side navber-->
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!--ここまでがナビゲーションバー-->
            
            <main class="py-4">
                <!--各ページのコンテンツを入れるため空ける-->
                @yield('content')
            </main>
        </div>
    </body>
</html>