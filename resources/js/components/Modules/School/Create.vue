<template>
    <b-modal @ok="create($event)" size="lg" id="create" ok-title="Save" title="New School" centered>
        <b-form class="customform">
            <div class="row mb-3 mt-2 ms-2 me-2">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Name: <span v-if="errors.name" class="haveerror">({{ errors.name[0] }})</span></label>
                        <input type="text" class="form-control" v-model="name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Deped Id: <span v-if="errors.deped_id" class="haveerror">({{ errors.deped_id[0] }})</span></label>
                        <input type="text" class="form-control" v-model="deped_id">
                    </div>
                </div>      
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Class: <span v-if="errors.klas" class="haveerror">({{ errors.klas[0] }})</span></label>
                            <multiselect 
                            v-model="klas" 
                            :options="klases"
                            :allow-empty="false"
                            :show-labels="false"
                            label="name" track-by="id"
                            placeholder="Select Class">
                        </multiselect>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Term type: <span v-if="errors.term" class="haveerror">({{ errors.term[0] }})</span></label>
                            <multiselect 
                            v-model="term" 
                            :options="terms"
                            :allow-empty="false"
                            :show-labels="false"
                            label="name" track-by="id"
                            placeholder="Select Term type">
                        </multiselect>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--<div class="form-group">
                        <label>Address: <span v-if="errors.address" class="haveerror">({{ errors.address[0] }})</span></label>
                        <input type="text" class="form-control" v-model="address" style="text-transform: capitalize;">
                    </div>-->
                    <div class="form-group">
                        <label>Grading System: <span v-if="errors.grading" class="haveerror">({{ errors.grading[0] }})</span></label>
                            <multiselect 
                            v-model="grading" 
                            :options="gradings"
                            :allow-empty="false"
                            :show-labels="false"
                            label="name" track-by="id"
                            placeholder="Select Grading System">
                        </multiselect>
                    </div>
                </div>   

                <div class="col-md-12 mt-4"><hr></div>
                <div class="col-md-12"> 
                    <button style="margin-top: -55px;" class="btn btn-sm btn-primary pull-right" type="button">Main Campus</button>
                </div>

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
                        <label>Campus Name: <span v-if="errors.campus" class="haveerror">({{ errors.campus[0] }})</span></label>
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
        props : ['dropdowns','regions'],
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [], 
                provinces: [],
                municipalities: [],
                editable: false,
                isLoading: false,
                fullPage: true,
                id: '',
                name: '',
                region: '',
                province: '',
                municipality: '',
                address: '',
                campus: '',
                shortcut: '',
                term: '',
                klas: '',
                grading: '',
                deped_id: '',
                is_main: true,
            }
        },

        computed:{
            klases : function() {
                return this.dropdowns.filter(x => x.classification === 'Class');
            },
            gradings : function() {
                return this.dropdowns.filter(x => x.classification === 'Grading System');
            },
            terms : function() {
                return this.dropdowns.filter(x => x.classification === 'Term Type');
            },
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
                axios.post(this.currentUrl + '/request/school/store', {
                    id: this.id,
                    name: this.name,
                    deped_id: this.deped_id,
                    municipality_code: this.municipality.code,
                    term_id: this.term.id,
                    class_id: this.klas.id,
                    grading_id: this.grading.id,
                    address: this.address,
                    campus: this.campus,
                    shortcut: this.shortcut,
                    is_main: true,
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

            edit(user,editable){
                this.user = user;
                this.editable = editable;
            },

            clear(){
                this.editable = false;
                this.errors = [];
                this.users = {};
            },

        }, components: { Multiselect, Loading }
    }
</script>