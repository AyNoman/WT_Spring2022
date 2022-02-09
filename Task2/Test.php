
<?php

include "Control/Code.php";

?>

<html>
<head>
<title>Registration Form</title>
</head>
<body>
<form action="" method="post">
<form>
<table>
<tr>
<td>
First Name:
</td>
<td>
<input type="text" name="First Name">
</td>
</tr>
<tr>
 <td>
Last Name:
</td>
<td>
<input type="text" name="Last Name">
</td>
</tr>
<tr>
<td>
Age:
</td>
<td>
<input type="text" name="Age">
</td>
</tr>
<tr>
<td>
Designation:
</td>
<td>
<input type="radio" name="radioB1">Junior Programmer
<input type="radio" name="radioB2">Senior Programmer
<input type="radio" name="radioB3">Project Lead

</td>
</tr>
<tr>
<td>
Preferred Language: 
<td>
<td>
<input type="checkbox" name="checkboxB1">JAVA
<input type="checkbox" name="checkboxB2"> PHP
<input type="checkbox" name="checkboxB3"> C++
</td>
</tr>
<tr>
<td>
Email: 
<td>
<td>
<input type="email" name="Email">
</td>
</tr>
<tr>
<td>
Password: 
<td>
<td>
<input type="Password" name="Password">
</td>
</tr>
<tr>
<td>
Please Choose A File  
<td>
<td>
<input type="file">
</td>
</tr>
<tr>
<td>
<input type="submit">
<input type="reset">

</td>
</tr>
</table>
</form>
</body>
</html>