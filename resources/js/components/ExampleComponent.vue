<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <button @click="login">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    axios.defaults.withCredentials = true;
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            login(){
                   axios.get('/sanctum/csrf-cookie').then(response => {
                   console.log(response);  
                   axios.post('/api/login',{
                       email:'sanjith.das@gmail.com',
                       password: 'password'
                   }).then(res=>{
                       localStorage.setItem
                       console.log(res);
                   })   
            });
            }
        }
    }
</script>
