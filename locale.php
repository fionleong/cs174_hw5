<?php
// get language preference
if (isset($_GET["lang"])) {
    $language = $_GET["lang"];
}
else if (isset($_SESSION["lang"])) {
    $language  = $_SESSION["lang"];
}
else {
    $language = "en_US";
}

// save language preference for future page requests
$_SESSION["Language"] = $language;

$folder = "locale";
$domain = "messages";
$encoding = "UTF-8";

putenv("LANG=" . $language); 
setlocale(LC_ALL, $language);

bindtextdomain($domain, $folder); 
bind_textdomain_codeset($domain, $encoding);

textdomain($domain);

// $locale = false; // initilize language parameter
// if (isSet($_GET["locale"])) // check if getting locale value in query string
// {
//     $locale = $_GET["locale"]; // add selected language in variable
// }
// else
// {
//     $locale = "en_US"; // set English US as default language
// }

// putenv("LANGUAGE=$locale");
// setlocale(LC_ALL, $locale);

// $domain = "messages";
// bindtextdomain($domain, "locale");

// bind_textdomain_codeset($domain, "UTF-8");

// textdomain($domain);
?>