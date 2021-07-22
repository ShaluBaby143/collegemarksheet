<?php include_once('dbconfig.php');?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
  <div class="split left">
    <form  action="" method="post">
    <label for="batch"><strong>Batch</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="batch" id="batch" placeholder="enter your batch" style="width:175px;"  />
    <br><br>
    <label for="degree"><strong>Degree</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="degree" id="degree"
    style="width:175px;">
        <option>----Select----</option>
        <option value="B.Sc.,">B.Sc.,</option>
        <option value="B.A">B.A</option>
        <option value="M.sc.,">M.Sc.,</option>
        <option value="M.A">M.A</option>
      </select>
      <br><br>
      <label for="course"><strong>Course</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="course" id="course" style="width:175px;">
        <option>----Select----</option>
        <option value="Tamil">Tamil</option>
        <option value="English">English</option>
        <option value="Maths">Maths</option>
        <option value="Physics">Physics</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Botany">Botany</option>
        <option value="Zoology">Zoology</option>
        <option value="Computer Science">Computer science</option>
        <option value="Economics">Economics</option>
        <option value="History">History</option>
        <option value="Geography">Geography</option>
      </select>
      <br><br>
      <label for = "shift"><strong>Shift</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="shift" id="shift" style="width:175px;">
        <option>----Select----</option>
        <option value="First">First</option>
        <option value="Second">Second</option>
      </select>
      <br><br>
      <label for="medium"><strong>Medium</strong></label>&nbsp;&nbsp;&nbsp;
      <select name="medium" id="medium" style="width:175px;">
        <option>----Select----</option>
        <option value="Tamil">Tamil</option>
        <option value="English">English</option>
      </select>
      <br><br>
    <label for="section"><strong>Section</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="section" id="section" style="width: 175px;">
        <option>----Select----</option>
        <option value="A">A</option>
        <option value="B">B</option>
      </select>
      <br><br>
    <label for="subjectcode"><strong>Subject<br>Code</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="subjectcode" id="subjectcode" placeholder="Enter Your Subject Code" style="width:175px;" />
    <br><br>
    <button type="submit" name="submit" value="submit">Submit</button>
</form>
</div>

<div class="split right">
  <form action="" method="post">
  <center>
    <table border="2">
      <tr><td colspan="11">
        <center><label for="examinername"><strong>ExaminerName</strong></label>
  <input type="text" name="examinername" id="examinername" placeholder="Enter ExaminerName" style="width: 500px;" /></td></tr></center>
  <br><br>
  <tr></tr><tr></tr>
<tr>
        <th>ID</th>
        <th>RegisterNumber</th>
        <th>Student Name </th>
        <th>Maxviva </th>
        <th>Viva</th>
        <th>Maxdesination</th>
        <th>Desination</th>
        <th>viva Date</th>
        <th>Examiner Name</th>
      </tr>
