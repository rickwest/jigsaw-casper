@extends('_layouts.master')

@section('body-class', 'tag-template')

@section('body')
    @include('_partials.header')
    <main id="site-main" class="site-main outer">
        <div class="inner">
            <div class="post-feed">
                @foreach ($page->posts($posts) as $post)
                    @include('_partials.post-card', ['post' => $post])
                @endforeach
            </div>
        </div>
    </main>
@endsection