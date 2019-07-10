<template>
    <div>
        <!-- start prduct navigation -->
        <ul class="nav nav-tabs aa-products-tab">
            <router-link
                    v-for="category in categories"
                    :key="category.name"
                    :to="category.to"
            >
                <li>{{category.name}}</li>

            </router-link>
        </ul>
    </div>
</template>
<script>

    export default {

        data(){
            return {
                categories:[
                    {name:"Men",to:"/men",show: true},
                    {name:"WoMen",to:"/Women"},
                    {name:"Sports",to:"/sports"},
                    {name:"Electricity",to:"/electricity"}
                ]
            }
        },

    }



</script>
<style>

</style>
