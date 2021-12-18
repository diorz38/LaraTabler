<template>
    <app-layout title="Profile">
        <template #header>
            <h2 class="h4 font-weight-bold">Profile</h2>
        </template>
        <div class="container-xl my-2">
            <div class="page-header mb-3">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="avatar avatar-md" style="background-image: url(...)"></span>
                    </div>
                    <div class="col">
                        <h2 class="page-title">{{ $page.props.user.name }}</h2>
                        <div class="page-subtitle">
                            <div class="row">
                                <div class="col-auto">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/building-skyscraper -->
                                    <!-- SVG icon code -->
                                    <a href="#" class="text-reset">{{ $page.props.user.email }}</a>
                                </div>
                                <div class="col-auto">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/users -->
                                    <!-- SVG icon code -->
                                    <a href="#" class="text-reset">194 friends</a>
                                </div>
                                <div class="col-auto text-success">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <!-- SVG icon code with class="text-green" -->
                                    Verified
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-flex">
                        <a href="#" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <!-- SVG icon code -->
                            Send message
                        </a>
                    </div>
                </div>
            </div>
            <div class="hr-text">my profiles</div>
            <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                <update-profile-information-form :user="$page.props.user" />

                <jet-section-border />
            </div>

            <div v-if="$page.props.jetstream.canUpdatePassword">
                <update-password-form />

                <jet-section-border />
            </div>

            <div v-if="$page.props.jetstream.canManageTwoFactorAuthentication">
                <two-factor-authentication-form />

                <jet-section-border />
            </div>

            <logout-other-browser-sessions-form :sessions="sessions" />

            <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
                <jet-section-border />

                <delete-user-form />
            </template>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue'
import JetSectionBorder from '@/Jetstream/SectionBorder.vue'
import LogoutOtherBrowserSessionsForm from '@/Pages/Profile/Partials/LogoutOtherBrowserSessionsForm.vue'
import TwoFactorAuthenticationForm from '@/Pages/Profile/Partials/TwoFactorAuthenticationForm.vue'
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue'
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue'

export default defineComponent({
    props: ['sessions'],

    components: {
        AppLayout,
        DeleteUserForm,
        JetSectionBorder,
        LogoutOtherBrowserSessionsForm,
        TwoFactorAuthenticationForm,
        UpdatePasswordForm,
        UpdateProfileInformationForm,
    },
})
</script>
