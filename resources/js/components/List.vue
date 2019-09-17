<template>
    <div>
        <ul>
            <li v-for="(user, index) in users" 
                :key="index">
                {{user.name}}
                </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    created () {
        axios.get('https://jsonplaceholder.typicode.com/users')
            .then(({data}) => {
                this.users = data
            })
    },
   data: () => ({
       users: []
   })
}
</script>

<style lang="scss" scoped>
    
</style>