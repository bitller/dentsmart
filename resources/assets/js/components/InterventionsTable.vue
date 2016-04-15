<template>
    <div v-show="interventions" class="col-md-12">
        <div class="panel panel-default">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center blue-grey-text">Nume <span class="badge pointer" data-toggle="tooltip" title="Numele casierului" data-placement="top">?</span></th>
                        <th class="text-center blue-grey-text">Preţ <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                        <th class="text-center blue-grey-text">Şterge <span class="badge pointer" data-toggle="tooltip" title="Ștergeți casierul slectat">?</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="intervention in interventions.data">
                        <td is="intervention" :intervention_data="intervention"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <paginator v-show="showPaginator" :total="interventions.last_page" :current_page="interventions.current_page"></paginator>
        
    </div>
</template>
    
<script>

    import Intervention from '../components/Intervention.vue';
    import Paginator from '../components/Paginator.vue';

    export default {

        ready: function() {
            this.getInterventions();
        },

        data: function() {
            return {
                interventions: ''
            }
        },

        components: {
            'intervention': Intervention,
            'paginator': Paginator
        },

        computed: {
            showPaginator: function() {
                return this.interventions.total > this.interventions.per_page;
            }
        },

        methods: {
            getInterventions: function(url) {

                var vn = this;
                // Set default url in case no one is given
                if (typeof url === 'undefined') {
                    url = '/dashboard/interventions/get';
                }

                // Make request
                this.$http.get(url).then(function(success) {
                    vn.interventions = success.data;
                }, function(error) {
                    vn.serverErrorOccurred();
                });
            },

            serverErrorOccurred: function() {
                this.$dispatch('server_error_occurred', 'O eroare a avut loc. Redeschide aceasta pagina si incearca din nou.');
            }
        },

        events: {
            'interventions_updated': function() {
                this.getInterventions('/dashboard/interventions/get')
            },

            'pagination_link_clicked': function(pageNumber) {
                this.getInterventions('/dashboard/interventions/get?page='+pageNumber);
            }
        }
    }
</script>