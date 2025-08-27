<?php

namespace Ravenna\LlmsGenerator\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\Facades\Collection;
use Illuminate\Support\Facades\Storage;
use Statamic\Facades\YAML;
use Ravenna\LlmsGenerator\Services\LlmsTxtService;
use Ravenna\LlmsGenerator\Services\LlmsSettings;
use Statamic\Http\Controllers\CP\CpController as BaseCpController;

class CpController extends BaseCpController
{

    protected $path = 'addons/llmsgenerator/collections.yaml';

    public function index()
    {
        return view('llms-generator::index');
    }

    public function collections()
    {
        $collections = Collection::all();

        $saved = [];
        if (Storage::disk('local')->exists($this->path)) {
            $saved = YAML::parse(Storage::disk('local')->get($this->path))['selected_collections'] ?? [];
        }

        return view('llms-generator::collections', [
            'collections' => $collections,
            'saved' => $saved,
        ]);
    }

    public function additional_fields()
    {
        return view('llms-generator::additional_fields');
    }

    public function generate_page()
    {
        return view('llms-generator::generate_page');
    }

    public function generate_file(Request $request)
    {
        LlmsTxtService::generate('manual');

        return redirect()
            ->to($request->input('redirect_to', cp_route('llms-generator.index')))
            ->with('success', 'llms.txt was successfully generated.');
    }

}
