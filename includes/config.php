<?php
$name = substr(preg_replace('/[^a-z\d]/i', '', __DIR__), -30);
session_name($name);
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

// function csv_to_array($filename='', $delimiter=',')
// {
// 	if(!file_exists($filename) || !is_readable($filename))
// 		return FALSE;
//
// 	$header = NULL;
// 	$data = array();
// 	if (($handle = fopen($filename, 'r')) !== FALSE)
// 	{
// 		while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
// 		{
// 			if(!$header)
// 				$header = $row;
// 			else
// 				$data[] = array_combine($header, $row);
// 		}
// 		fclose($handle);
// 	}
// 	return $data;
// }
//
// $file = 'data.csv';
// $data = csv_to_array($file);
//
// print_r($data);


// function file_get_contents_utf8($fn) {
//     $content = file_get_contents($fn);
//     return mb_convert_encoding($content, 'UTF-8',
//         mb_internal_encoding());
// }
//
function getData ($url) {
    $data = file_get_contents($url);
    $data = utf8_decode($data);
    return $data;
}

//
$file ="data.csv";
$csv = getData($file);

// $csv = file_get_contents_utf8($file);
$array = array_map("str_getcsv", explode("\n", $csv));
$headers = array_shift($array);
$json = json_encode($array, JSON_PRETTY_PRINT);
// $json = mb_convert_encoding($json, "latin1");
//
file_put_contents("data/data.json", $json);

// echo $headers[1];
// preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $json);
// print_r(html_entity_decode($json));
