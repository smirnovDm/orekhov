<template>
    <!--? About Area  -->
    <section class="about-area2 pb-bottom" style="margin-top: 60px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="img/gallery/about1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-25">
                            <h2>О нас</h2>
                        </div>
                        <p class="mb-20">
                            Опыт и профессионализм не вызывает сомнений.
                            Великолепный сервис и внимание к каждому клиенту-наше кредо.
                        </p>
                        <p class="mb-30">
                            Сотрудничество с нашей компанией-это не только комфорт и спокойствие во время поездки,но и доступные цены на все виды услуг.
                            Большинство наших клиентов после знакомства с нашей компанией, становятся нашими постоянными клиентами.
                        </p>
                        <router-link to="/about" class="btn">
                            О нас
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
</template>

<script>
    export default {
        name: "AboutAreaTwo"
    }
</script>
