<?php

/*
 * This file is part of the ICanBoogie package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ICanBoogie;

if (PHP_SAPI === 'cli-server')
{
	$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

	if ($uri !== '/' && file_exists(__DIR__ . $uri))
	{
		return false;
	}

	unset($uri);
}

(function(Core $app) {

	$app();

}) (require __DIR__ . '/../bootstrap.php');