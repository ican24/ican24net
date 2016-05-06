<?
require_once("conf/map.inc");
require_once("conf/operators.inc");
(preg_match("/\w{3}/",$_REQUEST["cid"]))?$cid=$_REQUEST["cid"]:$cid="ETH";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>iCAN Instant Cash Acceptance Network</title>
<meta name="description" content="iCAN instant Cash Acceptance Network, Building Real Infrastructure For Acceptance Solid Payments" />
<meta name="keywords" content="payment, cash, acceptance, network, self-service kiosk, ATM, Cash Register, POS, Mobile, top-up, wallet, iCAN, touch screen, top-up, transaction, bill, billing, gateway, validator, acceptor, banked, unbanked, innovative, trust-worthy, coin, modem thermal, printer" />
<meta name="robots" content="noindex, follow"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<meta property="og:title" content="iCAN, instant Cash Acceptance Network" />
<meta property="og:description" content="Building Real Infrastructure For Acceptance Solid Payments" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="/js/fotorama.js"></script>
<script type="text/javascript" src="/js/plavnaya_prokrutka.js"></script>
<script type="text/javascript" src="/js/parallax.min.js"></script>
<script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/js/maskedinput.js"></script>

<noscript>
			<style>
			.step {
				width: 100%;
				position: relative;
			}
			.step:not(.active) {
				opacity: 1;
				filter: alpha(opacity=99);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
			}
			.step:not(.active) a.jms-link{
				opacity: 1;
				margin-top: 40px;
			}
			</style>
		</noscript>
		<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('.menu_header_inside_right');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>

	

</head>
    
<body>
<noindex>
<div id="watermark">sample</div>

<div class="wrapper">

<!-- header begin -->
<!--
<div class="headerWS" id="top" name="top">
-->
<div class="headerWS" data-parallax="scroll" data-image-src="/images/abstract.jpg" id="top" name="top">
    <div class="menu_headerWS">
        <div class="menu_headerWS_inside_left">
			<img src="/images/logo-ican-1.png" alt=""> 
			<!-- <img src="/website/conf/flags/<?=$cid?>.png" alt=""> -->
			
        </div>
        <div class="menu_headerWS_inside_right">   
            <div>
                <ul>
                    <li><a href="#Advantages" class="scrollto">Solution</a></li>
                    <li><a href="#Solution" class="scrollto">Advancements</a></li>
                    <li><a href="#Markets" class="scrollto">Network</a></li>
                    <li><a href="#Channels" class="scrollto">Equipment</a></li>
                    <li><a href="#Team" id="scrollto">Team</a></li>
                    <li><a href="#Contacts" class="scrollto">Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
	<div style="width:90%;">
		<div style="float:left;width:40%;">
			<img src="/images/headerCollage.png" alt="" style="margin:10% 5% 10% 25%;">    
		</div>
		<div style="float:left;width:60%;">
			<div class="utp_header">
			<?
			$counter=file_get_contents('http://agent.ican24.net/Report/lastPayId.php');
			if($counter=="")$counter="00000000";
			?>
			<script type="text/javascript">
			var counter_start_from = "<?=$counter?>";
			var counter_length = 7;
			//Gives a random hit anywhere from 0 to "random_timer" seconds.
			var random_timer = 10;
			</script>
			<script type="text/javascript" src="/js/counter.js"></script>
			<div style="text-align: right">
			<span style="color: #333;font-size:19px;line-height: 1.4;">Accepted payments:</span><br>			
			<span id="thecounter"></span>
			</div>
		  <br><br>
        <h4 style="color:#333">Instant Payments</h4>
        <h3>Any time, Anywhere <!-- <span></span> --></h3>
        <p></p>
        <a href="#Advantages" class="button scrollto">learn more</a>
    </div>
    </div>
    </div>
</div>
<!-- header end -->

<!-- block advantages begin -->
<div class="ShowRoom" id="ShowRoom" name="ShowRoom">
<h3>Showroom</h3>
	<div class="wrapper">
			<div class="section" style="margin: 0% 0% 0% 10%;">
				<img src="/images/kioskshowroom.png" alt="">			
			</div>	
			<div class="section" style="margin: 5% 10% 0% 15%;">
				<div class="fotorama" data-nav="thumbs" id="fotorama_center" data-allowfullscreen="true">
					<img src="/images/showroom/1.jpg" width="67%">
					<img src="/images/showroom/2.jpg" width="67%">
					<img src="/images/showroom/3.jpg" width="67%">
					<img src="/images/showroom/4.jpg" width="67%">
					<img src="/images/showroom/5.jpg" width="67%">
					<img src="/images/showroom/6.jpg" width="67%">
					<img src="/images/showroom/7.jpg" width="67%">
					<img src="/images/showroom/8.jpg" width="67%">
				</div>

			</div>	
	</div>	
</div>
<!-- block advantages end -->

<!-- block advantages begin -->
<div class="Advantages" id="Advantages" name="Advantages">
<!--
        <p class="utp_Advantages">Underlying Magic</p>
-->   
        <div class="Advantages_inside">
            <div>
                <div class="Advantages1block">
					<img src="/images/icon-left.png" alt="">
                <h6>One Window</h6>
                <p>A single payment platform for all possible services in the country;</p>
                </div>
                <div class="Advantages1block">
					<img src="/images/icon-left.png" alt="">
                <h6>24/7/365</h6>
                <p>Continuous and non­stop nature of service provision;</p>
                </div>
                <div class="Advantages1block">
					<img src="/images/icon-left.png" alt="">
                <h6>Fee Free</h6>
                <p>Significant cheapness of the cost of making payments;</p>
                </div>
                <div class="Advantages1block">
					<img src="/images/icon-left.png" alt="">
                <h6>Secure, Risk Free</h6>
                <p>Transactions are encrypted with the highest encrytion available;</p>
                </div>

            </div>
        </div>
        <div class="Advantages_inside" id="po_centru">
            <div>
                <img src="/images/90.png" alt="" id="pict_rezina">
            </div>
        </div>
        <div class="Advantages_inside" id="Advantages_otstup_top">
            <div>
                <div class="Advantages2block">
					<img src="/images/icon-right.png" alt="">
                <h6>Quick Update</h6>
                <p>Quickly adding new services, rapid changing of payment details at the request of service providers;</p>
                </div>
                <div class="Advantages2block">
					<img src="/images/icon-right.png" alt="">
                <h6>Scaling</h6>
                <p>Readiness to scale quickly across the country;</p>
                </div>
                <div class="Advantages2block">
					<img src="/images/icon-right.png" alt="">
                <h6>Franchise</h6>
                <p>Distribution of payment devices on the franchise model. </p>
                </div>
                <div class="Advantages2block">
					<img src="/images/icon-right.png" alt="">
                <h6>Expert</h6>
                <p>Trained and experienced team with deep knowledge of of local specifics.</p>
                </div>

            </div>
        </div>
        <div class="clear"></div>
    </div>
