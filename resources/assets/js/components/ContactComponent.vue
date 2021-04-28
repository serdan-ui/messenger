<template>
    <b-list-group-item :variant="variant">
        <b-row class="p-2" align-h="center">
            <b-col cols="12" md="3" class="text-center">
                <b-img v-bind="{ blank: true, blankColor: '#777', width: 75, height: 75, class: 'm1' }" rounded="circle" alt="Circle image"></b-img>
            </b-col>
            <b-col cols="6" align-self="center d-none d-md-block" >
                <p class="mb-1">{{conversation.contact_name}}</p>
                <p class="mb-1 text-muted small">{{conversation.last_message}}</p>
            </b-col>
            <b-col cols="3" class="d-none d-md-block">
                <p class="text-muted small">{{conversation.last_time}}</p>
            </b-col>
        </b-row>
    </b-list-group-item>
</template>

<script>
    export default {
        name:'ContactComponent',
        props:{
            variant: String,
            conversation : Object
        },
        data(){
            return{
            } 
        }
    }
</script>

<style lang="scss" scoped>

</style>