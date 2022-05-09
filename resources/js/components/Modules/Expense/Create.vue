<template>
    <b-modal @ok="create($event)" id="create" ok-title="Save" title="New Agency" centered>
        <b-form class="customform">
            <div class="row mb-3 mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name: <span v-if="errors.name" class="haveerror">({{ errors.name[0] }})</span></label>
                        <input type="text" class="form-control" v-model="name" style="text-transform: capitalize;">
                    </div>
                </div>   
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Code: <span v-if="errors.code" class="haveerror">({{ errors.code[0] }})</span></label>
                        <input type="text" class="form-control" v-model="code" style="text-transform: capitalize;">
                    </div>
                </div> 
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Term type: <span v-if="errors.term" class="haveerror">({{ errors.term[0] }})</span></label>
                        <multiselect 
                            v-model="expenditure_id" 
                            :options="expenditures"
                            :allow-empty="false"
                            :show-labels="false"
                            label="name" track-by="id"
                            placeholder="Select Expenditure">
                        </multiselect>
                    </div>
                </div> 
            </div>
        </b-form>
    </b-modal>
</template>

<script>
    import Loading from 'vue-loading-overlay';
    import Multiselect from 'vue-multiselect';
    export default {
        props: ['dropdowns'],
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [], 
                editable: false,
                isLoading: false,
                fullPage: true,
                id: '',
                name: '',
                code: '',
                expenditure_id:'',
            }
        },
        
        computed : {
            expenditures : function() {
                return this.dropdowns.filter(x => x.classification === 'Expenditure');
            },
        },
        
        methods : {
            create(){
                this.isLoading = true;
                axios.post(this.currentUrl + '/request/expense/store', {
                    id: this.id,
                    name: this.name,
                    code: this.code,
                    expenditure_id: this.expenditure_id.id,
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
                this.code = list.code;
                this.expenditure_id = list.expenditure_id;
                this.editable = editable;
            },

            clear(){
                this.editable = false;
                this.errors = [];
                this.name = '';
                this.code = '';
                this.expenditure_id = '';
            },

        }, components: { Loading, Multiselect }
    }
</script>