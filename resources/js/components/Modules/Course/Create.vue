<template>
    <b-modal @ok="create($event)" id="create" ok-title="Save" title="New Agency" centered>
        <b-form class="customform">
            <div class="row mb-3 mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name: <span v-if="errors.name" class="haveerror">({{ errors.name[0] }})</span></label>
                        <input type="text" class="form-control" v-model="name">
                    </div>
                </div>   
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Abbreviation: <span v-if="errors.abbreviation" class="haveerror">({{ errors.abbreviation[0] }})</span></label>
                        <input type="text" class="form-control" v-model="abbreviation">
                    </div>
                </div>  
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Others: <span v-if="errors.others" class="haveerror">({{ errors.others[0] }})</span></label>
                        <input type="text" class="form-control" v-model="others">
                    </div>
                </div>    
            </div>
        </b-form>
    </b-modal>
</template>

<script>
    import Loading from 'vue-loading-overlay';
    export default {
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [], 
                editable: false,
                isLoading: false,
                fullPage: true,
                id: '',
                name: '',
                abbreviation: '',
                others: ''
            }
        },
        
        methods : {
            create(){
                this.isLoading = true;
                axios.post(this.currentUrl + '/request/course/store', {
                    id: this.id,
                    name: this.name,
                    abbreviation: this.abbreviation,
                    others: this.others,
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
                this.id = list.id;
                this.name = list.name;
                this.others = list.others;
                this.abbreviation = list.abbreviation;
                this.editable = editable;
            },

            clear(){
                this.editable = false;
                this.errors = [];
                this.name = '';
                this.others = '';
                this.abbreviation = '';
            },

        }, components: { Loading }
    }
</script>