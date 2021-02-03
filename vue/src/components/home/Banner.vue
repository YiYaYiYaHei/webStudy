<template>
	<div class="banner">
		<div class="swiper-container" id="bannerB">
		    <div class="swiper-wrapper">
		        <div class="swiper-slide" v-for="item in imgs">
		        	<img :src="item.imgUrl"/>
		        </div>
		    </div>
		    <div class="swiper-pagination"></div>
		</div>
	</div>
</template>

<script>
	import Swiper from 'swiper'
	
	export default {
  		name: 'Banner',
  		data(){
  			return {
  				imgs:[],
  				
  				}
  		},
  		mounted(){
  			this.get();
			this.play();
  			
  		},
  		methods:{
  			get(){
  				this.$http('../../../static/data/index.json').then((res)=>{
							this.imgs=res.data.data.swiperList;
						})
  			},
  			play(){
  				setTimeout(function(){
  					var mySwiper = new Swiper ('#bannerB', {
					    loop: true, // 循环模式选项
					    autoplay : true,
					    speed:300,
					    // 如果需要分页器
					    pagination: {
					      el: '.swiper-pagination',
					    },   
		  		})  
  				},1)
  			}
  		}
 
	}
</script>

<style >
	.banner{
		height: 14rem;
		width: 100%;
	}
	.banner .swiper-container {
    	width: 100%;
    	height: 100%;
	}  
	.banner .swiper-container .swiper-slide>img{
		width: 100%;
		height: 100%;
	}
	.swiper-pagination-bullet-active {
	    opacity: 1;
	    background: #fff;
	}
</style>