<!-- block Advantages end -->

<!-- block marketing -->
<?
function addPadLeft($str,$len,$char){
	$padded="";
	$qty=$len-strlen($str);
	if(!$qty)$qty=0;
	for($i=0;$i<$len-strlen($str);$i++)$padded.=$char;
	return (string)$padded.$str; 
}
function addPadRight($str,$len,$char){
	$padded="";
	for($i=0;$i<$len-strlen($str);$i++)$padded.=$char;
	return (string)$str.$padded; 
}
$myLatLng=$worldLatLng[$cid];
$data=array();
$fp=fopen("conf/world_cities.csv","r");
if ($fp) {
    while (($line = fgets($fp)) !== false) {
        if(preg_match("/,".$cid.",/",$line))$data[]=explode(",", $line);
    }
    fclose($fp);
} else {
    // error opening the file.
}
$qty=count($data);
if($qty>10 && $qty<21)$zoom=8;
else if($qty>20 && $qty<31)$zoom=7;
else if($qty>30 && $qty<41)$zoom=7;
else if($qty>40 && $qty<51)$zoom=6;
else if($qty>50)$zoom=4;
else $zoom=8;
?>


<div class="map" id="Markets" name="Markets" style="background-color:#fff">

<h3>Network <?//=$qty?></h3>
<input type="hidden" name="cid" id="cid" value="<?($isoCodes3[$_REQUEST["cid"]])?print $isoCodes3[$_REQUEST["cid"]]: print 'KEN';?>">
<div id="countrymap" style="width: 100p%; height: 600px"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('countrymap'), {
          zoom: <?=$zoom?>,
          center: {lat: <?=$myLatLng[0]?>, lng: <?=$myLatLng[1]?>}
        });

        //var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
        var image = 'http://ican.w2bpm.com/images/ki2.png';
		<?
		$multi=900000;
		$dist=21000000;
		for($i=0;$i<count($data);$i++){
			if($data[$i]["2"]!=0 && $data[$i]["3"]!=0 && $data[$i]["4"]>50000){
				list($latInt,$latDec)=explode('.', $data[$i]["2"]);
				$latDec=addPadRight(trim($latDec),9,"0");
				$latMin=$latDec-rand(0,$dist);
				$latMax=$latDec+rand(0,$dist);
				if($latMin<0 || $latMin>999999999)$latMin=$latDec;
				if($latMax<0 || $latMax>999999999)$latMax=$latDec;

				list($lngInt,$lngDec)=explode('.', $data[$i]["3"]);
				//$lngDec=str_pad(trim($lngDec),9,"0");
				$lngDec=addPadRight(trim($lngDec),9,"0");
				$lngMin=$lngDec-rand(0,$dist);
				$lngMax=$lngDec+rand(0,$dist);
				if($lngMin<0 || $lngMin>999999999)$lngMin=$lngDec;
				if($lngMax<0 || $lngMax>999999999)$lngMax=$lngDec;
				
				$kqty=floor($data[$i]["4"]/30000);
				for($j=0;$j<$kqty;$j++){
					$rnd=($j/$multi);
					//$latDec."_".$lngDec
				?>
				var marker<?=$i?><?=$j?>_<?=$latDec."_".$lngDec?> = new google.maps.Marker({
					position: {lat: <?=$latInt.".".addPadLeft(rand($latMin,$latMax),9,"0");?>, lng: <?=$lngInt.".".addPadLeft(rand($lngMin,$lngMax),9,"0");?>},
					map: map,
					icon: image
				});
			<?
				}
			}
		}?>
	}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM8BQFMYwJcMq013oTRBt84daMWECPkSk&callback=initMap">
    </script>
</div>
<!-- marketing end -->



<!-- Solution begin -->

<div class="solution" data-parallax="scroll" data-image-src="/images/bg_solution1.jpg" id="Solution" name="Solution">
<br><br>
<h3> <span>Advancements</span></h3>

<div align=center>


<div class="benefit">
<h6>For Clients</h6>
<img src="/images/subscribers.png" alt="">­<p>
­- Convenient and intuitive user interface of the payment kiosks allows payment transactions directly without intermediaries;<br><br>
­- The operations are carried out instantly;<br><br> 
- The principle of "single window" (payment supermarket) allows the customer to pay for other services too at the same time;<br><br> 
­- As a result of inserting cash funds the payment kiosks give a check as proof of the payment;<br><br>
­- The payment kiosks and other devices also provide the ability to check online transactions;<br><br>
­<!--
- The customer can place a call to the call center  entering his/her mobile phone number in a special section of the menu.<br><br>	
-->
</p>
</div>	

<div class="benefit">
<h6>For Service Providers</h6>
<img src="/images/sp.png" alt="">­<p>
­- It allow to save distribution costs up to 3 times;<br><br>	
- Release from non­core functions (logistics, accounting, control and monitoring of distribution items);<br><br>	
- Zero financial risk when making payments through iCAN system, as it is used deposit clearance method at all levels;<br><br>	
- A high level of security and fraud protection;<br><br>	
- Launching new services for sales or bonus campaign quickly and without significant costs.<br><br>	
</p>
</div>	

<div class="benefit">
<h6>For agents (owners of the trade points)</h6>
<img src="/images/shop512.png" alt="">­<p>
- The new autonomous form of business, which provides a stable income without a large financial and time expenses;<br><br>	
- East to install:  it requires only 1m2 and 220V power outlet nearby;<br><br>	
- Fast payback on average 7­-8 months;<br><br>	
­- Attracting new customers due to the payers (30% on average), if it is an extra business;<br><br>	
­- Solid income from advertising;<br><br>	
­- New workplaces<br><br>
</p>
</div>	


