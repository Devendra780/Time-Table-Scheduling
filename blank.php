<?php
	session_start();
	if(!$_SESSION['$user'])
	{
		header('location:login.php');
	}
?>
<?php
$ORG="MNNIT Allahabad";
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['emptytable']))
{
$conn=mysqli_connect("localhost","root","","timetable");
$sql="UPDATE `savedtable` SET `89` = '', `910` = '', `1011` = '', `1112` = '', `121` = '', `23` = '', `34` = '', `45` = '', `56` = '' WHERE `day_name` = 'Monday' OR `day_name` = 'Tuesday' OR `day_name` = 'Wednesday' OR `day_name` = 'Thursday' OR `day_name` = 'Friday'"; 
$sql2="UPDATE `savedduration` SET `89` = '', `910` = '', `1011` = '', `1112` = '', `121` = '', `23` = '', `34` = '', `45` = '', `56` = '' WHERE `day_name` = 'Monday' OR `day_name` = 'Tuesday' OR `day_name` = 'Wednesday' OR `day_name` = 'Thursday' OR `day_name` = 'Friday';";
mysqli_query($conn,$sql2);
if($conn->query($sql)===TRUE || $conn->query($sql)===TRUE)
{
	 header("Location:blank.php");
}
else
{
	echo "Error: " .$sql . "<br>" . $conn->error;
}
mysqli_close($conn);
}

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['savetdata']))
{
$conn=mysqli_connect("localhost","root","","timetable");
$day_name=$_POST["day_name"];
$time_value=$_POST["time_value"];
$class_name=$_POST["class_name"];
$get_class_name="SELECT name FROM class WHERE id='$class_name'";
	$clsname=mysqli_query($conn,$get_class_name);
	$clsrow=$clsname->fetch_assoc();
	$class_name_got=$clsrow["name"];
$subject_name=$_POST["subject_name"];
$prof_name=$_POST["prof_name"];

$dur_time=$_POST["dur_time"];
$venue=$_POST["venue_name"];

$sql="UPDATE `savedtable` SET `$time_value`='$subject_name<br>$prof_name<br>$venue' WHERE day_name='$day_name'";
$sql2="UPDATE `savedduration` SET `$time_value`='$dur_time' WHERE day_name='$day_name'";
mysqli_query($conn,$sql2);
if($conn->query($sql)===TRUE || $conn->query($sql2)===TRUE)
{
	 header("Location:blank.php");
}
else
{
	echo "Error: " .$sql . "<br>" . $conn->error;
	echo "Error2: " .$sql2 . "<br>" . $conn->error;
}
mysqli_close($conn);

 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>ONLINE TIMETABLE GENERATOR |  <?php echo $ORG; ?></title>

    <link rel="stylesheet" href="style1.css" type="text/css" media="screen" />
	<style>
select {max-width:60px;}
</style>
    <script type="text/javascript" src="script.js"></script>
    <script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open();
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>
</head>
<body>
<div id="art-page-background-simple-gradient">
        <div id="art-page-background-gradient"></div>
    </div>
    <div id="art-main">
        <div class="art-sheet">
            <div class="art-sheet-tl"></div>
            <div class="art-sheet-tr"></div>
            <div class="art-sheet-bl"></div>
            <div class="art-sheet-br"></div>
            <div class="art-sheet-tc"></div>
            <div class="art-sheet-bc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                <div class="art-header">
                    <div class="art-header-png"></div>
                    <div class="art-header-jpeg"></div>
                    <div class="art-logo">
                        <h1 id="name-text" class="art-logo-name"><a href="./">ONLINE TIMETABLE GENERATOR</a></h1>
                    </div>
                </div>
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		<li>
                			<a href="./" class="active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li>
                		<li>
                			<a href="http://www.mnnit.ac.in"><span class="l"></span><span class="r"></span><span class="t">MNNIT Website</span></a>
                		</li>
						<li>
                			<a href="logout.php" class="active"><span class="l"></span><span class="r"></span><span class="t">Logout</span></a>
                		</li>
                	</ul>
                </div>
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        
						
						
						
                        <div class="art-layout-cell art-content">
                            
								
								
                            <div class="art-post-inner art-article">
							<h3 style="text-align:center">Time Table</h3>
							
<script src="jquery.min.js"></script>
<style>#table, #table th, #table td {
    border: 1px solid;
}</style>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"timetable");
?>

