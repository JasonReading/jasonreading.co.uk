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
            <h1>Hi, I’m <span itemprop="name">Jason Reading</span> and I am a <span itemprop="title">Web Developer</span>.</h1>

            <p itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address" class="intro">I work at <a
                    href="http://weebie.co.uk/" target="_blank" itemprop="affiliation">Weebie Ltd</a> in <span
                    itemprop="locality">Brentwood</span>.</p>
        </div>

        <div class="main">
            <p>I use PHP with frameworks to create websites and web-applications.</p>

            <p>I’m a full-stack developer, dealing with server infrastructure to back and front-end code. I can provision
                environments and manage servers and deployments. I utilize <em>PHP</em> with frameworks like
                <em>Symfony</em> to craft and
                structure the web. Then, using <em>HTML5</em>, <em>CSS</em> (with <em>SASS</em>) and <em>Javascript</em>
                (with
                <em>jQuery</em> or <em>Angularjs</em>) on the
                front-end to bring the websites to life and lift them off the page.</p>

            <p>I’ve worked on a range of projects from simple one-pager websites for local businesses, creating experiences
                using <em>WordPress</em> by creating templates and plugins, and simple CRUD applications to complex
                web-applications
                using <em>Symfony</em>.</p>

            <p>To see some examples of my work, head to the <a href="http://weebie.co.uk/projects" target="_blank">Weebie
                    portfolio page</a> or my
                <a href="http://github.com/jasonreading" target="_blank">Github account page</a>.</p>
        </div>
        <div class="side">

            <aside>
                <h2>Weebie Ltd</h2>

                <p>Weebie are a web design and development company in Brentwood.</p>

                <p><a href="http://weebie.co.uk" target="_blank">http://weebie.co.uk/</a></p>

                <p>
                    Leigh House,<br/>
                    Weald Road, <br/>
                    Brentwood, <br/>
                    Essex, CM14 4SX
                </p>
            </aside>
            <aside>
                <h2>Web Design</h2>
                <p>I work closely with <a href="http://heygreg.co.uk" target="_blank" rel="friend">Greg Owen</a>, check him out!</p>
            </aside>
        </div>


    </article>
</main>

<footer>&copy; Jason Reading <?php date_default_timezone_set('Europe/London'); echo date('Y'); ?></footer>
<?php include '_analytics.php'; ?>
</body>
</html>
