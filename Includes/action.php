<?php
    session_start(); 
    if(isset($_POST["action"]))
{
    require_once '../Database/DB_Connection.php';
// ========================================================================================
//                                  ALL UPDATE ACTIONS
// ========================================================================================
    if($_POST["action"] == "customFile_up")
    {
        $id = $_POST['User_ID2'];
        $file = addslashes(file_get_contents($_FILES["customFile"]["tmp_name"]));

        $query = "UPDATE personal_info SET Image='$file' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){

            echo 'done';
        }
    }

    if($_POST["action"] == "user_name")
    {
        $id = $_POST['id'];
        $name = $_POST['name'];

        $query = "UPDATE personal_info SET Name='$name' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){

            echo 'done';
        }
    }

    if($_POST["action"] == "About_Me")
    {
        $id = $_POST['id'];
        $About_Me = $_POST['About_Me'];

        $query = "UPDATE personal_info SET About_Me='$About_Me' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Contact_Number")
    {
        $id = $_POST['id'];
        $Contact_Number = $_POST['Contact_Number'];

        $query = "UPDATE personal_info SET Contact_Number='$Contact_Number' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Email")
    {
        $id = $_POST['id'];
        $Email = $_POST['Email'];

        $query = "UPDATE personal_info SET Email='$Email' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Address")
    {
        $id = $_POST['id'];
        $Address = $_POST['Address'];

        $query = "UPDATE personal_info SET Address='$Address' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "DOB")
    {
        $id = $_POST['id'];
        $DOB = $_POST['DOB'];

        $query = "UPDATE personal_info SET Date_of_Birth='$DOB' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "CS")
    {
        $id = $_POST['id'];
        $CS = $_POST['CS'];

        $query = "UPDATE personal_info SET Civil_Status='$CS' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Religion")
    {
        $id = $_POST['id'];
        $Religion = $_POST['Religion'];

        $query = "UPDATE personal_info SET Religion='$Religion' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "NIC")
    {
        $id = $_POST['id'];
        $NIC = $_POST['NIC'];

        $query = "UPDATE personal_info SET NIC='$NIC' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "School")
    {
        $id = $_POST['id'];
        $School = $_POST['School'];

        $query = "UPDATE personal_info SET School='$School' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "AL_Year")
    {
        $id = $_POST['id'];
        $AL_Year = $_POST['AL_Year'];

        $query = "UPDATE personal_info SET AL_Year='$AL_Year' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "OL_Year")
    {
        $id = $_POST['id'];
        $OL_Year = $_POST['OL_Year'];

        $query = "UPDATE personal_info SET OL_Year='$OL_Year' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "T_L_BG")
    {
        $id = $_POST['id'];
        $T_L_BG = $_POST['T_L_BG'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET T_L_BG='$T_L_BG' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "L_A_BG")
    {
        $id = $_POST['id'];
        $L_A_BG = $_POST['L_A_BG'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET L_A_BG='$L_A_BG' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "L_A_TE")
    {
        $id = $_POST['id'];
        $L_A_TE = $_POST['L_A_TE'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET L_A_TE='$L_A_TE' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }
    
    if($_POST["action"] == "L_A_L_BG")
    {
        $id = $_POST['id'];
        $L_A_L_BG = $_POST['L_A_L_BG'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET L_A_L_BG='$L_A_L_BG' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }
    
    if($_POST["action"] == "L_A_L_TE")
    {
        $id = $_POST['id'];
        $L_A_L_TE = $_POST['L_A_L_TE'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET L_A_L_TE='$L_A_L_TE' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }
    
    if($_POST["action"] == "R_A_BG")
    {
        $id = $_POST['id'];
        $R_A_BG = $_POST['R_A_BG'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET R_A_BG='$R_A_BG' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }
    
    if($_POST["action"] == "R_A_TE")
    {
        $id = $_POST['id'];
        $R_A_TE = $_POST['R_A_TE'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET R_A_TE='$R_A_TE' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }
    
    if($_POST["action"] == "R_A_L_BG")
    {
        $id = $_POST['id'];
        $R_A_L_BG = $_POST['R_A_L_BG'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET R_A_L_BG='$R_A_L_BG' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }
    
    if($_POST["action"] == "R_A_L_TE")
    {
        $id = $_POST['id'];
        $R_A_L_TE = $_POST['R_A_L_TE'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET R_A_L_TE='$R_A_L_TE' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_A_L")
    {
        $id = $_POST['id'];
        $R_A_L = $_POST['R_A_L'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET R_A_L='$R_A_L' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "L_A_A_M_H")
    {
        $id = $_POST['id'];
        $L_A_A_M_H = $_POST['L_A_A_M_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET L_A_A_M_H='$L_A_A_M_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "L_A_L_H")
    {
        $id = $_POST['id'];
        $L_A_L_H = $_POST['L_A_L_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET L_A_L_H='$L_A_L_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "L_A_P_D_H")
    {
        $id = $_POST['id'];
        $L_A_P_D_H = $_POST['L_A_P_D_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET L_A_P_D_H='$L_A_P_D_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_A_T_H")
    {
        $id = $_POST['id'];
        $R_A_T_H = $_POST['R_A_T_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET R_A_T_H='$R_A_T_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_A_W_E_H")
    {
        $id = $_POST['id'];
        $R_A_W_E_H = $_POST['R_A_W_E_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET R_A_W_E_H='$R_A_W_E_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_A_P_Q_H")
    {
        $id = $_POST['id'];
        $R_A_P_Q_H = $_POST['R_A_P_Q_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET R_A_P_Q_H='$R_A_P_Q_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_A_C_H")
    {
        $id = $_POST['id'];
        $R_A_C_H = $_POST['R_A_C_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET R_A_C_H='$R_A_C_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_A_S_H")
    {
        $id = $_POST['id'];
        $R_A_S_H = $_POST['R_A_S_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET R_A_S_H='$R_A_S_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_A_P_H")
    {
        $id = $_POST['id'];
        $R_A_P_H = $_POST['R_A_P_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET R_A_P_H='$R_A_P_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_A_A_Q_H")
    {
        $id = $_POST['id'];
        $R_A_A_Q_H = $_POST['R_A_A_Q_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET R_A_A_Q_H='$R_A_A_Q_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_A_R_H")
    {
        $id = $_POST['id'];
        $R_A_R_H = $_POST['R_A_R_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET R_A_R_H='$R_A_R_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_A_E_A_H")
    {
        $id = $_POST['id'];
        $R_A_E_A_H = $_POST['R_A_E_A_H'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE templete_height SET R_A_E_A_H='$R_A_E_A_H' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "L_P_B_B_C")
    {
        $id = $_POST['id'];
        $L_P_B_B_C = $_POST['L_P_B_B_C'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET L_P_B_B_C='$L_P_B_B_C' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "L_P_L")
    {
        $id = $_POST['id'];
        $L_P_L = $_POST['L_P_L'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET L_P_L='$L_P_L' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_P_B_B_C")
    {
        $id = $_POST['id'];
        $R_P_B_B_C = $_POST['R_P_B_B_C'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET R_P_B_B_C='$R_P_B_B_C' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "R_P_L")
    {
        $id = $_POST['id'];
        $R_P_L = $_POST['R_P_L'];
        $Temp_ID = $_POST['Temp_ID'];


        $query = "UPDATE template_color SET R_P_L='$R_P_L' WHERE Temp_ID ='$Temp_ID' && User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }


// ========================================================================================
//                                  ALL CHECKBOX UPDATE ACTIONS
// ========================================================================================
    if($_POST["action"] == "Expecheckbox")
    {
        $id = $_POST['id'];
        $checkbox_value = $_POST['checkbox_value'];

        $query = "UPDATE personal_info SET work_exeperince='$checkbox_value' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Pcheckbox")
    {
        $id = $_POST['id'];
        $checkbox_value = $_POST['checkbox_value'];

        $query = "UPDATE personal_info SET Professional_Qualifications='$checkbox_value' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Ccheckbox")
    {
        $id = $_POST['id'];
        $checkbox_value = $_POST['checkbox_value'];

        $query = "UPDATE personal_info SET Cources='$checkbox_value' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Scheckbox")
    {
        $id = $_POST['id'];
        $checkbox_value = $_POST['checkbox_value'];

        $query = "UPDATE personal_info SET Skills='$checkbox_value' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Pro_checkbox")
    {
        $id = $_POST['id'];
        $checkbox_value = $_POST['checkbox_value'];

        $query = "UPDATE personal_info SET Projects='$checkbox_value' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Aca_checkbox")
    {
        $id = $_POST['id'];
        $checkbox_value = $_POST['checkbox_value'];

        $query = "UPDATE personal_info SET Academic_Qualifications='$checkbox_value' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "AL_checkbox")
    {
        $id = $_POST['id'];
        $checkbox_value = $_POST['checkbox_value'];

        $query = "UPDATE personal_info SET AL_Results='$checkbox_value' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "OL_checkbox")
    {
        $id = $_POST['id'];
        $checkbox_value = $_POST['checkbox_value'];

        $query = "UPDATE personal_info SET OL_Results='$checkbox_value' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Extra_checkbox")
    {
        $id = $_POST['id'];
        $checkbox_value = $_POST['checkbox_value'];

        $query = "UPDATE personal_info SET Extra='$checkbox_value' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "References_checkbox")
    {
        $id = $_POST['id'];
        $checkbox_value = $_POST['checkbox_value'];

        $query = "UPDATE personal_info SET Reference='$checkbox_value' WHERE User_ID ='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }
// ========================================================================================
//                                  ALL FETCH ACTIONS
// ========================================================================================
    if($_POST["action"] == "fetch_exep")
    {
        $id = $_POST['id'];

        $query = "SELECT * FROM work_exeperince WHERE User_ID='$id'";
        $result = mysqli_query($conn, $query);
        $output = '';

        while($row1 = mysqli_fetch_array($result))
        {

        $output .= '<div class=" mt-3 row" id="Exe_delete'.$row1["ID"].'">
        <dl class="col-md-5">Company Name</dl>
        <div class="col-md-7">
        <input class="form-control" type="text" name="We_Name" id="We_Name" placeholder="Company Name" value="'.$row1["Company_Name"].'" readonly>
        </div>

        <dl class="col-md-5 mt-1">Position</dl>
        <div class="col-md-7 mt-1">
        <input class="form-control" type="text" name="Position" id="Position" placeholder="Position" value="'.$row1["Position"].'" readonly>
        </div>

        <dl class="col-md-5 mt-1">Year</dl>
        <div class="col-md-7 mt-1">
        <input class="form-control" type="text" name="We_year" id="We_year" placeholder="Ex: 2017 - 2020" value="'.$row1["Year"].'" readonly>
        </div>

        <dl class="col-md-5 mt-1">Info</dl>
        <div class="col-md-7 mt-1">
        <textarea class="form-control" name="We_info" id="We_info" cols="30" rows="" placeholder="Explain it" readonly>'.$row1["Info"].'</textarea>
        </div>

        <div class="col-md-12 mt-1 text-end">
        <button id="'.$row1["ID"].'" class="col-md-2 btn delWork btn-danger">X</button>
        </div>
        </div>';
            }
            echo $output;
    }
    if($_POST["action"] == "fetch_pro")
    {
        $id = $_POST['id'];

        $query = "SELECT * FROM professional_qualifications WHERE User_ID='$id'";
        $result = mysqli_query($conn, $query);
        $output = '';

        while($row1 = mysqli_fetch_array($result))
        {

        $output .= '<div class=" mt-3 row" id="Pro_delete'.$row1["ID"].'">
        <dl class="col-md-5">Coladge Name</dl>
        <div class="col-md-7">
          <input class="form-control" type="text" name="Pc_Name" id="Pc_Name" placeholder="Cooladge Name" value="'.$row1["Cooladge_Name"].'" readonly>
        </div>

        <dl class="col-md-5 mt-1">Where</dl>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Pc_where" id="Pc_where" placeholder="Location" value="'.$row1["C_where"].'" readonly>
        </div>

        <dl class="col-md-5 mt-1">Year</dl>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Pc_year" id="Pc_year" placeholder="Ex: 2017 - 2020" value="'.$row1["Year"].'" readonly>
        </div>

        <dl class="col-md-5 mt-1">Cource Name</dl>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Pc_cname" id="Pc_cname" placeholder="Cource Name" value="'.$row1["Cource_Name"].'" readonly>
        </div>

        <dl class="col-md-5 mt-1">Info</dl>
        <div class="col-md-7 mt-1">
          <textarea class="form-control" name="Pc_info1" id="Pc_info" cols="30" rows="" placeholder="Explain it" readonly>'.$row1["Info"].'</textarea>
        </div>

        <div class="col-md-12 mt-1 text-end">
          <button id="'.$row1["ID"].'" class="col-md-2 btn delPro btn-danger">X</button>
        </div>
      </div>';
        }
        echo $output;
    }

    if($_POST["action"] == "fetch_cou")
    {
        $id = $_POST['id'];

        $query = "SELECT * FROM cources WHERE User_ID='$id'";
        $result = mysqli_query($conn, $query);
        $output = '';

        while($row1 = mysqli_fetch_array($result))
        {

        $output .= '<div class=" mt-3 row" id="Cou_delete'.$row1["ID"].'">
        <dl class="col-md-5">Insitiude Name</dl>
        <div class="col-md-7">
          <input class="form-control" type="text" name="Pc_Name" id="Pc_Name" placeholder="Insitiude Name" value="'.$row1["Insitiude_Name"].'" readonly>
        </div>

        <dl class="col-md-5 mt-1">Where</dl>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Pc_where" id="Pc_where" placeholder="Location" value="'.$row1["I_Where"].'" readonly>
        </div>

        <dl class="col-md-5 mt-1">Year</dl>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Pc_year" id="Pc_year" placeholder="Ex: 2017 - 2020" value="'.$row1["Year"].'" readonly>
        </div>

        <dl class="col-md-5 mt-1">Cource Name</dl>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="Pc_cname" id="Pc_cname" placeholder="Cource Name" value="'.$row1["Cource_Name"].'" readonly>
        </div>

        <dl class="col-md-5 mt-1">Info</dl>
        <div class="col-md-7 mt-1">
          <textarea class="form-control" name="Pc_info1" id="Pc_info" cols="30" rows="" placeholder="Explain it" readonly>'.$row1["Info"].'</textarea>
        </div>

        <div class="col-md-12 mt-1 text-end">
          <button id="'.$row1["ID"].'" class="col-md-2 btn delCourse btn-danger">X</button>
        </div>
      </div>';
        }
        echo $output;
    }

    if($_POST["action"] == "fetch_project")
    {
        $id = $_POST['id'];

        $query = "SELECT * FROM projects WHERE User_ID='$id'";
        $result = mysqli_query($conn, $query);
        $output = '';

        while($row1 = mysqli_fetch_array($result))
        {

        $output .= '<div class="mt-3 row" id="Project_delete'.$row1["ID"].'">
        
        <div class="col-md-5 mt-1">
          <input class="form-control" type="text" name="" id="" placeholder="Project Topic" value="'.$row1["Topic"].'" readonly>
        </div>
        
        <div class="col-md-5 mt-1">
          <textarea class="form-control" name="" id="" cols="30" rows="1" placeholder="Explain it" readonly>'.$row1["T_Explain"].'</textarea>
        </div>
        <button class="col-md-1 ms-1 btn btn-danger mt-1 delProject" id="'.$row1["ID"].'">X</button>
        </div>';
        }
        echo $output;
    }

    if($_POST["action"] == "fetch_skill")
    {
        $id = $_POST['id'];

        $query = "SELECT * FROM skills WHERE User_ID='$id'";
        $result = mysqli_query($conn, $query);
        $output = '';

        while($row1 = mysqli_fetch_array($result))
        {
            if($row1["State"] == 1){
                $State = 'Bad';
              }else
              if($row1["State"] == 2){
                $State = 'Good';
              }else
              if($row1["State"] == 3){
                $State = 'Far';
              }else
              if($row1["State"] == 4){
                $State = 'Execelent';
              }

        $output .= '
        <div class="mt-3 row" id="Skill_delete'.$row1["ID"].'">
                <div class="col-md-5 ms-1 mt-2">
                    <input type="text" class="form-control" id="'.$row1["ID"].'" value="'.$row1["Name"].'" readonly>
                </div>
                <div class="col-md-5 ms-1">
                    <select class="form-select mt-2" id="Skill_S'.$row1["ID"].'" >
                        <option value="'.$State.'" selected>'.$State.'</option>
                    </select>
                </div>
                <button id="'.$row1["ID"].'" class="col-md-1 delSkill mt-2 btn btn-danger">X</button>
            </div>';
        }
        echo $output;
    }

    if($_POST["action"] == "fetch_lan")
    {
        $id = $_POST['id'];

        $query = "SELECT * FROM languages WHERE User_ID='$id'";
        $result = mysqli_query($conn, $query);
        $output = '';

        while($row1 = mysqli_fetch_array($result))
        {
            if($row1["State"] == 1){
                $State = 'Bad';
              }else
              if($row1["State"] == 2){
                $State = 'Good';
              }else
              if($row1["State"] == 3){
                $State = 'Far';
              }else
              if($row1["State"] == 4){
                $State = 'Execelent';
              }

        $output .= '
        <div class="mt-3 row" id="Lan_delete'.$row1["ID"].'">
                <div class="col-md-5 ms-1 mt-2">
                    <input type="text" class="form-control" id="'.$row1["ID"].'" value="'.$row1["Language"].'" readonly>
                </div>
                <div class="col-md-5 ms-1">
                    <select class="form-select mt-2" id="Language_S'.$row1["ID"].'">
                        <option value="'.$State.'" selected>'.$State.'</option>\
                    </select>
                </div>
                <button id="'.$row1["ID"].'" class="col-md-1 delLan mt-2 btn btn-danger">X</button>
            </div>';
        }
        echo $output;
    }

    if($_POST["action"] == "fetch_AL")
    {
        $id = $_POST['id'];

        $query = "SELECT * FROM al_results WHERE User_ID='$id'";
        $result = mysqli_query($conn, $query);
        $output = '';

        while($row1 = mysqli_fetch_array($result))
        {
            if($row1["Result"] == 1){
                $State = 'A';
              }else
              if($row1["Result"] == 2){
                $State = 'B';
              }else
              if($row1["Result"] == 3){
                $State = 'C';
              }else
              if($row1["Result"] == 4){
                $State = 'S';
              }else
              if($row1["Result"] == 5){
                $State = 'F';
              }

        $output .= '<div class="row" id="AL_delete'.$row1["ID"].'">
            <div class="col-md-5 mt-1">
            <input class="form-control" type="text" name="" id="" placeholder="Subject Name" value="'.$row1["Subject"].'" readonly>
        </div>
        <div class="col-md-5 mt-1">
            <select class="form-select" name="" id="'.$row1["ID"].'">
            <option value="'.$State.'" selected>'.$State.'</option>
            </select>
        </div>
        <button class="col-md-1 ms-1 btn btn-danger mt-1 del_al_sub" id="'.$row1["ID"].'">X</button>
      </div>';
        }
        echo $output;
    }

    if($_POST["action"] == "fetch_OL")
    {
        $id = $_POST['id'];

        $query = "SELECT * FROM ol_results WHERE User_ID='$id'";
        $result = mysqli_query($conn, $query);
        $output = '';

        while($row1 = mysqli_fetch_array($result))
        {
            if($row1["Result"] == 1){
                $State = 'A';
              }else
              if($row1["Result"] == 2){
                $State = 'B';
              }else
              if($row1["Result"] == 3){
                $State = 'C';
              }else
              if($row1["Result"] == 4){
                $State = 'S';
              }else
              if($row1["Result"] == 5){
                $State = 'F';
              }

        $output .= '<div class="row" id="OL_delete'.$row1["ID"].'">
            <div class="col-md-5 mt-1">
            <input class="form-control" type="text" name="" id="" placeholder="Subject Name" value="'.$row1["Subject"].'" readonly>
        </div>
        <div class="col-md-5 mt-1">
            <select class="form-select" name="" id="'.$row1["ID"].'">
            <option value="'.$State.'" selected>'.$State.'</option>
            </select>
        </div>
        <button class="col-md-1 ms-1 btn btn-danger mt-1 del_ol_sub" id="'.$row1["ID"].'">X</button>
      </div>';
        }
        echo $output;
    }

    if($_POST["action"] == "fetch_extra")
    {
        $id = $_POST['id'];

        $query = "SELECT * FROM extra_activity WHERE User_ID='$id'";
        $result = mysqli_query($conn, $query);
        $output = '';

        while($row1 = mysqli_fetch_array($result))
        {
            
        $output .= '<div class="row mt-3" id="Extra_delete'.$row1["ID"].'">
        <p class="col-md-3 mt-1">Activity</p>
        <div class="col-md-7 mt-1">
          <input class="form-control" type="text" name="" id="" placeholder="Name" value="'.$row1["Activity"].'" readonly>
        </div>
        <button class="col-md-1 ms-1 btn btn-danger mt-1 del_Extra_Act" id="'.$row1["ID"].'">X</button>
        </div>
        ';
        }
        echo $output;
    }

    if($_POST["action"] == "fetch_reference")
    {
        $id = $_POST['id'];

        $query = "SELECT * FROM u_references WHERE User_ID='$id'";
        $result = mysqli_query($conn, $query);
        $output = '';

        while($row1 = mysqli_fetch_array($result))
        {
            
        $output .= '<div class="row mt-3" id="R_delete'.$row1["ID"].'">
        <p class="col-md-4 mt-1">Name</p>
        <div class="col-md-6 mt-1">
          <input class="form-control" type="text" name="" id="" placeholder="Name" value="'.$row1["Name"].'" readonly>
        </div>
  
        <p class="col-md-4 mt-1">Position</p>
        <div class="col-md-6 mt-1">
          <input class="form-control" type="text" name="" id="" placeholder="Position" value="'.$row1["Position"].'" readonly>
        </div>
  
        <p class="col-md-4 mt-1">Tel</p>
        <div class="col-md-6 mt-1">
          <input class="form-control" type="text" name="" id="" placeholder="Contact Number" value="'.$row1["Tel"].'" readonly>
        </div>
  
        <button class="col-md-1 ms-1 btn btn-danger mt-1 del_Reference" id="'.$row1["ID"].'">X</button>
        </div>';
        }
        echo $output;
    }
// ========================================================================================
//                                  ALL DELETE ACTIONS
// ========================================================================================
    if($_POST["action"] == "Exepe_delete")
    {
        $id = $_POST['ID'];


        $query = "DELETE FROM work_exeperince WHERE ID='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Pro_delete")
    {
        $id = $_POST['ID'];


        $query = "DELETE FROM professional_qualifications WHERE ID='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Cou_delete")
    {
        $id = $_POST['ID'];


        $query = "DELETE FROM cources WHERE ID='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "delSkill")
    {
        $id = $_POST['ID'];

        $query = "DELETE FROM skills WHERE ID='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "delProject")
    {
        $id = $_POST['ID'];


        $query = "DELETE FROM projects WHERE ID='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "Language_delete")
    {
        $id = $_POST['ID'];


        $query = "DELETE FROM languages WHERE ID='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "del_al_sub")
    {
        $id = $_POST['ID'];


        $query = "DELETE FROM al_results WHERE ID='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "del_ol_sub")
    {
        $id = $_POST['ID'];


        $query = "DELETE FROM ol_results WHERE ID='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "del_Reference")
    {
        $id = $_POST['ID'];


        $query = "DELETE FROM u_references WHERE ID='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }

    if($_POST["action"] == "del_Extra_Act")
    {
        $id = $_POST['ID'];


        $query = "DELETE FROM extra_activity WHERE ID='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            
            echo 'done';
        }
    }
// ========================================================================================
//                                  ALL INSERT ACTIONS
// ========================================================================================
    if($_POST["action"] == "Exepe_insert_data")
    {
        $id = $_POST['id'];
        $Company_Name1 = $_POST['Company_Name1'];
        $Company_position = $_POST['Company_position'];
        $Exepe_year1 = $_POST['Exepe_year1'];
        $Exepe_info1 = $_POST['Exepe_info1'];

        $query = "INSERT INTO work_exeperince (User_ID,Company_Name,Position,Year,Info)VALUES ('$id','$Company_Name1','$Company_position','$Exepe_year1','$Exepe_info1')";
        if (mysqli_query($conn, $query))
        {
            echo 'done';
        }
    }

    if($_POST["action"] == "Pro_insert_data")
    {
        $id = $_POST['id'];
        $Pc_Name1 = $_POST['Pc_Name1'];
        $Pc_where1 = $_POST['Pc_where1'];
        $Pc_year1 = $_POST['Pc_year1'];
        $Pc_cname1 = $_POST['Pc_cname1'];
        $Pc_info1 = $_POST['Pc_info1'];

        $query = "INSERT INTO professional_qualifications (User_ID,Cooladge_Name,C_where,Year,Cource_Name,Info) VALUES ('$id','$Pc_Name1','$Pc_where1','$Pc_year1','$Pc_cname1','$Pc_info1')";
        if (mysqli_query($conn, $query))
        {
            echo 'done';
        }
    }

    if($_POST["action"] == "Cou_insert_data")
    {
        $id = $_POST['id'];
        $Cc_Name1 = $_POST['Cc_Name1'];
        $Cc_where1 = $_POST['Cc_where1'];
        $Cc_year1 = $_POST['Cc_year1'];
        $Cc_cname1 = $_POST['Cc_cname1'];
        $Cc_info1 = $_POST['Cc_info1'];

        $query = "INSERT INTO cources (User_ID,Insitiude_Name,I_where,Year,Cource_Name,Info) VALUES ('$id','$Cc_Name1','$Cc_where1','$Cc_year1','$Cc_cname1','$Cc_info1')";
        if (mysqli_query($conn, $query))
        {
            echo 'done';
        }
    }

    if($_POST["action"] == "addSkil")
    {
        $id = $_POST['id'];
        $SkilLevel = $_POST['SkilLevel'];
        $Skil = $_POST['Skil'];


        $query = "INSERT INTO skills (User_ID,Name,State) VALUES ('$id','$Skil','$SkilLevel')";
        if (mysqli_query($conn, $query))
        {
            echo 'done';
        }
    }

    if($_POST["action"] == "addProject")
    {
        $id = $_POST['id'];
        $pro_topic = $_POST['pro_topic'];
        $pro_info = $_POST['pro_info'];


        $query = "INSERT INTO projects (User_ID,Topic,T_Explain) VALUES ('$id','$pro_topic','$pro_info')";
        if (mysqli_query($conn, $query))
        {
            echo 'done';
        }
    }

    if($_POST["action"] == "Language_S1")
    {
        $id = $_POST['id'];
        $Language_S1 = $_POST['Language_S1'];
        $Lan1 = $_POST['Lan1'];


        $query = "INSERT INTO languages (User_ID,Language,State) VALUES ('$id','$Lan1','$Language_S1')";
        if (mysqli_query($conn, $query))
        {
            echo 'done';
        }
    }

    if($_POST["action"] == "addAL")
    {
        $id = $_POST['id'];
        $Al_Subject_re = $_POST['Al_Subject_re'];
        $Al_Subject = $_POST['Al_Subject'];


        $query = "INSERT INTO al_results (User_ID,Subject,Result) VALUES ('$id','$Al_Subject','$Al_Subject_re')";
        if (mysqli_query($conn, $query))
        {
            echo 'done';
        }
    }

    if($_POST["action"] == "addOL")
    {
        $id = $_POST['id'];
        $Ol_Subject_re = $_POST['Ol_Subject_re'];
        $Ol_Subject = $_POST['Ol_Subject'];


        $query = "INSERT INTO ol_results (User_ID,Subject,Result) VALUES ('$id','$Ol_Subject','$Ol_Subject_re')";
        if (mysqli_query($conn, $query))
        {
            echo 'done';
        }
    }

    if($_POST["action"] == "R_Add")
    {
        $id = $_POST['id'];
        $R_Name = $_POST['R_Name'];
        $R_Position = $_POST['R_Position'];
        $R_Tel = $_POST['R_Tel'];



        $query = "INSERT INTO u_references (User_ID,Name,Position,Tel) VALUES ('$id','$R_Name','$R_Position','$R_Tel')";
        if (mysqli_query($conn, $query))
        {
            echo 'done';
        }
    }

    if($_POST["action"] == "E_Add")
    {
        $id = $_POST['id'];
        $Activity = $_POST['Activity'];



        $query = "INSERT INTO extra_activity (User_ID,Activity) VALUES ('$id','$Activity')";
        if (mysqli_query($conn, $query))
        {
            echo 'done';
        }
    }

    if($_POST["action"] == "SignUp")
    {
        $R_Email = $_POST['R_Email'];
        $R_Name = $_POST['R_Name'];
        $Re_Password = $_POST['Re_Password'];
        $Password = md5($Re_Password);

        $query = "SELECT * FROM users WHERE Email='$R_Email'";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) > 0)
        {
            echo 'email';
        }else{
            $query1 = "INSERT INTO users (Name,Email,Password) VALUES ('$R_Name','$R_Email','$Password')";
            $result1 = mysqli_query($conn, $query1);
            if ($query1)
            {
                $query22 = "SELECT * FROM users WHERE Email='$R_Email'";
                $result22 = mysqli_query($conn, $query22);
                if(mysqli_num_rows($result22) > 0)
            {
                $row22 = mysqli_fetch_assoc($result22);

                $ID = $row22['ID'];
                $query2 = "INSERT INTO personal_info (User_ID,Languages,Reference) VALUES ('$ID',1,1)";
                $result2 = mysqli_query($conn, $query2);

                $query12 = "INSERT INTO u_references (User_ID) VALUES ('$ID')";
                $result12 = mysqli_query($conn, $query11);
            }
                echo 'done';
            }else
                echo 'error';
            }
    }

    if($_POST["action"] == "Login")
    {
        $L_Email = $_POST['L_Email'];
        $L_Password = $_POST['L_Password'];
        $Password = md5($L_Password);

        $query = "SELECT * FROM users WHERE Email='$L_Email' AND Password='$Password'";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) > 0)
        {
			$row = mysqli_fetch_assoc($result);
            if ($row['Email'] === $L_Email && $row['Password'] === $Password) {
            	
            	$_SESSION['Name'] = $row['Name'];
            	$_SESSION['ID'] = $row['ID'];
            	header("Location: ../home.php");
		        exit();
            }else{
                $_SESSION['status'] = "Incorrect password / email";
                $_SESSION['status_code'] ="info";
            	header("Location: ../index.php");
				
				
			}
        }
        $_SESSION['status'] = "Incorrect password / email";
        $_SESSION['status_code'] ="info";
        header("Location: ../index.php");
    }

    if($_POST["action"] == "insert_color")
    {
        $U_ID = $_POST['U_ID'];
        $T_ID = $_POST['T_ID'];

        $query1 = "SELECT * FROM template_color WHERE User_ID='$U_ID' && Temp_ID='$T_ID'";
        $result1 = mysqli_query($conn, $query1);
        if(mysqli_num_rows($result1) == 0)
        {
            $query10 = "INSERT INTO template_color (User_ID,Temp_ID) VALUES ('$U_ID','$T_ID')";
            $result10 = mysqli_query($conn, $query10);

            echo 'done';
        }else
        {
            echo 'done';
        }
    }

    if($_POST["action"] == "insert_hight")
    {
        $U_ID = $_POST['U_ID'];
        $T_ID = $_POST['T_ID'];

        $query1 = "SELECT * FROM templete_height WHERE User_ID='$U_ID' && Temp_ID='$T_ID'";
        $result1 = mysqli_query($conn, $query1);
        if(mysqli_num_rows($result1) == 0)
        {
            $query10 = "INSERT INTO templete_height (User_ID,Temp_ID) VALUES ('$U_ID','$T_ID')";
            $result10 = mysqli_query($conn, $query10);

            echo 'done';
        }else
        {
            echo 'done';
        }
    }
}
?>