<article class="post-card no-image post-card-large">

    @if($post->image)
    {{--<a class="post-card-image-link" href="{{url}}">--}}
        {{--{{!-- This is a responsive image, it loads different sizes depending on device--}}
        {{--https://medium.freecodecamp.org/a-guide-to-responsive-images-with-ready-to-use-templates-c400bd65c433 --}}
        {{--<img class="post-card-image"--}}
             {{--srcset="{{img_url feature_image size="s"}} 300w,--}}
                    {{--{{img_url feature_image size="m"}} 600w,--}}
                    {{--{{img_url feature_image size="l"}} 1000w,--}}
                    {{--{{img_url feature_image size="xl"}} 2000w"--}}
             {{--sizes="(max-width: 1000px) 400px, 700px"--}}
             {{--src="{{img_url feature_image size="m"}}"--}}
             {{--alt="{{title}}"--}}
        {{--/>--}}
    {{--</a>--}}
    @endif

    <div class="post-card-content">

        <a class="post-card-content-link" href="{{ $post->getPath() }}">

            <header class="post-card-header">
                <h2 class="post-card-title">{{ $post->title }}</h2>
            </header>

            <section class="post-card-excerpt">
                <p>{{ $post->excerpt ? $post->excerpt : $post->subtitle }}</p>
            </section>

        </a>

        <footer class="post-card-meta">

            {{--<ul class="author-list">--}}
                {{--{{#foreach authors}}--}}
                {{--<li class="author-list-item">--}}

                    {{--<div class="author-name-tooltip">--}}
                        {{--{{name}}--}}
                    {{--</div>--}}

                    {{--{{#if profile_image}}--}}
                    {{--<a href="{{url}}" class="static-avatar">--}}
                        {{--<img class="author-profile-image" src="{{img_url profile_image size="xs"}}" alt="{{name}}" />--}}
                    {{--</a>--}}
                    {{--{{else}}--}}
                    {{--<a href="{{url}}" class="static-avatar author-profile-image">{{> "icons/avatar"}}</a>--}}
                    {{--{{/if}}--}}
                {{--</li>--}}
                {{--{{/foreach}}--}}
            {{--</ul>--}}

            <span class="reading-time">{{ $page->readingTime($post) }}</span>

        </footer>

    </div>
</article>
