<!DOCTYPE html>
<html>

    <!-- Mirrored from wp1.themexlab.com/html/volunteer/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:40:25 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Volunteer Multipurpose HTML5 Donation Template | About Us</title>
        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/revolution-slider.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
        <style>
            .error {
                color: #FF0000;
            }
        </style>


    </head>

    <body>
        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- Main Header -->
            <?php require 'includes/header.php'; ?>
            <!--End Main Header -->


            <!--Sidebar Navigation-->
            <?php require 'includes/navigation.php'; ?>
            <!--Sidebar Nav End-->
            <!--Bread Crumb-->
            <div class="bread-crumb">
                <div class="auto-container">
                    Pages  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Event</a>
                </div>
            </div>
            <br>
            <!--Schedule Section / Style Two-->
            <section class="schedule-section style-two">
                <div class="auto-container">
                    <form action="test.php" method="post" onSubmit="alert('Successfully Submited');">
                        <div style="margin-bottom: 30px;">
                            <table>
                                <tr>
                                    <td>
                                        <h4>Enter your school:</h4>
                                    </td>
                                    <td>
                                        <input type ='text' id='txtschool' name="txtschool" class='inputField' style="background:wheat; margin-left: 20px; width: 300px;"  autocomplete='off'>
                                    </td>
                                    <td><input type="button" class="btn" value="+ ADD NEW SCHOOL" onclick="add_schooldetails();" style="margin-left: 50px; h">
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><div id='schoolList' style='top:-8px; cursor:pointer; background-color:lavender; text-align: center; margin-left: 20px;'></div></td>
                                </tr>
                            </table>
                            <!--<div class="hour">01/01/2016</div>-->
                            <div  id="schooldetails" style="margin-top: 60px; display: none">
                                <fieldset >
                                    <legend style="margin-top: 40px; width: 500px;">School details:</legend>
                                    <div class="form-group row" style="width: 500px;">

                                        <div class="col-10">
                                            School name<span class="error">*</span><input class="form-control" type="text" name="scho" value="" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="width: 500px;">

                                        <div class="col-10">
                                            Address<span class="error">*</span><input class="form-control" type="search" name="addr" value="" id="example-search-input">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="width: 500px;">

                                        <div class="col-10">
                                            Province<span class="error">*</span><input class="form-control" type="text" value="" name="prov" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="width: 500px;">

                                        <div class="col-10">
                                            Principal Name<span class="error">*</span><input class="form-control" type="text" value="" name="prov" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="width: 500px;">

                                        <div class="col-10">
                                            Contact Number<span class="error">*</span><input class="form-control" type="text" name ="cont" value="" id="example-search-input">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="schedule-box clearfix wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="tabs-box" style="margin-top: 30px;">
                                <div class="hour-box">
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>Educational resources</h3></div>
                                    <!--<div class="content-box collapsed">-->
                                    <div class="content-box">
                                        <div class="content" style="margin-left: 100px;">
                                            <ul>
                                                <li><div id='wrapper' style=padding-top:30px;'>
                                                        <table class="table table-striped" cellspacing=1 cellpadding=3 id='table1' border=1 >
                                                            <tr>
                                                                <th>item</th>
                                                                <th>Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" name ="itema" id="itema" style="background:wheat;"></td>
                                                                <td><input type="text" name="qtya" id="qtya" style="background:wheat;"></td>
                                                                <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row();" value="Add Item"></td>
                                                            </tr>
                                                        </table>
                                                        <input type="hidden" name="one"  value="0" id="one">
                                                    </div>
                                                </li> <!-- Add class "current" to sub menu items also -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="hour-box">
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>Sports facilities and equipment</h3></div>
                                    <div class="content-box">
                                        <div class="content" style="margin-left: 100px;">
                                            <ul>
                                                <li>Sport items: </li>
                                                <li><div id='wrapper' style=padding-top:30px;'>
                                                        <table class="table table-striped" cellspacing=1 cellpadding=3 id='table2' border=1 style="margin-top: -30px;">
                                                            <tr>
                                                                <th>item</th>
                                                                <th>Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="itemtwo" name="itemtwo" style="background:wheat;"></td>
                                                                <td><input type="text" id="qtytwo" name="qtytwo" style="background:wheat;"></td>
                                                                <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row2();" value="Add item"></td>
                                                            </tr>
                                                        </table>
                                                        <input type="hidden" name="two"  value="0" id="two">

                                                    </div>
                                                </li> <!-- Add class "current" to sub menu items also -->
                                                <li>Training coaches:</li>
                                                <li><div>
                                                        <table class="table table-striped" cellspacing=1 cellpadding=1 id='table2c' border=1 style="width: 31px;">
                                                            <tr>
                                                                <th>Sport</th>

                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="sport2" name="sport" style="background:wheat;"></td>
                                                                <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row2c();" value="Add item"></td>
                                                            </tr>
                                                        </table>
                                                        <input type="hidden" name="twob"  value="0" id="twob">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="hour-box">
                                    <!--                                    <div class="hour">03/01/2015</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>Academic, non-academic staff</h3></div>
                                    <div class="content-box">
                                        <div class="content">
                                            <ul>
                                                <li><div id='wrapper' style='padding-top:30px; margin-left: 100px; margin-top: -20px;'>

                                                        <div class="toggle-btn"><h3 id="h4tab" style="margin-bottom: 20px; cursor:pointer;">Academic</h3></div>

                                                        <table class="table table-striped" cellspacing=1 cellpadding=3 id='table3' border=1 style="display: none;">
                                                            <tr>
                                                                <th>Subject</th>
                                                                <th>Grade</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="subject" name="subject" style="background:wheat;"></td>
                                                                <td><input type="text" id="grade" name="grade" style="background:wheat;"></td>
                                                                <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row3();" value="Add item"></td>
                                                            </tr>
                                                        </table>
                                                        <input type="hidden" name="three"  value="0" id="three">
                                                        <div class="toggle-btn"><h3 id="h4tab2" style="margin-bottom:20px; cursor:pointer;">Non-academic staff</h3></div>

                                                        <table class="table table-striped" cellspacing=1 cellpadding=3 id='table4' border=1 style="display: none;">
                                                            <tr>
                                                                <th>Staff Category</th>
                                                                <th>Number of Staff</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="category" name="category" style="background:wheat;"></td>
                                                                <td><input type="text" id="no" name="no" style="background:wheat;"></td>
                                                                <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row4();" value="Add item"></td>
                                                            </tr>
                                                        </table>
                                                        <input type="hidden" name="four"  value="0" id="four">
                                                    </div>
                                                </li> <!-- Add class "current" to sub menu items also -->
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <div class="hour-box">
                                    <!--<div class="hour">10/01/2016</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>Infrastructure - Water/Electricity</h3></div>

                                    <div class="content-box" style='padding-top:30px; margin-left: 100px; margin-top: -20px;'>
                                        <div class="toggle-btn"><h3 id="h4tab5" style="margin-bottom:20px; cursor:pointer;">Water/Electricity</h3></div>
                                        <div id='h4tab5b' style="display: none; padding-top:30px; margin-left: 100px; margin-top: -40px;  margin-bottom: 20px;">
                                            <input type="checkbox" name="water" id="water">No drinking water/water not suitable for drinking purposes </br>
                                            <!--<h3>Electricity</h3>-->
                                            <input type="checkbox" name="ele" id="ele">No electricity supply for the school

                                        </div>
                                        <div class="toggle-btn"><h3 id="h4tab6" style="margin-bottom:20px; cursor:pointer; margin-bottom: 20px;">Sanitary facilities</h3></div>

                                        <div id='h4tab6b' style="display: none; padding-top:30px; margin-left: 100px; margin-top: -40px;">
                                            No of washrooms required : <input type='number' name='wash' value="0" id='sen' style='width:40px;'>

                                        </div>
                                        <input type="hidden" name="six"  value="0" id="six">

                                        <div class="toggle-btn"><h3 id="h4tab7" style="margin-bottom:20px; cursor:pointer;">School furniture</h3></div>
                                        <table class="table table-striped" cellspacing=1 cellpadding=3 id='table7' border=1 style="display: none; margin-left: 60px;">
                                            <tr>
                                                <th>Unit type</th>
                                                <th>Quantity</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" id="unit" name="funit" style="background:wheat;"></td>
                                                <td><input type="text" id="uqty" name="fqty" style="background:wheat;"></td>
                                                <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row7();" value="Add item"></td>
                                            </tr>
                                        </table>
                                        <input type="hidden" name="seven"  value="0" id="seven">


                                        <div class="toggle-btn"><h3 id="h4tab8" style="margin-bottom:20px; cursor:pointer;">Other</h3></div>

                                        <div id='h4tab8b' style="display: none; padding-top:30px; margin-left: 100px; margin-top: -40px;">
                                            <input type="checkbox" name="lab" id="inf1">Lab facilities(computer labs )</br>
                                            <input type="checkbox" name="build" id="inf2">Buildings</br>
                                            <input type="checkbox" name="internet" id="inf3">Internet facility</br>

                                        </div>
                                        <input type="hidden" name="eight"  value="0" id="eight">
                                        <!--<h6>Water</h6>-->

                                    </div>
                                </div>
                                <div class="hour-box">


                                    <!--<div class="hour">28/01/2015</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>Wastage Management </h3></div>

                                    <div class="content-box" style="padding-top:30px; margin-left: 100px; margin-top: -10px;">

                                        <h4>Garbage disposal</h4>
                                        <div style="margin-left: 100px;"> 

                                            <input type="checkbox" name="garbage1" id="garbage1">No proper way of disposing garbage</br>
                                            <input type="checkbox" name="garbage2" id="garbage2">No fixed dates for collection of  garbage in the area
                                        </div>
                                        <h4 style="margin-top: 20px;">Drainage system </h4>
                                        <div style="margin-left: 100px;"> 
                                            <input type="checkbox" name="dra" id="garbage1">Improper Drainage system 
                                        </div>
                                    </div>
                                    <input type="hidden" name="nine"  value="0" id="nine">
                                </div>
                            </div>


                            <!--Tabs Box End-->

                        </div>
                        <!--                        <div class="col-xs-12 col-sm-6" style="margin-top: 60px;">
                                                    <fieldset >
                                                        <legend style="margin-top: 40px; width: 500px;">School details:</legend>
                                                        <div class="form-group row" style="width: 500px;">
                        
                                                            <div class="col-10">
                                                                School name<span class="error">*</span><input class="form-control" type="text" name="scho" value="" id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="width: 500px;">
                        
                                                            <div class="col-10">
                                                                Address<span class="error">*</span><input class="form-control" type="search" name="addr" value="" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="width: 500px;">
                        
                                                            <div class="col-10">
                                                                Province<span class="error">*</span><input class="form-control" type="text" value="" name="prov" id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="width: 500px;">
                        
                                                            <div class="col-10">
                                                                Contact Number<span class="error">*</span><input class="form-control" type="text" name ="cont" value="" id="example-search-input">
                                                            </div>
                                                        </div>
                        
                                                    </fieldset>
                                                </div>
                        
                                                <div class="col-xs-12 col-sm-6" style="margin-top: 60px; position: relative; left: 80px;">
                                                    <fieldset >
                                                        <legend style="margin-top: 40px; width: 500px;">Contact Person   details:</legend>
                                                        <div class="form-group row" style="width: 500px;">
                        
                                                            <div class="col-10">
                                                                Name<span class="error">*</span><input class="form-control" type="text" name="pname" value="" id="example-text-input">
                        
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="width: 500px;">
                        
                                                            <div class="col-10">
                                                                Occupation<span class="error">*</span><input class="form-control" type="search" name="occu" value="" id="example-search-input" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="width: 500px;">
                        
                                                            <div class="col-10">
                                                                Contact Number<span class="error">*</span><input class="form-control" type="text" name="pcont" value="" id="example-text-input">
                        
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="width: 500px;">
                        
                                                            <div class="col-10">
                                                                Email<input class="form-control" type="search" value="" name="email" id="example-search-input" >
                                                            </div>
                                                        </div>
                        
                                                    </fieldset>
                                                </div>-->

                        <!--Schedule Box End-->
                        <br>
                        <div class="text-right">
                            <input type="submit" class="download-btn theme-btn" value="SUBMIT" style="margin-top: 60px;">
                        </div>
                    </form>
                </div>
            </section>


            <br>




            <!--Parallax Section-->
            <section class="parallax-section" style="background-image:url(images/parallax/image-1.jpg);">
                <div class="auto-container">
                    <div class="text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h2>Are you ready to volunteer?</h2>
                        <h3>start one of our programm today and help people in need</h3>
                        <div class="line"></div>
                        <a class="theme-btn light-btn" href="#">BECOME A VOLUNTEER</a>
                        <a class="theme-btn light-btn" href="#">MAKE A DONATION</a>

                    </div>
                </div>
            </section>


            <!--Client Logos-->
            <section class="sponsors-section">
                <div class="container">
                    <ul class="slider">
                        <li><a href="#"><img src="images/clients/logo-6.png" alt="" title=""></a></li>
                        <li><a href="#"><img src="images/clients/logo-7.png" alt="" title=""></a></li>
                        <li><a href="#"><img src="images/clients/logo-8.png" alt="" title=""></a></li>
                        <li><a href="#"><img src="images/clients/logo-9.png" alt="" title=""></a></li>
                        <li><a href="#"><img src="images/clients/logo-10.png" alt="" title=""></a></li>
                    </ul>
                </div>
            </section>


            <!--Main Footer-->
            <?php require 'includes/footer.php'; ?>

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


        <script src="js/jquery.js"></script> 
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/scrollbar.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/jquery.mixitup.min.js"></script> <!-- MixIt UP JS -->
        <script src="js/jquery.fancybox.pack.js"></script> <!-- FancyBox -->
        <script src="js/script.js"></script>


        <script>
                                        (function(i, s, o, g, r, a, m) {
                                            i['GoogleAnalyticsObject'] = r;
                                            i[r] = i[r] || function() {
                                                (i[r].q = i[r].q || []).push(arguments)
                                            }, i[r].l = 1 * new Date();
                                            a = s.createElement(o),
                                                    m = s.getElementsByTagName(o)[0];
                                            a.async = 1;
                                            a.src = g;
                                            m.parentNode.insertBefore(a, m)
                                        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

                                        ga('create', 'UA-15521914-3', 'auto');
                                        ga('send', 'pageview');

        </script>

        <script>
            function add_row()
            {
                var itema = document.getElementById("itema").value;
                var qtya = document.getElementById("qtya").value;


                var table = document.getElementById("table1");
                var table_len = (table.rows.length) - 1;
                var row = table.insertRow(table_len).outerHTML = "<tr id='row" + table_len + "'>\n\
                        <td ><input type='text' name=item" + table_len + " id='item_row1" + table_len + "' value=" + itema + "></td>\n\
                        <td ><input type='text'  name=qty" + table_len + " id='qty_row1" + table_len + "' value=" + qtya + "></td>\n\
                        <td><input type='button' value='Delete' class='btn btn-outline-warning' onclick='delete_row(" + table_len + ")'>\n\
                        </td>\n\
                        </tr>";


                document.getElementById("itema").value = "";
                document.getElementById("qtya").value = "";
                document.getElementById("one").value = table_len;


            }
            function delete_row(no)
            {
                document.getElementById("row" + no + "").outerHTML = "";
            }

            function add_row2()
            {
                var itemtwo = document.getElementById("itemtwo").value;
                var qtytwo = document.getElementById("qtytwo").value;


                var table = document.getElementById("table2");
                var table_len2 = (table.rows.length) - 1;
                var row = table.insertRow(table_len2).outerHTML = "<tr id='row2" + table_len2 + "'>\n\
                        <td ><input type='text' name=itemtwo" + table_len2 + " id='item_row2" + table_len2 + "' value=" + itemtwo + "></td>\n\
                        <td ><input type='text'  name=qtytwo" + table_len2 + " id='qty_row2" + table_len2 + "' value=" + qtytwo + "></td>\n\
                        <td><input type='button' value='Delete' class='btn btn-outline-warning' onclick='delete_row2(" + table_len2 + ")'>\n\
                        </td>\n\
                        </tr>";
                document.getElementById("itemtwo").value = "";
                document.getElementById("qtytwo").value = "";
                document.getElementById("two").value = table_len2;


            }
            function delete_row2(no)
            {
                document.getElementById("row2" + no + "").outerHTML = "";
            }


            function add_row2c()
            {
                var sport2 = document.getElementById("sport2").value;


                var table2c = document.getElementById("table2c");
                var table_len2c = (table2c.rows.length) - 1;
                var row = table2c.insertRow(table_len2c).outerHTML = "<tr id='row2c" + table_len2c + "'>\n\
                        <td ><input type='text' name=sport2" + table_len2c + " id='sport_row2" + table_len2c + "' value=" + sport2 + ">\n\
                        <td><input type='button' value='Delete' class='btn btn-outline-warning' onclick='delete_row2c(" + table_len2c + ")'>\n\
                        </td>\n\
                        </tr>";
                document.getElementById("sport2").value = "";
                document.getElementById("twob").value = table_len2c;
                //alert(table_len2c);

            }
            function delete_row2c(no)
            {
                document.getElementById("row2c" + no + "").outerHTML = "";
            }

            function add_row3()
            {
                var subject = document.getElementById("subject").value;
                var grade = document.getElementById("grade").value;


                var table3 = document.getElementById("table3");
                var table3_len = (table3.rows.length) - 1;
                var row = table3.insertRow(table3_len).outerHTML = "<tr id='row3" + table3_len + "'>\n\
                        <td ><input type='text' name=subject" + table3_len + " id='item_row1" + table3_len + "' value=" + subject + "></td>\n\
                        <td ><input type='text'  name=grade" + table3_len + " id='qty_row1" + table3_len + "' value=" + grade + "></td>\n\
                        <td><input type='button' value='Delete' class='btn btn-outline-warning' onclick='delete_row3(" + table3_len + ")'>\n\
                        </td>\n\
                        </tr>";
                document.getElementById("subject").value = "";
                document.getElementById("grade").value = "";
                document.getElementById("three").value = table3_len;

            }
            function delete_row3(no)
            {
                document.getElementById("row3" + no + "").outerHTML = "";
            }


            function add_row4()
            {
                var category = document.getElementById("category").value;
                var no = document.getElementById("no").value;


                var table4 = document.getElementById("table4");
                var table4_len = (table4.rows.length) - 1;
                var row = table4.insertRow(table4_len).outerHTML = "<tr id='row4" + table4_len + "'>\n\
                        <td ><input type='text' name=item" + table4_len + " id='item_row1" + table4_len + "' value=" + category + "></td>\n\
                        <td ><input type='text'  name=qty" + table4_len + " id='qty_row1" + table4_len + "' value=" + no + "></td>\n\
                        <td><input type='button' value='Delete' class='btn btn-outline-warning' onclick='delete_row4(" + table4_len + ")'>\n\
                        </td>\n\
                        </tr>";
                document.getElementById("category").value = "";
                document.getElementById("no").value = "";
                document.getElementById("four").value = table4_len;

            }
            function delete_row4(no)
            {
                document.getElementById("row4" + no + "").outerHTML = "";
            }

            function add_row7()
            {
                var unit = document.getElementById("unit").value;
                var uqty = document.getElementById("uqty").value;


                var table7 = document.getElementById("table7");
                var table7_len = (table7.rows.length) - 1;
                var row = table7.insertRow(table7_len).outerHTML = "<tr id='row7" + table7_len + "'>\n\
                        <td ><input type='text' name=funit" + table7_len + " id='item_row1" + table7_len + "' value=" + unit + "></td>\n\
                        <td ><input type='text'  name=fqty" + table7_len + " id='qty_row1" + table7_len + "' value=" + uqty + "></td>\n\
                        <td><input type='button' value='Delete' class='btn btn-outline-warning' onclick='delete_row7(" + table7_len + ")'>\n\
                        </td>\n\
                        </tr>";
                document.getElementById("unit").value = "";
                document.getElementById("uqty").value = "";
                document.getElementById("seven").value = table7_len;

            }
            function delete_row7(no)
            {
                document.getElementById("row7" + no + "").outerHTML = "";
            }
        </script>
        <script>
            $(document).ready(function() {
                $('#txtschool').keyup(function() {
                    //get the antry value
                    var query = $(this).val();
                    //check input is not empty
                    if (query != '')
                    {
                        $.ajax({
                            url: "schoolSearch.php",
                            method: "POST",
                            data: {query: query},
                            success: function(data)
                            {
                                //fill the med list
                                $('#schoolList').fadeIn();
                                $('#schoolList').html(data);
                            }
                        });

                    }
                });
                $(document).on('click', '#lim', function() {
                    $('#txtschool').val($(this).text());
                    $('#schoolList').fadeOut();


                });

            });

            $("#h4tab").click(function() {
                $("#table3").toggle();
            });

            $("#h4tab2").click(function() {
                $("#table4").toggle();
            });
            $("#h4tab8").click(function() {
                $("#h4tab8b").toggle();
            });
            $("#h4tab7").click(function() {
                $("#table7").toggle();
            });
            $("#h4tab6").click(function() {
                $("#h4tab6b").toggle();
            });
            $("#h4tab5").click(function() {
                $("#h4tab5b").toggle();
            });

        </script>
        <script>
            function add_schooldetails() {

                //document.getElementById('schooldetails').style.display = 'block';
                $("#schooldetails").toggle();
            }
        </script>

    </body>

    <!-- Mirrored from wp1.themexlab.com/html/volunteer/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:40:25 GMT -->
</html>