<div>
<form name="form1" action="" method="post">
<table>
<tr>
<td>Select day:</td>
<td><select id="dayydd" name="day_name">
<option value=''>Select</option>
<option value='Monday'>MON</option>
<option value='Tuesday'>TUE</option>
<option value='Wednesday'>WED</option>
<option value='Thursday'>THU</option>
<option value='Friday'>FRI</option>
</select>
</td>


<td> &nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td>Select class:</td>
<td><select id="classdd" name="class_name" onChange="change_class()">
<option>Select</option>
<?php 
$res=mysqli_query($link,"select * from class");
while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>

<?php
}
?>
</select>
</td>
<td> &nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td>Select Subject:</td>
<td> <div id="subject">
<select>
<option>Select</option>
</select>
</div>
</td>
<td> &nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td>Select Professor:</td>
<td> <div id="professor" name="prof_name">
<select>
<option>Select</option>
</select>
</div>
</td>
<td>Select Venue:</td>
 <td>  <div id="venue" name="venue">
 <select name="venue_name" >
<option>Select</option>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"timetable");
$res=mysqli_query($link,"select name from venue");
while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row["name"];?>"><?php echo $row["name"];?></option>

<?php
}
?>

</select>
</div>
</td>
<td> &nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td>Lecture  duration time:</td>
<td> <div id="credit">
<select id="creditdd" name="dur_time" onChange="change_credit()">
<option>Select</option>
<option value="1">1</option>
<option value="2">2</option>

</select>
</div>
</td>

<td> &nbsp&nbsp&nbsp&nbsp&nbsp</td>

<td>Select hours:</td>
<td> <div id="hour">
<select id="hourdd">
<option>Select</option>
</select>
</div>
</td>

<td> &nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td> <input type="submit" value="Save" name="savetdata">
</td>
</tr>



</table>
</form>
</div>

<div id="printableArea">
<?php $c="MCA"?>
<h3 style="text-align:center;">Time Table</h3>

<table id="table" border="1" style="width:100%;">
<tr>
<th></th>
<th>8:00-9:00</th>
<th>9:00-10:00</th>
<th>10:00-11:00</th>
<th>11:00-12:00</th>
<th>12:00-1:00</th>
<th>1:00-2:00</th>
<th>2:00-3:00</th>
<th>3:00-4:00</th>
<th>4:00-5:00</th>
<th>5:00-6:00</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","timetable");
$sql="SELECT * FROM `savedtable` ORDER BY id";
$sql2="SELECT * FROM `savedduration` ORDER BY id";
	$result=mysqli_query($conn,$sql);
	$result2=mysqli_query($conn,$sql2);
	if($result->num_rows>0 && $result2->num_rows>0)
	{
		$flag=1;
		while(($row=$result->fetch_assoc()) && ($row2=$result2->fetch_assoc()))
		{
			?>
<tr>
<th><?php echo $row["day_name"]; ?></th>
<td colspan=<?php echo $row2["89"]; ?>><?php echo $row["89"]; ?></td>
<?php if($row2["89"]!=2){?>
<td colspan=<?php echo $row2["910"]; ?>><?php echo $row["910"]; ?></td>
<?php } if($row2["910"]!=2){?>
<td colspan=<?php echo $row2["1011"]; ?>><?php echo $row["1011"]; ?></td>
<?php } if($row2["1011"]!=2){?>
<td colspan=<?php echo $row2["1112"]; ?>><?php echo $row["1112"]; ?></td>
<?php } if($row2["1112"]!=2){?>
<td colspan=<?php echo $row2["121"]; ?>><?php echo $row["121"]; ?></td>
<?php } if($flag===1){?>
<th rowspan=5>LUNCH</th>
<?php } if($row2["121"]!=2){?>
<td colspan=<?php echo $row2["23"]; ?>><?php echo $row["23"]; ?></td>
<?php } if($row2["23"]!=2){?>
<td colspan=<?php echo $row2["34"]; ?>><?php echo $row["34"]; ?></td>
<?php } if($row2["34"]!=2){?>
<td colspan=<?php echo $row2["45"]; ?>><?php echo $row["45"]; ?></td>
<?php } if($row2["45"]!=2){?>
<td colspan=<?php echo $row2["56"]; ?>><?php echo $row["56"]; ?></td>
<?php } ?>
</tr>
	<?php $flag++; }} ?>
