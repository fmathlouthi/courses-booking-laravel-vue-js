<template>
    <agile v-if=" photos.length > 0 " :options="myOptions" ref="carousel" :dots="true" :infinite="true" :autoplay-speed="5000">
        <div v-for="photo in photos" :key="photo.id" class="slide">
           <img  :src="photo.url" :alt="photo.name" :title="photo.name">
      
        </div>
        
        
        
       
    
    </agile>
    
</template>
<script>
import { VueAgile } from 'vue-agile'

export default {
          props: {
            photos: {
              type: [Array, Object],
              default: [],
            }
        },
    name: 'Slider',
  components: { agile: VueAgile  },
  data() {
    return {
     myOptions: {
            navButtons: false,
            
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        navButtons: true,
                        dots: true,
                        infinite: true
                    }
                },
                
                {
                    breakpoint: 900,
                    settings: {
                        navButtons: true,
                        dots: true,
                        infinite: true
                    }
                }
            ]
        },
    }
  },
  
}
</script>
