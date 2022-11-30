<template>
   
<div class="row">
    <div class="col-sm-12 col-md-8 ml-auto mr-auto">
        <div class="row justify-content-around">
            <div class="col-6" v-for="product in products" v-bind:key="product.id">
                <div class="gifts-main-section mt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-img">
                                <a href="" class="">
                                    <img :src="getpic()+product.logo" alt="Birthday" class="first-img gift-img" />
                                    <img :src="getpic()+product.logo" alt="Birthday" class="hover-img gift-img" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 class="gifts-title"><a href="/gift-by-occasion/birthday" class="">{{ product.name }}</a></h4>
                            <!-- <p>{{ product.logo }}</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</template>

<script>

import axios from 'axios'
export default {
    data() {
        return {
            products: [],
            product: {
                id: '',
                name: '',
                status: '',
                logo: '',
                imageUrl: '',
            },
        }
    },
    created() {
        this.fetchGifts();
        // this.$http
        //     .get('http://localhost:8000/api/products/')
        //     .then(response => {
        //         this.products = response.data;
        // });
    },
    methods: {
        getpic() {
            let url = "http://localhost:8000/images/";

            return url;
        },
        fetchGifts(page_url) {
            let vm = this;
            page_url = 'api/gifts'
            fetch(page_url)
            .then(res => res.json())
            .then(res => {
                this.products = res.data;
            })
            .catch(err => console.log(err));
        }
    }
}
</script>
<style>
a{
    text-decoration: none;
    color: #fff;
}
.landing-gifts-title-tag {
    border: 1px solid #573276e0;
    background: #573276e0;
    color: #f6c6fb;
    /* font-family: Comic Sans MS, Comic Sans, cursive !important; */
    font-family: Comic Sans MS, Comic Sans !important;
    width: 35%;
    margin-left: auto;
    margin-right: auto;
    padding-top: 10px;
    padding-bottom: 10px;
    box-shadow: 1px 1px 5px 6px #a43ff585;
}
.gifts-main-section {
    border: 3px solid #573276;
    border-radius: 12px;
    background: #573276;
}
.gifts-title {
    /* margin-top: 25%; */
    /* color: #f6c6fb; */
    margin-top: 17%;
    color: #fff;
}
.gift-img {
    border-radius: 8px;
    /* background: #fba2f8; */
    background: #fff;
}
.product-img > a > img.hover-img {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    visibility: visible;
    z-index: 5;
}
.product-img > a > img {
    width: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
</style>
