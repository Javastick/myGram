<template>
    <div class="container">
        <button class="btn btn-primary ms-5" @click='followUser'>Follow</button>
    </div>
</template>

<script>
    export default {
        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        methods:  {
            followUser(){
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        console.log(response.data)
                    })
            }
        }
    }

    
</script>
