<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
        @import url('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700');

        body{ font-size: 14px; color: #333; list-style: 26px;font-family: 'Roboto', sans-serif; }

        /** ======================  base css ==============================**/

        a:hover{ text-decoration: none; }
        /** ======================  header ==============================**/
        .header{ background-color: #3c8dbc }
        .header .dropdown-menu {
            position: absolute;
            right: 0;
            left: auto;
            border-radius: 0px;
        }
        .header .user-image {
            float: left;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            margin-right: 10px;
            margin-top: -2px;
        }
        .header .fa.fa-fw.fa-bars{ color: #fff; }
        .header .navbar-light .navbar-nav .nav-link {
            color: #fff;
            padding: 10px 20px;
            position: relative;
        }
        .header  li>a>.label {
            position: absolute;
            top: 9px;
            right: 7px;
            text-align: center;
            font-size: 9px;
            padding: 2px 3px;
            line-height: .9; background-color: #333;    border-radius: .25em;
        }
        .header  li>a:after{ display: none; }

        .header-ul{    border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            background-color: #ffffff;
            padding: 7px 10px;
            border-bottom: 1px solid #f4f4f4;
            color: #333;
            font-size: 14px;}
            .navbar-nav>.notifications-menu>.dropdown-menu, .navbar-nav>.messages-menu>.dropdown-menu, .navbar-nav>.tasks-menu>.dropdown-menu {
            width: 280px;
            padding: 0 0 0 0;
            margin: 0;
            top: 100%;
        }
        .navbar-nav>.messages-menu>.dropdown-menu li .menu>li>a>div>img {
            margin: auto 10px auto auto;
            width: 40px;
            height: 40px;
        }
        .navbar-nav>.messages-menu>.dropdown-menu li .menu>li>a ,.navbar-nav>.notifications-menu>.dropdown-menu li .menu>li>a{
            margin: 0;
            padding: 10px 10px;
                display: block;
            white-space: nowrap;
            border-bottom: 1px solid #f4f4f4;
        }
        .navbar-nav>.messages-menu>.dropdown-menu li .menu>li>a>h4 {
            padding: 0;
            margin: 0 0 0 45px;
            color: #333;
            font-size: 15px;
            position: relative;
        }
        .navbar-nav>.messages-menu>.dropdown-menu li .menu>li>a>p {
            margin: 0 0 0 45px;
            font-size: 12px;
            color: #888888;
        }
        .footer-ul a{
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;
            font-size: 12px;
            background-color: #fff;
            padding: 7px 10px;
            border-bottom: 1px solid #eeeeee;
            color: #333 ; display: block;
            }

            .dropdown-menu-over .menu{  max-height: 200px;
            margin: 0;
            padding: 0;
            list-style: none;
            overflow-x: hidden;}

            .navbar-nav>.notifications-menu>.dropdown-menu li .menu>li>a {
            color: #444444;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 10px;
        }
        .navbar-nav>.notifications-menu>.dropdown-menu li .menu>li>a>.glyphicon, .navbar-nav>.notifications-menu>.dropdown-menu li .menu>li>a>.fa, .navbar-nav>.notifications-menu>.dropdown-menu li .menu>li>a>.ion {
            width: 20px;
        }
        /***********************  TOP Bar ********************/
        .sidebar{ width:220px;  background-color:#000;transition: all 0.5s  ease-in-out; }
        .bg-defoult{background-color:#222;}
        .sidebar ul{ list-style:none; margin:0px; padding:0px; }
        .sidebar li a,.sidebar li a.collapsed.active{ display:block; padding:8px 12px; color:#fff;border-left:0px solid #dedede;  text-decoration:none}
        .sidebar li a.active{background-color:#000;border-left:5px solid #dedede; transition: all 0.5s  ease-in-out}
        .sidebar li a:hover{background-color:#000 !important;}
        .sidebar li a i{ padding-right:5px;}
        .sidebar ul li .sub-menu li a{ position:relative}
        .sidebar ul li .sub-menu li a:before{
            font-family: FontAwesome;
            content: "\f105";
            display: inline-block;
            padding-left: 0px;
            padding-right: 10px;
            vertical-align: middle;
        }
        .sidebar ul li .sub-menu li a:hover:after {
            content: "";
            position: absolute;
            left: -5px;
            top: 0;
            width: 5px;
            background-color: #111;
            height: 100%;
        }
        .sidebar ul li .sub-menu li a:hover{ background-color:#222; padding-left:20px; transition: all 0.5s  ease-in-out}
        .sub-menu{ border-left:5px solid #dedede;}
            .sidebar li a .nav-label,.sidebar li a .nav-label+span{ transition: all 0.5s  ease-in-out}
            
            .sidebar.fliph li a .nav-label,.sidebar.fliph li a .nav-label+span{ display:none;transition: all 0.5s  ease-in-out}
            .sidebar.fliph {
            width: 42px;transition: all 0.5s  ease-in-out;
        
        }
            
        .sidebar.fliph li{ position:relative}
        .sidebar.fliph .sub-menu {
            position: absolute;
            left: 39px;
            top: 0;
            background-color: #222;
            width: 150px;
            z-index: 100;
        }
            

            .user-panel {
            clear: left;
            display: block;
            float: left;
        }
        .user-panel>.image>img {
            width: 100%;
            max-width: 45px;
            height: auto;
        }
        .user-panel>.info,  .user-panel>.info>a {
            color: #fff;
        }
        .user-panel>.info>p {
            font-weight: 600;
            margin-bottom: 9px;
        }
        .user-panel {
            clear: left;
            display: block;
            float: left;
            width: 100%;
            margin-bottom: 15px;
            padding: 25px 15px;
            border-bottom: 1px solid;
        }
        .user-panel>.info {
            padding: 5px 5px 5px 15px;
            line-height: 1;
            position: absolute;
            left: 55px;
        }



    </style>
    <script>
            $(document).ready(function(){
            $('.button-left').click(function(){
                $('.sidebar').toggleClass('fliph');
            });
                
            });
    </script>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->


        <!--===================
        Header
        =======================-->
        <header class="header">
          <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 ">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand p-0 mr-5" href="#"></a>
            <div class="float-left"> <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a> </div>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown messages-menu">
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
              
              <li class="nav-item dropdown  user-menu">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="http://via.placeholder.com/160x160" class="user-image" alt="User Image" >
                  <span class="hidden-xs">Student Portal</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="main">
        <aside>
          <div class="sidebar left ">
            <div class="user-panel">
              <div class="pull-left image">
                <img src="http://via.placeholder.com/160x160" class="rounded-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>Student Portal</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <ul class="list-sidebar bg-defoult">
              <li> <a href="#"  data-target="#dashboard"> <span class="nav-label"> Dashboards </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              
            </li>
            <li> <a href="#"><i ></i> <span class="nav-label">course registraion</span></a> </li>
            <li> <a href="#"  data-target="#products"  > <span class="nav-label">fees and payment</span>  </a>
            
          </li>
          <li> <a href="#"><i ></i> <span class="nav-label">marks and report</span></a> </li>
          <li> <a href="#"  data-target="#tables"  ><span class="nav-label">progress card</span><span ></span></a>
          
        </li>
        <li> <a href="#"  data-target="#e-commerce"  > <span class="nav-label">Hostel Allocation</span></a>
       
      </li>
      <li> <a href=""> <span class="nav-label">School Liberies</span> </a></li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Exeat</span></a> </li>
      <!-- <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li> -->
    </ul>
    </div>
    </aside>
    </div>
  
</body>
</html><?php /**PATH C:\xampp\htdocs\StudentPortal\resources\views/Homepage.blade.php ENDPATH**/ ?>