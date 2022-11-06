
    <?php
        // $base = "interno/";
        $base = "";
        $val = $_SESSION['user'];
        echo "<script>console.log('" . isset($val) . "')</script>";
        echo "<script>console.log('" . $val . "')</script>";
    ?>

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-1">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <?php if (isset($_SESSION['user'])) { ?>
                            <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href=<?php echo "/" . $base . "backend/auth/logout.php?logout=true" ?>>Log Out</a></li>
                        <?php } else { ?>
                            <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href=<?php echo "/" . $base . "pages/login.php" ?>>Log In</a></li>
                        <?php } ?>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="https://github.com/thadaniumang/interno" target="_blank">About</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl px-3 py-1" href=<?php echo "/" . $base ?> >
                    <img src=<?php echo "/" . $base . "assets/images/logo.png" ?> alt="Interno" class="h-20">
                </a>
            </div>
            <div class="order-2 md:order-3 flex items-center" id="nav-content">
                <a class="inline-block no-underline hover:text-black mx-2" href=<?php echo "/" . $base . "pages/postings.php" ?> title="Internships">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                </a>
            </div>
        </div>
    </nav>