
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>php_paginodl</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<?
require "demo.php";           // All database details will be included here 

$page_name="php_paging.php"; //  If you use this code with a different page ( or file ) name then change this 

if(!isset($start)) {                         // This variable is set to zero for the first page
$start = 0;
}

$eu = ($start -0);                
$limit = 10;                                 // No of records to be shown per page.
$this = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 


/////////////// WE have to find out the number of records in our table. We will use this to break the pages///////
$query2=" SELECT * FROM batch2003";
$result2=mysqli_query($con,$query2);
echo mysqli_error();
$nume=mysqli_num_rows($result2);
/////// The variable nume above will store the total number of records in the table////

/////////// Now let us print the table headers ////////////////
$bgcolor="#f1f1f1";
echo "<TABLE width=90% align=center  cellpadding=0 cellspacing=0> <tr>";
echo "<td  bgcolor='dfdfdf' >&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='4'>Enrollment No</font></td>";

echo "<td  bgcolor='dfdfdf' >&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='4'>Name</font></td>";
echo "<td  bgcolor='dfdfdf' >&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='4'>Discipline</font></td>";
echo "<td  bgcolor='dfdfdf'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='4'>Fathers_Name</font></td>";
echo "<td  bgcolor='dfdfdf' >&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='4'>Description</font></td></tr>";

////////////// Now let us start executing the query with variables $eu and $limit  set at the top of the page///////////
$query=" SELECT * FROM batch2003 limit $eu, $limit ";
$result=mysqli_query($con,$query);
echo mysqli_error();

//////////////// Now we will display the returned records in side the rows of the table/////////
while($noticia = mysqli_fetch_array($result))
{
if($bgcolor=='#f1f1f1'){$bgcolor='#ffffff';}
else{$bgcolor='#f1f1f1';}

echo "<tr >";
echo "<td align=left bgcolor=$bgcolor id='title' height = 3 size = 10>&nbsp;<font face='Verdana' size='2'>$noticia[En_no]</font></td>"; 

echo "<td align=left bgcolor=$bgcolor id='title' height = 3 size = 10>&nbsp;<font face='Verdana' size='2'>$noticia[Name]</font></td>"; 
echo "<td align=left bgcolor=$bgcolor id='title' height = 3 size = 10>&nbsp;<font face='Verdana' size='2'>$noticia[Discipline]</font></td>"; 
echo "<td align=left bgcolor=$bgcolor id='title' height = 3 size = 10>&nbsp;<font face='Verdana' size='2'>$noticia[Fathers_Name]</font></td>"; 
echo "<td align=left bgcolor=$bgcolor id='title' height = 3 size = 10>&nbsp;<font face='Verdana' size='2'>$noticia[Description]</font></td>"; 

echo "</tr>";
}
echo "</table>";
////////////////////////////// End of displaying the table with records ////////////////////////

///// Variables set for advance paging///////////
$p_limit=500; // This should be more than $limit and set to a value for whick links to be breaked
if(!isset($p_f)){$p_f=0;}
$p_fwd=$p_f+$p_limit;
$p_back=$p_f-$p_limit;
//////////// End of variables for advance paging ///////////////
/////////////// Start the buttom links with Prev and next link with page numbers /////////////////
echo "<table align = 'center' width='50%'><tr><td  align='left' width='20%'>";
if($p_f<>0){print "<a href='$page_name?start=$p_back&p_f=$p_back'><font face='Verdana' size='2'>PREV $p_limit</font></a>"; }
echo "</td><td  align='left' width='10%'>";
//// if our variable $back is equal to 0 or more then only we will display the link to move back ////////
if($back >=0 and ($back >=$p_f)) { 
print "<a href='$page_name?start=$back&p_f=$p_f'><font face='Verdana' size='2'>PREV</font></a>"; 
} 
//////////////// Let us display the page links at  center. We will not display the current page as a link ///////////
echo "</td><td align=center width='30%'>";
for($i=$p_f;$i < $nume and $i<($p_f+$p_limit);$i=$i+$limit){
if($i <> $eu){
$i2=$i+$p_f;
echo " <a href='$page_name?start=$i&p_f=$p_f'><font face='Verdana' size='2'>$i</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$i</font>";}        /// Current page is not displayed as link and given font color red

}


echo "</td><td  align='right' width='10%'>";
///////////// If we are not in the last page then Next link will be displayed. Here we check that /////
if($this < $nume and $this <($p_f+$p_limit)) { 
print "<a href='$page_name?start=$next&p_f=$p_f'><font face='Verdana' size='2'>NEXT</font></a>";} 
echo "</td><td  align='right' width='20%'>";
if($p_fwd < $nume){
print "<a href='$page_name?start=$p_fwd&p_f=$p_fwd'><font face='Verdana' size='2'>NEXT $p_limit</font></a>"; 
}
echo "</td></tr></table>";


?>
<center>
</center> 
</body>

</html>
