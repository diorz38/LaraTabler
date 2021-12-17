<template>
        <Head :title="title" />
        <jet-banner />

        <header class="navbar navbar-expand-md navbar-light d-print-none sticky-top">
            <div class="container">
                <!-- Logo -->
                <Link class="navbar-brand me-4" :href="route('root')">
                    <jet-application-mark width="36" />
                </Link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <Link class="nav-link" :href="route('dashboard')">
                                <span class="nav-link-icon d-md-none d-lg-inline-block"
                                    ><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>
                                </span>
                                <span class="nav-link-title"> Home </span>
                            </Link>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block"
                                    ><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                                        <line x1="12" y1="12" x2="20" y2="7.5" />
                                        <line x1="12" y1="12" x2="12" y2="21" />
                                        <line x1="12" y1="12" x2="4" y2="7.5" />
                                        <line x1="16" y1="5.25" x2="8" y2="9.75" />
                                    </svg>
                                </span>
                                <span class="nav-link-title"> Interface </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./empty.html"> Empty page </a>
                                        <a class="dropdown-item" href="./accordion.html"> Accordion </a>
                                        <a class="dropdown-item" href="./blank.html"> Blank page </a>
                                        <a class="dropdown-item" href="./buttons.html"> Buttons </a>
                                    </div>
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./offcanvas.html"> Offcanvas </a>
                                        <a class="dropdown-item" href="./markdown.html"> Markdown </a>
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
                                <span class="nav-link-icon d-md-none d-lg-inline-block"
                                    ><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                    </svg>
                                </span>
                                <span class="nav-link-title"> Extra </span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="./activity.html"> Activity </a>
                                <a class="dropdown-item" href="./gallery.html"> Gallery </a>
                                <a class="dropdown-item" href="./invoice.html"> Invoice </a>
                                <a class="dropdown-item" href="./search-results.html"> Search results </a>
                                <a class="dropdown-item" href="./pricing.html"> Pricing cards </a>
                                <a class="dropdown-item" href="./users.html"> Users </a>
                                <a class="dropdown-item" href="./license.html"> License </a>
                                <a class="dropdown-item" href="./music.html"> Music </a>
                                <a class="dropdown-item" href="./widgets.html"> Widgets </a>
                                <a class="dropdown-item" href="./wizard.html"> Wizard </a>
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav align-items-baseline">
                        <!-- Team Management -->
                        <jet-dropdown id="teamManagementDropdown" v-if="$page.props.jetstream.hasTeamFeatures">
                            <template #trigger>
                                {{ $page.props.user.current_team.name }}

                                <svg class="me-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </template>

                            <template #content>
                                <!-- Team Management -->
                                <template v-if="$page.props.jetstream.hasTeamFeatures">
                                    <h6 class="dropdown-header">Manage Team</h6>

                                    <!-- Team Settings -->
                                    <jet-dropdown-link :href="route('teams.show', $page.props.user.current_team)"> Team Settings </jet-dropdown-link>

                                    <jet-dropdown-link :href="route('teams.create')" v-if="$page.props.jetstream.canCreateTeams"> Create New Team </jet-dropdown-link>

                                    <hr class="dropdown-divider" />

                                    <!-- Team Switcher -->
                                    <h6 class="dropdown-header">Switch Teams</h6>

                                    <template v-for="team in $page.props.user.all_teams" :key="team.id">
                                        <form @submit.prevent="switchToTeam(team)">
                                            <jet-dropdown-link as="button">
                                                <div class="d-flex">
                                                    <svg v-if="team.id == $page.props.user.current_team_id" class="me-1 text-success" width="20" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <span class="text-truncate" style="width: 12rem">{{ team.name }}</span>
                                                </div>
                                            </jet-dropdown-link>
                                        </form>
                                    </template>
                                </template>
                            </template>
                        </jet-dropdown>

                        <!-- Authentication Links -->
                        <jet-dropdown id="settingsDropdown">
                            <template #trigger>
                                <img v-if="$page.props.jetstream.managesProfilePhotos" class="rounded-circle" width="32" height="32" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />

                                <span v-else>
                                    {{ $page.props.user.name }}

                                    <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </template>

                            <template #content>
                                <!-- Account Management -->
                                <h6 class="dropdown-header small text-muted">Manage Account</h6>

                                <jet-dropdown-link :href="route('profile.show')"> Profile </jet-dropdown-link>

                                <jet-dropdown-link :href="route('api-tokens.index')" v-if="$page.props.jetstream.hasApiFeatures"> API Tokens </jet-dropdown-link>

                                <hr class="dropdown-divider" />

                                <!-- Authentication -->
                                <form @submit.prevent="logout">
                                    <jet-dropdown-link as="button"> Log out </jet-dropdown-link>
                                </form>
                            </template>
                        </jet-dropdown>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <div class="page-wrapper">
            <slot></slot>
        </div>

</template>

<script>
import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'
import JetBanner from '@/Jetstream/Banner.vue'
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
import JetDropdown from '@/Jetstream/Dropdown.vue'
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
import JetNavLink from '@/Jetstream/NavLink.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'

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
