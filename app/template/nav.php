<nav class="main_navigation p-20 hide-mobile" id="main_navigation">
    <div class="employee_info">
        <div class="profile_picture">
            <img src="<?= IMG ?>avatar.png" class="s-img" alt="User Profile Picture">
        </div>
        <span class="name block mt-5 fs-20">Feras Barahmeh</span>
        <span class="privilege block mt-5 fs-15">Admin Application</span>
    </div>
    <ul class="app_navigation mt-15 txt-l">
        <li class="cursor-pointer">
            <i class="fa fa-cog" aria-hidden="true"></i>
            <a href="/"><span class="inline-block ml-5">General Setting</span></a>
        </li>
        <li class="cursor-pointer">
            <i class="fa fa-users" aria-hidden="true"></i>
            <a href="/employee"><span class="inline-block ml-5">Employees</span></a>
        </li>
        <li class="cursor-pointer">
            <i class="fa fa-plus" aria-hidden="true"></i>
            <a href="/employee/add"><span class="inline-block ml-5">Add Employee</span></a>
        </li>
        <li class="cursor-pointer">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <a href="/"><span class="inline-block ml-5">Logout</span></a>
        </li>
    </ul>
</nav>
    <div class="action-view pt-20 pl-20 pr-20" id="action-view">