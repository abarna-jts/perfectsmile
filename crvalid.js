
    const jobDescriptionButton = document.getElementById("showJobDescription");
    const aboutCompanyButton = document.getElementById("showAboutCompany");
    const jobDescriptionContent = document.querySelector(".box1");
    const aboutCompanyContent = document.querySelector(".box2");

    // Initially, show the "Job Description" content and hide the "About Company" content
    jobDescriptionContent.style.display = "block";
    aboutCompanyContent.style.display = "none";

    jobDescriptionButton.addEventListener("click", function () {
        jobDescriptionContent.style.display = "block";
        aboutCompanyContent.style.display = "none";
    });

    aboutCompanyButton.addEventListener("click", function () {
        jobDescriptionContent.style.display = "none";
        aboutCompanyContent.style.display = "block";
    });



// Get all the review box elements
const reviewBoxes = document.querySelectorAll('.box');

// Function to check if an element is in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to add the animated class to elements in the viewport
function animateOnScroll() {
    reviewBoxes.forEach((box) => {
        if (isInViewport(box)) {
            box.classList.add('animated');
        }
    });
}

// Listen for the scroll event to trigger animations
window.addEventListener('scroll', animateOnScroll);

// Initial check to see if any elements are already in the viewport
animateOnScroll();




let fname = document.getElementById("fname");
let lname = document.getElementById("lname");
let email = document.getElementById("email");

            
        fname.addEventListener('input', function () {
          // Get the value of the input
          var x = fname.value;
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

      lname.addEventListener('input', function () {
        // Get the value of the input
        var x = lname.value;
        var text;
        
        // Define the minimum and maximum allowed length
        var minLength = 3;
        var maxLength = 30;
  
        // Check the length of the input value
        if (x.length < minLength || x.length > maxLength) {
            // Display an error message
            text="Input must be more that 3 characters";
            document.getElementById("lname-message").innerHTML = '<p class="error-message">' + text + '</p>';
        } else {
            // Clear the error message if the length is valid
            text= "valid input";
            document.getElementById("lname-message").innerHTML = '<p class="valid-message">' + text + '</p>';
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

 

      contact.addEventListener('input',function(){
        var m=contact.value;
        var text;

        var minid = 10;
        var maxid = 10;

        if (m.length < minid || m.length > maxid) {
            text = "Input should be 10 number";
            document.getElementById("contact-message").innerHTML = '<p class="error-message">' + text + '</p>';
    } else {
        text = "Valid email";
        document.getElementById("contact-message").innerHTML = '<p class="valid-message">' + text + '</p>';
    }
    
      });
    

 
        function popup(){
        // Get the modal and buttons
        var modal = document.getElementById('myModal');
        var btn = document.getElementById('openModal');
        var span = document.getElementById('closeModal');

        // Open the modal with a fade-in and slide-in effect
        btn.onclick = function() {
            modal.style.display = 'block';
            modal.style.opacity = '1';
            modal.querySelector('.modal-content').style.transform = 'translate(0, 0)';
        }

        // Close the modal with a fade-out and slide-out effect
        span.onclick = function() {
            modal.style.opacity = '0';
            modal.querySelector('.modal-content').style.transform = 'translate(0, -20px)';
            setTimeout(function () {
                modal.style.display = 'none';
            }, 300); // Wait for the transition to complete
        }

        // Close the modal when clicking outside the modal content
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.opacity = '0';
                modal.querySelector('.modal-content').style.transform = 'translate(0, -20px)';
                setTimeout(function () {
                    modal.style.display = 'none';
                }, 300); // Wait for the transition to complete
            }
        }
    }


        document.getElementById("openModal").addEventListener("click", function () {
            var fname = document.getElementById("fname").value;
            var email = document.getElementById("email").value;
            var contact = document.getElementById("contact").value;
            var gender = document.getElementById("gender").value;
            var course = document.getElementById("course").value;
            var year = document.getElementById("year").value;
            var location = document.getElementById("location").value;
        
            if (fname === "" || email === "" || contact === "" || gender === "" || course === "" || year === "" || location === "") {
                formMessage.textContent = "Please fill in all the form fields.";
                return false;
            } else {
                formMessage.textContent = "";
                popup(); // Clear any previous error message
                // Perform other actions, e.g., submit the form
            }
        });
        