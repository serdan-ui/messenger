<template>
   <b-row class="h-100">
            <b-col cols="8">
                 <b-card
                    footer-bg-variant="light"
                    footer-border-variant="dark"
                    title="Conversation activa"
                    class="h-100"
                    >
                    <message-conversation v-for="message in messages" :key="message.id" :writeen-by-me="message.written_by_me">
                        {{message.content}}
                    </message-conversation>
                    <div slot="footer"> 
                        <b-form @submit.prevent="postMessage" class="mb-0" autocomplete='off'>
                            <b-input-group>
                                    <b-form-input type="text" 
                                    placeholder="Escribe un mensaje ..." 
                                    v-model="newMessage"
                                    class="text-center">
                                    </b-form-input>
                                <b-input-group-append>
                                    <b-button type="submit" variant="primary">Enviar</b-button>
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
        name:'ActiveConversation',
        data() {
            return {
            messages: [],
            newMessage :'',
            contact_id: 2  
            }
        },
        methods: {
           getMessages() {
                axios.get(`/api/messages?contact_id=${this.contact_id}`)
                    .then((response) => this.messages = response.data)
           },
           postMessage() {
               const params = {
                   to_id:this.contact_id,
                   content: this.newMessage
               }
               axios.post('/api/messages', params )
               .then(resp => {;
               if(resp.data.success){
                   this.newMessage = '';
                   this.getMessages()
               }
               })
           }
        },
        mounted() {
          this.getMessages()
        },
    }
</script>

<style lang="scss" scoped>

</style>