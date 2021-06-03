<?php

function search_converter($value): string
{
    $converter = array(
        'а' => 'f', 'б' => ' ', 'в' => 'd', 'г' => 'u', 'д' => 'l', 'е' => 't', 'ё' => ' ',
        'ж' => ' ', 'з' => 'p', 'и' => 'b', 'й' => 'q', 'к' => 'r', 'л' => 'k', 'м' => 'v',
        'н' => 'y', 'о' => 'j', 'п' => 'g', 'р' => 'h', 'с' => 'c', 'т' => 'n', 'у' => 'e',
        'ф' => 'a', 'х' => ' ', 'ц' => 'w', 'ч' => 'x', 'ш' => 'i', 'щ' => 'o', 'ь' => 'm',
        'ы' => 's', 'ъ' => ' ', 'э' => ' ', 'ю' => '.', 'я' => 'z'
    );
    $value = '/[A-Za-z0-9\s.]*(' . str_replace(' ', ')[A-Za-z0-9\s.]*(', strtr(mb_strtolower($value), $converter)) . ')[A-Za-z0-9\s.]*/i';

    return $value;
}

$search = search_converter('DRA S');
$arr = array('Boss', 'Lentins', 'NAV', 'Endless', 'Dragons', 'DragS', 'SiLeNT', 'Doctors', 'Lynx');
$result  = end(preg_grep($search, $arr));

print_r($result);
