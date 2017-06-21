<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php print $title . ' | ' . $site_name;?></title>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css" media="all">
      a {color: #8b0053;}
      h1 {word-break: break-all;}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="logo-img">
        <a href="/indhold/om-syddjurs-kommune" rel="home" title="<?php print $site_name; ?>"><img src="/profiles/os2web/themes/os2web_core_theme/logo.png" alt="<?php print $site_name; ?>" id="logo"> - Gå til den normale forside</a>
      </div>
      <div class="jumbotron">
        <h1><?php print $title;?></h1>
        <?php print $message['value'];?>
      </div>
    </div>
  </body>
</html>
