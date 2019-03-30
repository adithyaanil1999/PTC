<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/landing.css">
    <link href="https://fonts.googleapis.com/css?family=Alike|Jaldi|Metrophobic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="js/main.js"></script>
    <title>PTC</title>
</head>
<body>
    <div class="main-container-landing">
        <div class="container__welcome-msg ">
            <div class="welcome-msg__Logo-container animated slideInUp faster"></div>
            <div class="welcome-msg__about-Logo-container animated slideInUp">
                    Placement and Training Cell Management Application               
            </div>
        </div>
        <div class="container__innerBox">
            <div class="innerBox__border-box" id="main-innerbox">
                <div class="innerBox__box animated slideInUp" id="innerbox-wrap">
                    <div class="innerBox__box-header">
                        <div class="innerBox__box-header__text">
                            SIGN IN
                        </div>
                    </div>
                    <form class="innerBox__box-form" method="POST" action="#">
                        <div class="innerBox__box-form-input-wrapper">
                            <div class="innerBox__box-input-header">Username:</div>                           
                            <input class="innerBox__box-input-feild" name="username" type="text">
                            <div class="innerBox__box-input-header">Password:</div>
                            <input class="innerBox__box-input-feild" name="password" type="password">
                        </div>
                        <button class="innerBox__box-input-button"> Sign In </button>
                        <div class="innerBox__box-input-msg-wrapper"> 
                            <span class="innerBox__box-input-msg animated shake fast">Incorrect password or username</span>
                        </div>
                    </form>
                    <div class="innerBox__box-form-register-wrapper">
                            Click here to <a id="innerBox__box-reg-btn">Register</a> a new profile
                    </div>
                </div>
            </div>
            <div class="innerBox__border-box" id="reg-container">
                <div class="innerBox__box animated fadeIn" id="reg-option">
                    <div class="innerBox__box-header">
                        <div class="innerBox__box-header__text">
                            Register
                        </div>
                    </div>
                    <form class="innerBox__box-form" method="POST" action="#">
                        <div class="innerBox__box-form-input-wrapper">
                            <div class="innerBox__box-input-header">Username:</div>           
                            <input class="innerBox__box-input-feild" name="username" type="text">
                            <div class="innerBox__box-input-header">Password:</div>
                            <input class="innerBox__box-input-feild" name="password" type="password">
                            <div class="innerBox__box-input-header">Confirm Password:</div>
                            <input class="innerBox__box-input-feild" name="conf_password" type="password">
                        </div>
                        <div class="innerBox__box-input-button" id='reg-user-btn'> Continue </div>
                        <div class="innerBox__box-input-msg-wrapper"> 
                            <span class="innerBox__box-input-msg animated shake fast">Incorrect password or username</span>
                        </div>
                    </form>
                    <div class="innerBox__box-form-register-wrapper" id="reg-back">
                            <i class="fas fa-arrow-left" id='reg-back-btn'></i>
                    </div>
                </div>
            </div>
            
            <div class="innerBox__border-box" id="reg-container-student">
                <div class="innerBox__box animated fadeIn" id="student-detail-box">
                    <div class="innerBox__box-header">
                        <div class="innerBox__box-header__text">
                            Details:
                        </div>
                    </div>
                    <form class="innerBox__box-form" method="POST" action="#">
                        <div class="innerBox__box-form-input-wrapper" id="student-details">
                            <input name="type-user" type="hidden" value='S'>
                            <div class="innerBox__box-input-header">Name:</div> 
                            <input class="innerBox__box-input-feild" name="name" type="text">
                            <div class="innerBox__box-input-header">Branch:</div>
                            <input class="innerBox__box-input-feild" name="branch" type="text">
                            <div class="innerBox__box-input-header">CGPA:</div>
                            <input class="innerBox__box-input-feild" name="cgpa" type="number" step="0.01" min="0">
                        </div>
                        <div class="innerBox__box-form-input-wrapper" id="student-details-2">
                            <div class="innerBox__box-input-header">Career objective:</div>
                            <input class="innerBox__box-input-feild" name="obj" type="text">
                            <div class="innerBox__box-input-header">Profesional Skills:</div> 
                            <input class="innerBox__box-input-feild" name="pro_skills" type="text">
                            <div class="innerBox__box-input-header">Personal Skills:</div>
                            <input class="innerBox__box-input-feild" name="branch" type="text">
                        </div>
                        <div class="innerBox__box-input-button" id="student-details-cont-btn"> Continue</div>
                        <button class="innerBox__box-input-button" id="student-details-cont-btn2"> Register</button>
                        <div class="innerBox__box-input-msg-wrapper"> 
                            <span class="innerBox__box-input-msg animated shake fast">Incorrect password or username</span>
                        </div>
                    </form>
                    <div class="innerBox__box-form-register-wrapper" id="reg-back">
                            <i class="fas fa-arrow-left" id='student-back-btn'></i>
                    </div>
                </div>
            </div>
            <div class="innerBox__border-box" id="reg-container-recruiter">
                <div class="innerBox__box animated fadeIn" id="recruiter-detail-box">
                    <div class="innerBox__box-header">
                        <div class="innerBox__box-header__text">
                            Details:
                        </div>
                    </div>
                    <form class="innerBox__box-form" method="POST" action="#">
                        <div class="innerBox__box-form-input-wrapper" id="student-details">
                            <input name="type-user" type="hidden" value='R'>
                            <div class="innerBox__box-input-header">Name:</div> 
                            <input class="innerBox__box-input-feild" name="name" type="text">
                            <div class="innerBox__box-input-header">Company Name:</div>
                            <input class="innerBox__box-input-feild" name="comp_name" type="text">
                        </div>
                        <div class="innerBox__box-input-button" id="recruiter-details-cont-btn"> Register</div>
                        <div class="innerBox__box-input-msg-wrapper"> 
                            <span class="innerBox__box-input-msg animated shake fast">Incorrect password or username</span>
                        </div>
                    </form>
                    <div class="innerBox__box-form-register-wrapper" id="reg-back-recruiter">
                            <i class="fas fa-arrow-left" id='recruiter-back-btn'></i>
                    </div>
                </div>
            </div>
            

        </div>
        <div class="flex-break"></div>
        <div class="container__footer">
            Vellore Institute Of Technology,Vellore,632014
        </div>
    </div>
</body>
</html>
