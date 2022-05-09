<template>
    <b-modal id="verify" ok-title="Confirm" hide-footer title="User Verification" centered>
        <div class="p-2">
            <div class="text-center">
                <b-form class="customform">
                    <div v-if="!status">
                        <div class="avatar-md mx-auto">
                            <div class="avatar-title rounded-circle bg-light">
                                <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
                            </div>
                        </div>
                        <div class="p-2 mt-2">
                            <h6>Send Verification Link</h6>
                            <p class="font-size-12 text-muted">
                                Send Verification link to 
                                <span class="fw-bold">{{ user.email }}</span> for activation.
                            </p>
                            <div class="mt-4">
                                <button type="button" @click="sendMail()" class="btn btn-success w-md">Send Mail</button>
                            </div>
                        </div>
                    </div>
                    <div v-else>
                        <div class="avatar-md mx-auto">
                            <div class="avatar-title rounded-circle bg-light">
                                <i class="bx bx-mail-send h1 mb-0 text-primary"></i>
                            </div>
                        </div>
                        <div class="p-2 mt-2">
                            <h5 class="text-success">Success!</h5>
                            <p class="font-size-12 text-muted">
                                Verification was sent to
                                <span class="fw-bold">{{ user.email }}</span> for activation.
                            </p>
                        </div>
                    </div>
                </b-form>
            </div>
        </div>
        <loading :active.sync="isLoading" :can-cancel="false" loader="dots" background-color="black" :is-full-page="fullPage"></loading>
    </b-modal>
</template>

<script>
    import Loading from 'vue-loading-overlay';
    export default {
        data() {
            return {
                currentUrl: window.location.origin,
                errors: [],
                user: {},
                status: false,
                isLoading: false,
                fullPage: true,
            }
        },

        methods: {
            set(user) {
                this.user = user;
            },

            sendMail() {
                this.isLoading = true;
                axios.post(this.currentUrl + '/request/user/verify', {
                        id: this.user.id,
                    })
                    .then(response => {
                        this.status = true;
                        this.isLoading = false;
                    })
                    .catch(error => {
                        if (error.response.status == 422) {
                            this.errors = error.response.data.errors;
                        }
                    });
            }
        }, components : { Loading }
    }

</script>
