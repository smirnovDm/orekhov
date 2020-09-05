<template>
    <!--? Want To work -->
    <section class="container">
        <section class="wantToWork-area" style="background-image: url('img/gallery/section_bg01.png');">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-8 col-lg-9 col-md-7">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Звоните будем рады Вас услышать</h2>
                            <p>Выполняем любые виды перевозок по Украине</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5">
                        <router-link to="/contact" class="btn wantToWork-btn">
                            <img src="img/icon/call2.png" alt=""> Контакты
                        </router-link>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Want To work End -->
</template>

<script>
    export default {
        name: "CallUs"
    }
</script>
