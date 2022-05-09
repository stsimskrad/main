<template>
    <div>
        <PageHeader :title="title" :items="items"/>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" :style="{ height: height + 'px' }">
                        <School :regions="regions" :dropdowns="dropdowns"/>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</template>
<script>
    import School from '../../Modules/School/Index.vue';
    import Layout from '../../Layouts/main.vue';
    import PageHeader from '../../Layouts/Header.vue';

    export default {
        components: { Layout, PageHeader, School },
        props: ['regions','dropdowns'],
        data() {
            return {
                currentUrl: window.location.origin,
                height: this.$parent.$parent.$parent.height, 
                title: "Schools",
                items: [
                    {text: "School", href: "/",},
                    {text: "Lists",active: true,},
                ],
            };
        }, 
    }
</script>