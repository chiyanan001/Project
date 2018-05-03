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
     include("../class/db_football.php");
    ?>
</head>
<body>


  
	<a href="register.php"> <button>   หน้า แรก  </button></a>
       <a href="../register/insert_data.php"> <button>   เพิ่มข้อมูลผู้สมัคร </button></a>
  
       <a href="../register/delete_data.php"> <button>   ลบผู้สมัคร     </button></a>





<center><h2>แก้ไขข้อมูล</h2>

     <table>
      <tr>
				<th>id</th>
        <th>ชื่อทีม</th>
        <th>โลโก้</th>
      </tr>

      <?php
          if(isset($_POST['button'])) {     // เป็นตัวเช้ตค่า  ค่ามีค่าก็จะแสดง  ถ้าไม่มีค่าก็ไม่แสดง  บันทัดนี้
            $number1 = $_POST['button'];
            $r = new db_regis);

            $result = $r->register($number1);
            foreach ($result as $row)
            {
            ?>

        <tr> <form action="update_db_data.php" method="POST">
					
		      <td><?php echo $row['ID']; ?></td>
				<td><?php echo $row['Name_lastname']; ?></td>
				<td><?php echo $row['Faculty']; ?></td>
				<td><?php echo $row['Branch']; ?></td>

        <td><button type="submit">ตกลง</button></form></td>    <!-- เเมือกดตกลง จะส่งค่าไปยัง หน้า update_db_data.php   -->
           <?php
             }        }
          ?>
      </tr>
     </table>
                      <!--  ถ้าไม่มีค่าที่ส่งงมา ข้างบนนี้จะไม่มีการแสดงผล ^    -->


   <br>

    <table>
      <tr>
		<th>id</th>
        <th>ชื่อ-นามสกุล</th>
        <th>คณะที่จะศึกษา</th>
		<th>สาขาวิชา</th>
      </tr>
      </tr>

      <?php
         $r = new db_regis();
         $result = $r->register();
         foreach ($result as $row)
         {
       ?>

      <tr>  <form action="update_data.php" method="POST">
          <td><?php echo $row['ID']; ?></td>
				<td><?php echo $row['Name_lastname']; ?></td>
				<td><?php echo $row['Faculty']; ?></td>
				<td><?php echo $row['Branch']; ?></td>
				
           <td><button name="button" value="<?php echo $row['ID'];?>" type="submit">แก้ไข</button> </td>
           </form>

             <?php
               }
              ?>
       </tr>
</table></center>



</body>
</html>
