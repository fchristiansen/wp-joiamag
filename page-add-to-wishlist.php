<?php
/*

Template name: Add To Wishlist

*/
?>
<?php
global $wpdb;

if(is_user_logged_in()){
$user_id = get_current_user_id();
$prod_id = $_POST["prod"];

	if(isset($_GET["remove_item"])){
		$token_sended = $_GET["remove_item"];
		$token = wp_get_session_token();
		if($token_sended == $token){
			//echo "borrar item de lista de deseos";
			if($prod_id > 0){
			$wpdb->delete( 'wp_crm_wish_list', array( 'user_id' => $user_id, 'prod_id' => $prod_id ), array( '%d', '%d' )  );
			}
		}
		
	}else{
	/*---- para agregar item ----*/
	$mylink = $wpdb->get_row( "SELECT id FROM wp_crm_wish_list WHERE user_id = ".$user_id." AND prod_id = ".$prod_id."" );
		if($mylink){
			//echo "ya existe";
			$mssg = "<span class='ok'>Producto ya agregado</span>";
		}else{
			//echo "agregar";
			if($prod_id > 0){
			$now = current_time('mysql', false);
			$wpdb->insert( 
				'wp_crm_wish_list', 
				array( 
					'user_id' => $user_id, 
					'prod_id' => $prod_id,
					'dateadded' => $now
				), 
				array( 
					'%d', 
					'%d',
					'%s'
				) 
			);
			$mssg = "<span class='ok'>Producto agregado</span>";
			}
			
		}
		echo $mssg;	
	}
}else{
	if(isset($_POST["f"])){
		if($_POST["f"] == 'add'){
			$mssg = "<span class='error'>Debes estar logueado</span>";
			echo $mssg;	
		}
	}
}

if(isset($_POST["op"])){
	if($_POST["op"] == 'count' && is_user_logged_in()){
		$result = $wpdb->get_row( "SELECT count(*) as tot FROM wp_crm_wish_list WHERE user_id = ".$user_id." " );
		echo $result->tot;
	}
}


?>