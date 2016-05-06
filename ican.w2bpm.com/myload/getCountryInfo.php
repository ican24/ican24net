<?
$stime=time();
require_once("../website/conf/map.inc");
$data=unserialize(file_get_contents("../website/conf/countries/".$_REQUEST["Id"]));
if($data["desc"]=="edit")$data["desc"]="";
?>
<div align="left"><img src="/website/conf/flags/<?=$_REQUEST["Id"]?>.png" align="right"> 
<h6><?=$isoCodes3[$_REQUEST["Id"]]?></h6>
<br>Population: <span><?=preg_replace("/\xa0/smi","",$data["population"])?></span><br>
Area: <span><?=preg_replace("/\xa0/smi","",@$data["area"])?></span><br>
GDP: <span><?=preg_replace("/\xa0/smi","",@$data["gdp"])?></span><br>
Phone Code: <span>+<?=preg_replace("/\xa0/smi","",@$data["phone"])?></span><br>
<?=preg_replace("/\xa0|\[edit\]|\[update99\]/smi","",@$data["desc"])?>
<br><br>

<table>
<tr bgcolor="#eee">
	<td>#</td>
	<td>Operator</td>
	<td>Technology</td>
	<td>Subscribers</td>
	<td>Ownership</td>
</tr>
<?
for($i=0;$i<count($data["operators"]);$i++){
	($i%2)?$bgcolor="#FFFADA":$bgcolor="#fff";
?>
<tr bgcolor="<?=$bgcolor?>">
	<td><?=@$data["operators"][$i]["num"]?></td>
	<td><b><?=@$data["operators"][$i]["Operator"]?></b></td>
	<td><?=@$data["operators"][$i]["Technology"]?></td>
	<td><?=@$data["operators"][$i]["Subscribers"]?></td>
	<td><?=@$data["operators"][$i]["Ownership"]?></td>
</tr>
<?
}
?>
</table>
<!--
<div align="right">Source:Wikipedia</div>
-->
</div>
<?
//echo "dur:".(time()-$stime)."sec";
//print_r($data);
exit;
