<template>
    <div>
        <PageHeader :title="title" :items="items"/>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" :style="{ height: height + 'px' }">
                        <Agency/>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</template>
<script>
    import Agency from '../Modules/Agency/Index.vue';
    import Layout from '../Layouts/main.vue';
    import PageHeader from '../Layouts/Header.vue';

    export default {
        components: { Layout, PageHeader, Agency },
        data() {
            return {
                currentUrl: window.location.origin,
                height: this.$parent.$parent.$parent.height, 
                title: "Agencies",
                items: [
                    {text: "Agencies", href: "/",},
                    {text: "Lists",active: true,},
                ],
            };
        }, 
    }
</script>