<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login/Sign-In</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url(); ?>public/login-page-asset/css/style.css">
     
</head>

<body >
  <div class="logmod" >
  <div class="logmod__wrapper" >
    <span class="logmod__close">Close</span>
    <div class="logmod__container" >
      <ul class="logmod__tabs">
                
 

        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Verification for Sign Up</a></li>
      </ul>
      <div class="logmod__tab-wrapper" >
      <div class="logmod__tab lgm-1"  >
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
        </div>
        <div class="logmod__form">

        


          <form accept-charset="utf-8" action="#" method="POST" class="simform">
          
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Name*</label>
                <input class="string optional" maxlength="255" name="name" placeholder="Your Name" type="text" size="50"  required />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" name="email" placeholder="Email" type="email" size="50" required />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Mobile No</label>
                <input class="string optional" maxlength="255" name="mobile" placeholder="Mobile No" type="text" size="50" required />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Birth Date</label>
                <input class="string optional" maxlength="255" name="birthdate" placeholder="Birth Date" type="date" size="50" required />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" name="password" placeholder="Password" type="password" size="50"  required/>
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="string optional" maxlength="255" name="password_confirmation" placeholder="Repeat password" type="password" size="50"  required />
              </div>
            </div>



            <div class="simform__actions">
              <input class="sumbit" name="" type="submit" value="Verify me" />
              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            </div>
          </form>
        </div>

      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">

          <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
				<p style="background:red" >
					<?php


              
							if($this->session->userdata('msg')){
							echo $this->session->userdata('msg');
              $this->session->unset_userdata('msg');
              }
         
               
        
         ?>
       </p>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="<?php echo base_url()?>CheckAdmin" method="POST" class="simform">
          
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">User Name*</label>
                <input class="string optional" maxlength="255" id="user-email" name="name" placeholder="User Name" type="text" size="50"   />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" name="password" type="password" size="50" />
                						<span class="hide-password">Show</span>
              </div>
            </div>

            <div class="simform__actions">
              <input class="sumbit" name="commit" type="submit" value="Log In" />
              <span class="simform__actions-sidetext"><a class="special" role="link" href="{{url('forget_password')}}">Forgot your password?<br>Click here</a></span>
            </div>
        </div>

          </form>


          </div>
      </div>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url(); ?>public/login-page-asset/js/index2.js"></script>

</body>
</html>
