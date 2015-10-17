//Include file for number_converter.php - EasyProgramming.net

<?php

         if(isset($_POST['numtype']))
        {
            
//        convert from Decimal to hex, oct, binary, and dec
         if($_POST['numtype']== 'decimal' && $_POST['outtype'] == 'hexadecimal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = strtoupper(dechex($_POST['innum']));
         }
         if($_POST['numtype']== 'decimal' && $_POST['outtype'] == 'octal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = decoct($_POST['innum']);
         }
         if($_POST['numtype']== 'decimal' && $_POST['outtype'] == 'binary')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = decbin($_POST['innum']);
         }
         if($_POST['numtype']== 'decimal' && $_POST['outtype'] == 'decimal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = $_POST['innum'];
         }
        
//            convert from binary to hex, oct, bin, dec
         if($_POST['numtype']== 'binary' && $_POST['outtype'] == 'hexadecimal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = strtoupper(dechex(bindec($_POST['innum'])));
         }
         if($_POST['numtype']== 'binary' && $_POST['outtype'] == 'octal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = decoct(bindec($_POST['innum']));
         }
         if($_POST['numtype']== 'binary' && $_POST['outtype'] == 'binary')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = $_POST['innum'];
         }
         if($_POST['numtype']== 'binary' && $_POST['outtype'] == 'decimal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = bindec($_POST['innum']);
         }
            
//        hexadecimal to hex, oct, bin, dechexadecimal  
         if($_POST['numtype']== 'hexadecimal' && $_POST['outtype'] == 'hexadecimal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = strtoupper($_POST['innum']);
         }
         if($_POST['numtype']== 'hexadecimal' && $_POST['outtype'] == 'octal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = decoct(hexdec($_POST['innum']));
         }
         if($_POST['numtype']== 'hexadecimal' && $_POST['outtype'] == 'binary')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = decbin(hexdec($_POST['innum']));
         }
         if($_POST['numtype']== 'hexadecimal' && $_POST['outtype'] == 'decimal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = hexdec($_POST['innum']);
         }
            
        //        oct to hex, oct, bin, dechexadecimal  
         if($_POST['numtype']== 'octal' && $_POST['outtype'] == 'hexadecimal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = strtoupper(dechex(octdec($_POST['innum'])));
         }
         if($_POST['numtype']== 'octal' && $_POST['outtype'] == 'octal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = $_POST['innum'];
         }
         if($_POST['numtype']== 'octal' && $_POST['outtype'] == 'binary')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = decbin(octdec($_POST['innum']));
         }
         if($_POST['numtype']== 'octal' && $_POST['outtype'] == 'decimal')   
         {
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = octdec($_POST['innum']);
         }     
        }
?>
