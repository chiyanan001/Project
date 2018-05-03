<!DOCTYPE html>
<html>
  <head>
  <style>
body{
	background: url(images/bg.jpg)
}

h1 {
    background-color: Aquamarine;
}
h1 {
    font-size: 40px;
}

</style>
    <title>regis</title>

      <?php
      include("../Class/db_regis.php");
       ?>

  </head>
  <body>
<a href="register.php"> <button>   หน้า แรก  </button></a>
       <a href="../register/insert_data.php"> <button>   เพิ่มข้อมูลผู้สมัคร </button></a>
  
       <a href="../register/delete_data.php"> <button>   ลบผู้สมัคร     </button></a>


    <link rel="stylesheet" type="text/css" href="css/bg.css">

<div class="center">
  <table class="match">
    <tr>
      <h1><center> รายชื่อผู้สมัคร </center></h1>
        <div class="center">
        <table align="center"  width="1000" border="4" cellspacing="5" cellpadding="10">
            <th>ID (รหัสบัตรประชาชน)</th>
            <th>ชื่อ-นามสกุล</th>
			 <th>คณะที่สมัคร</th>
			 <th>สาขาวิชาที่สมัคร</th>
		
<tr>
</math>

    </tr>
   <?php $r = new db_regis();
    	$result = $r->regis();
		foreach ($result as $row)
		{

			?>
      <tr>
        <center> <td><?php echo $row['ID']; ?></td></center>
        <center> <td><?php echo $row['Name_lastname']; ?></td></center>
		<center> <td><?php echo $row['Faculty']; ?></td></center>
        <center> <td><?php echo $row['Branch']; ?></td></center>
    

  </tr>

      <?php
		}
		?>
  </table>
  <br>
  <br>
  <center> <a href="../index.php"> <button> Home</button></a></center>
  </div>
  </body>
</html>
