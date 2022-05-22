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

namespace funsent;

/**
 * 记录开始前的时间和内存占用
 */
define('START_TIME', microtime(true));
define('START_MEMORY', memory_get_usage());

/**
 * 加载Composer自动载入文件
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * 以HTTP方式启动
 */
Application::runAsHttp();
