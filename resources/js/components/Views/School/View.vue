<template>
<div>
    <PageHeader :title="title" :items="items" />
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" :style="{ height: height + 'px' }">
                    <Index :regions="regions" :dropdowns="dropdowns"/>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
    import Index from '../../Modules/School/Profile.vue'
    import Layout from '../../Layouts/main.vue';
    import PageHeader from '../../Layouts/Header.vue';

    export default {
        components: { Layout, PageHeader, Index },
        props: ['regions','dropdowns'],
        data() {
            return {
                currentUrl: window.location.origin,
                height: this.$parent.$parent.$parent.height, 
                title: "School Profile",
                items: [
                    {text: "School", href: "/",},
                    {text: "Lists",active: true,},
                ],
            };
        },
        
    }
</script>