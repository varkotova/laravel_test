<!DOCTYPE HTML>

<html>
    @section('head')
    <head>
        <title>{{ $title }}</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset ('css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset ('css/noscript.css') }}" /></noscript>
    </head>
    @show
    <body class="is-loading">

        <!-- Wrapper -->
        <div id="wrapper" class="fade-in">
            @section('intro')
            <!-- Intro -->
<!--
            <div id="intro">
                <h1>This is<br />
                    Massively</h1>
                <p>A free, fully responsive HTML5 + CSS3 site template designed by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
                    and released for free under the <a href="https://html5up.net/license">Creative Commons license</a>.</p>
                <ul class="actions">
                    <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
                </ul>
            </div>
-->
            @show
            @section('header')
            <!-- Header -->
            <header id="header">
                <a href="{{ url('generic') }}" class="logo">Generic</a>
            </header>
            @show

            @section('nav')
            <!-- Nav -->
            **********************************
            <h3>{{ date('Y.M.d', time()) }}</h3>
            <nav id="nav">
                <ul class="links">
                    <li class="active"><a href="{{ url('elbrus_index') }}">This is Massively</a></li>
                    <li><a href="{{ url('elbrus_generic') }}">Generic Page</a></li>
                    <li><a href="elements.html">Elements Reference</a></li>
                </ul>
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
                </ul>
            </nav>
            **********************************
            @show

            @yield('main')

            @section('footer')
            <!-- Footer -->
            <footer id="footer">
                <section>
                    <form method="post" action="/message">
                        <div class="field">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="3"></textarea>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" /></li>
                        </ul>
                    </form>
                </section>
                <section class="split contact">
                    <section class="alt">
                        <h3>Address</h3>
                        <p>1234 Somewhere Road #87257<br />
                            Nashville, TN 00000-0000</p>
                    </section>
                    <section>
                        <h3>Phone</h3>
                        <p><a href="#">(000) 000-0000</a></p>
                    </section>
                    <section>
                        <h3>Email</h3>
                        <p><a href="#">info@untitled.tld</a></p>
                    </section>
                    <section>
                        <h3>Social</h3>
                        <ul class="icons alt">
                            <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
                        </ul>
                    </section>
                </section>
            </footer>
            @show

            @section('copyright')
            <!-- Copyright -->
            <div id="copyright">
                <ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
            </div>
            @show
        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>