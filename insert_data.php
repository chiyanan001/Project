<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
body{
	background: url(../images/pic4.jpg)
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 4px solid #000000;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
h2{
	background-color: aqua;
}
</style>


</head>
<body>

	<a href="team.php"> <button>   หน้า แรก  </button></a>
       <a href="../register/insert_data.php"> <button>   เพิ่มข้อมูลผู้สมัคร </button></a>
  
       <a href="../register/delete_data.php"> <button>   ลบผู้สมัคร     </button></a>




<center><h2>เพิ่มข้อมูล</h2>

			<form action="insert_db_data.php" 			method="POST">
			<input type="text" name="ID"     			placeholder="ID (รหัสประชาชน)" > <br><br>
			<input type="text" name="Name_lastname"  	placeholder="ชื่อ- นามสกุล> <br><br>
			<input type="text" name="Faculty"     		placeholder="คณะที่จะศึกษา" > <br><br>
			<input type="text" name="Branch"  			placeholder="สาขาวิชา"> <br><br>
					

      <button type="submit">  ตกลง  </button>

   </form></center>





</body>
</html>
