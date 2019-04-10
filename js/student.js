let Hamburger_flag=false;
        
//event Listeners

window.onload=()=>{
    function click_ham_menu(){
    $('#nav-icon3').toggleClass('open');
    if(Hamburger_flag===false){
    $('.content-container').css("width","85%");
    $('.navbar-container-common__expanded').css("display","flex");
    setTimeout(function(){
        $('.navbar-container-common__expanded').css("width","10%");
    }, 100);
        Hamburger_flag=true;
    }else{
        $('.content-container').css("width","95%");
        $('.navbar-container-common__expanded').css("width","0%");
        setTimeout(function(){
            $('.navbar-container-common__expanded').css("display","none");
        }, 100);
        Hamburger_flag=false;
    }

    }
    $('.navbar-container-common').click(click_ham_menu);

    $('#home_btn').click(()=>{
        $('.content').css("display","none");
        $('.home_page').css("display","flex");
        click_ham_menu();
    });
    $('.content').css("display","none");
    $('.home_page').css("display","flex");
    $('#home_btn').click(()=>{
        $('.content').css("display","none");
        $('.home_page').css("display","flex");
        click_ham_menu();

    });
    $('#job_vac_btn').click(()=>{
        $('.content').css("display","none");
        $('.vacancy').css("display","flex");
        click_ham_menu();
        
    });
    $('#offer_btn').click(()=>{
        $('.content').css("display","none");
        $('.offer').css("display","flex");
        click_ham_menu();


    });
    $('#sche_btn').click(()=>{
        $('.content').css("display","none");
        $('.schedule').css("display","flex");
        click_ham_menu();


    });
    $('#logout_btn').click(()=>{
        console.log('logout');
        $.ajax({
            url : 'php/logout.php',
            beforeSend : function(){
                console.log('sending');
                // $('#reg-msg').html('Sending');
            },
            success : function(response){
                console.log('succ');
                location.href="index.php";
            }
        });
    });

}

(function(){

    // $('.navbar-container-common').click(click_ham_menu);
    $('document').ready(function(){
        $.ajax({
            url : 'php/check_approve_student.php',
            datatype : 'json',
            encode : true,
            beforeSend : function(){
                console.log('sending');
                // $('#reg-msg').html('Sending');
            },
            success : function(response){

                response = JSON.parse(response);
                // if(response.message== "ok"){
                if (response.status=="PENDING"){
                    // console.log('ad');
                    $('.main-container-admin, .denied').css("display","none");
                    $('.warning-message, .pending').css("display","flex");

                }
                else if(response.status=="DENIED"){
                    // console.log('ad');
                    $('.warning-message, .denied').css("display","flex");
                    $('.main-container-admin, .pending').css("display","none");
                    $('#reason-deny').html(response.desc);
                    $('#reset-profile-btn').click(()=>{
                        console.log(1);
                        $.ajax({
                            url : 'php/delete_user.php',
                            datatype : 'json',
                            encode : true,
                            beforeSend : function(){
                                console.log('sending2');
                            },
                            success : function(response){
                                response = JSON.parse(response);
                                console.log(response);
                                location.href="index.php";
                            }
                        });
                    });

                }
            }

            // }

        });
        return false;
    });
    $('document').ready(function(){
        $.ajax({
            url : 'php/check_placed.php',
            datatype : 'json',
            encode : true,
            beforeSend : function(){
                console.log('sending');
                // $('#reg-msg').html('Sending');
            },
            success : function(response){

                response = JSON.parse(response);
                // if(response.message== "ok"){
                if (response.status=="PLACED"){
                    // console.log('ad');
                    $('.main-container-admin, .denied').css("display","none");
                    $('.pending, .denied').css("display","none");
                    $('.warning-message, .placed').css("display","flex");

                }
    
            }

            // }

        });
        return false;
    });
    $('document').ready(function(){
        $('.apply-btn').on('click',function(e){
            console.log('submiting');
            var id_form=$(this).prev('.hidden').val();
            e.preventDefault(); 
            var FormData = $('#vacany-form-'+id_form).serialize();
            $.ajax({
                
                type : 'post',
                url : 'php/add_vacancy.php',
                data : FormData,
                datatype : 'json',
                encode : true,
                beforeSend : function(){
                    $('.table-msg').html('Sending');
                    $('.table-msg').css("display","flex");

                },
                success : function(response){
                        response = JSON.parse(response);
                        console.log(response);
                        if(response==="APROVED")
                        {
                            $('.table-msg').html('Approved Already');
                            $('.table-msg').css("display","flex");
                        }
                        else if(response=="PENDING")
                        {
                            $('.table-msg').html('Already Applied');
                            $('.table-msg').css("display","flex");
                            console.log('No can do');
                        }
                        else if(response=="DENIED")
                        {
                            $('.table-msg').html('Application Denied');
                            $('.table-msg').css("display","flex");
                            console.log('no can do');
                        }
                    }
    
                // }
    
            });
            return false;
        });
        $('document').ready(function(){
            $('.green1').on('click',function(e){
                console.log('submiting');
                var id_form=$(this).prev('.hidden').val();
                e.preventDefault(); 
                var FormData = $('#accept-offer-form-'+id_form).serialize();
                $.ajax({
                    
                    type : 'post',
                    url : 'php/accept_placement.php',
                    data : FormData,
                    datatype : 'json',
                    encode : true,
                    beforeSend : function(){
                        $('.table-msg').html('Sending');
                        $('.table-msg').css("display","flex");
    
                    },
                    success : function(response){
                            response = JSON.parse(response);
                            console.log(response);
                            if(response==="APROVED")
                            {
                                $('.table-msg').html('Approved Already');
                                $('.table-msg').css("display","flex");
                            }
                            else if(response=="PENDING")
                            {
                                $('.table-msg').html('Already Applied');
                                $('.table-msg').css("display","flex");
                                console.log('No can do');
                            }
                            else if(response=="DENIED")
                            {
                                $('.table-msg').html('Application Denied');
                                $('.table-msg').css("display","flex");
                                console.log('no can do');
                            }
                        }
        
                    // }
        
                });
                return false;
            });
        });
        $('document').ready(function(){
            $('.red2').on('click',function(e){
                console.log('submiting');
                var id_form=$(this).prev('.hidden').val();
                e.preventDefault(); 
                var FormData = $('#deny-offer-form-'+id_form).serialize();
                $.ajax({
                    
                    type : 'post',
                    url : 'php/de.php',
                    data : FormData,
                    datatype : 'json',
                    encode : true,
                    beforeSend : function(){
                        $('.table-msg').html('Sending');
                        $('.table-msg').css("display","flex");
        
                    },
                    success : function(response){
                            response = JSON.parse(response);
                            console.log(response);
                            if(response==="APROVED")
                            {
                                $('.table-msg').html('Approved Already');
                                $('.table-msg').css("display","flex");
                            }
                            else if(response=="PENDING")
                            {
                                $('.table-msg').html('Applied');
                                $('.table-msg').css("display","flex");
                                console.log('No can do');
                            }
                            else if(response=="DENIED")
                            {
                                $('.table-msg').html('Denied');
                                $('.table-msg').css("display","flex");
                                console.log('no can do');
                            }
                        }
        
                    // }
        
                });
                return false;
            });
        });
    
});



}
)();

