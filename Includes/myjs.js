$(document).ready(function()
{
    addLan();
    addReference();
    addExtra();
    window_fetch();


    $('#template_color').click(function(){
        var U_ID = $('#User_ID').val();
        var T_ID = $('#layout_ID').val();
        var action = 'insert_color';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{U_ID:U_ID,action:action,T_ID:T_ID},
            success:function(data)
            {
                if(data == 'done'){
                    $('#template_color_change_modal').modal('show');
                }else
                if(data == 'error'){
                    swal('error')
                }
            }
            
        })
    });

    $('#template_hight').click(function(){
        var U_ID = $('#User_ID').val();
        var T_ID = $('#layout_ID').val();
        var action = 'insert_hight';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{U_ID:U_ID,action:action,T_ID:T_ID},
            success:function(data)
            {
                if(data == 'done'){
                    $('#template_height_change_modal').modal('show');
                }else
                if(data == 'error'){
                    swal('error')
                }
            }
            
        })
    });

    $('.Login').click(function(){
        $('#Login_modal').modal('show');
        $('#SignUp_modal').modal('hide');

    });

    $('.SignUp').click(function(){
        $('#SignUp_modal').modal('show');
        $('#Login_modal').modal('hide');

    });
// ========================================================================================
//                                  ALL UPDATE FUNCTIONS
// ========================================================================================
    $('#file_edit_form').submit(function(event){
        event.preventDefault();
        
        var extension = $('#customFile').val().split('.').pop().toLowerCase();
        if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
        {
            alert('This is not Image');
            return false;
        }
        else
        {
            $.ajax({
                url:"Includes/action.php",
                method:"POST",
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    if(data == 'done'){
                       window_fetch(); 
                
                    }
                }
            });
        }

    });
    
    $('#user_name').keyup(function(){
        var name = $('#user_name').val();
        var id = $('#User_ID').val();
        var action = 'user_name';
        
            $.ajax({
                url:"Includes/action.php",
                method:"POST",
                data:{name:name,action:action,id:id},
                success:function(data)
                {
                    if(data == 'done'){
                        // alert ('done');
                        window_fetch();
                
                    }
                }
            })

    });

    $('#About_Me').keyup(function(){
        var About_Me = $('#About_Me').val();
        var id = $('#User_ID').val();
        var action = 'About_Me';


        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{About_Me:About_Me,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
                }
            }
        })
    });

    $('#Contact_Number').keyup(function(){
        var Contact_Number = $('#Contact_Number').val();
        var id = $('#User_ID').val();
        var action = 'Contact_Number';


        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{Contact_Number:Contact_Number,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#Email').keyup(function(){
        var Email = $('#Email').val();
        var id = $('#User_ID').val();
        var action = 'Email';


        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{Email:Email,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch(); 
            
                }
            }
        })
    });

    $('#Address').keyup(function(){
        var Address = $('#Address').val();
        var id = $('#User_ID').val();
        var action = 'Address';


        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{Address:Address,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#DOB').change(function(){
        var DOB = $('#DOB').val();
        var id = $('#User_ID').val();
        var action = 'DOB';


        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{DOB:DOB,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#CS').change(function(){
        var CS = $('#CS').val();
        var id = $('#User_ID').val();
        var action = 'CS';


        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{CS:CS,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#Religion').keyup(function(){
        var Religion = $('#Religion').val();
        var id = $('#User_ID').val();
        var action = 'Religion';


        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{Religion:Religion,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#NIC').keyup(function(){
        var NIC = $('#NIC').val();
        var id = $('#User_ID').val();
        var action = 'NIC';


        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{NIC:NIC,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#School').keyup(function(){
        var School = $('#School').val();
        var id = $('#User_ID').val();
        var action = 'School';


        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{School:School,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#AL_Year').keyup(function(){
        var AL_Year = $('#AL_Year').val();
        var id = $('#User_ID').val();
        var action = 'AL_Year';


        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{AL_Year:AL_Year,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#OL_Year').keyup(function(){
        var OL_Year = $('#OL_Year').val();
        var id = $('#User_ID').val();
        var action = 'OL_Year';


        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{OL_Year:OL_Year,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#T_L_BG').change(function(){
        var T_L_BG = $('#T_L_BG').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'T_L_BG';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{T_L_BG:T_L_BG,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#L_A_BG').change(function(){
        var L_A_BG = $('#L_A_BG').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'L_A_BG';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{L_A_BG:L_A_BG,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#L_A_TE').change(function(){
        var L_A_TE = $('#L_A_TE').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'L_A_TE';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{L_A_TE:L_A_TE,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#L_A_L_BG').change(function(){
        var L_A_L_BG = $('#L_A_L_BG').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'L_A_L_BG';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{L_A_L_BG:L_A_L_BG,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#L_A_L_TE').change(function(){
        var L_A_L_TE = $('#L_A_L_TE').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'L_A_L_TE';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{L_A_L_TE:L_A_L_TE,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#L_P_B_B_C').change(function(){
        var L_P_B_B_C = $('#L_P_B_B_C').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'L_P_B_B_C';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{L_P_B_B_C:L_P_B_B_C,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#L_P_L').change(function(){
        var L_P_L = $('#L_P_L').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'L_P_L';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{L_P_L:L_P_L,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#R_A_BG').change(function(){
        var R_A_BG = $('#R_A_BG').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_BG';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_BG:R_A_BG,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#R_A_TE').change(function(){
        var R_A_TE = $('#R_A_TE').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_TE';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_TE:R_A_TE,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#R_A_L_BG').change(function(){
        var R_A_L_BG = $('#R_A_L_BG').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_L_BG';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_L_BG:R_A_L_BG,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#R_A_L_TE').change(function(){
        var R_A_L_TE = $('#R_A_L_TE').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_L_TE';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_L_TE:R_A_L_TE,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#R_A_L').change(function(){
        var R_A_L = $('#R_A_L').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_L';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_L:R_A_L,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#L_A_A_M_H').change(function(){
        var L_A_A_M_H = $('#L_A_A_M_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'L_A_A_M_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{L_A_A_M_H:L_A_A_M_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#L_A_L_H').change(function(){
        var L_A_L_H = $('#L_A_L_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'L_A_L_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{L_A_L_H:L_A_L_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });
    
    $('#L_A_P_D_H').change(function(){
        var L_A_P_D_H = $('#L_A_P_D_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'L_A_P_D_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{L_A_P_D_H:L_A_P_D_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });
    
    $('#R_A_T_H').change(function(){
        var R_A_T_H = $('#R_A_T_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_T_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_T_H:R_A_T_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });
    
    $('#R_A_W_E_H').change(function(){
        var R_A_W_E_H = $('#R_A_W_E_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_W_E_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_W_E_H:R_A_W_E_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#R_A_P_Q_H').change(function(){
        var R_A_P_Q_H = $('#R_A_P_Q_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_P_Q_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_P_Q_H:R_A_P_Q_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });
    
    $('#R_A_C_H').change(function(){
        var R_A_C_H = $('#R_A_C_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_C_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_C_H:R_A_C_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });
    
    $('#R_A_S_H').change(function(){
        var R_A_S_H = $('#R_A_S_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_S_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_S_H:R_A_S_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });
    
    $('#R_A_P_H').change(function(){
        var R_A_P_H = $('#R_A_P_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_P_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_P_H:R_A_P_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });
    
    $('#R_A_A_Q_H').change(function(){
        var R_A_A_Q_H = $('#R_A_A_Q_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_A_Q_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_A_Q_H:R_A_A_Q_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });
    
    $('#R_A_R_H').change(function(){
        var R_A_R_H = $('#R_A_R_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_R_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_R_H:R_A_R_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    }); 

    $('#R_A_E_A_H').change(function(){
        var R_A_E_A_H = $('#R_A_E_A_H').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_A_E_A_H';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_A_E_A_H:R_A_E_A_H,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    }); 
    
    $('#R_P_B_B_C').change(function(){
        var R_P_B_B_C = $('#R_P_B_B_C').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_P_B_B_C';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_P_B_B_C:R_P_B_B_C,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $('#R_P_L').change(function(){
        var R_P_L = $('#R_P_L').val();
        var id = $('#User_ID').val();
        var Temp_ID = $('#Temp_ID').val();
        var action = 'R_P_L';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_P_L:R_P_L,action:action,id:id,Temp_ID:Temp_ID},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });
// ========================================================================================
//                                  ALL ADD / INSERT FUNCTIONS
// ========================================================================================
    $('#addLan').mousedown(function(){
        var Language_S = $('#Language_S1').val();
        var Lan = $('#Lan1').val();
        var id = $('#User_ID').val();
        var action = 'Language_S1';

        console.log(Lan);
        if(Lan == '')
        {
            alert('Please fill Language field');
            return false;
        }else
        if(Language_S == 0){
            alert('Please Select Language status');
            return false;
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{Language_S1:Language_S,Lan1:Lan,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
                    $('#Language_S1').val('0');
                    $('#Lan1').val('');

                    addLan();
                }
            }
        });
    }
    });

    $('#addSkil').mousedown(function(){
        var SkilLevel = $('#SkilLevel').val();
        var Skil = $('#Skil').val();
        var id = $('#User_ID').val();
        var action = 'addSkil';

        if(Skil == '')
        {
            alert('Please fill Skill field');
            return false;
        }else
        if(SkilLevel == 0){
            alert('Please Select Skill Level');
            return false;
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{SkilLevel:SkilLevel,Skil:Skil,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
                    $('#SkilLevel').val('0');
                    $('#Skil').val('');

                    addSkill();
                }
            }
        });
    }
    });

    $('#addProject').mousedown(function(){
        var pro_topic = $('#pro_topic').val();
        var pro_info = $('#pro_info').val();
        var id = $('#User_ID').val();
        var action = 'addProject';

        if(pro_info == '')
        {
            alert('Please fill Project Info field');
            return false;
        }else
        if(pro_topic == 0){
            alert('Please fill Project Topic field');
            return false;
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{pro_topic:pro_topic,pro_info:pro_info,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
                    $('#pro_topic').val('');
                    $('#pro_info').val('');

                    addProject();
                }
            }
        });
    }
    });

    $('#Exepe_insert').mousedown(function(){
        var Company_Name1 = $('#Company_Name1').val();
        var Company_position = $('#Company_position').val();
        var Exepe_year1 = $('#Exepe_year1').val();
        var Exepe_info1 = $('#Exepe_info1').val();

        var id = $('#User_ID').val();
        var action = 'Exepe_insert_data';

        // console.log(Pc_Name1);
        if(Company_Name1 == '')
        {
            alert('Please fill Name field');
            return false;
        }else
        if(Company_position== ''){
            alert('Please Select position field');
            return false;
        }else
        if(Exepe_year1 == '')
        {
            alert('Please fill Yesr field');
            return false;
        }else
        if(Exepe_info1 == '')
        {
            alert('Please fill Info field');
            return false;
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{Company_Name1:Company_Name1,Company_position:Company_position,Exepe_year1:Exepe_year1,Exepe_info1:Exepe_info1,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
                    $('#Company_Name1').val('');
                    $('#Company_position').val('');
                    $('#Exepe_year1').val('');
                    $('#Exepe_info1').val('');
                    addExepe();
                }
            }
        });
    }
    });
    
    $('#Pro_insert').mousedown(function(){
        var Pc_Name1 = $('#Pc_Name1').val();
        var Pc_where1 = $('#Pc_where1').val();
        var Pc_year1 = $('#Pc_year1').val();
        var Pc_cname1 = $('#Pc_cname1').val();
        var Pc_info1 = $('#Pc_info1').val();

        var id = $('#User_ID').val();
        var action = 'Pro_insert_data';

        // console.log(Pc_Name1);
        if(Pc_Name1 == '')
        {
            alert('Please fill Name field');
            return false;
        }else
        if(Pc_where1 == 0){
            alert('Please Select Where field');
            return false;
        }else
        if(Pc_year1 == '')
        {
            alert('Please fill Yesr field');
            return false;
        }else
        if(Pc_cname1 == '')
        {
            alert('Please fill Course Name field');
            return false;
        }else
        if(Pc_info1 == '')
        {
            alert('Please fill Info field');
            return false;
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{Pc_Name1:Pc_Name1,Pc_where1:Pc_where1,Pc_info1:Pc_info1,Pc_year1:Pc_year1,Pc_cname1:Pc_cname1,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
                    $('#Pc_Name1').val('');
                    $('#Pc_where1').val('');
                    $('#Pc_info1').val('');
                    $('#Pc_year1').val('');
                    $('#Pc_cname1').val('');
                    $('#Pc_info1').val('');
                    addPro();
                }
            }
        });
    }
    });

    $('#Cou_insert').mousedown(function(){
        var Cc_Name1 = $('#Cc_Name1').val();
        var Cc_where1 = $('#Cc_where1').val();
        var Cc_year1 = $('#Cc_year1').val();
        var Cc_cname1 = $('#Cc_cname1').val();
        var Cc_info1 = $('#Cc_info1').val();

        var id = $('#User_ID').val();
        var action = 'Cou_insert_data';

        // console.log(Pc_Name1);
        if(Cc_Name1 == '')
        {
            alert('Please fill Insitiude Name field');
            return false;
        }else
        if(Cc_where1 == 0){
            alert('Please Select Where field');
            return false;
        }else
        if(Cc_year1 == '')
        {
            alert('Please fill Yesr field');
            return false;
        }else
        if(Cc_cname1 == '')
        {
            alert('Please fill Course Name field');
            return false;
        }else
        if(Cc_info1 == '')
        {
            alert('Please fill Info field');
            return false;
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{Cc_Name1:Cc_Name1,Cc_where1:Cc_where1,Cc_info1:Cc_info1,Cc_year1:Cc_year1,Cc_cname1:Cc_cname1,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
                    $('#Cc_Name1').val('');
                    $('#Cc_where1').val('');
                    $('#Cc_info1').val('');
                    $('#Cc_year1').val('');
                    $('#Cc_cname1').val('');
                    $('#Cc_info1').val('');
                    addCourse();
                }
            }
        });
    }
    });

    $('#addAL').mousedown(function(){
        var Al_Subject_re = $('#Al_Subject_re').val();
        var Al_Subject = $('#Al_Subject').val();
        var id = $('#User_ID').val();
        var action = 'addAL';

        if(Al_Subject == '')
        {
            alert('Please fill Subject field');
            return false;
        }else
        if(Al_Subject_re == 0){
            alert('Please Select Subject Result');
            return false;
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{Al_Subject_re:Al_Subject_re,Al_Subject:Al_Subject,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
                    $('#Al_Subject_re').val('0');
                    $('#Al_Subject').val('');

                    addAL();
                }
            }
        });
    }
    });

    $('#addOL').mousedown(function(){
        var Ol_Subject_re = $('#Ol_Subject_re').val();
        var Ol_Subject = $('#Ol_Subject').val();
        var id = $('#User_ID').val();
        var action = 'addOL';

        if(Ol_Subject == '')
        {
            alert('Please fill Subject field');
            return false;
        }else
        if(Ol_Subject_re == 0){
            alert('Please Select Subject Result');
            return false;
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{Ol_Subject_re:Ol_Subject_re,Ol_Subject:Ol_Subject,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
                    $('#Ol_Subject_re').val('0');
                    $('#Ol_Subject').val('');

                    addOL();
                }
            }
        });
    }
    });

    $('#R_Add').mousedown(function(){
        var R_Name = $('#R_Name').val();
        var R_Position = $('#R_Position').val();
        var R_Tel = $('#R_Tel').val();
        var id = $('#User_ID').val();
        var action = 'R_Add';

        // console.log(R_Position);
        if(R_Tel == '')
        {
            alert('Please fill contact field');
            return false;
        }else
        if(R_Position == '')
        {
            alert('Please fill position field');
            return false;
        }else
        if(R_Name == ''){
            alert('Please fill name field');
            return false;
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_Name:R_Name,R_Position:R_Position,R_Tel:R_Tel,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
                    $('#R_Name').val('');
                    $('#R_Tel').val('');
                    $('#R_Position').val('');

                    addReference();
                }
            }
        });
    }
    });

    $('#E_Add').mousedown(function(){
        var Activity = $('#Activity').val();
        var id = $('#User_ID').val();
        var action = 'E_Add';

        // console.log(R_Position);
        if(Activity == ''){
            alert('Please fill activity field');
            return false;
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{Activity:Activity,action:action,id:id},
            success:function(data)
            {
                if(data == 'done'){
                    // alert ('done');
                    window_fetch();
                    $('#Activity').val('');

                    addExtra();
                }
            }
        });
    }
    });

    $('#SignUp').click(function(){
        var R_Email = $('#R_Email').val();
        var R_Name = $('#R_Name').val();
        var R_Password = $('#R_Password').val();
        var Re_Password = $('#Re_Password').val();
        var action = 'SignUp';

        // console.log(R_Email);
        if(R_Name == '')
        {
            alert('Please enter your name');
            return false;
        }else
        if(R_Email == '')
        {
            alert('Please enter email');
            return false;
        }else
        if(R_Password == '')
        {
            alert('Please enter password');
            return false;
        }else
        if(Re_Password != R_Password)
        {
            alert('Password not macth');
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{R_Email:R_Email,Re_Password:Re_Password,action:action,R_Name:R_Name},
            success:function(data)
            {
                if(data == 'done'){
                    alert ('Your account has been created');
                    $('#R_Email').val('');
                    $('#R_Password').val('');
                    $('#Re_Password').val('');
                    $('#SignUp_modal').modal('hide');

                }else
                if(data == 'email'){
                    alert ('This email is already taken');
                }else
                if(data == 'error'){
                    alert ('Somthing went wrong');
                }
            }
        });
    }
    });

    $('#Login').click(function(){
        var L_Email = $('#L_Email').val();
        var L_Password = $('#L_Password').val();
        var action = 'Login';

        console.log(L_Email);
        if(L_Email == '')
        {
            alert('Please enter email');
            return false;
        }else
        if(L_Password == '')
        {
            alert('Please enter password');
            return false;
        }else
        {
    
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{L_Email:L_Email,L_Password:L_Password,action:action},
            success:function(data)
            {
                if(data == 'done'){
                    alert ('Your login now');
                    $('#L_Email').val('');
                    $('#L_Password').val('');
                    $('#Login_modal').modal('hide');
                    header("Location: ./Includes/home.php");

                }else
                if(data == 'password'){
                    alert ('Incorrect password');
                }else
                if(data == 'error'){
                    alert ('Somthing went wrong');
                }
            }
        });
    }
    });
// ========================================================================================
//                                  ALL DELETE FUNCTIONS
// ========================================================================================    
    $(document).on('click', '.delLan', function(){
        var ID = $(this).attr("id");
        var action = 'Language_delete';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,ID:ID},
            success:function(data)
            {
                if(data == 'done'){
                    
                    let Lan_hide = document.getElementById('Lan_delete'+ID);
                    Lan_hide.style = "display:none";
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $(document).on('click', '.delWork', function(){
        var ID = $(this).attr("id");
        var action = 'Exepe_delete';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,ID:ID},
            success:function(data)
            {
                if(data == 'done'){
                    
                    let Lan_hide = document.getElementById('Exe_delete'+ID);
                    Lan_hide.style = "display:none";
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $(document).on('click', '.delPro', function(){
        var ID = $(this).attr("id");
        var action = 'Pro_delete';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,ID:ID},
            success:function(data)
            {
                if(data == 'done'){
                    
                    let Lan_hide = document.getElementById('Pro_delete'+ID);
                    Lan_hide.style = "display:none";
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $(document).on('click', '.delCourse', function(){
        var ID = $(this).attr("id");
        var action = 'Cou_delete';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,ID:ID},
            success:function(data)
            {
                if(data == 'done'){
                    
                    let Lan_hide = document.getElementById('Cou_delete'+ID);
                    Lan_hide.style = "display:none";
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $(document).on('click', '.delSkill', function(){
        var ID = $(this).attr("id");
        var action = 'delSkill';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,ID:ID},
            success:function(data)
            {
                if(data == 'done'){
                    
                    let Lan_hide = document.getElementById('Skill_delete'+ID);
                    Lan_hide.style = "display:none";
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $(document).on('click', '.delProject', function(){
        var ID = $(this).attr("id");
        var action = 'delProject';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,ID:ID},
            success:function(data)
            {
                if(data == 'done'){
                    
                    let Lan_hide = document.getElementById('Project_delete'+ID);
                    Lan_hide.style = "display:none";
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $(document).on('click', '.del_al_sub', function(){
        var ID = $(this).attr("id");
        var action = 'del_al_sub';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,ID:ID},
            success:function(data)
            {
                if(data == 'done'){
                    
                    let Lan_hide = document.getElementById('AL_delete'+ID);
                    Lan_hide.style = "display:none";
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $(document).on('click', '.del_ol_sub', function(){
        var ID = $(this).attr("id");
        var action = 'del_ol_sub';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,ID:ID},
            success:function(data)
            {
                if(data == 'done'){
                    
                    let Lan_hide = document.getElementById('OL_delete'+ID);
                    Lan_hide.style = "display:none";
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $(document).on('click', '.del_Reference', function(){
        var ID = $(this).attr("id");
        var action = 'del_Reference';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,ID:ID},
            success:function(data)
            {
                if(data == 'done'){
                    
                    let R_delete = document.getElementById('R_delete'+ID);
                    R_delete.style = "display:none";
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

    $(document).on('click', '.del_Extra_Act', function(){
        var ID = $(this).attr("id");
        var action = 'del_Extra_Act';

        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,ID:ID},
            success:function(data)
            {
                if(data == 'done'){
                    
                    let R_delete = document.getElementById('Extra_delete'+ID);
                    R_delete.style = "display:none";
                    // alert ('done');
                    window_fetch();
            
                }
            }
        })
    });

});

function window_fetch(){
    var id = $('#layout_ID').val();
    $('#output1').html('<iframe src="Includes/pdf.php?T_ID='+id+'" class="col-md-12 bg-light vh-100 "></iframe>'); 
}
// ========================================================================================
//                                  ALL ADD / INSERT FUNCTIONS
// ========================================================================================
function addLan(){
    var action = 'fetch_lan';
    var id = $('#User_ID').val();
    
    $.ajax({
        url:"Includes/action.php",
        method:"POST",
        data:{action:action,id:id},
        success:function(data)
        {
            $('#addLan2').html(data);
        }
    });
}

function addSkill(){
    var action = 'fetch_skill';
    var id = $('#User_ID').val();
    
    $.ajax({
        url:"Includes/action.php",
        method:"POST",
        data:{action:action,id:id},
        success:function(data)
        {
            $('#addSkill').html(data);
        }
    });
}

function addExepe(){
    var action = 'fetch_exep';
    var id = $('#User_ID').val();
    
    $.ajax({
        url:"Includes/action.php",
        method:"POST",
        data:{action:action,id:id},
        success:function(data)
        {
            $('#addExepe').html(data);
        }
    });
}

function addPro(){
    var action = 'fetch_pro';
    var id = $('#User_ID').val();
    
    $.ajax({
        url:"Includes/action.php",
        method:"POST",
        data:{action:action,id:id},
        success:function(data)
        {
            $('#addPro').html(data);
        }
    });
}

function addCourse(){
    var action = 'fetch_cou';
    var id = $('#User_ID').val();
    
    $.ajax({
        url:"Includes/action.php",
        method:"POST",
        data:{action:action,id:id},
        success:function(data)
        {
            $('#addCou').html(data);
        }
    });
}

function addProject(){
    var action = 'fetch_project';
    var id = $('#User_ID').val();
    
    $.ajax({
        url:"Includes/action.php",
        method:"POST",
        data:{action:action,id:id},
        success:function(data)
        {
            $('#addProject_data').html(data);
        }
    });
}

function addAL(){
    var action = 'fetch_AL';
    var id = $('#User_ID').val();
    
    $.ajax({
        url:"Includes/action.php",
        method:"POST",
        data:{action:action,id:id},
        success:function(data)
        {
            $('#addAL_data').html(data);
        }
    });
}

function addOL(){
    var action = 'fetch_OL';
    var id = $('#User_ID').val();
    
    $.ajax({
        url:"Includes/action.php",
        method:"POST",
        data:{action:action,id:id},
        success:function(data)
        {
            $('#addOL_data').html(data);
        }
    });
}

function addExtra(){
    var action = 'fetch_extra';
    var id = $('#User_ID').val();
    
    $.ajax({
        url:"Includes/action.php",
        method:"POST",
        data:{action:action,id:id},
        success:function(data)
        {
            $('#addExtra').html(data);
        }
    });
}

function addReference(){
    var action = 'fetch_reference';
    var id = $('#User_ID').val();
    
    $.ajax({
        url:"Includes/action.php",
        method:"POST",
        data:{action:action,id:id},
        success:function(data)
        {
            $('#R_data').html(data);
        }
    });
}

// ========================================================================================
//                                  ALL CHECK BOX FUNCTIONS
// ========================================================================================
function Expecheckbox(x){
    var checkbox=x.checked;
    var action = 'Expecheckbox';
    var id = $('#User_ID').val();
    if(checkbox){
        document.getElementById('expereance_values').style = "display:flex";
        var checkbox_value = '1';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                addExepe();
                window_fetch();
            }
        });
    }else
    {
        document.getElementById('expereance_values').style = "display:none";
        var checkbox_value = '0';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                window_fetch();
            }
        });
    }

}

function Pcheckbox(x){
    var checkbox=x.checked;
    var action = 'Pcheckbox';
    var id = $('#User_ID').val();
    if(checkbox){
        document.getElementById('professional_values').style = "display:flex";
        var checkbox_value = '1';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                addPro();
                window_fetch();
            }
        });
    }else
    {
        document.getElementById('professional_values').style = "display:none";
        var checkbox_value = '0';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                window_fetch();
            }
        });
    }

}

function Ccheckbox(x){
    var checkbox=x.checked;
    var action = 'Ccheckbox';
    var id = $('#User_ID').val();
    if(checkbox){
        document.getElementById('course_values').style = "display:flex";
        var checkbox_value = '1';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                addCourse();
                window_fetch();
            }
        });
    }else
    {
        document.getElementById('course_values').style = "display:none";
        var checkbox_value = '0';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                window_fetch();
            }
        });
    }

}

function Scheckbox(x){
    var checkbox=x.checked;
    var action = 'Scheckbox';
    var id = $('#User_ID').val();
    if(checkbox){
        document.getElementById('skills_values').style = "display:flex";
        var checkbox_value = '1';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                addSkill();
                window_fetch();
            }
        });
    }else
    {
        document.getElementById('skills_values').style = "display:none";
        var checkbox_value = '0';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                window_fetch();
            }
        });
    }

}

function Pro_checkbox(x){
    var checkbox=x.checked;
    var action = 'Pro_checkbox';
    var id = $('#User_ID').val();
    if(checkbox){
        document.getElementById('Pro_values').style = "display:flex";
        var checkbox_value = '1';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                addProject();
                window_fetch();
            }
        });
    }else
    {
        document.getElementById('Pro_values').style = "display:none";
        var checkbox_value = '0';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                window_fetch();
            }
        });
    }

}

function Aca_checkbox(x){
    var checkbox=x.checked;
    var action = 'Aca_checkbox';
    var id = $('#User_ID').val();
    if(checkbox){
        document.getElementById('Aca_values').style = "display:flex";
        var checkbox_value = '1';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                addProject();
                window_fetch();
            }
        });
    }else
    {
        document.getElementById('Aca_values').style = "display:none";
        var checkbox_value = '0';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                addProject();
                window_fetch();
            }
        });
    }

}

function AL_checkbox(x){
    var checkbox=x.checked;
    var action = 'AL_checkbox';
    var id = $('#User_ID').val();
    if(checkbox){
        document.getElementById('AL_values').style = "display:flex";
        var checkbox_value = '1';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                addAL();
                window_fetch();
            }
        });
    }else
    {
        document.getElementById('AL_values').style = "display:none";
        var checkbox_value = '0';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                window_fetch();
            }
        });
    }

}

