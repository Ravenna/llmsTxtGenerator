{{-- resources/views/collections.blade.php --}}
@extends('statamic::layout')
@section('title', 'LLMs Generate')

@section('content')
  <div class="card card-lg p-0 content">
    <header class="py-6 px-8 border-b">
      <div class="inline-flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cloud-lightning" viewBox="0 0 16 16">
            <path d="M13.405 4.027a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 10H13a3 3 0 0 0 .405-5.973M8.5 1a4 4 0 0 1 3.976 3.555.5.5 0 0 0 .5.445H13a2 2 0 0 1 0 4H3.5a2.5 2.5 0 1 1 .605-4.926.5.5 0 0 0 .596-.329A4 4 0 0 1 8.5 1M7.053 11.276A.5.5 0 0 1 7.5 11h1a.5.5 0 0 1 .474.658l-.28.842H9.5a.5.5 0 0 1 .39.812l-2 2.5a.5.5 0 0 1-.875-.433L7.36 14H6.5a.5.5 0 0 1-.447-.724z"/>
          </svg>
        <h1 style="margin-left:24px">LLMs Generate</h1>
      </div>
      <p>Generates your <em><b>llms.txt</b></em> file and puts public on your website.</p>
    </header>
    <div class="flex flex-wrap p-4">
      <div class="w-full lg:w-100 p-4 flex items-start hover:bg-gray-200 rounded-md group">


      </div>
    </div>
  </div>
@endsection
