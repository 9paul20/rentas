@props(['text', 'href'])

<div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
    <button type="button" onclick="window.location.href='{{ $href }}'"
        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
        {{ $text }}
    </button>
</div>