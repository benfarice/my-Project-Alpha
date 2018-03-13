		
var buy_value_number_elements = "0";

var new_qte = "0";

$(".ui-dialog-titlebar").hide();

//myModal_update_lot
$( "#myModal_update_lot #number1" ).click(function() {
 if(new_qte != "0"){
      new_qte+="1";
    }
    else{
      new_qte="1";
    }
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});
$( "#myModal_update_lot #number2" ).click(function() {
 if(new_qte != "0"){
      new_qte+="2";
    }
    else{
      new_qte="2";
    }
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});
$( "#myModal_update_lot #number3" ).click(function() {
 if(new_qte != "0"){
      new_qte+="3";
    }
    else{
      new_qte="3";
    }
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});
$( "#myModal_update_lot #number4" ).click(function() {
 if(new_qte != "0"){
      new_qte+="4";
    }
    else{
      new_qte="4";
    }
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});
$( "#myModal_update_lot #number5" ).click(function() {
 if(new_qte != "0"){
      new_qte+="5";
    }
    else{
      new_qte="5";
    }
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});
$( "#myModal_update_lot #number6" ).click(function() {
 if(new_qte != "0"){
      new_qte+="6";
    }
    else{
      new_qte="6";
    }
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});
$( "#myModal_update_lot #number7" ).click(function() {
 if(new_qte != "0"){
      new_qte+="7";
    }
    else{
      new_qte="7";
    }
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});
$( "#myModal_update_lot #number8" ).click(function() {
 if(new_qte != "0"){
      new_qte+="8";
    }
    else{
      new_qte="8";
    }
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});
$( "#myModal_update_lot #number9" ).click(function() {
 if(new_qte != "0"){
      new_qte+="9";
    }
    else{
      new_qte="9";
    }
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});
$( "#myModal_update_lot #number0" ).click(function() {
 if(new_qte != "0"){
      new_qte+="0";
    }
    else{
      new_qte="0";
    }
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});
$( "#myModal_update_lot #numberx" ).click(function() {

    new_qte="0";
  
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});
$( "#myModal_update_lot #number_v" ).click(function() {

     if(new_qte.indexOf(".") == -1){
       new_qte+=".";
    }
  
    $("#myModal_update_lot #new_qte").html(Number(new_qte).toFixed(3));
});

