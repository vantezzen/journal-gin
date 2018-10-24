@extends('base')

@section('content')
<div id="content" class="site-content row">
    @foreach($posts as $post)
        <!-- Foundation row start -->
        <div id="primary" class="content-area no-sidebar small-12 medium-10 medium-push-1 large-8 large-push-2 columns">
            <main id="main" class="site-main" role="main">
                <article class="post type-post status-publish format-standard hentry">
                    <div class="post-content ">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="{{ $post['url'] }}"
                                    rel="bookmark">{!! $post['title'] !!}</a></h2>
                        </header>
                        <div class="entry-content">
                            <p>{!! $post['trimmedText'] !!}</p>
                            <div class="continue-reading"><a class="more-link" href="{{ $post['path'] }}"
                                    title="{{{ $post['title'] }}}" rel="bookmark">Keep Reading</a></div>
                        </div>
                    </div>
                </article>
            </main>
        </div><!-- #primary Foundation .columns end -->
    @endforeach
    @if ($pagination)
        <div id="primary" class="content-area no-sidebar small-12 medium-10 medium-push-1 large-8 large-push-2 columns">
            @if ($prev)
                <a class="button more-link" role="button" href="{{ $prev }}">Previous page</a>
            @endif
            @if ($next)
                <a class="button more-link next-page" role="button" href="{{ $next }}">Next page</a>
            @endif
        </div>
    @endif
</div><!-- #content -->    
@endsection