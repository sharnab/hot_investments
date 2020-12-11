<template>
<div class="content">
    <div id="slider-range"></div>
    <!-- <input type="text" v-model="min" class="form-control col-md-6" value="" id="min-price" style="width: 50% !important">
    <input type="text" v-model="max" class="form-control col-md-6" value="" id="max-price" style="width: 50% !important"> -->
</div>
</template>

<script>
import $ from 'jquery';
import ZbRangeSlider from './ZbRangeSlider'
export default {
    mounted: function() {
        $(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        });
    },
    destroyed: function() {},
    methods: {
        updateValues: function(min, max) {
            this.$emit('update:min', min)
            this.$emit('update:max', max)
        }
    }
}

$('#min-price').on('change', function() {
    updateValues($('#min-price').val())
});

$('#max-price').on('change', function() {
    updateValues($('#min-price').val(), $('#max-price').val())
});
$('#min-area').on('change', function() {
    updateValues($('#min-price').val(), $('#max-price').val())
});

$('#max-area').on('change', function() {
    updateValues($('#min-price').val(), $('#max-price').val())
});
</script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery UI Slider - Range slider</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<style>
.slider {
    display: block;
    position: relative;
    height: 36px;
    width: 15%;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}

.slider .slider-touch-left,
.slider .slider-touch-right {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    display: block;
    position: absolute;
    height: 36px;
    width: 36px;
    padding: 0px;
    z-index: 2;
    margin-top: 7px;
}

.slider .slider-touch-left span,
.slider .slider-touch-right span {
    display: block;
    width: 70%;
    height: 70%;
    background: #f0f0f0;
    border: 1px solid #a4a4a4;
    border-radius: 50%;
}

.slider .slider-line {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    position: absolute;
    width: calc(100% - 36px);
    left: 18px;
    top: 16px;
    height: 8px;
    border-radius: 4px;
    background: #f0f0f0;
    z-index: 0;
    overflow: visible;
}

.slider .slider-line span {
    display: block;
    height: 100%;
    width: 18%;
    background: none repeat scroll 0 0 #c94046;
}
</style>
