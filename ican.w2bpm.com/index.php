<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>iCAN Instant Cash Acceptance Network</title>
<meta name="description" content="iCAN instant Cash Acceptance Network, Building Real Infrastructure For Acceptance Solid Payments" />
<meta name="keywords" content="payment, cash, acceptance, network, self-service kiosk, ATM, Cash Register, POS, Mobile, top-up, wallet, iCAN, touch screen, top-up, transaction, bill, billing, gateway, validator, acceptor, banked, unbanked, innovative, trust-worthy, coin, modem thermal, printer" />
<meta name="robots" content="noindex, follow"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- для превью в соц.сетях -->
<meta property="og:title" content="iCAN, instant Cash Acceptance Network" />
<meta property="og:description" content="Building Real Infrastructure For Acceptance Solid Payments" />
<!-- для превью в соц.сетях -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="js/fotorama.js"></script>
<script type="text/javascript" src="js/plavnaya_prokrutka.js"></script>
<script type="text/javascript" src="js/parallax.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/maskedinput.js"></script>

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


<div class="wrapper">

<!-- header begin -->
<div class="header" id="top" name="top">
    <div class="menu_header">
        <div class="menu_header_inside_left">
			<img src="images/logo-ican-1.png" alt=""> 
        </div>
        <div class="menu_header_inside_right">   
            <div>
                <ul>
                    <li><a href="#Challenge" class="scrollto">Challenge</a></li>
                    <li><a href="#Solution" class="scrollto">Solution</a></li>
                    <li><a href="#Markets" class="scrollto">Markets</a></li>
                    <li><a href="#Model" class="scrollto">Model</a></li>
                    <li><a href="#Channels" class="scrollto">Channels</a></li>
                    <li><a href="#Team" id="scrollto">Team</a></li>
                    <li><a href="#Contacts" class="scrollto">Contacts</a></li>
                </ul>
            </div>
        </div>
        <a href="#" id="pull">Home</a>
    </div>
    <div class="clear"></div>
    <div class="utp_header">
			<?
			/*
			$count="1721342";
    		$countArr=str_split($count);
			for($i=0;$i<count($countArr);$i++) {
				if(preg_match("/\d/",$countArr[$i])){?>
				<img src="images/counter/<?=$countArr[$i]?>.png" width="7%">
			<?}
			}
			*/
			?>
			<!--
			-->
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
			<span style="color: #fff;font-size:19px;line-height: 1.4;">Accepted payments:</span><br>			
			<span id="thecounter"></span>
			</div>
		  <br><br>
        <h4>We are building</h4>
        <h3>Payment Acceptance Network<!-- <span></span> --></h3>
        <p></p>
        <a href="#Advantages" class="button scrollto">learn more</a>
    </div>
</div>
<!-- header end -->

<!-- Challenge begin -->

<div class="Challenge" data-parallax="scroll" data-image-src="images/bg_challenge.jpg" id="Challenge" name="Challenge">
<br><br>
<br><br>
<br><br>
<h3><span>Challenge</span></h3>

<div align=center>
<table width="1000">
<tr>
	<td width=520>
	
	</td>
	<td style="color:#ccc">
­<span style="font-size:20px">
The mobile and e-commerce services are growing quickly and extensively, 
but the existing infrastructure can not cope with increasing money flow from the payers to the service providers.<br>
The modern mobile money and e-wallet solutions, which are springing up like mushrooms, 
only complicate the ​situation, because they mainly offer 
how to spend funds, but not how to collect them and top-up user accounts. 

</span>
<br><br>
<br><br>

	- Over 90% of consumers are willing to pay for services in cash;<br><br>
	- Customers prefer to pay without queuing at points close proximity or near the daily itinerary;<br><br>
	- Many prefer to pay after hours, but receive the service immediately;<br><br>
­	- The banks and other fin. structures require big commissions ($1 for a payment of $10);<br><br>
­	- The service providers are spending up to 20% of their income for distribution services;<br><br>
­	- The service providers would like to introduce even more sophisticated new services, but the lack of infrastructure hinders it.<br><br> 
<br>
	
	</td>
</tr>
</table>
<br><br>
<br><br>
<br><br>
<br><br>
</div>
</div>
<div class="clear"></div>

<!-- Challenge end -->

<!-- Solution begin -->

<div class="solution" data-parallax="scroll" data-image-src="images/bg_solution1.jpg" id="Solution" name="Solution">
<br><br>
<h3>Our <span>Solution</span></h3>

<div align=center>


<div class="benefit">
<h6>For Clients</h6>
<img src="images/subscribers.png" alt="">­<p>
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
<img src="images/sp.png" alt="">­<p>
­- It allow to save distribution costs up to 3 times;<br><br>	
- Release from non­core functions (logistics, accounting, control and monitoring of distribution items);<br><br>	
- Zero financial risk when making payments through iCAN system, as it is used deposit clearance method at all levels;<br><br>	
- A high level of security and fraud protection;<br><br>	
- Launching new services for sales or bonus campaign quickly and without significant costs.<br><br>	
</p>
</div>	

<div class="benefit">
<h6>For agents (owners of the trade points)</h6>
<img src="images/shop512.png" alt="">­<p>
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

<!-- block marketing -->
<script language="javascript">
var myPosX=0;
var myPosY=0;
function clearDiv() {
		$('div#pop-up').hide();
}
function showDiv(Id) {
var moveLeft = 20;
var moveDown = 10;
	//$("#worldmap").mouseover(function(){ $(this).append("<span id='read'> - read more...</span>"); });
	//$("#worldmap").mouseover(function(){ alert('to lav e!'); });

	$.get( "myload/getCountryInfo.php", { Id: Id}, function( data ) {
		$("div#pop-up" ).html( data );
		$('div#pop-up').show();
		$("div#pop-up").css('top', this.pageY + moveDown).css('left', this.pageX + moveLeft);
	});

}
</script>

<div class="map" id="Markets" name="Markets">

