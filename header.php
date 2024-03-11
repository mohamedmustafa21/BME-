<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();
    
    $header_logo = get_field('header_logo');

    
    
    ?>
    <script src="https://kit.fontawesome.com/aaf1c19e6d.js" crossorigin="anonymous"></script>
    <style>
        .logo img {
            transition: width 0.5s ease;
            width: 100%;
            max-width: 100px;
        }

        .scrolled .logo img {
            width: 80px;
        }

        .scrolled {
            background-color: #000;
        }

        .overlay {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.5s ease;
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            background-image: url('http://localhost:10102/wp-content/uploads/2024/03/menu-bg.png');
            background-position: center center;
            background-size: cover;
            z-index: 888;
        }

        .overlay.open {
            opacity: 1;
            pointer-events: auto;
        }

        .overlay-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .menu-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .menu-list li {
            margin: 0 10px;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .menu-list li.show {
            opacity: 1;
        }

        .menu-list li a {
            text-decoration: none;
            color: #fff;
            font-weight: 900;
            font-size: 18px;
        }

        .closebtn {
            position: absolute;
            top: 8%;
            right: 35px;
            font-size: 60px;
            cursor: pointer;
            color: white;
        }

        .menu-icon {
            display: none;
        }
        .openIcon .show{
          display: none;
        }
        
        @media (max-width: 768px) {
            .openIcon {
                display: block;
            }
            .menu-icon {
                display: block;
            }
        }
    </style>
</head>
<body <?php body_class();?>>

<header class="">
    <div class="container-fluid v-center">
        <div class="col-sm-4 col-sm-offset-4 col-xs-6">
            <div class="logo">
                <a href="https://digitall-business.com/"><img src="<?php echo $header_logo; ?>" alt="BME"></a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-6">
            <div class="menuBtnWarp">
                <div class="v-center" style="height:30px; cursor:pointer;" onclick="toggleOverlay()">
                    <img class="openIcon" src="https://thebmegroup.com/wp-content/themes/bme/img/menu-btn.svg">
                    <!-- <span class="menu-icon"><i class="fas fa-times"></i></span> -->
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Overlay content -->
<div id="overlay" class="overlay">
<span class="closebtn" onclick="toggleOverlay()">&times;</span>

    <div class="overlay-content">
        <?php
            // Get the Main Menu items
            $menu_items = wp_get_nav_menu_items('MenuMain');

            if ($menu_items) :
        ?>
        <section id="main-menu" class="main-menu">
            <div class="containerr">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="menu-list">
                            <?php foreach ($menu_items as $menu_item) : ?>
                                <li>
                                    <a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </div>
</div>

<!-- Your content here -->

<script>
    window.addEventListener('scroll', function() {
        var header = document.querySelector('header');
        header.classList.toggle('scrolled', window.scrollY > 0);
    });

    function toggleOverlay() {
        var overlay = document.getElementById("overlay");
        overlay.classList.toggle("open");

        var menuItems = document.querySelectorAll('.menu-list li');
        var delay = 0;
        menuItems.forEach(function(item) {
            setTimeout(function() {
                item.classList.toggle('show');
            }, delay);
            delay += 100;
        });

        var openIcon = document.querySelector('.openIcon');
        var closeIcon = document.querySelector('.menu-icon');
        var menuItemsVisible = overlay.classList.contains('open'); // تحقق من وجود القائمة مفتوحة

        // تغيير رؤية الأيقونات بناءً على حالة القائمة
        if (menuItemsVisible) {
            openIcon.classList.remove('show');
            closeIcon.classList.add('show');
        } else {
            openIcon.classList.add('show');
            closeIcon.classList.remove('show');
        }
    }
</script>


</body>
</html>
