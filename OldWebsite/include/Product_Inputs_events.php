<?php 
class eventclass_Product_Inputs  extends eventsBase
{ 
	function eventclass_Product_Inputs()
	{
	// fill list of events

//	onscreen events
		$this->events["Product_Cost_Breakdown_snippet7"] = true;


	}
// Captchas functions	

//	handlers
//	onscreen events
function Product_Cost_Breakdown_snippet7(&$params)
{
// Put your code here.
echo date('F jS Y h:i:s A');

;
}

} 
?>
