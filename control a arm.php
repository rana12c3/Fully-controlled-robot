<html>
    <head> 
        <meta charset="utf-8">
    
        <title>Motors</title>
    </head>
    <body>
        
   
        
        <form  method="post">
        Motor1 <input type="integer" name="mot1"> <br/>
        Motor2 <input type="integer" name="mot2"> <br/>
        Motor3 <input type="integer" name="mot3"> <br/>
        Motor4 <input type="integer" name="mot4"> <br/>
        Motor5 <input type="integer" name="mot5"> <br/>
        Motor6 <input type="integer" name="mot6"> <br/>
            <input type="submit">
        </form>
        
        
     

        <?php
           
        
        $motor1 = $_POST["mot1"];
        $motor2 = $_POST["mot2"];
        $motor3 = $_POST["mot3"];
        $motor4 = $_POST["mot4"];
        $motor5 = $_POST["mot5"];
        $motor6 = $_POST["mot6"];
          
        $connection = new mysqli("localhost","root","","motors");
        if(isset($_POST['save'])) 
{
        $stmt = $connection->prepare("insert into motors(Motor1,Motor2,Motor3,Motor4,Motor5,Motor6) values(?,?,?,?,?,?);");
       $stmt->bind_param("iiiiii",$motor1,$motor2,$motor3,$motor4,$motor5,$motor6);
            
        $stmt->execute();
        echo "The data is inserted correctly..";
        }
        
        
        else { echo "try again";}
        
        
        ?>
        
    </body>
</html>