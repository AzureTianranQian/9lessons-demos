<?php

function split_tiny_function($update)    
{

//----------------------------------------------------------------------
   		$http= substr_count($update,"http://");
		$www=substr_count($update,"www.");
		$htp=substr_count($update,"http//");
		if($http==1) {
			$str="http://";
			$h=1;
			}
		if($www==1) {
			$str="www.";
			$w=1;
			}
			if($h==1 && $w==1) {
				$str='http://www.';
				}
		if($htp==1) {
		$comb_str=$update;
			}

			$fa=explode($str,$update);
			$cnt_fa=count($fa);
			$se=explode(" ",$fa[1]);
			$cnt_se=count($se);

		 for($i=1;$i<=$cnt_se;$i++) 
		    {
			$sep.=$se[$i].' ';
			}
//
         $split_url=$str.$se[0];
       
		if($split_url=='')
			{

			$final_update=$update;
			echo $final_update;
			
			}
			else
			{


				if(strlen($split_url)>=30){
			
				
				
					$tiny = tiny_url($split_url);
					
					$final_update=$fa[0].'<a href="'.$tiny.'" target="_blank">'.$tiny.'</a>'.$sep;
					echo $final_update;
					}
				else{
					$final_update=$fa[0].'<a href="'.$split_url.'" target="_blank">'.$split_url.'</a>'.$sep;
					echo $final_update;
					
 					}


	}
	 
}


?>
