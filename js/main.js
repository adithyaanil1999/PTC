

window.onload =()=>{

// Plugin to automate the animate
HTMLElement.prototype.animate = function (animation, callback, context) {
    if (typeof animation != "string") return; // must pass animation type
    var _self = this;
    animation = " animated " + animation;
    _self.className += animation;
    setTimeout(function(){
        _self.className = _self.className.replace(animation, "");
        if (typeof callback == "function") {
            callback.call((context) ? context : window);
        }
    }, (animation == "hinge") ? 2e3 : 1e3)
}


console.log('Window loaded');

//gobal DOM variables
var register_btn = document.querySelector('#innerBox__box-reg-btn');
var innerBox_box_cont = document.querySelector('#main-innerbox');
var innerBox_box = document.querySelector('#innerbox-wrap');
var reg_cont = document.querySelector('#reg-container');
var reg_box = document.querySelector('#reg-option');
var reg_back_btn = document.querySelector('#reg-back-btn');
var student_back_btn = document.querySelector('#student-back-btn');
var student_details_cont = document.querySelector('#reg-container-student');1
var student_detail_box = document.querySelector('#student-detail-box');
var student_details = document.querySelector('#student-details');
var student_details_2 = document.querySelector('#student-details-2');
var student_details_btn = document.querySelector('#student-details-cont-btn');
var student_details_btn2 = document.querySelector('#student-details-cont-btn2');
var reg_btn = document.querySelector('#reg-user-btn');
var recruiter_cont = document.querySelector('#reg-container-recruiter');
var recruiter_box = document.querySelector('#recruiter-detail-box');
var recruiter_back_btn = document.querySelector('#recruiter-back-btn');
var signin_msg = document.getElementById('signin-msg');
var signin_btn = document.getElementById('signin-btn');
var msg = document.getElementById('reg-msg');
var msg_rec = document.getElementById('rec-msg');
var msg_student = document.getElementById('student-msg');
var rec_reg_btn = document.getElementById('recruiter-details-cont-btn');
var form_login = document.getElementById('login-form');


//UI controller
var UIcontroller = (()=>{

        console.log('UIcontroller Started');

        //Event Listeners
        register_btn.addEventListener('click',()=>{        
            innerBox_box.animate('slideOutRight',()=>{
                innerBox_box.classList.replace('slideInUp','fadeIn');
                innerBox_box_cont.style.display='none';
                reg_cont.style.display='flex';

            });
        });

        $('#recruiter_back_btn').click(()=>{
            location.href="index.php";
        });
        reg_back_btn.addEventListener('click',()=>{        
            reg_box.animate('slideOutRight',()=>{
                reg_cont.style.display='none';
                innerBox_box_cont.style.display='flex';
            });
        });

        signin_btn.addEventListener('click',()=>{
            let username=document.getElementById('username_log');
            let password=document.getElementById('password_log');
            if(username.value === '' || password.value === '')
            {
                signin_msg.innerHTML='Feilds cannot be left empty';
                signin_msg.style.display='flex';
                form_login.addEventListener("submit", function(evt) {
                    evt.preventDefault();
                }, true);
                
            }
            else
            {
                console.log('Ajax call');
                reqController.public_req_login();
               
            }

        })
       

        rec_reg_btn.addEventListener('click',()=>{
            console.log(1);
            let name_rec = document.getElementById('rec-name');
            let comp_rec = document.getElementById('rec-comp-name');
            if(name_rec.value === '' || comp_rec.value === ''){
                msg_rec.innerHTML='Feilds cannot be left empty';
                msg_rec.style.display='flex';
            }
            else
            {
                // AJAX call
            }
        })

        reg_btn.addEventListener('click',()=>{
            let username_DOM = document.getElementById('user_name');
            let pass = document.getElementById('pass_reg');
            let pass_conf = document.getElementById('conf_pass');
            let username = username_DOM.value;
                   

            if(pass.value === '' || pass_conf.value ===  '' || username === ''){
                msg.style.display='flex';
                msg.innerHTML='Fields Cannot be Left Empty';
            }
            else{
                if(pass.value !== pass_conf.value){
                    msg.style.display='flex';
                    msg.innerHTML='Passwords do not match';
                }
                else{
                    let REG_user_type = /^[1-9]{2}[B,M][A-Z]{2}[0-9]{4}$/;
                    let OK = REG_user_type.exec(username);
                    if(OK){
                        document.getElementById('reg-user-type').value='S';
                        function reg_to_student(){
                            reg_box.animate('slideOutRight',()=>{
                                reg_cont.style.display='none';
                                student_details_cont.style.display='flex';
                            });
                        }
                        reg_to_student();
                    }
                    else{
                        REG_user_type = /^[1-9]{2}REC[0-9]{4}$/;
                        OK = REG_user_type.exec(username);
                        if(OK){
                            document.getElementById('reg-user-type').value='R';
                            function reg_to_recruiter(){
                                reg_box.animate('slideOutRight',()=>{;
                                    reg_cont.style.display='none';
                                    student_details_cont.style.display='none';
                                    recruiter_cont.style.display='flex';
                                });
                            }
                            reg_to_recruiter();
                        }
                        else
                        {
                            
                            msg.style.display='flex';
                            msg.innerHTML='Incorrect Username';
                            
                        } 
                    }  
                }
            }
        });

        
        function back_handler_1(){
            student_detail_box.animate('slideOutRight',()=>{
                student_details_cont.style.display='none';
                reg_cont.style.display='flex';
            });
        }
        student_back_btn.addEventListener('click',back_handler_1);
        
        student_details_btn.addEventListener('click',() =>{
            let student_name = document.getElementById('student-name');
            let student_branch = document.getElementById('student-branch');
            let student_cgpa = document.getElementById('student-cgpa');

            if( student_name.value === '' || student_branch.value === '' || student_cgpa.value === ''){
                msg_student.innerHTML='Feilds cannot be left Empty';
                msg_student.style.display='flex';
                
            }
            else{
                msg_student.style.display='none';
                student_details.animate('fadeOut',()=>{
                    student_details.style.display='none';
                    student_details_2.classList.add('animated','fadeIn');
                    student_details.classList.remove('animated','fadeIn');
                    student_details_2.style.display='block';
                    student_details_btn.style.display='none';
                    student_details_btn2.style.display='flex';            
                });
                student_details_btn2.addEventListener('click',()=>{
                    let student_obj = document.getElementById('student-obj');
                    let student_pro = document.getElementById('student-pro-skills');
                    let student_per = document.getElementById('student-per-skills');

                    if( student_obj.value === '' || student_pro.value === '' || student_per.value === ''){
                        msg_student.innerHTML='Feilds cannot be left Empty';
                        msg_student.style.display='flex';
                    }
                    else{
                        // AJAX call
                    }


                });
                student_back_btn.removeEventListener('click',back_handler_1);
                // student_back_btn.addEventListener('click',function back_handler_2(){
                //     student_details.classList.add('animated','fadeIn');
                //     student_details_2.classList.remove('animated','fadeIn');
                //     student_details.style.display='block';
                //     student_details_2.style.display='none';
                //     student_details_btn2.style.display='none';
                //     student_details_btn.style.display='flex';                
                //     student_back_btn.addEventListener('click',back_handler_1);

                // })
            } 
        });
        
    })();

    var reqController  = (()=>{

        function login_req(){  
            console.log('request-start');  
            $('#login-form').on('submit',function(event){
                console.log('sign-in-ajax');
                event.preventDefault(); 
                var FormData = $('#login-form').serialize();
                $.ajax({
                    
                    type : 'post',
                    url : 'php/user_login.php',
                    data : FormData,
                    datatype : 'json',
                    encode : true,
                    beforeSend : function(){

                        $('#signin-msg').html('Sending');
                    },
                    success : function(response){

                        response = JSON.parse(response);

                        if(response.message== "ok"){
                            console.log('success');
                            document.location=response.loc;
                        }else{
                            console.log('login-failed');
                            signin_msg.style.display='flex';
                            $('#signin-msg').html('Incorrect username or Password');
                        }

                    }

                });
            });
        }
        

        return{
            public_req_login : function public_req_login(){
                login_req();
            }
        };
    })();
} 

