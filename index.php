<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ยินดีต้อนรับ</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>



<body>
<center><h1>ยินดีต้อนรับ</h1></center>
<form id="form1" name="form1" method="post" action="">
<div class="container">
<div class="btn-group btn-group-justified">
    <a href="index.php" class="btn btn-primary">หน้าแรก</a>
    <a href="register/register.php" class="btn btn-primary">ระบบรับสมัคร</a>
  </div>
  <br>
  <br>
  มหาวิทยาลัยราชภัฏนครปฐม (อังกฤษ: Nakhon Pathom Rajabhat University) เป็นมหาวิทยาลัยของรัฐ ตั้งอยู่ที่อำเภอเมืองนครปฐม จังหวัดนครปฐม เริ่มเปิดทำการเรียนการสอนเมื่อปี พ.ศ. 2479
 <br>
  <br>
   <br>
    <br>
    <br>
<center > <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
var now = new Date();
var month_array = new Array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
document.write("<form name=date_list><table bgcolor=silver><tr><td>");
document.write("<select name=month onchange=change_month(this.options.selectedIndex)>");
for(i=0;i<month_array.length;i++)
{
 if (now.getMonth() != i)
 {document.write ("<option value="+i+">"+month_array[i]);}
 else
 {document.write ("<option value="+i+" selected>"+month_array[i]);}

}
document.write("</select>");
document.write("</td><td>");
document.write ("<select name=year onchange=change_year(this.options[this.options.selectedIndex])>");
for(i=1950;i<3000;i++)
{
 if (now.getYear() != i)
 {document.write("<option value="+i+">"+i);}
 else
 {document.write("<option value="+i+" selected>"+i);}
}
document.write("</select></td></tr><tr><td colspan=2><center>");

document.write("<table bgcolor=white border=0 cellspacing = 0 cellpading = 0 width=100%><tr bgcolor=gray align=center>");
document.write("<td><font color=black>จ</font></td><td><font color=black>อ</td><td><font color=black>พ</td><td><font color=black>พฤ</td><td><font color=black>ศ</td><td ><font color=black>ส</td><td ><font color=black>อ</td>");
document.write("</tr><tr>");
for(j=0;j<6;j++)
{
 for(i=0;i<7;i++)
 {
   document.write("<td align=center id=d"+i+"r"+j+"></td>")
 }
 document.write("</tr>");
}

document.write("</table>");

document.write("</center></from></td></tr></table>");

var show_date = new Date();

function set_cal(show_date)
{
begin_day = new Date (show_date.getYear(),show_date.getMonth(),1);
begin_day_date = begin_day.getDay();
end_day = new Date (show_date.getYear(),show_date.getMonth()+1,1);
count_day = (end_day - begin_day)/1000/60/60/24;
input_table(begin_day_date,count_day);
}
set_cal(show_date);

function input_table(begin,count)
{
init();
j=0;
if (begin!=0){i=begin-1;}else{i=6}
for (c=1;c<count+1;c++)
{
 colum_name = eval("d"+i+"r"+j);
 if ((now.getDate() == c)&&(show_date.getMonth() == now.getMonth())&&(show_date.getYear() == now.getYear())) {colum_name.style.backgroundColor = "blue";colum_name.style.color = "white";};
 colum_name.innerText =  c;
 i++;
 if (i==7){i=0;j++;}
}
}

function init()
{
for(j=0;j<6;j++)
{
 for(i=0;i<7;i++)
 {
 colum_name = eval("d"+i+"r"+j);
 colum_name.innerText =  "-";
 colum_name.style.backgroundColor ="";
 colum_name.style.color ="";
 }
}
}

function change_month(sel_month)
{
show_date = new Date(show_date.getYear(),sel_month,1);
set_cal(show_date);
}

function change_year(sel_year)
{
sel_year = sel_year.value;
show_date = new Date(sel_year,show_date.getMonth(),1);
set_cal(show_date);
}
//  End -->
</script> </center >

</body>
</html>