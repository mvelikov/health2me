<?php
    $dashboard = '<a href="#dashboard" class="dashboard-link" data-icon="bars" >Dashboard</a>';
?><html>
<head>
    <title>Health 2 Me</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>
<body>
    <div data-role="page" id="home">
        <div data-role="header">
            <h1>Health 2 Me</h1>
        </div>
    
        <div data-role="content" class="jqm-content">
            <h1>Please log in Health 2 Me</h1>
            <form action="#" method="POST">
                <div data-role="fieldcontain">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" />
                </div>
                <div data-role="fieldcontain">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                </div>
                <a href="#dashboard" data-role="button">Submit</a>
            </form>
            <h3>Not a member? <a href="#signup">Sign up</a></h3>
            <a href="#"><img src="images/facebook.png" alt="Signup with Facebook" /></a>
        </div>

        <!-- <div data-role="panel" data-position="left" data-position-fixed="false" data-display="reveal" id="nav-panel" data-theme="a">
            <ul data-role="listview" data-theme="a" data-divider-theme="a" style="margin-top:-16px;" class="nav-search">
                <li data-icon="delete" style="background-color:#111;">
                    <a href="#" data-rel="close">Close menu</a>
                </li>
                <li data-filtertext="wai-aria voiceover accessibility screen reader">
                    <a href="#">Accessibility</a>
                </li>
            </ul>
        </div> -->
    </div>
    <div data-role="page" id="signup">
        <div data-role="header">
            <h1>Sign up to Health 2 Me</h1>
        </div>
        <div data-role="content">
            <form action="#" method="POST">
                <div data-role="fieldcontain">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" />
                </div>
                <div data-role="fieldcontain">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" />
                </div>
                <div data-role="fieldcontain">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" />
                </div>
                <div data-role="fieldcontain">
                    <label for="repeatpassword">Repeat Password</label>
                    <input type="text" name="repeatpassword" id="repeatpassword" />
                </div>
                <div data-role="fieldcontain">
                    <label for="repeatpassword">Repeat Password</label>
                    <input type="text" name="repeatpassword" id="repeatpassword" />
                </div>
                <div data-role="fieldcontain">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" />
                </div>
                <input type="button" value="Submit" />
            </form>
        </div>
    </div>
    <div data-role="page" id="dashboard">
        <div data-role="header">
            <h1>Dashboard</h1>
        </div>
        <div data-role="container">
            <div class="ui-grid-b">
                <div class="ui-block-a">
                    <a href="#addmenu">Add Menu</a>
                </div>
                <div class="ui-block-b">
                    <a href="#addemotion">Add Emotion</a>
                </div>
                <div class="ui-block-c">
                    <a href="#addmedicalstatus">Add Medical Status</a>
                </div>
            </div>
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <a href="#calendar">Calendar</a>
                </div>
                <div class="ui-block-b">
                    <a href="#message">Messages</a>
                </div>
            </div>
        </div>
    </div>
    <div data-role="page" id="addmenu">
        <div data-role="header">
            <?php echo $dashboard; ?>
            <h1>Add Menu</h1>
        </div>
        <div data-role="content">
            <form action="#" method="POST">
                <div data-role="fieldcontain">
                    <label for="group">Group</label>
                    <select name="group" id="group">
                        <option value="">Please Select</option>
                        <option value="1">Salad</option>
                        <option value="2">Soup</option>
                        <option value="3">Main Meal</option>
                        <option value="4">Fruit</option>
                        <option value="5">Dessert</option>
                    </select>
                </div>
                <div data-role="fieldcontain">
                    <label for="food">Food</label>
                    <select name="food" id="food">
                        <option value="">Please Select</option>
                        <option value="1">Chicken Soup</option>
                        <option value="2">Vegetable Soup</option>
                        <option value="3">Potatoe Soup</option>
                        <option value="4">Pork Soup</option>
                    </select>
                </div>
                <div data-role="fieldcontain">
                    <label for="quantity">Quantity</label>
                    <select type="number" name="quantity" id="quantity">
                        <option value="">Please Select</option>
                        <option value="1">Small (100ml-250ml)</option>
                        <option value="2">Average (250ml - 300ml)</option>
                        <option value="3">Big (> 500ml)</option>
                    </select>
                </div>
                <div data-role="fieldcontain">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" />
                </div>
                <div data-role="fieldcontain">
                    <label for="time">Time</label>
                    <input type="time" name="time" id="time" value="<?php echo date('H:i:s'); ?>" step="1" />
                </div>
                <input type="button" value="button" />
            </form>
        </div>
    </div>
    <div data-role="page" id="addemotion">
        <div data-role="header">
            <?php echo $dashboard; ?>
            <h1>Add Emotional Status</h1>
        </div>
        <div data-role="content">
            
        </div>
    </div>
    <div data-role="page" id="calendar"></div>
    <div data-role="page" id="addmedicalstatus"></div>
    <div data-role="page" id="messages"></div>
</body>
</html>