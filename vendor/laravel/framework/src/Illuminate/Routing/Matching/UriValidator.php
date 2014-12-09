<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace Illuminate\Routing\Matching;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UriValidator implements ValidatorInterface {

	/**
	 * Validate a given rule against a route and request.
	 *
	 * @param  \Illuminate\Routing\Route  $route
	 * @param  \Illuminate\Http\Request  $request
	 * @return bool
	 */
	public function matches(Route $route, Request $request)
	{
		$path = $request->path() == '/' ? '/' : '/'.$request->path();

		return preg_match($route->getCompiled()->getRegex(), rawurldecode($path));
	}

}
=======
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
<?php namespace Illuminate\Routing\Matching;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UriValidator implements ValidatorInterface {

	/**
	 * Validate a given rule against a route and request.
	 *
	 * @param  \Illuminate\Routing\Route  $route
	 * @param  \Illuminate\Http\Request  $request
	 * @return bool
	 */
	public function matches(Route $route, Request $request)
	{
		$path = $request->path() == '/' ? '/' : '/'.$request->path();

		return preg_match($route->getCompiled()->getRegex(), rawurldecode($path));
	}

}
<<<<<<< HEAD
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
