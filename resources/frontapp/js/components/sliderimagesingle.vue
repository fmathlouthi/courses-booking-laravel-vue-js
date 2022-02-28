<template>

      
      
        <b-carousel
      controls
      indicators 
      v-model="slide"
      :interval="3500"
      background="#e1e1e1"
      img-width="350"
      img-height="350"
      @sliding-end="endSlide"
      @sliding-start="initCarousel"
      style="text-shadow: 2px 3px 3px #222222;">
      
      <b-carousel-slide
      v-for="photo in photos" 
      :key="photo.id"
        text="A journey of a thousands mile starts with a single step."
        :img-src="photo.url"
        width="350"
            height="350"
        >
      </b-carousel-slide>

      

      
    </b-carousel>
</template>
<script>
  export default {
       props: {
            photos: {
              type: [Array, Object],
              default: [],
            }
        },
    data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    methods: {
      initCarousel() {
        this.sliding = true
      },
      endSlide() {
        this.sliding = false
      }
    }
  }
</script>
<style scoped>
 
</style>