</div>
</div>
<div class="clear"></div>

<!-- solution end -->




<!-- 4 modeli begin-->
    
<div class="channels" id="Channels" name="Channels">
   <p class="utp_channels">iCAN Payment Equipment</p>
    <div class="channels_odin_phone">
         <div class="channels_inside" id="bez_otstupa_verh_model">
    
           <div>
                <h3>Self-Service Kiosk Simple</h3>
                <h4>
iCAN 
ProLine Simple v.2. + Frame for 2-nd monitor / 
Bill Validator NV9 USB /  
Coin Acceptor EMP 800.14 USB / 
Custom VKP 80 II / 
General Touch 17" / 
Asus C8HM70-I / 
2GB DDR3 SDRAM 1066MHz / 
HDD 250GB, 16MB, SATA-3 / 
LCD-Monitor Acer V173DObmd /
Arch Linux                

<br><a href="#moreinfoKiosk" id="moreinfo2" class="button_moreinfo">All specifications</a></h4>

<div id="wrapper">
    <div class="section">

                <p class="podarok"><img src="/images/icons/like.png" alt="">Gift: Thermal Paper Pack (6)</p>
                <p><img src="/images/icons/garantiya.png" alt="">Guarantee - 1 year</p>
                <p><img src="/images/icons/razmer.png" alt="">Sizes 1430 x 500 x 350 mm</p>
                <p><img src="/images/icons/billaccept.png" alt="">Bill Validator NV9 USB</p>
                <p><img src="/images/icons/printer.png" alt="">Custom VKP 80 II</p>
                <p><img src="/images/icons/display.png" alt=""> LCD-Monitor Acer V173DObmd</p>
                <p><img src="/images/icons/processor.png" alt="">Intel® Celeron 847 on board</p>
                <p><img src="/images/icons/memory.png" alt="">2GB DDR3 SDRAM 1066MHz</p>
                <p><img src="/images/icons/linux.png" alt=""> Arch Linux</p>
                <p class="cena_phone pokazat_cena_button">$1990 &nbsp;&nbsp;&nbsp;<span>2750</span></p>
                <!--
                <p class="zakazat pokazat_cena_button"><a href="#popupform" id="popupbutton" class="button_red">Order</a></p>
                -->
	</div>
	<div class="section">
			<a href="/docs/Self_Service_Kiosk_eng.pdf"><img src="/images/docs/Self_Service_Kiosk_eng.png" width="25%"></a><br><br>
			<a href="/docs/Self_Service_Kiosk_Offer_eng.pdf"><img src="/images/docs/Self_Service_Kiosk_Offer_eng.png" width="25%"></a>
	</div>
</div> 
 
           </div>
       
        </div>
        <div class="channels_inside2" id="bez_otstupa_verh_model">

           <div>
                <div class="fotorama" data-nav="thumbs" id="fotorama_center" data-allowfullscreen="true">
                       <img src="/images/kiosk/kiosk_orange.png">
                       <img src="/images/kiosk/90.jpg">
                       <img src="/images/kiosk/kiosk_orange1.png">
                       <img src="/images/kiosk/kiosk_orange2.png">
                       <img src="/images/kiosk/kiosk_orange3.jpg">
                       <img src="/images/kiosk/kiosk_orange4.jpg">
                </div>
           </div>

        </div>      
    </div>
    
    <div class="channels_odin_phone">
         <div class="channels_inside">
    
           <div>
                <h3>Mobile POS Terminal K370</h3>
                <h4>
                Dual CPU: Samsung S3C2410 & STC12LE5412 /
                32MB FLASH, 32MB SDRAM / 
                1 power port,1 RJ11 telephone port,1 12PIN multi-function port include 1 USB HOST,1 USB DEVICE,2 RS232 port / 
                High Speed Termal Printer, Speed: 5cm/sec, Paper Width:57mm / 
                128*64 FSTN / 
                18 Keys with waterproof and dustproof, 10 alphanumeric keys, 8 function keys / 
                MODEM,GPRS  / ArmLinux
                <br><a href="#moreinfoPOS" id="moreinfo2" class="button_moreinfo">All Specifications</a></h4>

<div id="wrapper">
    <div class="section">

                <p class="podarok"><img src="/images/icons/like.png" alt="">Gift: Thermal Paper Pack (6)</p>
                <p><img src="/images/icons/garantiya.png" alt="">Warranty - 1 year</p>
                <p><img src="/images/icons/razmer.png" alt="">Size: 200 x 90 x 60 mm</p>
                <p><img src="/images/icons/printer.png" alt="">High Speed Thermal Printer</p>
                <p><img src="/images/icons/display.png" alt=""> 128*64 FSTN, LED backlight(65x34)</p>
                <p><img src="/images/icons/processor.png" alt="">Dual CPU, S3C2410 & STC12LE5412</p>
                <p><img src="/images/icons/memory.png" alt="">Standard 32MB FLASH, 32MB SDRAM.</p>
                <p><img src="/images/icons/linux.png" alt=""> Arm Linux</p>
                <p class="cena_phone pokazat_cena_button">$199 &nbsp;&nbsp;&nbsp;<span>217</span></p>
                <!--
                <p class="zakazat pokazat_cena_button"><a href="#popupform2" id="popupbutton2" class="button_red">Order</a></p>
                -->
	</div>
	<div class="section">
			<a href="/docs/POS_eng.pdf" title="POS_eng.pdf"><img src="/images/docs/POS_eng.png" width="25%"></a><br><br>
			<a href="/docs/POS_Offer_eng.pdf" title="POS_Offer_eng.pdf"><img src="/images/docs/POS_Offer_eng.png" width="25%"></a>
	</div>
</div> 

           </div>
       
        </div>

        <div class="channels_inside2">

           <div>
                <div class="fotorama" data-nav="thumbs" id="fotorama_center" data-allowfullscreen="true">
						<img src="/images/POS/k370_0.jpg">
						<img src="/images/POS/k370_1.jpg">
						<img src="/images/POS/k370_2.jpg">
						<img src="/images/POS/k370_3.jpg">
						<img src="/images/POS/k370_4.jpg">
						<img src="/images/POS/k370_5.jpg">
						<img src="/images/POS/k370_6.jpg">
                </div>
                

           </div>

        </div>      
    </div>


	<!-- e-Wallet -->
    <div class="channels_odin_phone">
         <div class="channels_inside">
    
           <div>
                <h3>Mobile Application e-Wallet</h3>
