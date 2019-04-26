---
image: /assets/images/blog-cover.jpg
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
                    @include('_partials.post-card', ['post' => $post])
                @endforeach
            </div>
        </div>
    </main>
@endsection
