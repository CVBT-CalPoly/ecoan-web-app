<?php
$dalTablemix = array();
$dalTablemix["MixNo"] = array("type"=>2,"varname"=>"MixNo");
$dalTablemix["ComponentNo"] = array("type"=>3,"varname"=>"ComponentNo");
$dalTablemix["Qtty"] = array("type"=>5,"varname"=>"Qtty");
$dalTablemix["UnitOrBucket"] = array("type"=>201,"varname"=>"UnitOrBucket");
	$dalTablemix["MixNo"]["key"]=true;
	$dalTablemix["ComponentNo"]["key"]=true;
$dal_info["mix"]=&$dalTablemix;

?>