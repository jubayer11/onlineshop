<template>
    <div>
        <!-- Start men product category -->
<tabmenue1
   v-for="product in products"
   :key="product.name"
    :data=product>

</tabmenue1>

            <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
        </div>
        <!-- / men product category -->





</template>

<script>
import tabmenue1 from './Tabmenue1.vue';
export default {
    data(){
      return {
          products:{}
      }
    },
    components:{tabmenue1},

    created(){
        axios.get('./api/products')
            .then(res=>this.products = res.data.data)
            .catch(error => console.log('jubayer sdkjfgwefgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgwuuuerer fhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'))
    }

}


</script>
