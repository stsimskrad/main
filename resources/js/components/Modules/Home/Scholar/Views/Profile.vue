<template>
    <div class="card"  data-simplebar :style="{ height: height + 'px' }" style="margin-bottom: -30px;">
        <div class="card-body">
           <blockquote class="p-3 border-light border rounded ">
                <span class="float-end" style="cursor: pointer;"><i class='bx bxs-edit font-size-12'>&nbsp;</i></span>
                <div class="d-flex">
                    <div class="me-3"><i class="bx bxs-quote-alt-left text-primary font-size-14"></i></div>
                    <div>
                        <p class="mb-2 text-primary fw-bold">{{ user.profile.lastname}}, {{ user.profile.firstname}} {{ user.profile.middlename }} </p>
                    </div>
                </div>
                <div class="row font-size-12 mt-3">
                    <div class="col-sm-3">
                        <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-credit-card me-1 text-primary"></i>SPAS ID no.</h6>
                        <p class="fw-bold text-dark mb-0">{{scholar.spas_id}}</p>
                    </div>
                    <div class="col-sm-3">
                        <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-mail-send me-1 text-primary"></i>Learner's Reference No.</h6>
                        <p class="fw-bold text-dark mb-0">{{(scholar.lrn == null) ? 'n/a' : scholar.lrn }}</p>
                    </div>
                    <div class="col-sm-3">
                        <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-category me-1 text-primary"></i>Category</h6>
                        <p class="fw-bold text-dark mb-0">{{scholar.category.name}}</p>
                    </div>
                    <div class="col-sm-3">
                        <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-calendar me-1 text-primary"></i>Awarded Year</h6>
                        <p class="fw-bold text-dark mb-0">{{scholar.awarded_year}}</p>
                    </div>
                    <div class="col-sm-12"><hr></div>
                    <div class="col-sm-3">
                        <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-mail-send me-1 text-primary"></i>Email</h6>
                        <p class="fw-bold text-dark mb-0">{{user.profile.email}}</p>
                    </div>
                    <div class="col-sm-3">
                        <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-phone me-1 text-primary"></i>Mobile</h6>
                        <p class="fw-bold text-dark mb-0">{{user.profile.mobile}}</p>
                    </div>
                    <div class="col-sm-3">
                        <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-female me-1 text-primary"></i>Mother</h6>
                        <p class="fw-bold text-dark mb-0">wew</p>
                    </div>
                    <div class="col-sm-3">
                        <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-male me-1 text-primary"></i>Father</h6>
                        <p class="fw-bold text-dark mb-0">wew</p>
                    </div>
                </div>
            </blockquote>
            <hr>
            <div class="row font-size-12">
                <div class="col-md-6">
                        <blockquote class="p-3 border-light border rounded ">
                        <span class="float-end" style="cursor: pointer;"><i class='bx bxs-edit font-size-12'>&nbsp;</i></span>
                        <h6 class="card-title text-secondary mb-0 font-size-12">Education</h6>
                        <hr>
                        <div class="row font-size-12 mt-3">
                            <div class="col-sm-12">
                                <h6 class="text-muted font-size-11 mb-0"><i class="bx bxs-school me-1 text-primary"></i>School</h6>
                                <p class="fw-bold text-dark mb-0">{{education.school.name}} - <span class="text-muted">{{education.school.campus}}</span></p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <h6 class="text-muted font-size-11 mb-0"><i class="bx bxs-graduation me-1 text-primary"></i>Course</h6>
                                <p class="fw-bold text-dark mb-0">{{education.course.name}}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <h6 class="text-muted font-size-11 mb-0"><i class="bx bxs-calendar me-1 text-primary"></i>Year level</h6>
                                <p class="fw-bold text-dark mb-0">{{education.level.others}}</p>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="col-md-6">
                    <blockquote class="p-3 border-light border rounded ">
                        <span class="float-end" style="cursor: pointer;"><i class='bx bxs-edit font-size-12'>&nbsp;</i></span>
                        <h6 class="card-title text-secondary mb-0 font-size-12">Address</h6>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-map me-1 text-primary"></i>Region</h6>
                                <p class="fw-bold text-dark mb-0">{{address.region.region}} ({{ address.region.name }})</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-map-alt me-1 text-primary font-size-15"></i>Province</h6>
                                <p class="fw-bold text-dark mb-0">{{ address.province.name }}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-sitemap me-1 text-primary"></i>Municipality</h6>
                                <p class="fw-bold text-dark mb-0"> {{ address.municipality.name }}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-sitemap me-1 text-primary"></i>Barangay</h6>
                                <p class="fw-bold text-dark mb-0"> {{ address.barangay.name }}</p>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['user','height'],
    data(){
        return {
            currentUrl: window.location.origin,
            scholar: {},
            address: {},
            education: {}
        }
    },

    created(){
        this.scholar = this.user.profile.scholar;
        this.fetch();
    },

    methods : {
        fetch(){
            axios.get(this.currentUrl + '/request/info')
            .then(response => {
                this.address = response.data.address;
                this.education = response.data.education;
            })
            .catch(err => console.log(err));
        },
    }
}
</script>