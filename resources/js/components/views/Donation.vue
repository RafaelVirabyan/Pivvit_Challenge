<template>
    <div>
        <b-table striped hover :items="donations" :fields="fields">
            <template #cell(campaignTitle)="data">
                <span>{{ data.item.campaign.title }}</span>
            </template>
        </b-table>
    </div>
</template>

<script>
    export default {
        name: 'Donation',
        data() {
            return {
                donations: [],
                fields:[
                    "id",
                    "donorName",
                    "amount",
                    "campaignTitle"
                ]
            }
        },
        mounted() {
            this.axios.get('donations').then(({data}) => {
                this.donations = data.data
            })
        },
    }
</script>
