<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"timetable");
$class='';
$subject='';
$credit='';



if (isset($_GET["class"])) 
{ 
$class=$_GET["class"]; 
} 

if (isset($_GET["subject"])) 
{ 
$subject=$_GET["subject"]; 
} 

if (isset($_GET["credit"])) 
{ 

$credit=$_GET["credit"];
} 


if($class!="")
{
	$res=mysqli_query($link,"select * from subject where class_id=$class");
	
	echo "<select id='subjectdd' name='subject_name' onchange='change_state()'>";
	echo "<option>";	echo "Select";	echo "</option>";
	while($row=mysqli_fetch_array($res))
	{	
	echo "<option value='$row[name]' >"; echo $row["name"]; echo "</option>";	
	}
	echo "</select>";
} 


if($subject!="")
{
	$res=mysqli_query($link,"select * from professor");
	//$res=mysqli_query($link,"select * from professor where subject_id=$subject");
	echo "<select id='professord' name='prof_name'>";
	echo "<option>";	echo "Select";	echo "</option>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<option value='$row[name]' >";
	echo $row["name"]; echo "</option>";
	}
echo"</select>";
}
if($credit!="")
{
	if($credit==1)
	{
	echo "<select id='creditd' name='time_value'>";
	echo "<option>";	echo "Select";	echo "</option>";
	
	echo "<option value='89'>"; echo "8:00-9:00"; echo "</option>";
	echo "<option value='910'>";echo "9:00-10:00"; echo "</option>";
	echo "<option value='1011'>";echo "10:00-11:00"; echo "</option>";
	echo "<option value='1112'>";echo "11:00-12:00"; echo "</option>";
	echo "<option value='121'>";echo "12:00-1:00"; echo "</option>";
	echo "<option value='23'>";echo "2:00-3:00"; echo "</option>";
	echo "<option value='34'>";echo "3:00-4:00"; echo "</option>";
	echo "<option value=45'>";echo "4:00-5:00"; echo "</option>";
	echo "<option value='56'>";echo "5:00-6:00"; echo "</option>";
	echo"</select>";
	}
	
	
	if($credit==2)
	{
	echo "<select id='creditd' name='time_value'>";
	echo "<option>";	echo "Select";	echo "</option>";
	
	echo "<option value='89'>"; echo "8:00-10:00"; echo "</option>";
	echo "<option value='910'>";echo "9:00-11:00"; echo "</option>";
	echo "<option value='1011'>";echo "10:00-12:00"; echo "</option>";
	echo "<option value='1112'>";echo "11:00-1:00"; echo "</option>";
	echo "<option value='23'>";echo "2:00-4:00"; echo "</option>";
	echo "<option value='34'>";echo "3:00-5:00"; echo "</option>";
	echo "<option value='45'>";echo "4:00-6:00"; echo "</option>";
	echo"</select>";
	}
	
}


?>