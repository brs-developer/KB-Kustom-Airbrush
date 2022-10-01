<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>KB Kustom Airbrush</title>
    <meta name="viewport" content="width=1130, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/fonts.css" type="text/css" />  
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
    <!-- Magnific Popup core JS file -->
    <script src="js/jquery.magnific-popup.js"></script>		
    <!--<script>
    $( "#img1" ).on( "mouseover", function() {
        $( ".info-block" ).css("display","block");
        });
</script>--> 
</head>
<body>
	<div id="site-wrap">
        <header>
            <div class="inner-width">
                <!--<div id="greeneville"></div>
                <div id="richmond"></div>-->
            </div>
        </header>
        <nav id="main">
            <ul>
                <a href="javascript:void(0);"><li id="motorcycles" class="active-li">Motorcycles</li></a>
                <a href="javascript:void(0);"><li id="vests">Leather Jackets/Vests</li></a>
                <a href="javascript:void(0);"><li id="portraits">Canvas Portraits</li></a>
                <a href="javascript:void(0);"><li id="guitars">Guitars</li></a>
                <a href="javascript:void(0);"><li id="other" style="border-right:0;">Miscellaneous</li></a>               
            </ul>
        </nav>
        <div id="content-wrap">
        	<!--<div id="for-more-info">For more info, <span id="click">CLICK HERE!</span></div>-->
        <div id="p" style="display:block !important;">Hello, my name is Tom Light; most call me KB. I have been airbrushing for 6/7 years now and have achieved quite a bit of local support. I am willing to paint on just about anything, and my prices are very reasonable. I paint motorcycles, leather vests, portraits, and just about anything that will hold paint. Although I know shipping back and forth is a tedious process, I will accommodate.<br /><br />
        
        Take a look through my galleries, and if you like the work you see, then please contact me. Let me know what you want, and I will give you a reasonable quote. Airbrushing takes a lot of work that most people don't think of. Lots of prep is the key to a great paint job. If you bring the parts to me and I paint them, the cost will be very reasonable. If you bring your bike to me and I have to disassemble and reassemble, there will be a labor fee involved. I am looking forward to hearing from you.<br /><br />
    
    Best regards,<br />
    Tom<br />
    
    <div id="contact-wrap" style="display:inline-block !important;">
    	
        <div id="tn" style="display:inline-block !important;">
            Greeneville, TN<br />
            423.330.4912<br /><br />
        </div>
        <div id="va" style="display:inline-block !important;">
            Richmond, VA<br>
            514.325.6548
        </div>
        <div id="fb" style="display:inline-block !important;">
        	<a href="https://www.facebook.com/KbKustomAirbrush" target="_blank">
            	<img src='images/facebook.png' style='width:32px; height:32px; position:relative; top:-5px;' alt='facebook kb kustom airbrush' />
            </a>
        </div>
        
    </div>
        
        </div>
        
        	<div class="header" style="display:block !important; position:relative;">
                <h1>&mdash;&nbsp;&nbsp;Photo Gallery&nbsp;&nbsp;&mdash;</h1>
                <h2>Click any image to enlarge</h2>
                
                <div id="back-to-top" style="display:none;">Back To Top</div>
            </div>
            <div id="motorcycles-wrap" class="wrap">       
                <?php 
                    for ($x = 1; $x <= 30; $x++) {
                        echo "
                        <a href='images/motorcycles/$x.jpg' data-lightbox='motorcycle-airbrush' data-title='Motorcycle Airbrush'>
                            <img src='images/motorcycles/$x.jpg' style='width:200px; height:133px;' alt='motorcycle airbrush' />					
                        </a>";
                    } 
                ?>                                              
            </div>
    
            <div id="vests-wrap" class="wrap hide" style="width:1085px !important;">        
                <?php 
                    for ($x = 1; $x <= 17; $x++) {
                        echo "
                        <a href='images/vests/$x.jpg' data-lightbox='leather-vest-airbrush' data-title='Leather Vest Airbrush'>
                            <img src='images/vests/$x.jpg' style='width:133px; height:200px;' alt='leather vests airbrush' />
                        </a>
                        ";
                    } 
                ?>                                                          
            </div>
    
          <div id="portraits-wrap" class="wrap hide">        
                <?php 
                    for ($x = 1; $x <= 7; $x++) {
                        echo "
                        <a href='images/portraits/$x.jpg' data-lightbox='portrait-airbrush' data-title='Portraits Airbrush'>
                            <img src='images/portraits/$x.jpg' style='width:200px; height:133px;' alt='portraits airbrush' />
                        </a>
                        ";
                    } 
                ?>                                              
            </div>
            
            <div id="guitars-wrap" class="wrap hide" style="width:780px !important;">       
                <?php 
                    for ($x = 1; $x <= 1; $x++) {
                        echo "
                        <a href='images/Guitars/$x.jpg' data-lightbox='guitar-airbrush' data-title='Guitars Airbrush'>
                            <img src='images/Guitars/$x.jpg' style='width:133px; height:200px;' alt='guitars airbrush' />
                        </a>
                        ";
                    } 
                ?>                                              
            </div>   
    
            <div id="other-wrap" class="wrap hide" style="width:780px !important;">       
                <?php 
                    for ($x = 1; $x <= 2; $x++) {
                        echo "
                        <a href='images/other/$x.jpg' data-lightbox='airbrush' data-title='Airbrush'>
                            <img src='images/other/$x.jpg' style='width:133px; height:200px;' alt='airbrush' />
                        </a>
                        ";
                    } 
                ?>                                              
            </div>  
            
            
