@extends('base')

@section('content')
<div id="content" class="site-content row">
    <!-- Foundation row start -->
    <div id="primary" class="content-area no-sidebar small-12 medium-10 medium-push-1 large-8 large-push-2 columns">
        <main id="main" class="site-main" role="main">
            <article class="post type-post status-publish format-standard hentry">
                <div class="post-content ">
                    <header class="entry-header">
                        <h1 class="entry-title">{!! $title !!}</h1>
                    </header>
                    <div class="entry-content">
                        {!! $text !!}

                        {!! $comments !!}
                    </div>
                </div>
            </article><!-- #post-## -->
        </main>
    </div>
</div>
@endsection