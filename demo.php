<?php
/**
 * Created by PhpStorm.
 * User: baiyangxinxin
 * Date: 2019-02-19
 * Time: 17:28
 */


require_once './vendor/autoload.php';
$array = [
    [
        'name' => 'baiyang', 'age' => 28
    ],
    [
        'name' => '白银', 'age' => 29,
    ],
    [
        'name' => '黄金', 'age' => 28,
    ],
    [
        'name' => 'hello', 'age' => 39,
    ],
];

echo '<pre>';
print_r($array);
echo '<pre/>';

dd($array);
?>