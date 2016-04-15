<template>

    <div class="btn btn-primary pull-right add-cashier" data-toggle="modal" data-target="#addNewPatientModal" data-backdrop="static" data-keyboard="false">
        <span class="glyphicon glyphicon-plus"></span>&nbsp;Adaugă pacient nou
    </div>

    <div id="addNewPatientModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- BEGIN Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button @click="closeModal" :class="{ 'disabled': loading }" type="button" class="close">&times;</button>
                    <h4 class="modal-title">Adaugă pacient nou</h4>
                </div>

                <div class="modal-body">
                    <div v-show="error" class="alert alert-danger">{{ error }}</div>

                    <div class="form-group">
                        <input v-model="patient_first_name" @keyup.enter="addNewPatient" :class="{ 'custom-input-error': errors.patient_first_name }" class="form-control input-lg custom-input" placeholder="Numele pacientului" />
                        <span v-show="errors.patient_first_name" class="text-danger">{{ errors.patient_first_name }}</span>
                    </div>

                    <div class="form-group">
                        <input v-model="patient_last_name" @keyup.enter="addNewPatient" :class="{ 'custom-input-error': errors.patient_last_name }" class="form-control input-lg custom-input" placeholder="Penumele pacientului" />
                        <span v-show="errors.patient_last_name" class="text-danger">{{ errors.patient_last_name }}</span>
                    </div>

                    <div class="form-group">
                        <input v-model="patient_email" @keyup.enter="addNewPatient" :class="{ 'custom-input-error': errors.patient_email }" class="form-control input-lg custom-input" placeholder="Email-ul pacientului" />
                        <span v-show="errors.patient_email" class="text-danger">{{ errors.patient_email }}</span>
                    </div>

                    <div class="form-group">
                        <input v-model="patient_phone_number" @keyup.enter="addNewPatient" :class="{ 'custom-input-error': errors.patient_phone_number }" class="form-control input-lg custom-input" placeholder="Numărul de telefon al pacientului" />
                        <span v-show="errors.patient_phone_number" class="text-danger">{{ errors.patient_phone_number }}</span>
                    </div>

                </div>
                <div class="modal-footer">
                    <button @click="createNewIntervention" :class="{ 'disabled': loading }" type="button" class="btn btn-primary">
                        <span v-show="!loading">Adaugă pacientul</span>
                        <img v-show="loading" src="/img/loading-bubbles.svg" alt="Loading icon" />
                    </button>
                    <button @click="closeModal" :class="{ 'disabled': loading }" type="button" class="btn btn-default">Anulează</button>
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
                loading: false,
                errors: '',
                error: '',
                patient_first_name: '',
                patient_last_name: '',
                patient_email: '',
                patient_phone_number: ''
            }
        },

        methods: {

            addNewPatient: function() {
                //
            },

            closeModal: function() {
                if (this.loading) {
                    return false;
                }

                $('#addNewPatientModal').modal('hide');
            }
        }

    }
</script>