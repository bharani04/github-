<?php
include('form2.php');
?>
<html>
<body>

		<form method="post" action="server.php" >
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="row1">
			
			<label>Name</label><br><br>
		
            <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
            <label>email</label><br><br>
		
            <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
            <label>mobile</label><br><br>
		
            <input type="text" name="mobile" value="<?php echo $mobile; ?>"><br><br>
		
			<lable>Address</lable><br><br>

			<input type="text" name="address" value="<?php echo $address; ?>"><br><br>
		</div>
		<div class="btn">
			<?php if ($edit_state == false): ?>
				<button type="submit" name="save">save</button>
				<?php else: ?>
			<button type="submit" name="update">update</button>
		<?php endif ?>
		</div>
		
		</form>
	</body>
	</html>