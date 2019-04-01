window.onload= ()=>{
    var UIcontroller = (()=>{
        //Hamburger controller
        let Hamburger_flag=false;
        
        //event Listeners
        function click_ham_menu(){
            console.log('click');
            $('#nav-icon3').toggleClass('open');
            if(Hamburger_flag===false){
            // $('.navbar-container-common').css("width","15%");
            $('.content-container').css("width","85%");
            $('.navbar-container-common__expanded').css("display","flex");
            setTimeout(function(){
                $('.navbar-container-common__expanded').css("width","10%");
            }, 100);
            // $('.navarbar__hamburger-items__text').css("display","flex");
                Hamburger_flag=true;
            }else{
                // $('.navbar-container-common').css("width","5%");
                $('.content-container').css("width","95%");
                $('.navbar-container-common__expanded').css("width","0%");
                setTimeout(function(){
                    $('.navbar-container-common__expanded').css("display","none");
                }, 100);
                // $('.navarbar__hamburger-items__text').css("display","none");
                Hamburger_flag=false;
            }

        }
        $('.navbar-container-common').click(click_ham_menu);

        $('#home_btn').click(()=>{
            $('.content').css("display","none");
            $('.home_page').css("display","flex");
            click_ham_menu();
        });
        $('#verify_acc_btn').click(()=>{
            $('.content').css("display","none");
            $('#btn-left-verify').css("display","none");
            $('.verify-account').css("display","flex");
            click_ham_menu();

        });
        $('#reg_comp_btn').click(()=>{
            $('.content').css("display","none");
            $('.reg_company').css("display","flex");
            click_ham_menu();

        });
        $('#view_report_btn').click(()=>{
            $('.content').css("display","none");
            $('.report').css("display","flex");
            click_ham_menu();
        });
        $('#manage_btn').click(()=>{
            $('.content').css("display","none");
            $('.manage').css("display","flex");
            click_ham_menu();

        });

        $('.profile-1').css("display","flex");
        $('#btn-left-verify').css("display","none");
        if(max==1)
        {
            $('#btn-right-verify').css("display","none");
        }

        if(max==0){
            $('.verify-footer').css("display","none");
            $('.no-items').css("display","flex");

        }
        //Displaying the profiles
        var count=1;
        var pointer=0;
        // var len = arr.length();
        function right_profile(){
            $('.content_profile_verify').css("display","none");
            if(count!=max){
                count++;
                pointer++;
            }
            $('#btn-left-verify').css("display","flex");
            $('.profile-'+count).css("display","flex");
            if(count===max){
                $('#btn-right-verify').css("display","none");
            }
            console.log(pointer);
        }
        function left_profile(){
                $('.content_profile_verify').css("display","none");
                if(count>=0){
                    count--;
                    pointer--;
                }
                $('#btn-right-verify').css("display","flex");
                $('.profile-'+count).css("display","flex");
                if(count===1){
                    $('#btn-left-verify').css("display","none");
                }
            console.log(pointer);

        }
        $('#btn-left-verify').click(left_profile);
        $('#btn-right-verify').click(right_profile);

        $('#back-btn-deny-desc').click(()=>{
            $('.content__verify-buttons').css("display","flex");
            $('.content__verify-deny-wrapper').css("display","none");
        });
        $('#deny-btn').click(()=>{
            // console.log(1);
            $('.content__verify-buttons').css("display","none");
            $('.content__verify-deny-wrapper').css("display","flex");
        });

        $('#send-btn').click(()=>{
            $('#verify_user_id').val(arr[pointer]);
            $('#verify_user_status').val("DENIED");
            $('#verify_user_desc').val($('#deny-desc').val());
            console.log($('#verify_user_id').val());

            //call AJAX
            reqController.public_verify_login();
        });
        $('#approve-btn').click(()=>{
            $('#verify_user_id').val(arr[pointer]);
            $('#verify_user_status').val("APPROVED");
            $('#verify_user_desc').val('null');
            // $console.log('a');
            reqController.public_verify_login();
        });
    })();

    var reqController  = (()=>{

        function approve_user_req(){  
            console.log('request-start');  
            $('#verify-user-form').on('submit',function(event){
                event.preventDefault(); 
                var FormData = $('#verify-user-form').serialize();
                $.ajax({
                    
                    type : 'post',
                    url : '../php/verify_user.php',
                    data : FormData,
                    datatype : 'json',
                    encode : true,
                    beforeSend : function(){

                        $('#sending-signal').css("display","flex");
                    },
                    success : function(response){

                        response = JSON.parse(response);
                        console.log(response);
                        $('#sending-signal').css("display","none");

                        if(response.message== "ok"){
                            console.log('success');
                            location.reload();
                        }else{
                            console.log('login-failed');

                        }

                    }

                });
            });
            location.reload();
        }
        return{
            public_verify_login : function public_verify_login(){
                approve_user_req();
            }
        };
    
    })();

}