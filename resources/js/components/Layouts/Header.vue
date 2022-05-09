<script>
/**
 * Page-header component
 */
export default {
  components: {},
  props: {
    title: {
      type: String,
      default: '',
    },
    items: {
      type: Array,
      default: () => {
        return []
      },
    },
  },
}
</script>

<template>
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 style="margin-bottom: -15px; margin-top: -15px;">{{ title }}</h4>

        <div class="page-title-right font-size-11">
          <b-breadcrumb :items="items" class="m-0"></b-breadcrumb>
        </div>
      </div>
    </div>
  </div>
  <!-- end page title -->
</template>
<style>
.page-title-box h4 {
  font-size: 13px !important;
}
</style>
