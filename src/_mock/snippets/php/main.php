<template>

    <head>

        <!-- Meta Tags -->
        <!-- Webcrawler Meta Tags -->
        <meta charset="utf-8">
        <meta name="title" content="Gavin Schilling Marketing, subsidary of Schilling Enterprises">
        <meta name="description" content="Gavin Schilling Marketing is a premire full-service global strategies marketing firm specializing both online and offline.">
        <meta name="author" content="Gavin Schilling">
        <!-- /Webcrawler Meta Tags -->

        <!-- Facebook Open Graph Meta Tags -->
        <meta property="fb:app_id" content="561430954040905">
        <meta property="og:title" content="Gavin Schilling Marketing">
        <meta property="og:description" content="Gavin Schilling Marketing is a premire full-service global strategies marketing firm specializing both online and offline.">
        <meta property="og:image" content="dist/images/jpg/Gavin_Schilling_Marketing_logo.jpg">
        <meta property="og:type" content="website">
        <!-- /Facebook Open Graph Meta Tags -->

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:title" content="Gavin Schilling Marketing">
        <meta name="twitter:description" content="Gavin Schilling Marketing is a premire full-service global strategies marketing firm specializing both online and offline.">
        <meta name="twitter:creator" content="Gavin Schilling">
        <meta name="twitter:image" content="./images/png/Schilling-Enterprises.png">
        <meta name="twitter:card" content="summary">
        <!-- /Twitter Card Meta Tags -->
        <!-- /Meta Tags -->

        <!-- Facebook SDK for JavaScript with jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <!-- /Facebook SDK for JavaScript with jQuery -->

        <!-- Stylesheets -->
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" />
        <!-- /Normalize CSS -->

        <!-- Tether stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/css/tether.min.css" integrity="sha256-y4TDcAD4/j5o4keZvggf698Cr9Oc7JZ+gGMax23qmVA=" crossorigin="anonymous" />
        <!-- /Tether stylesheet -->

        <!-- Bootstrap stylesheet -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
        <!-- /Bootstrap stylesheet -->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Katibeh|Poiret+One|Tangerine:700" rel="stylesheet">
        <!-- /Google Fonts -->

        <!-- Custom stylesheet -->
        <link rel="stylesheet" type="text/css" href="./css/style.min.css">
        <!-- /Custom stylesheet -->
        <!-- /Stylesheets -->

        <script>
            $(document)
                .ready(function() {
                    $.ajaxSetup({
                        cache: true
                    });
                    $.getScript('//connect.facebook.net/en_US/sdk.js', function() {
                        FB.init({
                            appId: '561430954040905',
                            version: 'v2.7' // or v2.1, v2.2, v2.3, ...
                        });
                        $('#loginbutton,#feedbutton')
                            .removeAttr('disabled');
                        FB.getLoginStatus(updateStatusCallback);
                    });
                });
        </script>
    </head>

    <body>
        <!-- Header -->
        <header>
            <!-- Collapsing NavBar -->
            <nav class="navbar navbar-light bg-faded">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    &#9776;
                </button>
                <div class="collapse" id="exCollapsingNavbar">

                    <div class="bg-inverse p-a-1">

                        <!-- Nav Bar (Pills with Dropdown) -->
                        <ul class="nav nav-pills">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="Website-Development.html">Website Development</a>
                                    <a class="dropdown-item" href="Marketing-Campaigns.html">Marketing Campaigns</a>
                                    <a class="dropdown-item" href="Promotional-Services.html">Promotional Services</a>
                                </div>
                            </li>
                        </ul>
                        <!-- /Nav Bar (Pills with Dropdown) -->

                    </div>
                </div>
            </nav>
            <!-- /Collapsing NavBar -->

            <img src="./images/png/Schilling-Enterprises.png" class="img-rounded m-x-auto d-block" alt="Schilling Enterprises logo">

            <div class="text-xs-center">
                <h1>Gavin Schilling Marketing</h1>
                <h5>Subsidary of Schilling Enterprises</h5>
            </div>

        </header>
        <!-- /Header -->
        <!-- JavaScript plugins -->

        <!-- jQuery script-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <!-- /jQuery script -->

        <!-- Tether script -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha256-/5pHDZh2fv1eZImyfiThtB5Ag4LqDjyittT7fLjdT/8=" crossorigin="anonymous"></script>
        <!-- /Tether script -->

        <!-- Bootstrap script -->
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
        <!-- /Bootstrap script -->

        <!-- Google Analytics -->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || [])
                    .push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-84234707-3', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- /Google Analytics -->

        <!-- /JavaScript plugins -->

        <!-- Facebook SDK for JavaScript snippet -->
        <script type="application/x-javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    appId: '561430954040905',
                    xfbml: true,
                    version: 'v2.7'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- /Facebook SDK for JavaScript snippet -->

        <!-- IP Trace -->
        <script type="text/javascript">
            _gaq.push(['_setCustomVar', 1, 'IP', '<?=$ip;?>', 1]);
        </script>
        <!-- /IP Trace -->
    </body>

    <footer>
        <!-- Breadcrumbs -->
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="https://schillingenterprises.github.io/Gavin-Schilling-Marketing/html/Marketing-Campaigns.html">Marketing Campaigns</a>
        </nav>
        <!-- /Breadcrumbs -->

        <!-- Copyright -->
        <div>
            <small>&copy;2017<a href="https://www.facebook.com/optimal.leader"> Schilling Enterprises</a></small>
        </div>
        <!-- /Copyright -->

        <!-- Facebook Like -->
        <div class="fb-like" data-share="true" data-width="450" data-show-faces="true">
        </div>
        <!-- /Facebook Like -->
    </footer>

</template>