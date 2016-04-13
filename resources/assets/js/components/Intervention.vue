<template>
    <td class="vert-align text-center">{{ intervention_data.name }}</td>
    <td class="vert-align text-center">{{ intervention_data.price }}</td>
    <td class="vert-align text-center"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Editează intervenție</button></td>
    <td class="vert-align text-center">
        <button @click="deleteIntervention(intervention_data.id)" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Șterge intervenție</button>
    </td>
</template>
    
<script>
    export default {
        props: ['intervention_data'],

        data: function() {
            return {
                loading: true,
            }
        },

        methods: {

            /**
             * Delete selected intervention.
             * 
             * @param interventionId
             */
            deleteIntervention: function(interventionId) {

                this.loading = true;
                var vn = this;

                this.askForConfirmation(function() {
                    // Confirmed
                    var intervention = {
                        _token: $('#token').attr('content'),
                        intervention_id: interventionId
                    };

                    // Make request
                    vn.$http.post('/dashboard/interventions/delete', intervention).then(function(success) {
                        swal({
                            type: 'success',
                            title: success.data.title,
                            text: success.data.message,
                            timer: 3000,
                            showCancelButton: false,
                            showConfirmButton: false,
                            closeOnConfirm: false
                        });
                        vn.$dispatch('interventions_updated');
                    }, function(error) {

                        var title = 'Ceva nu a mers bine.';
                        var message = 'O eroare a avut loc. Vă rugăm redeschideți pagina și încercați din nou.';

                        if (error.data.title) {
                            title = error.data.title;
                        }
                        if (error.data.message) {
                            message = error.data.message;
                        }

                        swal({
                            type: 'error',
                            title: title,
                            text: message,
                            timer: 4000,
                            showCancelButton: false,
                            showConfirmButton: false,
                            closeOnConfirm: false
                        });
                    });
                });
            },

            /**
             * Ask user for delete confirmation.
             *
             * @param callback
             * @returns {boolean}
             */
            askForConfirmation: function (callback) {
                swal({
                    title: 'Sunteţi sigur?',
                    text: 'Această intervenție va fi ștearsă definitiv.',
                    type: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Anulează',
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Da, șterge intervenția',
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function() {
                    callback();
                });
            }
        }
    }
</script>