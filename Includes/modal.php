<?php 

$T_ID = $_GET['T_ID'];


    require_once './Database/DB_Connection.php';

    $query1 = "SELECT * FROM template_color WHERE User_ID = $U_ID && Temp_ID = $T_ID";
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

    $query2 = "SELECT * FROM templete_height WHERE User_ID = $U_ID && Temp_ID = $T_ID";
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
            if($row2['R_A_E_A_H'] == '')
            {
                $R_A_E_A_H = '10';
            }else{
                $R_A_E_A_H = $row2['R_A_E_A_H'];
            }
            if($row2['R_A_R_H'] == '')
            {
                $R_A_R_H = '10';
            }else{
                $R_A_R_H = $row2['R_A_R_H'];
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
        $R_A_E_A_H = '10';
        $R_A_R_H = '10';

    }
?>
<!-- ========================================================================================
                                  TEMPLATE COLOR CHANGE MODAL
======================================================================================== -->
<div class="modal fade" id="template_color_change_modal" tabindex="-2" role="dialog" aria-labelledby="template_color_change_modal" aria-hidden="true">
    <div class="modal-dialog modal-me modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="template_color_change_modal">Template Color Change</h5>
                <input type="hidden" id="Temp_ID" name="Temp_ID" value="1">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

                <h6>LEFT AREA</h6>
                <div class="row">
                    <?php 
                    $T_ID = $_GET['T_ID'];
                    if($T_ID == 2){ ?>
                    <p class="mt-1 col-md-5">Top label color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="T_L_BG" name="T_L_BG" value="<?php echo $T_L_BG ?>">
                    </div>
                    <?php } ?>
                    <p class="mt-1 col-md-5">Back-ground color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="L_A_BG" name="L_A_BG" value="<?php echo $L_A_BG ?>">
                    </div>

                    <p class="mt-1 col-md-5">Text color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="L_A_TE" name="L_A_TE" value="<?php echo $L_A_TE ?>">
                    </div>

                    <p class="mt-1 col-md-5">Label back-ground color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="L_A_L_BG" name="L_A_L_BG" value="<?php echo $L_A_L_BG ?>">
                    </div>

                    <p class="mt-1 col-md-5">Label text color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="L_A_L_TE" name="L_A_L_TE" value="<?php echo $L_A_L_TE ?>">
                    </div>

                    <p class="mt-1 col-md-5">Progress bar background Color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="L_P_B_B_C" name="L_P_B_B_C" value="<?php echo $L_P_B_B_C ?>">
                    </div>

                    <p class="mt-1 col-md-5">Progress level Color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="L_P_L" name="L_P_L" value="<?php echo $L_P_L ?>">
                    </div>
                </div>

                <h6>RIGHT AREA</h6>
                <div class="row">
                    <p class="mt-1 col-md-5">Back-ground color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="R_A_BG" name="R_A_BG" value="<?php echo $R_A_BG ?>">
                    </div>

                    <p class="mt-1 col-md-5">Text color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="R_A_TE" name="R_A_TE" value="<?php echo $R_A_TE ?>">
                    </div>

                    <p class="mt-1 col-md-5">Label back-ground color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="R_A_L_BG" name="R_A_L_BG" value="<?php echo $R_A_L_BG ?>">
                    </div>

                    <p class="mt-1 col-md-5">Label text color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="R_A_L_TE" name="R_A_L_TE" value="<?php echo $R_A_L_TE ?>">
                    </div>

                    <p class="mt-1 col-md-5">Progress bar background Color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="R_P_B_B_C" name="R_P_B_B_C" value="<?php echo $R_P_B_B_C ?>">
                    </div>

                    <p class="mt-1 col-md-5">Progress level Color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="R_P_L" name="R_P_L" value="<?php echo $R_P_L ?>">
                    </div>

                    <p class="mt-1 col-md-5">Line color</p>
                    <div class="mt-1 col-md-4">
                        <input type="color" class="form-control" id="R_A_L" name="R_A_L" value="<?php echo $R_A_L ?>">
                    </div>

                    <button class="btn btn-primary" name="T_C_Reset" id="T_C_Reset">Reset</button>
                    
                </div>

                
            </div>
        </div>
    </div>
