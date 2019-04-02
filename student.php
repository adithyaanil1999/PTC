<?php
    session_start();
    include('php/config.php');

    include('php/create_table_apply.php');
    $username=$_SESSION['username'];
    $sql="SELECT student_cgpa from user_student where student_id='$username';";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);

    $cgpa=$row['student_cgpa'];
    $sql="SELECT v.*,r.rec_comp FROM vacancy_listing v JOIN user_recruiter r ON v.vacancy_recruiter_id=r.rec_id WHERE vacancy_cgpa<=$cgpa;";
    $result=mysqli_query($link,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/student.css">
    <link href="https://fonts.googleapis.com/css?family=Alike|Jaldi|Metrophobic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <script src="js/student.js"></script>
    <title>PTC</title>
</head>
<body>
    <div class="warning-message">
        <div class="warning pending">
            The profile status is still pending click <a href="index.php">&nbspHere&nbsp</a> to go back
        </div>
        <div class="warning denied">
            <div class="warning-text-warp">The profile approval is been denied: <br>
            Reason: <span id='reason-deny'></span>
            </div>
            <div id='reset-profile-btn' class="waring-delete-pro"> Click here </div> To delete the profile and reapply
        </div>
    </div>
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
                        <i class="fas fa-briefcase fa-3.5x navbar__hamburger-icons"></i>
                    </div>
                </div>
                <!-- <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__icon">
                        <i class="fas fa-school fa-3.5x navbar__hamburger-icons"></i>
                    </div>
                </div> -->
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__icon">
                        <i class="far fa-calendar fa-3.5x navbar__hamburger-icons"></i>
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
                        <div class="navarbar__hamburger-items__text-wrapper" id="job_vac_btn">Job Vacancies</div>
                    </div>
                </div>
                <!-- <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="train_btn">Training</div>
                    </div>
                </div>-->
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="sche_btn">Schedule</div>
                    </div>
                </div> 
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
                    <h1>Welcome <?php echo $_SESSION['username']?>,<h1>
                    <br>
                    <h2>Use the Navigation bar to browse actions</h2>
                </div>
            </div>
            <div class="content vacancy animated fadeIn">
            <span class="table-msg animated shake">TTEST TEST TEST</span>     
                <div class="content-vacancy-page">
                    <script> var x=1; </script>
                    <?php create_header(); ?>
                    <?php  $x=1;
                    while($row=mysqli_fetch_assoc($result))
                    {   
                        ?>
                            <div class="table-row">
                                    <div class="text dec"><?php echo $row['vacancy_id'] ?></div>
                                    <div class="text dec"><?php echo $row['vacancy_recruiter_id'] ?></div>
                                    <div class="text dec"><?php echo $row['vacancy_comp'] ?></div>
                                    <div class="text inc"><?php echo $row['vacancy_desc'] ?></div>
                                    <div class="text inc"><?php echo $row['vacancy_skills_req'] ?></div>
                                    <div class="text dec"><?php echo $row['vacancy_cgpa'] ?></div>
                                    <div class="text inc"><?php echo $row['vacancy_location'] ?></div>
                                    <div class="text dec">
                                        <form class="form-wrapper" method="POST" action="#" id="vacany-form-<?php echo $row['vacancy_id'] ?>">
                                            <input name="vacany_applied" type="hidden" class="hidden" value="<?php echo $row['vacancy_id'] ?>">
                                            <button id="submit-btn" class="apply-btn">Apply</button>
                                        </form>
                                    </div>
                            </div>
                        <?php
                            $x++;    
                    }
                    ?>
                   
                    </div>
                                  
            </div>
    
            <div class="content training animated fadeIn">
                <!-- <div class="content-home-page">
                </div> -->
            </div>
            <div class="content schedule animated fadeIn">
                <!-- <div class="content-home-page">
                </div> -->
            </div>
        </div>
    </div>
</body>
</html>