<b>Top 5 advantages of e­Wallet</b>
<p>1. <font color="#CB8F22">No time limit on payments.</font> Hencefore the customers may make any payment operation using their personal devices anytime.</p>
<p>2. <font color="#CB8F22">No territory limit on payments.</font> The customers do not need to be closer of the payment points for payment purposes. They may make payments anywhere in the country or even outside.</p>
<p>3. e-Wallet as a payment method is <font color="#CB8F22">an ideally solution for Internet shops</font> especially global shopping portals like AliExpress, JD or others.</p>
<p>4. The mobile application is <font color="#CB8F22">a nice tool to keep in touch with the customers</font>, regularly advertise or promote them new services and products.</p>
<p>5. The high demand of e-Wallet top-up need by the customers will make iCAN basic client devices (Self-Service Kiosks, POS and PC/terminal applications) more demanded by the owners of traditionally sale-points (Big malls, Supermarkets, Teleboutiques, Internet Cafes, Railway stations, Bus stations, Airports, Gazoil stations, Business centers and others). <font color="#CB8F22">It'll be enlarge physical network</font> of the payment system covering more and more areas.</p>

<div id="wrapper">
    <div class="section">
                <p><img src="/images/icons/android.png" alt=""> Android 4.x, 5.x</p>
                <p class="cena_phone pokazat_cena_button">Free&nbsp;&nbsp;&nbsp;</p>
	</div>
	<div class="section">
			<a href="/docs/e-Wallet_eng.pdf" title="e-Wallet_eng.pdf"><img src="/images/docs/e-Wallet_eng.png" width="25%"></a>
	</div>
</div> 



           </div>
       
        </div>

        <div class="channels_inside2">

           <div>
                <div class="fotorama" data-nav="thumbs" id="fotorama_center" data-allowfullscreen="true">
						<img src="/images/Wallet/00.jpg">
						<img src="/images/Wallet/01.jpg">
						<img src="/images/Wallet/02.jpg">
						<img src="/images/Wallet/03.jpg">
						<img src="/images/Wallet/04.jpg">
						<img src="/images/Wallet/05.jpg">
						<img src="/images/Wallet/06.jpg">
						<img src="/images/Wallet/07.jpg">
						<img src="/images/Wallet/08.jpg">
						<img src="/images/Wallet/09.jpg">
						<img src="/images/Wallet/10.jpg">
                </div>
           </div>

        </div>      
    </div>
	<!-- e-Wallet end -->


	<!-- ATM -->
    <div class="channels_odin_phone">
         <div class="channels_inside">
    
           <div>
                <h3>Payment Module for ATM</h3>
<p>
Payment module for ATM is a special software solution for integration with the Bank ATM Networks to accept payments from the bank clients directly from the ATM. <br>
Our solution enhances bank market offerings with new added-value services.<br>
In addition to withdraw cash and perform operations ATMs may provide new services: instant money transfers, bill payments, ticketing, mobile phone top-up, etc.<br>
</p>

<div id="wrapper">
    <div class="section">
<p>
<font color="#CB8F22">
Added-value services (with iCAN)<br>
• Bill payments<br>
• Mobile top-up<br>
• Ticketing<br>
</font>
</p>
	</div>
	<div class="section">
			<a href="/docs/ATM_eng.pdf"><img src="/images/docs/ATM_eng.png" width="25%"></a><br><br>
	</div>
</div> 

           </div>
       
        </div>

        <div class="channels_inside2">

           <div>
                <div class="fotorama" data-nav="thumbs" id="fotorama_center" data-allowfullscreen="true">
						<img src="/images/ATM/atm0.jpg">
						<img src="/images/ATM/01.png">
						<img src="/images/ATM/02.png">
						<img src="/images/ATM/03.png">
						<img src="/images/ATM/04.png">
						<img src="/images/ATM/05.png">
						<img src="/images/ATM/06.png">
						<img src="/images/ATM/07.png">
						<img src="/images/ATM/08.png">
                </div>

           </div>

        </div>      
    </div>
	<!-- ATM end -->


	<!-- Cash Register -->
    <div class="channels_odin_phone">
         <div class="channels_inside">
    
           <div>
                <h3>Payment Module for Cash Registers</h3>
<p>
Payment module for Cash Registers is a special software solution for integration with the retail networks system to accept payments from personal clients. The Cash Registers powered with Payment integration module may accept personal payments from the customers in the retail chains or small family-run stores.<br>
</p>
<br>

<div id="wrapper">
    <div class="section">
<p>
<font color="#CB8F22">
Added-value services (with iCAN)<br>
• Bill payments<br>
• Mobile top-up<br>
• Ticketing<br>
</font>
</p>
	</div>
	<div class="section">
			<a href="/docs/Cash_Register_eng.pdf"><img src="/images/docs/Cash_Register_eng.png" width="25%"></a><br><br>
	</div>
</div> 

           </div>
       
        </div>

        <div class="channels_inside2">

           <div>
                <div class="fotorama" data-nav="thumbs" id="fotorama_center" data-allowfullscreen="true">
						<img src="/images/CashReg/01.jpg">
						<img src="/images/CashReg/02.jpg">
						<img src="/images/CashReg/03.jpg">
						<img src="/images/CashReg/04.jpg">
						<img src="/images/CashReg/90.png">
						<img src="/images/CashReg/01.jpg">
                </div>

           </div>

        </div>      
    </div>
</div>
	<!-- Cash Register end -->

<!-- How it works begin -->

<div class="how_work" id="HowItWorks" name="HowItWorks">
    <h3>clear <span>Presentation,</span> transparent <span>Arrangment,</span> easy <span>Launching</span></h3>
