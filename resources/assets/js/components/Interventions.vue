<template>

    <div class="row">
        <div class="col-md-6">
            <h3 class="blue-grey-text">Intervenţii</h3>
        </div>
        <div class="col-md-6">
            <create-new-intervention></create-new-intervention>
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
    import CreateNewIntervention from '../components/CreateNewIntervention.vue';
    import ServerError from '../components/ServerError.vue';

    export default {
        
        data: function() {
            return {
                server_error: ''
            }
        },
        
        components: {
            'interventions-table': InterverventionsTable,
            'create-new-intervention': CreateNewIntervention,
            'server-error': ServerError
        },

        events: {
            'server_error_occurred': function(error) {
                this.server_error = error;
            },

            /**
             * Because CreateNewIntervention and InterventionsTable components does not have a parent-child relationship
             * and this component (Interventions) is the father of both, fire an event on CreateNewIntervention, catch it here and fire again
             * to child components, InterventionsTable included.
             */
            'interventions_updated': function() {
                this.$broadcast('interventions_updated');
            }
        }
    }
</script>