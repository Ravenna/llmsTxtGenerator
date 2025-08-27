{{-- resources/views/collections.blade.php --}}
@extends('statamic::layout')
@section('title', 'LLMs Collections')

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
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
          <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
        </svg>
        <h1 style="margin-left:12px">LLMs Collections</h1>
      </div>
      <p>Select and configure which collection(s) you wish to include in your <em><b>llms.txt</b></em> file.</p>
    </header>
    <div class="flex flex-wrap p-4">
      <div class="w-full lg:w-1/2 p-4 rounded-md flex flex-col items-start group">

        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Collections</h3>

        <p>From the list on the right showing all of your collections, select which of them you wish to have included in your websites <em><b>llms.txt</b></em> file. When you're ready click the "Save" button below to retain your choices. Then go back to the <em>Generate</em> page to generate your new <em><b>llms.txt</b></em> file</p>

        <div class="py-4 flex flex-col items-start rounded-md group">

          @if (session('success'))
            <div class="py-4 flex items-start rounded-md group">
              <div class="px-4 py-3 rounded-md" style="background-color: #d1fae5; border: 1px solid #6ee7b7;">
              <p style="color: #065f46;">{{ session('success') }}</p>
              </div>
            </div>
          @endif

          @if (session('empty'))
            <div class="py-4 flex items-start rounded-md group">
              <div class="px-4 py-3 rounded-md" style="background-color: #ffb3ca; border: 1px solid #d30e4a;">
              <p style="color: #d30e4a;">{{ session('empty') }}</p>
              </div>
            </div>
          @endif

        </div>

      </div>
      <div class="w-full lg:w-1/2 p-4 rounded-md flex flex-col items-start group">

      <form method="POST" action="{{ cp_route('llms-generator.collections.save') }}" style="width:100%;">
          @csrf
          <ul style="width:100%; list-style: none; padding: 0; margin: 0; border: 1px solid #cbd5e1; border-radius: 6px; overflow: hidden;">
              @foreach ($collections as $index => $collection)
                  @php
                      $handle = $collection->handle();
                      $isChecked = in_array($handle, $saved ?? []);
                  @endphp
                  <li
                      style="
                          width:100%;
                          display: flex;
                          align-items: center;
                          padding: 0.75rem 1rem;
                          background-color: {{ $index % 2 === 0 ? '#f9fafb' : '#ffffff' }};
                          border-bottom: {{ $index === count($collections) - 1 ? 'none' : '1px solid #cbd5e1' }};
                      "
                  >
                      <input
                          type="checkbox"
                          name="collections[]"
                          value="{{ $handle }}"
                          id="collection-{{ $index }}"
                          {{ $isChecked ? 'checked' : '' }}
                          style="width:16px;height:16px;accent-color:#3b82f6;margin-right:12px;cursor:pointer;"
                      />
                      <label for="collection-{{ $index }}" style="cursor:pointer;flex-grow:1;user-select:none;">
                          {{ $collection->title() ?? $handle }}
                      </label>
                  </li>
              @endforeach
          </ul>

          <div style="margin-top:1rem;">
              <button type="submit" class="btn-primary">Save</button>
          </div>
          
      </form>

      </div>
    </div>
  </div>
@endsection
