<?php 

function ajouter_excerpt(){
	if( is_shop() ){	
		the_excerpt();
	}
}