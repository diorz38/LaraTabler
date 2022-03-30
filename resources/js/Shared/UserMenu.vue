<template>
    <div class="nav-item dropdown">
        <a
            href="#"
            class="nav-link d-flex lh-1 text-reset p-0"
            data-bs-toggle="dropdown"
            aria-label="Open user menu"
        >
            <span class="avatar avatar-sm">
                <img
                    v-if="$page.props.jetstream.managesProfilePhotos"
                    class="rounded-circle"
                    width="32"
                    height="32"
                    :src="$page.props.user.profile_photo_url"
                    :alt="$page.props.user.name"
                />
            </span>
            <div class="d-none d-xl-block ps-2">
                <div>{{ $page.props.user.name }}</div>
                <div class="mt-1 small text-muted">{{ $page.props.user.email }}</div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <h6 class="dropdown-header small text-muted">Manage Account</h6>
            <a href="#" class="dropdown-item">Set status</a>
            <Link :href="route('profile.show')" class="dropdown-item">Profile & account</Link>
            <Link
                :href="route('api-tokens.index')"
                v-if="$page.props.jetstream.hasApiFeatures"
                class="dropdown-item"
            >API Tokens</Link>
            <a href="#" class="dropdown-item">Feedback</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Settings</a>
            <form @submit.prevent="logout">
                <jet-dropdown-link as="button" class="bg-dark text-light">Log out</jet-dropdown-link>
            </form>
        </div>
    </div>
</template>

<script>
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
// import JetNavLink from '@/Jetstream/NavLink.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { LoginIcon,HomeIcon,PackageIcon,BellIcon } from 'vue-tabler-icons'

export default {
    props: {
        title: String,
    },

    components: {
        JetDropdownLink,
        Link,
        LoginIcon,
        HomeIcon,
        PackageIcon,
        BellIcon,
    },

    data() {
        return {
            showingNavigationDropdown: false,
        }
    },

    methods: {
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
