<template>
    <div class="d-xl-flex">
        <div class="w-100">
            <div class="d-md-flex">
                <Left @status="show" :user="user"/>
                <Body :user="user" :dropdowns="''" :height="height"/>
                <Right v-if="view == true"/>
            </div>
        </div>
    </div>
</template>
<script>
    import Left from './Scholar/Left.vue';
    import Body from './Scholar/Body.vue';
    import Right from './Scholar/Right.vue';
    import simplebar from 'simplebar-vue';
    export default {
        props: ['user','height'],
        components : { simplebar, Left, Body, Right },
        data() {
            return {
                currentUrl: window.location.origin,
                selected: '',
                view : ''
            }
        },

        methods : {
            show(status){
                this.view = status ;
            }
        }
    }

</script>
<style>
    .simplebar-track.simplebar-horizontal {
    display: none;
    }
    .simplebar-content {
    overflow-x: hidden;
    }
     .simplebar-track.simplebar-vertical {
        width: 100px;
    }
    .simplebar-scrollbar {
        width: 10px;
    }
    
</style>