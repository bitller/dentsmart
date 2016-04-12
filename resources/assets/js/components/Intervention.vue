<template>
    <td class="vert-align text-center">{{ name }}</td>
    <td class="vert-align text-center">{{ price }}</td>
    <td class="vert-align text-center"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Editează intervenție</button></td>
    <td class="vert-align text-center"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Șterge intervenție</button></td>
</template>
    
<script>
    export default {
        props: ['name']
    }
</script>