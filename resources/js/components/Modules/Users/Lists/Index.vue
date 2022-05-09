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
                        <th class="text-center">Contact Information</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="list in lists" v-bind:key="list.id">
                        <td>
                            <div class="avatar-xs" v-if="list.avatar == 'avatar.jpg'">
                                <span class="avatar-title rounded-circle">{{list.lastname.charAt(0)}}</span>
                            </div>
                            <div v-else>
                                <img class="rounded-circle avatar-xs" :src="currentUrl+'/images/avatars/'+list.avatar" alt="">
                            </div>
                        </td>
                        <td>
                            <h5 class="font-size-13 mb-0 text-dark">{{list.lastname}}, {{list.firstname}} {{list.middlename}}.</h5>
                            <p class="font-size-12 text-muted mb-0">{{list.role}}</p>
                        </td>
                        <td class="text-center">
                            <h5 class="font-size-12 mb-0 text-dark">{{list.email}}</h5>
                            <p class="font-size-12 text-muted mb-0">{{list.mobile}}</p>
                        </td>
                        <td class="text-center">
                            <span v-if="list.is_active == 1" class="badge bg-success fs-11">Active</span>
                            <span v-else class="badge bg-danger fs-11">Inactive</span>
                        </td>
                        <td class="text-center">
                            <a class="me-3 " @click="update(list)">
                                <i v-bind:class="(list.is_active == 1) ? 'text-success bx bx-lock-open' : 'text-dark bx bxs-lock'"></i>
                            </a>
                            <a class="me-3 text-warning" @click="edit(list)"><i class='bx bx-edit-alt' ></i></a>
                            <a class="text-info" @click="verify(list)"><i class='bx bx-mail-send'></i></a>
                        </td>
                    </tr>
                    <tr v-if="lists.length == 0">
                        <td class="text-center" colspan="5">
                            No users found.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <Create @status="message" ref="create"/>
        <Update @status="message" ref="update"/>
        <Verify ref="verify"/>
    </div>
</template>
<script>
import Create from './Create';
import Update from './Update';
import Verify from './Verify';
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
            page_url = page_url || this.currentUrl + '/request/user/lists/'+key+'/'+this.counts;

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

        update(list){
            this.editable = true;
            this.$bvModal.show("update");
            this.$refs.update.set(list);
        },

        verify(list){
            this.$bvModal.show("verify");
            this.$refs.verify.set(list);
        },

        message(list){
            if(list){
                if(this.editable == true){
                    let index = this.lists.findIndex(u => u.id === list.id);
                    this.$set(this.lists, index, list);
                    Vue.$toast.success('<strong>Successfully Updated</strong>', {
                        position: 'bottom-right'
                    });
                    this.$bvModal.hide("update");
                }else{
                    this.lists.unshift(list);
                    Vue.$toast.success('<strong>Successfully Created</strong>', {
                        position: 'bottom-right'
                    });
                    this.$bvModal.hide("create");
                }
                this.editable = false;
            }
        }
    }, components : { Create , Update, Verify }
}
</script>