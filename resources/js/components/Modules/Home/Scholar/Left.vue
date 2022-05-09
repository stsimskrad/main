<template>
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
                            <span class="fw-bold font-size-13 text-primary">{{ user.profile.firstname }} {{user.profile.lastname}}</span>
                            <p class="mb-0 font-size-11 fw-bold">{{ user.profile.scholar.spas_id}}</p>
                            <p class="mb-0 font-size-11 mt-n1">{{user.email}}</p>
                            <p class="text-muted mb-0"><span :class="'badge bg-'+user.profile.scholar.status.color">{{user.profile.scholar.status.name}} </span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div @click="selected = 1; view(true);"  class="card border shadow-none"  style="margin-bottom: 4px;">
            <router-link :to="{ path: '/home' }" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-warning bx bx-home h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="(selected == 1) ? 'text-primary' : ''">Home</h5> 
                        </div>
                    </div>
                </div>
            </router-link>
        </div>

        <div @click="selected = 2; view(false);" class="card border shadow-none"  style="margin-bottom:4px;">
            <router-link :to="{ name: 'profilee',  params: {data : user }}" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-primary bx bx-user-circle h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="(selected == 2) ? 'text-primary' : ''">Profile Information</h5> 
                        </div>
                    </div>
                </div>
            </router-link>
        </div>

        <div @click="selected = 3; view(false);" class="card border shadow-none"  style="margin-bottom: 4px;">
            <router-link :to="{ name: 'financial'}" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-danger bx bx-money h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="(selected == 3) ? 'text-primary' : ''">Financial Benefits</h5> 
                        </div>
                    </div>
                </div>
            </router-link>
        </div>

        <div @click="selected = 4; view(false);" class="card border shadow-none"  style="margin-bottom: 4px;">
            <router-link :to="{ name: 'enrollment' }" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-success bx bxs-school h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="(selected == 4) ? 'text-primary' : ''">Enrollment Information</h5> 
                        </div>
                    </div>
                </div>
            </router-link>
        </div>
        
        <div @click="selected = 5; view(false);"  class="card border shadow-none"  style="margin-bottom: 4px;">
            <router-link :to="{ name: 'trace' }" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-info bx bx-user-pin h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="(selected == 5) ? 'text-primary' : ''">Employment History</h5> 
                        </div>
                    </div>
                </div>
            </router-link>
        </div>

        <div @click="selected = 6; view(false);"  class="card border shadow-none"  style="margin-bottom: 4px;">
            <router-link :to="{ name: 'reimbursement' }" class="text-body">
                <div class="p-1">
                    <div class="d-flex mt-1">
                        <div class="avatar-xs align-self-center ms-2 me-2">
                            <div class="avatar-title rounded bg-transparent">
                                <i class='text-secondary bx bx-notepad h4 mt-1'></i>
                            </div>
                        </div> 
                        <div class="overflow-hidden me-auto align-self-center">
                            <h5 class="font-size-12 text-truncate mt-1" :class="(selected == 6) ? 'text-primary' : ''">Prospectus</h5> 
                        </div>
                    </div>
                </div>
            </router-link>
        </div>
    </div>
</template>
<script>
export default {
    props: ['user'],
    data(){
        return {
            currentUrl: window.location.origin,
            selected: 1
        }
    },

    methods : {
        view(show){
            this.$emit('status', show);
        }
    }
}
</script>