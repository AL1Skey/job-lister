
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="{{ asset('css/bg-image.css') }}">
    <link rel="stylesheet" href="{{ asset('css/text.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          screens:{
            'android': { 'max' : '720px'},
            'tablet': { 'max' : '1080px'},
          },
          extend: {

            colors: {
              clifford: '#da373d',
              bland:'#f3f3f3',
              red:'#ff0000',
              lightRed:'#ff7376',
              primary:'#38bdf8',
              lightPrimary:"#4fb5b2",
              secondary:'#0f172a'
            }
          }
        }
      }
    </script>
    <title>Laragigs</title>
</head>
<body class="bg-[#f3f3f3] ">
    
    @include('partials._navbar')

    @include('partials._heading')

    @include('partials._search')
    {{-- <header class="flex flex-col w-full text-center p-5 h-52 opacity-95" style="background-image:url('{{ asset('images/background.jpg') }}')">
      <h1 class="text-3xl font-bold">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, enim?
      </h1>
      <p class="text-sm">
          Lorem ipsum dolor sit.
      </p>
    </header> --}}

    <main>
      @yield('content')
    </main>
</body>
</html>