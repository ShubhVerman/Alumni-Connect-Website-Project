<?php
session_start();
// print_r($_SESSION['userdata']['id']);
if(isset($_SESSION['user']) && $_SESSION['user']==true){
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Alumni connect</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="icon" type="image/x-icon" href="imgs/hackathonLogo.ico">
   <style>
    .footer{
        position: absolute;
        bottom: -100px;
    }
    .right{
        height: 150px;
    }
    .card{
        color: white;
        width: 675px;
          /* From https://css.glass */
  backdrop-filter: blur(20px) saturate(180%);
  -webkit-backdrop-filter: blur(20px) saturate(180%);
  background-color: rgba(17, 25, 40, 0.667);
  border: 1px solid rgba(255, 255, 255, 0.125);
  box-shadow: 0 70px 63px -60px #000000;
  border-radius: 30px;
    }
    .input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%;
    }
    .alert-danger{
    color: red;
    background-color: #1729348b;
  }
  .btn{
    width: 300px;
  }
  .send{
  height: 40px;
  top: 5px;
  padding: 8px 20px;
}
 
   </style>
</head>


<body>
    

  <div id="preloader"><img src="imgs/4---final.gif" alt=""></div>
    <div class="circle" id="circle"> </div>
    
    <div id="banner"></div>
    <script src="js/java.js"></script>

    <nav id="nav" class="nav">
      
      <a href="index.html"><img class="logo1" src="imgs/logo.png" alt=""></a>
      <div class="centerNav">  
      <ul >
            <li><a id="menu" href="index.html">home</a></li>
            <li><a id="menu"  href="alumni.html">alumnis</a></li>
            <li><a id="menu"  href="index.php">COMMUNITY Chat</a></li>
            <li><a id="menu"  href="testimonial.html">testimonials</a></li>
            <li><a id="menu"  href="creator.html">creators</a></li>
        </ul>
      </div>
        <div class="action">
          <div class="profile" onclick="menuToggle();">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg></div>
          <div class="dropdown">
  
            <h3>welcome!! <br> <span> BITIAN</span></h3>
              <a href=""><img class="profilePic" src="imgs/face.png" alt=""></a>
  
               <ul>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                </svg><a href="">View Profile</a></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                  <path d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z"/>
                </svg>
                <a href="">Help & Support</a></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                  <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg><a href="">Events</a></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg><a href="login.php">Log Out</a></li>
               </ul>
          </div>
        </div>
        <a href="https://www.bitmesra.ac.in/bitnoida"><img class="logo" src="imgs/Birla_Institute_of_Technology_Mesra.png" alt=""></a>
    </nav>




    <div class=" position-absolute top-50 start-50 translate-middle">
        <div class="card col-6 mx-auto mt-2 signup shadow">
            <div class="card-body">
                <h5 class="card-title">Signup</h5>
                <hr>
                <p id="error" class="alert alert-danger text-center shadow-sm" style="display:none"></p>
                <form id="register_form">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                        <input type="text" name="full_name"  id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email_id"  id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password"  id="exampleInputPassword1">
                    </div>
<div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Register</button>
                    <a href="#" id="gotologin" style="text-decoration:none">Already Have An Account !</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="card col-6 mx-auto mt-2 login shadow" style="display: none;">
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                <hr>
                <p id="error" class="alert alert-danger text-center shadow-sm" style="display:none"></p>
                <form id="login_form">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email_id"  id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password"  id="exampleInputPassword1">
                    </div>

                    <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="#" id="gotosignup" style="text-decoration:none">Create New Account !</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="card col-6 mx-auto mt-2 chat shadow" style="display: none;">
            <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title">COMMUNITY CHAT</h5>
                <a href="php/logout.php" class="btn btn-sm btn-danger">Logout</a>
                </div>
                <hr>
                <div class="m-2 p-2" id="messages" class="" style="height:350px;overflow-y: scroll;">
                
                    
                   
                </div>
                <div class="mb-2 p-2 text-danger ts"></div>

                <div class="input-group mb-3">

                    <input type="text" id="msg" class="form-control" placeholder="Message..." aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary sendmsg send" type="button" id="button-addon2">Send</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    var mget = false;
