document.addEventListener("DOMContentLoaded", function() {

  const form = document.querySelector("form");

  
  form.addEventListener("submit", function(event) {

    
      
      const parentEmail = document.getElementById("email").value.trim();
      const parentContact = document.getElementById("contact-no").value.trim();
      
      
      let isValid = true;

    
  
     
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

      
  
      if (!isValid) {
          event.preventDefault();
      }
  });
});