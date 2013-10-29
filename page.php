<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

    <?php
	
	// whether to enable url_prefix depends on exactly how you're planning to use these files. 
        // Look up org.eclipse.ui.intro in the Eclipse documentation to understand
	// how this is properly used.
	//$url_prefix='';
	$url_prefix="http://org.eclipse.ui.intro/openBrowser?url=";
	
	$global_url=!empty($_GET["global"]);
	$global_connectors = !empty($_GET["connectors"]);
	
	//$target_clause=" target='docframe' ";
	$target_clause="";
    $dbhost="hurtrankdb.cpk4jjb2mzwd.us-west-2.rds.amazonaws.com:3306";
    $username="hurtuser";
    $password="hurtrank";
    $database="helppages";
	

    mysql_connect($dbhost,$username,$password);
    @mysql_select_db($database) or die( "Unable to select database");
    $query="SELECT * FROM helplinks where Palette_Item='" . $_GET["Palette_Item"]  . "' AND Palette_Type='" . $_GET["Palette_Type"] . "'";
	
	
    $result=mysql_query($query);

    $num=mysql_numrows($result);

    mysql_close();
    if ($num==0) {
    echo "no rows found";
    }


    $ptype=mysql_result($result,0,"Palette_Type");
	$ptype=rtrim($ptype,"s");
	
	
	$item=mysql_result($result,0,"Palette_Item");
	$desc=mysql_result($result,0,"Description");
	
	if ($global_connectors) { 
		$desc="The $item connector is used to provide global configuration data for the $item endpoint.</p><p> For details on the available parameters, see the $item endpoint primary documentation below. </p><p>For details on global elements, see the discussion of Working with Global Elements below.";
		}
    $studio_title=mysql_result($result,0,"Studio_Page_Title");
    $studio_url=mysql_result($result,0,"Studio_Page_URL");

	if (empty($studio_url)) {
		$studio_title=mysql_result($result,0,"Studio_Section_Title");
		$studio_url=mysql_result($result,0,"Studio_Section_URL");
	
		}
    $studio_title=mysql_result($result,0,"Studio_Page_Title");
    $studio_url=mysql_result($result,0,"Studio_Page_URL");


    $esb_title=mysql_result($result,0,"ESB_Page_Title");
    $esb_url=mysql_result($result,0,"ESB_Page_URL");

	if (empty($esb_url)) {
		$esb_title=mysql_result($result,0,"ESB_Section_Title");
		$esb_url=mysql_result($result,0,"ESB_Section_URL");
	
		}

    $other1_title=mysql_result($result,0,"Other1_Title");
    $other1_url=mysql_result($result,0,"Other1_URL");

    $other2_title=mysql_result($result,0,"Other2_Title");
    $other2_url=mysql_result($result,0,"Other2_URL");

    $other3_title=mysql_result($result,0,"Other3_Title");
    $other3_url=mysql_result($result,0,"Other3_URL");

	if ($global_url) {
		$other4_title="Working with Global Elements";
		$other4_url="http://www.mulesoft.org/documentation/display/current/Understand+Global+Mule+Elements";
	} else { 
		$other4_title="";
		$other4_url="";
	}

   $basic_title=mysql_result($result,0,"Basic_Title");
    $basic_url=mysql_result($result,0,"Basic_URL");

   $inter_title=mysql_result($result,0,"Intermediate_Title");
    $inter_url=mysql_result($result,0,"Intermediate_URL");

   $advanced_title=mysql_result($result,0,"Advanced_Title");
    $advanced_url=mysql_result($result,0,"Advanced_URL");

   $core1_title=mysql_result($result,0,"core1_Title");
    $core1_url=mysql_result($result,0,"core1_URL");

   $core2_title=mysql_result($result,0,"core2_Title");
    $core2_url=mysql_result($result,0,"core2_URL");

   $core3_title=mysql_result($result,0,"core3_Title");
    $core3_url=mysql_result($result,0,"core3_URL");

   $core4_title=mysql_result($result,0,"core4_Title");
    $core4_url=mysql_result($result,0,"core4_URL");

   $core5_title=mysql_result($result,0,"core5_Title");
    $core5_url=mysql_result($result,0,"core5_URL");

   $core6_title=mysql_result($result,0,"core6_Title");
    $core6_url=mysql_result($result,0,"core6_URL");

   $core7_title=mysql_result($result,0,"core7_Title");
    $core7_url=mysql_result($result,0,"core7_URL");

   $core8_title=mysql_result($result,0,"core8_Title");
    $core8_url=mysql_result($result,0,"core8_URL");

   $core9_title=mysql_result($result,0,"core9_Title");
    $core9_url=mysql_result($result,0,"core9_URL");

   $core10_title=mysql_result($result,0,"core10_Title");
    $core10_url=mysql_result($result,0,"core10_URL");

   $core11_title=mysql_result($result,0,"core11_Title");
    $core11_url=mysql_result($result,0,"core11_URL");

   $core12_title=mysql_result($result,0,"core12_Title");
    $core12_url=mysql_result($result,0,"core12_URL");


   $example1_title=mysql_result($result,0,"example1_Title");
    $example1_url=mysql_result($result,0,"example1_URL");

   $example2_title=mysql_result($result,0,"example2_Title");
    $example2_url=mysql_result($result,0,"example2_URL");

   $example3_title=mysql_result($result,0,"example3_Title");
    $example3_url=mysql_result($result,0,"example3_URL");

   $example4_title=mysql_result($result,0,"example4_Title");
    $example4_url=mysql_result($result,0,"example4_URL");

   $example5_title=mysql_result($result,0,"example5_Title");
    $example5_url=mysql_result($result,0,"example5_URL");

   $example6_title=mysql_result($result,0,"example6_Title");
    $example6_url=mysql_result($result,0,"example6_URL");

   $example7_title=mysql_result($result,0,"example7_Title");
    $example7_url=mysql_result($result,0,"example7_URL");

   $example8_title=mysql_result($result,0,"example8_Title");
    $example8_url=mysql_result($result,0,"example8_URL");

   $example9_title=mysql_result($result,0,"example9_Title");
    $example9_url=mysql_result($result,0,"example9_URL");

   $example10_title=mysql_result($result,0,"example10_Title");
    $example10_url=mysql_result($result,0,"example10_URL");

   $example11_title=mysql_result($result,0,"example11_Title");
    $example11_url=mysql_result($result,0,"example11_URL");

	$example12_title=mysql_result($result,0,"example12_Title");
    $example12_url=mysql_result($result,0,"example12_URL");


   $example13_title=mysql_result($result,0,"example13_Title");
    $example13_url=mysql_result($result,0,"example13_URL");

   $example14_title=mysql_result($result,0,"example14_Title");
    $example14_url=mysql_result($result,0,"example14_URL");

   $example15_title=mysql_result($result,0,"example15_Title");
    $example15_url=mysql_result($result,0,"example15_URL");

   $example16_title=mysql_result($result,0,"example16_Title");
    $example16_url=mysql_result($result,0,"example16_URL");

    ?>
	
