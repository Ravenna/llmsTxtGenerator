@extends('statamic::layout')

@section('title', 'LLMs Generator')

@section('content')
  <div class="card card-lg p-0 content">
    <header class="py-6 px-8 border-b">
      <h1>LLMs Generator</h1>
      <p>Automatically create and maintain a custom <em><b>llms.txt</b></em> file, for any and all your collections and content to allow the new proposed LLMs standard to consume your website with AI Large Language Models.</p>
    </header>
    <div class="flex flex-wrap p-4">
      <div class="w-full lg:w-1/2 p-4 flex items-start rounded-md group">

        <a href="{{ cp_route('llms-generator.collections') }}" class="mr-2 text-grey-80">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
            <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
          </svg>
        </a>
        <div class="flex-1">
          <h3 class="mb-1"><a href="{{ cp_route('llms-generator.collections') }}" class="text-blue">Collections</a></h3>
          <p>Select and configure which collection(s) you wish to include in your <em><b>llms.txt</b></em> file.</p>
        </div>

      </div>
      <!--<div class="w-full lg:w-1/2 p-4 flex items-start  rounded-md group">

        <a href="{{ cp_route('llms-generator.additional_fields') }}" class="mr-2 text-grey-80">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
          </svg>
        </a>
        <div class="flex-1">
          <h3 class="mb-1"><a href="{{ cp_route('llms-generator.additional_fields') }}" class="text-blue">Additional Fields</a></h3>
          <p>Create additional data fields to include in your <em><b>llms.txt</b></em> file.</p>
        </div>

      </div>-->
      <div class="w-full lg:w-1/2 p-4 flex items-start  rounded-md group">

        <a href="{{ cp_route('llms-generator.generate_page') }}" class="mr-2 text-grey-80">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cloud-lightning" viewBox="0 0 16 16">
            <path d="M13.405 4.027a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 10H13a3 3 0 0 0 .405-5.973M8.5 1a4 4 0 0 1 3.976 3.555.5.5 0 0 0 .5.445H13a2 2 0 0 1 0 4H3.5a2.5 2.5 0 1 1 .605-4.926.5.5 0 0 0 .596-.329A4 4 0 0 1 8.5 1M7.053 11.276A.5.5 0 0 1 7.5 11h1a.5.5 0 0 1 .474.658l-.28.842H9.5a.5.5 0 0 1 .39.812l-2 2.5a.5.5 0 0 1-.875-.433L7.36 14H6.5a.5.5 0 0 1-.447-.724z"/>
          </svg>
        </a>
        <div class="flex-1">
          <h3 class="mb-1"><a href="{{ cp_route('llms-generator.generate_page') }}" class="text-blue">Generate</a></h3>
          <p>Generates your <em><b>llms.txt</b></em> file and puts public on your website.</p>
        </div>


      </div>
    </div>
  </div>
@endsection
