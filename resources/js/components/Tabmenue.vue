<template>
    <div>
        <div class="tab-pane fade in active" :id="target()">
            <ul class="aa-product-catg">
                <!-- start single product item -->


                <li v-for="data in data1">
                    <figure>
                        <a class="aa-product-img" href="#"><img :src="getproductphoto(data.image)" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                            <h4 class="aa-product-title"><a href="#">{{data.name}}</a></h4>
                            <span class="aa-product-price">{{data.price}}</span><span class="aa-product-price"><del>{{data.price}}</del></span>
                        </figcaption>
                    </figure>
                    <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                    </div>
                    <!-- product badge -->
                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                </li>
            </ul>
            <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
        </div>
    </div>



</template>

<script>

    export default {
        props:['data','data1'],
        data(){
            return {
                products:{},

                abc:1,

            }
        },
        methods:
            {
                target(){
                    return this.data.name;

                },
                getproductphoto(image){
                    return "/uploads/product/" + image;
                }

            }


    }


</script>
