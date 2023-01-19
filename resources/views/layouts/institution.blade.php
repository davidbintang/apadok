<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/institution.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    @yield('css')
    <title>Apadok</title>
</head>
<body>
    <div class="ui left fixed secondary vertical menu">
        <div class="item item-img">
            <img src="{{ asset('images/apadokLogo.png') }}">
        </div>
        <div class="item">
            <p>Klinik Sutorejo</p>
        </div>
        <div class="item">
            <a href="{{ route('institution.index') }}" class="item dashboard-btn">Dashboard</a>
        </div>
        <div class="item">
            <a class="item sub-btn monitoring-btn">Monitoring<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="{{ route('institution.screening') }}" class="item sub-item jumlah-screening-btn">Jumlah Screening</a>
                <a href="{{ route('institution.disease') }}" class="item sub-item all-disease-btn">Risiko Semua Penyakit</a>
                <a href="{{ route('institution.diabetes') }}" class="item sub-item diabetes-btn">Risiko Diabetes</a>
                <a href="{{ route('institution.kardiovaskular') }}" class="item sub-item kardiovaskular-btn">Risiko Kardiovaskular</a>
                <a href="{{ route('institution.stroke') }}" class="item sub-item stroke-btn">Risiko Stroke</a>
            </div>
        </div>
        <div class="item">
            <a href="{{ route('institution.peserta') }}" class="item peserta-btn">Peserta</a>
        </div>
        <div class="item">
            <a href="{{ route('institution.chat') }}" class="item chat-btn">Chat</a>
        </div>
        <button class="ui basic button" onclick="location.href='{{ route('index') }}'"><img src="{{ asset('images/log-out.png') }}" alt="logout">Log Out</button>
    </div>
    <main id="main-container">
        @yield('main')
    </main>
    <footer id="footer-container">
        <div class="footer-text">
            <p>Copyright 2022 Apadok</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js" integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.sub-btn').click(function() {
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
        })
    </script>
    @yield('js')
</body>
</html>