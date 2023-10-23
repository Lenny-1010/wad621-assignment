document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm'); // Assuming your form has the id 'loginForm'
    
    loginForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevents the form from submitting normally
        
        // Assuming you have validated the username and password here
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // You can add your validation logic here
        if (username === 'your_username' && password === 'your_password') {
            window.location.href = 'welcome.html'; // Redirect to the welcome page
        } else {
            alert('Invalid username or password. Please try again.'); // Show an alert for invalid login
        }
    });
});