<div class="imgHolder">
	<img src="/images/roadmap.png" />
	<span class="Label1">Presentation</span><br />
	<span class="Date1"><?=date(" d F",time()+60*60*24*1)?></span>

	<span class="Label2">Business Plan</span>
	<span class="Date2"><?=date(" d F",time()+60*60*24*2)?></span>

	<span class="Label3">Contract</span>
	<span class="Date3"><?=date(" d F",time()+60*60*24*3)?></span>

	<span class="Label4">Transportation</span>
	<span class="Date4"><?=date(" d F",time()+60*60*24*5)?></span>

	<span class="Label5">Launcing</span>
	<span class="Date5"><?=date(" d F",time()+60*60*24*6)?></span>
</div>
<div class="how_work_centr1">

        <div class="how_work_centr2">
            <ul>
                <li>
                    <img src="/images/presentation.png" alt="">
                    <p>Order Presentation</p>
                </li>
                <li>
                    <img src="/images/discussion.png" alt="">
                    <p>Discuss Project in detail</p>
                </li>
                <li>
                    <img src="/images/handshake.png" alt="">
                    <p>Make Arrangement</p>
                </li>
                <li>
                    <img src="/images/registration.png" alt="">
                    <p>Provide Papers</p>
                    <p></p>
                </li>
                <li>
                    <img src="/images/contract.png" alt="">
                    <p>Sign Contract<br>with Processing</p>
                </li>
                <li>
                    <img src="/images/launch.png" alt="">
                    <p>Launch Business</p>
                </li>
            </ul>       
        </div>
        <div class="clear"></div> 
    </div>
</div>

<!-- kak murabotaem end -->

<!-- partners begin -->

<div class="partners">
    <h3>Our <span>Partners</span></h3>
    <div class="partners_centr1">
		<div class="partners_centr2">
           <ul>
				<?for($i=0;$i<count($Operators[$cid]["name"]);$i++) {?>
					<li><img src="/website/conf/operators/<?=basename($Operators[$cid]["img"][$i])?>" alt=""></li>
				<?}?>
            </ul>
        </div>
        <div class="clear"></div> 
		</div>
    <div class="partners_centr1">
		<div class="partners_centr2">
            <ul>       
                <li><img src="/images/partners/tranglo.png" alt=""></li>
                <li><img src="/images/partners/transferto.png" alt=""></li>
                <!-- <li><img src="/images/partners/pdt1.png" alt=""></li> -->
            </ul>
        </div>
        <div class="clear"></div> 
		</div>
    <div class="partners_centr1">
		<div class="partners_centr2">
            <ul>       
                <li><img src="/images/partners/provento.png" alt=""></li>
                <li><img src="/images/partners/itl.png" alt=""></li>
                <li><img src="/images/partners/wh.png" alt=""></li>
                <li><img src="/images/partners/gt.png" alt=""></li>
                <li><img src="/images/partners/custom.png" alt=""></li>
            </ul>
        </div>
        <div class="clear"></div> 
		</div>
    <div class="partners_centr1">
		<div class="partners_centr2">
            <ul>       
                <li><img src="/images/partners/uite.png" alt=""></li>
                <li><img src="/images/partners/masys.jpg" alt=""></li>
            </ul>
      </div>      
		</div>
        <div class="clear"></div> 
    </div>
</div>
    
<!-- partners end -->


<!-- form -->

<div id="popupformCall">
    <h2>Call Back</h2>
    <div class="comment">Leave your phone number and we will<br/>call you back as soon as possible</div>
    <form method="post" id="form-feedbackCall">
        <input type="text" placeholder="Please enter your name" name="nameCall" id="nameCall" class="input_text"/>
        <div id="errorNameCall"></div>
        <input type="text" placeholder="Please enter your phone number" name="phoneCall" id="phoneCall" class="input_text2"/>
        <div id="errorPhoneCall"></div>
        <input class="button_send" type="submit" value="Send Request"/>
        <div id="errorCall"></div>
    </form>
</div>


<div id="popupformPack">
    <h2>Call Back</h2>
    <div class="comment">Leave your email address and we will<br/>send required documents you as soon as possible</div>
    <form method="post" id="form-feedbackPack">
        <input type="text" placeholder="Please enter your name" name="namePack" id="namePack" class="input_text"/>
        <div id="errorNamePack"></div>
        <input type="text" placeholder="Please enter your email address" name="emailPack" id="emailPack" class="input_text3"/>
        <div id="errorEmailPack"></div>
        <input type="text" placeholder="Please enter your phone number" name="phonePack" id="phonePack" class="input_text2"/>
        <div id="errorPhonePack"></div>
        <input class="button_send" type="submit" value="Send Request"/>
        <div id="errorPack"></div>
    </form>
</div>
<!-- form -->




<!-- team begin -->

<div class="team" data-parallax="scroll" data-image-src="/images/bg_team1.jpg" id="Team" name="Team">
<br><br>
<h3>Our <span>Team</span></h3>

<div align=center>
<table width="800">
<tr>
	<td width=350 style="font-size:22px;margin-right:20px;vertical-align:top">
Many years of experience <br>
in technology development, <br>
management and <br>
maintenance of the <br>
payment business<br>
	
	</td>
	<td>
<!--

-->
<table width="200">
<tr>
	<td style="vertical-align: top">
<span id="members">Artak Hovsepian</span><br>
<i>CEO</i><br>
	</td>
	<td style="vertical-align: middle"><a href="https://www.linkedin.com/in/artak-hovsepyan-43466ba"><img src="/images/linkedin.png" alt="" align="right"></a></td>
</tr>
</table>
Developed solutions for processing and client devices for payment systems
from Top 5 in Russia, since 2012 CTO & CEO of 
Sadad Payment System (Morocco). Also expert on North 
Africa and the Middle East.
<br><br>
<table width="200">
<tr>
	<td style="vertical-align: top">
<span id="members">Mesrop Ghulijanyan</span><br>
<i>Processing engineer</i><br>
	</td>
	<td style="vertical-align: middle"><a href="https://www.linkedin.com/in/mesrop-ghulijanyan-9b5815b3"><img src="/images/linkedin.png" alt="" align="right"></a></td>
</tr>
</table>
Architect of heavily server projects, highly qualified 
specialist in information security
<br><br>
<span id="members">Armen Ghochikyan</span><br>
<i>Front-end Equipment Engineer</i><br>
Certified specialist and highly experienced expert of the equipment used in payment 
terminals.
<br><br>
<table width="200">

