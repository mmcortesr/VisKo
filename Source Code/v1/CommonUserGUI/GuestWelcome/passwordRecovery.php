<?php
	require_once("guestmenu.inc");
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
   
  <fieldset>
   <legend> 
       <font size="7"> 
         <b>Recover Password</b> 
       </font>
	 <p>Your password will be sent to the email address below. Only if this email is registered with the VisKo installation</p>
   </legend>
	    
   <div class="form-group">
     <form role="form" name="recover" id="recover" action="passwordRecovery.php" onsubmit="return requiredFields('Email')" method="post">

     <label for="Email"> Account Email *</label>
     <input type="text" placeholder="Email" class="form-control" name='Email' id="Email" maxlength="50" required>
	<br/>
     <button type="submit" class="btn btn-primary">Recover Password</button> 
     </form>
    </div>
  </fieldset>       

<!-- end visko-->
<?php
	require_once("footer.inc"); 
?>
