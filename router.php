<?php

function rand_podstav_smv($text){
     // $text = str_replace('х','x',$text);
    // $text = str_replace('а','a',$text);
   // $text = str_replace('р','p',$text);
   $text = str_replace('о','o',$text);
   $text = str_replace('е','e',$text);
    //$text = str_replace('с','c',$text);
    return $text;
}


$REQUEST_URI = $_SERVER['REQUEST_URI'];

$REQUEST_URI = $main_name.$REQUEST_URI;

$REQUEST_URI = str_replace( 'knowbaza.ru', 'rosdiplom_ru', $REQUEST_URI  );

$contentTitle = str_replace($main_name, $donor_name, $REQUEST_URI );

$mainContent = file_get_contents($contentTitle);

$mainContent = str_replace($donor_name, $main_name, $mainContent  );
$mainContent = str_replace('url(/fi', 'url('.$donor_name.'/fi', $mainContent  );
$mainContent = str_replace('src="http', 'gfhtyur', $mainContent  );
$mainContent = str_replace('src="', 'src="'.$donor_name, $mainContent  );
$mainContent = str_replace('href="/templates/', 'href="'.$donor_name.'/templates/', $mainContent  );
$mainContent = str_replace('href="/3d-corner-ribbons.css"', 'href="'.$donor_name.'/3d-corner-ribbons.css"', $mainContent  );
$mainContent = str_replace('href="/favicon.png"', 'href="'.$donor_name.'/favicon.png"', $mainContent  );
$mainContent = str_replace('gfhtyur', 'src="http', $mainContent  );
$mainContent = str_replace('http://xn--d1acynfdde.xn--p1ai/engine/modules/antibot/antibot.php', $main_name.'/fi/capcha.jpg', $mainContent  );
$mainContent = str_replace($donor_site_name, $site_name, $mainContent  );

$mainContent = str_replace('Росдиплома', 'Базы знаний', $mainContent  );
$mainContent = str_replace('Росдиплому', 'Базе знаний', $mainContent  );
$mainContent = str_replace('Росдипломе', 'Базе знаний', $mainContent  );
$mainContent = str_replace('Росдипломом', 'Базой знаний', $mainContent  );
$mainContent = str_replace('Росдиплом', 'База знаний', $mainContent  );
$mainContent = str_replace('РОСДИПЛОМ', 'БАЗА ЗНАНИЙ', $mainContent  );
$mainContent = str_replace('Рос Диплому', 'Базе Знаний', $mainContent  );
$mainContent = str_replace('Рос Диплом', 'База знаний', $mainContent  );
$mainContent = str_replace('росдипломовцы', 'базазнановцы', $mainContent  );
$mainContent = str_replace('росдиплома', 'базы знаний', $mainContent  );
$mainContent = str_replace('росдиплому', 'базе знаний', $mainContent  );
$mainContent = str_replace('росдипломе', 'базе знаний', $mainContent  );
$mainContent = str_replace('росдипломом', 'базой знаний', $mainContent  );
$mainContent = str_replace('росдиплом', 'база знаний', $mainContent  );
$mainContent = str_replace('РосДиплома', 'Базы Знаний', $mainContent  );
$mainContent = str_replace('РосДиплому', 'Базе Знаний', $mainContent  );
$mainContent = str_replace('РосДипломе', 'Базе Знаний', $mainContent  );
$mainContent = str_replace('РосДипломом', 'Базой Знаний', $mainContent  );
$mainContent = str_replace('РосДиплом', 'База Знаний', $mainContent  );
$mainContent = str_replace('rosdiplom.ru', 'knowbaza.ru', $mainContent  );
$mainContent = str_replace('Rosdiplom.ru', 'Knowbaza.ru', $mainContent  );
$mainContent = str_replace('ROSDIPLOM.RU', 'KNOWBAZA.RU', $mainContent  );
$mainContent = str_replace('ROSDIPLOM', 'KNOWBAZA', $mainContent  );

$mainContent = str_replace('http://xn--d1acynfdde.xn--p1ai/fi/www.znaniumbaza.ru.jpg', $main_name.'/fi/baza.png', $mainContent  );
$mainContent = str_replace('Rosdiplom', 'Knowbaza', $mainContent  );
$mainContent = str_replace('г. Москва</span>, <span itemprop="streetAddress">ст.м. Метро Сухаревская, ул.Сретенка, д.27/29, стр 1',
    'г. Санкт-Петербург</span>, <span itemprop="streetAddress">ул. Академика Лебедева, дом № 12, oф. 169-170', $mainContent  );
$mainContent = str_replace('8-800-555-05-66: +7 (495) 987-41-36', 'Компания работает без телефонных менеджеров', $mainContent  );
$mainContent = str_replace('/goto.php?url=d3d3LnJvc2RpcGxvbS5ydQ==', 'http://knowbaza.ru/', $mainContent  );
$mainContent = str_replace('/goto.php?url=cm9zZGlwbG9tLnJ1L3JlZmVyZXIuYXNweD9yZWY9c3R1ZGVudHU=', 'http://knowbaza.ru/order.php', $mainContent  );

$mainContent = str_replace('rosdiplom_ru', 'knowbaza_ru', $mainContent  );
$mainContent = str_replace('Публикации</a>', '</a>', $mainContent  );
$mainContent = str_replace('это интересно</a>', '</a>', $mainContent  );

$mainContent = str_replace('</title>', '</title> 
<meta name="yandex-verification" content="f918e574e079a6fb" /> 
<meta name="google-site-verification" content="CdU3O1i3Zh3DXbQUUGGG6CMTX1lVVeOKOPRsPcTKh4k" />', $mainContent  );

$mainContent = rand_podstav_smv($mainContent);


echo $mainContent;