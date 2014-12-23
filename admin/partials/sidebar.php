<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="/dashboard">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
             <li>
                 <a href="vacancy.php?v=true" <?php if(isset($_GET['v'])){ echo "class='active'";} ?>>
                    <i class="fa fa-calendar"></i>
                    <span>Vacancies</span>
                </a>
            </li>
             <li>
                <a href="/users">
                    <i class="fa fa-calendar"></i>
                    <span>User Managment</span>
                </a>
            </li>                
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->