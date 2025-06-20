document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll('.star-rating span');
    const feedbackForm = document.querySelector('form');
    let selectedRating = 0;

    // Star rating interaction
    stars.forEach((star, index) => {
        // Click event to select a rating
        star.addEventListener('click', function () {
            selectedRating = index + 1;
            highlightStars(selectedRating);
        });

        // Mouseover event to temporarily highlight stars
        star.addEventListener('mouseover', function () {
            highlightStars(index + 1);
        });

        // Mouseout event to reset the stars back to the selected rating
        star.addEventListener('mouseout', function () {
            highlightStars(selectedRating);
        });
    });

    // Function to highlight the stars based on the current rating
    function highlightStars(rating) {
        stars.forEach((star, index) => {
            if (index < rating) {
                star.style.color = 'Brown'; // Highlight selected stars in pink
            } else {
                star.style.color = 'black'; // Reset color for unselected stars
            }
        });
    }

    // Form submission
    feedbackForm.addEventListener('submit', function (e) {
        e.preventDefault();
        
        const name = feedbackForm.querySelector('input[placeholder="Name"]').value;
        const email = feedbackForm.querySelector('input[placeholder="Email"]').value;
        const subject = feedbackForm.querySelector('input[placeholder="Subject"]').value;
        const feedback = feedbackForm.querySelector('textarea').value;

        if (name && email && feedback && selectedRating > 0) {
            // Simulate form submission or send data to server
            console.log({
                name: name,
                email: email,
                subject: subject,
                feedback: feedback,
                rating: selectedRating
            });
            alert('Thank you for your feedback!');
            feedbackForm.reset();
            highlightStars(0);  // Reset the star rating
        } else {
            alert('Please fill in all required fields and select a star rating.');
        }
    });
});
