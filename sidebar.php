<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />

<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />

<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	

<!-- Colour Schemes

Default colour scheme is green. Uncomment prefered stylesheet to use it.

<link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />

<link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />  

-->

<!-- Internet Explorer Fixes Stylesheet -->

<!--[if lte IE 7]>
        <link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
<![endif]-->

<!--                       Javascripts                       -->

<!-- jQuery -->
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>

<!-- jQuery Configuration -->
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>

<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="resources/scripts/facebox.js"></script>

<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>

<!-- jQuery Datepicker Plugin -->
<script type="text/javascript" src="resources/scripts/jquery.datePicker.html"></script>
<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
<script>
    $(document).ready(function() {
        $('#dcount').keyup(function() {
            var no = $(this).val();

            var table = document.getElementById("data_table");
            var i = 0;

            if (no != '')
            {
                $('#data_table').show();
                for (i = 1; i <= no; i++) {

                    var row = table.insertRow(1).outerHTML =
                            "<tr id='row" + i + "'>\n\
                            <td id='name_row" + i + "'><input type='text' name=dosage" + i + "></td>\n\
                            <td id='country_row" + i + "'><input type='text' name=price" + i + "></td>\n\
             </tr>";
                }
            }
            else {
                var len = (table.rows.length);

                for (i = 1; i < len; i++) {
                    document.getElementById("data_table").deleteRow(1);

                }
                $('#data_table').hide();
            }


        });

    });

</script>
<style>
    li {
    list-style-type: none;
    margin-bottom: 20px;
    }
</style>

<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

        <h1 id="sidebar-title"><a href="#">Sample causes</a></h1>

        <!-- Logo (221px wide) -->


        <ul id="main-nav" style="list-style-type: none;">  <!-- Accordion Menu -->

            <li>
                <a href="#" class="nav-top-item"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    1.	Inadequate educational resources 
                </a> 
                <ul>
                    <li>number of items: <input type='number' name='dcount' id='dcount' style='margin-top:30px; width:40px;'></li>
                    <li><div id='wrapper' style=padding-top:30px;'>
                            <table cellspacing=1 cellpadding=3 id='data_table' border=1 style='display:none;'>
                                <tr>
                                    <th>item</th>
                                    <th>Quantity</th>
                                </tr>
                            </table>
                        </div>
                    </li> <!-- Add class "current" to sub menu items also -->
                </ul>
            </li>

            <li> 
                <a href="#" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
                    2.	Inadequate sports facilities and equipment 
                </a>
                <ul>
                    <li><a href="#">Write a new Article</a></li>
                    <li><a class="current" href="#">Manage Articles</a></li> <!-- Add class "current" to sub menu items also -->
                    <li><a href="#">Manage Comments</a></li>
                    <li><a href="#">Manage Categories</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item">
                    3.	Shortage of teachers 
                </a>
                <ul>
                    <li><a href="#">Create a new Page</a></li>
                    <li><a href="#">Manage Pages</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item">
                    4.	Shortage of non-academic staff
                </a>
                <ul>
                    <li><a href="#">Upload Images</a></li>
                    <li><a href="#">Manage Galleries</a></li>
                    <li><a href="#">Manage Albums</a></li>
                    <li><a href="#">Gallery Settings</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item">
                    5.	Water/Electricity 
                </a>
                <ul>
                    <li><a href="#">Calendar Overview</a></li>
                    <li><a href="#">Add a new Event</a></li>
                    <li><a href="#">Calendar Settings</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item">
                    6.	Lack of Sanitary facilities 
                </a>
                <ul>
                    <li><a href="#">General</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Your Profile</a></li>
                    <li><a href="#">Users and Permissions</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item">
                    7.	Shortage of School furniture  
                </a>
                <ul>
                    <li><a href="#">Calendar Overview</a></li>
                    <li><a href="#">Add a new Event</a></li>
                    <li><a href="#">Calendar Settings</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item">
                    8.	Lack of Infrastructure   
                </a>
                <ul>
                    <li><a href="#">Calendar Overview</a></li>
                    <li><a href="#">Add a new Event</a></li>
                    <li><a href="#">Calendar Settings</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item">
                    9.	Improper wastage Management  
                </a>
                <ul>
                    <li><a href="#">Calendar Overview</a></li>
                    <li><a href="#">Add a new Event</a></li>
                    <li><a href="#">Calendar Settings</a></li>
                </ul>
            </li>



        </ul> <!-- End #main-nav -->

    </div>
</div>