<?php
include('server.php');
if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$edit_state= true;
	$rec = mysqli_query($db,"SELECT * FROM infoo WHERE id=$id");
	$record = mysqli_fetch_array($rec);
     $name=$record['name'];
     $address=$record['address'];
        $email=$record['email'];
           $mobile=$record['mobile'];
     $id=$record['id'];
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Email</th>
					<th>Mobile</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_array($results)){ ?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['mobile']; ?></td>
					<td><button class="edit" style="background-color:lightblue;"><a href="index.php?edit=<?php echo $row['id'];?>">Edit</a></button>
					</td>
					<td><button class="delete" style="background-color:tomato;"><a href="server.php?del=<?php echo $row['id'];?>">delete</a></button>
					</td>
			
			<tr>
			<?php } ?>
 		</tbody>
		</table>
	</body>
	</html>
