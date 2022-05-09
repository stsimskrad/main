<template>
    <div>
       <div class="row mb-3">
            <div class="col-xl-6 col-sm-6 d-inline-block">
                <form class="d-inline-block ">
                    <div class="search-box">
                        <div class="position-relative">
                            <input type="text" class="form-control bg-light border-light rounded" placeholder="Search..." v-model="keyword" @keyup="fetch()">
                            <i class='bx bx-search-alt search-icon'></i>
                        </div>
                    </div>
                </form>
                <!-- <div class="d-inline-block col-md-6">
                    <div class="form-group">
                        <multiselect 
                            @input="onChange(type)"
                            v-model="type" 
                            :options="types"
                            :allow-empty="false"
                            :show-labels="false"
                            placeholder="Select Type">
                        </multiselect>
                    </div>
                </div> -->
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
                    <li class="list-inline-item d-non d-sm-inline-block" v-if="type == 'Barangay' || type == 'Municipality'">
                        <div data-toggle="tooltip" data-placement="top" title="" data-original-title="Filter by Award year">
                            <button type="button"  class="btn btn-light me-n2"><span class="d-none d-sm-inline-block"> <i class='bx bx-map-pin'></i></span></button>                                 
                        </div>
                    </li>
                    <li class="list-inline-item d-non d-sm-inline-block" v-if="type == 'Barangay'">
                        <div data-toggle="tooltip" data-placement="top" title="" data-original-title="Filter by Award year">
                            <button type="button" @click="sync" class="btn btn-light me-n2"><span class="d-none d-sm-inline-block"> <i class='bx bx-sync'></i></span></button>                                 
                        </div>
                    </li>
                    <li class="list-inline-item d-non d-sm-inline-block">
                        <div class="dropdown">
                            <button class="btn btn-light w-xl dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{type}}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" :class="[(type == t) ? 'text-primary' : '']" @click="onChange(t)" v-for="(t,index) in types" v-bind:key="index">{{t}}</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-centered table-nowrap align-middle">
                <thead class="thead-light">
                    <tr class="font-size-11">
                        <th>Code</th>
                        <th class="text-center">{{ type }}</th>
                        <th class="text-center" v-if="type == 'Region'">Region</th>
                        <th class="text-center" v-if="type == 'Region'">Island</th>
                        <th class="text-center" v-if="type == 'Province'">Region Code</th>
                        <th class="text-center" v-if="type == 'Municipality'">Old Name</th>
                        <th class="text-center" v-if="type == 'Municipality'">Is Chartered?</th>
                        <th class="text-center" v-if="type == 'Municipality'">District</th>
                        <th class="text-center" v-if="type == 'Municipality'">Province Code</th>
                        <th class="text-center" v-if="type == 'Barangay'">District</th>
                        <th class="text-center" v-if="type == 'Barangay'">Municipality Code</th>
                    </tr>
                </thead>
                <tbody>
                   <tr v-for="list in lists" v-bind:key="list.id">
                        <td>{{list.code}}</td>
                        <td class="text-center">{{list.name}}</td>
                        <td class="text-center" v-if="type == 'Region'">{{list.region}}</td>
                        <td class="text-center" v-if="type == 'Region'">{{list.island}}</td>
                        <td class="text-center" v-if="type == 'Province'">{{list.region.name }} <span class="font-size-11 text-muted">- ({{list.region_code}})</span> </td>
                        <td class="text-center" v-if="type == 'Municipality'">{{ (list.old_name == NULL) ? 'n/a' : list.old_name }}</td>
                        <td class="text-center" v-if="type == 'Municipality'">{{ (list.is_chartered) ? 'yes' : 'no'}}</td>
                        <td class="text-center" v-if="type == 'Municipality'">{{ (list.district == NULL) ? 'No District' : list.district}}</td>
                        <td class="text-center" v-if="type == 'Municipality'">{{(list.province == NULL) ? 'n/a' : list.province.name  }} <span class="font-size-11 text-muted">- ({{(list.province_code == NULL) ? 'n/a' : list.province_code}})</span></td>
                        <td class="text-center" v-if="type == 'Barangay'">{{ (list.district == NULL) ? 'No District' : list.district}}</td>
                        <td class="text-center" v-if="type == 'Barangay'">{{(list.municipality == NULL) ? 'n/a' : list.municipality.name }} <span class="font-size-11 text-muted">- ({{ (list.municipality_code == NULL) ? 'n/a' : list.municipality_code}})</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <Create @status="message" ref="sync"/>
        <loading :active.sync="isLoading" :can-cancel="false" loader="dots" background-color="black" :is-full-page="fullPage"></loading>
    </div>
</template>
<script>
import Create from './Sync.vue';
import Loading from 'vue-loading-overlay';
import Multiselect from 'vue-multiselect';
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            counts: this.$parent.$parent.$parent.$parent.counts2, 
            pagination: {},
            keyword: '',
            lists: [],
            type: 'Region',
            types: ['Region','Province','Municipality','Barangay'],
            editable: false,
            isLoading: false,
            fullPage: true,
        }
    },

    created(){
        this.fetch();
    },

    methods : {
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
        
        fetch(page_url){
            let vm = this; let key;
            (this.keyword != '' && this.keyword != null) ? key = this.keyword : key = '-';
            page_url = page_url || this.currentUrl + '/lists/location/'+this.type+'/'+this.counts+'/'+key;
            axios.get(page_url)
            .then(response => {
                this.lists = response.data.data;
                vm.makePagination(response.data.meta, response.data.links);
            })
            .catch(err => console.log(err));
        },

        sync(){
            this.isLoading = true;
            axios.get(this.currentUrl + '/sync/'+this.type+'/fetch')
            .then(response => {
                this.locations = response.data;
                this.$refs.sync.set(this.locations,this.type);
                this.isLoading = false;
                this.$bvModal.show("sync");
            })
            .catch(err => console.log(err));                
        },

        onChange(type){
            this.type = type;
            this.fetch();
        },

        message(){

        }
    }, components : { Create, Loading, Multiselect }
}
</script>