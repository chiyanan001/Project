<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
body{
	background: url(images/bg.jpg)
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
    <?php
     include("../Class/db_regis.php");
    ?>
</head>
<body>


   <a href="team.php"> <button>   หน้า แรก  </button></a>
       <a href="../register/insert_data.php"> <button>   เพิ่มข้อมูลผู้สมัคร </button></a>
  
       <a href="../register/delete_data.php"> <button>   ลบผู้สมัคร     </button></a>





<center><h2>ลบข้อมูล</h2>


    <table>
      <tr>
          <th>ID (รหัสบัตรประชาชน)</th>
            <th>ชื่อ-นามสกุล</th>
			 <th>คณะที่สมัคร</th>
			 <th>สาขาวิชาที่สมัคร</th>
		
    

      </tr>

      <?php
         $r = new db_regis();
         $result = $r->regis();
         foreach ($result as $row)
         {
       ?>

      <tr>  <form action="delete_db_data.php" method="POST">
           
		      <td><?php echo $row['ID']; ?></td>
				<td><?php echo $row['Name_lastname']; ?></td>
				<td><?php echo $row['Faculty']; ?></td>
				<td><?php echo $row['Branch']; ?></td>
         

           <td><button name="button" value="<?php echo $row['ID'];?>" type="submit">ลบ</button></td>
           </form>

             <?php
               }
              ?>
       </tr>
</table></center>



</body>
</html>
