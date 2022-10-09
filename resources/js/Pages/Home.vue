<template>
    <Hero />
    <Services :services="services" />
    <About />
    <Features />
    <Cta />
    <Faq />
    <Pramotion />
</template>

<script>
import MainLayout from "../Layouts/MainLayout";
import Hero from "../Sections/Hero";
import Services from "../Sections/Services";
import About from "../Sections/About";
import Features from "../Sections/Features";
import Cta from "../Sections/Cta";
import Faq from "../Sections/Faq";
import Pramotion from "../Sections/Pramotion";

export default {
    props: {
        services: Array
    },
    name: "Home",
    components: {Pramotion, Faq, Cta, Features, About, Services, Hero},
    layout: MainLayout
}
</script>

<style scoped>

</style>
