<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Tyler Beck : Fork - https://github.com/ebasefm/application-test</title>
		<style>
			table{
				width: 100%;
				min-width: 500px;
				border-collapse: separate;
				border-spacing: 0px;
				border: 1px solid #ccc
			}
			tr{
				width: 100%;
				min-width: 500px
			}
			th, td{
				width: 20%;
				padding: 3px;
				min-width: 125px;
				border: 1px solid #ccc
			}
			button.moreinfo{
				width: 25%
			}
			.center{
				text-align: center
			}
		</style>
	</head>
	<body>
		<?php
		$people = array(
			array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
			array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
			array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
			array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
			array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
		);
		?>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Alert</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($people as $id => $data)
				{
					?>
					<tr>
						<td class="center"><?php echo $data['id']; ?></td>
						<td><?php echo $data['first_name']; ?></td>
						<td><?php echo $data['last_name']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<td class="center"><button class="moreinfo" id="<?php echo $id; ?>">+</button></td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
		var people = <?php echo(json_encode($people)); ?> 
		$(".moreinfo").click(function() {
			alert('Name : ' + people[this.id].first_name + ' ' + people[this.id].last_name + '\nEmail : ' + people[this.id].email);
		});
	</script>
</html>