$( "#dialog #number1" ).click(function() {
 /* if(is_colisage_calcul_checked_ref == true){
    if(input_colisage_ref != "0"){
      input_colisage_ref+="1";
    }
    else{
      input_colisage_ref="1";
    }
    $("#myModal_ref #input_colisage").html(input_colisage_ref);
  } 
  else
  {
 */
 //console.log(new Intl.NumberFormat("de-DE").format(Number(5623124565633.124586)));

     if(buy_value_number_elements != "0"){
      buy_value_number_elements+="1";
    }
    else{
      buy_value_number_elements="1";
    }
   
   
    console.log(buy_value_number_elements);
    console.log(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
    //$("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
    $("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
 // }
 
});
//---------------------


$( "#dialog #number2" ).click(function() {
  /*if(is_colisage_calcul_checked_cb == true){
    if(input_colisage_cb != "0"){
      input_colisage_cb+="2";
    }
    else{
      input_colisage_cb="2";
    }
    $("#myModal_cb #input_colisage").html(input_colisage_cb);
  } 
  else
  {
  	*/
    if(buy_value_number_elements != "0"){
      buy_value_number_elements+="2";
    }
    else{
      buy_value_number_elements="2";
    }

    console.log(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
    //$("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
    $("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
 // }

});

$( "#dialog #number3" ).click(function() {
 /*
  if(is_colisage_calcul_checked_cb == true){
    if(input_colisage_cb != "0"){
      input_colisage_cb+="3";
    }
    else{
      input_colisage_cb="3";
    }
    $("#dialog #input_colisage").html(input_colisage_cb);
  } 
  else
  {
  */
    if(buy_value_number_elements != "0"){
      buy_value_number_elements+="3";
    }
    else{
      buy_value_number_elements="3";
    }
  
    //$("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
    $("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
 // }
 
});

$( "#dialog #number4" ).click(function() {
  /*if(is_colisage_calcul_checked_cb == true){
    if(input_colisage_cb != "0"){
      input_colisage_cb+="4";
    }
    else{
      input_colisage_cb="4";
    }
    $("#myModal_cb #input_colisage").html(input_colisage_cb);
  } 
  else
  {
  	*/
    if(buy_value_number_elements != "0"){
      buy_value_number_elements+="4";
    }
    else{
      buy_value_number_elements="4";
    }

   // $("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
    $("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
//  }
  
});

$( "#dialog #number5" ).click(function() {
  /*
  if(is_colisage_calcul_checked_cb == true){
    if(input_colisage_cb != "0"){
      input_colisage_cb+="5";
    }
    else{
      input_colisage_cb="5";
    }
    $("#myModal_cb #input_colisage").html(input_colisage_cb);
  } 
  else
  {
  	*/
    if(buy_value_number_elements != "0"){
      buy_value_number_elements+="5";
    }
    else{
      buy_value_number_elements="5";
    }
  
    //$("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
    $("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
  //}
  //update_ecart_cb();
});

$( "#dialog #number6" ).click(function() {
  /*if(is_colisage_calcul_checked_cb == true){
    if(input_colisage_cb != "0"){
      input_colisage_cb+="6";
    }
    else{
      input_colisage_cb="6";
    }
    $("#myModal_cb #input_colisage").html(input_colisage_cb);
  } 
  else
  {
  	*/
    if(buy_value_number_elements != "0"){
      buy_value_number_elements+="6";
    }
    else{
      buy_value_number_elements="6";
    }
  
 //$("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
 $("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
  //}
  //update_ecart_cb();
});

$( "#dialog #number7" ).click(function() {
  /*if(is_colisage_calcul_checked_cb == true){
    if(input_colisage_cb != "0"){
      input_colisage_cb+="7";
    }
    else{
      input_colisage_cb="7";
    }
    $("#myModal_cb #input_colisage").html(input_colisage_cb);
  } 
  else
  {
  	*/
    if(buy_value_number_elements != "0"){
      buy_value_number_elements+="7";
    }
    else{
      buy_value_number_elements="7";
    }
    
 //$("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
$("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
  //}

});

$( "#dialog #number8" ).click(function() {
  /*if(is_colisage_calcul_checked_cb == true){
    if(input_colisage_cb != "0"){
      input_colisage_cb+="8";
    }
    else{
      input_colisage_cb="8";
    }
    $("#myModal_cb #input_colisage").html(input_colisage_cb);
  } 
  else
  {
  	*/
    if(buy_value_number_elements != "0"){
      buy_value_number_elements+="8";
    }
    else{
      buy_value_number_elements="8";
    }
  
// $("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
$("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
 // }
  
});

$( "#dialog #number9" ).click(function() {
  /*if(is_colisage_calcul_checked_cb == true){
    if(input_colisage_cb != "0"){
      input_colisage_cb+="9";
    }
    else{
      input_colisage_cb="9";
    }
    $("#myModal_cb #input_colisage").html(input_colisage_cb);
  } 
  else
  {
  	*/
    if(buy_value_number_elements != "0"){
      buy_value_number_elements+="9";
    }
    else{
      buy_value_number_elements="9";
    }
   
 //$("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
 $("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
  //}
  
});

$( "#dialog #number0" ).click(function() {
	 if(buy_value_number_elements != "0"){
      buy_value_number_elements+="0";
    }
    else{
      buy_value_number_elements="0";
    }
  
    // $("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
    $("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
 });

$( "#dialog #numberx" ).click(function() {
	
    //buy_value_number_elements="00.000";
    buy_value_number_elements="0";
 
    //$("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
    $("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
 });

$( "#dialog #number_v" ).click(function() {
  
    if(buy_value_number_elements.indexOf(".") == -1){
       buy_value_number_elements+=".";
    }
   
 
 //   $("#dialog #input_piece").html(new Intl.NumberFormat("de-DE").format(Number(buy_value_number_elements)));
    $("#dialog #input_piece").html(Number(buy_value_number_elements).toFixed(3));
 });

//---------------------
function modal_func(){
          $("#dialog #input_piece").html('00.000');
          buy_value_number_elements = '0';
          $('#Espece_modal').modal('show');
        }

$( "#dialog" ).dialog({
      autoOpen: false,
      width: '90%',
      buttons: [
        {
          text: "موافق",
          click: function() {
            ajax_func_lot();
            buy_value_number_elements = '0';
            $("#dialog #input_piece").html('00.000');
            $('#Espece_modal').modal('hide');
            $( this ).dialog( "close" ); 
          }
        },
        {
          text: "إلغاء",
          click: function() {
            buy_value_number_elements='0';
            $("#dialog #input_piece").html('00.000');
            $( this ).dialog( "close" );
          }
        }
      ]
    });
   $(".ui-dialog-titlebar").hide(); 

   

		

