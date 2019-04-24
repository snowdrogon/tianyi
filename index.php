<?php
/**
 * Created by PhpStorm.
 * User: DDMG
 * Date: 2019/4/24
 * Time: 10:27
 */
require_once './vendor/autoload.php';

$result = Queer\Lst\ToolUtil::add(3.14, 2.14, 2);
echo $result;