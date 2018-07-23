<?php
 $file = fopen('1.csv', 'r');
 $i=-1;
while (($line = fgetcsv($file,'0',';')) !== FALSE) {
   print_r($line);
   $x=$i;
   echo">>>>>>>>>>>>>>>>>>>".$x."<<<<<<<<<<<<<<<<<<";
   $res=$width."x".$height;
   if($x>0){
	       if($line[6]!==""){
		   $t1='( -background none -fill "rgba('.$line[12].','.$line[13].')" -font '.$line[9].' -pointsize '.$line[10].' label:"'.$line[6].'" -bordercolor "rgba('.$line[14].','.$line[15].')" -border '.$line[42].' -rotate '.$line[11].' -gravity "'.$line[39].'" ) -compose over -composite ';
		   }
		   else
		   {$t1='';}
		   if($line[7]!==""){
		   $t2='( -background none -fill "rgba('.$line[20].','.$line[21].')" -font '.$line[17].' -pointsize '.$line[18].' label:"'.$line[7].'" -bordercolor "rgba('.$line[22].','.$line[23].')" -border '.$line[43].' -rotate '.$line[19].' -gravity "'.$line[40].'" )  -compose over -composite ';
		   }
		   else
		   {$t2='';}
		   if($line[8]!==""){
		   $t3='( -background none -fill "rgba('.$line[28].','.$line[29].')" -font '.$line[25].' -pointsize '.$line[26].' label:"'.$line[8].'" -bordercolor "rgba('.$line[30].','.$line[31].')" -border '.$line[44].' -rotate '.$line[27].' -gravity "'.$line[41].'" )  -compose over -composite ';
		   }
		   else
		   {$t3='';}
	   if($line[51]==1)
	   {$circle='-fill "rgba("'.$line[52].'","'.$line[53].'")" -draw "circle 400,600 0,600"';}
	   else{$circle="";}
	   
	   if($line[1]==1){
		$command='convert input\\\"'.$line[2].'" '.$line[16].' '.$line[45].' '.$circle.' '.$t1.' '.$t2.' '.$t3.' -resize 800x1200! down\\'.$i.'.jpg';
	   }
	   if($line[1]==2){
		$command='convert input\\\"'.$line[2].'" '.$line[16].' '.$line[45].' -gravity center -crop 400x1200+0+0 +repage input\\\"'.$line[3].'"  '.$line[24].' '.$line[46].'   -gravity center -crop 400x1200+0+0 +repage -border 2  +append '.$circle.' '.$t1.' '.$t2.' '.$t3.' -resize 800x1200! down\\'.$i.'.jpg';
	   }
	   if($line[1]==3){
		 $command='convert input\\\"'.$line[2].'" '.$line[16].' '.$line[45].'  -resize 400x600! ( input\\\"'.$line[3].'" -resize 400x600! '.$line[24].'  '.$line[46].'  -border 2x0 ) +append ( input\\\"'.$line[4].'" '.$line[32].'  '.$line[47].'  -resize 800x600! -border 2x0 ) -border 0x2 -append '.$circle.' '.$t1.' '.$t2.' '.$t3.' -resize 800x1200! down\\'.$i.'.jpg';  
	   }
	   if($line[1]==4){
		 $command='convert input\\\"'.$line[2].'" '.$line[16].' '.$line[45].'  ( input\\\"'.$line[3].'" '.$line[24].' '.$line[46].'  -border 2x0 ) +append ( input\\\"'.$line[4].'" '.$line[32].' '.$line[47].'  input\\\"'.$line[5].'" '.$line[33].'  '.$line[48].'  -border 2x0 +append ) -border 0x2 -append -resize 800x1200! '.$circle.' '.$t1.' '.$t2.' '.$t3.' down\\'.$i.'.jpg';
	   }
	   if($line[1]==5){
		 $command='convert input\\\"'.$line[2].'" '.$line[16].' '.$line[45].'  -resize 400x600! ( input\\\"'.$line[3].'" '.$line[24].' '.$line[46].'  -resize 400x600! -border 2x0 ) +append ( input\\\"'.$line[4].'" '.$line[32].' '.$line[47].'  -resize 800x400! ) -border 0x2 -append ( input\\\"'.$line[5].'" '.$line[33].' '.$line[48].'  -resize 400x600! input\\\"'.$line[35].'" '.$line[37].' '.$line[49].'  -resize 400x600! -border 2x0 +append ) -border 0x2 -append -resize 800x1200! '.$circle.' '.$t1.' '.$t2.' '.$t3.'  down\\'.$i.'.jpg'; 
	   }
	   if($line[1]==6){
		 $command='convert input\\\"'.$line[2].'" '.$line[16].' '.$line[45].'  ( input\\\"'.$line[3].'" '.$line[24].' '.$line[46].'  -border 2x0 ) +append ( input\\\"'.$line[4].'" '.$line[32].' '.$line[47].'  input\\\"'.$line[5].'" '.$line[33].' '.$line[48].'  -border 2x0 +append ) -border 0x2 -append ( input\\\"'.$line[35].'" '.$line[37].' '.$line[49].'  input\\\"'.$line[36].'" '.$line[38].' '.$line[50].'  -border 2x0 +append ) -border 0x2 -append  -resize 800x1200! '.$circle.' '.$t1.' '.$t2.' '.$t3.' down\\'.$i.'.jpg'; 
	   }
	   
	   echo $command;
	   exec($command);
   }
   $i++;
}
fclose($file);
echo"###################";
	?>