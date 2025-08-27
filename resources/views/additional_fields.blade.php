{{-- resources/views/collections.blade.php --}}
@extends('statamic::layout')
@section('title', 'LLMS Additional Fields')

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
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
          </svg>
        <h1 style="margin-left:12px">LLMs Additional Fields</h1>
      </div>
      <p>Create additional data fields to include in your <em><b>llms.txt</b></em> file.</p>
    </header>
    <div class="flex flex-wrap p-4">
      <div class="w-full lg:w-100 p-4 flex items-start rounded-md group">

        <form method="POST" action="{{ cp_route('llms-generator.generate_file') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Generate</button>
            <input type="hidden" name="redirect_to" value="{{ cp_route('llms-generator.additional_fields') }}">
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
  </div>
@endsection
