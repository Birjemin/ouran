<?php

/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 16/12/2017
 * Time: 1:58 AM
 */

/**
 * @param $succ
 * @param array $data
 * @param string $msg
 * @param int $code
 *
 * @return string
 */
function renderJson($succ, $data = [], $msg = '', $code = 0)
{
    header('Content-type: application/json');
    $result = [
        'code'      => $code,
        'msg'       => $msg,
        'succ'      => $succ,
        'timestamp' => time(),
        'data'      => $data,
    ];
    echo json_encode($result);
}