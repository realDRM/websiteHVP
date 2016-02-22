<?php

## Define the menus in a "link-to-file => title-in-menu" format
# Main Menu, appears on all pages
$mainMenu = [
  "" => "Start",
  "theater" => "Theater",
  "studio" => "Studio",
  "project" => "Projecten",
  "film" => "Film",
  "media" => "Media",
  "lid" => "Lid worden",
  "about" => "HVP?",
  "contact" => "Contact"
];

# Submenus, the variable name should equal the link-to-file specified in the main menu
$theater = [
  "" => "Algemeen",
  "kussenman" => "2015 - De Kussenman",
  "dna-av" => "2014 - DNA &amp; Andere Verhalen"
];

$studio = [
  "" => "Algemeen",
  "impro" => "Improvisatie"
];

$project = [
  "" => "Algemeen",
  "historian" => "Living with a historian",
  "sprookjes" => "Sprookjes",
  "monologen" => "Publieke monologen"
];

$about = [
  "" => "Over HVP",
  "bestuur" => "Het Bestuur"
];

## Internal printing functions
# helperfunction: actually prints the menuitems
function actualMenuItem($link, $titel, $active)
{
  echo "<li><a href='/$link'";
  if ($active)
    echo " class='active'";
  echo ">$titel</a></li>\n";
}

# Prints menu items
function menuItems($activeItem)
{
  foreach ($GLOBALS['mainMenu'] as $link => $titel)
  {
    actualMenuItem($link, $titel, $activeItem == $link);
  }
}

# Prints submenu items
function subMenuItems($activeItem, $subItem)
{
  foreach ($GLOBALS[$activeItem] as $link => $titel)
  {
    actualMenuItem("$activeItem/$link", $titel, $subItem == $link);
  }
}

## External printing functions
# This is the only one you should call from a webpage
function printMenu($activeItem='', $subItem='')
{
  if (empty($GLOBALS[$activeItem]))
  {
    printSingleMenu($activeItem);
  }
  else
  {
    printDoubleMenu($activeItem, $subItem);
  }
}

# Prints the main menu
function printDoubleMenu($activeItem='',$subItem='')
{
?>
    <div class="grid_6" id="top_tier">
      <div id="tmenu-double">
        <div class="section topmenu">
          <ul class="sfmenu" id="menu-primary">

<? menuItems($activeItem); ?>

          </ul>
        </div>
      </div>

      <div id="bmenu">
        <div class="section topmenu">
          <ul class="submenu" id="menu-secondary">

<? subMenuItems($activeItem, $subItem); ?>

          </ul>
        </div>
      </div>
    </div>
<?php
}

# Prints a single menu
function printSingleMenu($activeItem='')
{
?>
    <div class="grid_6" id="top_tier">
      <div id="tmenu">
        <div class="section topmenu">
          <ul class="sfmenu" id="menu-primary">

<? menuItems($activeItem, $activeItem); ?>

          </ul>
        </div>
      </div>
    </div>
<?php
}
?>