function OL_checkbox(x){
    var checkbox=x.checked;
    var action = 'OL_checkbox';
    var id = $('#User_ID').val();
    if(checkbox){
        document.getElementById('OL_values').style = "display:flex";
        var checkbox_value = '1';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                addOL();
                window_fetch();
            }
        });
    }else
    {
        document.getElementById('OL_values').style = "display:none";
        var checkbox_value = '0';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                window_fetch();
            }
        });
    }

}

function Extra_checkbox(x){
    var checkbox=x.checked;
    var action = 'Extra_checkbox';
    var id = $('#User_ID').val();
    if(checkbox){
        document.getElementById('extra_values').style = "display:flex";
        var checkbox_value = '1';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                addExtra();
                window_fetch();
            }
        });
    }else
    {
        document.getElementById('extra_values').style = "display:none";
        var checkbox_value = '0';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                window_fetch();
            }
        });
    }

}

function References_checkbox(x){
    var checkbox=x.checked;
    var action = 'References_checkbox';
    var id = $('#User_ID').val();
    if(checkbox){
        document.getElementById('References_values').style = "display:flex";
        var checkbox_value = '1';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                addReference()
                window_fetch();
            }
        });
    }else
    {
        document.getElementById('References_values').style = "display:none";
        var checkbox_value = '0';
        $.ajax({
            url:"Includes/action.php",
            method:"POST",
            data:{action:action,id:id,checkbox_value:checkbox_value},
            success:function(data)
            {
                window_fetch();
            }
        });
    }

}