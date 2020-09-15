<template>
    <main>
        <section class="pt-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Наши маршруты</h2>
                        </div>
                    </div>
                </div>
                <div class="row directions__card-wrapper">
                    <template v-for="item in cards">
                        <div class="col-sm-12 col-md-6 col-xl-4 pb-5">
                            <div class="card">
                                <img class="card__img"
                                     src="https://www.bustour.zp.ua/wp-content/uploads/azovsea_10-1024x1024.jpg" alt="">
                                <div class="card__wrapper">
                                    <div class="card__wrapper__head">
                                        <span>{{item}}</span>
                                    </div>
                                    <div class="card__wrapper__footer">
                                        <router-link to="/book-trip" class="button">
                                            ЗАКАЗАТЬ СЕЙЧАС
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>
    </main>
</template>

<script>
    export default {
        name: "Directions",
        data() {
            return {
                cards: [
                    'Днепр – Бердянск',
                    'Днепр – Бердянск2',
                    'Днепр – Бердянск3',
                    'Днепр – Бердянск4'
                ]
            }
        },
    }
</script>

<style scoped>
    .directions__card-wrapper .card__img {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .directions__card-wrapper .card__wrapper {
        z-index: 1;
    }

    .directions__card-wrapper .card__wrapper__head {
        background-color: rgba(88, 98, 142, .9);
        text-align: center;
        padding: 20px;
        color: #fff;
        font-weight: bold;
    }

    .directions__card-wrapper .card__wrapper__body {
        display: none;
    }

    .directions__card-wrapper .card__wrapper__footer {
        padding: 150px 40px;
    }

    .directions__card-wrapper .card__wrapper__footer .button {
        text-align: center;
        display: block;
        padding: 20px;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        border: 1px solid #627eec;
        background-color: #6785FF;
    }

    .directions__card-wrapper .card__wrapper__footer .button:hover {
        background-color: #627eec;
    }
</style>
