<template>
    <!--? Want To work -->
    <section class="container">
        <section class="wantToWork-area" style="background-image: url('img/gallery/section_bg01.png');">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-8 col-lg-9 col-md-7">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Call us for a service</h2>
                            <p>We deliver the goods to the most complicated places on earth</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5">
                        <router-link to="/contact" class="btn wantToWork-btn">
                            <img src="img/icon/call2.png" alt=""> Learn More
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