<tr>
	<td style="vertical-align: top">
<span id="members">Vazgen Shakhoyan</span><br>
<i>Business Development</i><br> 
	</td>
	<td style="vertical-align: middle"><a href="https://www.linkedin.com/in/vazgenshakhoyan"><img src="/images/linkedin.png" alt="" align="right"></a></td>
</tr>
</table>

A graduate of the University of Amsterdam.
Market research, successful promotion of products and 
services
	
	</td>
</tr>
</table>
<br><br>
<br><br>
</div>
</div>
<div class="clear"></div>

<!-- team end -->



<!-- block Ostalis inquiry begin -->

<div class="inquiry" id="Contacts" name="Contacts">

   <h3>If you have <span>any questions, </span>please do not hesitate to contact us!</h3>
    <div class="inquiry_inside">
        <div class="inquiry_left">
            <img src="/images/icon-left.png" alt="">
            <h6>Full Document Package</h6>
            <p>Our staff will provide full package of documents by your request</p>
        </div>
    </div>
    <div class="inquiry_inside" id="inquiry_pict_rezina">
        <div>
            <img src="/images/folder.jpg" alt="Have you question?">
        </div>
    </div>
    <div class="inquiry_inside">
        <div class="inquiry_right">
            <img src="/images/icon-right.png" alt="">
            <h6>Limited Offer!</h6>
            <p>
            <?=140-date("z")?> days until end of action   
            </p>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="inquiry_sinie">
        <div class="inquiry_sinie_inside_left">
            <div>
                <h3>Make an inquiry of &nbsp;<a href="#Package" id="package2" style="color:#f4fdf4;text-decoration: none;font-size: 34px; font-weight:bolder;
">full package of documents</a></h3>
                <h4>
                Please complete the form to request full package of documents <span class="zayavka_strelka_naprotiv">&rarr;</span><span class="zayavka_strelka_vniz">bottom &darr;</span></h4>
            </div>
        </div>
        <div class="inquiry_sinie_inside_right">
            <div>
                <a href="#popupformPack" id="popupbuttonPack" class="button">&nbsp;Request Package&nbsp;&nbsp;</a>
            </div>
        </div>
<br><br>
<br><br>
<br><br>

<div class="wrapper">
	<div class="section">
		<p style="color:#efefef;">
		The package includes:<br>
		1. Booklet in A5 format with all the major advantages of the agent scheme<br>
		2. Service Contract with PAN<br>
		3. Simple instructions on how to top-up the deposit account of the agent<br>
		4. Clear description of the customer equipment and technical documentation<br>
		5. Equipment maintenance Instructions<br>
		6. iCAN Kiosk Manual<br>
		7. Web Portal Manual<br>
		</p>
	</div>
	<div class="section">
		<div class="fotorama" data-nav="thumbs" id="fotorama_center">
			<img src="/images/docs/monitoring.png" width="67%">
			<img src="/images/docs/ican2015_v1.2_eng.png" width="67%">
			<img src="/images/docs/business_plan_v1.1_eng.png" width="67%">
			<img src="/images/docs/Exclusive_Services_Agreement_Ethiopia.png" width="67%">
			<img src="/images/docs/Self_Service_Kiosk_eng.png" width="67%">
			<img src="/images/docs/Self_Service_Kiosk_Offer_eng.png" width="67%">
		</div>
	</div>
</div>
        <div class="inquiry_sinie_inside_left">
            <div>
                <h3>Make a phone call  &nbsp;<span>+7 903-561-81-51</span></h3>
                <h4>
                Please complete the form to request a call back from one of our specialists <span class="zayavka_strelka_naprotiv">&rarr;</span><span class="zayavka_strelka_vniz">bottom &darr;</span></h4>
            </div>
        </div>
        <div class="inquiry_sinie_inside_right">
            <div>
                <a href="#popupformCall" id="popupbuttonCall" class="button">Request a call back</a>
            </div>
        </div>
</div>
<!-- block Ostalis inquiry end -->
<!-- footer begin -->
<div class="footer">
    <div class="footer_inside">
        <div>
            <h6>Legal information</h6>
            <div style="color:orange">iCAN Payment System</div>
            <span style="color:#999">
            PSRNSP  316774600073556 <br>ITN 772704885702 <br>
            </span>
            <br>
            <div style="color:orange">Kiosk Development LLC</div>
            <img src="/images/madeinarmenia3.png" alt="" width="35%" align="right" style="padding-right:80px">
            <span style="color:#999">
            Yerevan, Armenia<br>
            ITN 00121768<br> 
            </span>
            <br>
            <p><a href="#Policy" id="Policy2">Privacy Policy</a></p>
        </div>
    </div>
    <div class="footer_inside links_phone">
        <div>
            <h6>Customer Information</h6>
            <p><a href="#Channels" class="scrollto">Equipment & Channels</a></p>
            <p><a href="#Package" id="package2">Document List</a></p>
            <p><a href="#HowItWorks" class="scrollto">Road Map</a></p>
            <p><a href="#Team" class="scrollto">Our Team</a></p>

        </div>
    </div>
    <div class="footer_inside" id="Contacts_footer">
        <div>
            <h6>Contacts</h6>
            <p class="footer_telephone"><img src="/images/tel.png" alt="">+7 903-561-81-51</p>
            <p><a href="#popupformCall" id="popupbuttonCall" class="button_footer">Callback</a></p>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="bottom_black">
        <div class="bottom_black_inside1">
				<img src="/images/logo-ican-1.png" alt=""> 
               
            <p>&copy; All rights reserved. iCAN instant Cash Acceptance Network</p>
            <a href="http://agent.ican24.net" style="display:none;">Processing</a>
        </div>
        <div class="bottom_black_inside2">
        <?
			$data="../counter.dat"; // Файл счетчика
			$count=file_get_contents($data);
			$count=preg_replace("/\D/","",$count); // Удаляем символ конца строки
			$count++; // Увеличиваем счетчик
			$countArr=str_split($count);
			for($i=0;$i<count($countArr);$i++) {
				if(preg_match("/\d/",$countArr[$i])){?>
				<img src="/images/counter/<?=$countArr[$i]?>.png" width="7%">
			<?	}
			}
			//file_put_contents($data, $count);
			//file_put_contents("../tmp/".$_SERVER["REMOTE_ADDR"], $count);
			?>
        <!--
        <img src="counter.php">
        -->
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#top" class="scrollto">Top &uarr;</a>
        </div>
        <div class="clear"></div>
