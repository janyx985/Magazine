<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace Illuminate\Hashing;

use Illuminate\Support\ServiceProvider;

class HashServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('hash', function() { return new BcryptHasher; });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('hash');
	}

}
=======
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
<?php namespace Illuminate\Hashing;

use Illuminate\Support\ServiceProvider;

class HashServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('hash', function() { return new BcryptHasher; });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('hash');
	}

}
<<<<<<< HEAD
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
