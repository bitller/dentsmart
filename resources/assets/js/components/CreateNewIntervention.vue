<template>
    
    <div class="btn btn-primary pull-right add-cashier" data-toggle="modal" data-target="#createInterventionModal" data-backdrop="static" data-keyboard="false">
        <span class="glyphicon glyphicon-plus"></span>&nbsp;Creează o nouă Intervenţie
    </div>

    <div id="createInterventionModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- BEGIN Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button @click="closeModal" :class="{ 'disabled': loading }" type="button" class="close">&times;</button>
                    <h4 class="modal-title">Creează o nouă Intervenţie</h4>
                </div>
                <div class="modal-body">
                    <div v-show="error" class="alert alert-danger">{{ error }}</div>
                    <div class="form-group">
                        <input v-model="intervention_name" @keyup.enter="createNewIntervention" :class="{ 'custom-input-error': errors.intervention_name }" type="text" class="form-control input-lg custom-input" placeholder="Numele intervenţiei">
                        <span v-show="errors.intervention_name" class="text-danger">{{ errors.intervention_name }}</span>
                    </div>
                    <div class="form-group">
                        <input v-model="intervention_price" @keyup.enter="createNewIntervention" :class="{ 'custom-input-error': errors.intervention_price }" type="text" class="form-control input-lg custom-input" placeholder="Preţul intervenţiei">
                        <span v-show="errors.intervention_price" class="text-danger">{{ errors.intervention_price }}</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button @click="createNewIntervention" :class="{ 'disabled': loading }" type="button" class="btn btn-primary">
                        <span v-show="!loading">Creează intervenţia</span>
                        <img v-show="loading" src="/img/loading-bubbles.svg" alt="Loading icon" />
                    </button>
                    <button @click="closeModal" :class="{ 'disabled': loading }" type="button" class="btn btn-default">Close</button>
                </div>
            </div>
            <!-- END Modal content -->
        </div>
    </div>

</template>

<script>
    export default {

        data: function() {
            return {
                intervention_name: '',
                intervention_price: '',
                errors: '',
                error: '',
                loading: false
            }
        },

        methods: {

            /**
             * Handle creation of new interventions.
             */
            createNewIntervention: function() {

                // Ignore clicks when button is disabled
                if (this.loading) {
                    return false;
                }

                this.loading = true;
                var vn = this;
                var interventionData = {
                    _token: $('#token').attr('content'),
                    intervention_name: this.intervention_name,
                    intervention_price: this.intervention_price
                }

                // Do post request
                this.$http.post('/dashboard/interventions/new', interventionData).then(function(success) {

                    vn.loading = false;
                    vn.$dispatch('interventions_updated');

                    // Hide and reset the modal
                    $('#createInterventionModal').modal('hide');
                    vn.intervention_name = vn.intervention_price = '';

                    // Notify user
                    swal({
                        type: 'success',
                        title: 'Succes!',
                        text: 'Intervenția a fost adăugată.',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }, function(error) {

                    if (error.data.errors) {
                        vn.errors = error.data.errors;
                        return;
                    }

                    if (error.data.error) {
                        vn.error = error.data.error;
                        return;
                    }

                    vn.error = 'O eroare a avut loc.';
                });
            },

            /**
             * Just close the modal.
             *
             * @returns {boolean}
             */
            closeModal: function() {
                if (this.loading) {
                    return false;
                }

                $('#createInterventionModal').modal('hide');
            }
        }
    }
</script>