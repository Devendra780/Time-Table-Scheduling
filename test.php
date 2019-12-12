






<form action="#" method="post">
<select name="class" >
<option>Select</option>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"timetable");
$res=mysqli_query($link,"select name from class");
while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row["name"];?>"><?php echo $row["name"];?></option>

<?php
}
?>
<input type="submit" name="submit" value="Get Selected Class" />
</select>
  </form>
  <?php
if(isset($_POST['submit'])){
$selected_val = $_POST['class'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
?>