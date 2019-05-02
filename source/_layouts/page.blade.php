@extends('_layouts.master')

@section('body-class', 'page-template')

@section('body')
    <header class="site-header outer">
        <div class="inner">
            @include('_partials.navbar')
        </div>
    </header>
    <main id="site-main" class="site-main outer">
        <div class="inner">
            <article class="post-full post page {{ $page->image ? '' : 'no-image' }}">
                <header class="post-full-header">
                    <h1 class="post-full-title">{{ $page->title }}</h1>
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
            </article>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        $(function() {
            var $postContent = $(".post-full-content");
            $postContent.fitVids();
        });
    </script>
@endsection