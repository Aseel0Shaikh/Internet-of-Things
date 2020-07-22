
<?php
$conn= mysqli_connect("localhost", "root", "", "task3");

if($conn -> connect_error){
    die($conn -> connect_error);
}


$sql = "SELECT `Right`, `Forward`, `Backward`, `Stop`, `Left` FROM `controlPanel`
            ORDER BY id DESC
            LIMIT 1";
            
            $q = mysqli_query($conn, $sql);
                
               if(!$q){
                    mysqli_error($conn);
                    }
                    
           while($row = $q->fetch_assoc()) {
                foreach ($row as $row) {
                    echo ($row);
                }
           }
           
           mysqli_close($conn);
?>