<template>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center blue-grey-text">Prenume <span class="badge pointer" data-toggle="tooltip" title="Numele casierului" data-placement="top">?</span></th>
                            <th class="text-center blue-grey-text">Nume <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                            <th class="text-center blue-grey-text">Număr de telefon <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                            <th class="text-center blue-grey-text">Adresă de email <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                            <th class="text-center blue-grey-text">Creează programare <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td is="patient"></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    
</template>
    
<script>
    
    import Paginator from '../../components/Paginator.vue';
    import Patient from '../../components/patients/Patient.vue';

    export default {
        
        ready: function() {
            this.getPatients();
        },
        
        data: function() {
            return {
                patients: ''
            }
        },
        
        components: {
            'patient': Patient,
            'paginator': Paginator
        }
        
    }
</script>