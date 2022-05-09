<template>
    <b-modal id="sync" ok-title="Sync" hide-footer title="Sync" centered>
        <div class="p-2">
            <div class="text-center">
                <b-form class="customform">
                    <div>
                        <div class="avatar-md mx-auto">
                            <div class="avatar-title rounded-circle bg-light">
                                <i class="bx bx-sync h1 mb-0 text-primary"></i>
                            </div>
                        </div>
                        <div class="p-2 mt-2">
                            <p class="font-size-12 text-muted">
                                Are you sure you want to sync the 
                                <span class="fw-bold">{{ lists.length }}</span> {{ type }}'s.
                            </p>
                            <div class="mt-4">
                                <button @click="sync" type="button" class="btn btn-success w-md">Sync {{ type }}</button>
                            </div>
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
                lists: [],
                type:'',
                isLoading: false,
                fullPage: true,
            }
        },

        methods: {
            set(data,type){
                this.lists = data;
                this.type = type;
            },

             sync(){
                this.isLoading = true;
                axios.post(this.currentUrl + '/sync/'+this.type+'/store', {
                    lists: this.lists,
                })
                .then(response => {
                    this.isLoading = false;
                    this.$bvModal.hide("sync");
                    Vue.$toast.success('<strong>Successfully Synced</strong>', {
                        position: 'bottom-right'
                    });
                })
                .catch(error => {
                    if (error.response.status == 422) {
                        this.errors = error.response.data.errors;
                        this.isLoading = false;
                    }
                });
            },
        }, components : { Loading }
    }

</script>
