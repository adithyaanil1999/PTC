<?php
    session_start();
    include('php/admin_script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Alike|Jaldi|Metrophobic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <script src="js/admin.js"></script>
    <title>PTC</title>
</head>
<body>
    <div class="main-container-admin">
        <div class="navbar-container-common">
            <div class="navbar__expand-btn-cont">
                <div class="navbar__expand-hamburger-icon-wrapper">
                    <div id="nav-icon3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="navbar__hamburger-items_container">
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__icon">
                        <i class="fas fa-home navbar__hamburger-icons"></i>
                    </div>
                </div>
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__icon">
                        <i class="fas fa-tasks fa-3.5x navbar__hamburger-icons"></i>
                    </div>
                </div>
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__icon">
                        <i class="fas fa-building fa-3.5x navbar__hamburger-icons"></i>
                    </div>
                </div>
                <!-- <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__icon">
                        <i class="fas fa-chart-area fa-3.5x navbar__hamburger-icons"></i>
                    </div>
                </div>
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__icon">
                        <i class="far fa-user fa-3.5x navbar__hamburger-icons"></i>
                    </div>
                </div> -->
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__icon">
                        <i class="fas fa-sign-out-alt fa-3.5x navbar__hamburger-icons"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-container-common__expanded">
            <div class="navbar__expand-btn-cont"></div>
            <div class="navbar__hamburger-items_container">
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="home_btn">Home</div>
                    </div>
                </div>
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="verify_acc_btn">Verify accounts</div>
                    </div>
                </div>
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="reg_comp_btn">Register Company</div>
                    </div>
                </div>
                <!-- <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="view_report_btn">View Report</div>
                    </div>
                </div> -->
                <!-- <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="manage_btn">Manage Accounts</div>
                    </div>
                </div> -->
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="logout_btn">Logout</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-container">
            <div class="content home_page animated fadeIn">
                <div class="content-home-page">
                    <h1>Welcome Admin,<h1>
                    <br>
                    <h2>Use the Navigation bar to browse actions</h2>
                </div>
            </div>
            <div class="content verify-account animated fadeIn" id="content-main">
                <div class="content__spacers">
                </div>

                 <!-- dynamically display profiles to be verified -->
                <?php create_verify_portal()?>
                <script> var max=<?php echo $max?>;var arr=<?php echo $array_json;?> ;
                </script>
                <div class="no-items">
                    No more accounts to be verified
                </div>
                <div class="content__spacers verify-footer">
                    <div class="content__verify-profile-btns">
                        <i id="btn-left-verify" class="fas fa-chevron-left"></i>
                    </div>
                    <div class="content__verify-footer-item-wrapper">
                        <form id='verify-user-form' method="POST" action="#">                
                            <button class="content__verify-buttons animated fadeIn" id="approve-btn">Approve</button>
                            <div class="content__verify-buttons animated fadeIn" id="deny-btn">Deny</div>
                            <div class="content__verify-deny-wrapper">
                                <div class="content__verify-deny-nav-wrap">                       
                                    <i id="back-btn-deny-desc" class="fas fa-arrow-left"></i>
                                    <div id="sending-signal" class="animated fadeIn" ><i class="fas fa-sync"></i>Sending</div>
                                    <button class="send-btn-wrap"><i id="send-btn" class="fas fa-check-circle"></i></button>
                                </div>
                                <div class="content__verify-deny-text-wrapper">
                                    Provide the Resason for denied request:
                                    <textarea rows="2" cols="18" class="content__verify-deny-box animated fadeIn" name="deny-desc" id="deny-desc"></textarea>
                                </div>
                            </div>
                            <input id="verify_user_id" name="user-id" type="hidden">
                            <input id="verify_user_status" name="user-status" type="hidden">
                            <input id="verify_user_desc" name="user-deny-desc" type="hidden">   
                        </form>
                    </div>
                    <div class="content__verify-profile-btns">
                        <i id="btn-right-verify" class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="content reg_company animated fadeIn">
                <div class="content_reg_company_container">
                    <div class="reg_company_banner">
                        Enter the Details of the company
                    </div>
                    <div class="reg_company_wrapper">
                        <form class="company_details_wrap" id="comp-form" method="POST" action="#"> 
                            <h1>Company name</h1>
                            <input name='comp_name' class="company_details_wrap_inputs "type="text" id="comp_name_reg">
                            <h1>Company description</h1>
                            <textarea id="comp_desc_reg" class="company_details_wrap_inputs" row="15" col="100">
                            </textarea>
                            <input name="comp_desc" id="comp_desc_reg_value" type="hidden"> 
                            <button class="comp_desc_button">Register</button>
                        </form>
                    </div>
                    <div class="content_comp_msg" id='comp-msg'></div>
                </div>
            </div>
            <div class="content report animated fadeIn">
                Report
            </div>
            <div class="content manage animated fadeIn">
                Manage
            </div>
            
        </div>    
    </div>
</body>
</html>    