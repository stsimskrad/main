<template>
    <div class="row">
        <div class="col-md-12">
            <button @click="add" type="button" class="btn btn-danger float-end" style="margin-top: -10px;"><i class='bx bx-plus-medical'></i></button>
            <h5 class="text-primary">{{ list.name }} <span class="text-muted"> - Campuses</span></h5>
            <hr>
        </div>
        <div class="col-md-12">
            <simplebar :style="{ height: (height - 105) + 'px' }">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap align-middle">
                        <tbody>
                            <tr v-for="list in list.campuses" v-bind:key="list.id">
                                <td class="fw-bold">{{list.shortcut}}</td>
                                <td class="text-center">{{list.address}}, {{list.municipality.name}}, {{list.municipality.province.name}}</td>
                                <td class="text-center">{{ (list.is_main == 1) ? 'Main Campus' : 'Campus' }}</td>
                                <td class="text-end">
                                    <a class="me-3 text-warning" @click="edit(list)"><i class='bx bx-edit-alt' ></i></a>
                                    <a class="text-danger"><i class='bx bx-trash'></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </simplebar>
        </div>
        <Campus :regions="regions" @status="message" :code="$route.params.id"  ref="create"/>
    </div>
</template>

<script>
import Campus from './Campus.vue';
import simplebar from 'simplebar-vue';
export default {
    props: ['regions'],
    data(){
        return {
            currentUrl: window.location.origin,
            windowHeight: window.innerHeight,
            windowWidth: window.innerWidth,
            errors: [],
            pagination: {},
            keyword: '',
            list: {}
        }
    },

    created(){
        this.fetch();
    },

    computed : {
        height: function() {
            return this.windowHeight -185;
        },
        counts: function(){
            return Math.floor((this.height - 125) / 54);
        }
    },

    methods: {

        fetch(){
            axios.get(this.currentUrl + '/request/school/'+this.$route.params.id)
            .then(response => {
                this.list = response.data.data;
            })
            .catch(err => console.log(err));
        },

        add(){
            this.$refs.create.clear();
            this.$refs.create.new();
            this.$bvModal.show("campus");
        },

        edit(list){
            this.editable = true;
            this.$bvModal.show("campus");
            this.$refs.create.edit(list,true);
        },

        message(list){
            if(list){
                if(this.editable == true){
                    let index = this.list.campuses.findIndex(u => u.id === list.id);
                    this.$set(this.list.campuses, index, list);
                    Vue.$toast.success('<strong>Successfully Updated</strong>', {
                        position: 'bottom-right'
                    });
                }else{
                    this.list.campuses.unshift(list);
                    Vue.$toast.success('<strong>Successfully Created</strong>', {
                        position: 'bottom-right'
                    });
                }
                this.$bvModal.hide("campus");
                this.editable = false;
            }
        },

    }, components : { simplebar, Campus }
}
</script>
