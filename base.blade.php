<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="{{ $url }}/feed.xml" />
    <link rel='stylesheet' href='assets/foundation.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/jinn.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/style.css' type='text/css' media='all' />
    <meta name="generator" content="Journal" />
</head>

<body class="home blog hfeed">
    <div id="page" class="site no-sidebar">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div id="header-image" class="custom-header ">
            <div class="header-wrapper">
                <div class="site-branding-header">

                    <h1 class="site-title"><a href="{{ $url }}">{{ $title }}</a></h1>
                    <p class="site-description">{{ $description }}</p>

                </div><!-- .site-branding -->
            </div><!-- .header-wrapper -->
        </div><!-- #header-image .custom-header -->
        <div data-sticky-container>
            <header id="masthead" class="group site-header title-bar top-bar" role="banner" data-sticky data-options="marginTop:0;"
                style="width:100%" data-top-anchor="masthead" data-btm-anchor="colophon:bottom">

                <div class="row">
                    <!-- Start Foundation row -->

                    <div class="top-bar-title">

                        <div class="site-branding">
                        </div><!-- .site-branding -->

                    </div>

                    <div class="top-bar-right">

                        <nav id="site-navigation" class="main-navigation top-bar-right" role="navigation">

                            <!-- Right Nav Section -->
                            <div class="top-bar-menu menu">

                                <button class="menu-toggle navicon" aria-controls="primary-menu" aria-expanded="false">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </button>

                                <div class="menu-menu-container">
                                    <ul id="primary-menu" class="menu group">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home">
                                            <a href="{{ $url }}">Home</a>
                                        </li>
                                        @foreach ($menu as $item)
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home">
                                                <a href="{{ $item['url'] }}">{{ $item['text'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>

                        </nav><!-- #site-navigation -->
                    </div>
                </div> <!-- End Foundation row -->

            </header>
        </div><!-- END data-sticky-container -->


        @yield('content')

        <a href="#" class="topbutton"></a><!-- Back to top button -->

        <footer id="colophon" class="site-footer" role="contentinfo">

            <div class="site-info">

                <div class="row">
                    <div class="theme-info small-12 columns text-center">
                        <div class="copyright small-12 columns text-center">
                            {{ $copyright }} 
                        </div>
                    </div>


                </div><!-- End Foundation row -->

            </div><!-- .site-info -->
        </footer><!-- #colophon -->
    </div><!-- #page -->

</body>

</html>