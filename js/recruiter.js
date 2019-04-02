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
    $('.content').css("display","none");
    $('.home_page').css("display","flex");
    $('#home_btn').click(()=>{
        $('.content').css("display","none");
        $('.home_page').css("display","flex");
        click_ham_menu();

    });
    $('#create_btn').click(()=>{
        $('.content').css("display","none");
        $('.listing').css("display","flex");
        click_ham_menu();

        
    });
    $('#serach_btn').click(()=>{
        $('.content').css("display","none");
        $('.search ').css("display","flex");
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
            url : 'php/check_approve_recruiter.php',
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
            url : 'php/check_listing.php',
            datatype : 'json',
            encode : true,
            beforeSend : function(){
                console.log('sending');
                // $('#reg-msg').html('Sending');
            },
            success : function(response){

                response = JSON.parse(response);
                // console.log(response);
                // if(response.message== "ok"){
                if (response.message=="YES"){
                    $('#create-listing-form').css("display","none");
                    $('#delete-listing-form').css("display","flex");
                    $('#desc-display').html(response.desc);
                    $('#CGPA-display').html(response.cgpa);
                    $('#skills-display').html(response.skill);
                    $('#location-display').html(response.loc);


                }
                else if(response=="NO"){
                    // console.log('ad2');
                    $('#create-listing-form').css("display","flex");
                    $('#delete-listing-form').css("display","none");
                }
            }

            // }

        });
        return false;
    });

}
)();

$('document').ready(function(){
    $('#create-listing-form').on('submit',function(e){
        e.preventDefault(); 
        var FormData = $('#create-listing-form').serialize();
        $.ajax({
            type : 'post',
            url : 'php/create_listing.php',
            data : FormData,
            datatype : 'json',
            encode : true,
            beforeSend : function(){
                console.log('sending_oit');
                $('#list-msg').html('Sending');
            },
            success : function(response){
                response = JSON.parse(response);
                console.log(response);
                $('#list-msg').html('Listed');
                $('#list-msg').css("display","flex");
                location.reload();
            }

        });
        return false;
    });
});

$('document').ready(function(){
    $('#delete-listing-form').on('submit',function(e){
        e.preventDefault(); 
        var FormData = $('#delete-listing-form').serialize();
        $.ajax({
            type : 'post',
            url : 'php/delete_listing.php',
            data : FormData,
            datatype : 'json',
            encode : true,
            beforeSend : function(){
                console.log('sending_it');
                $('#delete-msg').html('Sending');
            },
            success : function(response){
                response = JSON.parse(response);
                console.log(response);
                $('#delete-msg').html('Listed');
                $('#delete-msg').css("display","flex");
                location.reload();
            }

        });
        return false;
    });
});

