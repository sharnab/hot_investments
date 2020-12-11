<template>
    <div>
        <div class="search_widget widget">
            <div class="heading2">
                <h3>Search properties</h3>
            </div>
            <div class="search-form">
                <form id="searchProperty" name="searchProperty" method="get" @submit.prevent="searchProperty" class="form-inline">
                <!-- <form action="properties.html"  method="get" class="form-inline"> -->
                    <div class="search-form-content">
                        <div class="search-form-field">
                            <div class="form-group col-md-12" style="margin-bottom: 0px">
                                <div class="label-select">
                                    <select class='form-control' v-model='location' @change='getLocations()'>
                                        <option value='0' selected>All Locations</option>
                                        <option v-for='data in locations' :value='data.id'>{{ data.name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12" style="margin-bottom: 0px">
                                <div class="label-select">
                                    <select class="form-control" v-model="property_type" name="s_property_type">
                                       <option v-for="property_type in property_types"
                                               :value="property_type"
                                               >{{ property_type }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12" style="margin-bottom: 0px">
                                <div class="label-select">
                                    <select class="form-control" v-model="bedroom_no" name="s_bedroom_no">
                                       <option v-for="bedroom_no in bedrooms"
                                               :value="bedroom_no"
                                               >{{ bedroom_no }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12" style="margin-bottom: 0px">
                                <div class="label-select">
                                    <select class="form-control" v-model="bathroom_no" name="s_bathroom_no">
                                       <option v-for="bathroom_no in bathrooms"
                                               :value="bathroom_no"
                                               >{{ bathroom_no }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12" style="margin-bottom: 0px">
                                <div class="label-select">
                                    <select class="form-control" v-model="furnishing_status" name="s_furnishing_status">
                                       <option v-for="furnishing_status in furnishing_statuses"
                                               :value="furnishing_status"
                                               >{{ furnishing_status }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12" style="margin-bottom: 0px">
                                <div class="label-select">
                                    <select class="form-control" v-model="construction_status" name="s_construction_status">
                                       <option v-for="con_status in con_statuses"
                                               :value="con_status"
                                               >{{ con_status }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12" style="margin-bottom: 0px">
                                <span class="gprice-label">Price</span>
                                <vue-range-slider :width = '1200' :tooltip-style="tooltipStyle" :process-style="processStyle" v-model="price" :min="min_price" :max="max_price"></vue-range-slider>
                                <!-- <input type="text" v-model="minArea" class="form-control col-md-6" value="" id="min-area" style="width: 50% !important">
                                <input type="text" v-model="maxArea" class="form-control col-md-6" value="" id="max-area" style="width: 50% !important"> -->
                            </div>
                            <div class="form-group col-md-12" style="margin-bottom: 0px">
                                <span class="garea-label">Super Built Up Area</span>
                                <div id="app" style="padding-top: 12px">
                                    <div class="app-content">
                                        <vue-range-slider :width = '1200' :tooltip-style="tooltipStyle" :process-style="processStyle" v-model="area" :min="min_area" :max="max_area"></vue-range-slider>
                                    <!-- <AreaRangeSlider :minArea="minArea" :maxArea="maxArea" @update:minArea="value => minArea = value" @update:maxArea="value => maxArea = value"></AreaRangeSlider> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12" style="margin-bottom: 0px">
                                <div class="label-select">
                                    <select class="form-control" v-model="enlister" name="s_enlister">
                                       <option v-for="enlister in enlisters"
                                               :value="enlister"
                                               >{{ enlister }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search-form-submit">
                        <button type="submit" class="btn-search">Search</button>
                    </div>
                </form>
            </div><!-- Services Sec -->
        </div><!-- Category Widget -->
    </div>
</template>

<script>
// import RangeSlider from 'vue-range-slider'
import 'vue-range-component/dist/vue-range-slider.css'
import VueRangeSlider from 'vue-range-component'

export default {
    mounted() {
        // console.log('Component mounted.')
    },
    data(){
        return {
            location: 'All Locations',
            bedroom_no: 'No of Bedroom',
            bedrooms : ['No of Bedroom', '1', '2', '3', '4', '5+'],
            bathroom_no: 'No of Bathroom',
            bathrooms : ['No of Bathroom', '1', '2', '3', '4', '5+'],
            property_type: 'All Property Types',
            property_types: ['All Property Types', 'Duplex', 'Triplex', 'Fourplex'],
            enlister: 'Listed By', // Default value is set here
            enlisters: ['Listed By', 'Builder', 'Dealer', 'Owner'],
            furnishing_statuses: ['Furnishing Status','Furnished','Semi Furnished','Unfurnished'],
            furnishing_status: 'Furnishing Status',
            construction_status: 'Construction Status',
            con_statuses: ['Construction Status','Newly Launched','Ready To Move','Under Construction'],
            post: {},
            location: 0,
            locations: [],
            area: [0, 6000],
            price: [0, 5000000],
            minArea: 0,
            maxArea: 6000,
            minPrice: 0,
            maxPrice: 5000000,
        }
    },
    components: {
        VueRangeSlider
    },
    methods: {
        getLocations: function(){
          axios.get('/api/getLocations')
          .then(function (response) {
             this.locations = response.data;
          }.bind(this));
        },
        searchProperty(formData=null, index=null, fileList=null) {
            this.post.construction_status = this.construction_status;
            this.post.enlister = this.enlister;
            this.post.minPrice = this.price[0];
            this.post.maxPrice = this.price[1];
            this.post.minArea = this.area[0];
            this.post.maxArea = this.area[1];
            this.post.fileList = fileList;
            if(this.post.s_property_type){
                let uri = '/seller/store';
                this.axios.post(uri, this.post).then((response) => {
                    this.$router.push({
                        name: 'home'
                    });
                });
            }
        },
        // onChangeEnlister(event) {
        //     console.log(event.target.value);
        //     this.post.enlister = event.target.value;
        // }
    },
    created: function(){
        this.getLocations(),
        this.min_area = 0
        this.max_area = 6000
        this.min_price = 0
        this.max_price = 5000000
        this.bgStyle = {
            backgroundColor: '#fff',
            boxShadow: 'inset 0.5px 0.5px 3px 1px rgba(0,0,0,.36)'
        }
        this.tooltipStyle = {
            backgroundColor: '#c94046',
            borderColor: '#666'
        }
        this.processStyle = {
            backgroundColor: '#c94046'
        }
    },
}

</script>

<style>
.label-select{
    width: 18%;
}
</style>
