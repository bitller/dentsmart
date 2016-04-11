<template>
    <div v-show="interventions" class="col-md-12">
        <div class="panel panel-default">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center blue-grey-text">Nume <span class="badge pointer" data-toggle="tooltip" title="Numele casierului" data-placement="top">?</span></th>
                        <th class="text-center blue-grey-text">Preţ <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                        <th class="text-center blue-grey-text">Editează <span class="badge pointer" data-toggle="tooltip" title="Ștergeți casierul slectat">?</span></th>
                        <th class="text-center blue-grey-text">Şterge <span class="badge pointer" data-toggle="tooltip" title="Ștergeți casierul slectat">?</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="intervention in interventions">
                        <td is="intervention" name="intervention.name"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
    
<script>

    import Intervention from '../components/Intervention.vue';

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
            'intervention': Intervention
        },

        methods: {
            getInterventions: function() {
                var vn = this;
                this.$http.get('/interventions/get').then(function(success) {
                    vn.interventions = success.data.interventions;
                }, function(error) {
                    vn.serverErrorOccurred();
                });
            },

            serverErrorOccurred: function() {
                this.$dispatch('server_error_occurred', 'O eroare a avut loc. Redeschide aceasta pagina si incearca din nou.');
            }
        }
    }
</script>