<!--Script created by Nazmus at www.EasyProgramming.net -->
//include function file for conversion
<?php include("includes/conversions.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet" />
<body>
    <div class="container">
    <div class="row container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
<h2>EP Number Converter</h2>

<!--        HTML Form for end user - reloads on same page -->
<form role="form" method="POST" action="<?php htmlentities($_SERVER["PHP_SELF"])?>">
    
<!--    Order selection - ascending, descending, or random-->
    <h3>Is your number a decimal, hexadecimal, octal, or binary?</h3>
    <div class="form-group">
        <div class="radio">
            <label class="radio-inline">
                <input type="radio" name="numtype" value="decimal" required <?php if(isset($_POST['numtype'])){if($_POST['numtype'] == "decimal") echo 'checked';}?>>Decimal</label>
            <label class="radio-inline">
                <input type="radio" name="numtype" value="hexadecimal" <?php if(isset($_POST['numtype'])){if($_POST['numtype'] == "hexadecimal") echo 'checked';}?>>Hexadecimal</label>
            <label class="radio-inline">
                <input type="radio" name="numtype" value="octal" <?php if(isset($_POST['numtype'])){if($_POST['numtype'] == "octal") echo 'checked';}?>>Octal</label>
            <label class="radio-inline">
                <input type="radio" name="numtype" value="binary" <?php if(isset($_POST['numtype'])){if($_POST['numtype'] == "binary") echo 'checked';}?>>Binary</label>
        </div>
    </div>
    
    <div class="form-group form-group-lg">
        <label for="innum">Enter your number:</label>
        <input class="form-control" type="text" min="6" max="255" name="innum" placeholder="Enter Value to Convert" value="<?php if(isset($_POST['innum'])){echo $_POST['innum'];}?>" required>
        <br />
    </div>
    <h3>What do you want to conver your number to?</h3>
        <div class="form-group">
        <div class="radio">
            <label class="radio-inline">
                <input type="radio" name="outtype" value="decimal" required <?php if(isset($_POST['outtype'])){if($_POST['outtype'] == "decimal") echo 'checked';}?>>Decimal</label>
            <label class="radio-inline">
                <input type="radio" name="outtype" value="hexadecimal" <?php if(isset($_POST['outtype'])){if($_POST['outtype'] == "hexadecimal") echo 'checked';}?>>Hexadecimal</label>
            <label class="radio-inline">
                <input type="radio" name="outtype" value="octal" <?php if(isset($_POST['outtype'])){if($_POST['outtype'] == "octal") echo 'checked';}?>>Octal</label>
            <label class="radio-inline">
                <input type="radio" name="outtype" value="binary" <?php if(isset($_POST['outtype'])){if($_POST['outtype'] == "binary") echo 'checked';}?>>Binary</label>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default" name="submit">Convert</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </div>
</form>
<!--End form-->

<?php

// Activates code block if submit button is clicked
    if(isset($_POST['submit'])){
   //if Numtype is passed - will not process otherwise
    if(isset($_POST['numtype']))
        {
        //Store input type and output type and call convert_num function - it will return the converted value
            $innum = $_POST['numtype'];
            $outnum = $_POST['outtype'];
            $converted = convert_num($innum, $outnum);
        }

?>
<!--Form input to display sorted values - only appears if submitted -->
        
        <div class="form-group form-group-lg">
        <label for="outnum">Your Output:</label>
            <input class="form-control" type="text" min="6" max="255" name="outnum" value="<?php echo $converted;?>">
        <br />
    </div>

<?php
	echo '<h3>Your number has been converted from ' . $innum . ' to ' . $outnum .'.</h3><br />';
    }
?>
</div> 
    </div>
    </div>
</body>
    
</html>
