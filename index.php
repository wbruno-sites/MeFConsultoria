<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Moraes e Ferreira - Consultoria Estratégica Financeira</title>

  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
  <meta name="description" content="Oferecemos soluções financeiras na medida para a sua startup. Tenha dentro de sua empresa todo o apoio financeiro e seu business plan, através de nossa parceria." />

  <meta name="google-site-verification" content="V0sfSaS08vyyO_eRegBBlQSzEEqXra12k6DjF4Y7qNs" />

  <link rel="icon" href="public/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="public/favicon.ico" type="image/x-icon" />

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="public/stylesheets/all.min.css" />

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-63837396-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>
<body>
<header id="header" class="content pure-g border-bottom">
  <figure id="logo" class="pure-u-md-1-4 pure-u-1">
    <a href="/"><img src="public/images/mef-logo.png" /></a>
  </figure>

  <nav id="menu" class="pure-u-md-3-4 pure-u-1">
    <ul>
      <li class="menu-item"><a href="/">Home</a></li>
      <li class="menu-item"><a href="/quem-somos">Quem somos</a></li>
      <li class="menu-item"><a href="/contato">Contato</a></li>
    </ul>
  </nav><!-- #menu -->

</header><!-- #header -->

<article id="main" class="content border-bottom">
<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'index';
  $file = 'views/' . $page . '.html';

  if (is_file($file)) {
    include $file;
  } else {
    include 'views/error.html';
  }

?>
</article>

<footer id="footer" class="content pure-g">
  <p class="pure-u-1">&copy;Moraes e Ferreira - Consultoria Estratégica Financeira</p>
</footer><!-- footer -->

<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>
