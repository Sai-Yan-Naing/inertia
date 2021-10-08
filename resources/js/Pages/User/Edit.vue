<template>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3>Edit A User</h3>
                <user-form :user='user' :errors="errors" @submit="submit"></user-form>
            </div>
        </div>
    </div>
</template>
<script>
import UserForm from "./UserForm.vue";
export default ({
    components:{
        UserForm,
    },
    props:['user','errors'],
    methods:{
        submit(form){
            this.$inertia.put(`/user/${this.user.id}`,form)
        }
    }
})
</script>
