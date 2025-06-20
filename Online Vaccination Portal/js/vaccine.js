document.addEventListener("DOMContentLoaded", function() {

    const form = document.querySelector("vaccine");

    
    form.addEventListener("submit", function(event) {

        const age = document.getElementById("Age").value.trim();
        const dose = document.getElementById("NumberOfDose").value.trim();
        const name = document.getElementById("VaccineName").value.trim();
     

        
        let isValid = true;

      
        

        if (age === "") {
            alert("Age is required.\n");
            isValid = false;
        }

        
        if (dose === "" || isNaN(field2) || field2 <= 0) {
            alert("Please enter a valid number of doses.\n");
            isValid = false;
        }

        
        if (name === "") {
            alert("Vaccine name is required.\n");
            isValid = false;
        }

        
        if (!isValid) {
            event.preventDefault();
        }
        
    });

    function confirmDelete(Vaccine_ID) {
        const userConfirmed = confirm("Are you sure you want to delete Vaccine ID: " + Vaccine_ID + "? This action cannot be undone.");
        if (userConfirmed) {
            // Redirect to the delete link
            window.location.href = 'vaccinedelete.php?id=' + Vaccine_ID;
        } else {
            return false; // Stop the default link action
        }
    }
});