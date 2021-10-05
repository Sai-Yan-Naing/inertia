<template>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-3">User Lists</h1>
            </div>
            <div class="col-12" v-if="success">
                <div class="alert alert-success">
                    {{success}}
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-6">
                <inertia-link :href="'/user/create'" class="btn btn-primary">Create</inertia-link>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Date</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <td>{{user.id}}</td>
                            <td>{{user.name}}</td>
                            <td>{{user.email}}</td>
                            <td>{{user.created_at}}</td>
                            <td>
                                <a href="#" class="btn btn-success">Edit</a>
                                <button @click="destroy(user.id)" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:['users','success'],
    methods:{
        destroy(id){
            this.$inertia.delete(`/user/${id}`);
        },
        // create()
    }
}
</script>
