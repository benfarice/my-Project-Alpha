function toggleCheck(obj){
	
//alert(obj);
	if(obj.attr("checked") == "checked" ) { 
	$(':checkbox').attr("checked",false);
	
	//obj.attr("checked",false);}
	}
	else {
		$(':checkbox').attr("checked",true);
//		obj.attr("checked",true);
};
	
}