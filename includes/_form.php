<!-- html code -->

<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST">

  Número de guía:
  <br>
  <input type="text" name="cf-soap-number" placeholder="enter your package number">
 
  <br><br>
  <input type="submit" name="cf-soap-submitted" value="Send">
  
  <input type="reset" class="" name="cf-soap-submitted" value="Clear">	
</form> 