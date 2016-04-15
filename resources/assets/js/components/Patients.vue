<template>
    
    <div class="row">
        <div class="col-md-6">
            <h3 class="blue-grey-text">Pacienţi</h3>
        </div>
        <div class="col-md-6">
            <add-new-patient></add-new-patient>
        </div>
    </div>


    <server-error :error="server_error"></server-error>

    <patients-table></patients-table>
        
</template>
        
<script>
        
    import AddNewPatient from '../components/patients/AddNewPatient.vue';
    import PatientsTable from '../components/patients/PatientsTable.vue';

    export default {
        
        components: {
            'add-new-patient': AddNewPatient,
            'patients-table': PatientsTable
        }
        
    }
</script>