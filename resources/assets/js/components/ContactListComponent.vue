<template>
    <div>
        <b-form class="my-2 mx-2">
            <b-form-input type="text" placeholder="Buscar contacto ..." class="text-center">
            </b-form-input>
        </b-form>
        <b-list-group>
            <contact-component v-for="conversation in conversations" 
            :key="conversation.id"
            :conversation="conversation"
            @click.native="selectConversation(conversation)"
            ></contact-component>
            <!-- <contact-component variant=""></contact-component>
            <contact-component variant="secondary" ></contact-component> -->
        </b-list-group>
    </div>
</template>

<script>
    export default {
        name:'contact-list',
        data() {
            return {
                conversations : []
            }
        },
        mounted() {
           this.getConversations() 
        },
        methods:{
            getConversations(){
               axios.get('api/conversations')
               .then((response)=> {
                   console.log(response.data)
                   this.conversations = response.data;
               })
            },
            selectConversation(conversation){
                console.log(conversation)
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>