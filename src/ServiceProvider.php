<?php

namespace Ravenna\LlmsGenerator;

use Error;
use routes;
use Statamic\Statamic;
use Statamic\Events\Booted;
use Statamic\Facades\Entry;
use Statamic\Facades\CP\Nav;
use Illuminate\Support\Facades\Event;
use Statamic\Providers\AddonServiceProvider;
use Statamic\Events\EntrySaved;
use Statamic\Events\EntryDeleted;
use Ravenna\LlmsGenerator\Services\LlmsTxtService;

class ServiceProvider extends AddonServiceProvider
{

  /**
  * Init
  */
  public function bootAddon()
  {
      parent::boot();

      $this->loadRoutesFrom(__DIR__ . '/../routes/cp.php');
      $this->loadViewsFrom(__DIR__ . '/../resources/views', 'llms-generator');
      $this->bootNav();

      Event::listen(EntrySaved::class, function () {
          LlmsTxtService::generate();
      });

      Event::listen(EntryDeleted::class, function () {
          LlmsTxtService::generate();
      });
  }

  /**
   * Nav link button under Tools
   */
  protected function bootNav()
  {
      Nav::extend(function ($nav) {
          $nav->tool('LLMs Generator')->section('Tools')
            ->route('llms-generator.index')
            ->icon('crane');//code, file-code, filter-lines,group,
      });
  }

}

