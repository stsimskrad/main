<template>
    <div>
        <div class="row mb-2">
            <div class="col-xl-6 col-sm-6 d-inline-block">
                <button type="button" @click="addnew" class="btn btn-danger waves-effect waves-light"><i class='bx bx-plus-medical'></i></button>
                <form class="d-inline-block ms-1">
                    <div class="search-box">
                        <div class="position-relative">
                            <input type="text" class="form-control bg-light border-light rounded" placeholder="Search..." v-model="keyword" @keyup="fetch()">
                            <i class='bx bx-search-alt search-icon'></i>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-sm-6 mt-n1">
                <ul class="list-inline user-chat-nav text-end mb-0 dropdown">
                    <li class="list-inline-item d-none d-sm-inline-block font-size-12">
                         {{(pagination.current_page == 1) ? '1' : ((pagination.current_page -1) * pagination.per_page) + 1 }}-{{(pagination.last_page == pagination.current_page) ? pagination.total : pagination.current_page * pagination.per_page }} of {{pagination.total}}
                    </li>
                    <li class="list-inline-item d-none d-sm-inline-block">
                        <a class="btn nav-btn" v-bind:class="[{disabled: !pagination.prev_page_url}]" @click="fetch(pagination.prev_page_url)">
                            <i class='bx bx-chevron-left mt-1 h4'></i>
                        </a>
                    </li>
                    <li class="list-inline-item d-none d-sm-inline-block">
                        <a class="btn nav-btn" v-bind:class="[{disabled: !pagination.next_page_url}]" @click="fetch(pagination.next_page_url)">
                            <i class='bx bx-chevron-right mt-1 h4'></i>
                        </a>
                    </li>
                    <li class="list-inline-item d-non d-sm-inline-block">
                        <div class="dropdown">
                            <button class="btn btn-light w-xl dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{classification}}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" :class="[(classification == dropdown) ? 'text-primary' : '']" @click="filter(dropdown)" v-for="(dropdown,index) in dropdowns" v-bind:key="index">{{dropdown}}</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-centered table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th class="text-center" v-if="classification == 'Category'">Description</th>
                        <th class="text-center" v-if="classification == 'Status' || classification == 'Benefit Type'">Type</th>
                        <th class="text-center" v-if="classification == 'Level' || classification == 'Expenditure'">Others</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="list in lists" v-bind:key="list.id">
                        <td v-if="classification == 'Salary'">Salary Grade {{list.name}}</td>
                        <td v-else>{{list.name}}</td>
                        <td class="text-center" v-if="classification == 'Group' || classification == 'Level'">{{list.others}}</td>
                        <td class="text-center" v-if="classification == 'Category' || classification == 'Expenditure'">{{list.others}}</td>
                        <td class="text-center" v-if="classification == 'Status' || classification == 'Benefit Type'">{{list.type}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <Create @status="message" ref="create"/>
    </div>
</template>
<script>
import Create from './Create.vue';
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            counts: this.$parent.$parent.$parent.$parent.counts2,
            errors: [],
            pagination: {},
            keyword: '',
            classification: 'Status',
            show: false,
            lists: [],
            dropdowns: ['Status','Semester','Level','Class','Grading System','Term Type','Expenditure','S&T Categories']
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

        fetch(page_url) {
            let vm = this; let key;
            (this.keyword != '' && this.keyword != null) ? key = this.keyword : key = '-';
            page_url = page_url || this.currentUrl + '/request/dropdown/'+this.classification+'/'+key+'/'+this.counts;

            axios.get(page_url)
            .then(response => {
                this.lists = response.data.data;
                vm.makePagination(response.data.meta, response.data.links);
            })
            .catch(err => console.log(err));
        },

        filter(classification){
            this.classification = classification;
            let vm = this; let key;
            (this.keyword != '' && this.keyword != null) ? key = this.keyword : key = '-';
            this.fetch(this.currentUrl + '/request/dropdown/'+this.classification+'/'+key+'/'+this.counts);
        },

        addnew(){
            this.$bvModal.show("create");
            this.$refs.create.set(this.classification);
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
                    Vue.$toast.success('<strong>Successfully Created</strong>', {
                        position: 'bottom-right'
                    });
                }
                this.$bvModal.hide("create");
                this.editable = false;
            }
        }
    }, components : { Create }
}
</script>