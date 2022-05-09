<template>
    <b-modal @ok="create($event)" size="lg" id="campus" ok-title="Save" title="New Campus" centered>
        <b-form class="customform">
            <div class="row mb-3 mt-2 ms-2 me-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Region: <span v-if="errors.region" class="haveerror">({{ errors.region[0] }})</span></label>
                            <multiselect 
                            @input="onChangeRegion(region.code)"
                            v-model="region" 
                            :options="regions"
                            :allow-empty="false"
                            :show-labels="false"
                            label="region" track-by="code"
                            placeholder="Select Region">
                        </multiselect>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Province: <span v-if="errors.province" class="haveerror">({{ errors.province[0] }})</span></label>
                            <multiselect 
                            @input="onChangeProvince(province.code)"
                            v-model="province" 
                            :options="provinces"
                            :allow-empty="false"
                            :show-labels="false"
                            label="name" track-by="code"
                            placeholder="Select Province">
                        </multiselect>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Municipality: <span v-if="errors.municipality" class="haveerror">({{ errors.municipality[0] }})</span></label>
                            <multiselect 
                            v-model="municipality" 
                            :options="municipalities"
                            :allow-empty="false"
                            :show-labels="false"
                            label="name" track-by="code"
                            placeholder="Select Municipality">
                        </multiselect>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Address: <span v-if="errors.address" class="haveerror">({{ errors.address[0] }})</span></label>
                        <input type="text" class="form-control" v-model="address" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Campus name: <span v-if="errors.campus" class="haveerror">({{ errors.campus[0] }})</span></label>
                        <input type="text" class="form-control" v-model="campus" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Shortcut: <span v-if="errors.shortcut" class="haveerror">({{ errors.shortcut[0] }})</span></label>
                        <input type="text" class="form-control" v-model="shortcut">
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
        props : ['code','regions'],
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [], 
                provinces: [],
                municipalities: [],
                editable: false,
                isLoading: false,
                fullPage: true,
                address: '',
                id: '',
                campus: '',
                shortcut: '',
                region: '',
                province: '',
                municipality: ''
            }
        },

        methods : {
            fetchProvince($id){
                axios.get(this.currentUrl + '/lists/provinces/'+$id)
                .then(response => {
                    this.provinces = response.data.data;
                })
                .catch(err => console.log(err));
            },

            fetchMunicipality($id){
                axios.get(this.currentUrl + '/lists/municipalities/'+$id)
                .then(response => {
                    this.municipalities = response.data.data;
                })
                .catch(err => console.log(err));
            },

            onChangeRegion($id) {
                this.fetchProvince($id);
                this.province = '';
                this.municipality = '';
            },

            onChangeProvince($id) {
                this.fetchMunicipality($id);
                this.municipality = '';
            },

            create(){
                this.isLoading = true;
                axios.post(this.currentUrl + '/request/school/campus/store', {
                    id: this.id,
                    code: this.code,
                    shortcut: this.shortcut,
                    campus: this.campus,
                    address: this.address,
                    is_main : false,
                    municipality_code: this.municipality.code,
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
                this.id = list.id,
                this.address = list.address,
                this.campus = list.campus,
                this.shortcut = list.shortcut,
                this.municipality = list.municipality,
                this.province = list.municipality.province,
                this.region = list.municipality.province.region,
                this.editable = editable;
            },

            clear(){
                this.editable = false;
                this.address = '';
                this.campus = '';
                this.shortcut = '';
                this.errors = [];
            },

            new(){
                this.region = '';
                this.province = '';
                this.municipality = '';
            }

        }, components: { Multiselect, Loading }
    }
</script>