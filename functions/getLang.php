<?php
function getLang() : string
{
  // récupérer la langue du navigateur en tronquant les 2 premiers caractères
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  // si langue non définie, on la définit sur FR
  if ($lang == "") { $lang = "fr"; }
  // renvoi de la fonction
  return $lang;
}
