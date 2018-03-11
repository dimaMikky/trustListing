<?php
// проверяем наличие куки, если есть то читаем ее
if(isset($_COOKIE['lang_site'])){
    $lang = $_COOKIE['lang_site']; // получем язык сайта из куки
}else{
    $lang = 'en'; // default значение для языка сайта
}
// проверяем, если был передан язык в урле, то записываем его в куку
if(isset($_GET['lang'])){
    // задаем язык сайту
    $lang = $_GET['lang'];
    setcookie ("lang_site", $lang, time() + 3600*24, "/"); // устанавливаем куку с языком сайта
}
$langData = parse_ini_file(realpath("languages/".$lang.".ini")); // получаем данные из ini-файла
?>