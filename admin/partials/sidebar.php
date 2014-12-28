<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">           
             <li>                 
                 <a href="index.php" <?php if(strstr($_SERVER['PHP_SELF'], "index.php")){ echo "class='active'";} ?>>                    
                    <span>Vacancies</span>
                </a>
            </li>
             <li>
                <a href="applian.php?a=true" <?php if(isset($_GET['a'])){ echo "class='active'";}?> >                    
                    <span>Appliances</span>
                </a>
            </li>                
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->