{{-- resources/views/collections.blade.php --}}
@extends('statamic::layout')
@section('title', 'LLMs Generate')

@section('content')

  <div class="flex py-4 justify-end">
    <a href="{{ cp_route('llms-generator.index') }}" class="btn btn-primary ml-auto">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
      </svg>
    Back
    </a>
  </div>

  <div class="card card-lg p-0 content">
    <header class="py-6 px-8 border-b">
      <div class="inline-flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cloud-lightning" viewBox="0 0 16 16">
            <path d="M13.405 4.027a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 10H13a3 3 0 0 0 .405-5.973M8.5 1a4 4 0 0 1 3.976 3.555.5.5 0 0 0 .5.445H13a2 2 0 0 1 0 4H3.5a2.5 2.5 0 1 1 .605-4.926.5.5 0 0 0 .596-.329A4 4 0 0 1 8.5 1M7.053 11.276A.5.5 0 0 1 7.5 11h1a.5.5 0 0 1 .474.658l-.28.842H9.5a.5.5 0 0 1 .39.812l-2 2.5a.5.5 0 0 1-.875-.433L7.36 14H6.5a.5.5 0 0 1-.447-.724z"/>
          </svg>
        <h1 style="margin-left:12px">LLMs Generate</h1>
      </div>
      <p>When you first install LLMs Generator please use the manual generate button below to create your new <em><b>llms.txt</b></em>  file for your website.<br>Then whenever you add or remove an entry in any of your collections a new <em><b>llms.txt</b></em> file will be created to replace it.</p>
    </header>
    <div class="flex flex-wrap p-4 items-start">
      <div class="w-half lg:w-50 p-4 flex items-start rounded-md group">


        <form method="POST" action="{{ cp_route('llms-generator.generate_file') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Generate</button>
            <input type="hidden" name="redirect_to" value="{{ cp_route('llms-generator.generate_page') }}">
        </form>

      </div>

        @if (session('success'))
          <div class="w-half lg:w-50 p-4 flex items-start rounded-md group">
            <div class="px-4 py-3 rounded-md" style="background-color: #d1fae5; border: 1px solid #6ee7b7;">
            <p style="color: #065f46;">{{ session('success') }}</p>
            </div>
          </div>
        @endif

    </div>
  </div>
@endsection
