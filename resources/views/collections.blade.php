{{-- resources/views/collections.blade.php --}}
@extends('statamic::layout')
@section('title', 'LLMs Collections')

@section('content')
  <div class="card card-lg p-0 content">
    <header class="py-6 px-8 border-b">
      <div class="inline-flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
          <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
        </svg>
        <h1 style="margin-left:24px">LLMs Collections</h1>
      </div>
      <p>Select and configure which collection(s) you wish to include in your <em><b>llms.txt</b></em> file.</p>
    </header>
    <div class="flex flex-wrap p-4">
      <div class="w-full lg:w-100 p-4 flex items-start hover:bg-gray-200 rounded-md group">


      </div>
    </div>
  </div>
@endsection
