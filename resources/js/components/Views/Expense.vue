<template>
    <div>
        <PageHeader :title="title" :items="items"/>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" :style="{ height: height + 'px' }">
                        <Expense :dropdowns="dropdowns"/>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</template>
<script>
    import Expense from '../Modules/Expense/Index.vue';
    import Layout from '../Layouts/main.vue';
    import PageHeader from '../Layouts/Header.vue';

    export default {
        props: ['dropdowns'],
        components: { Layout, PageHeader, Expense },
        data() {
            return {
                currentUrl: window.location.origin,
                height: this.$parent.$parent.$parent.height, 
                title: "Courses",
                items: [
                    {text: "Course", href: "/",},
                    {text: "Lists",active: true,},
                ],
            };
        }, 
    }
</script>