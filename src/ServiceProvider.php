<?php

namespace Ravenna\LlmsGenerator;

use Error;
use routes;
use Statamic\Statamic;
use Statamic\Events\Booted;
use Statamic\Facades\Entry;
use Statamic\Facades\CP\Nav;
use Statamic\Events\EntrySaved;
use Illuminate\Support\Facades\Event;
use Statamic\Providers\AddonServiceProvider;
use Illuminate\Support\Facades\Log;

class ServiceProvider extends AddonServiceProvider
{

  public function bootAddon()
  {
      parent::boot();

      $this->loadRoutesFrom(__DIR__ . '/../routes/cp.php');
      $this->loadViewsFrom(__DIR__ . '/../resources/views', 'llms-generator');
      $this->bootNav();

      \Illuminate\Support\Facades\Event::listen(
          \Statamic\Events\EntrySaved::class,
          fn ($event) => $this->generateLLMSTxt()
      );
  }


  protected function bootNav()
  {
      Nav::extend(function ($nav) {
          $nav->tool('LLMs Generator')->section('Tools')
            ->route('llms-generator.index')
            ->icon('code');//crane coolest, file-code, filter-lines,group,
      });
  }

  protected function generateLLMSTxt()
    {

        $siteName = config('app.name', 'My Statamic Site');
        $summary = "Overview of collections and entries on {$siteName}";

        $entries = Entry::all()
            ->sortBy(fn($entry) => $entry->collectionHandle().' '.$entry->get('title')
        );

        // Group entries by collection
        $groups = $entries->groupBy(fn($entry) => $entry->collectionHandle());

        $lines = [];

        // 1️⃣ H1 — Site name
        $lines[] = "# {$siteName}";
        $lines[] = "";
        // 2️⃣ blockquote summary
        $lines[] = "> {$summary}";
        $lines[] = "";

        // 3️⃣ Optional intro (could be left empty or customized)
        $lines[] = "This llms.txt file lists all collections and their entries in Markdown format for LLM consumption.";
        $lines[] = "";

        // 4️⃣ Sections per collection
        foreach ($groups as $collection => $groupEntries) {
            $lines[] = "## " . ucfirst($collection);
            foreach ($groupEntries as $entry) {
                $title = $entry->get('title');
                $url = $entry->absoluteUrl(); // Or use $entry->url()
                $lines[] = "- [{$title}]({$url}): Entry in collection “{$collection}”";
            }
            $lines[] = ""; // Blank line after each section
        }

        // Combine and write to public/llms.txt
        $content = implode(PHP_EOL, $lines);
        file_put_contents(public_path('llms.txt'), $content);
    }

}

