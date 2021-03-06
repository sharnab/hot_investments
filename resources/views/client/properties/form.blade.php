{{-- {{dd($data)}} --}}
                    <div class="submit-content">
                            <div class="control-group">
                                <div class="group-title">Property Description &amp; Price</div>
                                <div class="group-container row">
                                    <div class="col-md-8">
                                        <div class="form-group s-prop-title">
                                            <label for="title">Title&nbsp;&#42;</label>
                                            <input type="text" id="title" class="form-control title_name" value="{{ isset($data['title'])?$data['title']:'' }}" name="title_name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group s-prop-area">
                                            <label for="area">Lot Size&nbsp;(sqft)</label>
                                            <input type="text" id="lotSize" class="form-control area" value="{{ isset($data['lotSize'])?$data['lotSize']:'' }}" name="area">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group s-prop-desc">
                                            <label for="textarea">Description&nbsp;&#42;</label>
                                            <textarea id="textarea" name="desc" rows="10" required="" style="width: 100%; border: 1px solid #ccc; border-radius: 4px" class="desc">{{ isset($data['description'])?$data['description']:'' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="price s-prop-bedrooms">
                                            <label for="price">Price&nbsp;&#42;&nbsp;(&#36;)</label>
                                            <input type="text" id="price" class="form-control price" value="{{ isset($data['price'])?$data['price']:'' }}" name="price" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group s-prop-status">
                                            <label>Walkability</label>
                                            <div class="dropdown label-select" style="width: 100%">
                                                <select class="form-control walkability" name="walkability" >
                                                    <option value="1" {{ isset($data['walkability']) && $data['walkability'] == '1' ? 'selected' : '' }}>1</option>
                                                    <option value="2" {{ isset($data['walkability']) && $data['walkability'] == '2' ? 'selected' : '' }}>2</option>
                                                    <option value="3" {{ isset($data['walkability']) && $data['walkability'] == '3' ? 'selected' : '' }}>3</option>
                                                    <option value="4" {{ isset($data['walkability']) && $data['walkability'] == '4' ? 'selected' : '' }}>4</option>
                                                    <option value="5" {{ isset($data['walkability']) && $data['walkability'] == '5' ? 'selected' : '' }}>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group s-prop-type">
                                            <label>Type</label>
                                            <div class="dropdown label-select" style="width: 100%">
                                                <select class="form-control type" name="type">
                                                    <option value="Duplex" {{ isset($data['type']) && $data['type'] == 'Duplex' ? 'selected' : '' }}>Duplex</option>
                                                    <option value="Triplex" {{ isset($data['type']) && $data['type'] == 'Triplex' ? 'selected' : '' }}>Triplex</option>
                                                    <option value="Fourplex" {{ isset($data['type']) && $data['type'] == 'Fourplex' ? 'selected' : '' }}>Fourplex</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group s-prop-bedrooms">
                                            <label for="bedrooms">Bed Rooms</label>
                                            <input type="number" id="bedrooms" class="form-control bedrooms" value="{{ isset($data['bedrooms'])?$data['bedrooms']:'' }}" name="bedrooms">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group s-prop-bathrooms">
                                            <label for="bathrooms">Property Size</label>
                                            <input type="number" id="propertySize" class="form-control propertySize" value="{{ isset($data['propertySize'])?$data['propertySize']:'' }}" name="propertySize">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group s-prop-bedrooms">
                                            <label for="bedrooms">Year Built</label>
                                            <input type="number" id="yearBuilt" class="date-own form-control yearBuilt" value="{{ isset($data['yearBuilt'])?$data['yearBuilt']:'' }}" name="yearBuilt">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group s-prop-facing">
                                            <label for="facing">Facing</label>
                                            <div class="dropdown label-select" style="width: 100%">
                                                <select class="form-control facing" name="facing">
                                                    <option value="East" {{ isset($data['facing']) && $data['facing'] == 'East' ? 'selected' : '' }}>East</option>
                                                    <option value="West" {{ isset($data['facing']) && $data['facing'] == 'West' ? 'selected' : '' }}>West</option>
                                                    <option value="North" {{ isset($data['facing']) && $data['facing'] == 'North' ? 'selected' : '' }}>North</option>
                                                    <option value="South" {{ isset($data['facing']) && $data['facing'] == 'South' ? 'selected' : '' }}>South</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group s-prop-crimeScore">
                                            <label for="crimeScore">Crime Score</label>
                                            <div class="dropdown label-select" style="width: 100%">
                                                <select class="form-control crimeScore" name="crimeScore">
                                                    <option value="1" {{ isset($data['crimeScore']) && $data['crimeScore'] == '1' ? 'selected' : '' }}>1</option>
                                                    <option value="2" {{ isset($data['crimeScore']) && $data['crimeScore'] == '2' ? 'selected' : '' }}>2</option>
                                                    <option value="3" {{ isset($data['crimeScore']) && $data['crimeScore'] == '3' ? 'selected' : '' }}>3</option>
                                                    <option value="4" {{ isset($data['crimeScore']) && $data['crimeScore'] == '4' ? 'selected' : '' }}>4</option>
                                                    <option value="5" {{ isset($data['crimeScore']) && $data['crimeScore'] == '5' ? 'selected' : '' }}>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group s-prop-bathrooms">
                                            <label for="totalMonthlyRent">Total Monthly Rent</label>
                                            <input type="number" id="totalMonthlyRent" class="form-control totalMonthlyRent" value="{{ isset($data['totalMonthlyRent'])?$data['totalMonthlyRent']:'' }}" name="totalMonthlyRent">
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
                                        <div class="form-group">
                                            {{ Form::label('files', __("Select Files")) }}
                                            {{ Form::file('upload_file',['id'=>'upload_file', 'onchange'=>"preview_image();", 'multiple'=>'true']) }}
                                        </div>
                                        <div id="image_preview">
                                            @if(isset($data['photos']))
                                                @foreach($data['photos'] as $image)
                                                    <div class='col-md-6'>
                                                        <a href='#' onClick='delete_server_data({{$image}});' class='del_tag_{{$image}}'>
                                                            <img src='{{url("/")}}/assets/client/layout/img/close-icon.png' alt='Delete file icon' class='del_button_{{$image}} img_delete_btn'>
                                                        </a>
                                                        <a href='{{url("http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/").$image}}' data-lightbox='current_uploaded_image' id='SocialMediaBadges'>
                                                            <img src='{{url("http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/").$image}}' width='80%' style='padding: 5px' class='img_{{$image}}'>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="form-group hidden">
                                            <div class="progress">
                                                <div class="progress-bar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                    0%
                                                </div>
                                            </div>
                                            <div id="success" class="row">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="group-title">Listing Location</div>
                                <div class="group-container row">
                                    <div class="col-md-6">
                                        <div class="form-group s-prop-address">
                                            <label for="address">Address&nbsp;&#42;</label>
                                            <textarea id="address" class="form-control address" name="address" rows="1" required="">{{ isset($data['location']['address'])?$data['location']['address']:'' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group s-prop-location">
                                            <label for="address">Location</label>
                                            <input type="text" id="location" class="form-control location" value="{{ isset($data['location']['description'])?$data['location']['description']:'' }}" name="location">
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
                    </div>


    @section('scripts')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assets') }}/client/layout/scripts/lightbox.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assets') }}/client/layout/scripts/jquery.form.js"></script>
    <script>

        jQuery(".select2").select2({
            width: '100%'
        });

        if (/*@cc_on!@*/false) { // check for Internet Explorer
        	document.onfocusin = onFocus;
        } else {
        	window.onfocus = onFocus;
        }

        function preview_image()
        {
            var total_file=document.getElementById("upload_file").files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#image_preview').append("<div class='col-md-6'><a href='#' onClick='remove_img("+i+");' class='del_tag_"+i+"'><img src='{{url("/")}}/assets/client/layout/img/close-icon.png' alt='Delete file icon' class='del_button_"+i+" img_delete_btn'></a>"+"<a href='"+URL.createObjectURL(event.target.files[i])+"' data-lightbox='current_uploaded_image' id='SocialMediaBadges'><img src='"+URL.createObjectURL(event.target.files[i])+"' width='80%' style='padding: 5px' class='img_"+i+"'></a></div>");
                $('.progress').hide();
            }
            // $('.img_1').remove();

        }

        function remove_img(id)
        {
            img_class = "img_"+id;
            del_tag = "del_tag_"+id;
            del_class = "del_button_"+id;
            $("."+img_class).remove();
            $("."+del_tag).remove();
            $("."+del_class).remove();
        }

        function delete_server_data(id)
        {
            // jQuery(".del_button").click(function () {

            var chk = confirm('Do you want to delete this file?');
            if (chk != true) {
                return false;
            }

            // $.ajax({
            //     type: "GET",
                // url: "{//{url('/admin')}}" + "/asset_info/"+id+"/delete_file",
            //     success: function (data) {
            //         // return success
            //         if (data == 1) {
            //             alert('File deleted successfully.');
            //             location.reload();
            //         } else {
            //             alert('An Error occured!. Please try again later.');
            //         }
            //     }
            // });

        // });
        }

        $('#reset').on('click', function() {
            $('div#image_preview').empty();
            event.target.files = [];
        });

    </script>
@endsection
