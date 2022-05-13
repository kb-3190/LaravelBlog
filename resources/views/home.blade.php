<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <title>My Blog</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="main-visual">
                <h1 class="title">プログラミング学習ブログ</h1>
                <p class="subtitle">プログラミング学習の記録</p>
            </div>
        </header>
        <div class="navigation">
            <div class="nav-inner">
                <ul class="nav-list">
                    <li class="nav-list-content"><a href="{{ route('home') }}">HOME</a></li>
                    <li class="nav-list-content"><a href="http://">ABOUT</a></li>
                    <li class="nav-list-content"><a href="http://">WORKS</a></li>
                    <li class="nav-list-content"><a href="http://">CONTACT</a></li>
                </ul>
            </div>
        </div>
        <div class="main-wrapper">
            <div class="index">
                @foreach ( $posts as $post)
                    <a href="{{ route('post.show', ['id'=>$post->id]) }}">
                        <div class="article-wrapper">
                            <img class="subnail" src="{{ $post->subnail }}" alt="" srcset="">
                            <p class="article-title">{{ $post->title }}</p>
                            <p class="date">{{ $post->created_at }}</p>
                        </div>
                    </a>
                @endforeach

            </div>
            <div class="side-bar">
                <div class="profile">
                    <p>Profile</p>
                    <img class="icon" src="../images/icon.jpg" alt="" srcset="">
                    <div class="profile-content">
                        <p class="name">Kb.i9o</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer>
    
    </footer>
</body>
</html>