<?php
$formMessage = "";
$senderName = "";
$senderCity = "";
$senderState = "";
$senderZip = "";
$senderPhone = "";
$senderEmail = "";
$senderMessage = "";

if ($_POST['name']) { // If the form is trying to post value of name field
 
    // Gather the posted form variables into local PHP variables
    $senderName = $_POST['name'];
    $senderCity = $_POST['city'];
	$senderState = $_POST['state'];
    $senderZip = $_POST['zip'];
	$senderPhone = $_POST['phone'];
    $senderEmail = $_POST['email'];
    $senderMessage = $_POST['comments'];
    // Make sure certain vars are present or else we do not send email yet
    if (!$senderName || !$senderCity || !$senderZip || !$senderPhone || !$senderEmail || !$senderMessage) {
 
         $formMessage = "The form is incomplete. Please fill in the required fields.";
 
    } else { // Here is the section in which the email actually gets sent

        // Run any filtering here
        $senderName = strip_tags($senderName);
        $senderName = stripslashes($senderName);
		$senderCity = strip_tags($senderCity);
        $senderCity = stripslashes($senderCity);
		$senderState = strip_tags($senderState);
        $senderState = stripslashes($senderState);
		$senderZip = strip_tags($senderZip);
        $senderZip = stripslashes($senderZip);
		$senderPhone = strip_tags($senderPhone);
        $senderPhone = stripslashes($senderPhone);
        $senderEmail = strip_tags($senderEmail);
        $senderEmail = stripslashes($senderEmail);
        $senderMessage = strip_tags($senderMessage);
        $senderMessage = stripslashes($senderMessage);
        // End Filtering
        $to = "brianray71@gmail.com";         
        $from = "brianray71@gmail.com";
        $subject = "You have a message from your website, kbkustomairbrush.com";
        // Begin Email Message Body
        $message = "
        $senderMessage
        $senderName
		$senderCity
		$senderState $senderZip
		$senderPhone
        $senderEmail
        ";
        // Set headers configurations
        $headers  = 'MIME-Version: 1.0' . "rn";
        $headers .= "Content-type: textrn";
        $headers .= "From: $fromrn";
        // Mail it now using PHP's mail function
        mail($to, $subject, $message, $headers);
        $formMessage = "Thanks! Your message has been sent. We will contact you soon.";
        $senderName = "";
		$senderPhone = "";
        $senderEmail = "";
        $senderMessage = "";
    } // close the else condition

} // close if (POST condition
?>

