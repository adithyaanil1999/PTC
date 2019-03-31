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
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__icon">
                        <i class="fas fa-chart-area fa-3.5x navbar__hamburger-icons"></i>
                    </div>
                </div>
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__icon">
                        <i class="far fa-user fa-3.5x navbar__hamburger-icons"></i>
                    </div>
                </div>
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
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="view_report_btn">View Report</div>
                    </div>
                </div>
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="manage_btn">Manage Accounts</div>
                    </div>
                </div>
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="manage_btn">Logout</div>
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
            <div class="content verify-account animated fadeIn">
                <div class="content__spacers">
                
                </div>
                <div class="content_profile_verify profile-1" style="display:flex">
                    <div class="content_profile_verify-content-side">
                        <div class="content_profile_verify-content-side-icon">
                            <div class="content_profile_verify-content-side-icon-wrapper">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="content_profile_verify-content-side-text-wrapper">
                                <span id="student_id">17BCI0163</span>
                            </div>
                        </div>
                        <div class="content_profile_verify-content-side-items">
                            <h2>Name:</h2>
                            <p id="student-name">Adithya Sreemandiram Anil</p>
                        </div>
                        
                        <div class="content_profile_verify-content-side-items">
                            <h2>Branch:</h2>
                            <p id="student-name">CSE with Information Security</p>
                        </div>
                        <div class="content_profile_verify-content-side-items">
                            <h2>CGPA:</h2>
                            <p id="student-name">9.6</p>
                        </div>
                    </div>
                    <div class="content_profile_verify-content-main">
                        <div class="content_profile_verify-content-main-item">
                            <div class="content_profile_verify-content-main-item-header">
                                <h2>Career  Objecive</h2>
                                <span id="stu-carrer-obj"> !</span>
                            </div>
                        </div>
                        <div class="content_profile_verify-content-main-item">
                            <div class="content_profile_verify-content-main-item-header">
                                <h2>Professional Skills</h2>
                                <span id="stu-pro-skills"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ab voluptates unde aliquam exercitationem, illum expedita est laboriosam excepturi dolor numquam minima quisquam odio! Eum vero repellendus tempora. Id, iure!</span>
                            </div>
                        </div>
                        <div class="content_profile_verify-content-main-item">
                            <div class="content_profile_verify-content-main-item-header">
                                <h2>Personal Skills</h2>
                                <span id="stu-per-skills"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_profile_verify profile-2" style="display:none">
                    <div class="content_profile_verify-content-side">
                        <div class="content_profile_verify-content-side-icon">
                            <div class="content_profile_verify-content-side-icon-wrapper">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="content_profile_verify-content-side-text-wrapper">
                                <span id="student_id">17BCI0123</span>
                            </div>
                        </div>
                        <div class="content_profile_verify-content-side-items">
                            <h2>Name:</h2>
                            <p id="rec-name">Adithya Sreemandiram Anil</p>
                        </div>
                        
                        <div class="content_profile_verify-content-side-items">
                            <h2>Company:</h2>
                            <p id="rec_comp">Tata</p>
                        </div>
                    </div>
                    <div class="content_profile_verify-content-main">
                        <div class="content_profile_verify-content-main-item">
                            <div class="content_profile_verify-content-main-item-header">
                                <h2>Company desc</h2>
                                <span id="comp_dec"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ab voluptates unde aliquam exercitationem, illum expedita est laboriosam excepturi dolor numquam minima quisquam odio! Eum vero repellendus tempora. Id, iure!</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_profile_verify profile-3" style="display:none">
                    <div class="content_profile_verify-content-side">
                        <div class="content_profile_verify-content-side-icon">
                            <div class="content_profile_verify-content-side-icon-wrapper">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="content_profile_verify-content-side-text-wrapper">
                                <span id="student_id">17BCI0123</span>
                            </div>
                        </div>
                        <div class="content_profile_verify-content-side-items">
                            <h2>Name:</h2>
                            <p id="student-name">Adithya Sreemandiram Anil</p>
                        </div>
                        
                        <div class="content_profile_verify-content-side-items">
                            <h2>Branch:</h2>
                            <p id="student-name">CSE with Information Security</p>
                        </div>
                        <div class="content_profile_verify-content-side-items">
                            <h2>CGPA:</h2>
                            <p id="student-name">9.6</p>
                        </div>
                    </div>
                    <div class="content_profile_verify-content-main">
                        <div class="content_profile_verify-content-main-item">
                            <div class="content_profile_verify-content-main-item-header">
                                <h2>Career  Objecive</h2>
                                <span> !</span>
                            </div>
                        </div>
                        <div class="content_profile_verify-content-main-item">
                            <div class="content_profile_verify-content-main-item-header">
                                <h2>Professional Skills</h2>
                                <span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ab voluptates unde aliquam exercitationem, illum expedita est laboriosam excepturi dolor numquam minima quisquam odio! Eum vero repellendus tempora. Id, iure!</span>
                            </div>
                        </div>
                        <div class="content_profile_verify-content-main-item">
                            <div class="content_profile_verify-content-main-item-header">
                                <h2>Personal Skills</h2>
                                <span> Lorem ipsum dolor sit amet consectetur adipisicing elit. </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content__spacers verify-footer">
                    <div class="content__verify-profile-btns left-btn">
                    </div>
                    <div class="content__verify-footer-item-wrapper"></div>
                    <div class="content__verify-profile-btns right-btn">
                    </div>
                </div>
            </div>
            <div class="content reg_company animated fadeIn">
                Reg company
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