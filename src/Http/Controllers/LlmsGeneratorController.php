<?php

namespace Ravenna\LlmsGenerator\Http\Controllers;

use Illuminate\Http\Request;
use Ravenna\LlmsGenerator\Services\LlmsTxtService;

class LlmsGeneratorController
{
    public function generateFile(Request $request)
    {
        LlmsTxtService::generate();

        return redirect()
            ->to(cp_route('llms-generator.generate_page'))
            ->with('success', 'Your llms.txt file has been generated successfully!');
    }
}
