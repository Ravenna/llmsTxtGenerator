<?php

namespace Ravenna\LlmsGenerator\Http\Controllers;

use Statamic\Facades\YAML;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Statamic\Http\Controllers\Controller;

class CollectionsController extends Controller
{
    protected $path = 'addons/llmsgenerator/collections.yaml';

    public function save(Request $request)
    {
        $selected = $request->input('collections', []);

        if(\is_array($selected) && count($selected) === 0){
          return back()->with('empty', 'Please select at least a minimum of ONE collection to generate the llms.txt file.');            
        }

        $data = [
            'selected_collections' => $selected,
        ];

        Storage::disk('local')->put($this->path, YAML::dump($data));

        return back()->with('success', 'Selections saved!');
    }
}