<h3>Markets</h3>
<div id="pop-up" style="display:none"></div> 
<map name="worldmap">
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("LIE")' onclik='showDiv("LIE")'  coords="681,149,683,151"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("LUX")' onclik='showDiv("LUX")'  coords="668,141,668,137,666,137,664,141"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("MCO")' onclik='showDiv("MCO")'  coords="669,164,671,166"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("SMR")' onclik='showDiv("SMR")'  coords="686,161,689,165"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("VAT")' onclik='showDiv("VAT")'  coords="690,172,693,175"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("AFG")' onclik='showDiv("AFG")'  coords="882,203,880,210,885,221,887,222,886,229,902,230,906,226,909,222,914,220,916,220,921,208,923,207,921,200,924,197,931,196,930,194,921,195,921,192,917,190,908,197,899,193,893,199,886,203"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ALB")' onclik='showDiv("ALB")'  coords="718,171,717,174,719,184,723,180,720,171"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("DZA")' onclik='showDiv("DZA")'  coords="635,204,636,216,634,218,628,218,626,221,628,222,619,228,614,228,606,233,606,239,653,274,653,276,663,276,689,257,689,255,681,251,679,244,681,240,679,227,680,226,678,220,671,210,675,202,674,197,653,196"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("AND")' onclik='showDiv("AND")'  coords="646,169,649,172"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("AGO")' onclik='showDiv("AGO")'  coords="691,391,708,390,710,393,710,395,714,400,720,399,722,394,730,397,731,410,733,413,735,413,738,412,739,413,739,420,738,422,732,422,730,425,730,435,734,440,735,442,735,443,729,444,724,444,715,441,709,441,709,442,702,442,696,441,689,441,689,435,697,414,694,406,695,398,691,393"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ARG")' onclik='showDiv("ARG")'  coords="366,467,366,471,363,475,365,483,360,493,361,498,362,501,360,504,365,514,364,519,367,524,365,529,369,548,378,568,380,586,381,589,385,591,387,595,392,597,398,596,397,591,402,582,401,576,394,569,400,564,398,559,402,556,395,548,402,550,405,545,404,540,414,539,421,533,418,524,410,513,414,496,418,490,421,489,424,483,421,477,418,485,414,487,406,486,406,477,390,469,385,463,385,460,381,464,375,464,371,464"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ARG")' onclik='showDiv("ARG")'  coords="403,602,410,611,421,611"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ARM")' onclik='showDiv("ARM")'  coords="808,178,810,183,814,184,816,184,820,187,823,186,817,181,816,179,812,176"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ABW")' onclik='showDiv("ABW")'  coords="349,304,352,307"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("AUS")' onclik='showDiv("AUS")'  coords="1095,517,1097,520,1101,522,1105,522,1115,518,1122,517,1130,516,1150,509,1165,508,1171,512,1176,521,1179,519,1186,514,1187,516,1182,522,1184,522,1186,520,1188,528,1187,534,1198,540,1202,537,1207,541,1218,535,1222,536,1247,512,1258,494,1259,478,1245,452,1240,446,1239,430,1233,422,1229,413,1225,426,1224,432,1215,443,1200,433,1199,428,1205,421,1192,415,1183,420,1178,420,1174,426,1174,430,1173,431,1168,429,1166,426,1158,428,1154,432,1148,437,1149,441,1148,441,1145,440,1143,440,1136,451,1126,454,1103,464,1100,498,1102,506,1100,512"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("AUS")' onclik='showDiv("AUS")'  coords="1195,549,1195,555,1193,560,1197,561,1206,556,1209,551,1208,549"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("AUT")' onclik='showDiv("AUT")'  coords="682,151,684,153,687,151,690,153,695,153,699,151,704,151,708,147,707,143,695,143,690,148,685,149"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("AZE")' onclik='showDiv("AZE")'  coords="821,175,818,177,816,177,818,181,822,185,826,184,829,186,831,189,833,183,835,184,835,182,829,175,825,176"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("AZE")' onclik='showDiv("AZE")'  coords="814,184,817,187,820,187"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("BHS")' onclik='showDiv("BHS")'  coords="322,240,326,243"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("BHS")' onclik='showDiv("BHS")'  coords="328,240,330,245"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("BHS")' onclik='showDiv("BHS")'  coords="320,246,327,253"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("BHS")' onclik='showDiv("BHS")'  coords="330,248,333,251"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("BHS")' onclik='showDiv("BHS")'  coords="334,251,335,254"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("BHS")' onclik='showDiv("BHS")'  coords="334,256,336,258"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("BHS")' onclik='showDiv("BHS")'  coords="335,261,339,265"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("BHS")' onclik='showDiv("BHS")'  coords="341,259,347,262"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("BHR")' onclik='showDiv("BHR")'  coords="844,243,846,246"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BGD")' onclik='showDiv("BGD")'  coords="1006,263,1002,259,1003,255,998,247,1000,244,1009,251,1010,251,1014,249,1015,252,1015,257,1019,262,1021,263,1021,265,1016,267,1012,261"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("BRB")' onclik='showDiv("BRB")'  coords="396,303,399,305"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BLR")' onclik='showDiv("BLR")'  coords="731,133,729,128,730,125,729,123,736,121,743,112,753,114,756,118,758,122,757,128,754,131,749,132,734,129"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BEL")' onclik='showDiv("BEL")'  coords="655,133,658,137,664,140,665,138,668,137,667,133,663,131,658,131"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BLZ")' onclik='showDiv("BLZ")'  coords="275,291,272,291,274,280,279,277,281,277"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BEN")' onclik='showDiv("BEN")'  coords="647,334,646,320,643,312,648,311,651,307,655,313,652,323,652,333"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("BMU")' onclik='showDiv("BMU")'  coords="384,212,387,215"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BTN")' onclik='showDiv("BTN")'  coords="1000,241,1002,235,1006,235,1010,239,1010,242,1005,243"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BOL")' onclik='showDiv("BOL")'  coords="366,466,360,457,358,448,354,443,357,437,354,432,356,419,354,414,358,410,367,407,370,417,374,420,383,422,389,427,393,435,400,437,404,445,403,450,399,451,395,449,389,452,385,460,380,464,373,463"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BIH")' onclik='showDiv("BIH")'  coords="707,168,708,166,704,162,707,158,713,160,716,159,717,164,713,170"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BWA")' onclik='showDiv("BWA")'  coords="722,476,721,468,727,458,727,446,737,446,739,446,743,443,755,460,758,461,758,464,750,471,751,473,746,474,741,480,735,477,732,479,732,482,729,485,725,485,724,484,725,480"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BRA")' onclik='showDiv("BRA")'  coords="434,513,428,508,417,502,413,497,419,490,422,488,425,483,421,473,406,464,402,453,398,450,402,451,404,444,400,437,392,434,387,425,379,421,371,419,365,407,357,411,353,414,348,411,347,406,342,408,336,403,333,396,335,392,337,385,346,382,349,384,351,371,348,363,351,360,349,356,354,354,356,355,360,353,362,358,365,360,372,357,374,353,372,346,373,344,376,346,387,341,390,343,388,349,392,357,396,356,400,354,405,354,407,352,420,354,426,344,431,357,429,362,422,367,422,370,432,363,438,363,437,367,433,370,436,371,443,366,455,371,454,375,458,374,476,376,481,382,495,388,496,396,494,405,480,422,479,442,473,464,467,469,460,467,444,478,446,485,442,495,441,501"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BRN")' onclik='showDiv("BRN")'  coords="1113,341,1117,345,1120,343,1121,338"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BGR")' onclik='showDiv("BGR")'  coords="751,166,746,163,741,165,732,165,728,163,729,170,727,172,731,175,738,176,743,175,746,173,749,173"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BFA")' onclik='showDiv("BFA")'  coords="628,319,624,318,621,319,616,314,621,308,622,304,629,300,634,300,639,295,641,296,640,299,643,303,649,306,649,308,648,311,639,314,627,313"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("BDI")' onclik='showDiv("BDI")'  coords="762,383,760,378,763,376,767,373,767,380"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("KHM")' onclik='showDiv("KHM")'  coords="1070,317,1065,310,1066,307,1063,303,1065,299,1070,297,1073,299,1077,300,1082,298,1084,300,1085,305,1083,310"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CMR")' onclik='showDiv("CMR")'  coords="675,343,677,337,679,333,683,331,686,332,691,330,693,326,694,319,700,308,703,313,703,318,698,320,704,329,701,333,699,337,707,351,706,353,705,354,699,354,681,353"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="198,142,196,137,193,134,191,134,189,129,191,126,189,121,191,116,194,116,198,112,195,108,198,102,193,97,186,98,182,92,228,57,246,59,262,55,269,54,274,57,287,56,301,61,298,63,313,63,316,70,320,64,331,61,339,64,348,63,353,67,361,62,366,60,363,54,375,48,377,52,376,57,383,59,381,65,386,64,393,57,404,58,397,68,393,70,380,70,375,74,369,71,368,72,373,76,361,81,355,79,354,84,340,90,331,96,335,107,345,110,359,117,356,125,359,131,365,128,369,117,381,111,385,106,383,98,389,96,397,85,414,88,417,94,416,99,420,102,434,94,436,105,434,109,439,117,435,121,436,122,443,119,449,122,447,127,433,135,422,137,408,137,390,145,391,148,400,142,410,141,408,146,404,149,406,154,410,156,420,155,414,160,399,166,395,164,404,158,394,160,393,155,395,151,391,150,386,151,380,157,376,159,365,159,356,164,349,164,341,170,338,169,331,172,331,170,336,166,339,161,343,162,345,161,344,157,340,154,336,156,332,152,332,149,329,144,325,143,316,146,310,146,300,145,299,141"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="184,135,188,134,193,138,196,144,190,144,185,140"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="286,48,291,52,307,46,311,44,323,43,307,37,300,40"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="304,48,308,50,302,52,304,53,313,53,313,55,300,55,306,59,308,61,319,62,329,58,336,60,343,60,348,55,343,51,347,43,342,43,337,48,336,47,335,42,330,46,321,43,315,44,309,44"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="351,58,354,63,363,58,356,55"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="355,45,359,48,359,51,365,50,372,47,374,39,364,42,362,45"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="375,45,378,48,381,45,388,45,392,41,388,39,379,41"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="396,38,405,39,423,41,431,36,427,34,415,33,410,34,402,30,396,33"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="406,21,409,24,417,24,426,18,420,15,413,16"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="412,29,417,31,421,32,425,31,434,35,446,28,449,29,459,22,467,22,479,19,495,10,490,10,479,12,460,13,433,16,443,18,451,18,453,17,451,20,438,20,431,18,432,23,430,24,424,24,427,27,423,28"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="406,41,397,42,389,50,388,52,394,55,398,54,410,56,416,53,421,56,427,64,433,68,427,70,424,68,416,73,402,73,401,76,405,78,405,78,411,77,415,77,423,85,428,87,435,86,429,81,431,80,438,83,441,78,438,72,441,70,449,75,455,69,452,65,446,61,446,55,435,51,432,46,425,47,416,41"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="373,81,383,80,389,82,390,78,382,73,379,73"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAN")' onclik='showDiv("CAN")'  coords="427,148,436,149,437,153,440,149,445,148,452,147,449,140,443,139,442,137,445,133,442,132,437,137,431,142,431,144"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("CPV")' onclik='showDiv("CPV")'  coords="537,285,542,287"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("CPV")' onclik='showDiv("CPV")'  coords="543,288,545,290"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("CPV")' onclik='showDiv("CPV")'  coords="548,288,550,290"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("CPV")' onclik='showDiv("CPV")'  coords="544,293,546,295"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("CPV")' onclik='showDiv("CPV")'  coords="547,292,550,295"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("CYM")' onclik='showDiv("CYM")'  coords="303,273,306,275"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CAF")' onclik='showDiv("CAF")'  coords="707,352,699,338,703,330,709,329,714,329,719,323,733,313,737,316,739,324,744,327,747,332,753,337,751,340,747,341,743,340,734,344,728,344,722,340,717,343,718,347,708,347"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("TCD")' onclik='showDiv("TCD")'  coords="703,329,697,320,703,318,703,312,695,301,696,296,704,285,705,269,701,260,703,258,713,260,738,275,738,292,735,292,731,302,735,312,733,313,713,328"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CHL")' onclik='showDiv("CHL")'  coords="351,447,354,443,358,449,361,459,366,466,365,472,363,476,365,484,360,493,361,505,365,515,364,519,367,524,364,529,367,536,368,548,378,567,380,582,380,588,385,591,387,595,390,597,396,597,399,596,400,597,395,602,389,600,387,602,384,597,379,594,376,587,371,577,366,573,366,571,369,570,371,565,367,559,368,555,360,547,359,541,360,539,357,536,358,512,354,493,354,482,355,477,353,473,354,464,355,462,353,450"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CHL")' onclik='showDiv("CHL")'  coords="409,612,404,610,400,610,397,606,398,601,402,599,403,603"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CHN")' onclik='showDiv("CHN")'  coords="1088,270,1087,266,1081,266,1076,264,1070,258,1060,262,1056,261,1056,267,1048,266,1042,256,1038,255,1037,251,1040,244,1037,238,1022,231,1016,233,1013,238,1010,238,1004,235,1001,235,1000,238,998,236,994,237,988,232,982,232,974,230,971,226,964,226,955,220,953,216,955,214,956,207,953,203,945,202,931,195,932,193,931,188,926,184,931,181,934,182,943,177,947,172,949,168,944,161,948,158,950,156,953,151,957,153,959,151,959,146,959,145,962,142,968,146,975,148,981,155,985,160,991,161,996,161,1004,166,1009,171,1015,172,1022,170,1042,176,1047,172,1053,172,1059,172,1064,167,1062,161,1064,159,1068,161,1076,156,1080,152,1086,152,1083,149,1075,147,1071,147,1068,145,1067,141,1076,138,1076,135,1075,135,1074,132,1075,130,1071,125,1080,122,1087,124,1092,125,1099,132,1100,134,1107,140,1113,142,1118,143,1127,149,1131,149,1133,147,1136,146,1139,147,1138,150,1141,154,1139,158,1136,160,1134,161,1138,166,1138,170,1134,170,1132,173,1128,176,1127,175,1121,182,1114,186,1112,186,1110,180,1108,178,1102,184,1097,187,1107,195,1110,193,1119,194,1112,201,1111,205,1122,219,1126,223,1124,226,1130,228,1128,235,1123,252,1118,258,1104,265,1100,263,1091,271"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CHN")' onclik='showDiv("CHN")'  coords="1089,274,1085,277,1089,281,1092,279,1094,272"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("COL")' onclik='showDiv("COL")'  coords="310,356,317,348,318,338,315,330,320,327,322,323,324,322,329,314,334,312,337,312,342,307,346,307,344,309,341,310,336,318,340,329,344,331,353,335,357,335,357,342,359,347,357,350,360,352,356,355,353,354,349,356,351,361,348,363,351,371,349,383,345,380,347,376,342,373,337,374,331,369,329,364,324,362,319,362"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("COM")' onclik='showDiv("COM")'  coords="816,417,818,420"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("COM")' onclik='showDiv("COM")'  coords="818,420,824,423"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("COM")' onclik='showDiv("COM")'  coords="826,425,827,428"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("COG")' onclik='showDiv("COG")'  coords="686,380,689,377,688,375,694,372,697,374,700,369,697,361,699,360,696,356,694,356,694,354,704,354,707,352,708,347,718,347,714,357,715,362,710,370,705,381,698,385,695,384,690,387"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("COD")' onclik='showDiv("COD")'  coords="691,390,708,390,711,397,715,400,720,399,722,394,730,396,730,406,733,413,738,412,740,414,747,415,751,417,754,416,756,421,761,423,764,421,764,419,759,417,757,409,759,406,758,403,765,400,768,400,762,389,762,384,760,378,763,376,760,374,762,369,765,369,763,362,767,356,769,352,768,346,762,342,757,345,752,339,749,341,742,341,733,344,729,344,722,340,717,343,718,346,717,350,714,357,715,362,709,372,706,381,701,385,698,385,695,384,692,386,690,387"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CRI")' onclik='showDiv("CRI")'  coords="295,325,297,317,293,314,284,312,283,316"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("HRV")' onclik='showDiv("HRV")'  coords="707,168,708,166,703,161,706,158,711,160,713,160,716,159,714,155,713,156,709,156,704,153,699,159,694,159,694,162,700,163"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CUB")' onclik='showDiv("CUB")'  coords="297,265,294,262,302,258,314,258,325,264,338,271,333,273,329,273,328,272,319,272,321,269,311,263,307,262,303,261"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CYP")' onclik='showDiv("CYP")'  coords="768,204,771,207,777,204,778,201,775,201,773,202"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CZE")' onclik='showDiv("CZE")'  coords="689,136,698,133,702,136,707,137,709,137,712,140,709,144,699,141,698,143,695,143,689,139"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("DNK")' onclik='showDiv("DNK")'  coords="677,118,682,117,681,115,681,111,682,110,682,106,677,108,675,112,676,114"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("DNK")' onclik='showDiv("DNK")'  coords="682,110,685,114"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("DJI")' onclik='showDiv("DJI")'  coords="812,310,815,307,819,308,820,311,816,314,814,313"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("DMA")' onclik='showDiv("DMA")'  coords="389,292,391,294"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("DOM")' onclik='showDiv("DOM")'  coords="348,274,348,281,359,279,351,273"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("KOR")' onclik='showDiv("KOR")'  coords="1132,193,1139,189,1146,194,1151,202,1149,205,1141,208,1136,197"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PRK")' onclik='showDiv("PRK")'  coords="1132,193,1135,190,1139,190,1133,185,1139,181,1140,178,1138,176,1139,171,1134,170,1133,173,1128,176,1126,175,1125,177,1120,183,1126,187,1125,191"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ECU")' onclik='showDiv("ECU")'  coords="303,382,312,386,314,377,325,373,326,364,324,362,320,362,310,356,302,370,303,373,307,376"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ECU")' onclik='showDiv("ECU")'  coords="263,357,269,362"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("EGY")' onclik='showDiv("EGY")'  coords="742,263,777,263,778,265,786,258,771,230,772,229,779,237,779,237,780,231,777,223,765,220,759,222,741,218"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SLV")' onclik='showDiv("SLV")'  coords="268,301,272,297,275,298,277,298,278,300,275,303,271,303"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GNQ")' onclik='showDiv("GNQ")'  coords="681,353,687,353,687,358,680,358"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ERI")' onclik='showDiv("ERI")'  coords="798,282,792,287,790,294,792,298,796,297,806,298,813,304,814,306,815,307,819,307,811,299,802,291"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("EST")' onclik='showDiv("EST")'  coords="731,104,736,104,738,106,741,104,740,98,729,97,726,99"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("EST")' onclik='showDiv("EST")'  coords="725,102,723,99,721,103"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ETH")' onclik='showDiv("ETH")'  coords="815,307,809,300,803,298,794,297,790,300,790,303,784,312,782,318,782,322,776,326,777,329,783,331,785,336,788,338,788,340,801,347,810,344,815,346,818,343,823,342,829,340,830,338,838,329,835,326,825,324,820,321,818,318,816,313,814,313,812,310"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("FLK")' onclik='showDiv("FLK")'  coords="424,596,426,593,437,593,433,599,430,599"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("FRO")' onclik='showDiv("FRO")'  coords="629,85,632,89"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("FJI")' onclik='showDiv("FJI")'  coords="1367,443,1369,447,1375,444,1370,440"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("FJI")' onclik='showDiv("FJI")'  coords="1373,439,1373,440,1377,442,1381,438"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("FIN")' onclik='showDiv("FIN")'  coords="724,71,722,63,719,60,727,60,733,55,739,58,738,61,742,65,740,69,743,73,744,78,746,83,750,84,744,91,740,93,727,95,719,92,719,86,726,74"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("FIN")' onclik='showDiv("FIN")'  coords="717,97,717,93,712,93,713,96"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("FRA")' onclik='showDiv("FRA")'  coords="638,166,640,168,645,170,648,168,649,170,654,171,659,167,666,168,673,165,669,160,670,156,666,153,671,148,673,143,669,141,665,141,662,138,658,137,655,133,652,133,643,141,642,140,635,144,630,143,628,145,629,147,637,150,639,156,639,161"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GAB")' onclik='showDiv("GAB")'  coords="680,358,677,368,679,373,686,380,688,378,688,375,693,372,697,373,701,370,698,362,699,360,697,357,694,355,694,354,688,354,688,358"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GMB")' onclik='showDiv("GMB")'  coords="571,303,575,303,578,302,580,303,582,303,580,301,578,300,575,300"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GEO")' onclik='showDiv("GEO")'  coords="792,166,798,165,802,168,806,167,811,170,815,171,822,174,818,177,815,178,812,176,808,177,801,174,799,170"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("DEU")' onclik='showDiv("DEU")'  coords="671,123,668,132,669,140,673,143,671,147,673,149,678,148,681,150,683,149,691,147,695,143,692,141,689,137,700,132,697,121,693,117,686,120,682,117,677,119,676,122"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GHA")' onclik='showDiv("GHA")'  coords="629,342,626,332,628,322,627,315,628,313,639,313,641,320,641,330,645,335,632,341"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GRC")' onclik='showDiv("GRC")'  coords="731,198,734,192,732,186,729,183,733,181,735,182,736,179,741,178,743,180,744,176,742,175,740,176,732,176,724,178,723,180,720,184,720,185,724,188,729,189,728,190,724,191,728,197"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GRC")' onclik='showDiv("GRC")'  coords="733,202,743,202,746,204,745,206,739,206"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("GRC")' onclik='showDiv("GRC")'  coords="749,199,752,201"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GRL")' onclik='showDiv("GRL")'  coords="463,25,483,22,498,15,511,13,528,16,566,11,575,11,584,9,598,12,605,15,611,15,621,15,617,19,606,20,599,27,601,29,595,36,595,38,585,43,578,44,577,44,587,52,583,54,575,49,573,50,574,52,570,53,571,55,579,55,581,58,561,62,554,61,541,70,529,72,524,72,518,78,507,92,500,94,492,91,486,83,486,77,487,75,485,71,488,65,498,57,498,50,494,48,493,46,494,44,487,33,475,32,468,33,463,31"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("GRD")' onclik='showDiv("GRD")'  coords="384,307,386,310"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GLP")' onclik='showDiv("GLP")'  coords="412,353,420,353,425,344,419,337,414,337,412,342,414,346"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GUY")' onclik='showDiv("GUY")'  coords="412,353,420,353,425,344,419,337,414,337,412,342,414,346"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GUY")' onclik='showDiv("GUY")'  coords="392,326,388,327,387,332,385,333,385,337,390,343,388,352,393,358,400,354,402,354,400,346,398,344,403,336,397,333"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GTM")' onclik='showDiv("GTM")'  coords="260,297,262,290,266,290,267,287,266,284,269,282,274,281,272,292,276,291,268,301"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("GGY")' onclik='showDiv("GGY")'  coords="633,139,635,141"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("JEY")' onclik='showDiv("JEY")'  coords="636,140,637,142"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GIN")' onclik='showDiv("GIN")'  coords="579,312,584,307,589,307,590,308,592,306,596,310,602,307,605,313,607,325,605,329,601,330,600,326,596,324,595,319,591,317,587,318,585,322"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GNB")' onclik='showDiv("GNB")'  coords="579,312,584,308,584,305,579,305,572,308"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("HTI")' onclik='showDiv("HTI")'  coords="347,273,347,282,343,280,340,281,336,281,332,278,341,277,340,273"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("HND")' onclik='showDiv("HND")'  coords="279,304,282,302,282,300,293,296,296,296,295,292,288,289,276,291,272,297,277,298"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("HUN")' onclik='showDiv("HUN")'  coords="727,146,724,154,714,156,709,156,704,153,704,151,708,148,715,147,720,144,722,144"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ISL")' onclik='showDiv("ISL")'  coords="577,79,579,74,590,71,593,72,601,69,607,74,600,79,587,83,581,78"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IND")' onclik='showDiv("IND")'  coords="936,263,934,265,935,267,934,268,929,269,925,267,922,263,926,262,926,259,922,260,919,256,922,253,925,254,927,252,929,250,921,242,924,237,931,235,940,223,939,220,941,216,935,214,932,208,937,206,937,207,940,207,947,202,953,204,955,208,955,214,953,218,956,223,963,225,962,228,962,233,985,242,994,244,997,241,996,237,998,236,1000,239,1002,242,1006,243,1010,242,1011,238,1014,238,1016,233,1021,231,1029,233,1030,235,1033,236,1031,239,1025,243,1024,250,1020,260,1020,262,1015,257,1016,251,1013,249,1010,250,1006,250,1000,244,998,247,1002,253,1003,256,1002,259,1005,263,997,265,995,268,996,271,990,274,987,280,984,281,980,286,971,294,972,302,970,309,970,315,963,326,956,325,956,320,939,282,937,274,938,269"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IDN")' onclik='showDiv("IDN")'  coords="1036,339,1042,348,1049,356,1057,367,1062,378,1071,388,1077,390,1081,385,1080,376,1077,375,1073,367,1070,366,1069,360,1053,350,1052,345,1042,339"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IDN")' onclik='showDiv("IDN")'  coords="1078,395,1088,399,1090,399,1099,401,1118,403,1120,401,1112,397,1109,397,1109,397,1105,393,1095,395,1087,390,1082,391"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IDN")' onclik='showDiv("IDN")'  coords="1123,403,1127,405,1134,403,1132,401,1125,400"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IDN")' onclik='showDiv("IDN")'  coords="1134,407,1140,411,1140,408,1137,406"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IDN")' onclik='showDiv("IDN")'  coords="1138,401,1142,406,1149,404,1147,401"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IDN")' onclik='showDiv("IDN")'  coords="1157,402,1159,407,1156,410,1151,410"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IDN")' onclik='showDiv("IDN")'  coords="1095,356,1093,360,1098,376,1103,379,1115,379,1120,381,1124,378,1129,364,1129,362,1134,358,1129,348,1130,344,1126,343,1122,345,1119,353,1114,358,1112,356,1102,360,1099,360"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IDN")' onclik='showDiv("IDN")'  coords="1138,390,1141,387,1139,380,1142,377,1146,384,1150,385,1150,379,1147,374,1154,368,1150,367,1143,368,1141,365,1145,361,1152,363,1155,364,1161,360,1161,356,1153,359,1146,358,1142,357,1138,363,1137,372,1133,377,1136,382,1135,385,1135,388"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IDN")' onclik='showDiv("IDN")'  coords="1177,353,1174,356,1176,361,1173,366,1168,361,1170,361,1171,354"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IDN")' onclik='showDiv("IDN")'  coords="1172,377,1172,378,1178,381,1183,377,1178,376"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IDN")' onclik='showDiv("IDN")'  coords="1185,370,1194,374,1191,376,1192,381,1199,382,1214,389,1217,395,1212,399,1216,401,1220,400,1226,405,1226,375,1214,369,1204,376,1203,379,1199,374,1196,367,1192,366"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IRN")' onclik='showDiv("IRN")'  coords="811,186,814,190,816,194,822,202,821,208,825,215,831,218,834,225,836,227,840,227,844,230,848,237,859,243,864,243,869,241,875,248,887,250,891,249,890,245,894,241,893,237,886,230,886,226,888,222,885,220,880,209,883,202,880,197,862,190,852,194,846,198,832,192,831,188,826,184,821,188,816,186"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("IRQ")' onclik='showDiv("IRQ")'  coords="815,196,806,194,806,197,804,199,803,208,797,210,796,212,797,216,800,218,810,223,817,229,822,231,826,231,830,227,835,228,836,227,830,217,825,215,821,208,822,202"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("IRL")' onclik='showDiv("IRL")'  coords="611,116,626,132"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("IMN")' onclik='showDiv("IMN")'  coords="630,118,632,121"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ISR")' onclik='showDiv("ISR")'  coords="777,222,781,232,783,230,783,227,780,225,782,220,784,218,782,215,783,213,782,213,781,213"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ITA")' onclik='showDiv("ITA")'  coords="674,180,678,177,680,178,680,186,677,187"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ITA")' onclik='showDiv("ITA")'  coords="691,192,698,189,702,191,701,197" href="Italy.html"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ITA")' onclik='showDiv("ITA")'  coords="704,191,708,187,708,185,706,182,712,182,714,180,701,174,696,169,696,167,690,163,689,160,692,157,693,154,689,153,687,151,678,155,673,155,671,157,669,160,673,165,678,162,681,165,684,171,693,177,699,179,704,185"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CIV")' onclik='showDiv("CIV")'  coords="629,340,626,332,629,320,624,318,621,319,617,315,611,316,607,315,606,318,608,325,604,329,605,333,608,338,608,343,623,340"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("JAM")' onclik='showDiv("JAM")'  coords="317,279,317,280,320,282,327,282,322,278"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("JPN")' onclik='showDiv("JPN")'  coords="1155,213,1157,210,1163,213,1164,218,1162,223,1160,218"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("JPN")' onclik='showDiv("JPN")'  coords="1165,211,1167,215,1169,215,1171,212,1171,209"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("JPN")' onclik='showDiv("JPN")'  coords="1157,207,1161,209,1172,207,1178,213,1179,206,1186,206,1190,204,1193,200,1189,192,1190,186,1187,180,1181,176,1179,179,1179,181,1183,190,1179,194,1168,202,1166,200"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("JPN")' onclik='showDiv("JPN")'  coords="1177,175,1172,170,1175,165,1172,158,1179,163,1191,167,1191,168,1187,170,1187,173,1179,171,1177,172"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("JOR")' onclik='showDiv("JOR")'  coords="784,230,786,232,791,228,794,219,799,218,795,213,786,218,785,216,783,216,785,219,783,226"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("KAZ")' onclik='showDiv("KAZ")'  coords="827,154,815,144,815,140,818,137,820,139,822,138,821,135,829,130,843,134,845,135,852,133,860,136,865,133,860,130,863,125,862,122,866,120,870,120,886,115,890,115,895,119,899,119,900,120,907,122,913,119,920,126,929,130,931,134,945,135,956,140,960,139,962,141,958,145,959,149,958,151,956,152,953,151,950,154,950,156,944,160,944,163,948,168,947,173,940,169,937,169,933,171,927,168,921,171,913,170,911,174,904,179,896,175,889,166,880,166,864,159,856,159,852,162,857,175,855,174,853,174,847,170,844,172,836,168,833,164,837,159,842,159,845,158,840,153,837,151,832,152"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("KEN")' onclik='showDiv("KEN")'  coords="802,385,797,378,797,375,788,373,783,369,777,367,780,366,785,355,781,345,782,342,787,342,790,340,800,347,810,344,814,347,811,352,809,360,813,370"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("KWT")' onclik='showDiv("KWT")'  coords="835,233,831,233,827,230,830,227,835,228"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("KGZ")' onclik='showDiv("KGZ")'  coords="912,180,911,183,912,185,917,185,919,185,923,186,931,180,934,182,943,176,947,173,940,169,933,170,927,168,920,171,913,170,910,175,914,176,921,177,921,179,916,182"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("LVA")' onclik='showDiv("LVA")'  coords="740,115,744,111,741,105,735,104,731,104,728,106,723,104,720,105,719,112,723,110,728,111,732,110"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("LAO")' onclik='showDiv("LAO")'  coords="1052,266,1054,266,1056,268,1057,266,1055,262,1057,261,1059,263,1061,267,1065,270,1066,275,1071,278,1082,292,1083,297,1082,298,1078,300,1074,299,1074,295,1075,292,1071,287,1070,284,1066,280,1061,282,1060,281,1056,285,1054,281,1056,276,1053,275,1050,270"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("LBN")' onclik='showDiv("LBN")'  coords="781,212,784,214,786,208,785,206,783,205"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("LSO")' onclik='showDiv("LSO")'  coords="749,497,754,493,758,495,757,500,753,502"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("LBR")' onclik='showDiv("LBR")'  coords="608,342,609,338,604,333,606,330,604,329,601,330,600,327,595,325,595,327,591,332,601,341"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("LBY")' onclik='showDiv("LBY")'  coords="688,213,685,219,683,218,682,223,679,228,682,240,679,244,682,251,689,255,690,257,701,260,705,258,715,261,737,274,739,272,741,272,741,219,726,212,721,217,721,222,718,225,705,222,702,215"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("LTU")' onclik='showDiv("LTU")'  coords="729,123,733,121,736,121,740,115,731,110,728,111,723,110,720,112,721,115,724,116,725,119"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MKD")' onclik='showDiv("MKD")'  coords="723,180,721,177,721,172,727,171,731,175,730,176"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MDG")' onclik='showDiv("MDG")'  coords="832,477,836,469,838,458,847,431,847,426,843,418,840,426,831,434,824,437,822,441,821,448,822,453,817,463,816,469,818,476,823,479"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MWI")' onclik='showDiv("MWI")'  coords="785,438,789,434,787,427,782,422,784,410,780,406,778,406,776,410,778,415,776,425,776,427,780,429,782,432,781,436"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MYS")' onclik='showDiv("MYS")'  coords="1056,336,1058,334,1061,337,1066,337,1069,341,1074,356,1070,357,1061,351,1057,342"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MYS")' onclik='showDiv("MYS")'  coords="1095,356,1099,360,1105,359,1111,356,1114,357,1119,353,1123,344,1127,344,1131,345,1134,340,1126,332,1121,339,1118,345,1114,342,1110,347,1102,351,1101,356"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MDV")' onclik='showDiv("MDV")'  coords="936,313,943,308,946,314,945,319,939,317"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MDV")' onclik='showDiv("MDV")'  coords="938,343,940,345,943,345,943,336,939,340"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MLI")' onclik='showDiv("MLI")'  coords="592,306,594,305,589,298,592,293,616,293,615,250,621,250,653,274,653,277,657,277,657,289,656,293,645,294,639,295,635,299,625,301,621,307,616,313,616,315,612,316,606,315,602,307,595,309"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("MLT")' onclik='showDiv("MLT")'  coords="696,200,700,202"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MRT")' onclik='showDiv("MRT")'  coords="573,288,580,287,585,291,589,297,591,293,615,293,615,250,621,250,606,239,606,245,592,245,592,257,588,260,588,266,571,266,575,278"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("MUS")' onclik='showDiv("MUS")'  coords="867,457,870,460"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("MUS")' onclik='showDiv("MUS")'  coords="874,454,877,456"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MEX")' onclik='showDiv("MEX")'  coords="194,258,186,249,187,245,180,238,182,232,176,223,179,215,188,215,197,221,210,221,213,219,219,220,222,224,225,230,227,231,232,228,236,229,239,233,240,240,244,245,247,245,243,259,245,273,253,279,266,277,271,268,279,265,286,267,281,277,274,280,272,281,267,283,266,284,267,288,266,290,262,290,260,297,252,289,242,293,215,280,208,272,210,262,198,246,191,229,190,222,186,220,183,224,191,240"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MDA")' onclik='showDiv("MDA")'  coords="750,159,755,153,751,147,745,145,742,146,747,150"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MNG")' onclik='showDiv("MNG")'  coords="964,142,969,139,976,135,981,134,992,138,998,138,1001,136,997,132,1001,129,1010,132,1020,137,1028,136,1045,141,1051,141,1058,138,1063,139,1068,140,1068,145,1072,148,1078,147,1084,150,1086,153,1083,153,1080,152,1076,157,1067,161,1064,159,1061,161,1063,166,1063,168,1058,171,1047,172,1042,175,1038,175,1018,170,1010,172,1002,164,992,160,988,161,982,159,976,149,969,147"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MAR")' onclik='showDiv("MAR")'  coords="572,267,587,266,588,259,592,258,592,245,606,245,606,238,588,238,581,248,573,261"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MAR")' onclik='showDiv("MAR")'  coords="588,238,606,238,606,233,615,228,618,228,627,222,626,220,632,217,634,219,637,215,635,213,635,204,625,204,620,200,617,202,615,207,606,213,603,222,601,227"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MOZ")' onclik='showDiv("MOZ")'  coords="770,485,773,482,775,478,783,474,785,471,786,464,782,456,791,447,792,443,803,438,810,428,807,410,806,412,794,416,783,415,782,421,787,427,789,433,785,438,781,436,782,431,778,428,775,426,766,431,763,434,772,438,776,441,777,445,771,463,768,464,769,466,768,469,770,476"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("MMR")' onclik='showDiv("MMR")'  coords="1047,318,1050,313,1050,304,1046,294,1046,288,1041,281,1041,277,1050,270,1051,266,1047,266,1043,257,1039,255,1037,250,1041,243,1037,238,1033,236,1030,240,1025,242,1023,253,1020,258,1021,264,1017,266,1017,269,1018,271,1024,274,1028,286,1029,290,1033,293,1039,287,1042,288,1042,295,1047,305"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("NAM")' onclik='showDiv("NAM")'  coords="707,493,709,491,715,494,721,492,721,467,726,458,726,446,730,446,737,445,739,446,741,445,744,442,735,442,728,444,725,444,714,441,709,441,706,442,699,441,694,440,689,442,690,447,698,461,702,488"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("NPL")' onclik='showDiv("NPL")'  coords="962,228,962,232,976,239,994,244,997,242,995,238,988,232,984,234,974,229,970,226"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("NLD")' onclik='showDiv("NLD")'  coords="658,130,666,133,671,126,672,121,668,122"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("NZL")' onclik='showDiv("NZL")'  coords="1263,572,1267,574,1274,574,1281,570,1289,563,1294,563,1298,558,1306,554,1306,550,1303,546,1287,558,1265,567"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("NZL")' onclik='showDiv("NZL")'  coords="1310,550,1312,553,1332,539,1333,534,1330,535,1326,531,1325,523,1321,520,1321,527,1321,535,1312,540,1314,545"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("NZL")' onclik='showDiv("NZL")'  coords="1261,574,1265,577"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("NIC")' onclik='showDiv("NIC")'  coords="279,305,284,300,292,296,295,297,294,314,284,312"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("NER")' onclik='showDiv("NER")'  coords="639,294,655,293,657,289,657,276,663,276,689,257,701,260,705,272,705,279,703,288,696,296,695,301,690,305,685,302,679,305,668,302,663,299,657,303,654,309,647,305,641,302,641,297"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("NGA")' onclik='showDiv("NGA")'  coords="652,334,651,323,656,312,653,309,658,301,663,299,670,303,675,303,679,305,685,302,690,304,696,302,700,308,693,320,693,326,690,330,685,332,682,331,677,335,675,342,664,343,662,337"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("NOR")' onclik='showDiv("NOR")'  coords="684,99,689,96,690,91,688,82,691,78,693,78,696,70,701,69,706,62,716,59,720,60,727,60,732,55,739,57,741,56,746,55,734,51,718,53,699,60,687,74,667,87,665,91,667,99,674,103"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("OMN")' onclik='showDiv("OMN")'  coords="859,288,854,277,865,273,868,265,867,262,863,261,866,258,870,252,885,262,878,271,871,282,866,285"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PAK")' onclik='showDiv("PAK")'  coords="891,249,890,245,895,241,893,237,887,231,889,229,897,230,903,229,907,225,909,221,914,219,916,221,920,209,924,207,921,200,926,197,933,195,945,203,941,207,934,206,931,208,935,215,941,217,938,221,939,223,930,235,924,237,921,242,925,248,929,250,927,254,921,253,918,257,914,254,907,248,900,250"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PSE")' onclik='showDiv("PSE")'  coords="783,228,781,225,781,221,784,219"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PAN")' onclik='showDiv("PAN")'  coords="296,325,297,319,303,322,313,319,321,324,319,328,314,330,316,325,312,323,306,325,307,329,303,329"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PNG")' onclik='showDiv("PNG")'  coords="1226,404,1226,374,1241,382,1252,389,1253,393,1252,397,1268,414,1265,414,1251,409,1247,403,1241,399,1236,402,1232,406"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PNG")' onclik='showDiv("PNG")'  coords="1258,392,1264,395,1273,388,1273,382,1265,388,1258,389"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PRY")' onclik='showDiv("PRY")'  coords="385,462,388,453,396,449,402,452,406,465,420,472,421,475,420,482,416,487,410,487,405,486,407,478,405,475,394,471,388,467"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PER")' onclik='showDiv("PER")'  coords="301,384,303,381,311,386,315,377,324,372,327,363,330,366,334,372,338,374,343,373,347,376,345,380,346,382,337,385,333,397,337,404,343,409,347,407,348,411,353,414,356,420,354,429,355,434,357,437,354,443,350,447,344,440,328,432,315,412,302,389"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PHL")' onclik='showDiv("PHL")'  coords="1126,325,1131,324,1136,317,1136,311"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PHL")' onclik='showDiv("PHL")'  coords="1147,330,1153,330,1155,335,1159,338,1164,336,1161,334,1162,333,1165,334,1166,329,1161,318,1159,323,1155,325,1149,325"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PHL")' onclik='showDiv("PHL")'  coords="1147,319,1150,323,1152,319,1149,316"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("PHL")' onclik='showDiv("PHL")'  coords="1154,313,1157,319"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PHL")' onclik='showDiv("PHL")'  coords="1154,308,1158,313,1163,314,1159,308"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("PHL")' onclik='showDiv("PHL")'  coords="1149,307,1152,309"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PHL")' onclik='showDiv("PHL")'  coords="1146,316,1149,311,1145,309,1143,312"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PHL")' onclik='showDiv("PHL")'  coords="1138,303,1139,307,1143,309,1143,306"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PHL")' onclik='showDiv("PHL")'  coords="1133,288,1133,293,1137,298,1142,303,1150,304,1153,305,1154,301,1150,298,1146,299,1141,294,1145,287,1141,280,1136,279"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("POL")' onclik='showDiv("POL")'  coords="726,141,729,138,732,135,729,128,730,125,727,120,720,120,708,117,697,121,697,128,700,132,698,133,702,136,710,137,712,140,716,139"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PRT")' onclik='showDiv("PRT")'  coords="613,195,616,188,615,183,619,174,615,174,609,171,607,184,608,195"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("PRI")' onclik='showDiv("PRI")'  coords="362,281,365,278,371,279,370,282"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("QAT")' onclik='showDiv("QAT")'  coords="847,250,849,253,852,249,848,244"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ROU")' onclik='showDiv("ROU")'  coords="750,166,753,160,751,160,748,154,747,150,743,146,735,149,731,147,727,149,723,154,720,155,728,163,734,165,746,164"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("RUS")' onclik='showDiv("RUS")'  coords="830,174,824,176,806,167,803,168,797,165,792,166,783,161,786,150,792,144,788,139,770,134,769,131,764,127,758,128,758,123,754,114,744,112,740,101,743,95,741,92,745,90,749,84,748,83,743,75,743,72,741,68,742,66,738,62,738,58,746,55,751,59,758,58,779,65,775,69,768,71,757,68,752,68,757,71,764,78,768,78,765,74,769,74,773,75,777,71,786,68,785,62,792,61,792,61,794,65,806,61,814,59,818,61,831,59,826,56,828,53,858,62,860,60,851,55,849,50,855,45,862,46,875,62,872,68,873,69,879,62,870,55,869,48,874,48,892,39,898,39,898,35,924,32,936,27,970,33,969,37,962,43,976,40,1021,43,1039,51,1064,44,1089,47,1096,51,1126,52,1135,56,1177,55,1218,63,1227,68,1233,66,1245,75,1239,78,1218,72,1221,76,1213,76,1232,84,1228,87,1222,87,1213,96,1207,93,1196,98,1206,107,1210,117,1211,132,1205,134,1180,108,1186,91,1182,86,1180,86,1180,91,1177,93,1166,88,1163,100,1157,101,1127,100,1120,116,1129,120,1136,117,1148,127,1156,140,1155,163,1149,170,1139,172,1138,167,1135,161,1141,156,1139,149,1139,146,1134,146,1129,149,1124,148,1116,142,1112,142,1102,136,1091,125,1081,122,1071,125,1075,130,1074,136,1075,138,1068,141,1057,138,1050,141,1043,141,1028,136,1021,137,1010,132,1001,129,997,133,1000,136,997,138,989,138,980,134,972,137,965,142,958,139,955,140,944,134,939,135,935,133,932,134,929,129,919,126,919,124,913,120,907,123,902,120,895,119,890,115,864,121,862,123,863,126,860,129,866,133,860,136,851,133,845,135,830,130,822,134,821,138,819,139,817,137,815,140,816,145,822,149,824,152,827,154,820,160,823,164"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("RUS")' onclik='showDiv("RUS")'  coords="714,119,724,120,725,116,718,115"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("RUS")' onclik='showDiv("RUS")'  coords="822,55,816,55,806,51,819,34,845,33,846,37,825,41,818,49"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("RUS")' onclik='showDiv("RUS")'  coords="890,23,898,18,908,21,904,25"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("RUS")' onclik='showDiv("RUS")'  coords="906,26,914,26,917,23,908,22"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("RUS")' onclik='showDiv("RUS")'  coords="919,30,924,28,935,28,923,23"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("RUS")' onclik='showDiv("RUS")'  coords="1061,40,1071,39,1072,34,1061,33,1058,37"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("RUS")' onclik='showDiv("RUS")'  coords="1071,35,1076,39"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("RUS")' onclik='showDiv("RUS")'  coords="1079,36,1087,39"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("RUS")' onclik='showDiv("RUS")'  coords="1147,123,1150,123,1156,130,1170,141,1167,143,1175,155,1170,156,1163,146,1161,140,1161,140"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("RWA")' onclik='showDiv("RWA")'  coords="762,376,768,374,768,369,762,369,760,373"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SAU")' onclik='showDiv("SAU")'  coords="816,287,821,284,835,287,837,283,849,278,856,277,865,274,869,266,864,261,857,260,849,254,846,250,843,249,840,240,834,233,829,232,826,231,821,231,805,219,797,218,794,219,791,226,791,228,785,231,783,230,781,232,786,243,799,260,802,271"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SEN")' onclik='showDiv("SEN")'  coords="573,307,581,305,590,307,594,305,584,290,578,287,574,288,569,294,572,300,579,300,582,302,581,303,577,302,575,303,570,304"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SRB")' onclik='showDiv("SRB")'  coords="714,170,717,164,715,157,716,155,719,156,727,162,730,163,729,165,729,169,728,172,725,171,721,172,718,171,716,174"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("SYC")' onclik='showDiv("SYC")'  coords="870,386,875,389"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("SYC")' onclik='showDiv("SYC")'  coords="872,405,875,408"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SLE")' onclik='showDiv("SLE")'  coords="585,323,588,318,593,318,596,322,595,327,592,333,585,326"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SVK")' onclik='showDiv("SVK")'  coords="727,145,727,142,716,139,712,140,710,143,707,143,708,147,714,147,721,144"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SVN")' onclik='showDiv("SVN")'  coords="694,160,698,159,705,153,704,151,698,151,693,156"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SOM")' onclik='showDiv("SOM")'  coords="813,371,809,358,812,349,819,342,825,342,829,340,838,328,832,325,825,324,818,319,817,314,819,312,826,316,852,308,853,318,837,348"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ZAF")' onclik='showDiv("ZAF")'  coords="706,493,709,492,716,494,721,491,722,476,724,476,725,482,724,484,726,486,730,484,732,481,732,478,735,477,740,481,744,479,746,475,749,473,759,463,769,465,768,469,770,479,765,482,765,485,768,487,770,488,773,484,774,489,758,508,750,516,740,520,732,517,719,521,714,514,715,507"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ESP")' onclik='showDiv("ESP")'  coords="613,194,616,188,616,182,619,175,610,172,610,168,614,164,638,167,645,170,648,172,654,171,656,172,655,173,643,186,645,188,635,197,620,200"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ESP")' onclik='showDiv("ESP")'  coords="648,186,650,188"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ESP")' onclik='showDiv("ESP")'  coords="651,182,656,186"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ESP")' onclik='showDiv("ESP")'  coords="658,182,660,184"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ESP")' onclik='showDiv("ESP")'  coords="556,227,559,231"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ESP")' onclik='showDiv("ESP")'  coords="554,235,556,238"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ESP")' onclik='showDiv("ESP")'  coords="560,234,562,236"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ESP")' onclik='showDiv("ESP")'  coords="565,231,570,235"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ESP")' onclik='showDiv("ESP")'  coords="572,235,575,238"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ESP")' onclik='showDiv("ESP")'  coords="581,228,583,232"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("ESP")' onclik='showDiv("ESP")'  coords="578,233,581,238"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("LKA")' onclik='showDiv("LKA")'  coords="973,336,980,334,979,326,973,319,971,328"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SDN")' onclik='showDiv("SDN")'  coords="735,292,738,293,738,272,741,272,742,263,777,263,778,265,787,258,792,265,793,274,799,282,795,285,792,287,791,294,791,298,790,304,785,311,781,320,782,322,777,326,777,328,783,331,784,335,788,338,789,341,783,343,782,345,768,347,762,342,758,344,755,343,753,339,753,336,747,333,744,327,740,325,737,315,731,304,733,295"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SUR")' onclik='showDiv("SUR")'  coords="402,354,400,347,398,343,404,336,415,335,412,342,414,347,411,352,407,352"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SWZ")' onclik='showDiv("SWZ")'  coords="770,487,765,485,765,482,768,480,771,480"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SWE")' onclik='showDiv("SWE")'  coords="693,114,689,109,684,100,688,97,691,91,688,81,692,79,697,70,701,69,704,65,708,61,717,59,722,64,724,70,715,79,709,83,705,89,712,95,710,99,705,102,703,110"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("CHE")' onclik='showDiv("CHE")'  coords="666,154,671,149,678,148,682,151,683,153,678,155,673,156,670,158,669,154"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("SYR")' onclik='showDiv("SYR")'  coords="782,201,785,199,787,197,795,196,797,198,801,196,806,195,806,196,804,198,803,207,788,217,786,217,783,216,786,208,785,206,782,206"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("TJK")' onclik='showDiv("TJK")'  coords="906,195,907,191,903,185,905,184,909,179,913,178,911,182,912,186,918,185,923,186,926,184,931,190,932,194,925,194,922,196,921,192,917,189,914,192,911,195"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("TZA")' onclik='showDiv("TZA")'  coords="807,411,796,416,783,415,783,411,781,407,778,406,777,407,768,400,762,389,762,383,766,381,769,370,772,368,779,367,797,376,801,385,802,385,802,394"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("THA")' onclik='showDiv("THA")'  coords="1065,336,1061,337,1057,334,1055,335,1046,325,1047,318,1050,316,1050,304,1046,294,1046,288,1041,280,1044,274,1051,271,1053,275,1055,276,1054,280,1056,283,1059,282,1062,282,1066,280,1070,285,1075,292,1074,299,1069,297,1065,299,1063,302,1065,308,1064,310,1055,303,1052,304,1053,307,1052,318,1057,326,1057,328"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("TGO")' onclik='showDiv("TGO")'  coords="645,336,641,329,641,319,639,314,642,312,644,314,646,320,646,330,648,334"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("TTO")' onclik='showDiv("TTO")'  coords="349,304,352,307"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("TTO")' onclik='showDiv("TTO")'  coords="355,304,357,308"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("TUN")' onclik='showDiv("TUN")'  coords="680,226,678,220,671,210,675,202,674,196,681,193,683,196,686,202,684,208,688,213,685,218,683,218,682,223"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("TUR")' onclik='showDiv("TUR")'  coords="742,183,748,180,751,181,754,177,774,172,790,179,801,175,807,177,810,183,813,184,811,186,814,190,815,194,813,196,806,194,796,197,789,196,783,201,780,197,772,200,767,199,757,199,750,196,747,188"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("TUR")' onclik='showDiv("TUR")'  coords="744,180,754,177,749,173,745,173,743,175"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("TKM")' onclik='showDiv("TKM")'  coords="842,172,844,175,847,173,852,178,849,179,845,178,852,193,855,193,863,190,881,197,883,202,886,203,894,200,895,195,902,193,897,189,885,184,881,177,876,177,869,171,864,171,860,176,855,176,848,170"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("UGA")' onclik='showDiv("UGA")'  coords="765,368,763,362,770,352,768,346,782,345,786,356,782,359,780,367,775,367,769,369"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("UKR")' onclik='showDiv("UKR")'  coords="754,160,751,158,754,153,751,146,744,145,736,149,731,147,726,149,727,146,726,141,732,135,731,132,736,129,750,132,764,127,769,131,770,133,780,137,786,138,791,143,790,146,784,151,774,155,779,158,772,162,766,158,768,155,765,155,763,153"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ARE")' onclik='showDiv("ARE")'  coords="864,261,870,251,868,243,860,253,852,253,847,253,856,260"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GBR")' onclik='showDiv("GBR")'  coords="620,120,626,120,627,116,626,115,620,114"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("GBR")' onclik='showDiv("GBR")'  coords="633,103,628,109,629,116,635,117,636,122,629,124,628,129,634,132,625,137,649,134,648,131,653,125,647,125,640,112,636,111,640,106"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("URY")' onclik='showDiv("URY")'  coords="413,517,410,512,412,500,415,498,418,503,428,508,433,513,428,521,422,521"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("UZB")' onclik='showDiv("UZB")'  coords="856,175,852,161,865,158,880,166,889,166,896,175,904,178,909,175,921,177,918,181,915,182,912,180,913,178,909,178,906,183,903,184,904,187,907,192,906,194,904,195,897,189,885,184,882,178,876,177,869,171,863,171,860,176"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("USA")' onclik='showDiv("USA")'  coords="178,215,188,215,197,221,211,221,213,219,218,219,222,223,224,229,227,231,232,228,235,229,239,234,241,241,244,245,248,245,250,237,270,228,283,233,285,227,291,225,302,228,305,228,308,232,307,239,312,249,315,248,319,242,317,224,345,201,345,190,348,193,350,187,359,182,367,176,377,173,377,167,394,161,392,155,394,152,392,149,386,152,379,158,366,159,356,163,353,166,346,166,334,174,329,175,332,167,330,163,334,157,328,156,321,161,317,171,313,174,311,172,319,157,331,154,328,151,318,150,310,151,307,150,316,146,307,145,299,142,198,142,193,149,192,145,187,145,165,180,166,189,169,208"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("USA")' onclik='showDiv("USA")'  coords="184,113,187,118,190,110"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("USA")' onclik='showDiv("USA")'  coords="183,107,188,102,186,110"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("USA")' onclik='showDiv("USA")'  coords="188,107,190,109"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("USA")' onclik='showDiv("USA")'  coords="119,105,130,102,130,107,119,108"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("USA")' onclik='showDiv("USA")'  coords="90,112,98,114,142,95,146,97,159,92,178,96,188,102,193,116,194,116,198,112,195,109,198,103,192,97,186,98,182,92,227,56,192,49,159,57,143,60,145,67,141,70,133,68,122,74,128,77,137,76,132,80,113,84,110,87,110,91,103,98,108,101,115,100"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("USA")' onclik='showDiv("USA")'  coords="11,255,14,258"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("USA")' onclik='showDiv("USA")'  coords="16,257,19,260"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("USA")' onclik='showDiv("USA")'  coords="21,260,24,263"/>
<area shape="rect" onmouseout='clearDiv()' onmouseover='showDiv("USA")' onclik='showDiv("USA")'  coords="23,264,28,269"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("VEN")' onclik='showDiv("VEN")'  coords="343,310,340,310,336,320,340,330,354,335,356,335,358,336,358,343,359,347,357,350,360,352,362,358,366,360,372,356,374,353,371,345,374,345,377,346,387,341,387,337,385,335,388,330,388,326,393,325,376,316,368,316,351,308,344,313,345,316,344,321,342,318"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("VNM")' onclik='showDiv("VNM")'  coords="1081,266,1075,264,1075,262,1069,258,1065,261,1058,261,1061,267,1065,270,1067,277,1072,278,1074,283,1083,293,1085,305,1083,311,1074,315,1075,324,1077,325,1082,320,1083,316,1091,314,1093,303,1087,290,1074,276,1076,270"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ESH")' onclik='showDiv("ESH")'  coords="571,266,587,266,588,259,592,258,593,245,606,245,606,238,587,238,579,254,573,260"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("YEM")' onclik='showDiv("YEM")'  coords="822,306,817,298,816,286,823,284,834,287,837,283,847,279,853,277,859,288,854,294,830,305"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ZMB")' onclik='showDiv("ZMB")'  coords="730,435,730,425,732,422,737,422,739,420,739,414,745,414,750,417,754,416,759,423,764,421,764,419,758,415,757,409,760,405,758,403,767,400,777,407,777,411,778,416,776,426,763,433,760,434,752,443,748,444,742,442,735,442"/>
<area shape="poly" onmouseout='clearDiv()' onmouseover='showDiv("ZWE")' onclik='showDiv("ZWE")'  coords="743,442,748,444,753,443,760,434,772,438,775,440,777,444,773,458,770,463,766,464,759,463,754,459,753,456,748,451,746,447"/>
</map>
<img src="images/world-map2.gif" border="0" usemap="#worldmap">
<p style="margin-left:20%">Select target market to see demo website: 
<select id="dynamic_select">
    <option value="" selected>Pick a Market</option>
