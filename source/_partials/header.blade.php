@if($page->image)
<header class="site-header outer responsive-header-img" style="background-image: url({{ $page->image }}">
@else
<header class="site-header outer no-image">
@endif
    <div class="inner">
        <div class="site-header-content">
            <h1 class="site-title">
                @if($page->logo)
                    <img class="site-logo" src="{{ $page->logo }}" alt="{{ $page->siteName }}">
                @else
                    {{ $page->siteName }}
                @endif
            </h1>
            <h2 class="site-description">{{ $page->siteDescription }}</h2>
        </div>
        @include('_partials.navbar')
    </div>
</header>