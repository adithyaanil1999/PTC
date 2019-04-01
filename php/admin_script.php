<?php
    include('config.php');
    function create_student_profile($count,$id,$name,$cgpa,$branch,$career_obj,$pro_skills,$pre_skills)
    {
        
        $str= "&lt;div class=&quot;content_profile_verify animated fadeIn profile-".$count."&quot;&gt;
        &lt;div class=&quot;content_profile_verify-content-side&quot;&gt;
            &lt;div class=&quot;content_profile_verify-content-side-icon&quot;&gt;
                &lt;div class=&quot;content_profile_verify-content-side-icon-wrapper&quot;&gt;
                    &lt;i class=&quot;fas fa-user-graduate&quot;&gt;&lt;/i&gt;
                &lt;/div&gt;
                &lt;div class=&quot;content_profile_verify-content-side-text-wrapper&quot;&gt;
                    &lt;span id=&quot;student_id&quot;&gt;".$id."&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;content_profile_verify-content-side-items&quot;&gt;
                &lt;h2&gt;Name:&lt;/h2&gt;
                &lt;p id=&quot;student-name&quot;&gt;".$name."&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class=&quot;content_profile_verify-content-side-items&quot;&gt;
                &lt;h2&gt;Branch:&lt;/h2&gt;
                &lt;p id=&quot;student-name&quot;&gt;".$branch."&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;content_profile_verify-content-side-items&quot;&gt;
                &lt;h2&gt;CGPA:&lt;/h2&gt;
                &lt;p id=&quot;student-name&quot;&gt;".$cgpa."&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;content_profile_verify-content-main&quot;&gt;
            &lt;div class=&quot;content_profile_verify-content-main-item&quot;&gt;
                &lt;div class=&quot;content_profile_verify-content-main-item-header&quot;&gt;
                    &lt;h2&gt;Career  Objecive&lt;/h2&gt;
                    &lt;span id=&quot;stu-carrer-obj&quot;&gt;".$career_obj."&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;content_profile_verify-content-main-item&quot;&gt;
                &lt;div class=&quot;content_profile_verify-content-main-item-header&quot;&gt;
                    &lt;h2&gt;Professional Skills&lt;/h2&gt;
                    &lt;span id=&quot;stu-pro-skills&quot;&gt;".$pro_skills."&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;content_profile_verify-content-main-item&quot;&gt;
                &lt;div class=&quot;content_profile_verify-content-main-item-header&quot;&gt;
                    &lt;h2&gt;Personal Skills&lt;/h2&gt;
                    &lt;span id=&quot;stu-per-skills&quot;&gt;".$pre_skills."&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
        ";

        echo html_entity_decode($str);
    }

    function create_recruiter_profile($count,$rec_id,$name,$comp_name,$comp_desc)
    {
        $str ="&lt;div class=&quot;content_profile_verify animated fadeIn profile-".$count."&quot;&gt;
        &lt;div class=&quot;content_profile_verify-content-side&quot;&gt;
            &lt;div class=&quot;content_profile_verify-content-side-icon&quot;&gt;
                &lt;div class=&quot;content_profile_verify-content-side-icon-wrapper&quot;&gt;
                    &lt;i class=&quot;fas fa-briefcase&quot;&gt;&lt;/i&gt;
                &lt;/div&gt;
                &lt;div class=&quot;content_profile_verify-content-side-text-wrapper&quot;&gt;
                    &lt;span id=&quot;student_id&quot;&gt;".$rec_id."&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;content_profile_verify-content-side-items&quot;&gt;
                &lt;h2&gt;Name:&lt;/h2&gt;
                &lt;p id=&quot;rec-name&quot;&gt;".$name."&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class=&quot;content_profile_verify-content-side-items&quot;&gt;
                &lt;h2&gt;Company:&lt;/h2&gt;
                &lt;p id=&quot;rec_comp&quot;&gt;".$comp_name."&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;content_profile_verify-content-main&quot;&gt;
            &lt;div class=&quot;content_profile_verify-content-main-item&quot;&gt;
                &lt;div class=&quot;content_profile_verify-content-main-item-header&quot;&gt;
                    &lt;h2&gt;Company desc&lt;/h2&gt;
                    &lt;span id=&quot;comp_dec&quot;&gt;".$comp_desc."&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;";
        
        echo html_entity_decode($str);
        
    }
    function create_verify_portal(){
        include('config.php');
        global $max;
        global $array_json;
        $sql="
        SELECT s.student_id,s.student_name,s.student_branch,s.student_cgpa,s.student_obj,s.student_prof_skills,s.student_pers_skills FROM user_student s WHERE s.student_approved_status='PENDING'; 
        ";
        $result = mysqli_query($link, $sql);
        if(!$result){
            $err='a'.mysqli_error($link);
        }
        else{
            // $row=mysqli_fetch_assoc($result);
            $max=mysqli_num_rows($result);
            $max_temp=$max;
            $count=1;
            $array= array();
            // $max=123;
            while($row=mysqli_fetch_assoc($result)){
                create_student_profile($count,$row['student_id'],$row['student_name'],$row['student_cgpa'],$row['student_branch'],$row['student_obj'],$row['student_prof_skills'],$row['student_pers_skills']);
                // array_push($arr_ac,'123');
                array_push($array,$row['student_id']);
                
                $count=$count+1;
            }
            
            $sql="
                SELECT r.rec_id,r.rec_name,r.rec_comp,c.comp_desc
                FROM user_recruiter r 
                JOIN company c on c.comp_name=r.rec_comp 
                WHERE r.rec_approved_status='PENDING';
            ";
            $result = mysqli_query($link, $sql);
            if(!$result){
                $err='a'.mysqli_error($link);
            }
            else{
                $max=mysqli_num_rows($result);
                $max=$max+$max_temp;
                while($row=mysqli_fetch_assoc($result)){
                    create_recruiter_profile($count,$row['rec_id'],$row['rec_name'],$row['rec_comp'],$row['comp_desc']);
                    array_push($array,$row['rec_id']);
                    $count=$count+1;
                }
            }
            $array_json = json_encode($array);
        }
        
    }

?>
