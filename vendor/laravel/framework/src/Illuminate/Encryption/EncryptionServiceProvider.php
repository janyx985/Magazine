<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace Illuminate\Encryption;

use Illuminate\Support\ServiceProvider;

class EncryptionServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('encrypter', function($app)
		{
			$encrypter =  new Encrypter($app['config']['app.key']);

			if ($app['config']->has('app.cipher'))
			{
				$encrypter->setCipher($app['config']['app.cipher']);
			}

			return $encrypter;
		});
	}

}
=======
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
<?php namespace Illuminate\Encryption;

use Illuminate\Support\ServiceProvider;

class EncryptionServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('encrypter', function($app)
		{
			$encrypter =  new Encrypter($app['config']['app.key']);

			if ($app['config']->has('app.cipher'))
			{
				$encrypter->setCipher($app['config']['app.cipher']);
			}

			return $encrypter;
		});
	}

}
<<<<<<< HEAD
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
