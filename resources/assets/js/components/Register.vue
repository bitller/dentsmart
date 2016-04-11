<template>

    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center logo">
            <span class="auth-logo-icon glyphicon glyphicon-tag"></span>&nbsp;
            <span class="auth-logo">SmartDent</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="well custom-well">

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                        <div class="col-md-12 text-center new-account">
                            <h2 class="blue-grey-text">Cont nou</h2>
                        </div>

                        <div v-show="error" class="col-md-12">
                            <div class="alert alert-danger">{{ error }}</div>
                        </div>

                        <div class="col-md-12">
                            <!-- BEGIN First name -->
                            <div class="form-group">
                                <input @keyup.enter="register" v-model="first_name" :class="{ 'custom-input-error': errors.first_name }" type="text" class="form-control input-lg custom-input" placeholder="Prenumele dumneavoastră">
                                <span v-show="errors.first_name" class="text-danger">{{ errors.first_name }}</span>
                            </div>
                            <!-- END First name -->

                            <!-- BEGIN Last name -->
                            <div class="form-group">
                                <input @keyup.enter="register" v-model="last_name" :class="{ 'custom-input-error': errors.last_name }" type="text" class="form-control input-lg custom-input" placeholder="Numele dumneavoastră">
                                <span v-show="errors.last_name" class="text-danger">{{ errors.last_name }}</span>
                            </div>
                            <!-- END Last name -->

                            <!-- BEGIN Email -->
                            <div class="form-group">
                                <input @keyup.enter="register" v-model="email" :class="{ 'custom-input-error': errors.email }" type="text" class="form-control input-lg custom-input" placeholder="Adresa dumneavoastră de email">
                                <span v-show="errors.email" class="text-danger">{{ errors.email }}</span>
                            </div>
                            <!-- END Email -->

                            <!-- BEGIN Cabinet name -->
                            <div class="form-group">
                                <input @keyup.enter="register" v-model="cabinet_name" :class="{ 'custom-input-error': errors.cabinet_name }" type="text" class="form-control input-lg custom-input" placeholder="Numele cabinetului">
                                <span v-show="errors.cabinet_name" class="text-danger">{{ errors.cabinet_name }}</span>
                            </div>
                            <!-- END Cabinet name -->

                            <!-- BEGIN Password -->
                            <div class="form-group">
                                <input @keyup.enter="register" v-model="password" :class="{ 'custom-input-error': errors.password }" type="password" class="form-control input-lg custom-input" placeholder="Alegeți o parolă pentru contul dumneavostră">
                                <span v-show="errors.password" class="text-danger">{{ errors.password }}</span>
                            </div>
                            <!-- END Password -->
                        </div>

                        <div class="col-md-12">
                            <div @click="register" class="btn btn-success btn-block btn-lg">Creează contul</div>
                        </div>

                        <div class="col-md-12">
                            <h5 class="light-grey-text">Continuând, sunteţi de acord cu <a href="/terms">Termenii și Condițiile</a> noastre.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <span class="white-text">Deja aveți cont? <a href="/login"><strong>Conectați-vă</strong></a></span>
        </div>
    </div>

</template>
    
<script>
    export default {
        data: function() {
            return {
                first_name: '',
                last_name: '',
                email: '',
                cabinet_name: '',
                password: '',
                loading: false,
                errors: {},
                error: '',
            }
        },

        methods: {
            register: function() {

                this.loading = true;
                var vn = this;

                // Build post data
                var registerData = {
                    _token: $('#token').attr('content'),
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email,
                    cabinet_name: this.cabinet_name,
                    password: this.password
                };

                // Make post request
                this.$http.post('/register',  registerData).then(function(success) {
                    vn.loading = false;
                    window.location.replace('/dashboard');
                }, function(error) {

                    vn.loading = false;

                    // Check if input errors exists
                    if (error.data.errors) {
                        vn.errors = error.data.errors;
                        return;
                    }

                    // Check if another error was returned
                    if (error.data.error) {
                        vn.error = error.data.error;
                        return;
                    }

                    // A server error occurred if we arrive here
                    vn.error = 'O eroare a avut loc. Reîmporspătează pagina și încearcă din nou.'
                });
            }
        }
    }
</script>