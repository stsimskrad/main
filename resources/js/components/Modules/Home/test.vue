<template>
    <div class="d-xl-flex">
        <div class="w-100">
            <div class="d-md-flex">

                <div class="chat-leftsidebar me-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="flex mt-4 me-3">
                                    <div class="avatar-md profile-user-wid">
                                        <img :src="currentUrl+'/images/avatars/'+user.avatar" alt
                                            class="img-thumbnail rounded-circle" />
                                    </div>
                                </div>

                                <div class="flex-grow-1">
                                    <div class="text-muted">
                                        <span class="fw-bold font-size-13 text-primary">{{ user.profile.firstname }}
                                            {{user.profile.lastname}}</span>
                                        <p class="mb-0">{{user.email}}</p>
                                        <p class="mb-0">Id no: #SK0234</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-100" data-simplebar :style="{ height: height + 'px' }">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar-md mr-4"><span
                                                class="avatar-title rounded-circle bg-light text-danger font-size-16"><img
                                                    src="assets/images/companies/img-1.png" alt="" height="30"></span>
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">Testing
                                                    dost ix </a></h5>
                                            <p class="text-muted mb-4">It will be as simple as Occidental</p>
                                            <div class="team"><a href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Daniel Canales"
                                                    class="team-member d-inline-block"><img
                                                        src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="rounded-circle avatar-xs m-1"></a> <a
                                                    href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Jennifer Walker"
                                                    class="team-member d-inline-block"><img
                                                        src="assets/images/users/avatar-1.jpg" alt=""
                                                        class="rounded-circle avatar-xs m-1"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item mr-3"><span
                                                class="badge badge-primary">Completed</span></li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Due Date" class="list-inline-item mr-3"><i
                                                class="bx bx-calendar mr-1"></i> 15 Oct, 19
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Comments" class="list-inline-item mr-3"><i
                                                class="bx bx-comment-dots mr-1"></i> 214
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar-md mr-4"><span
                                                class="avatar-title rounded-circle bg-light text-danger font-size-16"><img
                                                    src="assets/images/companies/img-2.png" alt="" height="30"></span>
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-size-15"><a href="#"
                                                    class="text-dark">ASDADASDASDSADA</a></h5>
                                            <p class="text-muted mb-4">To achieve it would be necessary</p>
                                            <div class="team"><a href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Kenneth Johnson"
                                                    class="team-member d-inline-block"><img
                                                        src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="rounded-circle avatar-xs m-1"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item mr-3"><span
                                                class="badge badge-warning">Pending</span></li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Due Date" class="list-inline-item mr-3"><i
                                                class="bx bx-calendar mr-1"></i> 22 Oct, 19
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Comments" class="list-inline-item mr-3"><i
                                                class="bx bx-comment-dots mr-1"></i> 183
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar-md mr-4"><span
                                                class="avatar-title rounded-circle bg-light text-danger font-size-16"><img
                                                    src="assets/images/companies/img-3.png" alt="" height="30"></span>
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">WEW
                                                    ASDA ASD ASD</a></h5>
                                            <p class="text-muted mb-4"> For science, music, sport, etc</p>
                                            <div class="team"><a href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Natalie Salerno"
                                                    class="team-member d-inline-block"><img
                                                        src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xs m-1"></a> <a
                                                    href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Andy Miller"
                                                    class="team-member d-inline-block">
                                                    <div class="avatar-xs m-1"><span
                                                            class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                                                            A
                                                        </span></div>
                                                </a> <a href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Helen Chaffin"
                                                    class="team-member d-inline-block"><img
                                                        src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="rounded-circle avatar-xs m-1"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item mr-3"><span class="badge badge-danger">Delay</span>
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Due Date" class="list-inline-item mr-3"><i
                                                class="bx bx-calendar mr-1"></i> 13 Oct, 19
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Comments" class="list-inline-item mr-3"><i
                                                class="bx bx-comment-dots mr-1"></i> 175
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar-md mr-4"><span
                                                class="avatar-title rounded-circle bg-light text-danger font-size-16"><img
                                                    src="assets/images/companies/img-2.png" alt="" height="30"></span>
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-size-15"><a href="#"
                                                    class="text-dark">ASDADASDASDSADA</a></h5>
                                            <p class="text-muted mb-4">To achieve it would be necessary</p>
                                            <div class="team"><a href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Kenneth Johnson"
                                                    class="team-member d-inline-block"><img
                                                        src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="rounded-circle avatar-xs m-1"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item mr-3"><span
                                                class="badge badge-warning">Pending</span></li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Due Date" class="list-inline-item mr-3"><i
                                                class="bx bx-calendar mr-1"></i> 22 Oct, 19
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Comments" class="list-inline-item mr-3"><i
                                                class="bx bx-comment-dots mr-1"></i> 183
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar-md mr-4"><span
                                                class="avatar-title rounded-circle bg-light text-danger font-size-16"><img
                                                    src="assets/images/companies/img-3.png" alt="" height="30"></span>
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">WEW
                                                    ASDA ASD ASD</a></h5>
                                            <p class="text-muted mb-4"> For science, music, sport, etc</p>
                                            <div class="team"><a href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Natalie Salerno"
                                                    class="team-member d-inline-block"><img
                                                        src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xs m-1"></a> <a
                                                    href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Andy Miller"
                                                    class="team-member d-inline-block">
                                                    <div class="avatar-xs m-1"><span
                                                            class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                                                            A
                                                        </span></div>
                                                </a> <a href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Helen Chaffin"
                                                    class="team-member d-inline-block"><img
                                                        src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="rounded-circle avatar-xs m-1"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item mr-3"><span class="badge badge-danger">Delay</span>
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Due Date" class="list-inline-item mr-3"><i
                                                class="bx bx-calendar mr-1"></i> 13 Oct, 19
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Comments" class="list-inline-item mr-3"><i
                                                class="bx bx-comment-dots mr-1"></i> 175
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar-md mr-4"><span
                                                class="avatar-title rounded-circle bg-light text-danger font-size-16"><img
                                                    src="assets/images/companies/img-2.png" alt="" height="30"></span>
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-size-15"><a href="#"
                                                    class="text-dark">ASDADASDASDSADA</a></h5>
                                            <p class="text-muted mb-4">To achieve it would be necessary</p>
                                            <div class="team"><a href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Kenneth Johnson"
                                                    class="team-member d-inline-block"><img
                                                        src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="rounded-circle avatar-xs m-1"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item mr-3"><span
                                                class="badge badge-warning">Pending</span></li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Due Date" class="list-inline-item mr-3"><i
                                                class="bx bx-calendar mr-1"></i> 22 Oct, 19
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Comments" class="list-inline-item mr-3"><i
                                                class="bx bx-comment-dots mr-1"></i> 183
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar-md mr-4"><span
                                                class="avatar-title rounded-circle bg-light text-danger font-size-16"><img
                                                    src="assets/images/companies/img-3.png" alt="" height="30"></span>
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">WEW
                                                    ASDA ASD ASD</a></h5>
                                            <p class="text-muted mb-4"> For science, music, sport, etc</p>
                                            <div class="team"><a href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Natalie Salerno"
                                                    class="team-member d-inline-block"><img
                                                        src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-xs m-1"></a> <a
                                                    href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Andy Miller"
                                                    class="team-member d-inline-block">
                                                    <div class="avatar-xs m-1"><span
                                                            class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                                                            A
                                                        </span></div>
                                                </a> <a href="javascript: void(0);" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Helen Chaffin"
                                                    class="team-member d-inline-block"><img
                                                        src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="rounded-circle avatar-xs m-1"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item mr-3"><span class="badge badge-danger">Delay</span>
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Due Date" class="list-inline-item mr-3"><i
                                                class="bx bx-calendar mr-1"></i> 13 Oct, 19
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Comments" class="list-inline-item mr-3"><i
                                                class="bx bx-comment-dots mr-1"></i> 175
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chat-leftsidebar ms-4">
                    <div class="chat-leftsidebar-nav">
                        <div class="">

                           

                            <div class="card border shadow-none"  style="margin-bottom: 10px;">
                                <a class="text-body">
                                    <div class="p-1">
                                        <div class="d-flex mt-1">
                                            <div class="avatar-xs align-self-center ml-2 mr-2">
                                                <div class="avatar-title rounded bg-transparent">
                                                    <i class='text-success bx bxs-bell-ring h4 mt-1'></i>
                                                </div>
                                            </div> 
                                            <div class="overflow-hidden mr-auto align-self-center">
                                                <h5 class="font-size-12 text-truncate mt-1">Notifications</h5> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <p class="font-size-11 text-truncate text-center mb-4 mt-4">No pending request</p>


                            <div class="card border shadow-none"  style="margin-bottom: 10px;">
                                <a class="text-body">
                                    <div class="p-1">
                                        <div class="d-flex mt-1">
                                            <div class="avatar-xs align-self-center ml-2 mr-2">
                                                <div class="avatar-title rounded bg-transparent">
                                                    <i class='text-primary bx bx-calendar h4 mt-1'></i>
                                                </div>
                                            </div> 
                                            <div class="overflow-hidden mr-auto align-self-center">
                                                <h5 class="font-size-12 text-truncate mt-1">Schedules</h5> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                           
                            <p class="font-size-11 text-truncate text-center mb-4 mt-4">No schedules</p>
                            
                            <div class="card border shadow-none"  style="margin-bottom: 10px;">
                                <a class="text-body">
                                    <div class="p-1">
                                        <div class="d-flex mt-1">
                                            <div class="avatar-xs align-self-center ml-2 mr-2">
                                                <div class="avatar-title rounded bg-transparent">
                                                    <i class='text-danger bx bx-gift h4 mt-1'></i>
                                                </div>
                                            </div> 
                                            <div class="overflow-hidden mr-auto align-self-center">
                                                <h5 class="font-size-12 text-truncate mt-1">Birthdays</h5> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            
                            <p class="font-size-11 text-truncate text-center mb-4 mt-4">No birthday for this month</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</template>
<script>
    import simplebar from 'simplebar-vue';
    export default {
        props: ['user','height'],
        components : { simplebar },
        data() {
            return {
                currentUrl: window.location.origin,
                selected: ''
            }
        }
    }

</script>
<style>
    .simplebar-track.simplebar-horizontal {
    display: none;
    }
    .simplebar-content {
    overflow-x: hidden;
    }
     .simplebar-track.simplebar-vertical {
        width: 100px;
    }
    .simplebar-scrollbar {
        width: 10px;
    }
    
</style>
