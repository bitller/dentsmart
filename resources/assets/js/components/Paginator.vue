<template>
    <div class="col-md-12 text-center">
        <ul class="pagination">
            <li v-for="n in total" :class="{ 'active': n+1===current_page }">
                <a @click="paginatorLinkClicked(n+1)" href="#">{{ n + 1 }}</a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {

        props: ['total', 'current_page'],

        methods: {
            paginatorLinkClicked: function(pageNumber) {
                this.$dispatch('pagination_link_clicked', pageNumber);
            }
        }
    }
</script>