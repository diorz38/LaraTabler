<template>
    <div class="text-white bg-dark">
        <Head title="Welcome" />
        <div class="container-xl d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="row mb-auto">
                <div class="col-lg-5 col-6">
                    <img width="110" height="32" class="navbar-brand-image" src="/static/logo-white.svg" />
                </div>
                <div class="col-lg-7 col-6 d-flex">
                    <div class="ms-auto noshadow">
                        <a class="nav-link px-0" data-bs-toggle="dropdown" href="#">
                            <div class="dropdown-item-icon">
                                <LoginIcon stroke="white" />
                            </div>
                            <span class="d-none d-xl-inline"> SignIn </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <Link :href="route('login')" class="dropdown-item">Login</Link>
                            <!-- <a data-test-class="link" data-turbo="false" class="dropdown-item" href="/ru">Indonesia</a> -->
                        </div>
                    </div>
                </div>
            </header>
            <div class="noshadow mb-4"></div>

            <main class="align-items-center row bg-dark">
                <div class="col-lg-5">
                    <h1 class="fs-1 my-3">SmartKit</h1>
                    <p class="fs-5 mb-4">Content platform through which authors earn money for reviews of products that online stores need to advertise.</p>
                </div>

                <div class="ps-lg-4 ps-xxl-5 col-lg-7 d-flex justify-content-center">
                    <div class="ratio ratio-16x9 border border-white border-4 my-4" style="max-width: 50em">
                        <iframe src="https://www.youtube.com/embed/b2NLPl5Macw" title="Explainer" allowfullscreen></iframe>
                    </div>
                </div>
            </main>
            <footer class="footer footer-transparent d-print-none fixed-bottom bg-dark">
                <div class="container-xl text-white">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-lg-auto ms-lg-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="./license.html" class="text-white">License</a></li>
                                <li class="list-inline-item">
                                    <a href="https://github.com/sponsors/codecalm" target="_blank" class="text-white" rel="noopener">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                        Sponsor
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2021
                                    <a href="." class="text-white">Tabler</a>. All rights reserved.
                                </li>
                                <li class="list-inline-item">
                                    <a href="./changelog.html" class="text-white" rel="noopener"> v1.0.0-beta5 </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3'
import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'
import JetBanner from '@/Jetstream/Banner.vue'
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
import JetDropdown from '@/Jetstream/Dropdown.vue'
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
import JetNavLink from '@/Jetstream/NavLink.vue'
import { LoginIcon } from 'vue-tabler-icons'

export default defineComponent({
    // meta: { bodyClass: 'bg-dark' },
    components: {
        Head,
        Link,
        JetApplicationLogo,
        JetBanner,
        JetApplicationMark,
        JetDropdown,
        JetDropdownLink,
        JetNavLink,
        LoginIcon,
    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
})
</script>
