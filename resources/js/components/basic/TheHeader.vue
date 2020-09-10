<template>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <router-link to="/">
                            <img style="width: 70px" src="img/finalogo3.png" alt="">
                        </router-link>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <router-link to="/" tag="li" active-class="active" exact>
                                        <a>Главная</a>
                                    </router-link>
                                    <router-link to="/book-trip" tag="li" active-class="active">
                                        <a>Заказать поездку</a>
                                    </router-link>
                                    <router-link to="/contact" tag="li" active-class="active">
                                        <a>Контакты</a>
                                    </router-link>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-none d-lg-block">
                    <div style="display: flex">
                        <div style="display: flex; flex-direction: column;">
                            <a href="#" class="header-btn1"><img src="img/icon/call.png" alt="">+38 (050) 269 27 37</a>
                            <a href="#" class="header-btn1"><img src="img/icon/call.png" alt="">+38 (096) 238 44 58</a>
                        </div>
                        <router-link to="/book-trip" class="header-btn2">
                            Заказ поездки
                        </router-link>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
</template>

<script>
    export default {
        name: "Header"
    }
</script>
