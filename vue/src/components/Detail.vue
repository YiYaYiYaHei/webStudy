<template>
	<div class="detail">
		<div class="swiper-container">
		    <div class="swiper-wrapper" id="delB">
		    		<router-link to="/" class="iconfont icon-renzheng-fanhuijiantou-copy"></router-link>
			<!--========================================-->
		          <div class="swiper-slide">
		          	<p class="title">{{delt.sightName}}</p>
		          	<div class="bgbox"><img :src="delt.bannerImg"  class="bg"></div>
		        	<span class="iconfont icon-picture">1/3张</span>
		          </div>
				<!--=======================================-->
		        <div class="swiper-slide" v-for="(v,i) in delt.gallaryImgs">
		        	<span class="iconfont icon-picture">{{i+2}}/3张</span>
			      <div class="bgbox">
			      	
			      <img :src="v" class="bg"/>
			      </div>
		        </div>
		        <!--=====================================-->
		    </div>
		</div>
		
		
		<div class="content">
			<ul v-for="v,k in delt.categoryList">
				<li @click="show(k)">
					<p>
						<a class="iconfont icon-piaoyouneirong" href="javascript:;"></a>
						{{v.title}}
					</p>
					<div class="con" v-if="v.children&&v.flag" v-for="vv in v.children">
						<a href="javascript:;">
							<span class="iconfont icon-piaoyouneirong"></span>
						{{vv.title}}
						</a>
						<a v-if="vv.children" v-for="vvv in vv.children"  href="javascript:;"> 
							<span class="iconfont icon-piaoyouneirong"></span>
							{{vvv.title}}
						</a>
					</div>
				</li>
			</ul>
		</div>

	</div>
</template>

<script>
	import Swiper from 'swiper'
	
	export default {
  		name: 'Detail',
  		data(){
  			return {delt:{},flag:false}
  		},
  		mounted(){
  			 
  			this.$http('../../../static/data/detail.json').then((res)=>{
							this.delt=res.data.data;
//							console.log(this.delt)
						}).catch((res)=>{
							console.log(res.status)
						})
			setTimeout(function(){
				var mySwiper = new Swiper ('.detail .swiper-container', {
			   followFinger : true,
  			}) 
			},1)
							
  		},
  		methods:{
  			show(i){
				this.delt.categoryList[i].flag=!this.delt.categoryList[i].flag;
			
  			}
  		}
 
	}
</script>

<style >
	@import url("../assets/css/base.css");

	.detail{
		width: 100%;
	}
	.detail .swiper-container{
		height: 16rem;
	}
	.detail .swiper-container .bgbox{
		width: 100%;
		height: 16rem;
	}
	.bgbox{
		height: 100%;
	}
	.detail .swiper-slide>.title{
		font-size: 16px;
		color:#fff;
		z-index: 3;
		position: absolute;
		left: 5px;
		bottom: 5px;
	}
	.detail .swiper-slide>div,.detail .swiper-slide .bg{
		width: 100%;
		height: 100%;
	}
	.detail .swiper-container .swiper-wrapper{
		position: relative;
	}
	.detail .swiper-container .swiper-wrapper .icon-renzheng-fanhuijiantou-copy{
		position: absolute;
		left: 5px;
		top: 5px;
		font-size: 25px;
		width: 10%;
		height: 19%;
		background: rgba(0,0,0,0.7);
		border-radius: 50%;
		text-align: center;
		color: #fff;
		z-index: 2;
	}
	.detail .swiper-container .swiper-wrapper .icon-picture{
		display: inline-block;
		height: 10%;
		width: 22%;
		background: rgba(0,0,0,0.7);
		border-radius: 10px;
		position: absolute;
		bottom: 5px;
		right: 10px;
		z-index: 2;
		font-size: 12px;
		text-align: center;
		color: #fff;
		letter-spacing: 3px;
	}
	.content>ul{
		width: 100%;
	}
	.content>ul>li{
		background: #fff;
		border-top: 1px solid #ccc;
	}
	.icon-piaoyouneirong{
		display: inline-block;
		width: 2.1rem;
		line-height: 2.1rem;
		background: #00bcd4;
		text-align: center;
		color: #fff;
		font-size: 12px;
		border-radius: 50%;
		transform: rotate(-40deg);	
		text-indent: 0;
	}
	.content>ul>li>p{
		line-height: 2.5rem;
	}
	.content>ul>li>p{
		border-bottom: 1px solid #ccc;
		text-indent: 3%;
	}
	.content>ul>li>.con>a:nth-of-type(1){
		text-indent: 6%;
		margin-left: 2%;
		display: block;
		border-bottom: 1px solid #ccc;
	}
	.content>ul>li>.con>a:nth-of-type(2){
		text-indent: 10%;
		margin-left: 4%;
		display: block;
		border-bottom: 1px solid #ccc;
	}
	a{
		color: #000;
	}
</style>