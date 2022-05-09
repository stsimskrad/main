<template>
    <b-modal @ok="create($event)" id="create" title="Create" ok-title="Save" centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name: <span v-if="errors.name" class="haveerror">({{ errors.name[0] }})</span></label>
                        <input type="text" class="form-control"  v-model="name" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-12" v-if="classification == 'Group' || classification == 'Category' || classification == 'Expenditure' || classification == 'Level'">
                    <div class="form-group">
                        <label>Others: <span v-if="errors.others" class="haveerror">({{ errors.others[0] }})</span></label>
                        <input type="text" class="form-control"  v-model="others">
                    </div>
                </div>
                <div class="col-md-12" v-if="classification == 'Status'">
                    <div class="form-group">
                        <label>Type: <span v-if="errors.type" class="haveerror">({{ errors.type[0] }})</span></label>
                        <input type="text" class="form-control"  v-model="type">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" v-if="classification == 'Benefit Type'">
                    <label>Type: <span v-if="errors.type" class="haveerror">({{ errors.type[0] }})</span></label>
                    <multiselect 
                        v-model="type" 
                        :options="types"
                        :allow-empty="false">
                    </multiselect>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" v-if="classification == 'Status'">
                    <label>Color: <span v-if="errors.color" class="haveerror">({{ errors.color[0] }})</span></label>
                    <multiselect 
                        v-model="color" 
                        :options="colors"
                        :allow-empty="false">
                    </multiselect>
                </div>
            </div>
        </b-form>
    </b-modal>
</template>

<script>
    import Multiselect from 'vue-multiselect';
    export default {
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [], 
                id: '',
                name: '',
                color: '',
                type: '',
                others: '',
                classification: '',
                editable: false,
                colors : ["green","red","blue","yellow","black","gray"],
                types : ["Monthly","Term","One-time","Academic Year"],
            }
        },
        
        methods : {
            set(classification){
                this.classification = classification;
            },

            create(){
                this.isLoading = true;
                axios.post(this.currentUrl + '/request/dropdown/store', {
                    id: this.id,
                    name: this.name,
                    color: this.color,
                    type: this.type,
                    others: this.others,
                    classification: this.classification,
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
                    }
                });
            },

            edit(list,editable){
                this.name = list.name;
                this.color = list.color;
                this.type = list.type;
                this.editable = editable;
            },

            clear(){
                this.editable = false;
                this.errors = [];
                this.name = '';
                this.color = '';
                this.type = '';
                this.$bvModal.hide("create");
            },

        }, components: { Multiselect }
    }
</script>