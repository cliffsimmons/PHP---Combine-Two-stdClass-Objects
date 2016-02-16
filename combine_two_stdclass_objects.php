<?php

	function combine_two_stdclass_objects( $temp_stdclass_object_1, $temp_stdclass_object_2 ) {
		 	
		//STEP 0 - Convert STD class objects to arrays
		
		$stdclass_object_as_array = array( ( array ) $temp_stdclass_object_1, ( array ) $temp_stdclass_object_2 );
		 	
		//STEP 1 - Search through $stdclass_object_1_as_array and remove key names that are empty strings.
		
		for( $i = 0; $i < count( $stdclass_object_as_array ); $i++ ) {
		
		 	$array_might_contain_empty_key_names = true;
		 	
		 	// echo "\n\n original structure of array ".$i.":\n"; // cliff testing
		 	
		 	// print_r( $stdclass_object_as_array[$i] ); //cliff testing
		 	
		 	while( $array_might_contain_empty_key_names ) {
		 		
		 		$array_might_contain_empty_key_names = false;
		 		
		 		$row_index = 0;
		 			 			
		 		foreach ($stdclass_object_as_array[$i] as $key => $value) {
				    			    
				    if( $key == '' ) {
				    	
				    	if( $row_index == 0 ) array_shift( $stdclass_object_as_array[$i] );
				    	
				    	if( $row_index == count( $stdclass_object_as_array[$i] ) - 1 ) array_pop( $stdclass_object_as_array[$i] );
				    	
				    	else $stdclass_object_as_array[$i] = array_merge( array_slice( $stdclass_object_as_array[$i], 0, $row_index ), array_slice( $stdclass_object_as_array[$i], $row_index ) );
				    	
				    	// echo "\n\n correction for array ".$i.":\n"; // cliff testing
				    	
				    	// print_r( $stdclass_object_as_array[$i] ); //cliff testing
				    	
				    	$array_might_contain_empty_key_names = true;
				    	
				    	break;
				    	
				    }
				    
				    else {
				    	
				    	next( $stdclass_object_as_array[$i] );
				    
				    }
				    			    
				    $row_index++;
				    
				}
		 		
		 	}
		
		}
		
		//STEP 2 - Combine the arrays that now no longer have empty key names and return the result as an object
		
		$stdclass_object_as_array = array_merge( $stdclass_object_as_array[0], $stdclass_object_as_array[1] );
		
		return (object) $stdclass_object_as_array;
		
	}

?>
