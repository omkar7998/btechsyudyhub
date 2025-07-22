const predefinedUsername = 'python';
const predefinedPassword = 'python123';
const omuser='omkar';
const ompass='omkar123';


function validateLogin() {

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    
    if (username === predefinedUsername && password === predefinedPassword) {
        alert("Login successful!");
       
        window.location.href = "intro.html"; 
        return false; 
    }
    
    else if (username === omuser && password === ompass){
    alert("Login successful!");
       
        window.location.href = "intro.html"; 
        return false; 
    }
    

    else {
      
        document.getElementById('error-message').innerText = "Invalid username or password. Please try again.";
        return false; 
    }
}