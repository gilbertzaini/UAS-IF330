<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light px-4" style="height: 4em; background-color: #00bdb5">
    <a class="navbar-brand my-auto" href="#">Klinik Kita Sehat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse my-auto" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/jadwal') }}">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/dashboard') }}"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/dashboard') }}"></a>
        </li>
      </ul>
    </div>
    @if (Route::has('login'))
    <div class="my-auto">
        @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
    <br/>
    @endif
  </nav>