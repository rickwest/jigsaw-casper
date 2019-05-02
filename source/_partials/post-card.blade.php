<article class="post-card {{!$post->image ? 'no-image' : '' }} {{ $postCardLarge ? 'post-card-large' : '' }}">
    @if($post->image)
    <a class="post-card-image-link" href="{{$post->getPath()}}">
    {{-- This is a responsive image, it loads different sizes depending on device --}}
    {{-- https://medium.freecodecamp.org/a-guide-to-responsive-images-with-ready-to-use-templates-c400bd65c433 --}}
        <img class="post-card-image"
             srcset="{{ $post->image }} 300w,
                    {{ $post->image }} 600w,
                    {{$post->image}} 1000w,
                    {{$post->image}} 2000w"
             sizes="(max-width: 1000px) 400px, 700px"
             src="{{$post->image}}"
             alt="{{$post->title}}"
        />
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
