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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>ONLINE TIMETABLE GENERATOR |  <?php echo $ORG; ?></title>

    <link rel="stylesheet" href="style1.css" type="text/css" media="screen" />

    <script type="text/javascript" src="script.js"></script>
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
							<h3 style="text-align:center">Add  Venue</h3>
							<div align="center">
							<form name="form1" action="" method="post">
		
		
							Venue Name:
							<input type="text" name="venue" id="venue" >
  
							Capacity:
							<input type="text" name="capacity" id="capacity">

							<input type="submit" value="Submit">
  
							</form> 
							
						</div>						
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"timetable");

$sql="SELECT id FROM venue";
$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);
$id=0;
if($count==0)
	$id=10000;
else
{
$sql="SELECT id,name FROM venue ORDER BY id";

if ($result=mysqli_query($link,$sql))
  {
	while ($row=mysqli_fetch_row($result))
    {
	$id=$row[0];	
   
    } 
    mysqli_free_result($result);
  }
}

if($_POST)
	{
		$venue=$_POST['venue'];	
		$capacity=$_POST['capacity'];
		$sql = "INSERT INTO venue (id, name,capacity) VALUES ($id+1, '$venue',$capacity)";
		if(mysqli_query($link, $sql)){
echo '<script type="text/javascript">

          window.onload = function () { alert("Venue inserted successfully."); }

</script>';
			} 	
			else{
			echo '<script type="text/javascript">

          window.onload = function () { alert("Venue inserted unsuccessful."); }

</script>';
			}
			
			
	}

?>							
			
		




					
							
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
