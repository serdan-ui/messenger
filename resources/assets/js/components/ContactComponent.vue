<template>
    <b-list-group-item :variant="variant">
        <b-row class="p-2" align-h="center">
            <b-col cols="12" md="3" class="text-center">
                <b-img v-bind="{ blank: true, blankColor: '#777', width: 75, height: 75, class: 'm1' }" rounded="circle" alt="Circle image"></b-img>
            </b-col>
            <b-col cols="6" align-self="center d-none d-md-block" >
                <p class="mb-1">{{name}}</p>
                <p class="mb-1 text-muted small">{{lastMessage}}</p>
            </b-col>
            <b-col cols="3" class="d-none d-md-block">
                <p class="text-muted small">{{lastTime}}</p>
            </b-col>
        </b-row>
    </b-list-group-item>
</template>

<script>
    export default {
        name:'ContactComponent',
        props:[
            'variant'
        ],
        data(){
            return{
                name: 'Martin Jerez',
                lastMessage: 'Tu: Hola',
                lastTime: '1:37 pm',
            } 
        }
    }
</script>

<style lang="scss" scoped>

</style>