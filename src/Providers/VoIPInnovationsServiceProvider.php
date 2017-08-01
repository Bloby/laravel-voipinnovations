<?php

namespace VoIPInnovations\Providers;

use Illuminate\Support\ServiceProvider;

class VoIPInnovationsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        //
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('voipinnovations', function($app) {
		    return new \VoIPInnovations\VoIPInnovations;
		});

		$this->app->booting(function() {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('VoIPInnovations', 'VoIPInnovations\Facades\VoIPInnovations');
		});

        $configPath = config_path('voipinnovations.php');
        if (!\Illuminate\Support\Facades\File::exists($configPath)) {
            $this->publishes([
                __DIR__ . '/../config/voipinnovations.php' => $configPath
            ]);
        }
        
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('voipinnovations');
	}

}
