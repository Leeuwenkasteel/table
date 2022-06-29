<?php
namespace Leeuwenkasteel\Table;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Leeuwenkasteel\Table\View\Components\Open;

class TableServiceProvider extends ServiceProvider
{
    public function boot(){
    	$this->loadViewsFrom(__DIR__.'/resources/views', 'table');
    	$this->loadTranslationsFrom(__DIR__.'/resources/lang', 'table');
		
		if ($this->app->runningInConsole()) {
            // Publish assets
            $this->publishes([__DIR__.'/resources/assets' => public_path(),], 'table-assets');
		}
    $this->loadViewComponentsAs('table', [
			      Open::class,
		  ]);
    }

    public function register(){
		 
    }
}