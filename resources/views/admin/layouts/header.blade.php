<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ env('APP_URL') }}" class="nav-link" target="_blank"><u>Перейти на сайт</u></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <span class="nav-link text-black">
                {{ Auth::user()->name.' '.Auth::user()->last_name }}
            </span>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Выйти
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span id="live-clock">
                    @php
                        $dt = new DateTime();
                        $dt->setTimezone(new DateTimeZone('Europe/Warsaw'));
                        echo $dt->format('H:i:s');
                    @endphp
                </span>
                <span> | {{ $dt->format('F j') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<script>
    var live_clock = document.getElementById('live-clock');
    function time() {
        var d = new Date(), s = d.getSeconds(), m = d.getMinutes(), h = d.getHours();
        live_clock.textContent = ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
    }
    setInterval(time, 1000);
</script>
