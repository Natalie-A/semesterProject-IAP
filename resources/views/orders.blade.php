<!DOCTYPE html>

<html>
    <head>
        <title>Order page</title>
        <link rel="stylesheet" href="register.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<form id="signUp" action="" method="POST">
            @csrf
			<div class="body">
				<h1>Order Page</h1>
				<p>
					<input type="text" name="electronic_name" placeholder="Electronic Name" class="txt" required autocomplete="off" >
				</p>
				
				<p>
					<input type="number" name="price" placeholder="price" class="txt" required  autocomplete="off" >
				</p>
				<p>
					<input type="text" name="description" placeholder="description" class="txt" required  autocomplete="off" >
				</p>
                <select name="category" id="category">
				  <option value="Phones" >Phones</option>
				  <option value="Tvs">Televisions</option>
				  <option value="Computers">Computers</option>
				  
				</select>
                
				<p>
					<button type="submit" name="register" class="btn">Submit</button>
					<input type="hidden" name="event" value="register">
				</p>
			</div>
		</form>
	</body>
</html>