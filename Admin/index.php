
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/style.css<?php echo '?'.mt_rand(); ?>">

<!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
<a class="hiddenanchor" id="toregister"></a>
<a class="hiddenanchor" class="tologin"></a>
<div id="modalOne" class="modal">
<div class="twoforms">
<div id="log_in" class="animate form">
<form  action="../employeeValidate.php" method="post" autocomplete="on"> 
<h1>Admin Login:</h1> 
<p> 
<label for="username" class="uname" data-icon="u" > Your Username </label>
<input type="text" name="magaca" required="required" type="text" placeholder="Janan"/>
</p>
<p> 
<label for="password" class="youpasswd" data-icon="p"> Your Password </label>
<input type="password" name='furaha' required="required" type="password" placeholder="eg. *********" /> 
</p>
<p class="keeplogin"> 
<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
<label for="loginkeeping">Keep me logged in</label>
</p>
<p class="log_in button"> 
<input type="submit"  name="submit"  value =" Login" onclick="login()">
</p>
</form>
</div>
</div>
</div>
