<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | KoKode</title>

    <link rel="stylesheet" href="{{asset('css/articles.css')}}">
    @yield('css')
</head>

<body>
    <div class="lr_container">
        <aside class="aside">
            <h1 class="aside__title">KoKode.</h1>
            <nav class="navigation">
                <ul class="navigation__list">
                    <div>
                        <li>
                            <a href="./index.php" class="navigation__items">Dashboard</a>
                        </li>
                        <li>
                            <a href="./articles.php" class="navigation__items navigation--active">Artikel</a>
                        </li>
                        <li>
                            <a href="./categories.php" class="navigation__items">Kategori Artikel</a>
                        </li>
                    </div>
                <div>
                    <li>
                        <form action="./../auth_process.php" method="POST"> <button type="submit" name="logout" class="navigation__items button--red"> Keluar </button> </form>
                    </li>
                </div>
            </ul>
        </nav>
        </aside>

    @section('content')
    @show

    </div>

    @yield('js')

    </body>

</html>
