<template>
    <div>
        <section id="aa-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="aa-product-area">
                                <div class="aa-product-inner">
                                    <!-- start prduct navigation -->
                                    <ul class="nav nav-tabs aa-products-tab">
                                       <toolbar></toolbar>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Start men product category -->
                                        <router-view>
                                        </router-view>

                                        <!-- / men product category -->

                                    </div>
                                    <!--quick view modal-->
                                    <quick-view> </quick-view>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    import toolbar from './Toolbar.vue';
    import tabMenue from './Tabmenue.vue';
    import quickView from './quickView.vue';
    export default {
        components:{tabMenue,quickView,toolbar},
        data(){
            return {
                categories:[
                    {name:"Men",to:"/men",show: true},
                    {name:"WoMen",to:"/Women"},
                    {name:"Sports",to:"/men"},
                    {name:"Electricity",to:"/men"}
                ]
            }
        },

    }



</script>
<style>

</style>
