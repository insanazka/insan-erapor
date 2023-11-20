<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
    
  </head>

  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form method="POST" action="/login" autocomplete="off" class="sign-in-form">
              @csrf
              <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
                <h4>tokohp</h4>
              </div>

              @if(session()->has('success'))
              <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                {{ session('success') }}
              </div>
              @endif
                
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field active @error('email') is-invalid active
                    @enderror"
                    autocomplete="off"
                    name="email"
                    autofocus
                    required
                    value="{{ old('email') }}"
                  />
                  <label>Email Address</label>
                  
                </div>
                
                <div class="input-wrap">
                  <input
                    type="password"
                    class="input-field"
                    autocomplete="off"
                    name="password"
                    required
                  />
                  <label>Password</label>

                </div>
                <input type="submit" value="Sign In" class="sign-btn" />
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/image1.png" class="image img-1 show" alt="" />
              <img src="./img/image4.png" class="image img-2" alt="" />
              <img src="./img/image2.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Everything in one place.</h2>
                  <h2>Customize as you like.</h2>
                  <h2>Say hello to the future.</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="js/app.js"></script>
  </body>
</html>