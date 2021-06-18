<?php
  include '../HeaderFooter/header.php'
?>

<!-- Body Start -->
<br>
<hr>
<br>

<br>
<h1 style="text-align: center;">Login Page</h1>
<br>

<div id="devCont_top">  
  <div id="devCont_middle"> 
    <div id="devCont_bottom">   
      <div class="topic">

        <!-- Login Start -->
        <br>
        <div class="container">
          <h2 style="text-align: center; font-family: 'Courier New', Courier, monospace; font-style: oblique; font-size: 5rem; display:block; text-shadow: 2px 1px #fff;">L o g i n</h2>
          <p style="text-align: center; font-family: 'Courier New', Courier, monospace; font-size: 3rem; display: block; text-shadow: 1px 1px #000;">Enter Your Login Credentials to log in to the System</p>
          <div id="Login_page" class="center">
            <form style="margin: auto; left: 38%; right: inherit;" method="GET">
              <div class="form-group">
                <label for="usr" style="font-family: 'Courier New', Courier, monospace; font-size: 2rem; display: block; text-shadow: 1px 1px #000;">Name:</label>
                <input type="text" class="form-control" id="usr" style="width:75%;" name="uname">
              </div>
              <div class="form-group">
                <label for="pwd" style="font-family: 'Courier New', Courier, monospace; font-size: 2rem; display: inline-block; text-shadow: 1px 1px #000;">Password:</label>
                <input type="password" class="form-control" id="pwd" style="width:75%" name="pwd">
              </div>
              <br>
              <div style="height: 40px; position: relative; border: none;">
                <div style="margin: 0; position: absolute; top: 60%; left: 15%; right: 26%; -ms-transform: translateY(-50%); transform: translateY(-50%); width: fit-content;">
                  <button class="navbar__btn button1" style="display: flex; box-shadow: 2px 2px 1px 1px #000; align-items: flex-start; cursor: pointer;">Login</button>
                </div> 
                <div style="margin: 0; position: absolute; top: 60%; left: 40%; right: 0%; -ms-transform: translateY(-50%); transform: translateY(-50%); width: fit-content;">
                  <button formaction="\iwtProject\Signe Up Page.html\SigneUpPage.php" class="navbar__btn button1" style="display: flex; box-shadow: 2px 2px 1px 1px #000; align-items: flex-start; cursor: pointer; ">Sigh Up</button>
                </div>
              </div>
              <div>
                
              </div>
              
            </form>
          </div>
        </div>
        <!-- Login End -->

      </div>      
    </div>        
  </div>       
</div>

<br>
<br>

<!-- 
<hr>
<br>


<div id="devCont_middle">         
</div>
        
<br>
<hr>
<br>

<div id="devCont_bottom">         
</div>

<br> -->

<!-- Body End -->



<?php
  include '../HeaderFooter/footer.php'
?>