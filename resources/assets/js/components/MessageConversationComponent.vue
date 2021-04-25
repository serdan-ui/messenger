<template>
    <b-media :right-align="!writeenByMe" vertical-align="center" class="mb-2">
        <template #aside>
            <b-img rounded="circle" blank blank-color="#ccc" width="48" alt="placeholder"></b-img>
        </template>
        <b-card >
            <slot></slot>
        </b-card>
    </b-media>
</template>

<script>
    export default {
        props:{
            writeenByMe: Boolean
        },
        data() {
            return {
                
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>