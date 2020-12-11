<template>
<div class="content">
  <div id="area-slider" :se-min="minAreaThreshold" :se-step="step" :se-minArea-value="minArea" :se-maxArea-value="maxArea" :se-max="maxAreaThreshold" class="slider">
    <div class="slider-touch-left">
      <span></span>
    </div>
    <div class="slider-touch-right">
      <span></span>
    </div>
    <div class="slider-line">
      <span></span>
    </div>
  </div>
  <input type="text" v-model="minArea" class="form-control col-md-6" value="" id="min-area" style="width: 50% !important">
  <input type="text" v-model="maxArea" class="form-control col-md-6" value="" id="max-area" style="width: 50% !important">
</div>
</template>

<script>
import $ from 'jquery';
import ZbRangeSlider from './ZbRangeSlider'
export default {
  props: {
    minAreaThreshold: {
      type: Number,
      default: 0
    },
    maxAreaThreshold: {
      type: Number,
      default: 6000
    },
    step: {
      type: Number,
      default: 100
    },
    minArea: {
      type: Number,
      required: true
    },
    maxArea: {
      type: Number,
      required: true
    }
  },
  data: function () {
    return {
      instance: undefined
    }
  },
  mounted: function () {
    this.instance = new ZbRangeSlider('area-slider')
    this.instance.onChange = (minArea, maxArea) => this.updateValues(parseInt(minArea), parseInt(maxArea))
  },
  destroyed: function () {
  },
  methods: {
    updateValues: function (minArea, maxArea) {
      this.$emit('update:minArea', minArea)
      this.$emit('update:maxArea', maxArea)
    }
  }
}

$('#min-area').on('change', function() {
    updateValues($('#min-area').val(), $('#max-area').val())
});

$('#max-area').on('change', function() {
    updateValues($('#min-area').val(), $('#max-area').val())
});
</script>

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
