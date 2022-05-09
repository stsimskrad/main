<template>
    <div>
       <div class="row mb-3">
            <div class="col-xl-6 col-sm-6 d-inline-block">
                <button type="button" @click="create" class="btn btn-danger waves-effect waves-light me-1"><i class='bx bx-plus-medical'></i></button>
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
                <thead class="thead-light">
                    <tr class="font-size-11">
                        <th style="width: 2%;"></th>
                        <th>Name</th>
                        <th class="text-center">is Sub program</th>
                        <th class="text-center">is Active</th>
                        <th class="text-center">Created at</th>
                        <th class="text-center">Updated at</th>
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
                            <h5 class="font-size-13 mb-0 text-dark">{{list.name}}</h5>
                            <p class="font-size-12 text-muted mb-0">{{list.others}}</p>
                        </td>
                        <td class="text-center">
                            <i v-if="list.is_sub" class='bx bx-checkbox-checked h3 text-success' ></i>
                            <i v-else class='bx bx-checkbox h3 text-secondary'></i>
                        </td>
                        <td class="text-center">
                            <i v-if="list.is_active" class='bx bx-checkbox-checked h3 text-success' ></i>
                            <i v-else class='bx bx-checkbox h3 text-secondary'></i>
                        </td>
                        <td class="text-center">{{list.created_at}}</td>
                        <td class="text-center">{{list.updated_at}}</td>
                        <td class="text-end">
                            <a class="me-3 text-warning" @click="edit(list)"><i class='bx bx-edit-alt' ></i></a>
                            <a class="text-danger"><i class='bx bx-trash'></i></a>
                        </td>
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
            counts: this.$parent.$parent.$parent.$parent.counts, 
            pagination: {},
            keyword: '',
            lists: [],
            editable: false
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
            page_url = page_url || this.currentUrl + '/request/program/'+key+'/'+this.counts;

            axios.get(page_url)
            .then(response => {
                this.lists = response.data.data;
                vm.makePagination(response.data.meta, response.data.links);
            })
            .catch(err => console.log(err));
        },

        create(){
            this.$bvModal.show("create");
            this.$refs.create.clear();
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