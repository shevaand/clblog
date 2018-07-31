<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой Блог</title>
	<link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	        <h1>Мой<a href="/"> блог </a>на голом PHP</h1>
	        <div>
	        	<form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
	        		<label>
	        			Название
	        			<input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
	        		</label>
	        		</br>
	        		<label>
	        			Дата
	        			<input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
	        		</label>
	        		</br>
	        		<label>
	        			Содержимое
	        			<textarea class="form-item" name="content" required><?=$article['content']?></textarea>
	        		</label>
	        		</br>
	        		<input type="submit" value="Сохранить" class="btn" href="/">
	        	</form>
	        </div>
	        <footer class="footer">
            <p>Мой блог <br> Copyright &copy; 2018</p>
        	</footer>
    </div>
</body>
</html>