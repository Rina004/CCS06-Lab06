<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    // Debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
else:
?>
<style>
	form {
        background-color: #ffffff;
		display: flex;
		flex-direction: column;
		align-items: center;
		padding: 10px;
        max-width: 500px;
		border: 1px solid;
		border-radius: 5px;
        margin: 0 auto;	
	}
    h1 {
		text-align: center;
		margin-top: 20px;
	}
    input, select, button {
		margin: 5px 0;
		padding: 10px;
		border-radius: 5px;
		border: 1px solid #ccc;
		width: 100%;
		box-sizing: border-box;
		font-size: 16px;
	}
	input[type='color'] {
		height: 40px;
		padding: 0;
		border: none;
		box-shadow: none;
		background: transparent;
	}
	input[type='range'] {
		width: 100%;
	}
	button {
        align-items: center;
		background-color: #0a478c;
		color: #fff;
		border: none;
		cursor: pointer;
        width: 100px;
	}
	button:hover {
		background-color: #498fde;
	}
</style>

<h1>Enter Data</h1>
<form method="POST" action="profile.php">
Name: <input type="text" name="complete_name" /><br />
Birthdate: <input type="date" name="birthdate" /><br />
Email Address: <input type="email" name="email" /><br />
Program:
<select name="program">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
<option value="BSIS">B.S. Information Systems</option>
</select>
<br />
Favorite Color: <input type="color" name="favorite_color" /><br />
Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" /><br />
<button>Submit</button>
</form>

<?php
endif;
?>