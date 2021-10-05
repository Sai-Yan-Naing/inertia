<template>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3>Create User</h3>
                <form action="" @submit.prevent="submit">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text" v-model="form.name">
                    </div>
                    <div class="form-group">
                        <label for="">
                            Email
                        </label>
                        <input class="form-control" type="text" v-model="form.email">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input class="form-control" type="text" v-model="form.pass">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <inertia-link href="/user" class="btn btn-outline-secondary float-right">Cancel</inertia-link>
                </form>
            </div>
        </div>
    </div>
</template>
<script>

export default ({
    data(){
        return{
           form:{
                name:'',
                eamil:'',
                pass:''
           }
        }
    },
    methods:{
        submit(){
            this.$inertia.post('/user',this.form)
        }
    }
})
</script>
