<?php

namespace Ravenna\LlmsGenerator\Http\Controllers;

use Statamic\Http\Controllers\CP\CpController as BaseCpController;

class CpController extends BaseCpController
{
    public function index()
    {
        return view('llms-generator::index');
    }

    public function collections()
    {
        return view('llms-generator::collections');
    }

    public function additional_fields()
    {
        return view('llms-generator::additional_fields');
    }

    public function generate()
    {
        return view('llms-generator::generate');
    }

}
