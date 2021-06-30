
<?php
$malechecked=" ";
$name=' ';
$femalechecked=" ";
$city=" ";
//echo '<pre>';
//print_r($_POST);
if(isset($_POST['name'])){
$name=$_POST['name'];
$password=$_POST['password'];
if(isset($_POST['gender']))
{
	$gender=$_POST['gender'];
	if($gender=='Male')
	 $malechecked="checked='checked'";
	if($gender=='Female')
	 $femalechecked="checked='checked'";
	
}
else
{
	$gender=' ';
}
$city=$_POST['city'];

if(isset($_POST['education']))
{
	$education=$_POST['education'];
	$education=implode(" ,",$education);
}
else
	$education=' ';


echo '<pre>';

echo  "Name1 :$name<br/>";
echo "Password :$password<br/>";
echo "Gender :$gender<br/>";
echo "City :$city<br/>";
echo "Education :$education<br/>";
}
?>







<form method="post">
	Name:-<input type="textbox"  name="name" value="<?php echo $name?>"/><br/>
        Password:- <input type="password" name="password"/> <br/>
        Gender:- <br/>
        Female<input type="radio" name="gender" value="Female" 
	<?php echo $femalechecked?>/>
        Male<input type="radio" name="gender" value="Male"
	<?php echo $malechecked?>/>
        City:- <br/>
	<?php
	$cityArr=array("Delhi","Noida","Mumbai","Pune","Bihar");
        ?>
        <select name="city">
         <option> Select City </option>
         <?php 
	 foreach($cityArr as $list){
	if($city==$list)
	   echo "<option selected>".$list."<option>";
	else
	   echo "<option>".$list."<option>";
	}
        ?>
	
         
        </select><br/>

         Education:- <br/>
	<?php 
	$educationarr=array("B.tech","M.tech","B.sc");
	
	foreach($educationarr as $edu){
        echo "$edu <input type='checkbox' name='education[]' value='$edu'>";

        }
       
        ?>
        <input type="submit">

</form>
