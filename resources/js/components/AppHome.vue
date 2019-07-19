<template>
    <div>
        <!-- Products section -->
        <section id="aa-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="aa-product-area">
                                <div class="aa-product-inner">
                                    <!-- start prduct navigation -->
                                    <ul class="nav nav-tabs aa-products-tab">
                                       <li   v-for="category in categories" @click="createdo(category);category1(category)"><a :href="href()" data-toggle="tab">{{category.name}}</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Start men product category -->
                                        <tab-menue :data="target" :data1="products"> </tab-menue>

                                        <!-- / men product category -->
                                    </div>
                                    <!-- quick view modal -->
                                    <quick-view> </quick-view>
                                    <!-- / quick view modal -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Products section -->
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
                target:{},
                categories:{},
                products:{},

            }

        },
        created(){
            axios.get('/api/category')
                .then(res => this.categories = res.data.data)
                .catch(error => console.log(error.response.data))
        },

       methods:
            {

                category1(category){
                    this.target= category;

                },
                href(){
                    return "#" + this.target.name;
                },
                createdo(category){
                    axios.get("/api/category/"+ category.id)
                        .then(res => this.products = res.data.data)
                        .catch(error => console.log(error.response.data))


                },
            },

    }
</script>
<style>

</style>
