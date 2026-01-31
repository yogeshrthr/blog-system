<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="token" token="{{ csrf_token() }}">
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'><link rel="stylesheet" href="{{asset('src/css/style.css')}}">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <!-- <section>

      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
</section> -->

<!-- partial:index.partial.html -->
<div class="container">
  <header>Login Form</header>
  <form action="#" id="loginForm" >
    @csrf
    <div class="field email-field">
      <div class="input-field">
        <input type="email" placeholder="Enter your email" name="email" class="email" required />
      </div>
      <span class="error email-error">
        <i class="bx bx-error-circle error-icon"></i>
        <p class="error-text">Please enter a valid email</p>
      </span>
    </div>
    <div class="field create-password">
      <div class="input-field">
        <input type="password" placeholder="Password" class="password" name="password" required />
        <i class="bx bx-hide show-hide"></i>
      </div>
      <span class="error password-error">
        <i class="bx bx-error-circle error-icon"></i>
        <p class="error-text">
          Please enter atleast 8 charatcer with number, symbol, small and
          capital letter.
        </p>
      </span>
    </div>
    <!-- <div class="field confirm-password">
      <div class="input-field">
        <input type="password" placeholder="Confirm Password" class="cPassword" required />
        <i class="bx bx-hide show-hide"></i>
      </div>
      <span class="error cPassword-error">
        <i class="bx bx-error-circle error-icon"></i>
        <p class="error-text">Password didn't match</p>
      </span>
    </div> -->
    <div class="links">
      <a href="#">Forgot Password</a>
      <a href="signup.html">Signup</a>
    </div>
    <div class="input-field button">
      <input  id="login" type="submit" value="Login Now" />
    </div>
  </form>
</div>

<!-- partial -->
  <script  src="{{asset('src/js/script2.js')}}"></script>
 
  <script>
    $(document).ready(function (){
      $('#loginForm').on('submit',function(e){
          e.preventDefault();
          checkEmail();
          // createPass();
          //calling function on key up
          emailInput.addEventListener("keyup", checkEmail);
          // passInput.addEventListener("keyup", createPass);

        if (!emailField.classList.contains("invalid") 
            // && !passField.classList.contains("invalid") 
        ){

          console.log('doen now we have to submit form')
            // submit form
            //  var formData = $(this).serializeArray(); or 
            let data =new FormData(this); new FormData
            $("#login").prop("disabled", true);
            $.ajax({
              url: "{{url('login')}}",
              method: 'Post', // or 'POST', 'PUT', 'DELETE'
              processData: false, // ✅ IMPORTANT: Don't process FormData
              contentType: false,
              data:data,
              success: function(response) {
                console.log('Success:', response);
              },
              error: function(xhr, status, error) {
                console.log('Error:', status, error);
              },
              complete: function() {
                $('#login').prop('disabled', false);
                window.location.href="{{url('/posts')}}"
              }
            });

        }else{
          

        }

          
        
          
      })
    })
  </script>

</body>
</html>
