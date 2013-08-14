 <head>

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />

    <title> Web Questionaires </title>

    <?=html::meta("keywords", "")?>
    <?=html::meta("description", "")?>
    <?=html::meta("author", "Aike Chan")?>
    <?=html::meta("designer", "Aike Chan")?>

    <!-- styles -->
    <?=html::stylesheet(array(
        'styles/master.css.css',
      ))?>
		<!-- Selects the appropriate stylesheet depending on the current page -->
    <?=snsUtil::stylesheet_selector(url::current())?>
    
    <!--scripts-->
    <?/*=html::script(array(
        'scripts/jquery.min.js',
        'scripts/smoothFader.js',
      ))*/?>
    <?/*=url::current() == 'home' ? html::script('scripts/jquery.cycle.js') : null*/?>

    <!--
		<script type="text/javascript">
      $(document).ready(function() {
        $('.slideshow').cycle({
          fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        });
      }); 
    </script>
		-->

    <!--[if lte IE 7]>
      <?=html::stylesheet('styles/ie.css')?>
      <?=html::script('scripts/IE8.js')?>
    <![endif]-->

  </head>