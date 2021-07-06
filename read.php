<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<title>M1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style_crud.css">
</head>

<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Read</h4><br>
			<?php if (isset($_GET['success'])) { ?>
				<div class="alert alert-success" role="alert">
					<?php echo $_GET['success']; ?>
				</div>
			<?php } ?>
			<div class="row align-items-center">
				<div class="col-10">
			<form class="search" action="" method="POST">
				<div class="row">
				<div class="col-md-6">
					<input type="text" name="search" class="form-control" placeholder="Search By Name" value="" >
				</div>
				<div class="col-md-3">
					<button class="btn btn-secondary">Search</button>
				</div>
				</div>
			</form>
			</div>
			<div class="col-2">
			<a type="button" href="index.php" class="btn btn-success">Create</a>
			</div>
			</div>
			<?php if (mysqli_num_rows($result)) { ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Mã Bài Viết</th>
							<th scope="col">Tên Bài Viết</th>
							<th scope="col">Tác Giả</th>
							<th scope="col">Ngày Đăng</th>
							<th scope="col">Số Trang</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while ($rows = mysqli_fetch_assoc($result)) {
						?>
							<tr>
								<td><?= $rows['mabv'] ?></td>
								<td><?= $rows['tenbv'] ?></td>
								<td><?php echo $rows['tacgia']; ?></td>
								<td><?php echo $rows['ngaydang']; ?></td>
								<td><?php echo $rows['sotrang']; ?></td>
								<td><a href="update.php?id=<?= $rows['mabv'] ?>" class="btn btn-primary">Update</a>

									<a href="php/delete.php?id=<?= $rows['mabv'] ?>" class="btn btn-danger">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } ?>
			<div class="link-right">
				<a href="login.php" class="link-primary">Logout</a>
			</div>
		</div>
	</div>
</body>

</html>