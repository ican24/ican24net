<?
/*
it is just a test !!!!!!!!!!!!!!!!!!!
*/
//print_r($_SERVER);
exit;
require_once("website/conf/map.inc");
require_once("website/conf/operators.inc");
$f=0;
$MyAr=array();
while(list($k,$v)=each($Operators)) {
	for($i=0;$i<count($v["name"]);$i++){
		$f++;
		$MyAr[]=basename($v["img"][$i])."\n";
	}
}
//sort($MyAr);
echo $f;
print_r($MyAr);
exit;
while(list($k,$v)=each($Operators)) {
	//echo $k."\n";
	for($i=0;$i<count($v["name"]);$i++) {
		echo $v["name"][$i]."=>".$v["img"][$i]."\n";
		$cs = curl_init(); 
		curl_setopt($cs, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0');
		//curl_setopt($cs, CURLOPT_TIMEOUT,$cto);
		curl_setopt($cs, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($cs, CURLOPT_URL,$v["img"][$i]); // set url to post to 
		$imgCont = @curl_exec($cs); // run the whole process 
		if(strlen($imgCont)>1000)file_put_contents("website/conf/operators/".basename($v["img"][$i]),$imgCont);
	}
}
exit;
################# GSMA fetch Mobile Operators Info 
function array2Form($arr,$name="") { 
	$arg="";
    while (list($k,$v)=@each($arr)) { 
		($name=="")?$nameStr=$k:$nameStr=$name."[".$k."]";
        if(is_array($v))$arg.=array2Form($v,$nameStr); 
 		else if($v!=""||$v!=0)$arg.= "<input type=hidden name=\"".$nameStr."\" id=\"".$k."\" value=\"".str_replace("\"","",$v)."\">\n";
    } 
    return $arg; 
} 
function array2CURL($arr,$name="") { 
    $arg="";
	while (list($k,$v)=@each($arr)) { 
		($name=="")?$nameStr=$k:$nameStr=$name."[".$k."]";
        if(is_array($v))$arg.=array2CURL($v,$nameStr); 
 		else $arg.= $nameStr."=".urlencode($v)."&";
    } 
    return $arg; 
}
function getHTTPResp($url,$postStr="",$cto=55){
	$stime=time();
	$cs = curl_init(); 
	curl_setopt($cs, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0');
	curl_setopt($cs, CURLOPT_TIMEOUT,$cto);
	curl_setopt($cs, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($cs, CURLOPT_URL,$url); // set url to post to 
	//curl_setopt($cs, CURLOPT_HEADER,1); 
	//curl_setopt($cs, CURLINFO_HEADER_OUT, true);
	curl_setopt($cs, CURLOPT_FAILONERROR,1); 
	curl_setopt($cs, CURLOPT_POST,1); // set POST method 
	curl_setopt($cs, CURLOPT_POSTFIELDS,$postStr); // add POST fields 
	/*
	$fp = fopen('/opt/kiosk/logs/curlerror.log', 'w+');
	curl_setopt($cs, CURLOPT_VERBOSE, 1);
	curl_setopt($cs, CURLOPT_STDERR, $fp);
	*/
	$result = @curl_exec($cs); // run the whole process 
	$data["sent"]=@curl_getinfo($cs,CURLINFO_HEADER_OUT);
	if($result === false){
		$data["rec"]["result"]=false;
		$data["rec"]["str"]=curl_error($cs);
		$data["rec"]["errno"]=curl_errno($cs);
	} 
	else{
		$data["rec"]["result"]=true;
		$data["rec"]["str"]=$result;
	}
	$data["rec"]["getinfo"]=curl_getinfo($cs);
	$data["dur"]=time()-$stime;
	curl_close($cs);
	return $data;
}
$Operators=array();
$toPC["action"]="full_members_display";
$alphabet=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
foreach ($alphabet as $letter) {
	$toPC["letter_start"]=$letter;
	$raw=getHTTPResp("http://www.gsma.com/membership/wp-content/themes/GSMAMembership2014/search_post.php",array2CURL($toPC));
	//print_r($raw);
	//exit;
	$grab=$raw["rec"]["str"];
	preg_match_all("/<div class='grouped'><h3.*?>(.*?)<\/h3>(.*?)<\/div>/smi",$grab,$res);
	for($i=0;$i<count($res[1]);$i++) {
		//preg_match_all("/a href=\"(.*?)\".*?url\((.*?)\).*?<p.*?(.*?),\/p>/smi", $res[2][$i],$resopers);		
		preg_match_all("/<a href=\"(.*?)\".*?url\((.*?)\).*?<p.*?>(.*?)<\/p>/smi", $res[2][$i],$resopers);
		$key=array_search($res[1][$i],$isoCodes3);
		echo '$Operators["'.$key.'"]=array('."\n\t".
		'"country"=>"'.$res[1][$i]."\",\n\t".
		'"url"=>array(\''.implode("','",$resopers[1])."'),\n\t".
		'"img"=>array(\''.implode("','",$resopers[2])."'),\n\t".
		'"name"=>array(\''.implode("','",$resopers[3])."')\n);\n";		
	}
}
exit;
################################################
