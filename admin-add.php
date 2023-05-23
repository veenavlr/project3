<?php  session_start(); 
ob_start();
include 'header.php';
include 'db.php';
?>
<style>
    
.container
{
    background-color:antiquewhite;  
    align-self:center;
    margin:20px 350px;
    justify-self: center;

}
h1
{
    text-align:center;
}
</style>

<div >
        <h1>Admin-Add Adventure </h1>
</div>
        
    <form  class="container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

<fieldset>
    <legend>Input details about the trip </legend>
       Heading: <input type="text" name="heading" maxlength="20"><br>
       Trip Date: <input type="date"  name="trip_date"><br>
       Duration: <input type="number"  name="duration"><br>
       Summary: <input type="text"  name="summary" maxlength="1000"><br><br>
      <button type="submit" name="submit">Submit</button>
      <br><br>
</fieldset>

</form>


<?php include'footer.php';
?>
 

 



