<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="Jason Reading Web Developer Romford and Brentwood. Personal website">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/vendor/modernizr/modernizr.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<main>
    <article itemscope itemtype="http://data-vocabulary.org/Person">
        <div class="feature">
            <div class="feature__container">
                <div class="feature__cell"><h1>Hi, I’m <span itemprop="name">Jason Reading</span> and I am a <span
                            itemprop="title">Web Developer</span>.</h1>

                    <p itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address" class="intro">I work
                        at <a
                            href="http://weebie.co.uk/" target="_blank" itemprop="affiliation">Weebie</a>, a digital
                        studio in <span
                            itemprop="locality">Brentwood</span>.</p></div>
            </div>
        </div>

        <div class="container">
            <div class="main">
                <p>I use <em>PHP, MySQL, HTML, CSS</em> and <em>Javascript</em> to forge websites and tools for local
                    businesses.
                </p>

                <p>I’m a full-stack PHP developer. I'm not afraid to get my hands dirty with anything from
                    server provisioning, database design &amp; configuration on the back-end &mdash; to SCSS and
                    Javascript on the front-end. &hellip;and everything in-between. </p>

                <p>I've made a range of websites on top of technologies <em>Drupal</em>, <em>WordPress</em> and <em>Silex</em>.
                </p>

                <p>I utilize frameworks like <em>Symfony</em> to craft websites and tools with an
                    <em><abbr title="Object Oriented Programming">OOP</abbr></em> approach. I love to really sink
                    my teeth into creating full-featured web applications using <em>Symfony</em>, from
                    <em><abbr title="Create Read Update and Delete">CRUD</abbr></em> to
                    <em><abbr title="Representational state transfer">REST</abbr></em> based applications.</p>

                <p>To see some examples of my work, head to the <a href="http://weebie.co.uk/projects" target="_blank">Weebie
                        portfolio page</a> or my
                    <a href="http://github.com/jasonreading" target="_blank">Github account page</a>.</p>
            </div>
            <div class="side">

                <aside>
                    <h2>Weebie Ltd</h2>

                    <p>Weebie are a web design and development company in Brentwood.</p>

                    <p><a href="http://weebie.co.uk" target="_blank">http://weebie.co.uk/</a></p>
                </aside>
                <aside>
                    <h2>Web Design</h2>

                    <p>I work closely with <a href="http://heygreg.co.uk" target="_blank" rel="friend">Greg Owen</a>,
                        check him out!</p>
                </aside>
            </div>
        </div>



    </article>
</main>

<footer class="footer">
    <div class="footer__container"><p>&copy; Jason Reading <?php date_default_timezone_set('Europe/London');
            echo date('Y'); ?></p></div>
</footer>
<?php include '_analytics.php'; ?>
</body>
</html>
