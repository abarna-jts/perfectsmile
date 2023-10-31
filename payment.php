


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Payment getway form design in Hindi</title>
	<link rel="stylesheet" type="text/css" href="payment.css">
	<style>
#form-group .error p{
    color:#f53b57;
}
#form-group .error input{
    border-color:#f53b57;
}
#form-group .success p{
    color:#115933;
}
#form-group .success input{
    border-color:#05c46b;
}
#form-group p{
    float:left;
    font-size: 0.76rem;
    
}
#form-group{
    margin-bottom:10px;
}
.error-message {
color: red;
font-size:0.3em;
}

.valid-message {
color: green;
font-size:1em;
}
.success {
  background-color: #9fd2a1;
  padding: 5px 10px;
  color: #326b07;
  text-align: center;
  border-radius: 3px;
  font-size: 14px;
  margin-top: 10px;
}

</style>
</head>
<body>
<header>
	<div class="container">
		<div class="left">
			<h3>BILLING ADDRESS</h3>
			<form id="form-group" action="booking_action.php" method="POST">
				<div>
				Full name
				<input type="text" name="name" id="name" placeholder="Enter name"><br>
				<p id="name-message">
				</div>
				<div>
					<br>
				Email
				<input type="text" name="email" id="email" placeholder="Enter email">
				<p id="e-message">
				</div>
				<div>
				<br>
				Address
				<input type="text" name="address" id="address" placeholder="Enter address">
				</div>
				<div>
				<br>
				City
				<input type="text" name="city" id="city" placeholder="Enter City"><br>
				<div id="zip">
					<label>
					<br>
						State
						<select>
							
							<option>Choose State..</option>
							<option>Rajasthan</option>
							<option>TamilNadu</option>
							<option>Uttar Pradesh</option>
							<option>Madhya Pradesh</option>
						</select>
					</label>
						<label>
						<br>
						Zip code
						<input type="number" name="zipcode" id="zipcode" placeholder="Zip code"><p id="zip-message">
					</label>
				</div>
				</div>
			</form>
		</div>
		<div class="right">
			<h3>PAYMENT</h3>
			<form action="booking_action.php" method="POST">
				Accepted Card <br>
				<img src="image/card1.png" width="100">
				<img src="image/card2.png" width="50">
				<br><br>
				Credit card number
			<input type="text" name="cardNumber" id="cardNumber" placeholder="Enter card number" oninput="formatCardNumber()">
			<br>
				Exp month
				<select>
							<option>Choose Month..</option>
							<option>January</option>
							<option>February</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>July</option>
							<option>August</option>
							<option>September</option>
							<option>October</option>
							<option>November</option>
							<option>December</option>
						</select>
				<div id="zip">
					<label>
					<br>
						Exp year
						<br>
						<select>
							<option>Choose Year..</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
						</select>
					</label>
						<label>
						<br>
						CVV
						
						<input type="number" name="cvv" id="cvv" placeholder="Enter CVV">
						<p id="cvv-message"></p>
					</label>
				</div>
			</form>
			<input type="submit" name="" value="Proceed to Checkout">
		</div>
	</div>
</header>
<script>
let name = document.getElementById("name");
let email = document.getElementById("email");
let zipcode = document.getElementById("zipcode");

            
        name.addEventListener('input', function () {
          // Get the value of the input
          var x = name.value;
          var text;
          
          // Define the minimum and maximum allowed length
          var minLength = 3;
          var maxLength = 30;
    
          // Check the length of the input value
          if (x.length < minLength || x.length > maxLength) {
              // Display an error message
              text="Input must be 6 characters";
              document.getElementById("name-message").innerHTML = '<p class="error-message">' + text + '</p>';
          } else {
              // Clear the error message if the length is valid
              text= "valid input";
              document.getElementById("name-message").innerHTML = '<p class="valid-message">' + text + '</p>';
          }
        
          
      });

      zipcode.addEventListener('input', function () {
        // Get the value of the input
        var x = zipcode.value;
        var text;
        
        // Define the minimum and maximum allowed length
        var minLength = 6;
        var maxLength = 6;
  
        // Check the length of the input value
        if (x.length < minLength || x.length > maxLength) {
            // Display an error message
            text="Input must be more that 3 characters";
            document.getElementById("zip-message").innerHTML = '<p class="error-message">' + text + '</p>';
        } else {
            // Clear the error message if the length is valid
            text= "valid input";
            document.getElementById("zip-message").innerHTML = '<p class="valid-message">' + text + '</p>';
        }
      
        
    });


      email.addEventListener('input',function(){
        var z=email.value;
        var text;

        if (!z.includes('@')) {
            text = "Email must contain '@' symbol";
            document.getElementById("e-message").innerHTML = '<p class="error-message">' + text + '</p>';
    } else {
        text = "Valid email";
        document.getElementById("e-message").innerHTML = '<p class="valid-message">' + text + '</p>';
    }
    
      }); </script>
	  <script>
        function formatCardNumber() {
            var cardNumber = document.getElementById("cardNumber");
            var formattedCardNumber = cardNumber.value.replace(/\D/g, ''); // Remove non-numeric characters
            var formatted = '';

			if (formattedCardNumber.length > 12) {
                formattedCardNumber = formattedCardNumber.slice(0, 12); // Limit to 12 digits
            }

            for (var i = 0; i < formattedCardNumber.length; i++) {
                if (i > 0 && i % 4 === 0) {
                    formatted += ' '; // Add a space after every 4 digits
                }
                formatted += formattedCardNumber.charAt(i);
            }

            cardNumber.value = formatted;
        }
		</script>
		
</body>
</html>