</div>

<!-- footer end -->

<!-- prochie vspluvaushie formu -->

<div id="Policy">

<h3>Privacy Statement</h3>

<p class="zagolovok">Privacy Statement for ican24.net</p>

<p>iCAN has created this privacy statement in order to demonstrate our company commitment to privacy. The following discloses our information gathering and dissemination practices for this website: ican.w2bpm.com</p>

<p class="zagolovok">Collection of Personal Information from Service Visitors.</p>

<p>iCAN may collect and/or track (1) the home server domain names, email addresses, type of client computer, files downloaded, search engine used, operating system, and type of web browser of visitors to iCAN web service, (2) the email addresses of visitors that communicate with iCAN via email, (3) information knowingly provided by the visitor in online forms, registration forms, surveys, email, contest entries, and other online avenues (including demographic and personal profile data), and (4) aggregate and user-specific information on which pages visitors access.</p>

<p>iCAN may place Internet “cookies” on visitors’ hard drives. Internet cookies save data about individual visitors, such as the organization’s name, password, user-name, screen preferences, and the pages of a service viewed by the visitor. When the visitor revisitsiCAN web service, iCAN may recognize the visitor by the Internet cookie and customize the visitor’s experience accordingly. Visitors may decline Internet cookies, if any, by using the appropriate feature of their web client software, if available.</p>

<p class="zagolovok">Use of Personal Data Collected.</p>

<p>Personal data collected by iCAN may be used by iCAN for editorial and feedback purposes, for marketing and promotional purposes, for a statistical analysis of users’ behavior, for product development, for content improvement, or to customize the content and layout of iCAN service. Aggregate data on visitors’ home servers may be used for internal purposes but will not be provided to third parties such as marketing firms. Individually identifying information, such as names, postal and email addresses, phone numbers, and other personal information which visitors voluntarily provide to iCAN may be added to iCAN databases and used for future calls and mailings regarding service updates, new products and services, and upcoming events.</p>

<p>Our company use client’s information from 30-day Trial Registration form. We keep customers contact information strictly confidential and use it only to send important information to our customers.

<p class="zagolovok">Security Measures.</p>

<p>iCAN has implemented numerous security features to prevent the unauthorized release of or access to personal information. For example, all iCAN employees are required to certify their understanding that personal information is considered confidential, that it is important to safeguard personal information, and that iCAN will take appropriate action against any employee who fails to acknowledge these facts or adhere to the requisite standards of conduct. Please be advised, that iCAN is not responsible for the security of information transmitted via the Internet (electronic mail services) . For more private communication contact iCAN by telephone at +7 (903) 561 8151.</p>

<p class="zagolovok">iCAN Right to Contact Users.</p>

<p>iCAN reserves the right to contact service visitors regarding sales and other informational requests made through its web service.</p>

<p class="zagolovok">iCAN Right to Change Privacy Policy.</p>

<p>iCAN reserves the right to change this Privacy Policy at any time without notice. Any change to this Privacy Policy shall be effective as to any visitor that has accepted the easyprojects.net Service Terms and Conditions before the change was made.</p>

<p class="zagolovok">Contact Information</p>

<p>iCAN welcomes your comments regarding this Statement of Privacy, please contact us by e-mail, or postal mail.</p>

<p>
--<br> 
Sincerely,<br>
iCAN Team<br>
</p>

</div>

<div id="Package">
<h3>Document Package Content</h3>
<table width=500>
<tr>
	<td colspan="2"><p class="zagolovok">I Block Presentation</p></td>
</tr>
<tr>
	<td>1. Short Presentation - iCAN_en.pdf</td>
	<td><img src="/images/docs/iCAN_en.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;a) How it looks - points.pdf</td>
	<td><img src="/images/docs/points.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;b) How it looks - transportation.pdf</td>
	<td><img src="/images/docs/transportation.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;c) How it looks - office.pdf</td>
	<td><img src="/images/docs/office.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;d) Network - net.pdf</td>
	<td><img src="/images/docs/net.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;e) Monitoring - net.pdf</td>
	<td><img src="/images/docs/monitoring.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;2. Full Presentation - ican2015_v1.2_eng.pdf</td>
	<td><img src="/images/docs/ican2015_v1.2_eng.png" width="67%"></td>
</tr>
<tr>
	<td colspan="2"><p class="zagolovok">II Block Business Plan</p></td>
</tr>
<tr>
	<td>1. Business Plan business_plan_v1.1_eng.pdf</td>
	<td><img src="/images/docs/business_plan_v1.1_eng.png" width="67%"></td>
</tr>
<tr>
	<td>2. Annex</td>
	<td></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;a) Exclusive Services Agreement - Exclusive_Services_Agreement_Ethiopia.pdf</td>
	<td><img src="/images/docs/Exclusive_Services_Agreement_Ethiopia.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;b) Self-Service Kiosk - Self_Service_Kiosk_eng.pdf</td>
	<td><img src="/images/docs/Self_Service_Kiosk_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;c) Self-Service Kiosk, Offer for Agents - Self_Service_Kiosk_Offer_eng.pdf</td>
	<td><img src="/images/docs/Self_Service_Kiosk_Offer_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;d) Mobile POS Terminal - POS_eng.pdf</td>
	<td><img src="/images/docs/POS_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;e) Mobile POS Terminal, Offer for Agents - POS_Offer_eng.pdf</td>
	<td><img src="/images/docs/POS_Offer_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;f) e-Wallet - e-Wallet_eng.pdf</td>
	<td><img src="/images/docs/e-Wallet_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;g) Payment Module for ATM - ATM_eng.pdf</td>
	<td><img src="/images/docs/ATM_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;h) Payment Module for Cash_Registers - Cash_Register_eng.pdf</td>
	<td><img src="/images/docs/Cash_Register_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;3. Financial Plan - iCANfinancials_common.xls</td>
	<td></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Summary Forecast"</td>
	<td><img src="/images/docs/Summary_Forecast.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Financial Model Common"</td>
	<td><img src="/images/docs/Financial_Model_Common.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Financial Model Processing"</td>
	<td><img src="/images/docs/Financial_Model_Processing.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Chart Total Revenue and Costs"</td>
	<td><img src="/images/docs/Chart_Total_Revenue_and_Costs.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Chart Total Cumulative Income"</td>
	<td><img src="/images/docs/Chart_Total_Cumulative_Income.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Forecast of Income and Expenses"</td>
	<td><img src="/images/docs/Forecast_of_Income_and_Expenses.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Cash Flow Projection"</td>
	<td><img src="/images/docs/Cash_Flow_Projection.png" width="67%"></td>
