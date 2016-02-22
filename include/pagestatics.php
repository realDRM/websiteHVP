<?php
function printPageHeader()
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <title>Het Vrije Podium</title>
    <meta content="Dennis D'Ooghe" name="author">
    <link rel="icon" href="/favicon.png" />
    <link rel="stylesheet" type="text/css" href="/hvp.css" />
  </head>
<body>
  <div class="container" id="page">
    <header class="site-header grid_6 paprh" id="masthead" role="banner">
      <div class="logo grid_3">
        <a href="http://hetvrijepodium.be" style="display: block">
          <img style="width: 387px; height: 150px;" alt="Het Vrije Podium" src="/img/logos/newlogo-web alt.png" />
        </a>
      </div>
    </header>

<?php
}

function printContentHeader()
{
?>

    <div class="clear"></div>

    <div class="cf" id="main">
      <div class="grid_4">
        <div class="site-content papr section" id="content">
          <article class="hentry">


<?php
}

function printContentFooter()
{
?>
          </article>
        </div>
      </div>
    </div>
<?php
}

function printPageFooter()
{
?>
    <!-- Optionally, add sidebar here -->
  </div>
</body>
</html>
<?php
}
?>
