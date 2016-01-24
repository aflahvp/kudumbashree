<html>
	<head>
		<title>APPLICATION </title>
			<script type="text/javascript">
				function fun(f1)
				{
					var status;
					if(document.f1.kname.value=="")
					{
						alert("Name field is empty");
						status=false;
						document.f1.kname.focus()
					}
					else
					{
						status=true;
					}
					return status;
				}
			</script>

			<style>
				#table
				{
					width:100%;
					height:relative;
					background:;
					margin-top:1%;
				}

				#first_table
				{
					width:45%;
					height:relative;
					background:;
					float:left;
					margin-left:4%;
				}

				#second_table
				{
					width:48%;
					height:relative;
					background:;
					float:right;
				}
			</style>
	</head>
<body bgcolor="#cccccc">
<h1><center>REGISTRATION</hi>
<br/>
<div id="table">
<div id="first_table">

<form name="f1" method="POST" action="reg.php" onsubmit="return fun(this);">
<table width="98%"align="left">

<tr height="40">
<td><label>NAME OF KUDUMBASHREE</label></td><td><input type="text"name="kname"></td>
</tr>
<tr height="40">
<td>NAME OF CANTIDATE</td><td><input type="text"name="uname"></td>
</tr>
<tr height="40">
<td>ID OF CANTIDATE</td><td><input type="text"name="uid"></td>
</tr>
<tr height="40">
<td>AGE</td><td><input type="text"name="uage"></td>
</tr>
<td>DOB</td><td>
<select name="day">
<option namevalue="1">01</option>
<option namevalue="2">02</option>
<option namevalue="3">03</option>
<option namevalue="4">04</option>
<option namevalue="5">05</option>
<option namevalue="6">06</option>
<option namevalue="7">07</option>
<option namevalue="8">08</option>
<option namevalue="9">09</option>
<option namevalue="10">10</option>
<option namevalue="11">11</option>
<option namevalue="12">12</option>
<option namevalue="13">13</option>
<option namevalue="14">14</option>
<option namevalue="15">15</option>
<option namevalue="16">16</option>
<option namevalue="17">17</option>
<option namevalue="18">18</option>
<option namevalue="19">19</option>
<option namevalue="20">20</option>
<option namevalue="21">21</option>
<option namevalue="22">22</option>
<option namevalue="23">23</option>
<option namevalue="24">24</option>
<option namevalue="25">25</option>
<option namevalue="26">26</option>
<option namevalue="27">27</option>
<option namevalue="28">28</option>
<option namevalue="29">29</option>
<option namevalue="30">30</option>
<option namevalue="31">31</option>
</select>
<select name="Month">
<option namevalue="1">01</option>
<option namevalue="2">02</option>
<option namevalue="3">03</option>
<option namevalue="4">04</option>
<option namevalue="5">05</option>
<option namevalue="6">06</option>
<option namevalue="7">07</option>
<option namevalue="8">08</option>
<option namevalue="9">09</option>
<option namevalue="10">10</option>
<option namevalue="11">11</option>
<option namevalue="12">12</option>
</select>
<select name="year">
<option namevalue="1990">1990</option>
<option namevalue="1991">1991</option>
<option namevalue="1992">1992</option>
<option namevalue="1993">1993</option>
<option namevalue="1994">1994</option>
<option namevalue="1995">1995</option>
<option namevalue="1996">1996</option>
<option namevalue="1997">1997</option>
<option namevalue="1998">1998</option>
<option namevalue="1999">1999</option>
<option namevalue="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</td>
</tr>
</select>
<tr height="40" width="50%">
<td>SEX</td><td><input type="radio"name="um"value="M">male
<input type="radio"name="uf"value="F">female</td>
</tr>
<tr height="40">
<td>ADDRESS</td><td>
<textarea name="uads"></textarea>
</td>
</tr>
<tr height="40">
<td>SPOUSE'S NAME</td><td><input type="text"name="uspouse"></td>
</tr>
<tr height="40">
<td>FATHER'S NAME</td><td><input type="text"name="ufather"></td>
</tr>
<tr height="40">
<td>MOTHER'S NAME</td><td><input type="text"name="umother"></td>
</tr>

<tr height="40">
<td>ELIGIBILITY</td><td><input type="text"name="ueligible"></td>
</tr>
<tr height="40">
<td>COLLEGE/SCHOOL</td><td><input type="text"name="ucs"></td>
</tr>
<tr height="40">
<td>RELEGION</td><td><input type="text"name="ureligion"></td>
</tr>

</table>

</div>
	<div id="second_table">
	<table width="98%"align="right">
	<tr height="40">
	<td>CAST</td><td><input type="text"name="ucast"></td>
	</tr>
	<tr height="40">
	<td>NATIONALITY</td><td><input type="text"name="unation"></td>
	</tr>
	<tr height="40">
	<td>PANCHAYATH</td><td><input type="text"name="upanchayath"></td>
	</tr>
	<tr height="40">
	<td>TALUK</td><td><input type="text"name="utaluk"></td>
	</tr>
	<tr height="40">
	<td>DISTRICT</td><td><input type="text"name="udistrict"></td>
	</tr>
	<tr>
	<td>STATE</td><td><input type="text"name="ustate"></td>
	</tr>
	<tr height="40">
	<td>LAND NO</td><td><input type="text"name="landno"></td>
	</tr>
	<tr height="40">
	<td>MOBILE NO</td><td><input type="text"name="mobno"></td>
	</tr>
	<tr height="40">
	<td>ACCOUNT NO</td><td><input type="text"name="acno"></td>
	</tr>
	<tr height="40">
	<td>ID NO</td><td><input type="text"name="idno"></td>
	</tr>
	<tr height="40">
	<td>ADAR NO</td><td><input type="text"name="adarno"></td>
	</tr>
	<tr height="40">
	<td>E-MAIL ID</td><td><input type="email"name="email"></td>
	</tr>
	<tr height="40">
	<td  colspan="2"align="center">
	<input type="submit" value="SUBMIT" style="color:white;background:black;font-size:20ppt;"><input type="reset" value="RESET" style="color:white;background:black;font-size:20ppt;"><input type="button" value="CANCEL" style="color:white;background:black;font-size:20ppt;"></td>
	</tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>
