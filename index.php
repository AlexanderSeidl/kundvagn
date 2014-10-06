<!DOCTYPE html>
 <?php
        
       session_Start();
       if(!isset($_SESSION["vagn"])){
           $_SESSION["vagn"] = array();
       }      
       else{}
       
//       if($_GET["id"]==$_SESSION["vagn"]["produktid"]){
//           foreach(){}
//       }
//       else{
//           
//       }
       if (isset($_GET["rensa"])) {
       unset ($_SESSION["vagn"]);
       header("Location: index.php");
       exit();
       }
       
       if(isset($_GET["action"]) and $_GET["action"] == "add"){
           $_SESSION["vagn"][]=array ("produktid"=>$_GET["id"],"antal"=>$_GET["antal"]);           
       }
       var_dump($_GET);
       echo "<br>";
       var_dump($_SESSION["vagn"]);
       if(isset($_GET["id"])){
           foreach($_SESSION["vagn"] as $produkt){
               
           }
            $_SESSION["vagn"][] = array ("produktID"=>1, "pris" => 199, "beskrivning" => "En gamingdator som är bättre än en konsoll");
            $_SESSION["vagn"][] = array ("produktID"=>2, "pris" => 299, "beskrivning" => "En gamingdator som är mycket bättre än en konsoll");
            $_SESSION["vagn"][] = array ("produktID"=>3, "pris" => 399, "beskrivning" => "En gamingdator som är jättemycket bättre än en konsoll");
            $_SESSION["vagn"][] = array ("produktID"=>4, "pris" => 499, "beskrivning" => "En gamingdator som är obeskrivligt mycket bättre än en konsoll");
            $_SESSION["vagn"][] = array ("produktID"=>5, "pris" => 599, "beskrivning" => "En gamingdator som är infernaliskt mycket bättre än en konsoll"); 
       }    
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kundvagn</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table>  
            <form>
                <tr>
                    <td>
                        <p>Produkt: lasagne</p>
                        <input type="hidden" name="id" value="1">
                    </td>
                    <td>
                        <input type="text" name="antal" value="">
                    </td>
                    <td>
                        <input type="submit" name="action" value="add">
                    </td>
                </tr>
            </form>
            <form>
                <tr>
                    <td>
                        <p>Produkt: kyckling</p>
                        <input type="hidden" name="id" value="2">
                    </td>
                    <td>
                        <input type="text" name="antal" value="">
                    </td>
                    <td>
                        <input type="submit" name="action" value="add">
                    </td>
                </tr>
            </form>
            <form>
                <tr>
                    <td>
                        <p>Produkt: tiamat</p>
                        <input type="hidden" name="id" value="3">
                    </td>
                    <td>
                        <input type="text" name="antal" value="">
                    </td>
                    <td>
                        <input type="submit" name="action" value="add">
                    </td>
                </tr>
            </form>
            <form>
                <tr>
                    <td>
                        <p>Produkt: gurka</p>
                        <input type="hidden" name="id" value="4">
                    </td>
                    <td>
                        <input type="text" name="antal" value="">
                    </td>
                    <td>
                        <input type="submit" name="action" value="add">
                    </td>
                </tr>
            </form>
            <form>
                <tr>
                    <td>
                        <p>Produkt: baguette</p>
                        <input type="hidden" name="id" value="5">
                    </td>
                    <td>
                        <input type="text" name="antal" value="">
                    </td>
                    <td>
                        <input type="submit" name="action" value="add">
                    </td>
                </tr>
            </form>
            <form>
                <tr>
                    <td>
                        <input type="submit" name="rensa" value="Rensa">
                    </td>
                    <td>
                        <input type="submit" name="skriv ut" value="Visa varukorg">
                    </td>
                </tr>
            </form>
        </table>    
    </body>
</html>
