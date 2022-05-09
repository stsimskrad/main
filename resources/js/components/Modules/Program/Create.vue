<template>
    <b-modal @ok="create($event)" id="create" ok-title="Save" title="New Program" centered>
        <b-form class="customform">
            <div class="row mb-3 mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name: <span v-if="errors.name" class="haveerror">({{ errors.name[0] }})</span></label>
                        <input type="text" class="form-control" v-model="list.name" style="text-transform: capitalize;">
                    </div>
                </div>    
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Others: <span v-if="errors.others" class="haveerror">({{ errors.others[0] }})</span></label>
                        <input type="text" class="form-control" v-model="list.others" style="text-transform: capitalize;">
                    </div>
                </div>  
                <div class="col-md-6 mt-3">
                    <input
                        class="form-check-input theme-choice"
                        type="checkbox"
                        id="light-mode-switch"
                        v-model="list.is_sub"
                    />  
                    <label class="custom-control-label" for="customCheck1">Is Sub program?</label>  
                </div>  
                 <div class="col-md-6 mt-3">
                    <input
                        class="form-check-input theme-choice"
                        type="checkbox"
                        id="light-mode-switch"
                        v-model="list.is_active"
                    />  
                    <label class="custom-control-label" for="customCheck1">Is active?</label>  
                </div>  
            </div>
        </b-form>
    </b-modal>
</template>

<script>
    import Multiselect from 'vue-multiselect';
    import Loading from 'vue-loading-overlay';
    export default {
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [], 
                editable: false,
                isLoading: false,
                fullPage: true,
                list: {
                    id: '',
                    name: '',
                    others: '',
                    is_sub: false,
                    is_active: true
                },
            }
        },
        
        methods : {
            create(){
                this.isLoading = true;
                axios.post(this.currentUrl + '/request/program/store', {
                    id: this.list.id,
                    name: this.list.name,
                    others: this.list.others,
                    is_sub: this.list.is_sub,
                    is_active: this.list.is_active,
                    editable: this.editable
                })
                .then(response => {
                    this.$emit('status', response.data.data);
                    this.clear();
                    this.isLoading = false;
                })
                .catch(error => {
                    if (error.response.status == 422) {
                        this.errors = error.response.data.errors;
                        this.isLoading = false;
                    }else{
                        this.isLoading = false;
                        Vue.$toast.error('<strong>Please contact Administrator</strong>', {
                        position: 'bottom-right'
                    });
                    }
                });
            },

            edit(list,editable){
                this.list = list;
                // this.id = list.id;
                // this.name = list.name;
                // this.code = list.code;
                // this.acronym = list.acronym;
                // this.website = list.website;
                this.editable = editable;
            },

            clear(){
                this.editable = false;
                this.errors = [];
                this.list = {};
            },

        }, components: { Loading }
    }
</script>