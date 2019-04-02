<?php
    session_start();
    include('php/create_table_approval.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/recruiter.css">
    <link href="https://fonts.googleapis.com/css?family=Alike|Jaldi|Metrophobic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <script src="js/recruiter.js"></script>
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
                        <i class="fas fa-address-card fa-3.5x navbar__hamburger-icons"></i>
                    </div>
                </div>
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__icon">
                        <i class="far fa-check-circle fa-3.5x navbar__hamburger-icons"></i>
                    </div>
                </div>
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
                        <div class="navarbar__hamburger-items__text-wrapper" id="create_btn">Create lisiting</div>
                    </div>
                </div>
                <div class="navarbar__hamburger-items">
                    <div class="navarbar__hamburger-items__text">
                        <div class="navarbar__hamburger-items__text-wrapper" id="serach_btn">Approve Candidates</div>
                    </div>
                </div>
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
            <div class="content listing animated fadeIn">
                <div class="content-listing-page">
                    <form class="content-create-lisiting"id="create-listing-form" method="POST" action="#">
                        <div class="form-items-wrap">
                            <h1>Description</h1>
                            <textarea name="listing_desc" row="5" coloum="100" class="content-listing-feilds"></textarea>
                            <h1>Minimum CGPA</h1>
                            <input name="cgpa-min" type="number" min="0" max=10" step="0.01">
                            <h1>Skills Required</h1>
                            <textarea name="skills_req" row="5" coloum="100" class="content-listing-feilds"></textarea>
                            <h1>Location</h1>
                            <input name="location" type="text">
                            <span id="list-msg"></span>
                            <button class="form-submit-button">Add lisiting</button>
                        </div>
                    </form>
                    <form class="content-create-lisiting delete-listing" id="delete-listing-form" method="POST" action="#">
                        <div class="form-items-wrap">
                            <h1>Description</h1>
                            <span id="desc-display"></span>
                            <h1>Minimum CGPA</h1>
                            <span id="CGPA-display"></span>
                            <h1>Skills Required</h1>
                            <span id="skills-display"></span>
                            <h1>Location</h1>
                            <span id="location-display"></span>
                            <span id="delete-msg"></span>
                        </div>
                        <div class="button-wrapper"><button class="form-submit-button">Remove lisiting?</button></div>
                    </form>
                </div>
            </div>
            <div class="content search animated fadeIn">
                <div class="content-approve-page">
                    <?php create_header() ?>
                </div>
            <div class="content schedule animated fadeIn">
                <div class="content-home-page">
                    ad
                </div>
            </div>
        </div>
    </div>
</body>
</html>