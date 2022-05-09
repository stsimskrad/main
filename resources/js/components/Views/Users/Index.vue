<template>
<div>
    <PageHeader :title="title" :items="items" />
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" :style="{ height: height + 'px' }">
                    <Index/>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
    import Index from '../../Modules/Users/Lists/Index.vue';
    import Layout from '../../Layouts/main.vue';
    import PageHeader from '../../Layouts/Header.vue';

    export default {
        components: { Layout, PageHeader, Index },
        data() {
            return {
                currentUrl: window.location.origin,
                height: this.$parent.$parent.$parent.height, 
                title: "Users",
                items: [
                    {text: "User", href: "/",},
                    {text: "Lists",active: true,},
                ],
            };
        },
        
    }
</script>