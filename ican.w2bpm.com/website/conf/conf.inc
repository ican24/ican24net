<?
session_start();
if(strlen($_REQUEST["cid"])==3)$_SESSION["cid"]=$_REQUEST["cid"];
if($_SESSION["cid"]=="")$_SESSION["cid"]="IND";
$cid=$_SESSION["cid"];
$country=unserialize(file_get_contents("conf/countries/".$_SESSION["cid"]));

require_once("../../w2bpm.com/tools/logwriter.inc");	
$bgheadertop="#E9382B";
$bgheadermid="#ffcc33";
//$bgheadermid="#ffe282";
$bgheaderbot="#8BBE4B";

$bgroot="#ffcc33";
$bgroot="#ffcc33";
//$bgroot="#fee78b";
$bgsub="#eeeeee";
$bgsubmenu="#ffffcc";

$Menu["agents"]["Name"]="For Agents";
$Menu["agents"]["Pages"]=array(
	"opportunity"	=>	"Great Business Opportunity",
	"howitworks"	=>	"How does it work?",
	"plan"			=>	"Typical business plan",
	"equipment"		=>	"Kiosks and equipment",
	"guide"			=>	"Step-by-step guide",
	"connection"	=>	"<b>Joining iCAN</b>",
	"agreement"		=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Agreement</i>",
	"appendix1"		=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>List of Providers</i>",
	"edi"			=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>e-Data Interchange</i>",
	"edi_appendix2a"	=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Public Key Act</i>",
	"liability"			=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Liability</i>",
	"receipt"		=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Receipt Template</i>",
	"report4Agent"	=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Report Form</i>",
	"claim"		=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Adjustment/Cancellation</i>",
	"license"		=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Software License</i>",
	"e-token"		=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>e-Token</i>",
	"obtainCert"		=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Obtain a Certificate</i>",
	"auth"		=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Authentication</i>",
	"secure"		=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Security</i>",

	"download"		=>	"Download",
	"faq"			=>	"FAQs"
);
//	"support"		=>	"Support",


$Menu["payees"]["Name"]="For Payees";
$Menu["payees"]["Pages"]=array(
	"benefits"		=>	"Exclusive benefits",
	"howtojoin"		=>	"<b>How to join</b>",
	"agreement"		=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Agreement</i>",
	"report4Provider"	=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Report Form</i>",
	"operinfo"		=>	"&nbsp;&nbsp;&nbsp;&nbsp;<i>Operator Info</i>"
);
//	"services"		=>	"Revenue collection services",

$Menu["payers"]["Name"]="For Payers";
$Menu["payers"]["Pages"]=array(
	"topups"		=>	"Instant top ups",
	"policy"		=>	"Security policy",
	"faq"			=>	"FAQ"
);

$Menu["banks"]["Name"]="For Banks";
$Menu["banks"]["Pages"]=array();

$Menu["advertising"]["Name"]="Advertising Options";
$Menu["advertising"]["Pages"]=array(
	"benefits"		=>	"Benefits",
	"prices"	=>	"Prices",
	"terms"		=>	"Terms and conditions"
);

$Menu["aboutus"]["Name"]="About iCAN";
$Menu["aboutus"]["Pages"]=array(
	"mission"=>"Mission",
	"history"=>"History",
	"management"=>"Management",
	"vacancy"=>"Our vacancies",
	"contacts"=>"Contacts"
);


preg_match("/(\w+)\.php/",$_SERVER["REQUEST_URI"],$res);
$curPage=$res[1];

function getCityList($cid){
	$file=@file("conf/cities/".$cid);
	for($i=0;$i<count($file);$i++){
		$myLine=preg_split("/\t/",$file[$i]);
		$data[$i]["Name"]=$myLine[0];
		$data[$i]["Population"]=$myLine[1];
		$data[$i]["Latitude"]=$myLine[2];
		$data[$i]["Longitude"]=$myLine[3];
	}
	return $data;
}

//$country=$isoCodes3[$cid];
require_once("conf/map.inc");
$website="http://www.ican.".strtolower($isoConvTable[$cid]);
$domain="ican.".strtolower($isoConvTable[$cid]);
$country["capital"]=$capitals[$isoConvTable[$cid]];
$legalName="iCAN ".$country["name"]." LLC";
$address='
	<b>iCAN '.$country["name"].' LLC</b>,<br>
	Reg #10101<br><br>
	#41, Independence Ave,<br> 
	'.$country["capital"].', '.$country["name"].'<br>
	Phone: +'.$country["phone"].' 01 23-45-67<br>
	E-mail: <a href="mailto:info@'.$domain.'">info@'.$domain.'</a><br>
';
$fund=$currencies[$isoConvTable[$cid]];
$callcenter="+".$country["phone"]." 61 23-45-65";

?>
