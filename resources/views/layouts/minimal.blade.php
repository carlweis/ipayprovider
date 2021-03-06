<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('head.seo')
        <script src="https://use.typekit.net/gxc4cnt.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <link rel="icon" href="../../favicon.ico">
        <link rel="stylesheet" href="/css/libs.css">
        <link rel="stylesheet" href="/css/app.css">
        @yield('head.styles')
    </head>
    <body class="minimal">
        @include('partials/minimal-navigation')
        <main id="content" class="minimal">
        @yield('content')
        </main>
        <footer id="global-footer">
            <nav id="footer-nav">
                <ul>
                    <li><a href="/tos">Terms of Use</a></li>
                    <li><a href="/privacy">Privacy Policy</a></li>
                </ul>
            </nav>
            <a id="footer-logo">iPayProvider</a>
            <p class="copyright">&copy;{{date('Y')}} iPayProvider. All Rights Reserved.</p>
        </footer>
        <script src="/js/libs.js"></script>
        @yield('footer.scripts')
    </body>
</html>