<template>
<div class="col-lg-12">
    <div>
        <textarea name="" id="" cols="30" rows="10" v-model="message" class="form-control form-text"></textarea>
        <input type="button" value="ارسال پیام" @click="sendMessage" class="btn btn-info">
    </div>
</div>
</template>

<script>
    export default {
        name: "message",
        data() {
            return{
                message:'سلام این اولین پیام من خواهد بود'
            }
        },
        methods:{
            sendMessage() {
                axios({
                    method: 'post',
                    url: '/sendMessage',
                    data: {
                        'from' : 1,
                        'to': 2,
                        'message': this.message
                    }
                }).then((response) => {
                    console.log(response);
                });
            }
        }
    }
</script>

<style scoped>

</style>
