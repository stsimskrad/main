<template>
    <div>
       <div class="row mb-3">
            <div class="col-xl-6 col-sm-6 d-inline-block">
                <button type="button" @click="add" class="btn btn-danger waves-effect waves-light me-1"><i class='bx bx-plus-medical'></i></button>
                <form class="d-inline-block ">
                    <div class="search-box">
                        <div class="position-relative">
                            <input type="text" class="form-control bg-light border-light rounded" placeholder="Search..." v-model="keyword" @keyup="fetch()">
                            <i class='bx bx-search-alt search-icon'></i>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-sm-6">
                <ul class="list-inline user-chat-nav text-end mb-0 dropdown">
                    <li class="list-inline-item d-none d-sm-inline-block font-size-12">
                         {{(pagination.current_page == 1) ? '1' : ((pagination.current_page -1) * pagination.per_page) + 1 }}-{{(pagination.last_page == pagination.current_page) ? pagination.total : pagination.current_page * pagination.per_page }} of {{pagination.total}}
                    </li>
                    <li class="list-inline-item d-none d-sm-inline-block">
                        <a class="btn nav-btn" v-bind:class="[{disabled: !pagination.prev_page_url}]" @click="fetch(pagination.prev_page_url)">
                            <i class='bx bx-chevron-left h4'></i>
                        </a>
                    </li>
                    <li class="list-inline-item d-none d-sm-inline-block">
                        <a class="btn nav-btn" v-bind:class="[{disabled: !pagination.next_page_url}]" @click="fetch(pagination.next_page_url)">
                            <i class='bx bx-chevron-right h4'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-centered table-nowrap align-middle">
                <thead class="table-light">
                    <tr>
                        <th style="width: 2%;"></th>
                        <th>Name</th>
                        <th class="text-center">Campuses</th>
                        <th class="text-center">Class</th>
                        <th class="text-center">Term</th>
                        <th class="text-center">Grading</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="list in lists" v-bind:key="list.id">
                        <td>
                            <div class="avatar-xs">
                                <span class="avatar-title rounded-circle">{{list.name.charAt(0)}}</span>
                            </div>
                        </td>
                        <td>
                            <h5 class="font-size-13 mb-1 text-dark">{{list.name}}</h5>
                            <p class="font-size-12 text-muted mb-0">{{list.deped_id}}</p>
                        </td>
                        <td class="text-center">{{list.campus}}</td>
                        <td class="text-center">{{list.class.name}}</td>
                        <td class="text-center">{{list.term.name}}</td>
                        <td class="text-center">{{list.grading.name}}</td>
                        <td class="text-end">
                            <router-link :to="{ path: '/school/'+list.code }" class="me-3">
                                <i class='bx bx-sitemap'></i>
                            </router-link>
                            <a class="text-danger"><i class='bx bx-trash'></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <Create :regions="regions" :dropdowns="dropdowns" @status="message" ref="create"/>
    </div>
</template>

<script>
import Create from './Create.vue';
export default {
    props: ['dropdowns','regions'],
    data(){
        return {
            currentUrl: window.location.origin,
            windowHeight: window.innerHeight,
            windowWidth: window.innerWidth,
            errors: [],
            pagination: {},
            keyword: '',
            lists : [],
            klases: [],
            gradings: [],
            terms: []
        }
    },

    computed : {
        height: function() {
            return this.windowHeight -185;
        },
        counts: function(){
            return Math.floor((this.height - 125) / 54);
        }
    },

    created(){
        this.fetch();
    },

    methods: {
        makePagination(meta, links) {
            let pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page_url: links.next,
                prev_page_url: links.prev,
                total: meta.total,
                per_page: meta.per_page,
            };
            this.pagination = pagination;
        },

        fetch(page_url) {
            let vm = this; let key;
            (this.keyword != '' && this.keyword != null) ? key = this.keyword : key = '-';
            page_url = page_url || this.currentUrl + '/request/school/'+key+'/'+this.counts;

            axios.get(page_url)
            .then(response => {
                this.lists = response.data.data;
                vm.makePagination(response.data.meta, response.data.links);
            })
            .catch(err => console.log(err));
        },

        add(){
           this.$bvModal.show("create");
        },

        edit(list){
            this.editable = true;
            this.$bvModal.show("create");
            this.$refs.create.edit(list,true);
        },

        message(list){
            if(list){
                if(this.editable == true){
                    let index = this.lists.findIndex(u => u.id === list.id);
                    this.$set(this.lists, index, list);
                    Vue.$toast.success('<strong>Successfully Updated</strong>', {
                        position: 'bottom-right'
                    });
                }else{
                    this.lists.unshift(list);
                    this.lists.splice(this.counts,1);
                    Vue.$toast.success('<strong>Successfully Created</strong>', {
                        position: 'bottom-right'
                    });
                }
                this.$bvModal.hide("create");
                this.editable = false;
            }
        },

        fetchGrading(){
            axios.get(this.currentUrl + '/request/dropdowns/Grading System/-')
            .then(response => {
                this.gradings = response.data.data;
            })
            .catch(err => console.log(err));
        },

        fetchKlases(){
            axios.get(this.currentUrl + '/request/dropdowns/Class/-')
            .then(response => {
                this.klases = response.data.data;
            })
            .catch(err => console.log(err));
        },

        fetchTerm(){
            axios.get(this.currentUrl + '/request/dropdowns/Term Type/-')
            .then(response => {
                this.terms = response.data.data;
            })
            .catch(err => console.log(err));
        },
    }, components : { Create }
}
</script>