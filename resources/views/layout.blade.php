<Html>
    <Head>
        <title>@yield('title', 'DevSolutions')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
        <script src="{{mix('/js/app.js')}}" defer></script>
    </Head>
  
    <Body>
        <div id="app" class="d-flex flex-column h-screen justify-content-between">
            <header>
                @include('partials.Nav')
                @include('partials.session-status')

            </header>
            <main class="py-5">
                @yield('content')
            </main>
            <footer class="bg-white text-center text-black-50 py-3 shadow">
                {{ config('app.name')}} | Copyright @ {{ date('yield') }}
            </footer>
        </div>
    </Body>


</Html>