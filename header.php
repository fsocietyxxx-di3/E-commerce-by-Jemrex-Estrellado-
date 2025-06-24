		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id="logo"><a class="notext" href="#" title="Suncart">Somstore</a></h1>
				
				<div id="top-nav">
					<ul>
					
						<li><a class="button" data-modal="modalTwo" title="Contact"><span>Contact</span></a></li>
						<li><a class="button" data-modal="modalOne"  title="Sign In"><span>Sign In</span></a></li>
					</ul>


   
  <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" class="tologin"></a>
					<div id="modalOne" class="modal">
                    <div class="twoforms">
                        <div id="log_in" class="animate form">
                            <form  action="userValidate.php" method="post" autocomplete="on"> 
                                <h1>Customer Login:</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your Email </label>
                                    <input type="text" name="magaca" required="required" type="text" placeholder="jananalibritish@gmail.com"/>
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
                                    <input type="submit"  name="submit"  value =" Login">
								</p>

                            </form>
                        </div>
                    </div>
                  </div>
    <div id="modalTwo" class="modal">
 <div class="twoforms">
                        <div id="login" class="animate form">
                            <form  action="userValidate.php" method="post" autocomplete="on"> 
                                <h1>Customer Login:</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your Email </label>
                                    <input type="text" name="magaca" required="required" type="text" placeholder="jananalibritish@gmail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your Password </label>
                                    <input type="password" name='furaha' required="required" type="password" placeholder="eg. *********" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit"  name="submit"  value =" Login">
								</p>

                            </form>
                        </div>
                    </div>
    </div>
	
   <script>
      let modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function(btn) {
        btn.onclick = function() {
          let modal = btn.getAttribute('data-modal');
          document.getElementById(modal)
            .style.display = "block";
        }
      });
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function(btn) {
        btn.onclick = function() {
          let modal = btn.closest('.modal');
          modal.style.display = "none";
        }
      });
      window.onclick = function(event) {
        if(event.target.className === "modal") {
          event.target.style.display = "none";
        }
      }
    </script>

				</div>
				<div class="cl">&nbsp;</div>
	<div class="shopping-cart"  id="cart" id="right" >
<dl id="acc">	
<dt class="active">								
<p class="shopping" >Shopping Cart &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</dt>
<dd class="active" style="display: block;">
<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ul>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>'."</br>";
        echo '<h3  style="color: green" ><big> '.$cart_itm["name"].' </big></h3>';
        echo '<div class="p-code"><b><i>ID:</i></b><strong style="color: #d7565b" ><big> '.$cart_itm["code"].' </big></strong></div>';
		echo '<span><b><i>Shopping Cart</i></b>( <strong style="color: #d7565b" ><big> '.$cart_itm["TiradaProductTiga"].'</big></strong>) </span>';
        echo '<div class="p-price"><b><i>Price:</b></i> <strong style="color: #d7565b" ><big>'.$currency.$cart_itm["Qiimaha"].'</big></strong></div>';
        echo '</li>';
        $subtotal = ($cart_itm["Qiimaha"]*$cart_itm["TiradaProductTiga"]);
        $total = ($total + $subtotal); 
    }
    echo '</ul>';
    echo '<span class="check-out-txt"><strong style="color:green" ><i>Total:</i> <big style="color:green" >'.$currency.$total.'</big></strong> <a   class="a-btnjanan"  href="view_cart.php"> <span class="a-btn-text">Check Out</span></a></span>';
	echo '&nbsp;&nbsp;<a   class="a-btnjanan"  href="cart_update.php?emptycart=1&return_url='.$current_url.'"><span class="a-btn-text">Clear Cart</span></a>';
}else{
    echo ' <h4>(Your Shopping Cart Is Empty!!!)</h4>';
}
?>

</dd>
</dl>
</div>
 <div class="clear"></div>
			</div>
			<!-- End Shell -->
		</div>