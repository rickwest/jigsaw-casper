<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

    <link rel="icon" type="image/png" href="{{ $page->icon }}"/>

    <link rel="stylesheet" href="/assets/build/screen.css">

    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
</head>
<body class="@yield('body-class', 'home-template')">
    <div class="site-wrapper">

        @yield('body')

        {{-- The footer at the very bottom of the screen --}}
        @include('_partials.footer')
    </div>

    {{--The big email subscribe modal content--}}
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
                      onsubmit="window.open('https://tinyletter.com/rickwest', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">

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

    <script>
        var images = document.querySelectorAll('.kg-gallery-image img');
        images.forEach(function (image) {
            var container = image.closest('.kg-gallery-image');
            var width = image.attributes.width.value;
            var height = image.attributes.height.value;
            var ratio = width / height;
            container.style.flex = ratio + ' 1 0%';
        })
    </script>

    {{--jQuery + Fitvids, which makes all video embeds responsive--}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="/assets/build/jquery.fitvids.js"></script>
    <script type="text/javascript" src="/assets/build/infinitescroll.js"></script>

    @yield('scripts')
</body>
</html>