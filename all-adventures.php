<?php  session_start();
        
        include 'db.php'; 
        include 'veena.php';?>
         <!---table construction-->
       <style>
        
  .city
  {
    color:rgb(22, 162, 46) ;
    padding-left:  5px;
    font-size: 25px;
    padding-top: 0px;
    padding-bottom: 5px;
    text-align: left;
    margin-bottom: 5px;
    text-decoration-line: underline;
    text-decoration-color:rgb(22, 162, 46);
    text-transform: capitalize;

      }
  #summary
  {
    font-size: 20px;
    padding-left: 5px;
    padding-top: 5px;
    padding-bottom: 0;
    text-align: left;
    margin:0;
  }
  p{
    padding-left: 5px;
    text-align: left;
    margin-top: auto;
    display: block;
    align-self: left;
    overflow-wrap: break-word;

  }
  table{
    padding-top:0px;
  }
  </style>
    <?php
         
    
         $servername="localhost";
         $username="id20610698_veena";
         $password="Veena@123";
         $dbname="id20610698_add_adventure";
         // open mysql connection
         $conn=new mysqli($servername,$username,$password,$dbname);
         // proceed if connection healthy
         if($conn->connect_error)
         {
             die("Mysql connection failed:".$conn->connect_error);
         }
// SQL query to select data from database                                                       
              
$conn=new mysqli($servername,$username,$password,$dbname);
  
$stmt1 = " SELECT * FROM add_event ";
$result= $conn->query($stmt1);
if($result->num_rows>0)
{
                         while($rows=$result->fetch_assoc())
                      {
                        ?>
                       <table>                          
                    <tr>
                     <th class="city"><?php echo $rows['heading'];?></th><br>
                      </tr><br>
                    <tr >
                     <td>Trip date : <?php echo $rows['trip_date'];?></td>
                      </tr>
                      <tr>
                    <td>Duration  : <?php echo $rows['duration'];?> days</td>
                      </tr>
                      <tr>
                    <th id="summary">Summary   </th>
                      </tr>
                      <tr>
                    <td><p><?php echo $rows['summary'];?></p></td> 
                    </tr>
                      </table>
                    <?php
                    }
                }
                else{
                    echo "0 results";
                }
    $conn->close();
            
                    ?>
                    <?php include'footer.php';?>

                    
                
                    
                
            
            