</tr>
</table>

</div>


<div id="moreinfoKiosk">
<h3>iCAN ProLine Simple v.2</h3>

<table>
<tr>
	<td width="50%">Case</td>
	<td width="50%">ProLine Simple v.2.</td></tr>
<tr>
	<td>Lock</td>
	<td>Standard</td></tr>
<tr>
	<td>Basic Display</td>
	<td>Acer V173DObmd</td></tr>
<tr>
	<td>Second Display</td>
	<td>Acer V173DObmd</td></tr>
<tr>
	<td>Touch Screen</td>
	<td>LED 17" 3мм.<BR>General Touch</td></tr>
<tr>
	<td>Bill Validator</td>
	<td>ITL NV9 USB<BR>CashCode MVU<BR>CashCode MSM<BR>Cash Code MFL<BR>MEi SCL8307L<BR>JCM DBV-500</td></tr>
<tr>
	<td>Thermal Printer&nbsp;</td>
	<td>Custom TG-2480H<BR>Custom VKP-80II<BR>Custom VKP-80III<BR>SNBC BK-T680<BR>Eclipse PSA-80</td></tr>
<tr>
	<td>Модем</td>
	<td>Huawei E352</td></tr>
<tr>
	<td>Стабилизатор</td>
	<td>LogicPower LPH-800RV</td></tr>
<tr>
	<td>Power supply for printer</td>
	<td>MeanWell NES-100-24</td></tr>
<tr>
	<td>Motherboard</td>
	<td>Intel D2700MUD</td></tr>
<tr>
	<td>CPU</td>
	<td>Intel ATOM D2700 1.6GHz</td></tr>
<tr>
	<td>Оперативная память</td>
	<td>DDR3 1333 2GB</td></tr>
<tr>
	<td>Disk</td>
	<td>SSD SDM4-M 22P/180D 128GB</td></tr>
<tr>
	<td>Power Supply</td>
	<td>Fujitsu-Siemens PRN-310W</td></tr>
<tr>
	<td>OS</td>
	<td>Linux</td></tr>
<tr>
	<td>Payment System</td>
	<td>iCAN</td></tr>
</tr>
</table>
    <div class="clear"></div>       
</div>

<div id="moreinfoPOS">
<h3>K370 Mobile POS Device</h3>
<p>
K370 POS terminal with iCAN solution is a compact fully functional device which quickly processes payments. It meets all current safety 
and security specifications. The terminal is light weight and at the same time uses powerful batteries to make it the ideal choice for portable solution.
A compact design with low costs, the terminal retains all the features of full payment terminals, in addition to built-in rechargeable battery so it will
continue to operate when and where there is no electricity. 
</p>
<br><br>
<div align="center"><b>K370 POS Technical Specifications</b></div>
<table>
<tr align="center" bgcolor="#808080">
	<td><font color="#ffffff"><b>Item</b></font></td>
	<td><font color="#ffffff"><b>Specifications</b></font></td>
</tr>
<tr>
	<td>Processor</td>
	<td>Double CPU, Samsung 32 Bit CPU & 8 Bit CPU</td>
</tr>
<tr  bgcolor="#d4d4d4">
	<td>Memory</td>
	<td>Standard 32MB FLASH, 32MB SDRAM. Can be extended to 64MB,
	128MB FLASH/SDRAM, support at least 500 transaction records.</td></tr>
</tr>
<tr>
	<td>OS</td>
	<td>Linux</td>
</tr>
<tr  bgcolor="#d4d4d4">
	<td>Power Supply</td>
	<td>
	External switch power<br>
	Input: 100V~240V, 50/60Hz<br>
	Output: 8.5VDC, 2.5A<br>
	Embedded 1000Mah/7.2V Li Battery in Handset
	</td>
</tr>
<tr>
	<td>Working electric current</td>
	<td>power on current:70mA~120mAm, stand by mode: 10MA printing average current:1A</td>
</tr>
<tr  bgcolor="#d4d4d4">
	<td>Connectivity</td>
	<td>1 power port, 1 telephone port, 1 12PIN multi-function port (include 1 USB HOST,1 USB DEVICE,2 RS232 port)</td>
</tr>
<tr>
	<td>Magnetic Stripe Reader</td>
	<td>
	Track 1/2/3, bi-directional swipe,<br>
	GB/T 14916,GB/T 15120,GB/T 15694-1,ISO7812-2,GB/T 17552 compliant,<br>
	life cycle :above 500,000 times
	</td>
</tr>
<tr  bgcolor="#d4d4d4">
	<td>IC Card Reader</td>
	<td>EMV Level1& Level2 approved</td>
</tr>
<tr>
	<td>PSAM Slots</td>
	<td>1, ISO7816</td>
</tr>
<tr  bgcolor="#d4d4d4">
	<td>Printer</td>
	<td>
	High Speed thermal Printer<br>
	Speed: 5cm/sec, Paper Width:57mm , Support print graphics<br>
	Life cycle: 50 km(above 250,000 pieces receipts)
	</td>
</tr>
<tr>
	<td>LCD</td>
	<td>
	128*64 FSTN C16 level grey with LED backlight,<br>
	Display size: 65*34mm
	</td>
</tr>
<tr  bgcolor="#d4d4d4">
	<td>Keypad</td>
	<td>18 Keys with waterproof and dustproof,</td>
</tr>
</table>

    <div class="clear"></div>       
</div>
<!-- prochie vspluvaushie formu -->


</div> <!-- end wrapper -->


<!--
    Сюда вставить счетчики Yandex.Metrika , Google.Analytics
 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75063118-1', 'auto');
  ga('send', 'pageview');
</script>


</noindex>
</body>
</html>