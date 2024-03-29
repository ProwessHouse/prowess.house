<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SERVER['HTTPS'])) {

	header('Location: https://' . $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
	exit;
}
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2016, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

/**
 * Welcome to Lithium! This front-controller file is the gateway to your application. It is
 * responsible for intercepting requests, and handing them off to the `Dispatcher` for processing.
 *
 * @see lithium\action\Dispatcher
 */

/**
 * If you're sharing a single Lithium core install or other libraries among multiple
 * applications, you may need to manually set things like `LITHIUM_LIBRARY_PATH`. You can do that in
 * `config/bootstrap.php`, which is loaded below:
 */
require dirname(__DIR__) . '/config/bootstrap.php';

/**
 * The following will instantiate a new `Request` object and pass it off to the `Dispatcher` class.
 * By default, the `Request` will automatically aggregate all the server / environment settings, URL
 * and query string parameters, request content (i.e. POST or PUT data), and HTTP method and header
 * information.
 *
 * The `Request` is then used by the `Dispatcher` (in conjunction with the `Router`) to determine
 * the correct `Controller` object to dispatch to, and the correct response type to render. The
 * response information is then encapsulated in a `Response` object, which is returned from the
 * controller to the `Dispatcher`, and finally echoed below. Echoing a `Response` object causes its
 * headers to be written, and its response body to be written in a buffer loop.
 *
 * @see lithium\action\Request
 * @see lithium\action\Response
 * @see lithium\action\Dispatcher
 * @see lithium\net\http\Router
 * @see lithium\action\Controller
 */
echo lithium\action\Dispatcher::run(new lithium\action\Request([
	// 'drain' => false
]));

?>