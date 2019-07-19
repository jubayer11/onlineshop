<template>
    <div>
        <section id="aa-popular-category">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="aa-popular-category-area">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li v-for="tag in tags"  @click="createdo(tag);tag1(tag)">  <a :href="href()" data-toggle="tab">{{tag.name}}</a></li>

                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <second-tab-menue :data="target" :data1="product"> </second-tab-menue>
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
    import secondTabMenue from '../secondslide/SecondTabmenue.vue'
    export default {
        data(){
            return {
                product: {},
                tags:{},
                target:{},

            }

        },

        created(){
            axios.get('/api/tag')
                .then(res => this.tags = res.data.data)
                .catch(error => console.log(error.response.data))
        },

        components:{
            'second-tab-menue':secondTabMenue,
        },
        methods:
            {

                tag1(tag){
                    this.target= tag;
                },
                href(){
                    return "#" + this.target.name;
                },
                createdo(tag){
                    axios.get("/api/tag/"+ tag.id)
                        .then(res => this.product= res.data.data)
                        .catch(error => console.log(error.response.data))


                },
            },


    }

</script>
