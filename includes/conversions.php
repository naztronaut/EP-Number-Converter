//Include file for number_converter.php - EasyProgramming.net
<?php

function convert_num($innum, $outnum)
{
            
//        convert from Decimal to hex, oct, binary, and dec
         if($innum == 'decimal' && $outnum == 'hexadecimal')   
         {
            $converted = strtoupper(dechex($_POST['innum']));
            return $converted;
         }
         elseif($innum == 'decimal' && $outnum == 'octal')   
         {
            $converted = decoct($_POST['innum']);
            return $converted;
         }
         elseif($innum == 'decimal' && $outnum == 'binary')   
         {
            $converted = decbin($_POST['innum']);
            return $converted;
         }
         elseif($innum == 'decimal' && $outnum == 'decimal')   
         {
            $converted = $_POST['innum'];
            return $converted;
         }
        
//            convert from binary to hex, oct, bin, dec
         elseif($innum == 'binary' && $outnum == 'hexadecimal')   
         {
            $converted = strtoupper(dechex(bindec($_POST['innum'])));
            return $converted;
         }
         elseif($innum == 'binary' && $outnum == 'octal')   
         {
            $converted = decoct(bindec($_POST['innum']));
            return $converted;
         }
         elseif($innum == 'binary' && $outnum == 'binary')   
         {
            $converted = $_POST['innum'];
            return $converted;
         }
         elseif($innum == 'binary' && $outnum == 'decimal')   
         {
            $converted = bindec($_POST['innum']);
            return $converted;
         }
            
//        hexadecimal to hex, oct, bin, dechexadecimal  
         elseif($innum == 'hexadecimal' && $outnum == 'hexadecimal')   
         {
            $converted = strtoupper($_POST['innum']);
            return $converted;
         }
         elseif($innum == 'hexadecimal' && $outnum == 'octal')   
         {
            $converted = decoct(hexdec($_POST['innum']));
            return $converted;
         }
         elseif($innum == 'hexadecimal' && $outnum == 'binary')   
         {
            $converted = decbin(hexdec($_POST['innum']));
             return $converted;
         }
         elseif($innum == 'hexadecimal' && $outnum == 'decimal')   
         {
            $converted = hexdec($_POST['innum']);
             return $converted;
         }
            
        //        oct to hex, oct, bin, dechexadecimal  
         elseif($innum == 'octal' && $outnum == 'hexadecimal')   
         {
            $converted = strtoupper(dechex(octdec($_POST['innum'])));
             return $converted;
         }
         elseif($innum == 'octal' && $outnum == 'octal')   
         {
            $converted = $_POST['innum'];
             return $converted;
         }
         elseif($innum == 'octal' && $outnum == 'binary')   
         {
            $converted = decbin(octdec($_POST['innum']));
             return $converted;
         }
         elseif($innum == 'octal' && $outnum == 'decimal')   
         {
            $converted = octdec($_POST['innum']);
             return $converted;
         }     
}
?>