<?
$countries=array();
$fp=fopen("website/conf/countries.txt","r");
if ($fp) {
    while (($line = fgets($fp)) !== false) {
        $countries[]=explode("\t", $line);
    }
    fclose($fp);
} else {
    // error opening the file.
}
	for($i=0;$i<count($countries);$i++){
		?>
	    <option value="http://www.ican24.net/website/index.php?cid=<?=$countries[$i]["0"]?>"><?=$countries[$i]["1"]?> (Pop: <?=$countries[$i]["3"]?>, Area: <?=$countries[$i]["4"]?>, GDP: <?=$countries[$i]["5"]?>)</option>
		<?
	}
?>
</select>
</p>
<script>
    $(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
</script>

</div>
<!-- marketing end -->


<!-- Model begin -->

<div class="Model" data-parallax="scroll" data-image-src="images/bg_business_model.jpg" id="Model" name="Model">
<h3><span>Business Model</span></h3>

<div align=center>
<table width="900" style="margin:20px 20px 20px 20px">
<tr>
	<td width="300" bgcolor="#F8F3CF" style="padding:20px 20px 20px 20px;opacity: 0.8;filter: alpha(opacity=80); /* For IE8 and earlier */">
<b>Infrastructure</b><br><br>
<h6>Partners</h6>
<p>Service Providers</p>
<br><br>
<h6>Key Resources</h6>
<p>
Payment Acceptance<br> 
Network<br> 
Software Interface<br>
</p>
<br><br>
<h6>Key Activities</h6>
<p>
Managing Platform<br>
Continuously adding new or modifying old  services
</p>

	</td>
	<td width="300" bgcolor="#F8F8F8"  style="padding:20px 20px 20px 20px;opacity: 0.8;filter: alpha(opacity=80); /* For IE8 and earlier */">
<b>Offering</b><br><br>
<p>Online payments</p></td>
	<td width="300" bgcolor="#F8F3CF"  style="padding:20px 20px 20px 20px;opacity: 0.8;filter: alpha(opacity=80); /* For IE8 and earlier */">
<b>Customer</b><br><br>
<h6>Customer Segment</h6>
<p>
All customers of mobile services, Internet, Cable TV, Utilities<br> 
Global top­up hubs<br>
</p>
<br><br>
<h6>Distribution Channel</h6>
<p>
Points to receive payments via automated kiosks, POS, PC terminals, tablets and mobile phones, XML protocol<br>
</p>
 	
	</td>
</tr>
</table>
<br><br>

 <div style="width:800px; margin:0 auto;">
<div style="width:400px;float:left;text-align:left">
<img src="images/Processing.png" alt="" style="float:left;margin-left:20px;margin-right:20px">
<h6>Cost Structure</h6>
<p>
Equipment Purchasing<br>
Processing<br>
Support and Maintenance
</p>
</div>
<div style="text-align:left">
<img src="images/fee.png" alt="" style="float:left;margin-left:40px;margin-right:20px;">
<h6>Revenue Streams</h6>
<p>
Commission for processing<br>
Equipment reselling<br>  
Advertising
</p>

</div>
</div>

<br><br>
</div>
</div>
<div class="clear"></div>

<!-- Challenge end -->

<!-- block advantages begin -->
<div class="Advantages" id="Advantages" name="Advantages">
	<div  align="center">
		<div class="Advantages2block" style="width:900px;">
<p>iCAN (instant cash acceptance network) is a fully automated hardware-software solution for building networks to accept and process payments. Essentially our network provides real-time interaction between client devices, mainly Automated Kiosks, and the billing system of the service providers.
iCAN is a highly effective last mile fintech especially in the microfinance field, which is yet under domination of the cash according to the marketing studies.     
</p>
<br>
<br>
	<img src="images/scheme1.jpg" alt="">
		</div>
	</div>
        <p class="utp_Advantages">Underlying Magic</p>   
        <div class="Advantages_inside">
            <div>
                <div class="Advantages1block">
					<img src="images/icon-left.png" alt="">
                <h6>One Window</h6>
                <p>A single payment platform for all possible services in the country;</p>
                </div>
                <div class="Advantages1block">
					<img src="images/icon-left.png" alt="">
                <h6>Cheapness</h6>
                <p>Significant cheapness of the cost of making payments;</p>
                </div>
                <div class="Advantages1block">
					<img src="images/icon-left.png" alt="">
                <h6>365/7/24</h6>
                <p>Continuous and non­stop nature of service provision;</p>
                </div>
                <div class="Advantages1block">
					<img src="images/icon-left.png" alt="">
                <h6>well-regulated</h6>
                <p>Mutually beneficial and safe system of settlement between all participants in the business;</p>

                </div>       
            </div>
        </div>
        <div class="Advantages_inside" id="po_centru">
            <div>
                <img src="images/kiosk_expl_eng_small.jpg" alt="" id="pict_rezina">
            </div>
        </div>
        <div class="Advantages_inside" id="Advantages_otstup_top">
            <div>
                <div class="Advantages2block">
					<img src="images/icon-right.png" alt="">
                <h6>Quick Update</h6>
                <p>Quickly adding new services, rapid changing of payment details at the request of service providers;</p>
                </div>
                <div class="Advantages2block">
					<img src="images/icon-right.png" alt="">
                <h6>Scaling</h6>
                <p>Readiness to scale quickly across the country;</p>
                </div>
                <div class="Advantages2block">
					<img src="images/icon-right.png" alt="">
                <h6>Franchise</h6>
                <p>Distribution of payment devices on the franchise model. </p>
                </div>
                <div class="Advantages2block">
					<img src="images/icon-right.png" alt="">
                <h6>Expert</h6>
                <p>Trained and experienced team with deep knowledge of of local specifics.</p>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
<!-- block Advantages end -->


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

                <p class="podarok"><img src="images/icons/like.png" alt="">Gift: Thermal Paper Pack (6)</p>
                <p><img src="images/icons/garantiya.png" alt="">Guarantee - 1 year</p>
                <p><img src="images/icons/razmer.png" alt="">Sizes 1430 x 500 x 350 mm</p>
                <p><img src="images/icons/billaccept.png" alt="">Bill Validator NV9 USB</p>
                <p><img src="images/icons/printer.png" alt="">Custom VKP 80 II</p>
                <p><img src="images/icons/display.png" alt=""> LCD-Monitor Acer V173DObmd</p>
                <p><img src="images/icons/processor.png" alt="">Intel® Celeron 847 on board</p>
                <p><img src="images/icons/memory.png" alt="">2GB DDR3 SDRAM 1066MHz</p>
                <p><img src="images/icons/linux.png" alt=""> Arch Linux</p>
                <p class="cena_phone pokazat_cena_button">$1990 &nbsp;&nbsp;&nbsp;<span>2750</span></p>
                <!--
                <p class="zakazat pokazat_cena_button"><a href="#popupform" id="popupbutton" class="button_red">Order</a></p>
                -->
	</div>
	<div class="section">
			<a href="/docs/Self_Service_Kiosk_eng.pdf"><img src="images/docs/Self_Service_Kiosk_eng.png" width="25%"></a><br><br>
			<a href="/docs/Self_Service_Kiosk_Offer_eng.pdf"><img src="images/docs/Self_Service_Kiosk_Offer_eng.png" width="25%"></a>
	</div>
</div> 
 
           </div>
       
        </div>
        <div class="channels_inside2" id="bez_otstupa_verh_model">

           <div>
                <div class="fotorama" data-nav="thumbs" id="fotorama_center" data-allowfullscreen="true">
                       <img src="images/kiosk/kiosk_orange.png">
                       <img src="images/kiosk/90.jpg">
                       <img src="images/kiosk/kiosk_orange1.png">
                       <img src="images/kiosk/kiosk_orange2.png">
                       <img src="images/kiosk/kiosk_orange3.jpg">
                       <img src="images/kiosk/kiosk_orange4.jpg">
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

                <p class="podarok"><img src="images/icons/like.png" alt="">Gift: Thermal Paper Pack (6)</p>
                <p><img src="images/icons/garantiya.png" alt="">Warranty - 1 year</p>
                <p><img src="images/icons/razmer.png" alt="">Size: 200 x 90 x 60 mm</p>
                <p><img src="images/icons/printer.png" alt="">High Speed Thermal Printer</p>
                <p><img src="images/icons/display.png" alt=""> 128*64 FSTN, LED backlight(65x34)</p>
                <p><img src="images/icons/processor.png" alt="">Dual CPU, S3C2410 & STC12LE5412</p>
                <p><img src="images/icons/memory.png" alt="">Standard 32MB FLASH, 32MB SDRAM.</p>
                <p><img src="images/icons/linux.png" alt=""> Arm Linux</p>
                <p class="cena_phone pokazat_cena_button">$199 &nbsp;&nbsp;&nbsp;<span>217</span></p>
                <!--
                <p class="zakazat pokazat_cena_button"><a href="#popupform2" id="popupbutton2" class="button_red">Order</a></p>
                -->
	</div>
	<div class="section">
			<a href="/docs/POS_eng.pdf" title="POS_eng.pdf"><img src="images/docs/POS_eng.png" width="25%"></a><br><br>
			<a href="/docs/POS_Offer_eng.pdf" title="POS_Offer_eng.pdf"><img src="images/docs/POS_Offer_eng.png" width="25%"></a>
	</div>
</div> 

           </div>
       
        </div>

        <div class="channels_inside2">

           <div>
                <div class="fotorama" data-nav="thumbs" id="fotorama_center" data-allowfullscreen="true">
						<img src="images/POS/k370_0.jpg">
						<img src="images/POS/k370_1.jpg">
						<img src="images/POS/k370_2.jpg">
						<img src="images/POS/k370_3.jpg">
						<img src="images/POS/k370_4.jpg">
						<img src="images/POS/k370_5.jpg">
						<img src="images/POS/k370_6.jpg">
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
                <p><img src="images/icons/android.png" alt=""> Android 4.x, 5.x</p>
                <p class="cena_phone pokazat_cena_button">Free&nbsp;&nbsp;&nbsp;</p>
	</div>
	<div class="section">
			<a href="/docs/e-Wallet_eng.pdf" title="e-Wallet_eng.pdf"><img src="images/docs/e-Wallet_eng.png" width="25%"></a>
	</div>
</div> 



           </div>
       
        </div>

        <div class="channels_inside2">

           <div>
                <div class="fotorama" data-nav="thumbs" id="fotorama_center" data-allowfullscreen="true">
						<img src="images/Wallet/00.jpg">
						<img src="images/Wallet/01.jpg">
						<img src="images/Wallet/02.jpg">
						<img src="images/Wallet/03.jpg">
						<img src="images/Wallet/04.jpg">
						<img src="images/Wallet/05.jpg">
						<img src="images/Wallet/06.jpg">
						<img src="images/Wallet/07.jpg">
						<img src="images/Wallet/08.jpg">
						<img src="images/Wallet/09.jpg">
						<img src="images/Wallet/10.jpg">
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
			<a href="/docs/ATM_eng.pdf"><img src="images/docs/ATM_eng.png" width="25%"></a><br><br>
	</div>
</div> 

           </div>
       
        </div>

        <div class="channels_inside2">

           <div>
                <div class="fotorama" data-nav="thumbs" id="fotorama_center" data-allowfullscreen="true">
						<img src="images/ATM/atm0.jpg">
						<img src="images/ATM/01.png">
						<img src="images/ATM/02.png">
						<img src="images/ATM/03.png">
						<img src="images/ATM/04.png">
						<img src="images/ATM/05.png">
						<img src="images/ATM/06.png">
						<img src="images/ATM/07.png">
						<img src="images/ATM/08.png">
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
			<a href="/docs/Cash_Register_eng.pdf"><img src="images/docs/Cash_Register_eng.png" width="25%"></a><br><br>
	</div>
</div> 

           </div>
       
        </div>

        <div class="channels_inside2">

           <div>
                <div class="fotorama" data-nav="thumbs" id="fotorama_center" data-allowfullscreen="true">
						<img src="images/CashReg/01.jpg">
						<img src="images/CashReg/02.jpg">
						<img src="images/CashReg/03.jpg">
						<img src="images/CashReg/04.jpg">
						<img src="images/CashReg/90.png">
						<img src="images/CashReg/01.jpg">
                </div>

           </div>

        </div>      
    </div>
</div>
	<!-- Cash Register end -->

<!-- kak murabotaem begin -->

<div class="how_work" id="HowItWorks" name="HowItWorks">
    <h3>clear <span>Presentation,</span> transparent <span>Arrangment,</span> easy <span>Launching</span></h3>
<div class="imgHolder">
	<img src="images/roadmap.png" />
	<span class="Label1">Registration</span><br />
	<span class="Date1"><?=date("F Y",time()+60*60*24*30)?></span>

	<span class="Label2">Tech.Run-up</span>
	<span class="Date2"><?=date("F Y",time()+60*60*24*35)?></span>

	<span class="Label3">Launch</span>
	<span class="Date3"><?=date("F Y",time()+60*60*24*45)?></span>

	<span class="Label4">Global Hubs</span>
	<span class="Date4"><?=date("F Y",time()+60*60*24*55)?></span>

	<span class="Label5">Kiosk Deploy</span>
	<span class="Date5"><?=date("F Y",time()+60*60*24*85)?></span>
</div>
<div class="how_work_centr1">

        <div class="how_work_centr2">
            <ul>
                <li>
                    <img src="images/presentation.png" alt="">
                    <p>Order Presentation</p>
                </li>
                <li>
                    <img src="images/discussion.png" alt="">
                    <p>Discuss Project in detail</p>
                </li>
                <li>
                    <img src="images/handshake.png" alt="">
                    <p>Make Arrangement</p>
                </li>
                <li>
                    <img src="images/registration.png" alt="">
                    <p>Register Company</p>
                    <p></p>
                </li>
                <li>
                    <img src="images/contract.png" alt="">
                    <p>Sign Contract<br>with Processing</p>
                </li>
                <li>
                    <img src="images/launch.png" alt="">
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
                <li><img src="images/partners/iam.png" alt=""></li>
                <li><img src="images/partners/meditel.png" alt=""></li>
                <li><img src="images/partners/inwi.png" alt=""></li>
                <li><img src="images/partners/bayn.png" alt=""></li>
                <li><img src="images/partners/bayngsm.png" alt=""></li>
            </ul>
        </div>
        <div class="clear"></div> 
		</div>
    <div class="partners_centr1">
		<div class="partners_centr2">
            <ul>       
                <li><img src="images/partners/tranglo.png" alt=""></li>
                <li><img src="images/partners/transferto.png" alt=""></li>
                <!-- <li><img src="/images/partners/pdt1.png" alt=""></li> -->

            </ul>
        </div>
        <div class="clear"></div> 
		</div>
    <div class="partners_centr1">
		<div class="partners_centr2">
            <ul>       
                <li><img src="images/partners/provento.png" alt=""></li>
                <li><img src="images/partners/itl.png" alt=""></li>
                <li><img src="images/partners/wh.png" alt=""></li>
                <li><img src="images/partners/gt.png" alt=""></li>
                <li><img src="images/partners/custom.png" alt=""></li>
            </ul>
        </div>
        <div class="clear"></div> 
		</div>
    <div class="partners_centr1">
		<div class="partners_centr2">
            <ul>       
                <li><img src="images/partners/uite.png" alt=""></li>
                <li><img src="images/partners/masys.jpg" alt=""></li>
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

<div class="team" data-parallax="scroll" data-image-src="images/bg_team1.jpg" id="Team" name="Team">
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
	<td style="vertical-align: middle"><a href="https://www.linkedin.com/in/artak-hovsepyan-43466ba"><img src="images/linkedin.png" alt="" align="right"></a></td>
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
	<td style="vertical-align: middle"><a href="https://www.linkedin.com/in/mesrop-ghulijanyan-9b5815b3"><img src="images/linkedin.png" alt="" align="right"></a></td>
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
	<td style="vertical-align: middle"><a href="https://www.linkedin.com/in/vazgenshakhoyan"><img src="images/linkedin.png" alt="" align="right"></a></td>
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



<!-- block inquiry begin -->

<div class="inquiry" id="Contacts" name="Contacts">

   <h3>If you have <span>any questions, </span>please do not hesitate to contact us!</h3>
    <div class="inquiry_inside">
        <div class="inquiry_left">
            <img src="images/icon-left.png" alt="">
            <h6>Full Document Package</h6>
            <p>Our staff will provide full package of documents by your request</p>
        </div>
    </div>
    <div class="inquiry_inside" id="inquiry_pict_rezina">
        <div>
            <img src="images/folder.jpg" alt="Have you question?">
        </div>
    </div>
    <div class="inquiry_inside">
        <div class="inquiry_right">
            <img src="images/icon-right.png" alt="">
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
<div class="fotorama" data-nav="thumbs" id="fotorama_center">
	<img src="images/docs/iCAN_en.png" width="67%">
	<img src="images/docs/points.png" width="67%">
	<img src="images/docs/transportation.png" width="67%">
	<img src="images/docs/office.png" width="67%">
	<img src="images/docs/net.png" width="67%">
	<img src="images/docs/monitoring.png" width="67%">
	<img src="images/docs/ican2015_v1.2_eng.png" width="67%">
	<img src="images/docs/business_plan_v1.1_eng.png" width="67%">
	<img src="images/docs/Exclusive_Services_Agreement_Ethiopia.png" width="67%">
	<img src="images/docs/Self_Service_Kiosk_eng.png" width="67%">
	<img src="images/docs/Self_Service_Kiosk_Offer_eng.png" width="67%">
	<img src="images/docs/POS_eng.png" width="67%">
	<img src="images/docs/POS_Offer_eng.png" width="67%">
	<img src="images/docs/e-Wallet_eng.png" width="67%">
	<img src="images/docs/ATM_eng.png" width="67%">
	<img src="images/docs/Cash_Register_eng.png" width="67%">
	<img src="images/docs/Summary_Forecast.png" width="67%">
	<img src="images/docs/Financial_Model_Common.png" width="67%">
	<img src="images/docs/Financial_Model_Processing.png" width="67%">
	<img src="images/docs/Chart_Total_Revenue_and_Costs.png" width="67%">
	<img src="images/docs/Chart_Total_Cumulative_Income.png" width="67%">
	<img src="images/docs/Forecast_of_Income_and_Expenses.png" width="67%">
	<img src="images/docs/Cash_Flow_Projection.png" width="67%">
</div>
<br><br>
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
            <div style="color:orange">iCAN SP</div>
            <span style="color:#999">
            Moscow, Russia<br>
            PSRNSP  316774600073556 <br>ITN 772704885702 <br>
            </span>
            <br>
            <div style="color:orange">Kiosk Development LLC</div>
            <img src="images/madeinarmenia3.png" alt="" width="35%" align="right" style="padding-right:80px">
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
            <p class="footer_telephone">
            <img src="images/email.png" alt="" style="verical-align:bottom">
<script language="javascript" type="text/javascript">
    <!--
    var prefix = '&#109;a'+'i&#108;'+'&#116;o'; 
    var path = 'hr'+'ef'+'='; 
    var address = '&#105;c&#97;&#110;24n&#101;t'+'&#64;'; 
    address = address+'&#103;&#109;a'+'i&#108'+'&#46;'+'&#99;&#111;&#109;'; 
    document.write('<a '+path+'"'+prefix+':'+address+'" style="text-decoration: none;font-size: 20px;">');
    document.write(' '+address+' ');
    document.write('</a>');
    // -->
</script>
<script language="javascript" type="text/javascript">
    <!--
    document.write('<span style="display: none;">');
    // -->
</script>
Этот email-адрес защищен от спам-ботов, вам необходимо включить JavaScript, чтобы его увидеть.
<script language="javascript" type="text/javascript">
    <!--
    document.write('</');
    document.write('span>');
    // -->
</script>
            </br>
            <img src="images/tel.png" alt="">+7 903-561-81-51
            </p>
            
            <p><a href="#popupformCall" id="popupbuttonCall" class="button_footer">Callback</a></p>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="bottom_black">
        <div class="bottom_black_inside1">
				<img src="images/logo-ican-1.png" alt=""> 
               
            <p>&copy; All rights reserved. iCAN instant Cash Acceptance Network</p>
            <a href="http://agent.ican24.net" style="display:none;">Processing</a>
        </div>
        <div class="bottom_black_inside2">
        <?
			$data="counter.dat"; // Файл счетчика
			// Открывем файл счетчика и считываем текущий счет
			// в переменную $count
			$count=file_get_contents($data);
			$count=preg_replace("/\D/","",$count); // Удаляем символ конца строки
			$count++; // Увеличиваем счетчик
			// Записываем данные обратно в файл
			$countArr=str_split($count);
			for($i=0;$i<count($countArr);$i++) {
				if(preg_match("/\d/",$countArr[$i])){?>
				<img src="images/counter/<?=$countArr[$i]?>.png" width="7%">
			<?	}
				//else echo $count[$i];
			}
			//echo $count;
			file_put_contents($data, $count);
			file_put_contents("../tmp/".$_SERVER["REMOTE_ADDR"], $count);
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
	<td><img src="images/docs/iCAN_en.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;a) How it looks - points.pdf</td>
	<td><img src="images/docs/points.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;b) How it looks - transportation.pdf</td>
	<td><img src="images/docs/transportation.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;c) How it looks - office.pdf</td>
	<td><img src="images/docs/office.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;d) Network - net.pdf</td>
	<td><img src="images/docs/net.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;e) Monitoring - net.pdf</td>
	<td><img src="images/docs/monitoring.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;2. Full Presentation - ican2015_v1.2_eng.pdf</td>
	<td><img src="images/docs/ican2015_v1.2_eng.png" width="67%"></td>
</tr>
<tr>
	<td colspan="2"><p class="zagolovok">II Block Business Plan</p></td>
</tr>
<tr>
	<td>1. Business Plan business_plan_v1.1_eng.pdf</td>
	<td><img src="images/docs/business_plan_v1.1_eng.png" width="67%"></td>
</tr>
<tr>
	<td>2. Annex</td>
	<td></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;a) Exclusive Services Agreement - Exclusive_Services_Agreement_Ethiopia.pdf</td>
	<td><img src="images/docs/Exclusive_Services_Agreement_Ethiopia.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;b) Self-Service Kiosk - Self_Service_Kiosk_eng.pdf</td>
	<td><img src="images/docs/Self_Service_Kiosk_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;c) Self-Service Kiosk, Offer for Agents - Self_Service_Kiosk_Offer_eng.pdf</td>
	<td><img src="images/docs/Self_Service_Kiosk_Offer_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;d) Mobile POS Terminal - POS_eng.pdf</td>
	<td><img src="images/docs/POS_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;e) Mobile POS Terminal, Offer for Agents - POS_Offer_eng.pdf</td>
	<td><img src="images/docs/POS_Offer_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;f) e-Wallet - e-Wallet_eng.pdf</td>
	<td><img src="images/docs/e-Wallet_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;g) Payment Module for ATM - ATM_eng.pdf</td>
	<td><img src="images/docs/ATM_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;h) Payment Module for Cash_Registers - Cash_Register_eng.pdf</td>
	<td><img src="images/docs/Cash_Register_eng.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;3. Financial Plan - iCANfinancials_common.xls</td>
	<td></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Summary Forecast"</td>
	<td><img src="images/docs/Summary_Forecast.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Financial Model Common"</td>
	<td><img src="images/docs/Financial_Model_Common.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Financial Model Processing"</td>
	<td><img src="images/docs/Financial_Model_Processing.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Chart Total Revenue and Costs"</td>
	<td><img src="images/docs/Chart_Total_Revenue_and_Costs.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Chart Total Cumulative Income"</td>
	<td><img src="images/docs/Chart_Total_Cumulative_Income.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Forecast of Income and Expenses"</td>
	<td><img src="images/docs/Forecast_of_Income_and_Expenses.png" width="67%"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;Sheet:"Cash Flow Projection"</td>
	<td><img src="images/docs/Cash_Flow_Projection.png" width="67%"></td>
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