<!DOCTYPE html>
<html>
    <body>
    
        <?php
            ini_set('display_errors',0);
            
                if( isset( $_REQUEST['calculate'] ))
                {
                $operator=$_REQUEST['operator'];
                $number1 = $_REQUEST['first_value'];
                $number2 = $_REQUEST['second_value'];
                
                if($operator=="+")
                {
                $res= $number1+$number2;
                }
                if($operator=="-")
                {
                $res= $number1-$number2;
                }
                if($operator=="*")
                {
                $res =$number1*$number2;
                }
                if($operator=="/")
                {
                $res= $number1/$number2;
                }
                
                if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
                {
                echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
                }
                }
        ?>
            
            <form>
                <table style="border:groove #00FF99">
                
                <tr>
                    <td style="background-color:aliceblue; color:black; font-family:'sans serif'">Enter Number</td>
                    <td colspan="1">
                    <input name="first_value" type="text" style="color:grey"/></td>
                </tr>
                
                <tr>
                    <td style="color:grey; font-family:'sans serif'">Select Operator</td>
                    <td>
                    <select name="operator" style="width: 63px">
                        <option>+</option>
                        <option>-</option>
                        <option>*</option>
                        <option>/</option>
                    </select></td>
                </tr>
                
                <tr>
                    <td style="background-color:alicblue; color:black; font-family:'sans serif'">Enter Number</td>
                    <td class="auto-style5">
                    <input name="second_value" type="text"  style="color:grey"/></td> 
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>	 
                </tr>
                
                <tr>
                    <td style="background-color:alicblue;color:black">Output = </td>
                    <td style="color:darkblue"><?php echo $res;?></td>
                </tr>	
                
                </table>
            </form>
    
    </body>
</html>

// Simple Calculator
// Programmer: Murtaza Kafka
// Forked from: W3Schools
