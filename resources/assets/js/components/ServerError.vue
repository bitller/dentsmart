<template>
    <div class="col-md-12">
        <div v-show="error" class="alert alert-danger">{{ error }}</div>
    </div>
</template>

<script>
    export default {
        props: ['error']
    }
</script>