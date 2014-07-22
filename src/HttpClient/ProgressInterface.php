<?php

/**
 * This file is part of ReactGuzzle.
 *
 ** (c) 2014 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WyriHaximus\React\Guzzle\HttpClient;

use React\HttpClient\Response as HttpResponse;

/**
 * Interface ProgressInterface
 * @package WyriHaximus\React\Guzzle\HttpClient
 * @implements \ArrayAccess
 */
interface ProgressInterface
{
    public function setEvent($eventName);
    public function onResponse(HttpResponse $response);
    public function onData($data);
}