<!DOCTYPE html>
<html>
<header>
	<title>My Year of Code Challenge</title>
</header>
<?php 
// here we print the first hundred prime number 
$counter=0;
$number=0;
while($counter <= 100){
$number++;
$notPrime = false ;  
for($i=2;$i<=sqrt($number);$i++)
if($number%$i==0) 
$notPrime = true; 
if(!$notPrime){
$counter++ ; 
echo "$counter.   $number<br>"; 
}

}
?>
</html>