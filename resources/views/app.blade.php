<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Livewire Poll</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn {
            @apply rounded-md px-3 py-1 text-center font-medium text-white bg-rose-400 hover:bg-rose-500 focus:ring-2 focus:ring-rose-300 focus:outline-none shadow-md text-xs;
        }
        label {
            @apply block text-xs font-semibold text-gray-700 mb-1;
        }
        input,
        textarea {
            @apply shadow-sm border rounded-md w-full py-1.5 px-2 text-gray-700 leading-tight focus:ring-2 focus:ring-rose-400 focus:outline-none text-sm;
        }
        .error {
            @apply text-red-500 text-xs mt-1;
        }
    </style>
    {{-- blade-formatter-enable --}}
    @livewireStyles
</head>
<body class="bg-gray-100 font-sans text-gray-900">

<div class="container mx-auto mt-6 mb-6 max-w-lg bg-white p-4 rounded-lg shadow-md">
    <h2 class="text-lg font-semibold text-center text-gray-700 mb-4">Create Poll</h2>
    @livewire('create-poll')
</div>
<div class="container mx-8 mt-6 px-4">
    <h2 class="text-lg font-semibold text-center text-gray-700 mb-4">Available Polls</h2>
    @livewire('polls')
</div>

@livewireScripts
</body>
</html>
