<?php
    $dashboard = '<a href="#dashboard" class="dashboard-link" data-icon="bars" >Dashboard</a>';
    $date = '<div data-role="fieldcontain">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" value="' . date('Y-m-d') . '" />
                </div>';
    $time = '<div data-role="fieldcontain">
                    <label for="time">Time</label>
                    <input type="time" name="time" id="time" value="' . date('H:i:s') . '" step="1" />
                </div>';
?><html>
<head>
    <title>Health 2 Me</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.min.js"></script>
    <script src="scripts.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.print.css" />

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
                    <a href="#addmeal">Add Meal</a>
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
                    <a href="#calendar" id="calendarlink">Calendar</a>
                </div>
                <div class="ui-block-b">
                    <a href="#message">Messages</a>
                </div>
            </div>
        </div>
    </div>
    <div data-role="page" id="addmeal">
        <div data-role="header">
            <?php echo $dashboard; ?>
            <h1>Add Meal</h1>
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
                
                <input type="button" value="Submit" />
            </form>
        </div>
    </div>
    <div data-role="page" id="addemotion">
        <div data-role="header">
            <?php echo $dashboard; ?>
            <h1>Add Emotional Status</h1>
        </div>
        <div data-role="content">
            <form action="#" method="POST">
                <div data-role="fieldcontain">
                    <label for="rating">Rating</label>
                    <select id="rating" name="rating">
                        <option value="">Please Select</option>
                        <option value="-3">Aweful -3</option>
                        <option value="-2">Poor -2</option>
                        <option value="-1">Bad -1</option>
                        <option value="1">Neutral</option>
                        <option value="2">Fine +1</option>
                        <option value="3">Good +2</option>
                        <option value="4">Awesome +3</option>
                    </select>
                </div>
                <?php echo $date, $time; ?>
                <input type="button" value="Submit" />
            </form>
        </div>
    </div>
    <div data-role="page" id="calendar">
        <div data-role="header">
            <?php echo $dashboard; ?>
            <h1>Calendar</h1>
        </div>
        <div data-role="content">
            <div id="calendar-jq"></div>
        </div>
    </div>
    <div data-role="page" id="addmedicalstatus">
        <div data-role="header">
            <?php echo $dashboard; ?>
            <h1>Add Medical Status</h1>
        </div>
        <div data-role="content">
            <form action="#" method="POST">
                <div data-role="fieldcontain">
                    <label for="pressure">Blood Pressure</label>
                    <input type="text" name="pressure" id="pressure" />
                </div>
                <div data-role="fieldcontain">
                    <label for="sugar">Blood Sugar</label>
                    <input type="text" name="sugar" id="sugar" />
                </div>
                <div data-role="fieldcontain">
                    <label for="temperature">Temperature</label>
                    <input type="text" name="temperature" id="temperature" />
                </div>
                <?php echo $date, $time; ?>
                <input type="button" value="Submit" />
            </form>
        </div>
    </div>
    <div data-role="page" id="messages"></div>
</body>
</html>