<?php

$servername = "localhost";
$username = "u154896521_blog";
$password = "Santhosh@2003";
$dbname = "u154896521_blog";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
session_start();
if (isset($_SESSION["user_id"])){
    $sql = "SELECT * FROM users
            WHERE id ={$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}
$name = $user["name"];
$csslinks = '<link href="https://rguktweb.in/coderzone/images.png" rel="icon">
        <link href="https://rguktweb.in/coderzone/images.png" rel="apple-touch-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../../assets/css/style.css" rel="stylesheet"/>
        <script data-cfasync="false" type="text/javascript" data-adel="atag" src="//acacdn.com/script/atg.js" czid="qcgufl0voo"></script>
        <script src="../../assets/vendor/js/helpers.js"></script>';
if(isset($user)){
    $csslinks = str_replace('<script data-cfasync="false" type="text/javascript" data-adel="atag" src="//acacdn.com/script/atg.js" czid="qcgufl0voo"></script>','',$csslinks);
}
$main ='        <div class="layout-page" style="width:100%;position:fixed;background:#fff">
                    <nav class="navbar navbar-example navbar-expand-lg bg-navbar-theme sticky layout-navbar navbar align-items-center">
                  		<div class="container-fluid">
                      		<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                    <i class="bx bx-menu bx-sm"></i>
                                </a>
                            </div>
                    		<a class="navbar-brand" style="font-size:20px" href="https://rguktweb.in/coderzone">CODERZONE</a>
                			<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    			<div class="collapse navbar-collapse d-none d-lg-block" id="navbar-ex-4">
                      				<div class="navbar-nav me-auto" style="padding-left:20px">
    							        <a class="nav-item nav-link" href="https://rguktweb.in">Home</a>
    							        <a class="nav-item nav-link" href="https://rguktweb.in/newsbuzz">Newsbuzz</a>
    							        <a class="nav-item nav-link" href="https://material.rguktweb.in">PUC Material</a>
    							        <a class="nav-item nav-link" href="https://rguktweb.in/Stories">Stories</a>
                      				</div>
    						        <ul class="d-block d-lg-none"></ul>
    						        <script>
                                    $(document).ready(function(){
                                        $("#myInput").on("keyup", function() {
                                            var value = $(this).val().toLowerCase();
                                            $("#myList div").filter(function() {
                                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                            });
                                        });
                                    });
                                    </script>
                    			</div>
                    			<div class="navbar-nav align-items-center d-block d-lg-block">
                                    <div class="nav-item d-flex align-items-center">
                                        <i class="bx bx-search fs-4 lh-0"></i>
                                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." id="myInput" />
                                    </div>
                                </div>
                    			<ul class="navbar-nav flex-row align-items-center ms-auto">';

if(! isset($user)){$main = $main.'
                                    <div class="navbar-nav align-item-right" style="padding-left:20px">
                                        <a class="nav-item nav-link" href="https://rguktweb.in/coderzone/sign_in"><button class="btn btn-sm btn-primary"><b>login</b></button></a>
                                    </div>';
}else{$main = $main.
                  				    '<li class="nav-item navbar-dropdown dropdown-user dropdown">
                                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <div class="avatar">
                                                <img src="'.$user["piclink"].'" alt class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="'.$user["piclink"].'" alt class="w-px-40 h-auto rounded-circle"/>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <span class="fw-semibold d-block">'.$user["name"].'</span>
                                                            <small class="text-muted">'.$user["de"].'</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="dropdown-divider"></div>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="https://rguktweb.in/coderzone/user-profile">
                                                    <i class="bx bx-user me-2"></i>
                                                    <span class="align-middle">My Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="https://rguktweb.in/coderzone/settings">
                                                    <i class="bx bx-cog me-2"></i>
                                                    <span class="align-middle">Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="https://rguktweb.in/coderzone/logout.php">
                                                    <i class="bx bx-power-off me-2"></i>
                                                    <span class="align-middle">Log Out</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>';
}
$main = $main.'
                                </ul>
                            </div>
                  		</div>
                	</nav>
                </div>
            </div>
            <div class="layout-overlay layout-menu-toggle"></div>
        </main>';
$asidec = '<main class="layout-wrapper layout-content-navbar" style="height:65px;padding:0;">
            <div class="layout-container">
                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="background:transparent">
                    <div class="app-brand demo" style="">
                        <a href="https://rguktweb.in/" class="app-brand-link">
	                       <div class="app-brand-logo demo">
	                            <img src="https://rguktweb.in/Images/vee.png" class="img-fluid" style="height:50px;width:50px;border-radius:50%">
	                        </div>
                            <div class="app-brand-text demo menu-text fw-bolder ms-2" style="text-transform:uppercase;font-size:20px">rguktweb</div>
                        </a>
                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                            <i class="bx bx-chevron-left bx-sm align-middle"></i>
                        </a>
                    </div>
                    <hr>
                    <div class="menu-inner-shadow"></div>
                    <ul class="menu-inner py-1">
                        <li class="menu-item"><a class="menu-link" href="../">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48" style=" fill:#000000;"><path fill="#283593" fill-rule="evenodd" d="M22.903,3.286c0.679-0.381,1.515-0.381,2.193,0 c3.355,1.883,13.451,7.551,16.807,9.434C42.582,13.1,43,13.804,43,14.566c0,3.766,0,15.101,0,18.867 c0,0.762-0.418,1.466-1.097,1.847c-3.355,1.883-13.451,7.551-16.807,9.434c-0.679,0.381-1.515,0.381-2.193,0 c-3.355-1.883-13.451-7.551-16.807-9.434C5.418,34.899,5,34.196,5,33.434c0-3.766,0-15.101,0-18.867 c0-0.762,0.418-1.466,1.097-1.847C9.451,10.837,19.549,5.169,22.903,3.286z" clip-rule="evenodd"></path><path fill="#5c6bc0" fill-rule="evenodd" d="M5.304,34.404C5.038,34.048,5,33.71,5,33.255 c0-3.744,0-15.014,0-18.759c0-0.758,0.417-1.458,1.094-1.836c3.343-1.872,13.405-7.507,16.748-9.38 c0.677-0.379,1.594-0.371,2.271,0.008c3.343,1.872,13.371,7.459,16.714,9.331c0.27,0.152,0.476,0.335,0.66,0.576L5.304,34.404z" clip-rule="evenodd"></path><path fill="#fff" fill-rule="evenodd" d="M24,10c7.727,0,14,6.273,14,14s-6.273,14-14,14 s-14-6.273-14-14S16.273,10,24,10z M24,17c3.863,0,7,3.136,7,7c0,3.863-3.137,7-7,7s-7-3.137-7-7C17,20.136,20.136,17,24,17z" clip-rule="evenodd"></path><path fill="#3949ab" fill-rule="evenodd" d="M42.485,13.205c0.516,0.483,0.506,1.211,0.506,1.784 c0,3.795-0.032,14.589,0.009,18.384c0.004,0.396-0.127,0.813-0.323,1.127L23.593,24L42.485,13.205z" clip-rule="evenodd"></path></svg>&nbsp;&nbsp;
                        <div>Learn C</div>
                            </a>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <div class="menu-header-text">INTRODUCTION</div>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../intro" style="color:#ff5828">
                                <i style="font-size:20px;color:#ff5828" class="menu-icon tf-icons bi bi-clock-history"></i>
                                <div>&nbsp;Intro and History</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../install" style="color:#ffbb2c">
                                <i style="font-size:20px;color:#ffbb2c" class="menu-icon tf-icons bi bi-download"></i>
                                <div>&nbsp;Installing C IDE</div>
                            </a>
                        </li>
                        <!--<li class="menu-item"><a class="menu-link" href="../syntax" style="color:#47aeff">
                                <i style="font-size:20px;color:#47aeff" class="menu-icon tf-icons bi bi-text-indent-left"></i>
                                <div>&nbsp;Syntax</div>
                            </a>
                        </li>-->
                        <li class="menu-item"><a class="menu-link" href="../comments" style="color:#ffa76e">
                                <i style="font-size:20px;color:#ffa76e" class="menu-icon tf-icons bi bi-hash"></i>
                                <div>&nbsp;Comments</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../variables" style="color:#ff4db3">
                                <i style="font-size:20px;color:#ff4db3" class="menu-icon tf-icons bi bi-asterisk"></i>
                                <div>&nbsp;Variables</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../tokens" style="color:darkblue">
                                <i style="font-size:20px;color:darkblue" class="menu-icon tf-icons bi bi-front"></i>
                                <div>&nbsp;Tokens</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../keywords" style="color:#ffbb2c">
                                <i style="font-size:20px;color:#ffbb2c" class="menu-icon tf-icons bi bi-key"></i>
                                <div>&nbsp;Keywords</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../identifiers" style="color:#008080">
                                <i style="font-size:20px;color:#008080" class="menu-icon tf-icons bi bi-tv"></i>
                                <div>&nbsp;Identifiers</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../operators" style="color:#e80368">
                                <i style="color:#e80368;font-size:20px" class="menu-icon tf-icons bi bi-plus"></i>
                                <div>&nbsp;Operators</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../constants" style="color:#47aeff">
                                <i style="font-size:20px;color:#47aeff" class="menu-icon tf-icons bi bi-hr"></i>
                                <div>&nbsp;Constants</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../datatypes" style="color:#be00ff">
                                <i style="color:#be00ff;font-size:20px" class="menu-icon tf-icons bi bi-files"></i>
                                <div>&nbsp;Datatypes</div>
                            </a>
                        </li>
                        <li style="margin-top:5px" class="menu-item 1"><a style="color:tomato" href="javascript:void(0);" class="menu-link menu-toggle">
                                <i style="font-size:20px;color:tomato" class="menu-icon tf-icons bi bi-shuffle"></i>
                                <div>&nbsp;Arrays</div>
                            </a>
                            <ul class="menu-sub">
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../arrays" style="color:tomato">
                                        <div>Arrays Intro</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../array_types" style="color:tomato">
                                        <div>Types of Arrays</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../applications_of_arrays" style="color:tomato">
                                        <div>Applications of Arrays</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li style="margin-top:5px" class="menu-item 2"><a style="color:darkblue" href="javascript:void(0);" class="menu-link menu-toggle">
                                <i style="font-size:20px;color:darkblue" class="menu-icon tf-icons bi bi-shuffle"></i>
                                <div>&nbsp;Strings</div>
                            </a>
                            <ul class="menu-sub">
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../strings" style="color:darkblue">
                                        <div>Strings Intro</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../string_handling_functions" style="color:darkblue">
                                        <div>String Handling</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../if_and_else_conditions" style="color:#ffbb2c">
                                <i style="font-size:20px;color:#ffbb2c" class="menu-icon tf-icons bi bi-braces"></i>
                                <div>&nbsp;If...Else</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../switch" style="color:#ff4db3">
                                <i style="font-size:20px;color:#ff4db3" class="menu-icon tf-icons bi bi-toggle-on"></i>
                                <div>&nbsp;Switch</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../whileloops">
                                <i style="font-size:20px;" class="menu-icon tf-icons bi bi-infinity"></i>
                                <div>&nbsp;While Loops</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../forloops" style="color:#ff5828">
                                <i style="font-size:20px;color:#ff5828" class="menu-icon tf-icons bi bi-infinity"></i>
                                <div>&nbsp;For Loops</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../user_input" style="color:#11dbcf">
                                <i style="font-size:20px;color:#11dbcf" class="menu-icon tf-icons bi bi-box-arrow-in-down"></i>
                                <div>&nbsp;User Input</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../structures" style="color:#47aeff">
                                <i style="font-size:20px;color:#47aeff" class="menu-icon tf-icons bi bi-bricks"></i>
                                <div>&nbsp;Structures</div>
                            </a>
                        </li>
                        <li style="margin-top:5px" class="menu-item 3"><a style="color:#e80368" href="javascript:void(0);" class="menu-link menu-toggle">
                                <i style="font-size:20px;color:#e80368" class="menu-icon tf-icons bi bi-shuffle"></i>
                                <div>&nbsp; Functions</div>
                            </a>
                            <ul class="menu-sub">
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../functions" style="color:#e80368">
                                        <div>Functions Intro</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../function_types" style="color:#e80368">
                                        <div>Types of Functions</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../parameter_passing" style="color:#e80368">
                                        <div>Parameter Passing</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../statics" style="color:#be00ff">
                                <i style="font-size:20px;color:#be00ff" class="menu-icon tf-icons bi bi-arrow-left-right"></i>
                                <div>&nbsp;Statics</div>
                            </a>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <div class="menu-header-text">Advanced</div>
                        </li>                        
                        <li class="menu-item"><a class="menu-link" href="../pointers" style="color:#ff5828">
                                <i style="font-size:20px;color:#ff5828" class="menu-icon tf-icons bi bi-clock-history"></i>
                                <div>&nbsp;Pointers</div>
                            </a>
                        </li>
                        <!--<li class="menu-item"><a class="menu-link" href="../function_arguments_by_reference" style="color:#ffbb2c">
                                <i style="font-size:20px;color:#ffbb2c" class="menu-icon tf-icons bi bi-download"></i>
                                <div>&nbsp;Function arguments by reference</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../dynamic_allocation" style="color:#47aeff">
                                <i style="font-size:20px;color:#47aeff" class="menu-icon tf-icons bi bi-text-indent-left"></i>
                                <div>&nbsp;Dynamic allocation</div>
                            </a>
                        </li>-->
                        <li class="menu-item"><a class="menu-link" href="../arrays_and_pointers" style="color:#ff4db3">
                                <i style="font-size:20px;color:#ff4db3" class="menu-icon tf-icons bi bi-asterisk"></i>
                                <div>&nbsp;Arrays and Pointers</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../recursions" style="color:#ffa76e">
                                <i style="font-size:20px;color:#ffa76e" class="menu-icon tf-icons bi bi-hash"></i>
                                <div>&nbsp;Recursion</div>
                            </a>
                        </li>
                        <!--<li class="menu-item"><a class="menu-link" href="../linked_lists" style="color:#e80368">
                                <i style="color:#e80368;font-size:20px" class="menu-icon tf-icons bi bi-plus"></i>
                                <div>&nbsp;Linked lists</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../binary_trees" style="color:#be00ff">
                                <i style="color:#be00ff;font-size:20px" class="menu-icon tf-icons bi bi-files"></i>
                                <div>&nbsp;Binary trees</div>
                            </a>
                        </li>-->
                        <li class="menu-item"><a class="menu-link" href="../unions" style="color:tomato">
                                <i style="font-size:20px;color:tomato" class="menu-icon tf-icons bi bi-shuffle"></i>
                                <div>&nbsp;Unions</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../pointer_arithmetics" style="color:darkblue">
                                <i style="font-size:20px;color:darkblue" class="menu-icon tf-icons bi bi-sort-alpha-up-alt"></i>
                                <div>&nbsp;Pointer Arithmetics</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../function_pointers" style="color:#ffbb2c">
                                <i style="font-size:20px;color:#ffbb2c" class="menu-icon tf-icons bi bi-braces"></i>
                                <div>&nbsp;Function Pointers</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../bitmasks" style="color:#ff4db3">
                                <i style="font-size:20px;color:#ff4db3" class="menu-icon tf-icons bi bi-toggle-on"></i>
                                <div>&nbsp;Bitmasks</div>
                            </a>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <div class="menu-header-text">Practice</div>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../compiler">
                                <i style="font-size:20px;" class="menu-icon tf-icons bi bi-terminal"></i>
                                <div>&nbsp;Compiler</div>
                            </a>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <div class="menu-header-text">Pages</div>
                        </li>
                        <li class="menu-item">
                            <a href="https://rguktweb.in/coderzone/contact_us" class="menu-link">
                                <i class="menu-icon tf-icons bi bi-headset"></i>
                                <div>Contact Us</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="https://rguktweb.in/Our-Team" class="menu-link" style="color:#47aeff">
                                <i class="menu-icon tf-icons bi bi-person"></i>
                                <div>Our Team</div>
                            </a>
                        </li>
                    </ul>
                </aside>
                ';
$aside = $asidec.$main;
$asidepy = '<main class="layout-wrapper layout-content-navbar" style="height:65px;padding:0;">
            <div class="layout-container">
                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="background:transparent">
                    <div class="app-brand demo" style="">
                        <a href="https://rguktweb.in/" class="app-brand-link">
	                       <div class="app-brand-logo demo">
	                            <img src="https://rguktweb.in/Images/vee.png" class="img-fluid" style="height:50px;width:50px;border-radius:50%">
	                        </div>
                            <div class="app-brand-text demo menu-text fw-bolder ms-2" style="text-transform:uppercase;font-size:20px">rguktweb</div>
                        </a>
                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                            <i class="bx bx-chevron-left bx-sm align-middle"></i>
                        </a>
                    </div>
                    <hr>
                    <div class="menu-inner-shadow"></div>
                    <ul class="menu-inner py-1">
                        <li class="menu-item"><a class="menu-link" href="../">
                                <i style="font-size:20px;color:#ff5828" class="menu-icon tf-icons bx bxl-python"></i>
                                <div>Learn Python</div>
                            </a>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <div class="menu-header-text">INTRODUCTION</div>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../intro" style="color:#ff5828">
                                <i style="font-size:20px;color:#ff5828" class="menu-icon tf-icons bi bi-clock-history"></i>
                                <div>&nbsp;Intro and History</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../install" style="color:#ffbb2c">
                                <i style="font-size:20px;color:#ffbb2c" class="menu-icon tf-icons bi bi-download"></i>
                                <div>&nbsp;Installing Python</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../syntax" style="color:#47aeff">
                                <i style="font-size:20px;color:#47aeff" class="menu-icon tf-icons bi bi-text-indent-left"></i>
                                <div>&nbsp;Syntax</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../comments" style="color:#ffa76e">
                                <i style="font-size:20px;color:#ffa76e" class="menu-icon tf-icons bi bi-hash"></i>
                                <div>&nbsp;Comments</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../variables" style="color:#ff4db3">
                                <i style="font-size:20px;color:#ff4db3" class="menu-icon tf-icons bi bi-asterisk"></i>
                                <div>&nbsp;Variables</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../errors" style="color:darkblue">
                                <i style="font-size:20px;color:darkblue" class="menu-icon tf-icons bi bi-exclamation-triangle"></i>
                                <div>&nbsp;Errors</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../reserved_keys" style="color:#ffbb2c">
                                <i style="font-size:20px;color:#ffbb2c" class="menu-icon tf-icons bi bi-key"></i>
                                <div>&nbsp;Reserved Keys</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../operators" style="color:#e80368">
                                <i style="color:#e80368;font-size:20px" class="menu-icon tf-icons bi bi-plus"></i>
                                <div>&nbsp;Operators</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../datatypes" style="color:#be00ff">
                                <i style="color:#be00ff;font-size:20px" class="menu-icon tf-icons bi bi-files"></i>
                                <div>&nbsp;Datatypes</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../numbers" style="color:#008080">
                                <i style="font-size:20px;color:#008080" class="menu-icon tf-icons bi bi-sort-numeric-up-alt"></i>
                                <div>&nbsp;&nbsp;Numbers</div>
                            </a>
                        </li>
                        <li style="margin-top:5px" class="menu-item 1"><a style="color:darkblue" href="javascript:void(0);" class="menu-link menu-toggle">
                                <i style="font-size:20px;color:darkblue" class="menu-icon tf-icons bi bi-sort-alpha-up-alt"></i>
                                <div>&nbsp;Strings</div>
                            </a>
                            <ul class="menu-sub">
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../strings" style="color:darkblue">
                                        <div>Strings Intro</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../string_methods" style="color:darkblue">
                                        <div>String Methods</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../booleans" style="color:#47aeff">
                                <i style="font-size:20px;color:#47aeff" class="menu-icon tf-icons bi bi-fonts"></i>
                                <div>&nbsp;Booleans</div>
                            </a>
                        </li>
                        <li style="margin-top:5px" class="menu-item 2"><a style="color:#ff5828" href="javascript:void(0);" class="menu-link menu-toggle">
                                <i style="font-size:20px;color:#ff5828;font-style:normal;font-weight:lighter" class="menu-icon tf-icons">[ ]</i>
                                <div>&nbsp;Lists</div>
                            </a>
                            <ul class="menu-sub">
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../lists" style="color:#ff5828">
                                        <div>Lists Intro</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../list_methods" style="color:#ff5828">
                                        <div>List Methods</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li style="margin-top:5px" class="menu-item 3"><a style="color:#47aeff" href="javascript:void(0);" class="menu-link menu-toggle">
                                <i style="font-size:20px;color:#47aeff;font-style:normal;font-weight:lighter" class="menu-icon tf-icons">( )</i>
                                <div>&nbsp;Tuples</div>
                            </a>
                            <ul class="menu-sub">
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../tuples" style="color:#47aeff">
                                        <div>Tuples Intro</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../tuple_methods" style="color:#47aeff">
                                        <div>Tuple Methods</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li style="margin-top:5px" class="menu-item 4"><a style="color:#e80368" href="javascript:void(0);" class="menu-link menu-toggle">
                                <i style="font-size:20px;color:#e80368;font-style:normal;font-weight:lighter" class="menu-icon tf-icons">{:}</i>
                                <div>&nbsp;Dictionary</div>
                            </a>
                            <ul class="menu-sub">
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../dictionary" style="color:#e80368">
                                        <div>Dictionary Intro</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../dictionary_methods" style="color:#e80368">
                                        <div>Dictionary Methods</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li style="margin-top:5px" class="menu-item 5"><a style="color:#009393" href="javascript:void(0);" class="menu-link menu-toggle">
                                <i style="font-size:20px;color:#009393;font-style:normal;font-weight:lighter" class="menu-icon tf-icons">{:}</i>
                                <div>&nbsp;Sets</div>
                            </a>
                            <ul class="menu-sub">
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../sets" style="color:#009393">
                                        <div>Sets Intro</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../set_methods" style="color:#009393">
                                        <div>Set Methods</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../casting" style="color:be00ff">
                                <i style="font-size:20px;color:be00ff" class="menu-icon tf-icons bi bi-arrow-left-right"></i>
                                <div>&nbsp;Casting</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../formatting" style="color:#ffa76e">
                                <i style="font-size:20px;color:#ffa76e" class="menu-icon tf-icons bi bi-spellcheck"></i>
                                <div>&nbsp;Formatting</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../if_and_else_conditions" style="color:#ffbb2c">
                                <i style="font-size:20px;color:#ffbb2c" class="menu-icon tf-icons bi bi-braces"></i>
                                <div>&nbsp;If...Else</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../whileloops">
                                <i style="font-size:20px;" class="menu-icon tf-icons bi bi-infinity"></i>
                                <div>&nbsp;While Loops</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../forloops" style="color:#ff5828">
                                <i style="font-size:20px;color:#ff5828" class="menu-icon tf-icons bi bi-infinity"></i>
                                <div>&nbsp;For Loops</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../functions" style="color:#47aeff">
                                <i style="font-size:20px;color:#47aeff" class="menu-icon tf-icons bi bi-telephone-forward"></i>
                                <div>&nbsp;Functions</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../arrays" style="color:#016170">
                                <i style="font-size:20px;color:#016170" class="menu-icon tf-icons bi bi-shuffle"></i>
                                <div>&nbsp;Arrays</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../filehandling" style="color:#be00ff">
                                <i style="font-size:20px;color:#be00ff" class="menu-icon tf-icons bi bi-file-earmark-plus"></i>
                                <div>&nbsp;File Handling</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../modules" style="color:#ff4db3">
                                <i style="font-size:20px;color:#ff4db3" class="menu-icon tf-icons bi bi-stars"></i>
                                <div>&nbsp;Modules</div>
                            </a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../classes" style="color:#11dbcf">
                                <i style="font-size:20px;color:#11dbcf" class="menu-icon tf-icons bi bi-easel"></i>
                                <div>Classes</div>
                            </a>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <div class="menu-header-text">Practice</div>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="../compiler">
                                <i style="font-size:20px;" class="menu-icon tf-icons bi bi-terminal"></i>
                                <div>&nbsp;Compiler</div>
                            </a>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <div class="menu-header-text">Workshops</div>
                        </li>
                        <li style="margin-top:5px" class="menu-item 6"><a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i style="font-size:20px;font-style:normal;font-weight:lighter" class="menu-icon tf-icons bi bi-gear"></i>
                                <div>&nbsp;Workshops</div>
                            </a>
                            <ul class="menu-sub">
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../workshop1">
                                        <div>Workshop 1</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../workshop2">
                                        <div>Workshop 2</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../workshop3">
                                        <div>Workshop 3</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../workshop4">
                                        <div>Workshop 4</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../workshop5">
                                        <div>Workshop 5</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../workshop6">
                                        <div>Workshop 6</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../workshop7">
                                        <div>Workshop 7</div>
                                    </a>
                                </li>
                                <li style="margin-top:5px" class="menu-item"><a class="menu-link" href="../workshop8">
                                        <div>Workshop 8</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <div class="menu-header-text">Pages</div>
                        </li>
                        <li class="menu-item">
                            <a href="https://rguktweb.in/coderzone/contact_us" class="menu-link">
                                <i class="menu-icon tf-icons bi bi-headset"></i>
                                <div>Contact Us</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="https://rguktweb.in/Our-Team" class="menu-link" style="color:#47aeff">
                                <i class="menu-icon tf-icons bi bi-person"></i>
                                <div>Our Team</div>
                            </a>
                        </li>
                    </ul>
                </aside>
                ';
$asidepy = $asidepy.$main;
$page = '<footer id="footer" class="footer content-footer" style="margin-bottom:0;margin-top:0;padding:0">
            <div class="footer-top" style="padding-top:10px;margin-bottom:-35px">
                <div class="container">
                    <script async="async" data-cfasync="true" src="//pl17583865.highperformancegate.com/acf3bb42ca026cbe2f9eebabb6db4970/invoke.js"></script>
                    <div id="container-acf3bb42ca026cbe2f9eebabb6db4970"></div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-between">
                            <li class="page-item active">
                                <a class="page-link" href="1"><i class="tf-icon bx bx-chevrons-left"></i> Previous</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="2">Next <i class="tf-icon bx bx-chevrons-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>';
$footer = '<a class="btn btn-primary" href="#" style="position:fixed;right:15px;bottom:15px;z-index:9999;width:35px;height:35px;border-radius:4px;align-items:center;justify-content:center;padding:1px 5px 2px 5px"><i class="bi bi-arrow-up-short" style="font-size:24px;color:#fff;"></i></a>
        <footer id="footer" class="footer content-footer" style="bottom:0;padding:0;">
            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-12 footer-info">
                            <a href="https://rguktweb.in" class="logo d-flex align-items-center">
                                <img src="https://rguktweb.in/Images/vee.png" alt="">
                                <span>Rguktweb</span>
                            </a>
                            <p>Connecting Ideologies of Rguktians.</p>
                            <div class="footer-links">
                                <ul class="row">
                                <li></li>
                            <li class="col-sm-6 col-lg-12 col-6"><i class="bi bi-chevron-right"></i><a href="https://rguktsklm.ac.in/">RGUKT-SKLM</a></li>
                            <li class="col-sm-6 col-lg-12 col-6"><i class="bi bi-chevron-right"></i><a href="https://rguktn.ac.in/">RGUKT-NUZ</a></li>
                            <li class="col-sm-6 col-lg-12 col-6"><i class="bi bi-chevron-right"></i><a href="https://rguktrkv.ac.in/">RGUKT-RKV</a></li>
                            <li class="col-sm-6 col-lg-12 col-6"><i class="bi bi-chevron-right"></i><a href="https://www.rguktong.ac.in/">RGUKT-ONG</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i><a href="https://rguktweb.in/#">Home</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="https://rguktweb.in/#about">About</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="https://rguktweb.in/#features">Features</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="https://rguktweb.in/Our-Team">Our Team</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="https://rguktweb.in/cookiepolicy">Cookie Policy</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="https://rguktweb.in/privacypolicy">Privacy policy</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i><a href="https://rguktweb.in/">Our Events</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="https://rguktweb.in/newsbuzz">Newsbuzz</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="https://material.rguktweb.in/">PUC Material</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="https://rguktweb.in/coderzone">CoderZone</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="https://rguktweb.in/Stories">Stories</a></li>
                                <li><i class="bi bi-chevron-right"></i><a href="https://rguktweb.in/"></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-sm-12 footer-contact text-center text-lg-start">
                            <h4>Contact Us</h4>
                            <p class="card-content"><a href="mailto:rguktweb3@gmail.com">rguktweb3@gmail.com</a></p>
                            <div class="">
                          ©
                          	<script>
                            	document.write(new Date().getFullYear());
                          	</script>
                          	, made with ❤️ by
                          	<a href="https://rguktweb.in/Our-Team" class="footer-link fw-bolder">Santhosh</a>
                      	</div>
                        <div class="social-links mt-3">
                            <a href="mailto:rguktweb3@gmail.com" style="padding:10px;color:#fff;border-radius:5px;" class="btn fl btn-primary"><i class="bi bi-envelope-fill"></i></a>
                            <a href="https://t.me/+OLfnzrn9w1o4OTc1" style="padding:10px;color:#fff;border-radius:5px;" class="btn fl btn-primary"><i class="bi bi-telegram"></i></a>
                            <a href="https://instagram.com/rguktweb?igshid=YmMyMTA2M2Y=" style="padding:10px;color:#fff;border-radius:5px;" class="btn fl btn-primary"><i class="bi bi-instagram"></i></a>
                            <a href="https://youtube.com/@karra_Moulinadh" style="padding:10px;color:#fff;border-radius:5px;" class="btn fl btn-primary"><i class="bi bi-youtube"></i></a>
                        </div>
                        </div>
                    </div>
                    <div class="row gy-3 flex-wrap justify-content-between py-2 flex-md-row flex-column text-sm-center">
                        
                    </div>
                </div>
            </div>
        </footer>
        <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../../assets/vendor/libs/popper/popper.js"></script>
        <script src="../../assets/vendor/js/bootstrap.js"></script>
        <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="../../assets/vendor/js/menu.js"></script>
        <script src="../../assets/js/main.js"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>';

?>