<?php
$i=1;
if(isset($_POST['submit']))
{
  if($_POST['submit'] == 'submit')
  {
  //print_r($_POST);  
  $batch = $_POST['batch'];
  $degree = $_POST['degree'];
  $course = $_POST['course'];
  $shift = $_POST['shift'];
  $medium = $_POST['medium'];
  $section = $_POST['section'];
  $subjectcode = $_POST['subjectcode'];
  $query = "SELECT sid,registernumber,studentname,maxviva,maxdesination,viva,desination,vivadate,examinername FROM marksheetstudentdetails WHERE batch='$batch' AND degree='$degree' AND course='$course' AND shift='$shift' AND medium='$medium' AND section='$section' AND subjectcode='$subjectcode'";
  //echo $query;
  $selectresult = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($selectresult))
  {
    GLOBAL $i;
    ?>
      <tr>
        <td><input type="text" id="sid" name="<?php echo "sid".$i;?>" value="<?php echo isset($_POST['sid']) ? $_POST['sid'] : $row['sid'] ?>"  readonly style="border-style:none;outline:none;background-color:transparent; width:25px;"></td>
        <td><input type="text" id="registernumber" name="<?php echo "registernumber".$i;?>" value="<?php echo $row['registernumber'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:100px;"></td>
        <input type="hidden" name="ivalue" value="<?php echo $i;?>" readonly style="border-style:none;outline:none;background-color:transparent;">
        <td><input type="text" id="studentname" name="studentname" value="<?php echo $row['studentname'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:150px;"></td>
        <td><input type="text" id="maxviva" name="maxviva" value="<?php echo $row['maxviva'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:25px;"></td>
        <td><input type="text" id="viva"  name="<?php echo "viva".$i;?>" value="<?php echo $row['viva'];?>" style="border-style:none;outline:none;background-color:transparent; width:50px;"></td>
        <td><input type="text" id="maxdesination" name="maxdesination" value="<?php echo $row['maxdesination'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:100px;"></td>
        <td><input type="text" id="desination"  name="<?php echo "desination".$i;?>" value="<?php echo $row['desination'];?>"  style="border-style:none;outline:none;background-color:transparent; width:50px;"></td>
        <td><input type="date" id="vivadate" name="<?php echo "vivadate".$i;?>" value="<?php echo $row['vivadate'];?>" style="border-style:none;outline:none;background-color:transparent; width:125px;"></td>
        <td><input type="text" id="examinername" name="<?php echo "examinername".$i;?>" value="<?php echo $row['examinername'];?>"  style="border-style:none;outline:none;background-color:transparent; width:125px;"></td>
        <td><button type="submit" name="submit" value="<?php echo "update".$i;?>">Update</button></td>
        <td><input type="checkbox" name="checkbox[]" value="<?php echo $row['sid'];?>"></td>
      </tr>
    <?php
  $i++;
  }
}
  else if($_POST['submit'] == 'lock')
  {
    //print_r($_POST['examinername']); 
  $val = $_POST['checkbox'];
  $var = "";
  foreach ($val as $val1) 
  {
    $var .= "'" .$val1 ."',"; 
  }
  $var = rtrim($var,', ');
  //echo $var;
  if(isset($_POST['checkbox']))
  {
    //print_r($_POST['checkbox']);
    $set = "SELECT sid,registernumber,studentname,maxviva,maxdesination,viva,desination,vivadate,examinername FROM marksheetstudentdetails WHERE
    sid IN (".$var.")";
    //echo $set;
    $sql = mysqli_query($conn,$set);
  }
  while($result = mysqli_fetch_assoc($sql))
  {?>
  <tr>
    <td><?php echo $result['sid'];?></td>
    <td><?php echo $result['registernumber'];?></td>
    <td><?php echo $result['studentname'];?></td>
    <td><?php echo $result['maxviva'];?></td>
    <td><?php echo $result['viva'];?></td>
    <td><?php echo $result['maxdesination'];?></td>
    <td><?php echo $result['desination'];?></td>
    <td><?php echo $result['vivadate'];?></td>
    <td><?php echo $result['examinername'];?></td>
  </tr>
  <?php
  }
  }
