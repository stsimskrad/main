<template>
    <b-modal id="view" title="Log Details" hide-footer centered>
        <div class="row" style="margin-right: 10px; margin-left: 10px;">
            <table class="table mb-0" v-if="log.type == 'auth'" style="border-top:hidden;">
                <tbody>
                    <tr>
                        <td width="30%">IP Address :</td>
                        <td width="70%">{{log.details.ip}} </td>
                    </tr>
                    <tr>
                        <td width="30%">Browser :</td>
                        <td class="font-size-10" width="70%">{{log.details.browser}} </td>
                    </tr>
                </tbody>
            </table>
            <table class="table mb-0" v-if="log.type == 'user'" style="border-top:hidden;">
                <tbody>
                    <tr v-if="log.description == 'updated'">
                        <td class="font-size-11" width="30%">Updated from :</td>
                        <td class="font-size-11" width="70%">{{log.details.old}} </td>
                    </tr>
                    <tr>
                        <td v-if="log.description == 'updated'" class="font-size-11" width="20%">Updated to :</td>
                        <td v-else class="font-size-11" width="30%">Created :</td>
                        <td class="font-size-11" width="70%">{{log.details.attributes}} </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </b-modal>
</template>

<script>
    export default {
        data() {
            return {
                currentUrl: window.location.origin,
                errors: [],
                log: {}
            }
        },

        methods: {
            set(log){
                this.log = log;
            }
        },
    }

</script>