$('document').ready(function(){
    $('#user_login_reg_form').on('submit',function(e){
    // console.log(document.getElementById('reg-user-type').value);
    e.preventDefault(); 
    var FormData = $('#user_login_reg_form').serialize();
    $.ajax({
        
        type : 'post',
        url : 'php/reg_login.php',
        data : FormData,
        datatype : 'json',
        encode : true,
        beforeSend : function(){

            $('#reg-msg').html('Sending');
        },
        success : function(response){

            response = JSON.parse(response);
            if(response.message== "ok"){
                console.log('success');
            }else{
                console.log('reg-failed');
            }

        }

    });

});
});

$('document').ready(function(){
    $('#about-student-details').on('submit',function(e){
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) { 
        e.preventDefault();
        return false;
        }
        e.preventDefault(); 
        var FormData = $('#about-student-details').serialize();
        $.ajax({
            
            type : 'post',
            url : 'php/add_student.php',
            data : FormData,
            datatype : 'json',
            encode : true,
            beforeSend : function(){

                $('#reg-msg').html('Sending');
            },
            success : function(response){

                // response = JSON.parse(response);
                // if(response.message== "ok"){
                    console.log('success');
                    $('#student-msg').html('Please wait for approval');
                    $('#student-msg').css("display","flex");
                    $('#student-back-btn').click(()=>{
                        location.reload();
                });
                }

            // }

        });
        return false;
    });
});

$('document').ready(function(){
    $('#rec-form').on('submit',function(e){
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) { 
        e.preventDefault();
        return false;
        }
        e.preventDefault(); 
        var FormData = $('#rec-form').serialize();
        $.ajax({
            
            type : 'post',
            url : 'php/add_recruiter.php',
            data : FormData,
            datatype : 'json',
            encode : true,
            beforeSend : function(){

                $('#reg-msg').html('Sending');
            },
            success : function(response){

                // response = JSON.parse(response);
                // if(response.message== "ok"){
                    console.log('success');
                    $('#rec-msg').html('Please wait for approval');
                    $('#rec-msg').css("display","flex");
                    $('#rec-back-btn').click(()=>{
                        location.reload();
                });
                }

            // }

        });
        return false;
    });
});