else if($_POST['submit'] == 'clear')
{
 // echo '<input type="text" id="sid" value=""/>';
  $val = $_POST['checkbox'];
  $var = "";
  foreach ($val as $val1) 
  {
    $var .= "'" .$val1 ."',"; 
  }
  $var = rtrim($var,', ');
  //echo $var;
  if(isset($_POST['checkbox']))
  {
    //print_r($_POST['checkbox']);
    $set = "SELECT sid,registernumber,studentname,maxviva,maxdesination,viva,desination,vivadate,examinername FROM marksheetstudentdetails WHERE
    sid NOT IN (".$var.")";
    //echo $set;
    $sql = mysqli_query($conn,$set);
  }
  while($result = mysqli_fetch_assoc($sql))
  {?>
    <tr>
    <td><?php echo $result['sid'];?></td>
    <td><?php echo $result['registernumber'];?></td>
    <td><?php echo $result['studentname'];?></td>
    <td><?php echo $result['maxviva'];?></td>
    <td><input type="text" id="viva" value="<?php echo $result['viva'];?>" style="border-style: none;outline: none;background-color: transparent;width: 25px;"></td>
    <td><?php echo $result['maxdesination'];?></td>
    <td><input type="text" id="desination" value="<?php echo $result['desination'];?>" style="border-style: none;outline: none;background-color: transparent;width: 25px;"></td>
    <td><input type="date" id="vivadate" value="<?php echo $result['vivadate'];?>" style="border-style: none;outline: none;background-color: transparent;width: 125px;"></td>
    <td><input type="text" id="examinername" value="<?php echo $result['examinername'];?>" style="border-style: none;outline: none;background-color: transparent;width: 150px;"></td>
    <td><input type="checkbox" name="checkbox[]" value="<?php echo $row['sid'];?>"></td>
  </tr>
    <?php
  }
  if($_POST['submit'] == 'clear')
{
 // echo '<input type="text" id="sid" value=""/>';
  $val = $_POST['checkbox'];
  $var = "";
  foreach ($val as $val1) 
  {
    $var .= "'" .$val1 ."',"; 
  }
  $var = rtrim($var,', ');
  //echo $var;
  if(isset($_POST['checkbox']))
  {
    $pack = "UPDATE marksheetstudentdetails SET viva = NULL,desination=NULL,vivadate=NULL,examinername=NULL WHERE sid IN (".$var.")";
    $pack1 = mysqli_query($conn,$pack);
    if($pack1)
    {
      echo '<script>alert("Clear Successfully")</script>';
    }
    else
    {
      echo '<script>alert("Failed To Clear")</script>';
    }
  }
}
}
else if($_POST['submit'] == 'save')
{ 
  //print_r($_POST['submit']);
  GLOBAL $i;
  //echo $i;
  for($j=1;$j<=$_POST['ivalue'];$j++)
  { 
  $var = 'sid'.$j;
  $sid1 = $_POST[$var];
  $val ='viva'.$j;
  $viva = $_POST[$val];
  $des = 'desination'.$j;
  $desination = $_POST[$des];
  $vi = 'vivadate'.$j;
  $vivadate = $_POST[$vi];
  if(($viva == 'AAA' || $viva == 'TC' || $viva <= '40') && ($desination == 'AAA' || $desination == 'TC' || $desination <= '60'))
  {
  $update = "UPDATE marksheetstudentdetails SET viva='$viva',desination='$desination',vivadate='$vivadate' WHERE sid ='$sid1'";
  //echo $update;
  $sim=mysqli_query($conn,$update);
  if($sim)
  {
   //echo "update success"; 
    $query = "SELECT sid,registernumber,studentname,maxviva,viva,maxdesination,desination,vivadate,examinername FROM marksheetstudentdetails WHERE sid ='$sid1' ";
  //echo $query;
  $selectresult = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($selectresult))
  {
    GLOBAL $i;
    ?>
      <tr>
        <td><input type="text" id="sid" name="<?php echo "sid".$i;?>" value="<?php echo isset($_POST['sid']) ? $_POST['sid'] : $row['sid'] ?>"  readonly style="border-style:none;outline:none;background-color:transparent; width:25px;"></td>
        <td><input type="text" id="registernumber" name="<?php echo "registernumber".$i;?>" value="<?php echo $row['registernumber'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:100px;"></td>
        <input type="hidden" name="ivalue" value="<?php echo $i;?>" readonly style="border-style:none;outline:none;background-color:transparent;">
        <td><input type="text" id="studentname" name="studentname" value="<?php echo $row['studentname'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:150px;"></td>
        <td><input type="text" id="maxviva" name="maxviva" value="<?php echo $row['maxviva'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:25px;"></td>
        <td><input type="text" id="viva"   name="<?php echo "viva".$i;?>" value="<?php echo $row['viva'];?>"  style="border-style:none;outline:none;background-color:transparent; width:50px;"></td>
        <td><input type="text" id="maxdesination" name="maxdesination" value="<?php echo $row['maxdesination'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:100px;"></td>
        <td><input type="text" id="desination"   name="<?php echo "desination".$i;?>" value="<?php echo $row['desination'];?>"  style="border-style:none;outline:none;background-color:transparent; width:50px;"></td>
        <td><input type="date" id="vivadate" name="<?php echo "vivadate".$i;?>" value="<?php echo $row['vivadate'];?>" style="border-style:none;outline:none;background-color:transparent; width:125px;"></td>
        <td><input type="text" id="examinername" name="<?php echo "examinername".$i;?>" value="<?php echo $row['examinername'];?>"  style="border-style:none;outline:none;background-color:transparent; width:125px;"></td>
        <td><button type="submit" name="submit" value="<?php echo "update".$i;?>">Update</button></td>
        <td><input type="checkbox" name="checkbox[]" value="<?php echo $row['sid'];?>"></td>
      </tr>
    <?php
  $i++;
  }
  }
}
  else
  {
    echo'<script>alert("Failed To Update")</script>';
  }
}
echo '<script>alert("Update Successfully")</script>';
}
else
{
  for($j=1;$j<=$_POST['ivalue'];$j++)
  {
    if($_POST['submit'] == 'update'.$j)
    {
      //print_r($_POST['examinername']);
      $examinername = $_POST['examinername'];
      $var1 = 'registernumber'.$j;
      $registernumber = $_POST[$var1];
      $var2 = 'examinername' .$j;
      //$examinername = $_POST[$var2];
      $update1="UPDATE marksheetstudentdetails SET examinername='$examinername' WHERE registernumber = '$registernumber'";
      //echo $update1;
      $sim=mysqli_query($conn,$update1);
      if($sim)
        {
          $query = "SELECT sid,registernumber,studentname,maxviva,maxdesination,viva,desination,vivadate,examinername FROM marksheetstudentdetails WHERE registernumber ='$registernumber' ";
  //echo $query;
  $selectresult = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($selectresult))
  {
    GLOBAL $i;
    ?>
      <tr>
        <td><input type="text" id="sid" name="<?php echo "sid".$i;?>" value="<?php echo isset($_POST['sid']) ? $_POST['sid'] : $row['sid'] ?>"  readonly style="border-style:none;outline:none;background-color:transparent; width:25px;"></td>
        <td><input type="text" id="registernumber" name="<?php echo "registernumber".$i;?>" value="<?php echo $row['registernumber'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:100px;"></td>
        <input type="hidden" name="ivalue" value="<?php echo $i;?>" readonly style="border-style:none;outline:none;background-color:transparent;">
        <td><input type="text" id="studentname" name="studentname" value="<?php echo $row['studentname'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:150px;"></td>
        <td><input type="text" id="maxviva" name="maxviva" value="<?php echo $row['maxviva'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:25px;"></td>
        <td><input type="text" id="maxdesination" name="maxdesination" value="<?php echo $row['maxdesination'];?>" readonly style="border-style:none;outline:none;background-color:transparent; width:100px;"></td>
        <td><input type="number" id="viva"  max="40" name="<?php echo "viva".$i;?>" value="<?php echo $row['viva'];?>"  style="border-style:none;outline:none;background-color:transparent; width:50px;"></td>
        <td><input type="number" id="desination"  max="60" name="<?php echo "desination".$i;?>" value="<?php echo $row['desination'];?>"  style="border-style:none;outline:none;background-color:transparent; width:50px;"></td>
        <td><input type="date" id="vivadate" name="<?php echo "vivadate".$i;?>" value="<?php echo $row['vivadate'];?>" style="border-style:none;outline:none;background-color:transparent; width:125px;"></td>
        <td><input type="text" id="examinername" name="<?php echo "examinername".$i;?>" value="<?php echo $row['examinername'];?>"  style="border-style:none;outline:none;background-color:transparent; width:125px;"></td>
        <td><button type="submit" name="submit" value="<?php echo "update".$i;?>">Update</button></td>
        <td><input type="checkbox" name="checkbox[]" value="<?php echo $row['sid'];?>"></td>
      </tr>
    <?php
  $i++;
  }
  }
      else
        {
          echo '<script>alert("Failed To Update")</script>'; 
        }
      }
  }
  echo '<script>alert("Update Successfully")</script>'; 
}
}
?>
</table>
</center>
<br><br>
<center>
  <button type = "submit" name = "submit" value="save">Save</button>
  <button type="submit" name= "submit" value="lock">Lock</button>
  <button type="submit" name="submit" value="clear" >Cancel</button>
</center>
</form>
</div>
</body>
</html>