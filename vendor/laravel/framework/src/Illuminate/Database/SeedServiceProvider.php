<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace Illuminate\Database;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Console\SeedCommand;

class SeedServiceProvider extends ServiceProvider {

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
		$this->registerSeedCommand();

		$this->app->bindShared('seeder', function()
		{
			return new Seeder;
		});

		$this->commands('command.seed');
	}

	/**
	 * Register the seed console command.
	 *
	 * @return void
	 */
	protected function registerSeedCommand()
	{
		$this->app->bindShared('command.seed', function($app)
		{
			return new SeedCommand($app['db']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('seeder', 'command.seed');
	}

}
=======
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
<?php namespace Illuminate\Database;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Console\SeedCommand;

class SeedServiceProvider extends ServiceProvider {

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
		$this->registerSeedCommand();

		$this->app->bindShared('seeder', function()
		{
			return new Seeder;
		});

		$this->commands('command.seed');
	}

	/**
	 * Register the seed console command.
	 *
	 * @return void
	 */
	protected function registerSeedCommand()
	{
		$this->app->bindShared('command.seed', function($app)
		{
			return new SeedCommand($app['db']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('seeder', 'command.seed');
	}

}
<<<<<<< HEAD
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
