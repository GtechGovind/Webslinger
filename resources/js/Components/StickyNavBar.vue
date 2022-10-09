<template>
    <div id="header-sticky" class="header__area header__border header__padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                    <div class="logo">
                        <a href="index.html">
                            <h3>Web Slinger</h3>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 d-none d-lg-block">
                    <div class="main-menu main-menu-2 pl-40">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-6">
                    <div class="header__right text-end d-flex align-items-center justify-content-end">
                        <div class="header__right-btn d-none d-md-flex d-xl-block">
                            <a href="/contact" class="w-btn w-btn-blue w-btn-blue-header ml-30">Get Started</a>
                        </div>
                        <div class="sidebar__menu d-lg-none">
                            <div class="sidebar-toggle-btn sidebar-toggle-btn-2" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar__area">
        <div class="sidebar__wrapper">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <span><i class="fal fa-times"></i></span>
                    <span>close</span>
                </button>
            </div>
            <div class="sidebar__content">
                <div class="logo mb-40">
                    <a href="index.html">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="mobile-menu mobile-menu-2"></div>
                <div class="sidebar__info mt-350">
                    <a href="#" class="w-btn w-btn-blue-2 w-btn-4 d-block mb-15 mt-15">login</a>
                    <a href="#" class="w-btn w-btn-blue d-block">sign up</a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>

</template>

<script>
export default {
    name: "StickyNavBar"
}
</script>

<style scoped>

</style>
