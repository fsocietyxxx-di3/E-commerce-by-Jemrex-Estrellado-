<?php
session_start();
include("../config.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title> Suncart Groups </title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	   <link rel="shortcut icon" href="images/favicon.png" />
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="../css/proStyle.css" type="text/css" media="all" />
	   	<link rel="stylesheet" href="../css/userlogin.css" type="text/css" media="all" />
	 	<link rel="stylesheet" href="../css/cart.css" type="text/css" media="all" />
	
	<script src="../js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>

	<script src="../js/cufon-yui.js" type="text/javascript"></script>
	<script src="../js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="../js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="../js/functions.js" type="text/javascript" charset="utf-8"></script>
	
		 <!-- Linking scripts -->
     <script src="../js/jquery.js" type="text/javascript"></script>  
    <script src="../js/main.js" type="text/javascript"></script>
	
	
	        <link rel="stylesheet" href="../css/PaymentStyle.css" type="text/css" media="screen"/>
		   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
          <script type="text/javascript" src="../js/sliding.form.js"></script>
</head>

<style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
    </style>
	
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id="logo"><a class="notext" href="#" title="Somstore">Somstore</a></h1>
				<div id="top-nav">
					<ul>
					
						<li><a href="../contact.php" title="Contact"><span>Contact</span></a></li>
						<li><a href="../Sign In.php" title="Sign In"><span>Sign In</span></a></li>
					</ul>
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
        $total = ($total + $subtotal) ; 
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
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
			<!-- Begin Shell -->
			<div class="shell">
				<ul>
					<li class="active"><a href="../index.php" title="index.php">Home</a></li>
					<li>
						<a href="../products.php">Category</a>
						<div class="dd">
							<ul>
								<li>
									 <a href="../products.php"> FoodStuff</a>
									<div class="dd">
										<ul>
											<li><a href="../products.php">Fruits</a></li>
                                            <li><a href="../products.php">Biscuits</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									 <a href="../products.php"> Beverage</a>
									<div class="dd">
										<ul>
											  <li><a href="../products.php">Bavaria</a></li>
                                             <li><a href="../products.php">Reddbull</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="../products.php"> Cleaning Material</a>
									<div class="dd">
										<ul>
											<li><a href="../products.php">Fairy</a></li>
                                            <li><a href="../products.php">Harpic</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="../products.php"> Clothes</a>
									<div class="dd">
										<ul>
											  <li><a href="../products.php">Suit</a></li>
                                              <li><a href="../products.php">T.shirts</a></li>
										</ul>
									</div>
								</li>
								
							</ul>
						</div>
					</li>
					   <li><a href="../products.php"> Products</a></li>
					   <li><a href="../products.php"> View Status</a></li>
					  <li><a href="../about.php">About Us</a></li>
					  <li><a href="../customer.php">Free Sign Up</a> </li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->

		<!-- Begin Main -->
		<div id="main" class="shell">
			
			
			
			
			
			
			<!-- Begin Content -->
			<div id="content">
			
			<br><br>
			
			        <div id="kcontent">
            <h1> Nicholasian E-Commerce</h1>
            <div id="wwrapper">
                <div id="steps">
				
                    <form id="formElem" name="formElem"  action="InsertPayment.php" method="POST" class="myForm">
					
					
                        <fieldset class="step">
                            <legend>Account
							<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
    
        $subtotal = ($cart_itm["Qiimaha"]*$cart_itm["TiradaProductTiga"]);
        $total = ($total + $subtotal); 
    }
    echo '</ol>';
     echo '<h4 Align="right">Total : <big style="color:green">'.$currency.$total.'</big></h4>';

}else{

}
?>
	
							</legend>
                            <p>
                                <label for="username">Full Name</label>
                                <input id="fullname" name="fullname" />
                            </p>
                            <p>
                                <label for="email">Email</label>
                                <input id="email" name="email" placeholder="jananalibritish@gmail.com" type="email" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="country">Postal Code</label>
                                <input id="pcode" name="pcode" type="text" AUTOCOMPLETE=OFF />
                            </p>

                        </fieldset>
                        <fieldset class="step">

                         <legend>Personal Details
						 
						 													<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
    
        $subtotal = ($cart_itm["Qiimaha"]*$cart_itm["TiradaProductTiga"]);
        $total = ($total + $subtotal); 
    }
    echo '</ol>';
     echo '<h4 Align="right">Total: <big style="color:green">'.$currency.$total.'</big></h4>';

}else{

}
?>
						 
						 </legend>
                           <p>
                                <label for="phone"> Teacher:</label>
                                <input id="address" name="address" placeholder="e.g. Roi Francisco" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="country">Strand</label>
                                		<select name="country" id="select">
	
		  <option value="AF" countrynum="93">HUMMS</option>
		  <option value="ALA" countrynum="358">ICT</option>
		  <option value="AL" countrynum="355">GAS</option>
		  <option value="GBA" countrynum="493">HE</option>
		
	
