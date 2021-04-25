
<html>
	
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>

	body {
		background-color: lavender;
		margin:0;
	}
	
	body {margin:0;}
	.main {
		padding: 12px;
		margin-top: 50px;
		height: 900px; /* Used in this example to enable scrolling */
	}
	input[type=text], select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	input[type=submit] {
		width: 100%;
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]:hover {
		background-color: #45a049;
	}

	.container {
		padding: 50px 50px;
		background-color: white	;
		width: 800px;
		margin-top: 0px;
        margin-left: auto;
        margin-right: auto;
	}


	</style>

		
</head>

<body>

    
	<div class="main">
		<div class="container" >
		<h2><center><font style="font-family:Trajan Pro;color:teal;">Apply Form</font></center></h2>
		<br>
		
			<form action="{{ route('blogs.ide') }}" >
				<div class="col-sm-13 form-group">
				<label for="classNo">Class</label>
				<select name="classNo" required>
					<option value="">-- Please Choose your Class --</option>
					<option value="CS264">CS264</option>
					<option value="A1002">A1002</option>
					<option value="A1003">A1003</option>
					<option value="A1004">A1004</option>
					<option value="A1005">A1005</option>
				</select>
				</div>
				
				<div class="col-sm-13 form-group">
				<label for="name">Name </label>
				<input type="text" name="name" placeholder="Your name.." required>
				</div>
				
				<div class="col-sm-13 form-group">
				<label for="id">Student/Staff ID </label>
				<input type="text" name="id" placeholder="Your id.." required>
				</div>
				
				<div class="col-sm-13 form-group">
				<label for="file">Upload a File</label>
				<input type="file" name="file" placeholder="Please upload your file.." required>

				
				<div class="col-sm-13 form-group">
                    <input type="submit" class="btn btn-lg btn-warning btn-block" name="submit" value="Submit">
                </div>
			</form>	
				
				
		
		</div>
	</div>
	
		
</body>
</html>

