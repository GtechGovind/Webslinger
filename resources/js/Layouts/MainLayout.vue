<template>
    <PreLoader/>
    <BackToTopButton/>
    <header>
        <StickyNavBar/>
    </header>
    <main>
        <slot/>
    </main>
    <Footer />
</template>

<script>
import PreLoader from "../Components/PreLoader";
import BackToTopButton from "../Components/BackToTopButton";
import StickyNavBar from "../Components/StickyNavBar";
import Footer from "../Components/Footer";

export default {
    name: "MainLayout",
    components: {Footer, StickyNavBar, BackToTopButton, PreLoader},
}
</script>

<style scoped>

</style>
