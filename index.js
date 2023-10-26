function sendMail() {
    console.log("hi");
    var params = {
      fname: document.getElementById("fname").value,
      lname: document.getElementById("lname").value,
      email: document.getElementById("email").value,
      contact: document.getElementById("contact").value,
      gender: document.getElementById("gender").value,
      course: document.getElementById("course").value,
      clgname: document.getElementById("clgname").value,
      year: document.getElementById("year").value,
      location: document.getElementById("location").value,
    };
  
    const serviceID = "service_4l805ci";
    const templateID = "service_4l805ci";
  
      emailjs.send(serviceID, templateID, params).then(function(res){
        alert("Your message sent successfully!!"+ res.status);
          
  
      })
  
  }
  