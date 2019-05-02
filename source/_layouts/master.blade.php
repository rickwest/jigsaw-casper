<!DOCTYPE html>
<html lang="en">
<head>
    @if($page->production && $page->gaTrackingId)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $page->gaTrackingId }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ $page->gaTrackingId }}');
        </script>
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

    <link rel="icon" type="image/png" href="{{ $page->icon }}"/>

    @section('meta')
        <!-- Search Engine -->
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}">
        <meta itemprop="description" content="{{ $page->description ?? $page->siteDescription }}">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}">
        <meta name="twitter:description" content="{{ $page->description ?? $page->siteDescription }}">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}">
        <meta name="og:description" content="{{ $page->description ?? $page->siteDescription }}">
        <meta name="og:type" content="website">
    @show

    <!-- Casper styles -->
    <link rel="stylesheet" href="/assets/build/screen.css">

    <!-- Front Awesome icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

</head>
<body class="@yield('body-class', 'home-template')">
    <div class="site-wrapper">
        @yield('body')
        @include('_partials.footer')
    </div>

    <!-- The big email subscribe modal content -->
    @if($page->subscribe)
        <div id="subscribe" class="subscribe-overlay">
            <a class="subscribe-overlay-close" href="#"></a>
            <div class="subscribe-overlay-content">
                @if($page->logo)
                    <img class="subscribe-overlay-logo" src="{{ $page->logo }}" alt="{{ $page->siteName }}"/>
                @endif
                <h1 class="subscribe-overlay-title">Subscribe to {{ $page->siteName }}</h1>
                <p class="subscribe-overlay-description">Stay up to date! Get all the latest &amp; greatest posts delivered straight to your inbox</p>
                <form action="https://tinyletter.com/rickwest" method="post" target="popupwindow"
                      onsubmit="window.open('{{ $page->subscribe }}', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">

                    <div class="form-group">
                        <input class="subscribe-email" type="email" name="email" id="tlemail"
                               placeholder="youremail@example.com"/>
                    </div>
                    <input type="hidden" value="1" name="embed"/>
                    <button id="" class="" type="submit"><span>Subscribe</span></button>
                </form>
            </div>
        </div>
    @endif

    <!-- Casper scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/assets/build/jquery.fitvids.js"></script>
    <script type="text/javascript" src="/assets/build/infinitescroll.js"></script>

    @yield('scripts')
</body>
</html>