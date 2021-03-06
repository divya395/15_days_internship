//count() 
<?php
$arr = array('php','c','c++','java','Android');
echo count($arr);
echo "<br/>"
?>

//array_count_values ()
<?php
$arr = array("C","php","c","android","php","java");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}
echo "<br/>"
?>

//array_sum ()
<?php
$myarray = array(1,2,3,4,5);
echo array_sum($myarray);
echo "<br/>"
?>

//array_product ()
<?php
$myarray = array(1,2,3,4,5);
echo array_product($myarray);
echo "<br/>"
?>


//array_reverse ()
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$revarr = array_reverse($arr);
print_r($revarr);
echo "<br/>"
?>

//in_array ()
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$temp = in_array('php',$arr);
echo $temp;
echo "<br/>"
?>

//array_rand ()
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr);//Returns Array Index 
echo $arr[$indexofarray];
echo "<br/>"
?>

//Select multiple keys at random
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr,2);//Returns Array Index 
foreach ($indexofarray as $key => $value) 
{
echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}
echo "<br/>"
?>

//array_unique ()
<?php
$arr = array('c', 'c++','android', 'java', 'android', 'php');
print_r(array_unique($arr));
echo "<br/>"
?>

//array_merge ()
<?php
$arr1 = array('c','c++','android','java','php');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2);
print_r($NewArr);
echo "<br/>"
?>

//array_search ()
<?php
$myarr = array('c', 'c++','android', 'java', 'php');
$check = array_search('android', $myarr);
echo $check; // Return Index
echo "<br/>"
?>

//range ()
<?php
$arr = range("11", "20");
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
} 
echo "<br/>"
?>

//sort ()
<?php
$arr = array(80,60,50,40,8,74);
sort($arr);
print_r($arr);
echo "<br/>"
?>

//rsort ()
<?php
$arr = array(80,60,50,40,8,74);
rsort($arr);
print_r($arr);
echo "<br/>"
?>

//asort ()
<?php
$arr = array(80,60,50,40,8,74);
asort($arr);
print_r($arr);
echo "<br/>"
?>

//ksort () (Key Sort)
<?php
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
echo "<br/>"
?>

//krsort () Key Reverse Sort
<?php
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
krsort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
echo "<br/>"
?>

//shuffle ()
<?php
$myArray = array("Football", "Baseball", "Hockey", "Tennis", 
"Boxing");
shuffle($myArray); // Shuffle the array
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}
echo "<br/>"
?>

//array_key_exists ()
<?php
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists('a',$arr);
echo "<br/>"
?>

//array_change_key_case()
<?php
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);
echo "<br/>"
?>

//array_combine()
<?php
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);
echo "<br/>"
?>

//end ()
<?php
$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);
echo "<br/>"
?>

//compact()
<?php
$name = "akash";
$subject = "php";
$arr = compact("name", "subject");
print_r($arr);
echo "<br/>"
?>

//array_flip()
<?php
$arr = array("a" => "akash", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);
echo "<br/>"
?>

//array_diff()
<?php
$a=array("akash","c","c++","java","php","android");
$b=array("akash","c","java","php");
$diff = array_diff($a, $b);
print_r($diff);
echo "<br/>"
?>

//array_intersect()
<?php
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));
echo "<br/>"
?>

//array_values ()
<?php
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
echo "<br/>"
?>

//array_push()
<?php
$a=array("c","c++");
array_push($a,"java","php");
print_r($a);
echo "<br/>"
?>

//array_pop()
<?php
$a = array("c", "c++", "Java", "PHP", "ASP");
array_pop($a); //Remove
print_r($a);
array_pop($a); //Remove
print_r($a);
echo "<br/>"
?>

//explode()
<?php
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);
print_r($arr);
echo "<br/>"
?>

//implode() 
<?php
$arr = array("i","love","php","language");
$mystring = implode(" ", $arr);
echo $mystring;
echo "<br/>"
?>

//Example
<form method="post">
Programming :
C<input type="checkbox" name="cbox[]" value="c">
C++<input type="checkbox" name="cbox[]" value="c++">
PHP<input type="checkbox" name="cbox[]" value="php">
<input type="submit">
</form>
<?php
if($_POST)
{
$programming= $_POST['cbox'];
$string = implode(",", $programming);
echo $string;
}
echo "<br/>"
?>

