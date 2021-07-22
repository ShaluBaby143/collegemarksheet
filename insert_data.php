<?php include_once('dbconfig.php');?>    
    <header>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/insert_data.css">
        <div class="container">
            <p id="description" class="lead">
                <center><strong> STUDENT ENTRY DETAILS </strong></center>
        </div>
    </header>
    <br>
    <div class="container">
        <form id="survey-form" action="" method="post">
            <div class="form-group d-flex">
              <label for="batch"><strong>Batch</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control" type="text" name="batch" placeholder="Enter Your Batch" style="width:750px;" required />
            </div>
            <div class="form-group d-flex">
              <label for="degree"><strong>Degree</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select class="form-control" name="degree" style="width:750px;" required="required">
                  <option>----Select----</option>
                  <option value="B.Sc.,">B.Sc.,</option>
                  <option value="B.A">B.A</option>
                  <option value="M.sc.,">M.Sc.,</option>
                  <option value="M.A">M.A</option>
                </select>
            </div>
            <div class="form-group d-flex">
              <label for="course"><strong>Course</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select class="form-control" name="course" style="width: 750px;" required="required">
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
            </div>
            <div class="form-group d-flex">
              <label for="shift"><strong>Shift</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select class="form-control" name="shift" style="width:750px;" required="required">
                  <option>----Select----</option>
                  <option value="First">First</option>
                  <option value="Second">Second</option>
                </select>
            </div>
            <div class="form-group d-flex">
              <label for="medium"><strong>Medium</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select class="form-control" name="medium" style="width: 750px;" required="required">
                  <option>----Select----</option>
                  <option value="Tamil">Tamil</option>
                  <option value="English">English</option>
                </select>
            </div>
            <div class="form-group d-flex">
              <label for="section"><strong>Section</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select  class="form-control" required="required" name="section" style="width: 750px;" >
                  <option>----Select----</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                </select>
            </div>
            <div class="form-group d-flex">
              <label for="subjectcode"><strong>Subject<br>Code</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="form-control" type="text" name="subjectcode" placeholder="Enter Your Subjectcode" style="width: 750px;" required />
            </div>
            <div class="form-group d-flex">
              <label for="registernumber"><strong>Register<br>Number</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control" type="text" name="registernumber" placeholder="Enter Your Register Number" style="width: 750px;" required />
            </div>
            <div class="form-group d-flex">
              <label for="studentname"><strong>Student<br>Name</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control" type="text"  name="studentname" placeholder="Enter Your Name" style="width: 750px;" required />
            </div>
            <div class="form-group d-flex">
              <label for="maxviva"><strong>Max<br>Viva</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control" type="text"  name="maxviva" placeholder="Enter Maximum Viva Mark" style="width: 750px;" required />
            </div>
            <div class="form-group d-flex">
              <label for="maxdesination"><strong>Max<br>Desination</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control" type="text"  name="maxdesination" placeholder="Enter Maximum Desination Mark" style="width: 750px;" required />
            </div>
          <button type="submit" name="submit">Submit</button>
        </form>
        </div>
<?php
if(isset($_POST['submit']))
{
  $batch=$_POST['batch'];
  $degree=$_POST['degree'];
  $course=$_POST['course'];
  $shift=$_POST['shift'];
  $medium=$_POST['medium'];
  $section=$_POST['section'];
  $subjectcode=$_POST['subjectcode'];
  $registernumber=$_POST['registernumber'];
  $studentname=$_POST['studentname'];
  $maxviva = $_POST['maxviva'];
  $maxdesination = $_POST['maxdesination'];
  $sql = "INSERT INTO marksheetstudentdetails(batch,degree,course,shift,medium,section,subjectcode,registernumber,studentname,maxviva,maxdesination)VALUES('$batch','$degree','$course','$shift','$medium','$section','$subjectcode','$registernumber','$studentname','$maxviva','$maxdesination')";
  echo $sql;
  $sim=mysqli_query($conn,$sql);
  if($sim)
  {
    echo'<script>alert("Register Successfully")</script>';
  }
  else
  {
    echo'<script>alert("Failed To Register")</script>';
  }
  }
?>