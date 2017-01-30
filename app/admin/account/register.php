	<div class="loginwrapper">
	<div style="width: 90.333%; margin-left: auto; margin-right: auto;">
		<form action="process.php?action=register" method="POST">
			</br>
			<div class="fwhole">
			<label>FIRST NAME *</label></br>
			<input type="text" name="firstname"  placeholder="Enter your first name" required>
			</div>
			</br>
			
			<div class="fwhole">
			<label>LAST NAME *</label></br>
			<input type="text" name="lastname"  placeholder="Enter your last name" required>
			</div></br></br></br>
			</br>
			
			<div class="fwhole">
			<label>USERNAME *</label></br>
			<input type="text" name="username" placeholder="Enter your username" required>
			</div>
			</br>
			
			<div class="fwhole">
			<label>PASSWORD *</label></br>
			<input type="password" name="password" placeholder="Enter password" required>
			</div>
			</br>
			</br>
			<select name="level" class="select" style="width: 100%;"required>
					<option value="">Select Level</option>
					<option value="admin">Admin</option>
					<option value="staff">Staff</option>
					<option value="delivery">Delivery</option>
				</select>
			</br></br>
			
			<div class="centerregbtn">
				<button class="registerbtn" style="width: 100%;" type="submit">ADD</button>
			</div>
		</form>
	</div>
	</br>
</div>