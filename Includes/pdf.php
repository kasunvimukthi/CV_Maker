<?php 
    session_start();
    if (isset($_SESSION['Name'])) {

        $U_Name = $_SESSION['Name'];
        $U_ID = $_SESSION['ID'];

    }else{
    
    header("location: ./index.php");
    
    }
    $T_ID = $_GET['T_ID'];
    include ('../Database/DB_Connection.php');

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
            $work = $row['work_exeperince'];
            $PQ = $row['Professional_Qualifications'];
            $AQ = $row['Academic_Qualifications'];
            $Cources = $row['Cources'];
            $Skills = $row['Skills'];
            $Projects = $row['Projects'];
            $AL_Results = $row['AL_Results'];
            $AL_Year = $row['AL_Year'];
            $OL_Results = $row['OL_Results'];
            $OL_Year = $row['OL_Year'];
            $Reference = $row['Reference'];
            $Extra = $row['Extra'];

            if($Civil_Status == 1){
                $CS = 'Single';
            }else
            {
                $CS = 'Married';
            }



        }
    }

    if($T_ID == 1){

        $query1 = "SELECT * FROM template_color WHERE User_ID = $U_ID && Temp_ID = $T_ID ";
        $resul1 = mysqli_query($conn, $query1);
        if(mysqli_num_rows($resul1) > 0)
                {
            
            while($row1 = mysqli_fetch_array($resul1))
            {
                if($row1['L_A_BG'] == '')
                {
                    $L_A_BG = '#0d6efd';
                }else{
                    $L_A_BG = $row1['L_A_BG'];
                }

                if($row1['L_A_TE'] == '')
                {
                    $L_A_TE = '#fff';
                }else{
                    $L_A_TE = $row1['L_A_TE'];
                }

                if($row1['L_A_L_BG'] == '')
                {
                    $L_A_L_BG = '#212529';
                }else{
                    $L_A_L_BG = $row1['L_A_L_BG'];
                }

                if($row1['L_A_L_TE'] == '')
                {
                    $L_A_L_TE = '#fff';
                }else{
                    $L_A_L_TE = $row1['L_A_L_TE'];
                }

                if($row1['R_A_BG'] == '')
                {
                    $R_A_BG = '#f8f9fa';
                }else{
                    $R_A_BG = $row1['R_A_BG'];
                }

                if($row1['R_A_TE'] == '')
                {
                    $R_A_TE = '#212529';
                }else{
                    $R_A_TE = $row1['R_A_TE'];
                }

                if($row1['R_A_L_BG'] == '')
                {
                    $R_A_L_BG = '#f8f9fa';
                }else{
                    $R_A_L_BG = $row1['R_A_L_BG'];
                }

                if($row1['R_A_L_TE'] == '')
                {
                    $R_A_L_TE = '#212529';
                }else{
                    $R_A_L_TE = $row1['R_A_L_TE'];
                }

                if($row1['R_A_L'] == '')
                {
                    $R_A_L = '#212529';
                }else{
                    $R_A_L = $row1['R_A_L'];
                }

                if($row1['L_P_B_B_C'] == '')
                {
                    $L_P_B_B_C = '#6c757d';
                }else{
                    $L_P_B_B_C = $row1['L_P_B_B_C'];
                }

                if($row1['L_P_L'] == '')
                {
                    $L_P_L = '#212529';
                }else{
                    $L_P_L = $row1['L_P_L'];
                }

                if($row1['R_P_B_B_C'] == '')
                {
                    $R_P_B_B_C = '#6c757d';
                }else{
                    $R_P_B_B_C = $row1['R_P_B_B_C'];
                }

                if($row1['R_P_L'] == '')
                {
                    $R_P_L = '#212529';
                }else{
                    $R_P_L = $row1['R_P_L'];
                }
                
            }
        }else{
            $L_A_BG = '#0d6efd';
            $L_A_TE = '#fff';
            $L_A_L_BG = '#212529';
            $L_A_L_TE = '#fff';
            $R_A_BG = '#f8f9fa';
            $R_A_TE = '#212529';
            $R_A_L_BG = '#f8f9fa';
            $R_A_L_TE = '#212529';
            $R_A_L = '#212529';
            $L_P_B_B_C = '#6c757d';
            $L_P_L = '#212529';
            $R_P_B_B_C = '#6c757d';
            $R_P_L = '#212529';
        }

        $query2 = "SELECT * FROM templete_height WHERE User_ID = $U_ID && Temp_ID = $T_ID ";
        $resul2 = mysqli_query($conn, $query2);
        if(mysqli_num_rows($resul2) > 0)
                {
            
            while($row2 = mysqli_fetch_array($resul2))
            {
                if($row2['L_A_A_M_H'] == '')
                {
                    $L_A_A_M_H = '10';
                }else{
                    $L_A_A_M_H = $row2['L_A_A_M_H'];
                }
                if($row2['L_A_L_H'] == '')
                {
                    $L_A_L_H = '10';
                }else{
                    $L_A_L_H = $row2['L_A_L_H'];
                }
                if($row2['L_A_P_D_H'] == '')
                {
                    $L_A_P_D_H = '10';
                }else{
                    $L_A_P_D_H = $row2['L_A_P_D_H'];
                }
                if($row2['R_A_T_H'] == '')
                {
                    $R_A_T_H = '10';
                }else{
                    $R_A_T_H = $row2['R_A_T_H'];
                }
                if($row2['R_A_W_E_H'] == '')
                {
                    $R_A_W_E_H = '10';
                }else{
                    $R_A_W_E_H = $row2['R_A_W_E_H'];
                }
                if($row2['R_A_P_Q_H'] == '')
                {
                    $R_A_P_Q_H = '10';
                }else{
                    $R_A_P_Q_H = $row2['R_A_P_Q_H'];
                }
                if($row2['R_A_C_H'] == '')
                {
                    $R_A_C_H = '10';
                }else{
                    $R_A_C_H = $row2['R_A_C_H'];
                }
                if($row2['R_A_S_H'] == '')
                {
                    $R_A_S_H = '10';
                }else{
                    $R_A_S_H = $row2['R_A_S_H'];
                }
                if($row2['R_A_P_H'] == '')
                {
                    $R_A_P_H = '10';
                }else{
                    $R_A_P_H = $row2['R_A_P_H'];
                }
                if($row2['R_A_A_Q_H'] == '')
                {
                    $R_A_A_Q_H = '10';
                }else{
                    $R_A_A_Q_H = $row2['R_A_A_Q_H'];
                }
                if($row2['R_A_R_H'] == '')
                {
                    $R_A_R_H = '10';
                }else{
                    $R_A_R_H = $row2['R_A_R_H'];
                }
                if($row2['R_A_E_A_H'] == '')
                {
                    $R_A_E_A_H = '10';
                }else{
                    $R_A_E_A_H = $row2['R_A_E_A_H'];
                }
            }
        }else{
            $L_A_A_M_H = '10';
            $L_A_L_H = '10';
            $L_A_P_D_H = '10';
            $R_A_T_H = '10';
            $R_A_W_E_H4 = '10';
            $R_A_P_Q_H = '10';
            $R_A_C_H = '10';
            $R_A_S_H = '10';
            $R_A_P_H = '10';
            $R_A_A_Q_H = '10';
            $R_A_R_H = '10';
            $R_A_E_A_H = '10';


        }
        if($Languages == 1){
            $query1 = "SELECT * FROM languages WHERE User_ID = $U_ID";
            $result1 = mysqli_query($conn, $query1);
            $Lan_output = '<div id="Languages" class="col-md-11" style="min-height: '.$L_A_L_H.'mm;">
            <h5 class="text-center fw-bold" style="background-color: '.$L_A_L_BG.'; color: '.$L_A_L_TE.'; border-top-right-radius: 70px; border-bottom-right-radius: 70px;">LANGUAGES</h5>';
                
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    
                    $Lan_output .= '
                    
                        <div class="ms-3" id="add_language">
                        <p class="font-bold" style="color: '.$L_A_TE.';">'.$row1["Language"].'</p>
                            <div class="progress-bar mb-2" style="background-color: '.$L_P_B_B_C.' ;">
                                <div class="level'.$row1["State"].' " style="background-color: '.$L_P_L.' ;">
                                </div>
                            </div>
                        </div>
                    ';
                    
                
            }
            $Lan_output .= '</div>';

        }else
        {
            $Lan_output = '';
            $Lan_output .= '';
        }

        if($work == 1){
            $query9 = "SELECT * FROM work_exeperince WHERE User_ID = $U_ID";
            $result9 = mysqli_query($conn, $query9);
            $We_output = '<h5 class="fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">WORK EXPERIENCE</h5>
                            ';
                
                while($row9 = mysqli_fetch_assoc($result9))
                {
                    
                    $We_output .= '
                    <div class="col-md-12 row mt-3 ms-1">
                    <div class="col-md-3 rightline" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row9["Company_Name"].'</h5>
                    <h5 class="text-capitalize small">'.$row9["Year"].'</h5>
                    </div>

                    <div class="col-md-8 ms-2" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row9["Position"].'</h5>
                    <p>'.$row9["Info"].'</p>
                    </div>
                    </div>
                    ';
                    
                
            }
            $We_output .= '';

        }else
        {
            $We_output = '';
            $We_output .= '';
        }

        if($PQ == 1){
            $query2 = "SELECT * FROM professional_qualifications WHERE User_ID = $U_ID";
            $result2 = mysqli_query($conn, $query2);
            $PQ_output = '<h5 class="fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">PROFESSIONAL QUALIFICATIONS</h5>
                            ';
                
                while($row2 = mysqli_fetch_assoc($result2))
                {
                    
                    $PQ_output .= '
                    <div class="col-md-12 row mt-3 ms-1">
                    <div class="col-md-3 rightline" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row2["Cooladge_Name"].'</h5>
                    <h5 class="text-capitalize small">'.$row2["C_where"].'</h5>
                    <h5 class="text-capitalize small">'.$row2["Year"].'</h5>
                    </div>

                    <div class="col-md-8 ms-2" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row2["Cource_Name"].'</h5>
                    <p>'.$row2["Info"].'</p>
                    </div>
                    </div>
                    ';
                    
                
            }
            $PQ_output .= '';

        }else
        {
            $PQ_output = '';
            $PQ_output .= '';
        }

        if($Cources == 1){
            $query3 = "SELECT * FROM cources WHERE User_ID = $U_ID";
            $result3 = mysqli_query($conn, $query3);
            $C_output = '<h5 class="mt-3 fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">COURSES</h5>
                            ';
                
                while($row3 = mysqli_fetch_assoc($result3))
                {
                    
                    $C_output .= '
                    <div class="col-md-12 row mt-3 ms-1" style="color: '.$R_A_TE.' ;">
                    <div class="col-md-3 rightline">
                    <h5 class="text-uppercase font-bold small">'.$row3["Insitiude_Name"].'</h5>
                    <h5 class="text-capitalize small">'.$row3["I_Where"].'</h5>
                    <h5 class="text-capitalize small">'.$row3["Year"].'</h5>
                    </div>

                    <div class="col-md-8 ms-2" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row3["Cource_Name"].'</h5>
                    <p>'.$row3["Info"].'</p>
                    </div>
                    </div>
                    ';
                    
                
            }
            $C_output .= '';

        }else
        {
            $C_output = '';
            $C_output .= '';
        }

        if($Skills == 1){
            $query4 = "SELECT * FROM skills WHERE User_ID = $U_ID";
            $result4 = mysqli_query($conn, $query4);
            $Skill_output = '<h5 class="mt-3 fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">SKILLS</h5>
                                ';
                
                while($row4 = mysqli_fetch_assoc($result4))
                {
                    
                    $Skill_output .= '
                    <div class="col-md-12 mt-3 ms-1" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row4["Name"].'</h5>
                    <div class="progress-bar mb-2" style="background-color: '.$R_P_B_B_C.' ;">
                        <div class="level'.$row4["State"].'" style="background-color: '.$R_P_L.' ;"></div>
                    </div>
                    </div>
                    ';
                    
                
            }
            $Skill_output .= '';

        }else
        {
            $Skill_output = '';
            $Skill_output .= '';
        }

        if($Projects == 1){
            $query5 = "SELECT * FROM Projects WHERE User_ID = $U_ID";
            $result5 = mysqli_query($conn, $query5);
            $Project_output = '<h5 class="mt-3 fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">PROJECTS</h5>
                                ';
                
                while($row5 = mysqli_fetch_assoc($result5))
                {
                    
                    $Project_output .= '
                    <div class="col-md-12 mt-3 ms-1" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row5["Topic"].'</h5>
                    <p class=" font-bold small">'.$row5["T_Explain"].'</p>
                    </div>
                    ';
                    
                
            }
            $Project_output .= '';

        }else
        {
            $Project_output = '';
            $Project_output .= '';
        }

        if($AQ == 1){

            $AQ_output = '';
            $AQ_output .= '<h5 class="fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">ACADEMIC QUALIFICATIONS</h5>';

        }else
        {
            $AQ_output = '';
            $AQ_output .= '';
        }
        if($AQ && $AL_Results == 1){
            $query6 = "SELECT * FROM al_results WHERE User_ID = $U_ID";
            $result6 = mysqli_query($conn, $query6);
            $AL_output = '<h5 class="text-uppercase font-bold small col-md-12 mt-4 ms-3" style="color: '.$R_A_TE.' ;">• Educational Qualification: G C E A/L - '.$AL_Year.'</h5>
            <div class="col-md-12 row" style="color: '.$R_A_TE.' ;">
            <p class="text-uppercase font-bold small col-md-5 ms-5" style="border-bottom: 2px solid '.$R_A_L.';">Subject</p>
            <p class="text-uppercase font-bold small" style="border-bottom: 2px solid '.$R_A_L.';">Result</p>
            </div>
            ';
                
                while($row6 = mysqli_fetch_assoc($result6))
                {
                    if($row6["Result"] == 1)
                    {
                        $result = 'A';
                    }else
                    if($row6["Result"] == 2)
                    {
                        $result = 'B';
                    }else
                    if($row6["Result"] == 3)
                    {
                        $result = 'C';
                    }else
                    if($row6["Result"] == 4)
                    {
                        $result = 'S';
                    }else
                    if($row6["Result"] == 5)
                    {
                        $result = 'S';
                    }

                    $AL_output .= '
                    <div class="col-md-12 row" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-capitalize font-bold small col-md-5 ms-5">'.$row6["Subject"].'</h5>
                    <p class="font-bold small col-md-1 text-center">'.$result.'</p>
                    </div>
                    ';
                    
                
            }
            $AL_output .= '';

        }else
        {
            $AL_output = '';
            $AL_output .= '';
        }

        if($AQ && $OL_Results == 1){
            $query7 = "SELECT * FROM ol_results WHERE User_ID = $U_ID";
            $result7 = mysqli_query($conn, $query7);
            $OL_output = '<h5 class="text-uppercase font-bold small col-md-12 mt-4 ms-3" style="color: '.$R_A_TE.' ;">• Educational Qualification: G C E O/L - '.$OL_Year.'</h5>
            <div class="col-md-12 row" style="color: '.$R_A_TE.' ;">
            <p class="text-uppercase font-bold small col-md-5 ms-5" style="border-bottom: 2px solid '.$R_A_L.';">Subject</p>
            <p class="text-uppercase font-bold small" style="border-bottom: 2px solid '.$R_A_L.';">Result</p>
            </div>';
                
                while($row7 = mysqli_fetch_assoc($result7))
                {
                    if($row7["Result"] == 1)
                    {
                        $result = 'A';
                    }else
                    if($row7["Result"] == 2)
                    {
                        $result = 'B';
                    }else
                    if($row7["Result"] == 3)
                    {
                        $result = 'C';
                    }else
                    if($row7["Result"] == 4)
                    {
                        $result = 'S';
                    }else
                    if($row7["Result"] == 5)
                    {
                        $result = 'S';
                    }
                    $OL_output .= '
                    <div class="col-md-12 row" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-capitalize font-bold small col-md-5 ms-5">'.$row7["Subject"].'</h5>
                    <p class=" font-bold small col-md-1 text-center">'.$result.'</p>
                    </div>
                    ';
                    
                
            }
            $OL_output .= '';

        }else
        {
            $OL_output = '';
            $OL_output .= '';
        }

        if($Extra == 1){
            $query9 = "SELECT * FROM extra_activity WHERE User_ID = $U_ID";
            $result9 = mysqli_query($conn, $query9);
            $Ex_output = '<h5 class="mt-3 fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">EXTRA ACTIVITY</h5>
                            ';
                
                while($row8 = mysqli_fetch_assoc($result9))
                {
                    
                    $Ex_output .= '
                    <div class="col-md-12 ms-5 row">
                        <div class="col-md-1 ms-4 " style="color: '.$R_A_TE.' ;">
                            <p class="lh-1">•</p>
                        </div>
                        <div class="col-md-6 " style="color: '.$R_A_TE.' ;">
                            <p class="lh-1">'.$row8["Activity"].'</p>
                        </div>
                    </div>
                    ';
                    
                
            }
            $Ex_output .= '';

        }else
        {
            $Ex_output = '';
            $Ex_output .= '';
        }
        
        if($Reference == 1){
            $query8 = "SELECT * FROM u_references WHERE User_ID = $U_ID";
            $result8 = mysqli_query($conn, $query8);
            $R_output = '<h5 class="mt-3 fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">REFERENCES</h5>
                            ';
                
                while($row8 = mysqli_fetch_assoc($result8))
                {
                    
                    $R_output .= '
                    <div class="col-md-12 ms-5 row">
                        <div class="col-md-1 ms-4 mt-4" style="color: '.$R_A_TE.' ;">
                            <p class="lh-1">•</p>
                        </div>
                        <div class="col-md-6 mt-4" style="color: '.$R_A_TE.' ;">
                            <p class="lh-1">'.$row8["Name"].'</p>
                            <p class="lh-1">'.$row8["Position"].'</p>
                            <p class="lh-1">Mob: '.$row8["Tel"].'</p>
                        </div>
                    </div>
                    ';
                    
                
            }
            $R_output .= '';

        }else
        {
            $R_output = '';
            $R_output .= '';
        }


        ?>

        <link rel="stylesheet" href="../assets/CSS/mystyle.css">
        <link rel="stylesheet" href="../assets/CSS/my_bootstrap.css">
        <link rel="stylesheet" href="../assets/CSS/icofont.css">


        <div class="grid-container" id="main">
            <div class="row">
                <div class="col-md-5" style="background-color: <?php echo $L_A_BG ?>;">

                    <div class="toCenter">
                        <div class="profile" style="overflow: hidden;">
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($profile)?>" height="100%" width="100%">
                        </div>
                    </div>

                    <div id="About_Me" style="min-height: <?php echo $L_A_A_M_H ?>mm ;" class="col-md-11">
                        <h5 class="text-center fw-bold" style="background-color: <?php echo $L_A_L_BG ?>; color: <?php echo $L_A_L_TE ?>; border-top-right-radius: 70px; border-bottom-right-radius: 70px;">ABOUT ME</h5>
                        <div class="toCenter">
                            <textarea name="" id="" cols="35" rows="8" class="bg-transparent" maxlength="300" readonly style="color: <?php echo $L_A_TE ?>;"><?php echo ucwords($About_Me); ?></textarea>
                        </div>
                    </div>

                    <?php 
                        echo $Lan_output;
                    ?>
                    

                    <div id="Personal_details" class="col-md-11">
                        <h5 class="text-center fw-bold" style="background-color: <?php echo $L_A_L_BG ?>; color: <?php echo $L_A_L_TE ?>; border-top-right-radius: 70px; border-bottom-right-radius: 70px;">PERSONAL DETAILS</h5>
                        <div class="ms-3" style="color: <?php echo $L_A_TE ?>;">
                            <p class=" font-bold">Date of Birth</p>
                            <p class=" ms-3"><?php echo $DOB; ?></p>
                            <p class=" font-bold">Civil Status</p>
                            <p class=" ms-3"><?php echo ucwords($CS); ?></p>
                            <p class=" font-bold">Religion</p>
                            <p class=" ms-3"><?php echo ucwords($Religion); ?></p>
                            <p class=" font-bold">National ID Card Number</p>
                            <p class=" ms-3"><?php echo $NIC; ?></p>
                            <p class=" font-bold">School Attended</p>
                            <p class=" ms-3"><?php echo $School; ?></p>
                        </div>
                        
                    </div>
                </div>

                <div class="col-md-7 ms-1" id="page1" style="background-color: <?php echo $R_A_BG ?>;">
                    <div class="content">
                    <div class="col-md-12 row mb-4 ms-1" style="min-height: <?php echo $R_A_T_H ?>mm ;">
                        <div class="col-md-5" style="color: <?php echo $R_A_TE ?>;">
                            <h2 id="name" class="fw-bold"><?php echo ucwords($Name); ?></h2>
                        </div>
                        <div class="col-md-7" style="color: <?php echo $R_A_TE ?>;">
                            <p><i class="icofont-location-pin"></i> <?php echo $Address; ?></p>
                            <p><i class="icofont-phone"></i> <?php echo $Contact_Number; ?></p>
                            <p><i class="icofont-email"></i> <?php echo $Email; ?></p>
                        </div>
                    </div>

                    <div style="min-height: <?php echo $R_A_W_E_H ?>mm ;">
                        <?php echo $We_output; ?>
                    </div>

                    <div style="min-height: <?php echo $R_A_P_Q_H ?>mm ;">
                        <?php echo $PQ_output; ?>
                    </div>
                    
                    <div style="min-height: <?php echo $R_A_C_H ?>mm ;">
                        <?php echo $C_output; ?>
                    </div>
                    
                    <div style="min-height: <?php echo $R_A_S_H ?>mm ;">
                        <?php echo $Skill_output; ?>
                    </div>
                    
                    <div style="min-height: <?php echo $R_A_P_H ?>mm ;">
                        <?php echo $Project_output; ?>
                    </div>
                    
                    <div style="min-height: <?php echo $R_A_A_Q_H ?>mm ;">
                        <?php echo $AQ_output; ?>
                        <?php echo $AL_output; ?>
                        <?php echo $OL_output; ?>
                    </div>

                    <div style="min-height: <?php echo $R_A_E_A_H ?>mm ;">
                        <?php echo $Ex_output; ?>
                    </div>

                    <div style="min-height: <?php echo $R_A_R_H ?>mm ;">
                        <?php echo $R_output; ?>
                    </div>

                    </div>
                    

                    
                    </div>
                </div>
                
                
            </div>
        </div>

        <div class="mt-5">
        <div class="grid-container1">
            <div class="row">
                <div class="col-md-12" id="page2" data-overflow="#page1" style="background-color: <?php echo $R_A_BG ?>;"></div>
            </div>
        </div>
        </div>

        <div class="mt-5">
        <div class="grid-container1">
            <div class="row">
                <div class="col-md-12" id="page3" data-overflow="#page2" style="background-color: <?php echo $R_A_BG ?>;"></div>
            </div>
        </div>
        </div>

        <script src="../assets/JS/jQuery.js"></script>

        <script>
        $(document).ready(function()
        {

            $('#page2[data-overflow]').each(function(index) {        
            var $this = $(this),
            $parent = $(document.getElementById('page1'));
        
            $this.html($parent.html()).find('.content').css({ marginTop: -270+"mm"});

            });

            $('#page3[data-overflow]').each(function(index) {        
            var $this = $(this),
            $parent = $(document.getElementById('page2'));
        
            $this.html($parent.html()).find('.content').css({ marginTop: -570+"mm"});

            });
        });
        </script>
        <?php 
    }else

    if($T_ID == 2){

        $query1 = "SELECT * FROM template_color WHERE User_ID = $U_ID && Temp_ID = $T_ID ";
        $resul1 = mysqli_query($conn, $query1);
        if(mysqli_num_rows($resul1) > 0)
                {
            
            while($row1 = mysqli_fetch_array($resul1))
            {
                if($row1['T_L_BG'] == '')
                {
                    $T_L_BG = '#0d6efd';
                }else{
                    $T_L_BG = $row1['T_L_BG'];
                }

                if($row1['L_A_BG'] == '')
                {
                    $L_A_BG = '#0d6efd';
                }else{
                    $L_A_BG = $row1['L_A_BG'];
                }

                if($row1['L_A_TE'] == '')
                {
                    $L_A_TE = '#fff';
                }else{
                    $L_A_TE = $row1['L_A_TE'];
                }

                if($row1['L_A_L_BG'] == '')
                {
                    $L_A_L_BG = '#212529';
                }else{
                    $L_A_L_BG = $row1['L_A_L_BG'];
                }

                if($row1['L_A_L_TE'] == '')
                {
                    $L_A_L_TE = '#fff';
                }else{
                    $L_A_L_TE = $row1['L_A_L_TE'];
                }

                if($row1['R_A_BG'] == '')
                {
                    $R_A_BG = '#f8f9fa';
                }else{
                    $R_A_BG = $row1['R_A_BG'];
                }

                if($row1['R_A_TE'] == '')
                {
                    $R_A_TE = '#212529';
                }else{
                    $R_A_TE = $row1['R_A_TE'];
                }

                if($row1['R_A_L_BG'] == '')
                {
                    $R_A_L_BG = '#f8f9fa';
                }else{
                    $R_A_L_BG = $row1['R_A_L_BG'];
                }

                if($row1['R_A_L_TE'] == '')
                {
                    $R_A_L_TE = '#212529';
                }else{
                    $R_A_L_TE = $row1['R_A_L_TE'];
                }

                if($row1['R_A_L'] == '')
                {
                    $R_A_L = '#212529';
                }else{
                    $R_A_L = $row1['R_A_L'];
                }

                if($row1['L_P_B_B_C'] == '')
                {
                    $L_P_B_B_C = '#6c757d';
                }else{
                    $L_P_B_B_C = $row1['L_P_B_B_C'];
                }

                if($row1['L_P_L'] == '')
                {
                    $L_P_L = '#212529';
                }else{
                    $L_P_L = $row1['L_P_L'];
                }

                if($row1['R_P_B_B_C'] == '')
                {
                    $R_P_B_B_C = '#6c757d';
                }else{
                    $R_P_B_B_C = $row1['R_P_B_B_C'];
                }

                if($row1['R_P_L'] == '')
                {
                    $R_P_L = '#212529';
                }else{
                    $R_P_L = $row1['R_P_L'];
                }
                
            }
        }else{
            $T_L_BG = '#0d6efd';
            $L_A_BG = '#0d6efd';
            $L_A_TE = '#fff';
            $L_A_L_BG = '#212529';
            $L_A_L_TE = '#fff';
            $R_A_BG = '#f8f9fa';
            $R_A_TE = '#212529';
            $R_A_L_BG = '#f8f9fa';
            $R_A_L_TE = '#212529';
            $R_A_L = '#212529';
            $L_P_B_B_C = '#6c757d';
            $L_P_L = '#212529';
            $R_P_B_B_C = '#6c757d';
            $R_P_L = '#212529';
        }

        $query2 = "SELECT * FROM templete_height WHERE User_ID = $U_ID && Temp_ID = $T_ID ";
        $resul2 = mysqli_query($conn, $query2);
        if(mysqli_num_rows($resul2) > 0)
                {
            
            while($row2 = mysqli_fetch_array($resul2))
            {
                if($row2['L_A_A_M_H'] == '')
                {
                    $L_A_A_M_H = '10';
                }else{
                    $L_A_A_M_H = $row2['L_A_A_M_H'];
                }
                if($row2['L_A_L_H'] == '')
                {
                    $L_A_L_H = '10';
                }else{
                    $L_A_L_H = $row2['L_A_L_H'];
                }
                if($row2['L_A_P_D_H'] == '')
                {
                    $L_A_P_D_H = '10';
                }else{
                    $L_A_P_D_H = $row2['L_A_P_D_H'];
                }
                if($row2['R_A_T_H'] == '')
                {
                    $R_A_T_H = '10';
                }else{
                    $R_A_T_H = $row2['R_A_T_H'];
                }
                if($row2['R_A_W_E_H'] == '')
                {
                    $R_A_W_E_H = '10';
                }else{
                    $R_A_W_E_H = $row2['R_A_W_E_H'];
                }
                if($row2['R_A_P_Q_H'] == '')
                {
                    $R_A_P_Q_H = '10';
                }else{
                    $R_A_P_Q_H = $row2['R_A_P_Q_H'];
                }
                if($row2['R_A_C_H'] == '')
                {
                    $R_A_C_H = '10';
                }else{
                    $R_A_C_H = $row2['R_A_C_H'];
                }
                if($row2['R_A_S_H'] == '')
                {
                    $R_A_S_H = '10';
                }else{
                    $R_A_S_H = $row2['R_A_S_H'];
                }
                if($row2['R_A_P_H'] == '')
                {
                    $R_A_P_H = '10';
                }else{
                    $R_A_P_H = $row2['R_A_P_H'];
                }
                if($row2['R_A_A_Q_H'] == '')
                {
                    $R_A_A_Q_H = '10';
                }else{
                    $R_A_A_Q_H = $row2['R_A_A_Q_H'];
                }
                if($row2['R_A_R_H'] == '')
                {
                    $R_A_R_H = '10';
                }else{
                    $R_A_R_H = $row2['R_A_R_H'];
                }
                if($row2['R_A_E_A_H'] == '')
                {
                    $R_A_E_A_H = '10';
                }else{
                    $R_A_E_A_H = $row2['R_A_E_A_H'];
                }
            }
        }else{
            $L_A_A_M_H = '10';
            $L_A_L_H = '10';
            $L_A_P_D_H = '10';
            $R_A_T_H = '10';
            $R_A_W_E_H = '10';
            $R_A_P_Q_H = '10';
            $R_A_C_H = '10';
            $R_A_S_H = '10';
            $R_A_P_H = '10';
            $R_A_A_Q_H = '10';
            $R_A_R_H = '10';
            $R_A_E_A_H = '10';

        }
        if($Languages == 1){
            $query1 = "SELECT * FROM languages WHERE User_ID = $U_ID";
            $result1 = mysqli_query($conn, $query1);
            $Lan_output = '<div id="Languages" class="col-md-11" style="min-height: '.$L_A_L_H.'mm;">
            <div style="background-color: '.$L_A_L_BG.'; color: '.$L_A_L_TE.'; border-top-right-radius: 50px; border-bottom-right-radius: 50px;">
                <h5 class="ms-3 fw-bold">LANGUAGES</h5>
            </div>';
                
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    
                    $Lan_output .= '
                    
                        <div class="ms-3" id="add_language">
                        <p class="font-bold" style="color: '.$L_A_TE.';">'.$row1["Language"].'</p>
                            <div class="progress-bar mb-2" style="background-color: '.$L_P_B_B_C.' ;">
                                <div class="level'.$row1["State"].' " style="background-color: '.$L_P_L.' ;">
                                </div>
                            </div>
                        </div>
                    ';
                    
                
            }
            $Lan_output .= '</div>';

        }else
        {
            $Lan_output = '';
            $Lan_output .= '';
        }

        if($PQ == 1){
            $query2 = "SELECT * FROM professional_qualifications WHERE User_ID = $U_ID";
            $result2 = mysqli_query($conn, $query2);
            $PQ_output = '<h5 class="fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">PROFESSIONAL QUALIFICATIONS</h5>
                            ';
                
                while($row2 = mysqli_fetch_assoc($result2))
                {
                    
                    $PQ_output .= '
                    <div class="col-md-12 row mt-3 ms-1">
                    <div class="col-md-3 rightline" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row2["Cooladge_Name"].'</h5>
                    <h5 class="text-capitalize small">'.$row2["C_where"].'</h5>
                    <h5 class="text-capitalize small">'.$row2["Year"].'</h5>
                    </div>

                    <div class="col-md-8 ms-2" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row2["Cource_Name"].'</h5>
                    <p>'.$row2["Info"].'</p>
                    </div>
                    </div>
                    ';
                    
                
            }
            $PQ_output .= '';

        }else
        {
            $PQ_output = '';
            $PQ_output .= '';
        }

        if($Cources == 1){
            $query3 = "SELECT * FROM cources WHERE User_ID = $U_ID";
            $result3 = mysqli_query($conn, $query3);
            $C_output = '<h5 class="mt-3 fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">COURSES</h5>
                            ';
                
                while($row3 = mysqli_fetch_assoc($result3))
                {
                    
                    $C_output .= '
                    <div class="col-md-12 row mt-3 ms-1" style="color: '.$R_A_TE.' ;">
                    <div class="col-md-3 rightline">
                    <h5 class="text-uppercase font-bold small">'.$row3["Insitiude_Name"].'</h5>
                    <h5 class="text-capitalize small">'.$row3["I_Where"].'</h5>
                    <h5 class="text-capitalize small">'.$row3["Year"].'</h5>
                    </div>

                    <div class="col-md-8 ms-2" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row3["Cource_Name"].'</h5>
                    <p>'.$row3["Info"].'</p>
                    </div>
                    </div>
                    ';
                    
                
            }
            $C_output .= '';

        }else
        {
            $C_output = '';
            $C_output .= '';
        }

        if($Skills == 1){
            $query4 = "SELECT * FROM skills WHERE User_ID = $U_ID";
            $result4 = mysqli_query($conn, $query4);
            $Skill_output = '<h5 class="mt-3 fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">SKILLS</h5>
                                ';
                
                while($row4 = mysqli_fetch_assoc($result4))
                {
                    
                    $Skill_output .= '
                    <div class="col-md-12 mt-3 ms-1" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row4["Name"].'</h5>
                    <div class="progress-bar mb-2" style="background-color: '.$R_P_B_B_C.' ;">
                        <div class="level'.$row4["State"].'" style="background-color: '.$R_P_L.' ;"></div>
                    </div>
                    </div>
                    ';
                    
                
            }
            $Skill_output .= '';

        }else
        {
            $Skill_output = '';
            $Skill_output .= '';
        }

        if($Projects == 1){
            $query5 = "SELECT * FROM Projects WHERE User_ID = $U_ID";
            $result5 = mysqli_query($conn, $query5);
            $Project_output = '<h5 class="mt-3 fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">PROJECTS</h5>
                                ';
                
                while($row5 = mysqli_fetch_assoc($result5))
                {
                    
                    $Project_output .= '
                    <div class="col-md-12 mt-3 ms-1" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row5["Topic"].'</h5>
                    <p class=" font-bold small">'.$row5["T_Explain"].'</p>
                    </div>
                    ';
                    
                
            }
            $Project_output .= '';

        }else
        {
            $Project_output = '';
            $Project_output .= '';
        }

        if($AQ == 1){

            $AQ_output = '';
            $AQ_output .= '<h5 class="fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">ACADEMIC QUALIFICATIONS</h5>';

        }else
        {
            $AQ_output = '';
            $AQ_output .= '';
        }
        if($AQ && $AL_Results == 1){
            $query6 = "SELECT * FROM al_results WHERE User_ID = $U_ID";
            $result6 = mysqli_query($conn, $query6);
            $AL_output = '<h5 class="text-uppercase font-bold small col-md-12 mt-4 ms-3" style="color: '.$R_A_TE.' ;">• Educational Qualification: G C E A/L - '.$AL_Year.'</h5>
            <div class="col-md-12 row" style="color: '.$R_A_TE.' ;">
            <p class="text-uppercase font-bold small col-md-5 ms-5" style="border-bottom: 2px solid '.$R_A_L.';">Subject</p>
            <p class="text-uppercase font-bold small" style="border-bottom: 2px solid '.$R_A_L.';">Result</p>
            </div>
            ';
                
                while($row6 = mysqli_fetch_assoc($result6))
                {
                    if($row6["Result"] == 1)
                    {
                        $result = 'A';
                    }else
                    if($row6["Result"] == 2)
                    {
                        $result = 'B';
                    }else
                    if($row6["Result"] == 3)
                    {
                        $result = 'C';
                    }else
                    if($row6["Result"] == 4)
                    {
                        $result = 'S';
                    }else
                    if($row6["Result"] == 5)
                    {
                        $result = 'S';
                    }

                    $AL_output .= '
                    <div class="col-md-12 row" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-capitalize font-bold small col-md-5 ms-5">'.$row6["Subject"].'</h5>
                    <p class="font-bold small col-md-1 text-center">'.$result.'</p>
                    </div>
                    ';
                    
                
            }
            $AL_output .= '';

        }else
        {
            $AL_output = '';
            $AL_output .= '';
        }

        if($AQ && $OL_Results == 1){
            $query7 = "SELECT * FROM ol_results WHERE User_ID = $U_ID";
            $result7 = mysqli_query($conn, $query7);
            $OL_output = '<h5 class="text-uppercase font-bold small col-md-12 mt-4 ms-3" style="color: '.$R_A_TE.' ;">• Educational Qualification: G C E O/L - '.$OL_Year.'</h5>
            <div class="col-md-12 row" style="color: '.$R_A_TE.' ;">
            <p class="text-uppercase font-bold small col-md-5 ms-5" style="border-bottom: 2px solid '.$R_A_L.';">Subject</p>
            <p class="text-uppercase font-bold small" style="border-bottom: 2px solid '.$R_A_L.';">Result</p>
            </div>';
                
                while($row7 = mysqli_fetch_assoc($result7))
                {
                    if($row7["Result"] == 1)
                    {
                        $result = 'A';
                    }else
                    if($row7["Result"] == 2)
                    {
                        $result = 'B';
                    }else
                    if($row7["Result"] == 3)
                    {
                        $result = 'C';
                    }else
                    if($row7["Result"] == 4)
                    {
                        $result = 'S';
                    }else
                    if($row7["Result"] == 5)
                    {
                        $result = 'S';
                    }
                    $OL_output .= '
                    <div class="col-md-12 row" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-capitalize font-bold small col-md-5 ms-5">'.$row7["Subject"].'</h5>
                    <p class=" font-bold small col-md-1 text-center">'.$result.'</p>
                    </div>
                    ';
                    
                
            }
            $OL_output .= '';

        }else
        {
            $OL_output = '';
            $OL_output .= '';
        }
        
        if($Extra == 1){
            $query9 = "SELECT * FROM extra_activity WHERE User_ID = $U_ID";
            $result9 = mysqli_query($conn, $query9);
            $Ex_output = '<h5 class="mt-3 fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">EXTRA ACTIVITY</h5>
                            ';
                
                while($row8 = mysqli_fetch_assoc($result9))
                {
                    
                    $Ex_output .= '
                    <div class="col-md-12 ms-5 row">
                        <div class="col-md-1 ms-4 mt-1" style="color: '.$R_A_TE.' ;">
                            <p class="lh-1">•</p>
                        </div>
                        <div class="col-md-6 mt-1" style="color: '.$R_A_TE.' ;">
                            <p class="lh-1">'.$row8["Activity"].'</p>
                        </div>
                    </div>
                    ';
                    
                
            }
            $Ex_output .= '';

        }else
        {
            $Ex_output = '';
            $Ex_output .= '';
        }

        if($Reference == 1){
            $query8 = "SELECT * FROM u_references WHERE User_ID = $U_ID";
            $result8 = mysqli_query($conn, $query8);
            $R_output = '<h5 class="mt-3 fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">REFERENCES</h5>
                            ';
                
                while($row8 = mysqli_fetch_assoc($result8))
                {
                    
                    $R_output .= '
                    <div class="col-md-12 ms-5 row">
                        <div class="col-md-1 ms-4 mt-4" style="color: '.$R_A_TE.' ;">
                            <p class="lh-1">•</p>
                        </div>
                        <div class="col-md-6 mt-4" style="color: '.$R_A_TE.' ;">
                            <p class="lh-1">'.$row8["Name"].'</p>
                            <p class="lh-1">'.$row8["Position"].'</p>
                            <p class="lh-1">Mob: '.$row8["Tel"].'</p>
                        </div>
                    </div>
                    ';
                    
                
            }
            $R_output .= '';

        }else
        {
            $R_output = '';
            $R_output .= '';
        }
        if($work == 1){
            $query9 = "SELECT * FROM work_exeperince WHERE User_ID = $U_ID";
            $result9 = mysqli_query($conn, $query9);
            $We_output = '<h5 class="fw-bold" style="border-bottom: 2px solid '.$R_A_L.' ; background-color: '.$R_A_L_BG.'; color: '.$R_A_L_TE.';">WORK EXPERIENCE</h5>
                            ';
                
                while($row9 = mysqli_fetch_assoc($result9))
                {
                    
                    $We_output .= '
                    <div class="col-md-12 row mt-3 ms-1">
                    <div class="col-md-3 rightline" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row9["Company_Name"].'</h5>
                    <h5 class="text-capitalize small">'.$row9["Year"].'</h5>
                    </div>

                    <div class="col-md-8 ms-2" style="color: '.$R_A_TE.' ;">
                    <h5 class="text-uppercase font-bold small">'.$row9["Position"].'</h5>
                    <p>'.$row9["Info"].'</p>
                    </div>
                    </div>
                    ';
                    
                
            }
            $We_output .= '';

        }else
        {
            $We_output = '';
            $We_output .= '';
        }


        ?>

        <link rel="stylesheet" href="../assets/CSS/mystyle.css">
        <link rel="stylesheet" href="../assets/CSS/my_bootstrap.css">
        <link rel="stylesheet" href="../assets/CSS/icofont.css">


        <div class="grid-container1" id="main">
            <div class="position-absolute mt-5" style="min-width: 210mm; max-width: 210mm;">
                <div style="min-height: 120px; background-color: <?php echo $T_L_BG ?>; border-top-right-radius: 70px; border-bottom-right-radius: 70px;" class="row col-md-11" >
                    <div class="col-md-6 m-3" style="color: <?php echo $L_A_TE ?>;">
                        <h2 id="name" class="fw-bold"><?php echo ucwords($Name); ?></h2>
                    </div>
                </div>
                <div class="toright" style="margin-top: -150px;">
                    <div class="profile1" style="overflow: hidden;">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($profile)?>" height="100%" width="100%">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="background-color: <?php echo $L_A_BG ?>;">

                    <div style="margin-top: 180px;">

                    <div class="col-md-12 row mb-4 ms-1" style="min-height: <?php echo $R_A_T_H ?>mm ;">
                        
                        <div class="col-md-11 ms-3" style="color: <?php echo $L_A_TE ?>;">
                            <p><i class="icofont-location-pin"></i> <?php echo $Address; ?></p>
                            <p><i class="icofont-phone"></i> <?php echo $Contact_Number; ?></p>
                            <p><i class="icofont-email"></i> <?php echo $Email; ?></p>
                        </div>
                    </div>
    
                    
                    
                    <?php 
                        echo $Lan_output;
                    ?>
                    

                    <div id="Personal_details" class="col-md-11">
                        <div style="background-color: <?php echo $L_A_L_BG ?>; color: <?php echo $L_A_L_TE ?>; border-top-right-radius: 50px; border-bottom-right-radius: 50px;">
                            <h5 class="ms-3 fw-bold">PERSONAL DETAILS</h5>
                        </div>
                        <div class="ms-3" style="color: <?php echo $L_A_TE ?>;">
                            <p class=" font-bold">Date of Birth</p>
                            <p class=" ms-3"><?php echo $DOB; ?></p>
                            <p class=" font-bold">Civil Status</p>
                            <p class=" ms-3"><?php echo ucwords($CS); ?></p>
                            <p class=" font-bold">Religion</p>
                            <p class=" ms-3"><?php echo ucwords($Religion); ?></p>
                            <p class=" font-bold">National ID Card Number</p>
                            <p class=" ms-3"><?php echo $NIC; ?></p>
                            <p class=" font-bold">School Attended</p>
                            <p class=" ms-3"><?php echo $School; ?></p>
                        </div>
                        
                    </div>
                    </div>
                </div>

                <div class="col-md-7" id="page1" style="background-color: <?php echo $R_A_BG ?>;">
                    <div class="content">
                    <div style="margin-top: 200px;" class="ms-1">

                    <div id="About_Me " style="min-height: <?php echo $L_A_A_M_H ?>mm ;">
                        <h5 class="text-left fw-bold" style="border-bottom: 2px solid <?php echo $R_A_L?> ; background-color: <?php echo $R_A_L_BG?>; color: <?php echo $R_A_L_TE?>;">ABOUT ME</h5>
                        <div class="toCenter">
                            <textarea name="" id="" cols="54" rows="5" class="bg-transparent" maxlength="300" readonly style="color: <?php echo $R_A_TE ?>;"><?php echo ucwords($About_Me); ?></textarea>
                        </div>
                    </div>
                    
                    <div style="min-height: <?php echo $R_A_W_E_H ?>mm ;">
                        <?php echo $We_output; ?>
                    </div>

                    <div style="min-height: <?php echo $R_A_P_Q_H ?>mm ;">
                        <?php echo $PQ_output; ?>
                    </div>
                    
                    <div style="min-height: <?php echo $R_A_C_H ?>mm ;">
                        <?php echo $C_output; ?>
                    </div>
                    
                    <div style="min-height: <?php echo $R_A_S_H ?>mm ;">
                        <?php echo $Skill_output; ?>
                    </div>
                    
                    <div style="min-height: <?php echo $R_A_P_H ?>mm ;">
                        <?php echo $Project_output; ?>
                    </div>
                    
                    <div style="min-height: <?php echo $R_A_A_Q_H ?>mm ;">
                        <?php echo $AQ_output; ?>
                        <?php echo $AL_output; ?>
                        <?php echo $OL_output; ?>
                    </div>

                    <div style="min-height: <?php echo $R_A_E_A_H ?>mm ;">
                        <?php echo $Ex_output; ?>
                    </div>

                    <div style="min-height: <?php echo $R_A_R_H ?>mm ;">
                        <?php echo $R_output; ?>
                    </div>

                    </div>
                    </div>

                    
                    </div>
                </div>
                
                
            </div>
        </div>

        <div class="mt-5">
        <div class="grid-container1">
            <div class="row">
                <div class="col-md-12" id="page2" data-overflow="#page1" style="background-color: <?php echo $R_A_BG ?>;"></div>
            </div>
        </div>
        </div>

        <div class="mt-5">
        <div class="grid-container1">
            <div class="row">
                <div class="col-md-12" id="page3" data-overflow="#page2" style="background-color: <?php echo $R_A_BG ?>;"></div>
            </div>
        </div>
        </div>

        <script src="../assets/JS/jQuery.js"></script>

        <script>
        $(document).ready(function()
        {

            $('#page2[data-overflow]').each(function(index) {        
            var $this = $(this),
            $parent = $(document.getElementById('page1'));
        
            $this.html($parent.html()).find('.content').css({ marginTop: -270+"mm"});

            });

            $('#page3[data-overflow]').each(function(index) {        
            var $this = $(this),
            $parent = $(document.getElementById('page2'));
        
            $this.html($parent.html()).find('.content').css({ marginTop: -570+"mm"});

            });

        });
        </script>
        <?php 
    } 
        ?>