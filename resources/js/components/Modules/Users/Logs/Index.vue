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
                    <tr>
                        <th>User</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Type</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="log in logs" v-bind:key="log.id">
                        <td>{{log.causer}}</td>
                        <td class="text-center"><i>{{log.subject}}</i></td>
                        <td class="text-center">{{log.created_at}}</td>
                        <td class="text-center">    
                            <span v-if="log.type == 'auth'" class="badge bg-success">{{log.type}}</span>
                            <span v-else class="badge bg-danger">{{log.type}}</span> |
                            <span v-if="log.description == 'updated'" class="badge bg-warning">{{log.description}}</span>
                            <span v-else class="badge bg-info">{{log.description}}</span>
                        </td>
                        <td class="text-end">
                            <button @click="view(log)" type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                View Details
                            </button>
                        </td>
                    </tr>
                    <tr v-if="logs.length == 0">
                        <td class="text-center" colspan="5">
                            No users found.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <Show ref="view"/>
    </div>
</template>
<script>
import Show from './View';
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            counts: this.$parent.$parent.$parent.$parent.counts, 
            pagination: {},
            keyword: '',
            logs: [],
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
            page_url = page_url || this.currentUrl + '/lists/logs/'+key+'/'+this.counts;

            axios.get(page_url)
            .then(response => {
                this.logs = response.data.data;
                vm.makePagination(response.data.meta, response.data.links);
            })
            .catch(err => console.log(err));
        },

        view(log){
            this.$bvModal.show("view");
            this.$refs.view.set(log);
        }

    }, components : { Show }
}
</script>