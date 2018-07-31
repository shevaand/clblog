<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой Блог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Мой<a href="/"> блог </a>на голом PHP</h1>
        <div>
            <div class="article">
                <h3><?=$article['title']?></h3>
                <em>Опубликовано: 2018</em>
                <p><?=$article['content']?></p>
            </div>
        </div>
        <footer class="footer">
            <p>Мой блог <br> Copyright &copy; 2018</p>
        </footer>
    </div>
</body>
</html>