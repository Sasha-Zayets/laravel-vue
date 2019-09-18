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
        axios.get('/api/list')
            .then(({data}) => {
                this.users = {data}.data
            })
    },
   data: () => ({
       users: []
   })
}
</script>

<style lang="scss" scoped>

</style>