<html>
<head>
	<meta content="Copyright (c) 2013 MuleSoft Inc. All rights reserved." name="copyright"/>
	<link href='../../../org.eclipse.wst.doc.user/common.css' rel="stylesheet" type="text/css"/>
	<link href='../stylesheet/helptopics.css' rel="stylesheet" type="text/css"/>
	<title>Studio 3.4 Help Page: <=$item?> (<?=$ptype?>)</title>
</head>
<body>	
    <img style="display:none" src="img/<?=$item?>.jpg" />
    <h1 class="topictitle1">
      <?=$item ?> (<?=$ptype ?><?php 
		if ($global_url) { echo "&ndash;Global Element"; }
	  ?>)
      </h1>
    <?php
	if (!empty($desc)) {
		echo '<p class="description">' . $desc . '</p>';
	} else {
	echo "The $item " . strtolower($ptype) . " is described in the documentation on mulesoft.org.";
	}
	?>
     </p>
    <h2>Primary Documentation</h2>
    <ul>
      <?php if (!empty($studio_url)) { ?>
      <li>Studio Guide: 
      <a <?= $target_clause ?> href='<?= $url_prefix ?><?=$studio_url?>'>
        <?=$studio_title?>
        </a></li><?php } ?>
      <?php if (!empty($esb_url)) { ?>
      <li>ESB Guide: 
      <a <?= $target_clause ?>   href='<?= $url_prefix ?><?=$esb_url?>'>
        <?=$esb_title?>
        </a></li><?php } ?>
    
      </ul>
	  
	  <?php if (!empty($other1_url) || !empty($other2_url) || !empty($other3_url) || $global_url) { ?>
		<h2>Additional Information</h2>
		<ul>
		<?php
		
		if (!empty($other1_url)) {
		?>
		<li><a <?= $target_clause ?>   href='<?= $url_prefix ?><?=$other1_url?>'><?=$other1_title?></a></li>
		<?php
		}
		
		if (!empty($other2_url)) {
				?><li><a <?= $target_clause ?>  href='<?= $url_prefix ?><?=$other2_url?>'> <?=$other2_title?></a></li>
		<?php
		}
		if (!empty($other3_url)) {
				?><li><a <?= $target_clause ?> href='<?= $url_prefix ?><?=$other3_url?>'> <?=$other3_title?></a></li>
		<?php
		}


	
		if (!empty($other4_url) && $global_url) {
		
				?>
				<li><a <?= $target_clause ?> href='<?= $url_prefix ?><?=$other4_url?>'> <?=$other4_title?></a></li>
		<?php		
		}
		?>
		
		
		
		
		
		</ul>
		<?php
		}
		
		
		if (!(empty($core1_url) && empty($core2_url) && empty($core3_url) && empty($core4_url)
			&& empty($core5_url) && empty($core6_url) && empty($core7_url) && empty($core8_url) 
			&& empty($core9_url) && empty($core10_url) && empty($core11_url) && empty($core12_url)
			&& empty($example1_url) && empty($example2_url) && empty($example3_url) && empty($example4_url)
			&& empty($example5_url) && empty($example6_url) && empty($example7_url) && empty($example8_url) 
			&& empty($example9_url) && empty($example10_url) && empty($example11_url) && empty($example12_url)
			&& empty($example13_url) && empty($example14_url) && empty($example15_url) && empty($example16_url))) {
		
		?>
		<h2>Examples</h2>
		<ul>
		<?php
		}
		;
		if (!empty($core1_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $core1_url ."'>" . $core1_title . "</a></li>\n";
		}
		if (!empty($core2_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $core2_url ."'>" . $core2_title . "</a></li>\n";
		}
		if (!empty($core3_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $core3_url ."'>" . $core3_title . "</a></li>\n";
		}
		if (!empty($core4_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $core4_url ."'>" . $core4_title . "</a></li>\n";
		}
		if (!empty($core5_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $core5_url ."'>" . $core5_title . "</a></li>\n";
		}
		if (!empty($core6_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $core6_url ."'>" . $core6_title . "</a></li>\n";
		}
		if (!empty($core7_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $core7_url ."'>" . $core7_title . "</a></li>\n";
		}
		
		if (!empty($core9_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $core9_url ."'>" . $core9_title . "</a></li>\n";
		}
		if (!empty($core10_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $core10_url ."'>" . $core10_title . "</a></li>\n";
		}
		if (!empty($core11_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $core11_url ."'>" . $core11_title . "</a></li>\n";
		}
		if (!empty($core12_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $core12_url ."'>" . $core12_title . "</a></li>\n";
		}
		
		if (!empty($example1_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example1_url ."'>" . $example1_title . "</a></li>\n";
		}
		if (!empty($example2_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example2_url ."'>" . $example2_title . "</a></li>\n";
		}
		if (!empty($example3_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example3_url ."'>" . $example3_title . "</a></li>\n";
		}
		if (!empty($example4_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example4_url ."'>" . $example4_title . "</a></li>\n";
		}
		if (!empty($example5_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example5_url ."'>" . $example5_title . "</a></li>\n";
		}
		if (!empty($example6_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example6_url ."'>" . $example6_title . "</a></li>\n";
		}
		if (!empty($example7_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example7_url ."'>" . $example7_title . "</a></li>\n";
		}
		
		if (!empty($example9_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example9_url ."'>" . $example9_title . "</a></li>\n";
		}
		if (!empty($example10_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example10_url ."'>" . $example10_title . "</a></li>\n";
		}
		if (!empty($example11_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example11_url ."'>" . $example11_title . "</a></li>\n";
		}
		if (!empty($example12_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example12_url ."'>" . $example12_title . "</a></li>\n";
		}
		if (!empty($example13_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example13_url ."'>" . $example13_title . "</a></li>\n";
		}
		if (!empty($example14_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example14_url ."'>" . $example14_title . "</a></li>\n";
		}
		if (!empty($example15_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example15_url ."'>" . $example15_title . "</a></li>\n";
		}
		if (!empty($example16_url)) {
			echo "<li><a  " .  $target_clause . "  href='" . $url_prefix  . $example16_url ."'>" . $example16_title . "</a></li>\n";
		}
		
		?>
		</ul>
		
	  
  </body>
</html>
