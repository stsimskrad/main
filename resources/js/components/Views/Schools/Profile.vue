<template>
<div>
    <PageHeader :title="title" :items="items" />
    <Index :dropdowns="dropdowns"/> 
</div>
</template>
<script>
    import Index from '../../Modules/School/Profile.vue';
    import PageHeader from '../../Layouts/Header.vue';

    export default {
        components: { PageHeader, Index },
        props: ['dropdowns'],
        data() {
            return {
                currentUrl: window.location.origin,
                height: this.$parent.$parent.$parent.height, 
                title: "School Profile",
                items: [
                    {text: "Schools", href: "/schools",},
                    {text: "Profile",active: true,},
                    
                ],
            };
        },
        
    }
</script>