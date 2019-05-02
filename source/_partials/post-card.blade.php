<article class="post-card {{!$post->image ? 'no-image' : '' }} {{ $postCardLarge ? 'post-card-large' : '' }}">
    @if($post->image)
        <a class="post-card-image-link" href="{{$post->getPath()}}">
            <img class="post-card-image" src="{{$post->image}}" alt="{{$post->title}}"/>
        </a>
    @endif
    <div class="post-card-content">
        <a class="post-card-content-link" href="{{ $post->getPath() }}">
            <header class="post-card-header">
                @if ($post->tags)
                    @foreach ($post->tags as $tag)
                        <span class="post-card-tags">{{ $tag }}</span>
                    @endforeach
                @endif
                <h2 class="post-card-title">{{ $post->title }}</h2>
            </header>
            <section class="post-card-excerpt">
                <p>{{ $post->getExcerpt() }}</p>
            </section>
        </a>
        <footer class="post-card-meta">
            <ul class="author-list">
                <li class="author-list-item">
                    <div class="author-name-tooltip">
                        {{ $post->siteAuthor }}
                    </div>
                    <div class="static-avatar author-profile-image"><img src="/assets/images/avatar.png" alt=""></div>
                </li>
            </ul>
            <span class="reading-time">{{ $post->readingTime($post) }}</span>
        </footer>
    </div>
</article>
