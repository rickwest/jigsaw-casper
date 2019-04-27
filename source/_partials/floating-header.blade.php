<div class="floating-header">
    <div class="floating-header-logo">
        <a href="/">
            @if($page->icon)
                <img src="{{ $page->icon }}" alt="{{ $page->siteName }} icon" />
            @endif
            <span>{{ $page->siteName }}</span>
        </a>
    </div>
    <span class="floating-header-divider">&mdash;</span>
    <div class="floating-header-title">{{$page->title}}</div>
    <div class="floating-header-share">
        <div class="floating-header-share-label">Share this <i class="far fa-hand-point-up fa-lg"></i></div>
        <a class="floating-header-share-tw" href="https://twitter.com/share?text={{ urlencode($page->title)}}&amp;url={{ $page->getUrl() }}"
           onclick="window.open(this.href, 'share-twitter', 'width=550,height=235');return false;">
            <i class="fab fa-twitter fa-lg"></i>
        </a>
        <a class="floating-header-share-fb" href="https://www.facebook.com/sharer/sharer.php?u={{ $page->getUrl() }}"
           onclick="window.open(this.href, 'share-facebook','width=580,height=296');return false;">
            <i class="fab fa-facebook-f fa-lg"></i>
        </a>
    </div>
    <progress id="reading-progress" class="progress" value="0">
        <div class="progress-container">
            <span class="progress-bar"></span>
        </div>
    </progress>
</div>
