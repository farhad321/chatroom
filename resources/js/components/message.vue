<template>
<div class="col-lg-12">
    <div>
        <textarea name="" id="" cols="30" rows="10" v-model="message"></textarea>
        <input type="button" value="ارسال پیام" @click="sendMessage" class="btn btn-info">
    </div>
</div>
</template>

<script>
    export default {
        name: "message",
        methods:{
            sendMessage() {
axios.post('/sendMessage')
            }
        }
    }
</script>

<style scoped>

</style>
