<?php 
session_start();
$lang = '../includes/languages/';
include_once $lang.$_SESSION['Lang'].'.php';

include "../connect.php";
$query_add ="insert into ADJUDICATION(Num_adjudication,Date_adjudication,Prix_net,
	Prix_unitaire,Poids_net,Code_Acheteur,num_lot)
	values
	('L0112','".date('d/m/Y')."',".$_REQUEST['prix_net'].",".$_REQUEST['prix_unitaire'].",".
	$_REQUEST['poids_buy'].",'".$_REQUEST['id_buyer']."','".$_REQUEST['lot_to_buy']."')";

echo $query_add;
$result_add = sqlsrv_query($con,$query_add);