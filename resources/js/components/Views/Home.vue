<template>
    <div>
        <PageHeader :title="title" :items="items"/>
        <!-- <Coordinator /> -->
    </div>  
</template>
<script>
    // import Coordinator from '../../../components/Modules/Dashboard/Coordinator/Index.vue';
    import Layout from '../Layouts/main.vue';
    import PageHeader from '../Layouts/Header.vue';

    export default {
        components: { Layout, PageHeader },
        props: ['user'],
        data() {
            return {
                title: "Dashboard",
                items: [
                {
                text: "Dashboards",
                href: "/",
                },
                {
                text: "Saas",
                active: true,
                },
      ],
            };
        },
    
    }
</script>