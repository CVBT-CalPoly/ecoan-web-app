<?php 
class eventclass_Product_Cost_Breakdown  extends eventsBase
{ 
	function eventclass_Product_Cost_Breakdown()
	{
	// fill list of events
		$this->events["BeforeProcessReport"]=true;


//	onscreen events
		$this->events["Product_Cost_Breakdown_snippet6"] = true;
		$this->events["Product_Cost_Breakdown_snippet61"] = true;


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
				// Report page: Before process
function BeforeProcessReport(&$conn,&$pageObject)
{

		





// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessReport

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function Product_Cost_Breakdown_snippet6(&$params)
{
// Put your code here.
echo date('F jS Y h:i:s A');

;
}
function Product_Cost_Breakdown_snippet61(&$params)
{
// Put your code here.
echo date('F jS Y h:i:s A');

;
}

} 
?>
