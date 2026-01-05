<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/products">
                mogitate
            </a>
        </div>
    </header>

    <main class="main">
        <div class="catalog__content">
            <div class="catalog__heading">
                <h2>商品一覧</h2>

            </div>

            <div class="addition">
                <a class="addition__button" href="/products/register">
                    ＋商品を追加
                </a>
            </div>

        </div>
    </main>
    
</body>

</html>