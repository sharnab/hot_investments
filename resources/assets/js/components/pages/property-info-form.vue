<template>
<div>
    <aside class="col-md-2 column">
        &nbsp;
    </aside>

    <div class="col-md-8 column" style="padding-top: 5%">
        <div class="heading4">
            <h2>SUBMIT PROPERTY</h2>
        </div>

        <div class="submit-content">
            <!-- <form id="new_post" name="new_post" @submit.prevent="processQueue" class="property-form" role="form"> -->
            <form id="new_post" name="new_post" class="property-form" @click="processQueue" role="form">
                <div class="control-group">
                    <div class="group-title">Property Description &amp; Price</div>
                    <div class="group-container row">
                        <div class="col-md-8">
                            <div class="form-group s-prop-title">
                                <label for="title">Title&nbsp;&#42;</label>
                                <input type="text" id="title" class="form-control" value="" name="title_name" v-model="title_name" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-area">
                                <label for="area">Lot Size&nbsp;(sqft)</label>
                                <input type="text" id="lotSize" class="form-control" value="" name="area" v-model="area">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group s-prop-desc">
                                <label for="textarea">Description&nbsp;&#42;</label>
                                <textarea id="textarea" name="desc" rows="10" required="" style="width: 100%; border: 1px solid #ccc; border-radius: 4px" v-model="desc"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="price s-prop-bedrooms">
                                <label for="price">Price&nbsp;&#42;&nbsp;(&#36;)</label>
                                <input type="text" id="price" class="form-control" value="" name="price" required="" v-model="price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-status">
                                <label>Walkability</label>
                                <div class="dropdown label-select" style="width: 100%">
                                    <select class="form-control" name="walkability" v-model="walkability">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-type">
                                <label>Type</label>
                                <div class="dropdown label-select" style="width: 100%">
                                    <select class="form-control" v-model="type" name="type">
                                        <option value="Duplex">Duplex</option>
                                        <option value="Triplex">Triplex</option>
                                        <option value="Fourplex">Fourplex</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-bedrooms">
                                <label for="bedrooms">Bed Rooms</label>
                                <input type="text" id="bedrooms" class="form-control" value="" name="bedrooms" v-model="bedrooms">
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="form-group s-prop-bathrooms">
                                <label for="bathrooms">Bath Rooms</label>
                                <input type="text" id="bathrooms" class="form-control" value="" name="bathrooms" v-model="bathrooms">
                            </div>
                        </div> -->
                        <div class="col-md-4">
                            <div class="form-group s-prop-bathrooms">
                                <label for="bathrooms">Property Size</label>
                                <input type="text" id="propertySize" class="form-control" value="" name="propertySize" v-model="propertySize">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-bedrooms">
                                <label for="bedrooms">Year Built</label>
                                <input type="text" id="yearBuilt" class="date-own form-control" value="" name="yearBuilt" v-model="yearBuilt">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-facing">
                                <label for="facing">Facing</label>
                                <div class="dropdown label-select" style="width: 100%">
                                    <select class="form-control" name="facing" v-model="facing">
                                        <option value="East">East</option>
                                        <option value="West">West</option>
                                        <option value="North">North</option>
                                        <option value="South">South</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-crimeScore">
                                <label for="crimeScore">Crime Score</label>
                                <div class="dropdown label-select" style="width: 100%">
                                    <select class="form-control" v-model="crimeScore">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-bathrooms">
                                <label for="totalMonthlyRent">Total Monthly Rent</label>
                                <input type="text" id="totalMonthlyRent" class="form-control" value="" name="totalMonthlyRent" v-model="totalMonthlyRent">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="group-title">Property Images</div>
                    <div class="group-container row">
                        <!-- v-on:vdropzone-success="uploadSuccess"
                        v-on:vdropzone-error="uploadError" -->
                        <div class="col-md-12" style="height: 50%">
                            <vue-dropzone
                            ref="myVueDropzone"
                            id="dropzone"
                            :options="dropzoneOptions"
                            :useCustomSlot="true"
                            vdropzone-success-multiple="uploadSuccess"
                            v-on:vdropzone-processing-multiple="true"
                            v-on:vdropzone-removed-file="fileRemoved"
                            v-on:vdropzone-sending-multiple="sendingEvent">
                            <div class="dropzone-custom-content">
                                <h3 class="dropzone-custom-title">Drag and drop to upload content!</h3>
                                <div class="subtitle">...or click to select a file from your computer</div>
                            </div>
                            </vue-dropzone>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="group-title">Listing Location</div>
                    <div class="group-container row">
                        <div class="col-md-6">
                            <div class="form-group s-prop-address">
                                <label for="address">Address&nbsp;&#42;</label>
                                <textarea id="address" class="form-control" v-model="address" name="address" rows="1" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group s-prop-location">
                                <label>Location</label>
                                <div class="dropdown label-select" style="width: 100%">
                                    <select class="form-control" v-model="location_name">
                                        <option>New Jersey</option>
                                        <option>New York</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group s-prop-long">
                                <label for="property_gmap_longitude">Longitude (for Google Maps)</label>
                                <input type="text" id="property_gmap_longitude" class="form-control" value="-74.005279" name="long">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group s-prop-lat">
                                <label for="property_gmap_latitude">Latitude (for Google Maps)</label>
                                <input type="text" id="property_gmap_latitude" class="form-control" value="40.714398" name="lat">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="property_google_map">
                                <gmap-map :center="{lat:35.373291, lng:-119.018715}" :zoom="7" style="width: 100%; height: 320px">
                                    <gmap-marker :position="{lat:35.373291, lng:-119.018715}" :draggable="true" :clickable="false"></gmap-marker>
                                </gmap-map>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="submit row" style="clear: both; margin-top: 25px;">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-lg flat-btn" id="property_submit">Add Property</button>
                        <!-- <input type="submit" class="btn btn-lg flat-btn" id="property_submit" value="Add Property"> -->
                        <label style="margin-top: 15px; margin-left: 10px;"> Your submission will be reviewed by Administrator before it can be published</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <aside class="col-md-2 column">
        &nbsp;
    </aside>