<form id="contact_form" action="contact.php" method="post" onsubmit="return validate(this);" style="display:none;">

    <h2>- Contact KB -</h2>   
    <?php echo "<span style='color:yellow; font-size:1.1em; font-weight:bold;'>" . $formMessage . "</span>"; ?>
    <div id="form-left">
    	<div id="name-wrap" class="field-wrap">
            <label for="name" class="table-text">Name<span style="color:red;">*</span></label><br>
            <input type="text"  name="name" id="name" size="30"  value="<?php echo $senderName; ?>" />
        </div>
        
        <div id="city-wrap" class="field-wrap">
            <label for="city" class="table-text">City<span style="color:red;">*</span></label><br>
            <input type="text" name="city" id="city" size="30" value="<?php echo $senderCity; ?>" />
        </div>
        
        <div id="state-zip-wrap" class="field-wrap">
            <div id="state-wrap">
                <label for="state" class="table-text">State<span style="color:red;">*</span></label><br>  
                <select name="state" id="state"> 
                    <option value="" selected="selected" id="selected"></option> 
                    <option value="AL" class="state">AL</option> 
                    <option value="AK" class="state">AK</option> 
                    <option value="AZ" class="state">AZ</option> 
                    <option value="AR" class="state">AR</option> 
                    <option value="CA" class="state">CA</option> 
                    <option value="CO" class="state">CO</option> 
                    <option value="CT" class="state">CT</option> 
                    <option value="DE" class="state">DE</option> 
                    <option value="DC" class="state">DC</option> 
                    <option value="FL" class="state">FL</option> 
                    <option value="GA" class="state">GA</option> 
                    <option value="HI" class="state">HI</option> 
                    <option value="ID" class="state">ID</option> 
                    <option value="IL" class="state">IL</option> 
                    <option value="IN" class="state">IN</option> 
                    <option value="IA" class="state">IA</option> 
                    <option value="KS" class="state">KS</option> 
                    <option value="KY" class="state">KY</option> 
                    <option value="LA" class="state">LA</option> 
                    <option value="ME" class="state">ME</option> 
                    <option value="MD" class="state">MD</option> 
                    <option value="MA" class="state">MA</option> 
                    <option value="MI" class="state">MI</option> 
                    <option value="MN" class="state">MN</option> 
                    <option value="MS" class="state">MS</option> 
                    <option value="MO" class="state">MO</option> 
                    <option value="MT" class="state">MT</option> 
                    <option value="NE" class="state">NE</option> 
                    <option value="NV" class="state">NV</option> 
                    <option value="NH" class="state">NH</option> 
                    <option value="NJ" class="state">NJ</option> 
                    <option value="NM" class="state">NM</option> 
                    <option value="NY" class="state">NY</option> 
                    <option value="NC" class="state">NC</option> 
                    <option value="ND" class="state">ND</option> 
                    <option value="OH" class="state">OH</option> 
                    <option value="OK" class="state">OK</option> 
                    <option value="OR" class="state">OR</option> 
                    <option value="PA" class="state">PA</option> 
                    <option value="RI" class="state">RI</option> 
                    <option value="SC" class="state">SC</option> 
                    <option value="SD" class="state">SD</option> 
                    <option value="TN" class="state">TN</option> 
                    <option value="TX" class="state">TX</option> 
                    <option value="UT" class="state">UT</option> 
                    <option value="VT" class="state">VT</option> 
                    <option value="VA" class="state">VA</option> 
                    <option value="WA" class="state">WA</option> 
                    <option value="WV" class="state">WV</option> 
                    <option value="WI" class="state">WI</option> 
                    <option value="WY" class="state">WY</option>
                </select>
            </div>
            
            <div id="zip-wrap" class="field-wrap">
                <label for="zip" style="text-align:right; font-size:1em;">Zip Code<span style="color:red;">*</span></label><br>
                <input type="text" name="zip" id="zip" maxlength="5" size="5" value="<?php echo $senderZip; ?>" />
            </div>
        </div>
        
        <div id="phone-wrap" class="field-wrap">
            <label for="phone" class="table-text">Phone<span style="color:red;">*</span></label><br>
            <input type="text" name="phone" id="phone" maxlength="14" size="30" value="<?php echo $senderPhone; ?>" />
        </div>
    	
        <div id="email-wrap" class="field-wrap">
            <label for="email" class="table-text">Email<span style="color:red;">*</span></label><br>
            <input type="text" name="email" id="email" size="30" value="<?php echo $senderEmail; ?>" />
        </div>
    </div>
    <div id="form-right">
    	<div id="textarea-wrap" class="field-wrap">
            <label for="comments">What Can I Help You With?<span style="color:red;">*</span></label><br>
            <textarea id="comments" name="comments" rows="5" cols="23"><?php echo $senderMessage; ?></textarea>
        </div>
    </div>
	
	<input type="submit" value="Submit" class="button" />

	<div id="errorMessage"></div>
            
