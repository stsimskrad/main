<template>
    <div class="chat-leftsidebar ms-4">
        <div class="chat-leftsidebar-nav">

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
</template>
