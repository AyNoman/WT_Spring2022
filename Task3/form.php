<!DOCTYPE html>

<html>
<head>
<title>Registration Form</title>
</head>
<body>
<form action="process.php" method="post">
<form>
<table>
<tr>
<td>
First Name:
</td>
<td>
<input type="text" name="FirstName">
</td>
</tr>
<tr>
 <td>
Last Name:
</td>
<td>
<input type="text" name="LastName">
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
<input type="radio" name="radioB 1">Junior Programmer
<input type="radio" name="radioB 2">Senior Programmer
<input type="radio" name="radioB 3">Project Lead

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