</select>    

                        </p>
                             <p>
                                <label for="phone"> Section:</label>
                                <input id="city" name="city" placeholder="e.g. ICT C" type="text" AUTOCOMPLETE=OFF />
                            </p>														 

							<p> 
								 <label for="Address"> Phone:</label>
                                <input id="phone" name="phone" placeholder="e.g. +252-63-4138440" type="tel" AUTOCOMPLETE=OFF />
                            </p> 
							

                            

<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
if(isset($_SESSION["cart_session"]))
{
    $total = 0;

    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
    
        $subtotal = ($cart_itm["Qiimaha"]*$cart_itm["TiradaProductTiga"]);
        $total = ($total + $subtotal); 
    }

    echo ' <p> <label for="Address">Total Amount:</label> <input id="paid" class="tAmount" name="Totalka"  value=" '.$total.'"  type="text"  readonly></p>';

}else{

}
?>

                        </fieldset>
              

						<fieldset class="step">
                            <legend>Confirm
																				<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
    
        $subtotal = ($cart_itm["Qiimaha"]*$cart_itm["TiradaProductTiga"]);
        $total = ($total + $subtotal); 
    }
    echo '</ol>';
    echo '<h4 Align="right">Your Total Amount: <big style="color:green">'.$currency.$total.'</big></h4>';

}else{

}
?>
							</legend>
							<p>
								Remember Sir/Maam you need to claim it no Fraudulent Orders allowed!
							</p>
                            <p class="submit">
							
                                <button id="registerButton" type="submit"   name="submit"  title="Click On Payment Method"> Proceed</button>
                            </p>
							
                        </fieldset>
                    </form>
                </div>
                <div id="nav" style="display:none;">
                    <ul>
                        <li class="doortay">
                            <a href="#">Account</a>
                        </li>
                        <li>
                            <a href="#">Personal Details</a>
                        </li>
                        
                        <li>
                            <a href="#">Confirm</a>
                        </li>
						
                    </ul>
                </div>
            </div>
        </div>
		
		
		
 <script>
<script type="text/javascript">

$(document).ready(function(){ 
    $("#registerButton").click(function() { 
     
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'InsertPayment.php',
        data: $(".myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>	
		
			</div>
			<!-- End Content -->
			
			
			
			
			
			
			
			<!-- Begin Sidebar -->
			<div id="sidebar">
				<ul>
					<li class="widget">
						<h2>TOP Brands</h2>
						<div class="brands">
							<ul>
								<li><a href="#" title="Brand 1"><img src="../images/brand-img1.jpg" alt="Brand 1" /></a></li>
								<li><a href="#" title="Brand 2"><img src="../images/brand-img2.jpg" alt="Brand 2" /></a></li>
								<li><a href="#" title="Brand 3"><img src="../images/brand-img3.jpg" alt="Brand 3" /></a></li>
								<li><a href="#" title="Brand 4"><img src="../images/brand-img4.jpg" alt="Brand 4" /></a></li>
							</ul>
							<div class="cl">&nbsp;</div>
						</div>
						<a href="#" class="more" title="More Brands">More Brands</a>
					</li>
				</ul>
			</div>
			<!-- End Sidebar -->
			
</body>
</html>