</form>
               
    	<footer>Copyright &copy; 2017 | KB Kustom Airbrush</footer>     
    </div><!--end of content-wrap-->
        
        <script>
            $(function(){
                $("nav#main ul li").on("click", function(){
                    $("nav#main ul li").removeClass("active-li");
                    $(this).addClass("active-li");
                });
                
                /*$("#for-more-info span").on("click", function(){
                    $("#content-wrap p").css("display", "block");
                    $("#for-more-info").css("display", "none");
                });			
                $("#content-wrap p span").on("click", function(){
                    $("#content-wrap p").css("display", "none");
                    $("#for-more-info").css("display", "block");
                });
                $("nav#main ul li").on("click", function(){
                    $("#content-wrap p").css("display", "none");
                    $("#for-more-info").css("display", "block");
                });*/
                            
                $("nav#main ul li#motorcycles").on("click", function(){
                    $("#content-wrap div").addClass("hide");
                    $("#motorcycles-wrap").removeClass("hide");
					$("form div").removeClass("hide");
                });
                $("nav#main ul li#vests").on("click", function(){
                    $("#content-wrap div").addClass("hide");
                    $("#vests-wrap").removeClass("hide");
					$("form div").removeClass("hide");
                });
                $("nav#main ul li#portraits").on("click", function(){
                    $("#content-wrap div").addClass("hide");
                    $("#portraits-wrap").removeClass("hide");
					$("form div").removeClass("hide");
                });
				$("nav#main ul li#guitars").on("click", function(){
                    $("#content-wrap div").addClass("hide");
                    $("#guitars-wrap").removeClass("hide");
					$("form div").removeClass("hide");
                });
                $("nav#main ul li#other").on("click", function(){
                    $("#content-wrap div").addClass("hide");
                    $("#other-wrap").removeClass("hide");
					$("form div").removeClass("hide");
                });
                
            
              $('#motorcycles-wrap').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  // other options
                  gallery:{enabled:true},
                  image: {
                  // options for image content type
                  titleSrc: 'title'
                  }			
               });
               
               $('#vests-wrap').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  // other options
                  gallery:{enabled:true},
                  image: {
                  // options for image content type
                  titleSrc: 'title'
                  }			
               });
               
               $('#portraits-wrap').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  // other options
                  gallery:{enabled:true},
                  image: {
                  // options for image content type
                  titleSrc: 'title'
                  }			
               });
               
               $('#other-wrap').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  // other options
                  gallery:{enabled:true},
                  image: {
                  // options for image content type
                  titleSrc: 'title'
                  }			
               });
			   
			   $('#motorcycles').on('click', function () {
			   		$('html, body').animate({ scrollTop: $('#motorcycles-wrap').offset().top - 75 + "px" }, 800);
					$("#back-to-top").css("display","block");
				});
				
				$('#vests').on('click', function () {
			   		$('html, body').animate({ scrollTop: $('#vests-wrap').offset().top - 75 + "px" }, 800);
					$("#back-to-top").css("display","block");
				});
				
				$('#portraits').on('click', function () {
			   		$('html, body').animate({ scrollTop: $('#portraits-wrap').offset().top - 75 + "px" }, 800);
					$("#back-to-top").css("display","block");
				});
				
				$('#guitars').on('click', function () {
			   		$('html, body').animate({ scrollTop: $('#guitars-wrap').offset().top - 75 + "px" }, 800);
					$("#back-to-top").css("display","block");
				});
				
				$('#other').on('click', function () {
			   		$('html, body').animate({ scrollTop: $('#other-wrap').offset().top - 75 + "px" }, 800);
					$("#back-to-top").css("display","block");
				});
				
				$('#back-to-top').on('click', function () {
			   		$('html, body').animate({ scrollTop: $('#site-wrap').offset().top - 75 + "px" }, 800);
					$("#back-to-top").css("display","none");
				});
                    
            });
        </script>
         
    </div>
</body>
</html> 
