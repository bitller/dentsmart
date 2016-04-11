<template>

<div class="row">
    <div class="col-md-4 col-md-offset-4 text-center logo">
        <span class="auth-logo-icon glyphicon glyphicon-tag"></span>&nbsp;
        <span class="auth-logo">DentSmart</span>
    </div>
</div>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="well custom-well">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="col-md-12 text-center new-account">
                        <h2 class="blue-grey-text">Conectați-vă</h2>
                    </div>

                    <div v-show="error" class="col-md-12">
                        <div class="alert alert-danger">{{ error }}</div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input v-model="email" @keyup.enter="login" :class="{ 'custom-input-error': errors.email }" type="text" class="form-control input-lg custom-input" placeholder="Adresa dumneavoastră de email">
                            <span v-show="errors.email" class="text-danger">{{ errors.email }}</span>
                        </div>
                        <div class="form-group">
                            <input v-model="password" @keyup.enter="login" :class="{ 'custom-input-error': errors.password }" type="password" class="form-control input-lg custom-input" placeholder="Parola contului">
                            <span v-show="errors.password" class="text-danger">{{ errors.password }}</span>
                        </div>
                        <div @click="login" class="btn btn-success btn-block btn-lg">Conectați-vă</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 text-center">
        <span class="white-text"><a href="/register"><strong>Nu aveți cont?</strong></a></span>
    </div>
</div>

</template>

<script>
    export default {
        
        data: function () {
            return {
                token: $('#token').attr('content'),
                loading: false,
                email: '',
                password: '',
                errors: {},
                error: ''
            }
        },
        
        methods: {
            login: function() {

                var vn = this;
                var postData = {
                    _token: this.token,
                    email: this.email,
                    password: this.password
                }

                // Do post request
                this.$http.post('/login', postData).then(function(success) {
                    window.location.replace('/dashboard');
                }, function(error) {

                    // Check if input errors are present
                    if (error.data.errors) {
                        vn.errors = error.data.errors;
                        return;
                    }

                    // Check if is other error message
                    if (error.data.error) {
                        vn.error = error.data.error;
                        return;
                    }

                    // Show default one
                    vn.error = 'An error occurred. Refresh the page and try again.';
                });
            },
        }

    }
</script>