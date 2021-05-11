<template>
    <form
        method="post"
        role="form"
        class="php-email-form">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="username" v-model="username" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate" style="display: block;"> {{ errors.username }} </div>
            </div>
            <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" v-model="email" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate" style="display: block;">{{ errors.email }}</div>
            </div>
        </div>
        <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" v-model="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate" style="display: block;">{{ errors.subject }}</div>
        </div>
        <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" v-model="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
            <div class="validate" style="display: block;">{{ errors.message }}</div>
        </div>
<!--        <div class="mb-3">-->
<!--            <div class="loading" v-if="loading"></div>-->
<!--        </div>-->
        <div class="text-center"><button type="submit" @click="sendMessage">
            <span class="load-msg" v-if="loading">
                 <i class="fa fa-spinner fa-spin fa-3x fa-fw" style="font-size:20px"></i><span class="sr-only">Loading...</span>
            </span>
            Send Message</button></div>
    </form>
</template>
<script lang='ts' >
import { defineComponent } from 'vue'
import { createToast } from 'mosha-vue-toastify';
import 'mosha-vue-toastify/dist/style.css'
export default {
    name:'contact-form',
    data(){
        return{
            username:'',
            email:'',
            subject:'',
            message:'',
            loading:false,
            errors:{
                username:'',
                email:'',
                subject:'',
                message:'',
            },
            projects:''
        }
    },
    methods:{
         sendMessage(event){
            self=this
            this.loading= true;
            event.preventDefault();
            let formData = new FormData();
            formData.append("username", this.username);
            formData.append("email", this.email);
            formData.append("subject", this.subject);
            formData.append("message", this.message);
             this.callApi('post',`${window.location.href}/contact-us`,formData)
                .then(result => {
                    this.username = '';
                    this.email = '';
                    this.subject = '';
                    this.message = '';
                    if (result.status === 200) {
                        this.loading=false;
                        createToast(result.data.msg, {
                            type:'success',
                            timeout:5000,
                            showIcon:true
                        });
                    } else {
                        this.loading=false;
                        let error = 'something went wrong Kindly Try Again'
                        createToast(error, {
                            type:'danger',
                            timeout:5000,
                            showIcon:true
                        });
                    }
                })
                .catch(error => {
                    this.loading=false;
                    createToast(error.response.data.message, {
                        type:'danger',
                        timeout:5000,
                        showIcon:true
                    });
                    $.each(error.response.data.errors, function(key, value) {
                        switch(key) {
                            case 'username':
                                self.errors.username = value[0].toString()
                                break;
                            case 'email':
                                self.errors.email = value[0].toString()
                                break;
                            case 'subject':
                                self.errors.subject = value[0].toString()
                                break;
                            case 'message':
                                self.errors.message = value[0].toString()
                                break;

                        }
                    });
                });
        },
    }
}
</script>
