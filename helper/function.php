<?php

/**
 * funsent - the web application framework by PHP
 * Copyright(c) funsent.com Inc. All Rights Reserved.
 * 
 * @version $Id$
 * @author  yanggf <2018708@qq.com>
 * @see     http://www.funsent.com/
 * @license MIT
 */

declare(strict_types=1);

// 随机获取一组福彩双色球号码
function generate_double_ball()
{
    $result   = [];
    $redBalls = range(1, 33);
    $blueBall = mt_rand(1, 16);
    for ($i = 0; $i < 6; $i++) {
        while (true) {
            $index = mt_rand(0, 32);
            if ($redBalls[$index] != 0) {
                $result[$i] = $redBalls[$index];
                $redBalls[$index] = 0;
                break;
            }
        }
    }
    return [$result, $blueBall];
}

