<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    @yield('css')
    <title>Apadok</title>
</head>
<body>
    <nav id="header-container">
        <div class="content navbar-container">
            <a href="{{ route('index') }}" class="navbar-logo">
                <img src="{{ asset('images/apadokLogo.png') }}" alt="Apadok">
            </a>
            @yield('navbar-menu')
        </div>
    </nav>
    <main id="main-container">
        @yield('main')
    </main>
    <footer id="footer-container">
        <div class="footer-text">
            <p>Copyright 2022 Apadok</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js" integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function scroll(target, duration) {
            var target = document.querySelector(target);
            var targetPos = target.getBoundingClientRect().top + window.scrollY;
            var startPos = window.pageYOffset;
            var distance = targetPos - startPos;
            var startTime = null;

            function ease(t, b, c, d) {
                t /= d / 2;
                if (t < 1) return c / 2 * t * t + b;
                t--;
                return -c / 2 * (t * (t - 2) - 1) + b;
            }

            function animation(currentTime) {
                if (startTime === null) startTime = currentTime;
                var timeElapsed = currentTime - startTime;
                var exec = ease(timeElapsed, startPos, distance, duration);
                window.scrollTo(0, exec);
                if (timeElapsed < duration) requestAnimationFrame(animation);
            }

            requestAnimationFrame(animation);
        }

        var section1 = document.querySelector('.trigger-app');

        section1.addEventListener('click', function() {
            scroll('.section-app', 1000)
        });
    </script>
</body>
</html>