</div>
</template>

<script src = "https://unpkg.com/vue-upload-multiple-image@1.1.6/dist/vue-upload-multiple-image.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js" ></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.js"></script>
<script src = "https://cdn.jsdelivr.net/npm/gmap-vue@1.2.2/dist/gmap-vue.min.js"></script>

<script>
    import Fileuploader from '../FileUploader.vue';
    import vue2Dropzone from "vue2-dropzone";
    import "vue2-dropzone/dist/vue2Dropzone.min.css";

    export default {
        data() {
            return {
                title_name: '',
                area: '',
                desc: '',
                price: '',
                status: '',
                type: '',
                bedrooms: '',
                // bathrooms: '',
                propertySize: '',
                yearBuilt: '',
                facing: '',
                totalMonthlyRent: '',
                address: '',
                location_name: '',
                walkability: '',
                crimeScore: '',
                latitude: '-74.005279',
                longitude: '40.714398',
                // post: {},
                dropzoneOptions: {
                    url: '/api/property/store',
                    addRemoveLinks: true,
                    thumbnailWidth: 150,
                    maxNumberOfFiles: 30,
                    parallelUploads: 30,
                    autoProcessQueue: false,
                    uploadMultiple: true,
                    manuallyAddFile: true,
                    autoDiscover: false,
                    acceptedFiles: 'image/jpeg,image/png,image/gif',
                    headers: {
                        "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
                    }
                },
                fileName: '',
            }
        },
        mounted() {
           //  $('.date-own').datepicker({
           //   minViewMode: 2,
           //   format: 'yyyy'
           // });
        },
        components: {
            vueDropzone: vue2Dropzone,
        },
        methods: {

          locationUpdated(latlng) {
              this.latitude = latlng.lat;
              this.longitude = latlng.lng;
          },

            // uploadSuccess(file, response) {
            //     console.log('File Successfully Uploaded with file name: ' + response.file);
            //     this.fileName = response.file;
            // },
            // uploadError(file, message) {
            //     console.log('An Error Occurred');
            // },
            fileRemoved() {},

            processQueue(){
                // if (this.name && this.age && this.address && this.desc) {
                    this.$refs.myVueDropzone.processQueue();
                // }

                // this.errors = [];
                //
                // if (!this.title_name) {
                //     this.errors.push('Name required.');
                // }
                // if (!this.price) {
                //     this.errors.push('Price required.');
                // }
                // if (!this.address) {
                //     this.errors.push('Address required.');
                // }
                // if (!this.desc) {
                //     this.errors.push('Description required.');
                // }
                // e.preventDefault();
            },


            sendingEvent (file, xhr, formData){
                formData.append('title_name', this.title_name);
                formData.append('area', this.area);
                formData.append('desc', this.desc);
                formData.append('price', this.price);
                formData.append('walkability', this.walkability);
                formData.append('crimeScore', this.crimeScore);
                formData.append('type', this.type);
                formData.append('bedrooms', this.bedrooms);
                // formData.append('bathrooms', this.bathrooms);
                formData.append('propertySize', this.propertySize);
                formData.append('propertyType', this.type);
                formData.append('yearBuilt', this.yearBuilt);
                formData.append('facing', this.facing);
                formData.append('totalMonthlyRent', this.totalMonthlyRent);
                formData.append('address', this.address);
                formData.append('location_name', this.location_name);
                formData.append('latitude', this.latitude);
                formData.append('longitude', this.longitude);
            },

            uploadSuccess(file, response) {
                if(response){
                    alert('Data inserted Successfully');
                }
            },
            uploadError(file, message) {
                console.log('An Error Occurred');
            },

            // addProperty() {
            //     this.$refs.myVueDropzone.processQueue();
            //     if (this.post.title_name) {
            //         let uri = '/property/store';
            //         this.axios.post(uri, {
            //             // photos
            //             // walkability
            //             title: this.post.title_name,
            //             lotSize: this.post.area,
            //             description: this.post.desc,
            //             price: this.post.price,
            //             status: this.post.status,
            //             propertyType: 'Duplex',//this.post.type,
            //             bedrooms: this.post.bedrooms,
            //             bathrooms: this.post.bathrooms,
            //             propertySize: this.post.propertySize,
            //             yearBuilt: this.post.yearBuilt,
            //             facing: this.post.facing,
            //             totalMonthlyRent: this.post.totalMonthlyRent,
            //             images: this.$refs.myVueDropzone.processQueue(),
            //             crimeScore: 1,
            //
            //             location_name: this.post.location_name,
            //             address: this.post.address,
            //             lat: '-115.2306538',
            //             lng: '36.1797013'
            //         }).then((response) => {
            //             if(response.status == 200){
            //                 this.$router.push({
            //                     // name: 'home'
            //                 });
            //             }
            //         }).catch(error => {
            //             if (error.response.status == 422) {
            //                 this.validationErrors = error.response.data.errors;
            //             };
            //         })
            //     }
            // },
        }
    }
</script>

<style>
#my-strictly-unique-vue-upload-multiple-image {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    width: 70rem;
    height: 25rem
}

.image-container {
    width: 70rem;
}

.img {
    width: 100%;
}

h1,
h2 {
    font-weight: normal;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    display: inline-block;
    margin: 0 10px;
}

a {
    color: #42b983;
}

.vue-dropzone>.dz-preview .dz-image{
    height: 10%;
}
</style>
