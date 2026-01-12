<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
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
        <div class="register__content">
            <div class="register__heading">
                <h2>商品登録</h2>
            </div>  

        </div>

        <form class="form" action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">商品名</span>
                    <span class="form__label--required">必須</span>
                </div>

                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" placeholder="商品名を入力">
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div> 
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">値段</span>
                    <span class="form__label--required">必須</span>
                </div>

                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="number" name="price" placeholder="値段を入力">
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">商品画像</span>
                    <span class="form__label--required">必須</span>
                </div>

                <div class="form__group-content">
                    <div class="form__input--text">
                            <input type="file" name="image" required>
                    </div>

                    
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">季節</span>
                    <span class="form__label--required">必須</span>
                    <span class="form__label--comment">複数選択可</span>
                </div>

                <div class="form__group-content">
                    <div class="form__input--text">
                        <label><input type="checkbox" name="kisetu-name">春</label>
                        <label><input type="checkbox" name="kisetu-name">夏</label>
                        <label><input type="checkbox" name="kisetu-name">秋</label>
                        <label><input type="checkbox" name="kisetu-name">冬</label>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div> 
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">商品説明</span>
                    <span class="form__label--required">必須</span>
                </div>

                <div class="form__group-content">
                    <div class="form__input--text">
                        <textarea name="description" cols="30" rows="3" placeholder="物品の説明を入力"></textarea>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div> 
            </div>

            <div class="register__addition">
                <a class="addition__button" href="/products">
                    戻る
                </a>
            </div>

            <button>登録</button>


        </form>
    </main>
    
</body>
</html>