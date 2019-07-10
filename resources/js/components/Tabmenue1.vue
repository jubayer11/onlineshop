<template>
    <div>
        <ul class="aa-product-catg">
            <!-- start single product item -->
            <li>
                <figure>
                    <a class="aa-product-img" href="#"><img :src="getproductphoto()" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <figcaption>
                        <h4 class="aa-product-title">{{data.name}}<a href="#"></a></h4>
                        <span class="aa-product-price"> ${{data.price}}</span><span class="aa-product-price"><del>$65.50</del></span>
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
    </div>
</template>
<script>
export default {
    props:['data'],
    methods:{
        getproductphoto(){
            return "/uploads/product/" + this.data.image;
        }
    },

}
</script>
