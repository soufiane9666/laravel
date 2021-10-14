@section("header")
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="/css/@yield('css')" >
</head>

<body>
    <header>

    <nav>
        <ul>
            <li>
                <a href="contact"> Page Contact </a>
            </li>
            <li>
                <a href='/'> Page d'Acuille </a>
            </li>
            <li>
                <a href="page1"> Page 1 </a>
            </li>
        </ul>
    </nav>
    </header>
    <div class="im">
    <img src="img/imgg.png">
    </div>
    <main>
        @yield("content")
    </main>
    <footer>
        <p> footer</p>
    </footer>
</body>

</html>