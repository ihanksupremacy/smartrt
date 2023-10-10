

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="/css/login/style.css">
</head>
<body>
  <div class="container">
    
     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV4D8L3UROHD5V8gtFnXg-MkakYudx3CA0hS8Gh7ef&s alt=" class="gambar">
    <form action="/login" method="POST">
      @csrf 
        <img src="/images/logo.png" alt="" class="logo">
        <h2>Selamat Datang Paduka Raja Admin Ganteng Nan Bijaksana</h2>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="password">
      </div>
      
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>

