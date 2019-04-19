<nav class="site-nav">
    <div class="site-nav-left">
        @if($page->getPath() !== '/')
            @if($page->logo)
            <a class="site-nav-logo" href="{{ $page->baseUrl }}"><img src="{{ $page->logo }}" alt="{{ $page->siteName }}" /></a>
            @else
            <a class="site-nav-logo" href="{{ $page->baseUrl }}">{{ $page->siteName }}</a>
            @endif
        @endif

        <ul class="nav" role="menu">
            <li class="" role="menuitem"><a href="/">Blog</a></li>
            <li class="" role="menuitem"><a href="/about">About</a></li>
            <li class="" role="menuitem"><a href="/contact">Contact</a></li>
        </ul>
    </div>
    <div class="site-nav-right">
        {{--<div class="social-links">--}}
            {{--{{#if @site.facebook}}--}}
            <a class="social-link social-link-fb" href="{{ $page->socials->facebook->link }}" title="Facebook" target="_blank" rel="noopener">Facebook</a>
            {{--{{/if}}--}}
{{--            {{#if @site.twitter}}--}}
            {{--<a class="social-link social-link-tw" href="{{ $page->socials->twitter->link }}" title="Twitter" target="_blank" rel="noopener">@include('_partials.icons.twitter')</a>--}}
            {{--{{/if}}--}}
        {{--</div>--}}
        @if($page->subscribe)
        <a class="subscribe-button" href="#subscribe">Subscribe</a>
        @endif
        {{--{{else}}--}}
        {{--<a class="rss-button" href="#" title="RSS" target="_blank" rel="noopener">@include('_partials.icons.rss')</a>--}}
        {{--{{/if}}--}}
    </div>
</nav>
