<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

    <?php
	
	//$url_prefix="http://org.eclipse.ui.intro/openBrowser?url=";
	
	$url_prefix='';
	
    $hostname="hurtrankdb.cpk4jjb2mzwd.us-west-2.rds.amazonaws.com";
    $username="hurtuser";
    $password="hurtrank";
    $database="helppages";

    mysql_connect($hostname,$username,$password);
    @mysql_select_db($database) or die( "Unable to select database");
    $query="SELECT * FROM helplinks ORDER BY Palette_Type, Palette_Item";
	
	
    $result=mysql_query($query);

    //$num=mysql_numrows($result);

	?>
	
	<head></head><body>
 	<h1>Generated Dynamic Help Pages</h1>
	<ul><?php
	while ($row=mysql_fetch_array($result,MYSQL_ASSOC)) {
		?> 
		<li><a target="helpframe" 
		href='page.php?Palette_Type=<?= $row["Palette_Type"]?>&Palette_Item=<?= $row["Palette_Item"]?>'><?= $row["Palette_Type"] . " / " . $row["Palette_Item"]?></a></li>  
<?php
		}
?>
    	
		
	  
	  </ul>
  </body>
</html>

<?php
    mysql_close();
	?>
	
