<?php

    function renderNavbar($currentPageName){
        $navNames = array("Home", "About", "Contact Me");
        include("html/navbar1.html");
        
        foreach($navNames as $navName){
            if($navName == $currentPageName){
                
                echo "<a class='nav-item nav-link active' href='#'>$navName</a>";
            }
            else{
                echo "<a class='nav-item nav-link' href='#'>$navName</a>";
            }
            
        }
        
        include("html/navbar2.html");
    }
?>