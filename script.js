document.getElementById('loginForm').addEventListener('submit', function(event)
 {
  event.preventDefault();
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  
  // You can add your authentication logic here
  if (username === 'admin' && password === 'password') 
  {
    document.getElementById('message').innerText = 'Login successful!';
  } 
  else 
  {
    document.getElementById('message').innerText = 'Invalid username or password';
  }
});
