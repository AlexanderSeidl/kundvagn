<!DOCTYPE html>
 <?php
        
       session_Start();
       
       $_SESSION["vagn"] = array();
       
       $_SESSION["vagn"][] = array ("produktID"=>1, "pris" => 199, "beskrivning" => "En gamingdator som är bättre än en konsoll");
       $_SESSION["vagn"][] = array ("produktID"=>2, "pris" => 299, "beskrivning" => "En gamingdator som är mycket bättre än en konsoll");
       $_SESSION["vagn"][] = array ("produktID"=>3, "pris" => 399, "beskrivning" => "En gamingdator som är jättemycket bättre än en konsoll");
       $_SESSION["vagn"][] = array ("produktID"=>4, "pris" => 499, "beskrivning" => "En gamingdator som är obeskrivligt mycket bättre än en konsoll");
       $_SESSION["vagn"][] = array ("produktID"=>5, "pris" => 599, "beskrivning" => "En gamingdator som är infernaliskt mycket bättre än en konsoll");
       
       
       
           
       echo $_SESSION["vagn"][4]["produktID"];
       
       
       
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>  
        <form>
            <tr>
                <td>
                    <p>Produkt: 33, 32</p>
                    <input type="hidden" name="id" value="33">
                </td>
                <td>
                    <input type="text" name="antal" value="1">
                </td>
                <td>
                    <input type="submit" name="action" value="add">
                </td>
            </tr>
        </form>
        </table>    
       
    </body>
</html>
