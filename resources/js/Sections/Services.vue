<template>
    <section class="services__area grey-bg-3 pt-120 mt-200 pb-60 p-relative">
        <div class="services__shape-2">
            <img class="services-2-circle" src="assets/img/icon/services/home-2/services-circle.png" alt="">
            <img class="services-2-circle-2" src="assets/img/icon/services/home-2/services-circle-2.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-4 col-lg-5 col-md-7">
                    <div class="section__title-wrapper mb-70 wow fadeInUp" data-wow-delay=".3s">
                        <span class="section__pre-title purple">Service</span>
                        <h2 class="section__title section__title-2">We can offer you customized services.</h2>
                    </div>
                </div>
                <div class="col-xxl-8 col-lg-7 col-md-5">
                    <div class="services__more mb-70 text-sm-end wow fadeInUp" data-wow-delay=".5s">
                        <a href="/services" class="w-btn w-btn-blue w-btn-6 w-btn-3">view all features</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div v-for="service in services" :key="service.id" class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="services__inner services__inner-2 hover__active active mb-30">
                        <div class="services__item-2 transition-3 white-bg ">
                            <div class="services__icon-2">
                                <img :src="service.img" alt="">
                            </div>
                            <div class="services__content-2">
                                <h3 class="services__title-2"><a :href="service.url">{{ service.heading }}</a></h3>
                                <p>{{ service.description }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: {
        services: Array
    },
    name: "Services"
}
</script>

<style scoped>

</style>
