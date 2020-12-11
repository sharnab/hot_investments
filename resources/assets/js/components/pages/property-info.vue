<template>
<div>
    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 column">
                            <div class="single-post-sec">
                                <div class="blog-post property-post">
                                    <div class="property-gallery">
                                        <div class="light-slide-item">
                                            <div class="favorite-and-print">
                                                <vue-flux :options="vfOptions" :images="vfImages" :transitions="vfTransitions" :captions="vfCaptions" :allowFullscreen="true" ref="slider">

                                                    <template v-slot:preloader>
                                                        <flux-preloader />
                                                    </template>

                                                    <template v-slot:caption>
                                                        <flux-caption />
                                                    </template>

                                                    <template v-slot:controls>
                                                        <flux-controls />
                                                    </template>

                                                    <template v-slot:pagination>
                                                        <flux-pagination />
                                                    </template>

                                                    <template v-slot:index>
                                                        <flux-index />
                                                    </template>
                                                </vue-flux>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-12" style="">
                                            <div class="pull-left property_name" style="margin-top: 5%; font-weight: bold; ">{{ laravelData.title }}</div>
                                            <div class="pull-right property_date" style="margin-top: 5%; ">Posted on: 04 Aug 2020 <a class='bookmark' :href="bookmarkProperty()"><i class="fa fa-bookmark"></i></a></div>
                                        </div>
                                        <div class="col-md-12 address_block">
                                            <div class="pull-left property_address" style="font-weight: 400; "><i class='fa fa-map-marker' style="color: #c94046; padding-right: 5px"></i>{{ laravelData.location.address }}</div>
                                            <div class="pull-right">
                                                <image-rating :src="src" :item-size="20" :rating='laravelData.hotLevel' :read-only="true" :inline="true"></image-rating><span style="margin-bottom: 4px">/5</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="pull-left property_price" style="margin-top: 1%; margin-bottom: 2%; font-weight: 700; ">Price : ${{ laravelData.price }}</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12" style="border: 0px solid red; border-radius: 10px; background-color: #f5f5f5">
                                            <div class="col-md-4 col-xs-4" style="padding-left: 5%; padding-top: 2%; padding-bottom: 2%">
                                                <div class="facilities" style="color: #c94046">Property Type</div>
                                                <div class="facilities">{{ laravelData.propertyType}}</div>
                                            </div>
                                            <div class="col-md-4 col-xs-4" style="padding-left: 7%; padding-top: 2%; padding-bottom: 2%">
                                                <div class="facilities" style="color: #c94046">Lot Size</div>
                                                <div class="facilities">{{ laravelData.lotSize}} Sqft</div>
                                            </div>
                                            <div class="col-md-4 col-xs-4" style="padding-left: 10%; padding-top: 2%; padding-bottom: 2%">
                                                <div class="facilities" style="color: #c94046">Property Size</div>
                                                <div class="facilities">{{ laravelData.propertySize}} Sqft</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12" style="padding-left: 0px; padding-right: 0px;">
                                            <div class="col-md-5 col-xs-5 facilities" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                <span style="color: #c94046">Location</span>
                                                <span class="pull-right" style="padding-right: 5%">{{ laravelData.location.description }}</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities pull-right" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                <span style="color: #c94046">Bedrooms</span>
                                                <span class="pull-right" style="padding-right: 5%">{{ laravelData.bedrooms}}</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%; margin-bottom: 2%">
                                                <span style="color: #c94046">Walkability</span>
                                                <span class="pull-right" style="padding-right: 5%">{{ laravelData.walkability}}</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities pull-right" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                <span style="color: #c94046">Facing</span>
                                                <span class="pull-right" style="padding-right: 5%">{{ laravelData.facing}}</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities pull-right" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                <span style="color: #c94046">Total Monthly Rent</span>
                                                <span class="pull-right" style="padding-right: 5%">{{ laravelData.totalMonthlyRent }}</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-bottom: 2%">
                                                <span style="color: #c94046">Propert Type</span>
                                                <span class="pull-right" style="padding-right: 5%">{{ laravelData.propertyType }}</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities pull-right" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                <span style="color: #c94046">Building Year</span>
                                                <span class="pull-right" style="padding-right: 5%">{{ laravelData.yearBuilt }}</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-bottom: 2%">
                                                <span style="color: #c94046">Crime Score</span>
                                                <span class="pull-right" style="padding-right: 5%">{{ laravelData.crimeScore }}</span>
                                            </div>
                                        <!-- </div> -->
                                            <!-- <div class="property-detail">

                                                <div class="detail-field row">

                                                    <span class="col-xs-6 col-md-5 detail-field-label"></span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value"></span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label"></span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value"></span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Price</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label"></span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value"></span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Bathrooms</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">3</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Lot Area</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">880 ftsq</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Year Built</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">2002</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Flooring</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">Stone</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Roofling</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">Tile</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Parking</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">5 slots</span>
                                                </div>

                                            </div> -->
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ laravelData.description }}</p>
                                        </div>
                                    </div>

                                    <div class="property-map">
                                        <div class="heading3">
                                            <h3>Find this property on the map </h3>
                                        </div>
                                        <div class="property_google_map">
                                            <gmap-map :center="{lat:parseFloat(laravelData.location.coordinates[0]), lng:parseFloat(laravelData.location.coordinates[1])}" :zoom="7" style="width: 100%; height: 320px">
                                                <gmap-marker :position="{lat:parseFloat(laravelData.location.coordinates[0]), lng:parseFloat(laravelData.location.coordinates[1])}" :draggable="false" :clickable="false"></gmap-marker>
                                            </gmap-map>
                                        </div>
                                    </div>

                                </div><!-- Blog Post -->
                            </div><!-- Blog POst Sec -->
                        </div>
                        <aside class="col-md-4 column">

                            <div class="agent_bg_widget widget">
                                <div class="agent_widget">
                                    <div class="agent_pic">
                                        <a href="agent.html" title="">
                                            <img :src="enlister_img" alt="" />
                                            <h5>{{ laravelData.seller.name }}</h5>
                                        </a>
                                    </div>

                                    <!-- <div>
                                        <span><i class="fa fa-phone"> </i> +1 9090909090</span>
                                    </div>
                                    <div>
                                        <span><i class="fa fa-envelope"> </i> agent@company.com</span>
                                    </div> -->

                                    <!-- <a href="agent.html" title="" class="btn contact-agent">Find more</a> -->
                                    <a href="agent.html" title="" class="btn contact-agent" style="background-color: black; margin: 10px; margin-top: 20px"><i class="fa fa-comments-o"></i> Message Seller</a>
                                    <a href="agent.html" title="" class="btn contact-agent" style="margin: 10px"><i class="fa fa-money"></i> Make Offer</a>
                                </div>
                            </div><!-- Follow Widget -->

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
</template>


