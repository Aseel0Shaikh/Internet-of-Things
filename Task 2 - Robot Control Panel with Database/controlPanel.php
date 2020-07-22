
<!DOCTYPE html>
    
    <html>
    <head>

         <style>
               .h1{
                text-align: center;
                }
                
                .d{
                    position: absolute;
                    grid:60px 60px 60px / 120px 120px 120px;
                    grid-column-gap: 20px;
                    grid-row-gap: 20px;
                    display:grid;
                    left: 35%;
                    top: 35%;
                   
                    
                }
            
            
                
                .left{
                    font-size: 24px;
                    grid-row: 2;
                    grid-column: 1;
                }
                
                .forward{
                    font-size: 24px;
                    grid-row: 1;
                    grid-column: 2;
                }
                
                .stop{
                    background-color: red;
                    font-size: 24px;
                    color: white;
                    grid-row: 2;
                    grid-column: 2;
                }
                
                .backward{
                    font-size: 24px;
                    grid-row: 3;
                    grid-column: 2;
                }
                
                .right{
                    font-size: 24px;
                    grid-row: 2;
                    grid-column: 3;
                }
            }
    </style>
    </head>
     
    <body>
        <h1 class="h1"> Robot Control Panel</h1>
        <form action="" method="post">
        <div class="d">
             
                 
            <button name= "L" class="left">Left</button>
            <button name= "F" class="forward">Forward</button>
            <button name= "S" class="stop">Stop</button>
            <button name= "B" class="backward">Backward</button>
            <button name= "R" class="right">Right</button>
            
            
        </div>
        </form>
    </body>
    </html>



<?php

$conn= mysqli_connect("localhost", "root", "", "task3");

if($conn -> connect_error){
    die($conn -> connect_error);
}


$result = '';

    if(isset($_POST["F"])){
        $result = 'F';
        $sql = "INSERT INTO `controlPanel` (`Forward`, `Backward`, `Stop`, `Right`, `Left`) VALUES ('$result', '', '', '','')";
        
        if(!mysqli_query($conn, $sql)){
        mysqli_error($conn);
        }
        
        mysqli_close($conn);
    }
       
        elseif(isset($_POST["B"])){
        $result = 'B';
        $sql = "INSERT INTO `controlPanel` (`Forward`, `Backward`, `Stop`, `Right`, `Left`) VALUES ('', '$result', '', '','')";
        
        if(!mysqli_query($conn, $sql)){
        mysqli_error($conn);
        }
        
        mysqli_close($conn);
    }
        
      elseif(isset($_POST["R"])){
        $result = 'R';
        $sql = "INSERT INTO `controlPanel` (`Forward`, `Backward`, `Stop`, `Right`, `Left`) VALUES ('', '', '', '$result','')";
        
        if(!mysqli_query($conn, $sql)){
        mysqli_error($conn);
        }
        
        mysqli_close($conn);
    }
    
    elseif(isset($_POST["L"])){
        $result = 'L';
        $sql = "INSERT INTO `controlPanel` (`Forward`, `Backward`, `Stop`, `Right`, `Left`) VALUES ('', '', '', '','$result')";
        
        
        if(!mysqli_query($conn, $sql)){
        mysqli_error($conn);
        }
        
        mysqli_close($conn);
    }

?>


