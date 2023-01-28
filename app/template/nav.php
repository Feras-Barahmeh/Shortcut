<nav class="main_navigation <?= (isset($_COOKIE['menu_opened']) && $_COOKIE['menu_opened'] == 'true') ? 'opened no_animation' : '' ?>">
    <div class="employee_info">
        <div class="profile_picture">
            <img src="/" alt="User Profile Picture">
        </div>
        <span class="name">Feras Barahmeh</span>
        <span class="privilege">Admin Application</span>
    </div>
    <ul class="app_navigation">
        <li class=""><a href="/"><i class="fa fa-dashboard"></i> General Statistics </a></li>
    </ul>
</nav>
    <div class="action-view">