</table>
<style>
td {
    text-align: center !important;
    padding: 5px 0 !important;
    vertical-align: middle !important;
}
</style>
</div>
<span style=" display: inline-block; ">
<form name="form2" action="" method="post">
<input type="submit" value="Clear Timetable" name="emptytable">
</form>
</span>
<span>
<input type="button" onclick="printPage('printableArea')" value="Print Timetable" />
<span>
<script>

	var pdayn = '';
	
	var pcontent_1 = '', pcontent_2 = '', pcontent_3 = '', pcontent_4 = '', pcontent_5 = '', pcontent_6 = '', pcontent_7 = '', pcontent_8 = '', pcontent_9 = '';
function display()
{
	// if(document.getElementById('class').innerHTML == 'Submit'){
	var day_selector = document.getElementById('dayydd');
    var daydd = day_selector[day_selector.selectedIndex].text;
	
	var selector = document.getElementById('classdd');
    var classdd = selector[selector.selectedIndex].text;
	// document.getElementById('class').innerHTML = classdd;
	
	var subject_selector = document.getElementById('subjectdd');
    var subject = subject_selector[subject_selector.selectedIndex].text;
	// document.getElementById('sub').innerHTML = subject;
	
	var professor_selector = document.getElementById('professord');
    var professor = professor_selector[professor_selector.selectedIndex].text;
	// document.getElementById('prof').innerHTML = professor;
	
	var credit_selector = document.getElementById('creditdd');
    var credit = credit_selector[credit_selector.selectedIndex].text;
	// document.getElementById('dur').innerHTML = credit;
	
	var hour_selector = document.getElementById('creditd');
    var hour = hour_selector[hour_selector.selectedIndex].text;
	}

function change_class()
{

   var xmlhttp=new XMLHttpRequest();
   xmlhttp.open("GET","ajax.php?class="+document.getElementById("classdd").value,false);
   
   xmlhttp.send(null);
   
   document.getElementById("subject").innerHTML=xmlhttp.responseText;
}


function change_state()
{

   var xmlhttp=new XMLHttpRequest();
   xmlhttp.open("GET","ajax.php?subject="+document.getElementById("subjectdd").value,false);
   xmlhttp.send(null);
   document.getElementById("professor").innerHTML=xmlhttp.responseText;
	
}


function change_credit()
{

   var xmlhttp=new XMLHttpRequest();
   xmlhttp.open("GET","ajax.php?credit="+document.getElementById("creditdd").value,false);
   xmlhttp.send(null);
   document.getElementById("hour").innerHTML=xmlhttp.responseText;
	
}
</script>
                            </div>

                            		<div class="cleared"></div>
                                </div>
                            </div>
                            <div class="art-post">
                                <div class="art-post-tl"></div>
                                <div class="art-post-tr"></div>
                                <div class="art-post-bl"></div>
                                <div class="art-post-br"></div>
                                <div class="art-post-tc"></div>
                                <div class="art-post-bc"></div>
                                <div class="art-post-cl"></div>
                                <div class="art-post-cr"></div>
                                <div class="art-post-cc"></div>
                                <div class="art-post-body">
                           
							
							
							
							

                            		<div class="cleared"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cleared"></div><div class="art-footer">

                    <div class="art-footer-background"></div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
        <p class="art-page-footer">Designed by <a href="http://www.mnnit.ac.in/index.php/department/engineering/csed/csedfp">CSED MNNIT</a>.</p>
		<p class="art-page-footer">Best viewed in Google Chrome.</p>
		<p class="art-page-footer">For any queries mail to <a href="mailto: ipp@mnnit.ac.in.">ipp@mnnit.ac.in</a></p>
	</div>

</body>
</html>
