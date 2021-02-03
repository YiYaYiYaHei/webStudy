<template>
	<div class="choose">
		 <div class="swiper-container" id="chooseB">
		    <div class="swiper-wrapper">
		        <div class="swiper-slide">
		        	<div class="fir">
		        		<a href="#">
			        		<span><img src="../../assets/img/c_03.jpg"></span>
			        		<p>景点门票</p>
			        	</a>
			        	<a href="#">
			        		<span><img src="../../assets/img/c_05.jpg"></span>
			        		<p>滑雪季</p>
			        	</a>
			        	<a href="#">
			        		<span><img src="../../assets/img/c_07.jpg"></span>
			        		<p>泡温泉</p>
			        	</a>
			        	<a href="#">
			        		<span><img src="../../assets/img/c_09.jpg"></span>
			        		<p>动植园</p>
			        	</a>
		        	</div>
		        	
		        	<div class="fir">
		        		<a href="#">
			        		<span><img src="../../assets/img/c_15.jpg"></span>
			        		<p>游乐园</p>
			        	</a>
			        	<a href="#">
			        		<span><img src="../../assets/img/c_16.jpg"></span>
			        		<p>必有榜单</p>
			        	</a>
			        	<a href="#">
			        		<span><img src="../../assets/img/c_17.jpg"></span>
			        		<p>演出</p>
			        	</a>
			        	<a href="#">
			        		<span><img src="../../assets/img/c_18.png"></span>
			        		<p>城市观光</p>
			        	</a>
		        	</div>
		        </div>
		        
		        <div class="swiper-slide">
		        	<div class="fir">
		        		<a href="#">
			        		<span><img src="../../assets/img/c_03.jpg"></span>
			        		<p>景点门票</p>
			        	</a>
			        	<a href="#">
			        		<span><img src="../../assets/img/c_05.jpg"></span>
			        		<p>旅游景点</p>
			        	</a>
			        	
		        	</div>
		        </div>
		    </div>
		    <!-- 如果需要分页器 -->
		    <div class="swiper-pagination"></div>
		</div>
  
	</div>
</template>

<script>
	import Swiper from 'swiper'
	
	export default {
  		name: 'Choose',
  		mounted(){
  			 var mySwiper = new Swiper ('#chooseB', {
			    // 如果需要分页器
			    pagination: {
			      el: '.swiper-pagination',
			    },
			    
			    
  			})        
  		},
  		methods:{
  			
  		}
 
	}
</script>

<style>
	.choose{
		height: 19rem;
		width: 100%;
		box-sizing: border-box;
		background: #fff;
	}
	.choose .swiper-container{
		width: 100%;
		height: 100%;
		box-sizing: border-box;
	}
	.choose .swiper-container .swiper-wrapper .swiper-slide>.fir{
		display: flex;
	}
	.choose .swiper-container .swiper-wrapper .swiper-slide>.fir>a{
		width: 18%;
		display: inline-block;
		text-align: center;
		margin:10px;
		color: #000;
	}
	.choose .swiper-container .swiper-wrapper .swiper-slide>.fir>a>span{
		width: 100%;
		height: 70%;
		display: inline-block;
	}
	.choose .swiper-container .swiper-wrapper .swiper-slide>.fir>a>span>img{
		width: 100%;
		height: 100%;
	}
	#chooseB .swiper-pagination-bullet-active {
	    opacity: 1;
	    background: #007aff;
	}

</style>