<?php
$projectUrl = "double-miss-academy/_html/";
define("ROOT", __DIR__ ."/");
define("HTTP", ($_SERVER["SERVER_NAME"] === "localhost")
   ? $projectUrl
   : "/"
);

//change dev to 0 if you're finished project!
$dev = 0;
$prod = '.min';

//dev functions
function dd($val) {
  die(var_dump($val));
}