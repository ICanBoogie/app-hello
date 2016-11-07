<?php

/*
 * This file is part of the ICanBoogie package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App;

use ICanBoogie\Routing\RouteDefinition as Route;

return [

	'hello' => [

		Route::PATTERN => '/',
		Route::CONTROLLER => Presentation\Controller\HelloController::class

	]

];
