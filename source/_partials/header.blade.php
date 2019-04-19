@if($page->image)
<header class="site-header outer responsive-header-img" style="background-image: url({{ $page->image ? $page->image : '/assets/images/home-bg.jpg' }}">
@else
<header class="site-header outer no-image">
@endif
    <div class="inner">
        <div class="site-header-content">
            <h1 class="site-title">
                {{ $page->siteName }}
            </h1>
            <h2 class="site-description">{{ $page->siteDescription }}</h2>
        </div>
        @include('_partials.navbar')
    </div>
</header>