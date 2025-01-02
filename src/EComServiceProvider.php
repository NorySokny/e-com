<?php
namespace Norysokny\ECom;

use Norysokny\ECom\MakeAction;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

/** 
 * This file is part of the Laravel Action Service Trait package.
 *
 * @author Prevail Ejimadu <prevailexcellent@gmail.com> (C)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class EComServiceProvider extends ServiceProvider {
    public function register() {

    }
    public function boot() {
        Log::info('ServiceProvider loaded for make:action');
        if ($this->app->runningInConsole()) {
            $this->commands([MakeAction::class]);
        }
    }
}