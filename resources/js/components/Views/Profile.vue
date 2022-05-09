<template>
    <div>
        <PageHeader :title="title" :items="items" />
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <img :src="currentUrl+'/images/avatars/'+user.avatar" alt
                                            class="avatar-md rounded-circle img-thumbnail" />
                                    </div>
                                    <div class="flex-grow-1 align-self-center">
                                        <div class="text-muted">
                                            <h5 class="mb-1">{{ user.profile.firstname }} {{user.profile.lastname}}</h5>
                                            <p class="mb-0">{{ user.role }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 align-self-center">
                                <div class="text-lg-center mt-4 mt-lg-0">
                                    <div class="row">
                                        <!-- <div class="col-4">
                                            <div>
                                                <p class="text-muted text-truncate mb-2">
                                                    Total Projects
                                                </p>
                                                <h5 class="mb-0">48</h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <p class="text-muted text-truncate mb-2">Projects</p>
                                                <h5 class="mb-0">40</h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <p class="text-muted text-truncate mb-2">Clients</p>
                                                <h5 class="mb-0">18</h5>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="clearfix mt-4 mt-lg-0">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card" :style="{ height: (height-130) + 'px' }">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Personal Information</h4>

                        <p class="text-muted mb-4">Don't share your account email and password.
                            Dont' use easy-to-guess passwords, instead of trying to remember a different complex strong
                            password for every account and site login.</p>

                        <div class="table-responsive ">
                            <table class="table table-nowrap mb-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Full Name :</th>
                                        <td>{{ user.profile.firstname }} {{ user.profile.middlename }}
                                            {{ user.profile.lastname }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mobile :</th>
                                        <td>{{ user.profile.mobile}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">E-mail :</th>
                                        <td>{{ user.email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Role :</th>
                                        <td>{{ user.role }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" :style="{ height: (height-130) + 'px' }">
                    <div class="card-body">
                        <ul class="list-inline user-chat-nav float-end text-end mb-0 mt-n2 dropdown">
                            <li class="list-inline-item d-none d-sm-inline-block font-size-12">
                                {{(pagination.current_page == 1) ? '1' : ((pagination.current_page -1) * pagination.per_page) + 1 }}-{{(pagination.last_page == pagination.current_page) ? pagination.total : pagination.current_page * pagination.per_page }} of {{pagination.total}}
                            </li>
                            <li class="list-inline-item d-none d-sm-inline-block">
                                <a class="btn nav-btn" v-bind:class="[{disabled: !pagination.prev_page_url}]" @click="mylogs(pagination.prev_page_url)">
                                    <i class='bx bx-chevron-left mt-1 h4'></i>
                                </a>
                            </li>
                            <li class="list-inline-item d-none d-sm-inline-block">
                                <a class="btn nav-btn" v-bind:class="[{disabled: !pagination.next_page_url}]" @click="mylogs(pagination.next_page_url)">
                                    <i class='bx bx-chevron-right mt-1 h4'></i>
                                </a>
                            </li>
                        </ul>
                        <h4 class="card-title mb-4">Activities</h4>
                        <div data-simplebar class="mt-2" :style="{ height: (height-220) + 'px' }">
                            <ul class="verti-timeline list-unstyled">
                                <li class="event-list active" v-for="(log,index) in logs" v-bind:key="log.id">
                                    <div class="event-timeline-dot">
                                        <i class="bx bxs-right-arrow-circle font-size-18" :class="[(index == 0) ? 'bx-fade-right' : '']"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <h5 class="font-size-11">
                                                User {{ log.description }}
                                                <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                            </h5>
                                        </div>
                                        <div class="flex-grow-1 float-end">
                                            <div>
                                                <span class="text-muted float-end">{{ log.created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" :style="{ height: (height-130) + 'px' }">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Settings</h4>
                        <p class="text-muted mb-4">Dont' use easy-to-guess passwords, instead of trying to remember a different complex strong password.</p>
                        <b-form class="customform" @submit="onSubmit">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Current Password: <span v-if="errors.current_password"
                                                class="haveerror">({{ errors.current_password[0] }})</span></label>
                                        <input type="password" class="form-control"
                                            :class="[(errors.current_password) ? 'is-invalid' : '']"
                                            v-model="current_password">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>New Password: <span v-if="errors.password"
                                                class="haveerror">({{ errors.password[0] }})</span></label>
                                        <input type="password" class="form-control"
                                            :class="[(errors.password) ? 'is-invalid' : '']" v-model="password">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Confirm Password: <span v-if="errors.password_confirmation"
                                                class="haveerror">({{ errors.password_confirmation[0] }})</span></label>
                                        <input type="password" class="form-control"
                                            :class="[(errors.password_confirmation) ? 'is-invalid' : '']"
                                            v-model="password_confirmation">
                                    </div>
                                </div>
                                <div class="col-md-12 d-inline-block mt-2">
                                    <button type="submit"
                                        class="btn btn-info btn-sm w-lg float-end waves-effect waves-light mt-0">Update
                                        Password</button>
                                </div>
                            </div>
                        </b-form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
<script>
    import PageHeader from '../Layouts/Header.vue';

    export default {
        props: ['dropdowns', 'regions', 'user'],
        components: {
            PageHeader
        },
        data() {
            return {
                currentUrl: window.location.origin,
                height: this.$parent.$parent.$parent.height,
                title: "My Profile",
                items: [{
                        text: "Profile",
                        href: "/",
                    },
                    {
                        text: "Information",
                        active: true,
                    },
                ],
                errors: [],
                current_password: '',
                password: '',
                password_confirmation: '',
                logs : [],
                pagination : {}
            };
        },

        created(){
            this.mylogs();
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

            onSubmit(evt) {
                evt.preventDefault();
                axios.post(this.currentUrl + '/request/user/password', {
                    current_password: this.current_password,
                    password: this.password,
                    password_confirmation: this.password_confirmation,
                })
                .then(response => {
                    if (response.data.success == "First Attempt") {
                        alert('wew');
                    } else {
                        this.current_password = '';
                        this.password = '';
                        this.password_confirmation = '';
                        this.errors = [];
                        this.test = '';
                        Vue.$toast.success('<strong>Password Changed</strong>', {
                            position: 'bottom-right'
                        });
                    }
                })
                .catch(error => {
                    if (error.response.status == 422) {
                        this.errors = error.response.data.errors;
                    }
                    if (error.response.status == 401) {
                        this.errors = error.response.data.error;
                    }
                });
            },

            mylogs(page_url){
                let vm = this;
                page_url = page_url || this.currentUrl + '/request/user/logs';
                axios.get(page_url)
                .then(response => {
                    this.logs = response.data.data;
                    vm.makePagination(response.data.meta, response.data.links);
                })
                .catch(err => console.log(err));
            }
        }
    }

</script>
