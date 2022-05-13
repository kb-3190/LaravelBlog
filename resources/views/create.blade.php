<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
    <title>新規投稿</title>
</head>
<body>
    <div class="wrapper">
        <h1>新規投稿</h1>
            <form action="{{ route('post.store') }}" method="POST">
                @csrf
                <input type="text" name="title" id="" class="title" placeholder="タイトル">
                <textarea name="article" id="editor"></textarea>
                <input type="submit" value="投稿" class="submit">
            </form>
    </div>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#editor', {
            modules: {
                toolbar: [
                ['bold', 'italic', 'underline', 'strike'],
                [{'color': []}, {'background': []}],
                ['link', 'blockquote', 'image', 'video'],
                [{ list: 'ordered' }, { list: 'bullet' }]
                ]
            },
            placeholder: 'Write your question here...',
            theme: 'snow'
        });
    </script>
</body>
</html>