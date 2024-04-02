<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel PWA Demo</title>
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="offline-notification">You are offline. Please check your connection.</div>
        <header>
            <nav>
            <div class="logo">PWA Inc.</div>
            <ul>
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('/about') }}">About</a>
                </li>
            </ul>
            </nav>
            <div class="hero">
            <h1>Progressive Web App (PWA)</h1>
            <p>The next BIG thing for the mobile web!</p>
            <button type="button" class="add-button">Add to home screen</button>
            </div>
            <a class="photo-credit no-curves"
            href="https://unsplash.com/@lucabravo?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge"
            target="_blank" rel="noopener noreferrer"
            title="Download free do whatever you want high-resolution photos from Luca Bravo"><span
                style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg"
                style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;"
                viewBox="0 0 32 32">
                <title>unsplash-logo</title>
                <path
                    d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z">
                </path>
                </svg></span><span style="display:inline-block;padding:2px 3px;">Luca Bravo</span></a>
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
        <footer>
            <div class="container">
            <p>&copy; COMP3385 Web Dev Superstars Inc.</p>
            </div>
        </footer>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
