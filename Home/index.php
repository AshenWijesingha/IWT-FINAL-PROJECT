<?php
  include '../HeaderFooter/header.php'
?>

<!-- Body Start -->
<br>
<hr>
<br>

<br>
<h1 style="text-align: center; position: relative; width: 100%;">Home Page</h1>
<br>

<?php
  if (isset($_SESSION["id"])) {
    echo '<h2 style="text-align: center; position: relative; width: 100%;"><strong>Hello, '. $_SESSION["name"] .'</strong></h2>';
  }
?>

<div id="devCont_top">  
  <div id="devCont_middle"> 
    <div id="devCont_bottom">   
      <div class="topic">
        <!-- Carousel Start -->
        
        <!-- Carousel End -->
      </div>      
    </div>        
  </div>       
</div>

<br>
<hr>
<br>

<div id="devCont_middle" style="height: 5rem;">       

</div>
        
<br>
<hr>
<br>

<div id="devCont_bottom" style="height: 5rem;">  

</div>

<br>
<hr>
<br>

<div id="devCont_bottom" style="height: 5rem;">  

</div>

<br>
<hr>
<br>

<div id="devCont_bottom" style="height: 5rem;">  

</div>

<br>

<!-- Body End -->

<?php
  include_once '../HeaderFooter/footer.php'
?>

