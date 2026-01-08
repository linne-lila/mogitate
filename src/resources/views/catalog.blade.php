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
        <div class="catalog__heading">
            <div class="catalog__title">
                <h2>商品一覧</h2>
            </div>

            <div class="catalog__addition">
                <a class="addition__button" href="/products/register">
                    ＋商品を追加
                </a>
            </div>
        </div>

        <div class="catalog__content">
            <div class="catalog__search">
                <form action="http://localhost/products" method="get">
                    <input class="catalog__search-area" type="search" name="search" placeholder="商品名で検索">
                    <input class="catalog__search-submit" type="submit" name="submit" value="検索">
                </form>
                        
                <div class="catalog__sort">
                    <h4>価格順で表示</h4>
                </div>

                <div class="catalog__sort">
                </div>
            </div>

            <table>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$product->image}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                    </tr>
                @endforeach
            </table>
                 
  
            </div>
        </div>
    </main>
    
</body>

</html>