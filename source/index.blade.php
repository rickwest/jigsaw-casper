---
pagination:
    collection: posts
---

@extends('_layouts.master')

@section('body')

    @include('_partials.header')

    <main id="site-main" class="site-main outer">
        <div class="inner">

            <div class="post-feed">
                @foreach ($pagination->items as $post)
                    {{--{{$post->title}}--}}
                    @include('_partials.post-card', ['post' => $post])
                    {{--{{!-- The tag below includes the markup for each post - partials/post-card.hbs --}}
                    {{--<div class="post-preview">--}}
                        {{--<a href="{{ $post->getPath() }}">--}}
                            {{--<h2 class="post-title">--}}
                                {{--{{ $post->title }}--}}
                            {{--</h2>--}}
                            {{--<h3 class="post-subtitle">--}}
                                {{--{{ $post->excerpt ? $post->excerpt : $post->subtitle }}--}}
                            {{--</h3>--}}
                        {{--</a>--}}
                        {{--<p class="post-meta">Posted on {{ date('F jS, Y', $post->date) }}</p>--}}
                    {{--</div>--}}
                    {{--<hr>--}}
                @endforeach
            </div>
        </div>
    </main>
@endsection
