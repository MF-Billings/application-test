<?php

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

?>

<!doctype html>
<html>
	<head>
	 	<meta charset="utf-8">
		<title>Test 1</title>
		<style>
			td {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>Given name</th>
					<th>Surname</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($people as $person): ?>
					<tr>
						<td><?=$person['id'];?></td>
						<td><?=$person['first_name'];?></td>
						<td><?=$person['last_name'];?></td>
						<td><?=$person['email'];?></td>
						<td>
							<input type="button" value="Info" 
							onclick="alert('Name: <?=$person['first_name'] . " " . $person['last_name'];?> \nEmail: <?=$person['email']?>')"/>
						</td>
					<tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>