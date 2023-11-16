<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Task List App</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>

  {{-- blade-formatter-disable --}} 
  <style type="text/tailwindcss">
    .btn {
      @apply rounded-md px-2 py-1 text-center text-slate-700 font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
    }
    .link {
      @apply font-medium text-gray-700 underline decoration-pink-500
    }

    .error {
      @apply text-red-500 text-sm
    }

    label{
      @apply block uppercase text-slate-700 mb-2
    }
    input, textarea {
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }
    /* 
      appearance-none = removes all default appearance of element
      border w-full = makes the element take the whole available width
      leading-tight = makes the line-height of the element to be a little higher
    */
  </style>
  {{-- blade-formatter-enable --}}

</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
  <h1 class="text-2xl mb-3">@yield('title')</h1>
  {{-- 
    AKA directives; only works if alpine is running
    x-data = defines new alpine component 
    x-show = controls div; only shows div if flash = true
    { flash: true } = controls if flash message is visible or not
  --}}
  <div x-data="{ flash: true }">
    @if(session()->has('success'))
      <div x-show="flash"
        class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700"
        role="alert">
        <strong class="font-bold">Success!</strong>
        <div>{{session('success')}}</div>

        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
            stroke-width="1.5" @click="flash = false"
            stroke="currentColor" class="h-6 w-6 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </span>
      </div>
    @endif
    
    @yield('content')
  </div>
</body>
</html>

{{-- 
  TailwindCSS classes
   = container - creates a centered container with a max width based on the screen size
   = mx-auto - will horizontally center the element within the container
   = mt-10 - adds a margin on top of body using ten units

  CDN = shortcut for Content Delivery Network
      = a distributed network of servers and delivers content to users based on geographical location
--}}