$(document).ready(function(){
var user = <?= isset($_SESSION['user'])?$_SESSION['user']:0 ?>;
if(user){
$('.signup').remove();
$('.login').remove();
$('.chat').show();
getMessages();
mgetf();

}
});

function mgetf(){
    if(!mget){
    setInterval(getMessages, 1000);
    setInterval(typingoff, 700);
    setInterval(typing_status, 500);
    mget=true;
}
}
// register ajax
    $('#register_form').submit(function(e){
        e.preventDefault();
        var url = 'php/work.php?register=true';
        var data = $(this).serialize();
        $.ajax({
  method: "POST",
  url: url,
  data:data,
  dataType:'json'
})
  .done(function( data ) {
      if(data.status){
        $(".signup #error").hide('10');
        $('#register_form').trigger('reset');
        $(".signup").hide('fast',function(){
            $('.signup').remove();
            $('.login').show('fast');
        
        });
 
        

      }else{
          $(".signup #error").show('10');
$(".signup #error").text(data.message);

      }
   
  });
    });
        


//login ajax
$('#login_form').submit(function(e){
        e.preventDefault();
        var url = 'php/work.php?login=true';
        var data = $(this).serialize();
        $.ajax({
  method: "POST",
  url: url,
  data:data,
  dataType:'json'
})
  .done(function( data ) {
      console.log(data);
      if(data.status){
        $(".login #error").hide('10');
        $('#login_form').trigger('reset');
        $(".login").hide('fast',function(){
            $('.login').remove();
            $('.chat').show('fast');
            getMessages();
            mgetf();
        
        });
 
        

      }else{
          $(".login #error").show('10');
$(".login #error").text(data.message);

      }
   
  });
    });

    $("#gotologin").click(function(){
$('.signup').hide('fast');
$('.login').show('fast');
    });

    $("#gotosignup").click(function(){
$('.login').hide('fast');
$('.signup').show('fast');
    });

    var prev;
function getMessages(){

    var url = 'php/work.php?getmessages=true';

    $.ajax({
  method: "POST",
  url: url,
})
  .done(function( data ) {
    $('#messages').html(data);
    if(prev!==data){
        $('#messages').scrollTop(1E10);

    }
      prev=data;
 
});
}

$('.sendmsg').click(function(){
    var url = 'php/work.php?sendmessage=true';
var msg = $('#msg').val();
    $.ajax({
  method: "POST",
  data:{message:msg},
  url: url,
})
  .done(function( data ) {
    $('#msg').val('');
    

 
});
});

function typingoff(){
    var url = 'php/work.php?typing=true';
    $.ajax({
  method: "POST",
  data:{typing:false},
  url: url,
})
  .done(function( data ) {
    
});
}

function typing_status(){
    var url = 'php/work.php?typingstatus=true';
    $.ajax({
  method: "POST",
  url: url,
})
  .done(function( data ) {
      $('.ts').text(data);
    console.log(data);
});
}

$('#msg').keydown(function(){
    var url = 'php/work.php?typing=true';
    $.ajax({
  method: "POST",
  data:{typing:true},
  url: url,
})
  .done(function( data ) {
    console.log(data);
});
});

    </script>
    
 
 <div class="footer">
   
   <div class="child left">
       <h2>SUBSCRIBE TO OUR <br> NEWSLETTER</h2>
       <div class="form__group field">
           <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeM4H25DqkKYPtGRPssPW3HbGaJ7ztHORIsk19JyqGEDGnKgQ/formResponse"  method="post">
             <input type="input" class="form__field" placeholder="email" name="entry.852612828" id='email' required />
             <input type="submit" value="Submit">
           </form>
</div>
   </div>
   <div class="child center"> <a href="https://www.bitmesra.ac.in/bitnoida"><img class="logo" src="imgs/Birla_Institute_of_Technology_Mesra.png" alt=""></a></div>
   <div class="child right">
       <ul>
           <h4 style="font-size: 20px;">INFO</h4>
           <li><a href="index.html">HOME</a></li>
           <li><a href="alumni.html">ALUMNIS</a></li>
           <li><a href="communitychat.html">COMMUNITY CHAT</a></li>
           <li><a href="testimonial.html">ALUMNI TESTIMONIALS</a></li>
           <li><a href="creator.html">CREATORS</a></li>
       </ul>
   </div>


</div>

</body>

</html>