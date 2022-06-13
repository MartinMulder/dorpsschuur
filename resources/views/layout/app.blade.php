<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- PWA  -->
  <meta name="theme-color" content="#ffff00"/>
  <meta name="background-color" content="#009900"/>
  <link rel="apple-touch-icon" href="{{ asset('images/gw_vlag.svg') }}">
  <link rel="manifest" href="{{ asset('/manifest.json') }}">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @livewireStyles
</head>
<body class="flex w-full bg-gw-green pb-2 h-10 h-screen">
  <div class="w-full border-b-2 border-gry-600">
    <div class="flex w-full">
      <img src="{{asset('images/gw_vlag.svg')}}" class="w-full h-20" />
    </div>
      <h1 class="absolute w-full text-center inset-x-0 top-0 py-5 font-bold text-5xl justify-center">Dorpsschuur</h1>
<div class="p-2">
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative " role="alert">
  <strong class="font-bold">Holy smokes!</strong>
  <span class="block sm:inline">Je hebt de app nog niet geinstalleerd! Doe dat nu!</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div>
</div>
      <div class="py-2 w-full h-full">
        <div class="w-full h-full bg-gray-100"></div> 
      </div>
  </div>
  @livewireScripts

  <script src="{{ asset('/sw.js') }}"></script>
  <script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
  </script>
</body>
</html>
