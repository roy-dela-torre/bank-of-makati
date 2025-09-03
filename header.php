<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_title(); ?></title>
    <?php include('stylesheet-manager.php');
    wp_head(); ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/jquery.min.js"></script>
</head>

<body <?php echo body_class(); ?>>
    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
    <header class="<?php echo is_front_page() ? '' : 'sticky-top' ?>">
        <div class="top_nav d-none d-xl-block">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row align-items-end justify-content-between">
                        <div class="col-lg-4">
                            <div class="logo">
                                <a href="<?php echo get_home_url(); ?>">
                                    <img loading="lazy"
                                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/logo.png"
                                        alt="" class="img-fluid w-100">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="top_menu d-none align-items-center flex-wrap justify-content-lg-end d-lg-flex">
                                <div class="search" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                                        fill="none">
                                        <path
                                            d="M13.8334 12.153L10.704 9.0243C11.611 7.93536 12.0633 6.53866 11.9668 5.12475C11.8702 3.71084 11.2323 2.38858 10.1857 1.43303C9.13912 0.477475 7.76441 -0.0377958 6.34758 -0.00559591C4.93074 0.026604 3.58086 0.603796 2.57875 1.60591C1.57664 2.60802 0.999443 3.9579 0.967243 5.37474C0.935044 6.79157 1.45031 8.16628 2.40587 9.21288C3.36142 10.2595 4.68368 10.8974 6.09759 10.9939C7.5115 11.0905 8.9082 10.6382 9.99714 9.73117L13.1259 12.8605C13.1723 12.907 13.2275 12.9439 13.2882 12.969C13.3489 12.9941 13.4139 13.0071 13.4796 13.0071C13.5453 13.0071 13.6104 12.9941 13.6711 12.969C13.7318 12.9439 13.7869 12.907 13.8334 12.8605C13.8798 12.8141 13.9167 12.7589 13.9418 12.6982C13.967 12.6375 13.9799 12.5725 13.9799 12.5068C13.9799 12.4411 13.967 12.376 13.9418 12.3153C13.9167 12.2547 13.8798 12.1995 13.8334 12.153ZM1.97963 5.5068C1.97963 4.61678 2.24356 3.74675 2.73802 3.00673C3.23249 2.26671 3.93529 1.68993 4.75756 1.34934C5.57983 1.00874 6.48463 0.919628 7.35754 1.09326C8.23046 1.2669 9.03228 1.69548 9.66162 2.32481C10.291 2.95415 10.7195 3.75597 10.8932 4.62889C11.0668 5.5018 10.9777 6.4066 10.6371 7.22887C10.2965 8.05114 9.71972 8.75394 8.9797 9.24841C8.23968 9.74288 7.36965 10.0068 6.47963 10.0068C5.28657 10.0055 4.14274 9.53094 3.29912 8.68731C2.45549 7.84369 1.98096 6.69986 1.97963 5.5068Z"
                                            fill="white" />
                                    </svg>
                                    <span>Search</span>
                                </div>
                                <div class="apply"
                                    onclick="window.location.href='<?php echo get_home_url(); ?>/mybusiness/credit-application-form/'"
                                    style="cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                                        fill="none">
                                        <mask id="mask0_2_1190" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                            x="0" y="-1" width="14" height="15">
                                            <path d="M0.980469 -0.00499439H13.9905V13.005H0.980469V-0.00499439Z"
                                                fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_2_1190)">
                                            <path d="M8.18164 0.822703L11.6628 4.30389" stroke="white"
                                                stroke-width="0.8" stroke-miterlimit="10" />
                                            <path
                                                d="M10.585 3.85734H8.62846V1.90076C8.62846 1.05874 7.94586 0.376147 7.10385 0.376147H2.86035V12.6238H12.1096V5.38195C12.1096 4.53993 11.4271 3.85734 10.585 3.85734Z"
                                                stroke="white" stroke-width="0.8" stroke-miterlimit="10" />
                                            <path d="M5.90918 9.95575H10.5846" stroke="white" stroke-width="0.8"
                                                stroke-miterlimit="10" />
                                            <path d="M5.90918 8.43115H10.5846" stroke="white" stroke-width="0.8"
                                                stroke-miterlimit="10" />
                                            <path d="M10.5846 6.90656H5.90918" stroke="white" stroke-width="0.8"
                                                stroke-miterlimit="10" />
                                            <path d="M5.14707 7.28772H4.38477V6.52542H5.14707V7.28772Z" fill="white" />
                                            <path d="M5.14707 8.81232H4.38477V8.05001H5.14707V8.81232Z" fill="white" />
                                            <path d="M5.14707 10.3369H4.38477V9.57461H5.14707V10.3369Z" fill="white" />
                                        </g>
                                    </svg>
                                    <span>Apply</span>
                                </div>
                                <div class="open_account"
                                    onclick="window.location.href='<?php echo get_home_url(); ?>/mymoney/deposit-forms/'"
                                    style="cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15"
                                        fill="none">
                                        <path
                                            d="M10.5544 14.005V12.5594C10.5544 11.7927 10.2498 11.0573 9.70765 10.5151C9.16546 9.97293 8.4301 9.66833 7.66332 9.66833H3.32666C2.55989 9.66833 1.82452 9.97293 1.28233 10.5151C0.740145 11.0573 0.435547 11.7927 0.435547 12.5594V14.005"
                                            stroke="white" stroke-width="0.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M5.49463 6.77722C7.09134 6.77722 8.38574 5.48282 8.38574 3.88611C8.38574 2.28939 7.09134 0.994995 5.49463 0.994995C3.89791 0.994995 2.60352 2.28939 2.60352 3.88611C2.60352 5.48282 3.89791 6.77722 5.49463 6.77722Z"
                                            stroke="white" stroke-width="0.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>Open an Account</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_nav bg-white">
            <div class="wrapper">
                <nav class="navbar navbar-expand-xl py-0 bg-body-tertiary">
                    <div class="container-fluid justify-content-between align-items-end">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation" data-bs-theme-value="light">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a href="<?php echo get_home_url(); ?>" class="p-0 d-block d-xl-none">
                            <img loading="lazy"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/logo.png" alt=""
                                class="img-fluid w-100">
                        </a>
                        <div class="search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                                fill="none">
                                <path
                                    d="M13.8334 12.153L10.704 9.0243C11.611 7.93536 12.0633 6.53866 11.9668 5.12475C11.8702 3.71084 11.2323 2.38858 10.1857 1.43303C9.13912 0.477475 7.76441 -0.0377958 6.34758 -0.00559591C4.93074 0.026604 3.58086 0.603796 2.57875 1.60591C1.57664 2.60802 0.999443 3.9579 0.967243 5.37474C0.935044 6.79157 1.45031 8.16628 2.40587 9.21288C3.36142 10.2595 4.68368 10.8974 6.09759 10.9939C7.5115 11.0905 8.9082 10.6382 9.99714 9.73117L13.1259 12.8605C13.1723 12.907 13.2275 12.9439 13.2882 12.969C13.3489 12.9941 13.4139 13.0071 13.4796 13.0071C13.5453 13.0071 13.6104 12.9941 13.6711 12.969C13.7318 12.9439 13.7869 12.907 13.8334 12.8605C13.8798 12.8141 13.9167 12.7589 13.9418 12.6982C13.967 12.6375 13.9799 12.5725 13.9799 12.5068C13.9799 12.4411 13.967 12.376 13.9418 12.3153C13.9167 12.2547 13.8798 12.1995 13.8334 12.153ZM1.97963 5.5068C1.97963 4.61678 2.24356 3.74675 2.73802 3.00673C3.23249 2.26671 3.93529 1.68993 4.75756 1.34934C5.57983 1.00874 6.48463 0.919628 7.35754 1.09326C8.23046 1.2669 9.03228 1.69548 9.66162 2.32481C10.291 2.95415 10.7195 3.75597 10.8932 4.62889C11.0668 5.5018 10.9777 6.4066 10.6371 7.22887C10.2965 8.05114 9.71972 8.75394 8.9797 9.24841C8.23968 9.74288 7.36965 10.0068 6.47963 10.0068C5.28657 10.0055 4.14274 9.53094 3.29912 8.68731C2.45549 7.84369 1.98096 6.69986 1.97963 5.5068Z"
                                    fill="white"></path>
                            </svg>
                        </div>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <div class="top_menu d-flex flex-column flex-wrap justify-content-lg-end d-xl-none">
                                <div class="apply">
                                    <span>Apply</span>
                                </div>
                                <div class="opem_account">
                                    <span>Open an Account</span>
                                </div>
                            </div>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'navMenu navbar-nav',
                                'container' => false,
                            ));
                            ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- <div class="search_form">
        <form role="search" method="get" class="mb-0" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="search_field d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                    <path
                        d="M12.8676 12.153L9.73819 9.02427C10.6452 7.93533 11.0975 6.53863 11.001 5.12472C10.9044 3.71081 10.2665 2.38855 9.2199 1.433C8.1733 0.477445 6.79859 -0.0378264 5.38176 -0.00562643C3.96492 0.0265735 2.61504 0.603765 1.61293 1.60588C0.610815 2.60799 0.0336231 3.95787 0.00142314 5.37471C-0.0307768 6.79154 0.484494 8.16625 1.44005 9.21285C2.3956 10.2595 3.71786 10.8974 5.13177 10.9939C6.54568 11.0904 7.94238 10.6382 9.03131 9.73114L12.1601 12.8605C12.2065 12.907 12.2617 12.9438 12.3224 12.969C12.3831 12.9941 12.4481 13.007 12.5138 13.007C12.5795 13.007 12.6446 12.9941 12.7053 12.969C12.766 12.9438 12.8211 12.907 12.8676 12.8605C12.914 12.8141 12.9509 12.7589 12.976 12.6982C13.0012 12.6375 13.0141 12.5725 13.0141 12.5068C13.0141 12.4411 13.0012 12.376 12.976 12.3153C12.9509 12.2546 12.914 12.1995 12.8676 12.153ZM1.01381 5.50676C1.01381 4.61675 1.27773 3.74672 1.7722 3.0067C2.26667 2.26668 2.96947 1.6899 3.79174 1.34931C4.61401 1.00871 5.51881 0.919598 6.39172 1.09323C7.26464 1.26686 8.06646 1.69545 8.6958 2.32478C9.32513 2.95412 9.75372 3.75594 9.92735 4.62886C10.101 5.50177 10.0119 6.40657 9.67127 7.22884C9.33068 8.05111 8.7539 8.75391 8.01388 9.24838C7.27386 9.74285 6.40383 10.0068 5.51381 10.0068C4.32075 10.0054 3.17692 9.53091 2.3333 8.68728C1.48967 7.84366 1.01514 6.69983 1.01381 5.50676Z"
                        fill="#4A4A4A" />
                </svg>
                <input type="search" placeholder="Search" class="w-100" value="<?php echo get_search_query(); ?>"
                    name="s" id="s">
 
                <input type="hidden" name="post_type" value="<?php echo get_query_var('post_type'); ?>">
            </div>
        </form>
    </div> -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body">
                    <div class="search_form">
                        <form role="search" method="get" class="mb-0" action="<?php echo esc_url(home_url('/')); ?>">
                            <div class="search_field d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                    <path
                                        d="M12.8676 12.153L9.73819 9.02427C10.6452 7.93533 11.0975 6.53863 11.001 5.12472C10.9044 3.71081 10.2665 2.38855 9.2199 1.433C8.1733 0.477445 6.79859 -0.0378264 5.38176 -0.00562643C3.96492 0.0265735 2.61504 0.603765 1.61293 1.60588C0.610815 2.60799 0.0336231 3.95787 0.00142314 5.37471C-0.0307768 6.79154 0.484494 8.16625 1.44005 9.21285C2.3956 10.2595 3.71786 10.8974 5.13177 10.9939C6.54568 11.0904 7.94238 10.6382 9.03131 9.73114L12.1601 12.8605C12.2065 12.907 12.2617 12.9438 12.3224 12.969C12.3831 12.9941 12.4481 13.007 12.5138 13.007C12.5795 13.007 12.6446 12.9941 12.7053 12.969C12.766 12.9438 12.8211 12.907 12.8676 12.8605C12.914 12.8141 12.9509 12.7589 12.976 12.6982C13.0012 12.6375 13.0141 12.5725 13.0141 12.5068C13.0141 12.4411 13.0012 12.376 12.976 12.3153C12.9509 12.2546 12.914 12.1995 12.8676 12.153ZM1.01381 5.50676C1.01381 4.61675 1.27773 3.74672 1.7722 3.0067C2.26667 2.26668 2.96947 1.6899 3.79174 1.34931C4.61401 1.00871 5.51881 0.919598 6.39172 1.09323C7.26464 1.26686 8.06646 1.69545 8.6958 2.32478C9.32513 2.95412 9.75372 3.75594 9.92735 4.62886C10.101 5.50177 10.0119 6.40657 9.67127 7.22884C9.33068 8.05111 8.7539 8.75391 8.01388 9.24838C7.27386 9.74285 6.40383 10.0068 5.51381 10.0068C4.32075 10.0054 3.17692 9.53091 2.3333 8.68728C1.48967 7.84366 1.01514 6.69983 1.01381 5.50676Z"
                                        fill="#4A4A4A" />
                                </svg>
                                <input type="search" placeholder="Search" class="w-100" value="<?php echo get_search_query(); ?>"
                                    name="s" id="s">
                
                                <input type="hidden" name="post_type" value="<?php echo get_query_var('post_type'); ?>">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
