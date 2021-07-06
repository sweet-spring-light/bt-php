<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<title>M1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style_crud.css">
</head>

<body>
	<div class="container">
		<form class="update__box" action="php/update.php" method="post">

			<h4 class="display-4 text-center">Update</h4>
			<hr><br>
			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $_GET['error']; ?>
				</div>
			<?php } ?>

			<div class="form-group">
				<label for="post">Tên Bài Viết</label>
				<input type="name" class="form-control" id="post" name="post" value="<?= $row['tenbv'] ?>">
			</div>

			<div class="form-group">
				<label for="author">Tên Tác Giả</label>
				<input type="author" class="form-control" id="author" name="author" value="<?= $row['tacgia'] ?>">
			</div>

			<div class="form-group">
				<label for="date__created">Ngày Đăng</label>
				<input type="date" class="form-control" id="date__created" name="date__created" value="<?= $row['ngaydang'] ?>">
			</div>

			<div class="form-group">
				<label for="pages">Số Trang</label>
				<input type="number" class="form-control" id="pages" name="pages" value="<?= $row['sotrang'] ?>">
			</div>
			<input type="text" name="mabv" value="<?= $row['mabv'] ?>" hidden>

			<button type="submit" class="btn btn-primary" name="update">Update</button>
			<a href="read.php" class="link-primary">View</a>
		</form>
	</div>
</body>

</html>