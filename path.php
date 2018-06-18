<?php
define("ROOT", __DIR__ ."/");
define("HTTP", ($_SERVER["SERVER_NAME"] == "localhost")
   ? "http://" . $_SERVER["SERVER_NAME"] . "/_________portfolio/"
   : "http://" . $_SERVER["SERVER_NAME"] . "/"
);

//change dev to 0 if you're finished project!
$dev = 0;
$prod = '.min';

//dev functions
function dd($val) {
  echo '<pre style="font-size: 16px">';
  die(var_dump($val));
}