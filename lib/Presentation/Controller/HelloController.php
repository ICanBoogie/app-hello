<?php

/*
 * This file is part of the ICanBoogie package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Presentation\Controller;

use ICanBoogie\HTTP\Request;
use ICanBoogie\Routing\Controller;
use ICanBoogie\View\ControllerBindings as ViewBindings;

class HelloController extends Controller
{
	use ViewBindings;

	/**
	 * @inheritdoc
	 */
	protected function action(Request $request)
	{
		$name = $request['name'] ?: "world";

		$this->view->content = "Hello $name!";
		$this->view['page_title'] = "Hello";
		$this->view->template = 'hello';
	}
}
