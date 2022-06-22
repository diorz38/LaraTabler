<template>
    <header class="navbar navbar-expand-md navbar-light d-print-none sticky-top">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
                <!-- Logo -->
                <Link class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3" :href="route('root')">
                    <jet-application-mark width="36" />
                </Link>


            <div class="navbar-nav flex-row order-md-last">
                <!-- <Link href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <MoonIcon/>
                </Link>
                <Link href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <SunIcon/>
                </Link> -->
                <div class="nav-item dropdown d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                        <BellIcon/>
                        <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                        <div class="card">
                            <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.</div>
                        </div>
                    </div>
                </div>

                <!-- User Menus -->
                <UserMenu v-if="$page.props.user"/>

            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <Link class="nav-link" :href="route('dashboard')">
                                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <HomeIcon />
                                </span>
                                <span class="nav-link-title"> Dashboard </span>
                            </Link>
                        </li>
                        <li v-if="$page.props.user" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <PackageIcon />
                                </span>
                                <span class="nav-link-title"> Kegiatan </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <Link class="dropdown-item" :href="route('amake.projects.index')"> Daftar Kegiatan </Link>
                                        <Link class="dropdown-item" href="#"> Daftar SubKegiatan </Link>
                                        <div class="dropdown-divider"/>
                                        <Link class="dropdown-item" href="#"> Daftar Skor Wilayah </Link>
                                    </div>
                                    <div class="dropdown-menu-column">
                                        <Link class="dropdown-item" :href="route('amake.basiskegs.index')"> Basis Kegiatan </Link>
                                        <Link class="dropdown-item" href="#"> Charts </Link>
                                        <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false"> Authentication </a>
                                            <div class="dropdown-menu">
                                                <a href="./sign-in.html" class="dropdown-item">Sign in</a>
                                                <a href="./sign-up.html" class="dropdown-item">Sign up</a>
                                                <a href="./forgot-password.html" class="dropdown-item">Forgot password</a>
                                                <a href="./terms-of-service.html" class="dropdown-item">Terms of service</a>
                                                <a href="./auth-lock.html" class="dropdown-item">Lock screen</a>
                                            </div>
                                        </div>
                                        <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false"> Error pages </a>
                                            <div class="dropdown-menu">
                                                <a href="./error-404.html" class="dropdown-item">404 page</a>
                                                <a href="./error-500.html" class="dropdown-item">500 page</a>
                                                <a href="./error-maintenance.html" class="dropdown-item">Maintenance page</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <StarIcon />
                                </span>
                                <span class="nav-link-title"> Documentasi </span>
                            </a>
                            <div class="dropdown-menu">
                                <Link class="dropdown-item" href="#"> Panduan Penggunaan </Link>
                                <Link class="dropdown-item" href="#"> Dev App Log </Link>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'
import JetBanner from '@/Jetstream/Banner.vue'
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
import JetDropdown from '@/Jetstream/Dropdown.vue'
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
import JetNavLink from '@/Jetstream/NavLink.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'
import UserMenu from '@/Shared/UserMenu.vue'
import { LoginIcon,HomeIcon,PackageIcon,BellIcon,StarIcon,SunIcon,MoonIcon } from 'vue-tabler-icons'

export default {
    props: {
        title: String,
    },

    components: {
        Head,
        JetApplicationLogo,
        JetBanner,
        JetApplicationMark,
        JetDropdown,
        JetDropdownLink,
        JetNavLink,
        Link,
        UserMenu,
        LoginIcon,HomeIcon,PackageIcon,BellIcon,StarIcon,SunIcon,MoonIcon,

    },

    data() {
        return {
            showingNavigationDropdown: false,
        }
    },

    methods: {
        switchToTeam(team) {
            this.$inertia.put(
                route('current-team.update'),
                {
                    team_id: team.id,
                },
                {
                    preserveState: false,
                },
            )
        },

        logout() {
            this.$inertia.post(route('logout'))
        },
    },

    computed: {
        path() {
            return window.location.pathname
        },
    },
}
</script>
