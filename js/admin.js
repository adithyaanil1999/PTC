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


    })();



}