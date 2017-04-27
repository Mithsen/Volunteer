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


                    <form action="test.php" method="post">
                        <!--Schedule Box-->
                        <div class="schedule-box clearfix wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">

                            <!--Tab Buttons-->


                            <!--Tabs Box-->
                            <div class="tabs-box" style="margin-top: 30px;">

                                <!--Tab / Current / january-->



                                <div class="hour-box active-box">
                                    <!--<div class="hour">01/01/2016</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn active"><h3>1.Inadequate educational resources</h3></div>

                                    <div class="content-box collapsed">
                                        <div class="content">
                                            <ul>
                                                <li><div id='wrapper' style=padding-top:30px;'>
                                                        <table class="table table-striped" cellspacing=1 cellpadding=3 id='table1' border=1 >
                                                            <tr>
                                                                <th>item</th>
                                                                <th>Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="item1"></td>
                                                                <td><input type="text" id="qty1"></td>
                                                                <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row();" value="Add Row"></td>
                                                            </tr>

                                                        </table>
                                                        <input type="hidden" name="one" id="one">
                                                    </div>
                                                </li> <!-- Add class "current" to sub menu items also -->
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <div class="hour-box">
                                    <!--                                    <div class="hour">03/01/2015</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>2.Inadequate sports facilities and equipment</h3></div>

                                    <div class="content-box">
                                        <div class="content">
                                            <ul>
                                                <li>Sport items: </li>
                                                <li><div id='wrapper' style=padding-top:30px;'>
                                                        <table class="table table-striped" cellspacing=1 cellpadding=3 id='table2' border=1 >
                                                            <tr>
                                                                <th>item</th>
                                                                <th>Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="item2"></td>
                                                                <td><input type="text" id="qty2"></td>
                                                                <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row2();" value="Add Row"></td>
                                                            </tr>
                                                        </table>
                                                        <input type="hidden" name="two" id="two">
                                                        
                                                    </div>
                                                </li> <!-- Add class "current" to sub menu items also -->
                                                <li>Training coaches:</li>
                                                <li><div>
                                                        <table class="table table-striped" cellspacing=1 cellpadding=1 id='table2c' border=1 style="width: 30px;">
                                                            <tr>
                                                                <th>Sport</th>

                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="sport2"></td>
                                                                <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row2c();" value="Add Row"></td>
                                                            </tr>
                                                        </table>
                                                        <input type="hidden" name="twob" id="twob">
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>
                                </div>

                                <div class="hour-box">
                                    <!--                                    <div class="hour">03/01/2015</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>3.Shortage of teachers</h3></div>
                                    
                                    <div class="content-box">
                                        <div class="content">
                                            <ul>
                                                <li><div id='wrapper' style=padding-top:30px;'>
                                                        <table class="table table-striped" cellspacing=1 cellpadding=3 id='table3' border=1 >
                                                            <tr>
                                                                <th>Subject</th>
                                                                <th>Grade</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="subject"></td>
                                                                <td><input type="text" id="grade"></td>
                                                                <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row3();" value="Add Row"></td>
                                                            </tr>
                                                        </table>
                                                        <input type="hidden" name="three" id="three">
                                                    </div>
                                                </li> <!-- Add class "current" to sub menu items also -->
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <div class="hour-box">
                                    <!--<div class="hour">05/01/2015</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>4.Shortage of non-academic staff</h3><p>ex: librarian, hostel wardens, clerks,  cleaning staff</p></div>
                                    <div class="content-box">
                                        <div class="content">
                                            <ul>
                                                <li><div id='wrapper' style=padding-top:30px;'>
                                                        <table class="table table-striped" cellspacing=1 cellpadding=3 id='table4' border=1 >
                                                            <tr>
                                                                <th>Staff Category</th>
                                                                <th>Number of Staff</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="category"></td>
                                                                <td><input type="text" id="no"></td>
                                                                <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row4();" value="Add Row"></td>
                                                            </tr>
                                                        </table>
                                                        <input type="hidden" name="four" id="four">
                                    
                                                    </div>
                                                </li> <!-- Add class "current" to sub menu items also -->
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="hour-box">
                                    <!--<div class="hour">10/01/2016</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>5.Water/Electricity</h3></div>
                                    
                                    <div class="content-box">
                                        <!--<h6>Water</h6>-->
                                        <input type="checkbox" name="water" id="water">No drinking water/water not suitable for drinking purposes </br>
                                        <!--<h3>Electricity</h3>-->
                                        <input type="checkbox" name="ele" id="ele">No electricity supply for the school
                                    </div>
                                    <input type="hidden" name="five" id="five">
                                </div>

                                <div class="hour-box">
                                    <!--<div class="hour">18/01/2015</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>6.Lack of Sanitary facilities </h3></div>
                                    
                                    <div class="content-box">
                                        No of washrooms required : <input type='number' name='sen' id='sen' style='width:40px;'>

                                    </div>
                                    <input type="hidden" name="six" id="six">
                                </div>

                                <div class="hour-box">
                                    <!--<div class="hour">22/01/2016</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>7.Shortage of School furniture  </h3>
                                        
                                        <p>chairs, tables, teacher’s desks,  Black/white board, cupboards, library book shelves...</p></div>
                                    <div class="content-box">
                                        <ul>
                                            <li><div id='wrapper' style=padding-top:30px;'>
                                                    <table class="table table-striped" cellspacing=1 cellpadding=3 id='table7' border=1 >
                                                        <tr>
                                                            <th>Unit type</th>
                                                            <th>Quantity</th>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" id="unit"></td>
                                                            <td><input type="text" id="uqty"></td>
                                                            <td><input type="button" class="btn btn-secondary btn-sm" onclick="add_row7();" value="Add Row"></td>
                                                        </tr>
                                                    </table>
                                                    <input type="hidden" name="seven" id="seven">
                                                </div>
                                            </li> <!-- Add class "current" to sub menu items also -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="hour-box">
                                    <!--<div class="hour">25/01/2015</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>8.Lack of Infrastructure</h3></div>
                                    
                                    <div class="content-box">
                                        <input type="checkbox" name="inf1" id="inf1">Lab facilities(computer labs )</br>
                                        <input type="checkbox" name="inf2" id="inf2">Buildings</br>
                                        <input type="checkbox" name="inf3" id="inf3">Internet facility</br>

                                    </div>
                                    <input type="hidden" name="eight" id="eight">
                                </div>
                                <div class="hour-box">
                                    <!--<div class="hour">28/01/2015</div>-->
                                    <div class="img-circle circle"><span></span></div>
                                    <div class="toggle-btn"><h3>9.Improper wastage Management </h3></div>
                                    
                                    <div class="content-box">
                                        <ul>
                                            <li><h4>Garbage disposal</h4></li>
                                            <li><input type="checkbox" name="garbage1" id="garbage1">No proper way of disposing garbage</li>
                                            <li><input type="checkbox" name="garbage2" id="garbage2">No fixed dates for collection of  garbage in the area</li>

                                            <li style="margin-top: 20px;"><h4>Drainage system </h4></li>
                                            <li><input type="checkbox" name="garbage1" id="garbage1">Improper Drainage system </li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="nine" id="nine">
                                </div>





                            </div>


                            <!--Tabs Box End-->

                        </div>
                        <div class="col-xs-12 col-sm-6" style="margin-top: 60px;">
                            <fieldset >
                                <legend style="margin-top: 40px; width: 500px;">School details:</legend>
                                <div class="form-group row" style="width: 500px;">

                                    <div class="col-10">
                                        School name<span class="error">*</span><input class="form-control" type="text" name="scho" value="" id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row" style="width: 500px;">

                                    <div class="col-10">
                                        Address<span class="error">*</span><input class="form-control" type="search" name="addr" value="" id="example-search-input" required>
                                    </div>
                                </div>
                                <div class="form-group row" style="width: 500px;">

                                    <div class="col-10">
                                        Province<span class="error">*</span><input class="form-control" type="text" value="" name="prov" id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row" style="width: 500px;">

                                    <div class="col-10">
                                        Contact Number<span class="error">*</span><input class="form-control" type="search" value="" id="example-search-input">
                                    </div>
                                </div>

                            </fieldset>
                        </div>

                        <div class="col-xs-12 col-sm-6" style="margin-top: 60px; position: relative; left: 80px;">
                            <fieldset >
                                <legend style="margin-top: 40px; width: 500px;">Personal details:</legend>
                                <div class="form-group row" style="width: 500px;">

                                    <div class="col-10">
                                        Name<span class="error">*</span><input class="form-control" type="text" name="pname" value="" id="example-text-input" required="required">
                                        
                                    </div>
                                </div>
                                <div class="form-group row" style="width: 500px;">

                                    <div class="col-10">
                                        Occupation<input class="form-control" type="search" name="occu" value="" id="example-search-input" required>
                                    </div>
                                </div>
                                <div class="form-group row" style="width: 500px;">

                                    <div class="col-10">
                                        Contact Number<span class="error">*</span><input class="form-control" type="search" name="cont" value="" id="example-search-input" required>
                                    </div>
                                </div>
                                <div class="form-group row" style="width: 500px;">

                                    <div class="col-10">
                                        Email<input class="form-control" type="search" value="" name="email" id="example-search-input" required>
                                    </div>
                                </div>

                            </fieldset>
                        </div>

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
                var item1 = document.getElementById("item1").value;
                var qty1 = document.getElementById("qty1").value;


                var table = document.getElementById("table1");
                var table_len = (table.rows.length) - 1;
                var row = table.insertRow(table_len).outerHTML = "<tr id='row" + table_len + "'>\n\
                        <td ><input type='text' name=item" + table_len + " id='item_row1" + table_len + "' value=" + item1 + "></td>\n\
                        <td ><input type='text'  name=qty" + table_len + " id='qty_row1" + table_len + "' value=" + qty1 + "></td>\n\
                        <td><input type='button' value='Delete' class='btn btn-outline-warning' onclick='delete_row(" + table_len + ")'>\n\
                        </td>\n\
                        </tr>";
                document.getElementById("item1").value = "";
                document.getElementById("qty1").value = "";
                document.getElementById("one").value = table_len;

            }
            function delete_row(no)
            {
                document.getElementById("row" + no + "").outerHTML = "";
            }

            function add_row2()
            {
                var item2 = document.getElementById("item2").value;
                var qty2 = document.getElementById("qty2").value;


                var table = document.getElementById("table2");
                var table_len2 = (table.rows.length) - 1;
                var row = table.insertRow(table_len2).outerHTML = "<tr id='row2" + table_len2 + "'>\n\
                        <td ><input type='text' name=item2" + table_len2 + " id='item_row2" + table_len2 + "' value=" + item2 + "></td>\n\
                        <td ><input type='text'  name=qty2" + table_len2 + " id='qty_row2" + table_len2 + "' value=" + qty2 + "></td>\n\
                        <td><input type='button' value='Delete' class='btn btn-outline-warning' onclick='delete_row2(" + table_len2 + ")'>\n\
                        </td>\n\
                        </tr>";
                document.getElementById("item2").value = "";
                document.getElementById("qty2").value = "";
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
                        <td ><input type='text' name=item" + table3_len + " id='item_row1" + table3_len + "' value=" + subject + "></td>\n\
                        <td ><input type='text'  name=qty" + table3_len + " id='qty_row1" + table3_len + "' value=" + grade + "></td>\n\
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
                        <td ><input type='text' name=item" + table7_len + " id='item_row1" + table7_len + "' value=" + unit + "></td>\n\
                        <td ><input type='text'  name=qty" + table7_len + " id='qty_row1" + table7_len + "' value=" + uqty + "></td>\n\
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

    </body>

    <!-- Mirrored from wp1.themexlab.com/html/volunteer/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 04:40:25 GMT -->
</html>