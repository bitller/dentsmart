<template>

    <div class="row">
        <div class="col-md-6">
            <h3 class="blue-grey-text">Intervenţii</h3>
        </div>
        <div class="col-md-6">
            <div class="btn btn-primary pull-right add-cashier"><span class="glyphicon glyphicon-plus"></span>&nbsp;Creează o nouă Intervenţie</div>
        </div>
    </div>
    
    <div class="row">
        <server-error :error="server_error"></server-error>
    </div>
        
    <div class="row">
        <interventions-table></interventions-table>
    </div>
</template>

<script>

    import InterverventionsTable from '../components/InterventionsTable.vue';
    import ServerError from '../components/ServerError.vue';

    export default {
        
        data: function() {
            return {
                server_error: ''
            }
        },
        
        components: {
            'interventions-table': InterverventionsTable,
            'server-error': ServerError
        },

        events: {
            'server_error_occurred': function(error) {
                this.server_error = error;
            }
        }
    }
</script>