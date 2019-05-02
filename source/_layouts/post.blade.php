@extends('_layouts.master')

@section('body-class', 'post-template')

@section('body')
    <header class="site-header outer">
        <div class="inner">
            @include('_partials.navbar')
        </div>
    </header>
    <main id="site-main" class="site-main outer">
        <div class="inner">
            <article class="post-full post">
                <header class="post-full-header">
                    <section class="post-full-meta">
                        <time class="post-full-meta-date" datetime="{{ date('F jS, Y', $page->date) }}">{{ date('F jS, Y', $page->date) }}</time>
                        @if ($page->tags)
                            @foreach ($page->tags as $i => $tag)
                                <span class="date-divider">/</span> <a href="{{ '/tag/' . $tag }}" title="View posts in {{ $tag }}">{{ $tag }}</a>
                            @endforeach
                        @endif
                    </section>
                    <h1 class="post-full-title">{{$page->title}}</h1>
                </header>
                @if($page->image)
                    <figure class="post-full-image">
                        <img src="{{ $page->image }}" alt="{{ $page->title }}">
                    </figure>
                @endif
                <section class="post-full-content">
                    <div class="post-content">
                        @yield('content')
                    </div>
                </section>
                <!-- Email subscribe form at the bottom of the page -->
                @if($page->subscribe)
                    <section class="subscribe-form">
                        <h3 class="subscribe-form-title">Subscribe to {{ $page->siteName }}</h3>
                        <p>Get the latest posts delivered right to your inbox</p>
                        <form action="https://tinyletter.com/rickwest" method="post" target="popupwindow"
                              onsubmit="window.open('{{ $page->subscribe }}', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
                            <div class="form-group">
                                <input class="subscribe-email" type="email" name="email" id="tlemail" placeholder="youremail@example.com" />
                            </div>
                            <input type="hidden" value="1" name="embed"/>
                            <button id="" class="" type="submit"><span>Subscribe</span></button>
                        </form>
                    </section>
                @endif
            </article>
        </div>
    </main>

    <!-- Links to Previous/Next posts -->
    <aside class="read-next outer">
        <div class="inner">
            <div class="read-next-feed">

                @if ($page->tags)
                    <article class="read-next-card" style="background-image: url('/assets/images/blog-cover.jpg')">
                        <header class="read-next-card-header">
                            <small class="read-next-card-header-sitetitle">&mdash; {{ $page->siteName }} &mdash;</small>
                                <h3 class="read-next-card-header-title"><a href="{{ '/tag/' . $page->tags[0] }}" title="View posts in {{ $page->tags[0] }}">{{ $page->tags[0] }}</a></h3>
                        </header>
                        <div class="read-next-divider">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M13 14.5s2 3 5 3 5.5-2.463 5.5-5.5S21 6.5 18 6.5c-5 0-7 11-12 11C2.962 17.5.5 15.037.5 12S3 6.5 6 6.5s4.5 3.5 4.5 3.5"></path>
                            </svg>
                        </div>
                        <div class="read-next-card-content">
                            <ul>
                                @foreach($posts as $post)
                                    @php $i = 0 @endphp
                                    @if(in_array($page->tags[0], $post->tags) && $i < 3)
                                        @php $i++ @endphp
                                        <li><a href="{{ $post->getUrl() }}">{{$post->title}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <footer class="read-next-card-footer">
                            <a href="{{ '/tag/' . $page->tags[0] }}">See all the <strong>{{ $page->tags[0] }}</strong> posts →</a>
                        </footer>
                    </article>
                @endif

                @if ($next = $page->getNext())
                    @include('_partials.post-card', ['post' => $next])
                @endif


                @if ($previous = $page->getPrevious())
                    @include('_partials.post-card', ['post' => $previous])
                @endif
            </div>
        </div>
    </aside>

    <!-- Floating header which appears on-scroll -->
    @include('_partials.floating-header')

@endsection

@section('scripts')
    <script>

        // NOTE: Scroll performance is poor in Safari
        // - this appears to be due to the events firing much more slowly in Safari.
        //   Dropping the scroll event and using only a raf loop results in smoother
        //   scrolling but continuous processing even when not scrolling
        $(document).ready(function () {
            // Start fitVids
            var $postContent = $(".post-full-content");
            $postContent.fitVids();
            // End fitVids

            var progressBar = document.querySelector('#reading-progress');
            var header = document.querySelector('.floating-header');
            var title = document.querySelector('.post-full-title');

            var lastScrollY = window.scrollY;
            var lastWindowHeight = window.innerHeight;
            var lastDocumentHeight = $(document).height();
            var ticking = false;

            function onScroll() {
                lastScrollY = window.scrollY;
                requestTick();
            }

            function onResize() {
                lastWindowHeight = window.innerHeight;
                lastDocumentHeight = $(document).height();
                requestTick();
            }

            function requestTick() {
                if (!ticking) {
                    requestAnimationFrame(update);
                }
                ticking = true;
            }

            function update() {
                var trigger = title.getBoundingClientRect().top + window.scrollY;
                var triggerOffset = title.offsetHeight + 35;
                var progressMax = lastDocumentHeight - lastWindowHeight;

                // show/hide floating header
                if (lastScrollY >= trigger + triggerOffset) {
                    header.classList.add('floating-active');
                } else {
                    header.classList.remove('floating-active');
                }

                progressBar.setAttribute('max', progressMax);
                progressBar.setAttribute('value', lastScrollY);

                ticking = false;
            }

            window.addEventListener('scroll', onScroll, {passive: true});
            window.addEventListener('resize', onResize, false);

            update();

        });
    </script>
@endsection
