<header class="container-fluid main-header animated ">
    <a href="<?php the_permalink() ?>" class="logo">
        <?php the_custom_logo(); ?>
    </a>
    <div class="nav-wrapper">

    
    <nav>
        <?php 

            $menu=[ 
                'menu' => 'Menu-1' , 
                'menu-class' => 'nav' ,
                'echo' => 'false',
                'container' => ''
            ];
            wp_nav_menu($menu);


           
            ?>


    </nav>
        


    <!-- <nav>


        <ul>
            <li><a href="#">Home</a></li>
            <li><a class="sub-menu">About Us</a>
                <ul class="animated fadeIn">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Coin Widgets</a></li>
                </ul>
            </li>
            <li><a class="sub-menu">Services</a>
                <ul class="animated fadeIn">
                    <li><a href="#">Token Launch Consulting</a></li>
                    <li><a href="#">View All Services</a></li>


                </ul>

                </a>


            </li>
            <li><a class="sub-menu">Our Project</a>
                <ul class="animated fadeIn">
                    <li><a href="#">Single Project</a></li>
                    <li><a href="#">Our Project</a></li>
                </ul>
            </li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact Us</a></li>

        </ul>

    </nav> -->

    <a href="<?php ?>" class="right-top-btn top-callBack">Request a Call Back</a>
    <label for="toggle" class="hamburger">&#9776;</label>
    <input type="checkbox" id="toggle" onchange="getSideNav()" />
</header>
<div class="header-wrapper">
    
</div>