</div>

<!-- ========================================================================================
                                  TEMPLATE HEIGHT CHANGE MODAL
======================================================================================== -->
<div class="modal fade" id="template_height_change_modal" tabindex="-2" role="dialog" aria-labelledby="template_height_change_modal" aria-hidden="true">
    <div class="modal-dialog modal-me modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="template_height_change_modal">Template Height Change</h5>
                <input type="hidden" id="Temp_ID" name="Temp_ID" value="1">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

                <!-- <h6>LEFT AREA</h6> -->
                <div class="row">
                    <p class="mt-1 col-md-5">About me height</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="L_A_A_M_H" name="L_A_A_M_H" value="<?php echo $L_A_A_M_H ?>">
                    </div>
                    <p class="mt-1 col-md-1">mm</p>

                    <p class="mt-1 col-md-5">Language height</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="L_A_L_H" name="L_A_L_H" value="<?php echo $L_A_L_H ?>">
                    </div>
                    <p class="mt-1 col-md-1">mm</p>

                    <p class="mt-1 col-md-5">Personal details height</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="L_A_P_D_H" name="L_A_P_D_H" value="<?php echo $L_A_P_D_H ?>" >
                    </div>
                    <p class="mt-1 col-md-1">mm</p>
                </div>

                <!-- <h6>RIGHT AREA</h6> -->
                <div class="row">
                    <p class="mt-1 col-md-5">Address area height</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="R_A_T_H" name="R_A_T_H" value="<?php echo $R_A_T_H ?>">
                    </div>
                    <p class="mt-1 col-md-1">mm</p>

                    <p class="mt-1 col-md-5">Work experience height</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="R_A_W_E_H" name="R_A_W_E_H" value="<?php echo $R_A_W_E_H ?>">
                    </div>

                    <p class="mt-1 col-md-5">Professional qualification height</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="R_A_P_Q_H" name="R_A_P_Q_H" value="<?php echo $R_A_P_Q_H ?>">
                    </div>

                    <p class="mt-1 col-md-1">mm</p>

                    <p class="mt-1 col-md-5">Cource height</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="R_A_C_H" name="R_A_C_H" value="<?php echo $R_A_C_H ?>">
                    </div>
                    <p class="mt-1 col-md-1">mm</p>

                    <p class="mt-1 col-md-5">Skils height</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="R_A_S_H" name="R_A_S_H" value="<?php echo $R_A_S_H ?>">
                    </div>
                    <p class="mt-1 col-md-1">mm</p>

                    <p class="mt-1 col-md-5">Project height</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="R_A_P_H" name="R_A_P_H" value="<?php echo $R_A_P_H ?>">
                    </div>
                    <p class="mt-1 col-md-1">mm</p>

                    <p class="mt-1 col-md-5">Academic Qualification height</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="R_A_A_Q_H" name="R_A_A_Q_H" value="<?php echo $R_A_A_Q_H ?>">
                    </div>
                    <p class="mt-1 col-md-1">mm</p>

                    <p class="mt-1 col-md-5">Extra activity</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="R_A_E_A_H" name="R_A_E_A_H" value="<?php echo $R_A_E_A_H ?>">
                    </div>
                    <p class="mt-1 col-md-1">mm</p>

                    <p class="mt-1 col-md-5">Reference height</p>
                    <div class="mt-1 col-md-4">
                        <input type="number" class="form-control" id="R_A_R_H" name="R_A_R_H" value="<?php echo $R_A_R_H ?>">
                    </div>
                    <p class="mt-1 col-md-1">mm</p>

                    <button class="btn btn-primary" name="T_H_Reset" id="T_H_Reset">Reset</button>
                    
                </div>

                
            </div>
        </div>
    </div>
</div>

