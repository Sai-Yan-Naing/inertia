<template>
  <form action="" @submit.prevent="submit">
    <div class="form-group">
        <label for="">Name</label>
        <input class="form-control" type="text" v-model="form.name" :class="{'is-invalid':errors.name}">
        <label for="name" class="invalid-feedback" v-if="errors.name">{{errors.name}}</label>
    </div>
    <div class="form-group">
        <label for="">
            Email
        </label>
        <input class="form-control" type="text" :class="{'is-invalid':errors.email}" v-model="form.email">
        <label for="email" class="invalid-feedback" v-if="errors.email">{{errors.email}}</label>
    </div>
    <div class="form-group">
        <label for="pass">Password</label>
        <input class="form-control" type="password" :class="{'is-invalid':errors.password}" v-model="form.password">
        <label for="password" class="invalid-feedback" v-if="errors.password">{{errors.password}}</label>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <inertia-link href="/user" class="btn btn-outline-secondary float-right">Cancel</inertia-link>
</form>
</template>

<script>
import UserForm from "./"
export default {
    props:['user','errors'],
data(){
        return{
           form:{
                name:this.user.name,
                email:this.user.email,
                password:''
           }
        }
    },
    methods:{
        submit(){
            this.$emit('submit',this.form)
        }
    }
}

</script>

<style>

</style>
