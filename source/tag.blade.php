---
image: /assets/images/blog-cover.jpg
pagination:
    collection: tags
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

@extends('_layouts.master')

@section('body')
    <h1>{{ $page->title }}</h1>

    <div class="text-2xl border-b border-blue-lighter mb-6 pb-10">
        @yield('content')
    </div>

    @foreach ($page->posts($posts) as $post)
        @include('_components.post-preview-inline')

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach

    @include('_components.newsletter-signup')
@stop