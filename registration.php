<!Doctype html>
<head>
<style type="text/css">
input{
padding:5px;
}
select{
padding:5px;
}
</style>
</head>
<body>
<form>
<center>
<div style="border:2px solid red;width:40%;background-color:#010000">
<p style="background-color:orange;padding:5px;color:yellow;margin:0px;text-align:left;"><a href=# style="color:yellow;text-decoration:none;">Sign Up</a></p>
<table  cellspacing=20 style="color:yellow;">
<tr>
<td>First Name</td><td><input type="text" placeholder="Enter First Name...."></td</tr>
<tr>
<td>Last Name </td><td><input type="text" placeholder="Enter last Name..."></td></tr>
<tr>
<td>Screen Name</td><td><input type="text" placeholder="Enter Screen Name..."></td></tr>
<tr>
<td>Date of Birth</td><td><select>
<option>--Month--</option>
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>Aug</option>
<option>Sep</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option>
</select><select>
<option>--Day--</option>
<?php
$i=1;
while($i<=31){?>
<option><?php echo $i; $i++; }?></option></script>
</select><select>
<option>--Year--</option>
<?php
$i=1950;
while($i<=2020){
?>
<option><?php echo $i; $i++; }?></option>
</select></td></tr>

<tr><td>Gender</td><td><input type="radio" name=gen>Male 
    <input type="radio" name=gen>Female </td></tr>
<tr><td>Country</td><td><select>
<option>India</option>
<option>Turkey</option>
<option>USA</option>
<option>Japan</option>
<option>Canada</option>
<option>Dubai</option>
</select></td></tr>
<tr><td>E-mail </td><td><input type="text" placeholder="Enter E-mail...."></td></tr>
<tr><td>Phone </td><td><input type=text placeholder="Enter Phone...."></td></tr>
<tr><td>Password</td><td> <input type="password" placeholder="Enter password...."></td></tr>
<tr><td>Confirm Password</td><td> <input type="password" placeholder="Enter Confirm Password...."></td></tr>
<tr><td></td><td><input type="checkbox"> I agree to the Term of Use </td></tr>
</table>
<p style="background-color:orange;padding:5px;color:yellow;margin:0px;text-align:right;"><input type="submit" style="padding:10px;color:white;background-color:#3CB371;margin:5px;border:0px solid;"><input type="reset" value="Cancel" style="padding:10px;color:white;background-color:#B22222;margin:5px;border:0px solid;"></p>
</div>
</center>
</form>
</body>
</html>

