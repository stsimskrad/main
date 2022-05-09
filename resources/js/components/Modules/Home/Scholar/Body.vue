<template>
    <div class="w-100">
        <div class="row">
            <router-view :dropdowns="dropdowns" :user="user" :height="height"></router-view>
        </div>
    </div>
</template>
<script>
export default {
    props: ['height','dropdowns','user']
}
</script>