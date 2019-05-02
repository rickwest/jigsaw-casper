@if($page->image)
    <header class="site-header outer responsive-header-img" style="background-image: url({{ $page->image }}">
@else
    <header class="site-header outer no-image">
@endif
    <div class="inner">
        @if($page->getPath() !== '/')@include('_partials.navbar')@endif
        <div class="site-header-content">
            <h1 class="site-title">
                @if($page->getPath() === '/')
                    @if($page->logo)
                        <img class="site-logo" src="{{ $page->logo }}" alt="{{ $page->siteName }}">
                    @else
                        {{ $page->siteName }}
                    @endif
                @else
                    {{ $page->title }}
                @endif
            </h1>
            <h2 class="site-description">{{ $page->getPath() === '/' ? $page->siteDescription : $page->subtitle }}</h2>
        </div>
        @if($page->getPath() === '/')@include('_partials.navbar')@endif
    </div>
</header>