<template>
   <b-row class="h-100">
            <b-col cols="8">
                 <b-card
                    footer-bg-variant="light"
                    footer-border-variant="dark"
                    title="Conversation activa"
                    class="h-100"
                    >
                    <b-media vertical-align="center" class="mb-2">
                        <template #aside>
                        <b-img rounded="circle" blank blank-color="#ccc" width="48" alt="placeholder"></b-img>
                        </template>
                        <b-card >
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                        Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                        nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </b-card>
                    </b-media>
                    <b-media right-align vertical-align="center" class="mb-2">
                        <template #aside>
                        <b-img rounded="circle" blank blank-color="#ccc" width="48" alt="placeholder"></b-img>
                        </template>
                        <b-card >
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                        </b-card>
                    </b-media>
                    <div slot="footer"> 
                        <b-form class="mb-0">
                            <b-input-group>
                                    <b-form-input type="text" placeholder="Escribe un mensaje ..." class="text-center">
                                    </b-form-input>
                                <b-input-group-append>
                                    <b-btn variant="primary">Enviar</b-btn>
                                </b-input-group-append>    
                            </b-input-group>
                        </b-form>
                    </div>
                </b-card>
            </b-col>
            <b-col cols="4">
                <b-img rounded="circle" blank width="75" height="75" blank-color="#777" alt="img" class="mb-1" />
                <p>Usuario Seleccionado</p>
                <hr>
                <b-form-checkbox>
                    Desactivar Notificaciones
                </b-form-checkbox>
        </b-col>
    </b-row>
</template>

<script>
    export default {
        name:'ActiveConversation'
    }
</script>

<style lang="scss" scoped>

</style>