<script>
import PropertySearch from '../search-property';
import {ImageRating} from 'vue-rate-it';

import {
    VueFlux,
    FluxCaption,
    FluxControls,
    FluxIndex,
    FluxPagination,
    FluxPreloader,
} from 'vue-flux';

// vfOptions: width: 80%;


export default {
    mounted() {

        //Break the path into segments
        var segments = window.location.pathname.split("/");

        // Return the segment that has the ID Fetch initial results
        this.getResults(segments[3]);
        // this.$refs.mapRef.$mapPromise.then((map) => {
        //     map.panTo({lat: 1.38, lng: 103.80})
        //   })
    },
    data() {
        return {
            src: '../../assets/client/img/flame.jpg',
            enlister_img: '../../assets/client/img/demo/man1.jpg',
            property: 0,
            laravelData: {},
            vfOptions: {
                autoplay: true,
                width: 1200
            },
            vfImages: [
                // '../../assets/client/img/demo/property1.jpg',
                // '../../assets/client/img/demo/property2.jpg',
                // '../../assets/client/img/demo/property3.jpg',
                // '../../assets/client/img/demo/property4.jpg',
                // '../../assets/client/img/demo/property5.jpg',
                // '../../assets/client/img/demo/property6.jpg',
                // '../../assets/client/img/demo/property7.jpg',
                // '../../assets/client/img/demo/property8.jpg',
                // 'http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/img/property/property-1602258824441-169754559.jpeg'
            ],
            vfTransitions: ['cube'],
            vfCaptions: [
                // 'Caption for image 1',
                // 'Caption for image 2',
                // 'Caption for image 3',
            ],
        }
    },
    components: {
        PropertySearch,
        VueFlux,
        FluxCaption,
        FluxControls,
        FluxIndex,
        FluxPagination,
        FluxPreloader,
        ImageRating
    },
    methods: {
        getResults(id) {
            axios.get('/property/getSingleProperty/' + id)
                .then(response => {
                    this.laravelData = response.data.property;
                    let list=[];
                    let img_address='';

                    $.each(response.data.property.photos, function(key, value) {
                        img_address = 'http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/' + value;
                        list.push(img_address);
                        // vfImages.prop(img_address);
                    });

                    this.vfImages = list;
                    // this.vfImages = ['http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/img/property/property-1602258824441-169754559.jpeg'];
                });
        },
        bookmarkProperty: function() {
            $('.spn-save').css('background', '#c94046');
        },
    },
}
</script>

<style>
.bookmark{
    color: grey;
}

@media screen and (min-width: 500px) {
    .vue-flux {
        width: 100%;
        height: 47%;
    }
}

@media screen and (min-width: 601px) {
    div.property_name{
        font-size: 25px
    }
    div.property_address{
        font-size: 16px
    }
    div.property_price{
        font-size: 18px
    }
}

/* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
@media screen and (max-width: 600px) {
    div.property_name{
        font-size: 18px;
    }
    div.property_address{
        font-size: 12px;
    }
    div.property_price{
        font-size: 14px;
    }
    div.address_block{
        margin-top: 50px;
    }
    div.facilities{
        font-size: 10px;
    }
}
</style>
