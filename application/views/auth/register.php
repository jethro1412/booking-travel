<style type="text/css">
@CHARSET "UTF-8";
/*
over-ride "Weak" message, show font in dark grey
*/

.progress-bar {
  color: #333;
} 

/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

.btn-pink{
  background-color: #E43D80;
  color: white;
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none;
}

.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  @include box-sizing(border-box);

  &:focus {
    z-index: 2;
  }
}

body {
  background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.login-form {
  margin-top: 60px;
}

form[role=login] {
  color: #5d5d5d;
  background: #f2f2f2;
  padding: 26px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}
form[role=login] img {
  display: block;
  margin: 0 auto;
  margin-bottom: 35px;
}
form[role=login] input,
form[role=login] button {
  font-size: 18px;
  margin: 16px 0;
}
form[role=login] > div {
  text-align: center;
}

.form-links {
  text-align: center;
  margin-top: 1em;
  margin-bottom: 50px;
}
.form-links a {
  color: #fff;
}
</style>
<div class="container">

  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <?php
        $error_msg=$this->session->flashdata('error_msg');
        if($error_msg){
          ?>
          <div class="alert">
            <h1><?php echo $error_msg ?></h1>
          </div>
          <?php } ?>
          <?php 
  // cek buat user terbesar
          $usr = $user->id_user;
          $newus = substr($usr,1,4);

          $tambah=$newus+1;
          if ($tambah<10) {
            $id="U000".$tambah;
          }
          elseif ($tambah<100) {
            $id="U00".$tambah;
          }
          else if($tambah<1000){
            $id="U0".$tambah;
          }
          else{
            $id="U".$tambah;
          }
          ?>
          <form method="post" action="<?php echo base_url('login/register_aksi/') ?>" role="login">
            <img src="<?php echo base_url('assets/img/logo.png') ?>" class="img-responsive" alt="" />

            <input type="hidden" name="id_user" value="<?php echo $id; ?>">
            <input type="text" name="fullname" class="form-control input-lg" placeholder="Nama Lengkap">
            <input type="text" name="username" placeholder="username" class="form-control input-lg">
            <input type="password" name="password" class="form-control input-lg" placeholder="Password">

            <div class="pwstrength_viewport_progress"></div>


            <button type="submit" name="submit" class="btn btn-lg btn-pink btn-block">Daftar</button>
            <div>
              <a href="<?php echo base_url('login') ?>" style="color: #E43D80">Sign In</a>
            </div>

          </form>

          <div class="form-links">
            <a href="/travel">www.TravelSist.com</a>
          </div>
        </section>  
      </div>

      <div class="col-md-4"></div>


    </div>

  </div>