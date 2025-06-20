
document.addEventListener("DOMContentLoaded", function() {

  const form = document.querySelector("form");

  
  form.addEventListener("submit", function(event) {

    
      const babyName = document.getElementById("Name").value.trim();
      const babyAge = document.getElementById("Age").value.trim();
      const gender= document.getElementById("gender").value;
      const parentEmail = document.getElementById("email").value.trim();
      const parentContact = document.getElementById("contact-no").value.trim();
      const bloodGroup=document.getElementById("blood").value;
   

      
      let isValid = true;

    
      if (babyName === "") {
          alert("Baby's name is required");
          isValid = false;
      }

      if (babyAge === "" || isNaN(babyAge) || babyAge <= 0) {
          alert("Please enter a valid age for the baby.");
          isValid = false;
      }

      if (gender === "")
      {
          alert("Please select a gender.");
          isValid = false;
      }
     
      const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
      if (!emailPattern.test(parentEmail)) {
          alert("Please enter a valid email address.");
          isValid = false;
      }

      const phonePattern = /^\d{3}-\d{3}-\d{4}$/;
      if (!phonePattern.test(parentContact)) {
          alert("Please enter a valid contact number (format: 123-456-7890).");
          isValid = false;
      }

      
      if (bloodGroop === "")
      {
          alert("Please select a blood group.");
          isValid = false;
      }

   
  
      if (!isValid) {
          event.preventDefault();
      }
  });
});