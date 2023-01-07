<!-- ===== Left-Sidebar ===== -->
<aside class="sidebar" role="navigation">
    <div class="scroll-sidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div class="profile-image">
                    <img src="<?php echo base_url(); ?>assets/img/cgdnm-logo.png" alt="user-img" class="img-circle">
                    <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-danger">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated flipInY">
                        <li><a href="signout"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </div>
                <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);">
                        <?= $_SESSION['firstname'].' '.$_SESSION['lastname'] ?></a></p>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul id="side-menu">
                <li>
                    <a href="dashboard" aria-expanded="false"><i class="icon-screen-desktop fa-fw"></i> <span
                            class="hide-menu"> Dashboard</span></a>
                </li>
                <li>
                    <a class="waves-effect" aria-expanded="false"><i class="icon-anchor fa-fw"></i> <span
                            class="hide-menu"> MAREP</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="marep">MAREP List</a></li>
                        <li><a href="add_marep">Add MAREP</a></li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect" aria-expanded="false"><i class="icon-anchor fa-fw"></i> <span
                            class="hide-menu"> MARSAF</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="marsaf">MARSAF List</a></li>
                        <li><a href="add_marsaf">Add MARSAF</a></li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect" aria-expanded="false"><i class="icon-anchor fa-fw"></i> <span
                            class="hide-menu"> MARSAR</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="marsar">MARSAR List</a></li>
                        <li><a href="add_marsar">Add MARSAR</a></li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect" aria-expanded="false"><i class="icon-anchor fa-fw"></i> <span
                            class="hide-menu"> MARSLEC</span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="marslec">MARSLEC List</a></li>
                        <li><a href="add_marslec">Add MARSLEC</a></li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect" aria-expanded="false"><i class="icon-anchor fa-fw"></i> <span
                            class="hide-menu">URBAN MARSAR</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="urban_marsar" URBAN>MARSAR List</a></li>
                        <li><a href="add_urban_marsar">Add URBAN MARSAR</a></li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect" aria-expanded="false"><i class="fa fa-building-o fa-fw"></i> <span
                            class="hide-menu">STATION</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="station">Station</a></li>
                        <li><a href="substation">Sub-station</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="user" aria-expanded="false"><i class="icon-user fa-fw"></i> <span class="hide-menu">
                            User</span></a>
                </li> -->
                <li>
                    <a class="waves-effect" aria-expanded="false"><i class="icon-user fa-fw"></i> <span
                            class="hide-menu">USER</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="user">Users</a></li>
                        <li><a href="user_role">User Roles</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- ===== Left-Sidebar-End ===== -->