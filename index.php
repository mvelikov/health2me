<?php

?><html>
<head>
    <title>Health 2 Me</title>
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
        <form action="#" method="POST">
            <div data-role="fieldcontain">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" />
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
        </form>
    </div>
    <div data-role="page" id="dashboard"></div>
    
    <div data-role="page" id="addmenu"></div>
    <div data-role="page" id="addemotion"></div>
    <div data-role="page" id="menuhistory"></div>
    <div data-role="page" id="emotionhistory"></div>
</body>
</html>