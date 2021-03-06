<?php
namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
class LaravelWebpServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
         Blade::directive('webp', function() {
            return '<?php if (AnalyWebp::get_client()): ?>';
        });
        Blade::directive('endwebp', function() {
            return '<?php endif; ?>';
        });
    }
    /**
     * @return void
     */
    public function register()
    {
        require_once app_path() . '/Helpers/Analy/Webp.php'; 
    }
}