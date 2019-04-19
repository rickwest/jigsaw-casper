@extends('_layouts.master')

@section('body-class', 'page-template page-about')

@section('body')
<header class="site-header outer">
    <div class="inner">
        @include('_partials.navbar')
    </div>
</header>

<main id="site-main" class="site-main outer">
    <div class="inner">

{{--        <article class="post-full {{post_class}} {{#unless feature_image}}no-image{{/unless}}">--}}
        <article class="post-full post page {{ $page->class ? $page->class : '' }} no-image">

            <header class="post-full-header">
                <h1 class="post-full-title">{{ $page->title }}</h1>
            </header>

            @if($page->image)
            {{--<figure class="post-full-image">--}}
                {{--{{!-- This is a responsive image, it loads different sizes depending on device--}}
                {{--https://medium.freecodecamp.org/a-guide-to-responsive-images-with-ready-to-use-templates-c400bd65c433 --}}
                {{--<img--}}
                        {{--srcset="{{img_url feature_image size="s"}} 300w,--}}
                            {{--{{img_url feature_image size="m"}} 600w,--}}
                            {{--{{img_url feature_image size="l"}} 1000w,--}}
                            {{--{{img_url feature_image size="xl"}} 2000w"--}}
                        {{--sizes="(max-width: 800px) 400px,--}}
                            {{--(max-width: 1170px) 700px,--}}
                            {{--1400px"--}}
                        {{--src="{{img_url feature_image size="xl"}}"--}}
                        {{--alt="{{title}}"--}}
                {{--/>--}}
            {{--</figure>--}}
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