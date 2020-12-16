<aside class="col-md-12 column">
    <div class="search_widget widget">
        <div class="heading2">
            <h3>Search properties</h3>
        </div>
        <div class="search-form">
            <form action="properties.html"  method="get" class="form-inline">
                <div class="search-form-content">
                    <div class="search-form-field">
                        <div class="form-group col-md-12">
                            <div class="label-text">
                                <input type="text" id="location" class="form-control" value="" name="location">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="label-select">
                                <select class="form-control" name="property_types">
                                    <option value=''>All Property Type </option>
                                    <option value="Duplex">Duplex</option>
                                    <option value="Triplex">Triplex</option>
                                    <option value="Fourplex">Fourplex</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="label-select">
                                <select class="form-control" name="s_total_bedrooms">
                                    <option value=''>Total Bedrooms</option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='5+'>5+</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="label-select">
                                <select class="form-control" name="s_furnishing_status">
                                    <option value=''>Furnishing Status</option>
                                    <option value='Furnished'>Furnished</option>
                                    <option value='SemiFurnished'>Semi Furnished</option>
                                    <option value='Unfurnished'>Furnished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="label-select">
                                <select class="form-control" name="s_construction_status">
                                    <option value=''>Construction Status</option>
                                    <option value='newly_launched'>Newly Launched</option>
                                    <option value='ready_to_move'>Ready To Move</option>
                                    <option value='under_construction'>Under Construction</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="form-group col-md-12">
                            <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                            <div style="margin:30px auto">
                                <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
                                <input type="number" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" />
                        	</div>
                        </div> --}}
                        <div class="form-group col-md-12">
                            <span class="gprice-label">Price</span>
                            <input type="text" class="span2" value="" data-slider-min="0"
                                   data-slider-max="500000" data-slider-step="5"
                                   data-slider-value="[0,500000]" id="price-range" >
                        </div>
                        <div class="form-group col-md-12">
                            <span class="garea-label">Super Buildup Area</span>
                            <input type="text" class="span2" value="" data-slider-min="0"
                                   data-slider-max="6000" data-slider-step="5"
                                   data-slider-value="[0,6000]" id="property-geo" >
                        </div>
                    </div>
                </div>
                <div class="search-form-submit">
                    <button type="button" class="btn-search">Search</button>
                </div>
            </form>
        </div><!-- Services Sec -->
    </div><!-- Category Widget -->
</aside>

{{-- @section('scripts')
    <script>
        $('.btn-search').on('click', function(){
            console.log($('#price-range').val());
        })
    </script>
@endsection --}}
