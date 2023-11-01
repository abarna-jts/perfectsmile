

            let names = document.getElementById("names");
            let number= document.getElementById("number");
            let email = document.getElementById("email");
            let date = document.getElementById("date");
            
            names.addEventListener('input', function () {
          // Get the value of the input
          var x = names.value;
          var text;
          
          // Define the minimum and maximum allowed length
          var minLength = 3;
          var maxLength = 30;
    
          // Check the length of the input value
          if (x.length < minLength || x.length > maxLength) {
              // Display an error message
              text="Input must be more that 3 characters";
              document.getElementById("name-message").innerHTML = '<p class="error-message">' + text + '</p>';
          } else {
              // Clear the error message if the length is valid
              text= "valid input";
              document.getElementById("name-message").innerHTML = '<p class="valid-message">' + text + '</p>';
          }
        
          
      });
      number.addEventListener('input',function(){
    var y = number.value;
    var minid = 10;
    var maxid = 15;
    var text;

    if (y.length < minid || y.length > maxid) {
        text = "Input must be more than 10 numbers";
        document.getElementById("id-message").innerHTML = '<p class="error-message">' + text + '</p>';
       
    } else {
        text = "Valid input";
        document.getElementById("id-message").innerHTML = '<p class="valid-message">' + text + '</p>';
        
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
    
      });
    date.addEventListener('focus', function() {
    var currentDate = new Date();
    var today = currentDate.toISOString().split('T')[0];
    this.setAttribute('min', today);
});

