<?php

session_reset();

    $T_ID = $_GET['T_ID'];
    

    include ('Database/DB_Connection.php');


    $query = "SELECT * FROM personal_info WHERE User_ID = $U_ID";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
            {
        
        while($row = mysqli_fetch_array($result))
        {
            $profile = $row['Image'];
            $Name = $row['Name'];
            $About_Me = $row['About_Me'];
            $Contact_Number = $row['Contact_Number'];
            $Email = $row['Email'];
            $Address = $row['Address'];
            $DOB = $row['Date_of_Birth'];
            $Civil_Status = $row['Civil_Status'];
            $Religion = $row['Religion'];
            $NIC = $row['NIC'];
            $School = $row['School'];
            $Languages = $row['Languages'];
            $PQ = $row['Professional_Qualifications'];
            $Cources = $row['Cources'];
            $Skills = $row['Skills'];
            $Projects = $row['Projects'];
            $AL_Results = $row['AL_Results'];
            $OL_Results = $row['OL_Results'];
            $Reference = $row['Reference'];

            if($Civil_Status == 1){
                $CS = 'Single';
            }else
            {
                $CS = 'Married';
            }



        }
    }

?>

<div class="row">
  <div class="col-md-4 bg-light vh-100 overflow-scroll">
    <div class="row ms-1">

      <h6 class="text-center mt-1">PERSONAL INFOMATION</h6>
      <input type="hidden" name="User_ID" id="User_ID" value="<?php echo $U_ID ?>">
      <p class="text-center">Type your personal infomation.</p>

      <div class=" mt-3 row">
        <p class="col-md-4">Image</p>
        <div class=" col-md-8">
        <form method="POST" enctype="multipart/form-data" id="file_edit_form"> 
        <input type="hidden" name="User_ID2" id="User_ID2" value="<?php echo $U_ID ?>">
        <input type="hidden" name="action" id="action" value="customFile_up">
          <input type="file" class="form-control" id="customFile" name="customFile">
          
        </div>
        <button type="submit" class="btn btn-primary" name="Upload" value="Upload" id="Upload">Upload</button>
          </form>
      </div>

      <div class=" mt-3 row">
        <p class="col-md-4">Name</p>
        <div class="col-md-8 ">
          <input class="form-control" type="text" name="user_name" id="user_name" placeholder="Full name" value="<?php echo $Name; ?>">
        </div>
      </div>

      <div class=" mt-3 row">
        <p class="col-md-4">About Me</p>
        <div class="col-md-8">
          <textarea class="form-control" name="About_Me" id="About_Me" cols="30" rows="1" placeholder="About Me" maxlength="300" onkeyup="about_count();"><?php echo $About_Me; ?></textarea>
          <span class="text-danger small text-end" id="about_count">0/300 Max</span>
        </div>
      </div>

      <div class=" mt-3 row">
        <p class="col-md-5">Contact Number</p>
        <div class="col-md-7">
          <input class="form-control" type="number" name="Contact_Number" id="Contact_Number" placeholder="Contact Number" maxlength="12" value="<?php echo $Contact_Number; ?>">
        </div>
      </div>

      <div class=" mt-3 row">
        <p class="col-md-4">Email</p>
        <div class="col-md-8">
          <input class="form-control" type="text" name="Email" id="Email" placeholder="Email" value="<?php echo $Email; ?>">
        </div>
      </div>

      <div class=" mt-3 row">
        <p class="col-md-4">Address</p>
        <div class="col-md-8">
          <input class="form-control" type="text" name="Address" id="Address" placeholder="Address" value="<?php echo $Address; ?>">
        </div>
      </div>

      <div class=" mt-3 row">
        <p class="col-md-4">Date of Birth</p>
        <div class="col-md-8">
          <input class="form-control" type="date" name="DOB" id="DOB" placeholder="Date of Birth" value="<?php echo $DOB; ?>">
        </div>
      </div>

      <div class=" mt-3 row">
        <p class="col-md-4">Civil Status</p>
        <div class="col-md-8">
          <select class="form-select" name="CS" id="CS">
            <option value="0" selected>Select</option>
            <option value="1">Single</option>
            <option value="2">Married</option>
          </select>
        </div>
      </div>

      <div class=" mt-3 row">
        <p class="col-md-4">Religion</p>
        <div class="col-md-8">
          <input class="form-control" type="text" name="Religion" id="Religion" placeholder="Religion" value="<?php echo $Religion; ?>">
        </div>
      </div>

      <div class=" mt-3 row">
        <p class="col-md-4">NIC</p>
        <div class="col-md-8">
          <input class="form-control" type="text" name="NIC" id="NIC" placeholder="National ID Card Number" value="<?php echo $NIC; ?>">
        </div>
      </div>

      <div class=" mt-3 row">
        <p class="col-md-4">School</p>
        <div class="col-md-8">
          <input class="form-control" type="text" name="School" id="School" placeholder="School Attended" value="<?php echo $School; ?>">
        </div>
      </div>

      <h6 class="text-center mt-4">LANGUAGES</h6>
      <p class="text-center">What kind of languages you can speak, writing and read.</p>

      
        <div id="addLan2"></div>
        <div class="col-md-5 ms-1 mt-2">
          <input class=" form-control" type="text" name="Lan1" id="Lan1" placeholder="Language">

        </div>
        <div class="col-md-5 ms-1 mt-2">
          <select class="form-select" name="Language_S1" id="Language_S1">
            <option value="0" selected>Select</option>
            <option value="1">Bad</option>
            <option value="2">Good</option>
            <option value="3">Far</option>
            <option value="4">Excelent</option>
          </select>
        </div>
        
        <button id="addLan" name="addLan" class="col-md-1 mt-2 btn btn-primary">+</button>
      
        <div class="row">
        <h6 class=" mt-4 col-md-10">Do you have any work experience?</h6>
        <input type="hidden" name="Expcount" id="Expcount" value="1">
        <div class="col-md-1 ms-1 mt-4 mb-3 form-check">
          <input type="checkbox" class="form-check-input expereance_checkbox" name="expereance_checkbox" id="expereance_checkbox" value="1" onchange="Expecheckbox(this)">
        </div>
      </div>

      <div class=" mt-3 row" id="expereance_values" style="display: none;">
      <div id="addExepe"></div>
        <p class="col-md-5 mt-3">Company Name</p>
        <div class="col-md-7 mt-3">
          <input class="form-control" type="text" name="Company_Name1" id="Company_Name1" placeholder="Company Name">
        </div>

        <p class="col-md-5 mt-1">Position</p>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Company_position" id="Company_position" placeholder="Position">
        </div>

        <p class="col-md-5 mt-1">Year</p>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Exepe_year1" id="Exepe_year1" placeholder="Ex: 2017 - 2020">
        </div>

        <p class="col-md-5 mt-1">Info</p>
        <div class="col-md-7 mt-1">
          <textarea class="form-control" name="Exepe_info1" id="Exepe_info1" cols="30" rows="1" placeholder="Explain it"></textarea>
        </div>

        <div class="col-md-12 mt-1 text-end">
          <button id="Exepe_insert" class="col-md-2 btn btn-primary">+</button>
        </div>

        
        
      </div>
      

      <div class="row">
        <h6 class=" mt-4 col-md-10">Do you have any Professional Qualifications?</h6>
        <input type="hidden" name="Procount" id="Procount" value="1">
        <div class="col-md-1 ms-1 mt-4 mb-3 form-check">
          <input type="checkbox" class="form-check-input professional_checkbox" name="professional_checkbox" id="professional_checkbox" value="1" onchange="Pcheckbox(this)">
        </div>
      </div>

      <div class=" mt-3 row" id="professional_values" style="display: none;">
      <div id="addPro"></div>
        <p class="col-md-5 mt-3">Coladge Name</p>
        <div class="col-md-7 mt-3">
          <input class="form-control" type="text" name="Pc_Name1" id="Pc_Name1" placeholder="Cooladge Name">
        </div>

        <p class="col-md-5 mt-1">Where</p>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Pc_where1" id="Pc_where1" placeholder="Location">
        </div>

        <p class="col-md-5 mt-1">Year</p>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Pc_year1" id="Pc_year1" placeholder="Ex: 2017 - 2020">
        </div>

        <p class="col-md-5 mt-1">Cource Name</p>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Pc_cname1" id="Pc_cname1" placeholder="Cource Name">
        </div>

        <p class="col-md-5 mt-1">Info</p>
        <div class="col-md-7 mt-1">
          <textarea class="form-control" name="Pc_info1" id="Pc_info1" cols="30" rows="1" placeholder="Explain it"></textarea>
        </div>

        <div class="col-md-12 mt-1 text-end">
          <button id="Pro_insert" class="col-md-2 btn btn-primary">+</button>
        </div>

        
        
      </div>

      <div class="row">
        <h6 class=" mt-4 col-md-10">Do you have done any Cources?</h6>
        <div class="col-md-1 ms-1 mt-4 mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="Ccheckbox" value="1" onchange="Ccheckbox(this)">
        </div>
      </div>

      <div class=" mt-3 row" id="course_values" style="display: none;">
      <div id="addCou"></div>
        <p class="col-md-5 mt-3">Insitiude Name</p>
        <div class="col-md-7 mt-3">
          <input class="form-control" type="text" name="Cc_Name1" id="Cc_Name1" placeholder="Insitiude Name">
        </div>

        <p class="col-md-5 mt-1">Where</p>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Cc_where1" id="Cc_where1" placeholder="Where">
        </div>

        <p class="col-md-5 mt-1">Year</p>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Cc_year1" id="Cc_year1" placeholder="Ex: 2017 - 2020">
        </div>

        <p class="col-md-5 mt-1">Cource Name</p>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Cc_cname1" id="Cc_cname1" placeholder="Cource Name">
        </div>

        <p class="col-md-5 mt-1">Info</p>
        <div class="col-md-7 mt-1">
          <textarea class="form-control" name="Cc_info1" id="Cc_info1" cols="30" rows="1" placeholder="Explain it"></textarea>
        </div>

        <div class="col-md-12 mt-1 text-end">
          <button id="Cou_insert" class="col-md-2 btn btn-primary">+</button>
        </div>
      </div>

      <div class="row">
        <h6 class=" mt-4 col-md-10">Do you have any Skills?</h6>
        <div class="col-md-1 ms-1 mt-4 mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="Scheckbox" value="1" onchange="Scheckbox(this)">
        </div>
      </div>

      <div class=" mt-3 row col-md-12" id="skills_values" style="display: none;">
      <div id="addSkill"></div>
        <div class="col-md-5 ms-1 mt-2">
          <input class="form-control" type="text" name="Skil" id="Skil" placeholder="Skil">
        </div>
        <div class="col-md-5 ms-1 mt-2">
          <select class="form-select" name="SkilLevel" id="SkilLevel">
            <option value="0" selected>Select</option>
            <option value="1">Bad</option>
            <option value="2">Good</option>
            <option value="3">Far</option>
            <option value="4">Excelent</option>
          </select>
        </div>
        <button class="col-md-1 mt-2 btn btn-primary" id="addSkil">+</button>
      </div>

      <div class="row">
        <h6 class=" mt-4 col-md-10">Do you have done any Projects?</h6>
        <div class="col-md-1 ms-1 mt-4 mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="Pro_checkbox" value="1" onchange="Pro_checkbox(this)">
        </div>
      </div>

      <div class=" mt-3 row col-md-12" id="Pro_values" style="display: none;">
      <div id="addProject_data"></div>
      
      <div class="col-md-5 mt-1">
        <input class="form-control" type="text" name="pro_topic" id="pro_topic" placeholder="Project Topic">
      </div>
      
      <div class="col-md-5 mt-1">
        <textarea class="form-control" name="pro_info" id="pro_info" cols="30" rows="1" placeholder="Explain it"></textarea>
      </div>
      <button class="col-md-1 ms-1 btn btn-primary mt-1" id="addProject">+</button>
      </div>

      <div class="row">
        <h6 class=" mt-4 col-md-10">Do you have Academic Qualifications?</h6>
        <div class="col-md-1 ms-1 mt-4 mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="Aca_checkbox" value="1" onchange="Aca_checkbox(this)">
        </div>
      </div>

      <div class="row" id="Aca_values" style="display: none;">
      <p class="col-md-4 mt-1">A/L Results</p>
      <div class="col-md-6 mt-1">
        <input class="form-control" type="text" name="AL_Year" id="AL_Year" placeholder="Year">
      </div>
      <div class="col-md-1 ms-1 mt-2 form-check">
        <input type="checkbox" class="form-check-input" id="AL_checkbox" value="1" onchange="AL_checkbox(this)">
      </div>

      <div class=" mt-3 row" id="AL_values" style="display: none;">
      <div id="addAL_data"></div>
        <div class="col-md-5 mt-1">
          <input class="form-control" type="text" name="Al_Subject" id="Al_Subject" placeholder="Subject Name">
        </div>
        <div class="col-md-5 mt-1">
          <select class="form-select" name="Al_Subject_re" id="Al_Subject_re">
            <option value="0" selected>Result</option>
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
            <option value="4">S</option>
            <option value="5">F</option>
          </select>
        </div>
        <button class="col-md-1 ms-1 btn btn-primary mt-1" id="addAL">+</button>
      </div>
      

      
      <p class="col-md-4 mt-1">O/L Results</p>
      <div class="col-md-6 mt-1">
        <input class="form-control" type="text" name="OL_Year" id="OL_Year" placeholder="Year">
      </div>
      <div class="col-md-1 ms-1 mt-2 form-check">
        <input type="checkbox" class="form-check-input" id="OL_checkbox" value="1" onchange="OL_checkbox(this)">
      </div>

      <div class=" mt-3 row" id="OL_values" style="display: none;">
      <div id="addOL_data"></div>
        <div class="col-md-5 mt-1">
          <input class="form-control" type="text" name="Ol_Subject" id="Ol_Subject" placeholder="Subject Name">
        </div>
        <div class="col-md-5 mt-1">
          <select class="form-select" name="Ol_Subject_re" id="Ol_Subject_re">
            <option value="0" selected>Result</option>
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
            <option value="4">S</option>
            <option value="5">F</option>
          </select>
        </div>
        <button class="col-md-1 ms-1 btn btn-primary mt-1" id="addOL">+</button>
      </div>
      </div>

      <div class="row">
        <h6 class=" mt-4 col-md-10">Do you have done any extra activity?</h6>
        <div class="col-md-1 ms-1 mt-4 mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="Extra_checkbox" value="1" onchange="Extra_checkbox(this)">
        </div>
      </div>

      <div class=" mt-3 row" id="extra_values" style="display: none;">
        <div id="addExtra"></div>
          <p class="col-md-3 mt-3">Activity</p>
          <div class="col-md-7 mt-3">
            <textarea class="form-control" name="Activity" id="Activity" cols="30" rows="1" placeholder="Summary of Activity"></textarea>
          </div>
          <button class="col-md-1 ms-1 btn btn-primary mt-3" id="E_Add">+</button>
      </div>

      <div class="row">
        <h6 class=" mt-4 col-md-10">References</h6>
        <div class="col-md-1 ms-1 mt-4 mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="References_checkbox" value="1" onchange="References_checkbox(this)">
        </div>
      </div>

      <div class="row" id="References_values" style="display: none;">
        <h6 class="text-center mt-4">References</h6>
        <p class="text-center">Name two persones.</p>
        <div id="R_data"></div>

        <p class="col-md-4 mt-3">Name</p>
        <div class="col-md-6 mt-3">
          <input class="form-control" type="text" name="R_Name" id="R_Name" placeholder="Name">
        </div>

        <p class="col-md-4 mt-1">Position</p>
        <div class="col-md-6 mt-1">
          <input class="form-control" type="text" name="R_Position" id="R_Position" placeholder="Position">
        </div>

        <p class="col-md-4 mt-1">Tel</p>
        <div class="col-md-6 mt-1">
          <input class="form-control" type="number" name="R_Tel" id="R_Tel" placeholder="Contact Number">
        </div>

        <button class="col-md-1 ms-1 btn btn-primary mt-1" id="R_Add">+</button>
      </div>
      <div class="col-md-12 my-3 text-center">
      <button class="col-md-5  btn btn-success" id="template_color">COLOR CHANGE</button>
      <button class="col-md-5  btn btn-success" id="template_hight">HIGHT CHANGE</button>
        <a href="Includes/pdf.php?T_ID=<?php echo $T_ID ?>"><button class="col-md-6 mt-2 btn btn-success">CONTINUE ></button></a>
      </div>
    </div>
  </div>

  <div class="col-md-8 bg-secondary">
  <input type="hidden" name="" id="Temp_ID" value="<?php echo $T_ID ?>">
    <input type="hidden" name="" id="layout_ID" value="<?php echo $T_ID ?>">
    <div id="output1" class="col-md-12 bg-light vh-100 " >
      
    </div>

  </div>

</div>


<script>
      function about_count(){
        var count = document.getElementById('About_Me').value.length;
        document.getElementById('about_count').innerHTML=count+"/300 Max";
    }
    
</script>
