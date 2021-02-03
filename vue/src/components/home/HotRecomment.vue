<template>
	<div class="hotRecomment">
		<h4 class="title">热销推荐</h4>
		<ul>
			<li  v-for="item in con">
				<div class="left">
					<img  :src="item.srcs"/>
				</div>
				<div class="right">
					<p>{{item.name}}</p>
					<p>{{item.intro}}</p>
					<a href="#">查看详情</a>
				</div>
			</li>
		</ul>
	</div>
</template>

<script>
	import Swiper from 'swiper'
	
	export default {
  		name: 'HotRecomment',
  		data(){
  			return {con:[]}
  		},
  		mounted(){
  			this.$http('../../../static/data/hot.json').then((res)=>{
							this.con=res.data;
//							console.log(this.con);
						}).catch((res)=>{
							console.log(res.status)
						})
  		},
  		methods:{
 
  		}
 
	}
</script>

<style>
	.hotRecomment{
		width: 100%;
	}
	.hotRecomment .title{
		font-size: 15px;
		line-height: 3rem;
		text-indent: 1rem;
	}
	.hotRecomment>ul{
		width: 100%;
	}
	.hotRecomment>ul>li{
		border-bottom: 1px solid #eaeaea;
		height: 7rem;
		background: #fff;
		padding: 10px;
		display: flex;
	}
	.hotRecomment>ul>li>.left{
		width: 25%;
		height: 100%;
	}
	.hotRecomment>ul>li>.left>img{
		width: 100%;
		height: 100%;
	}
	.hotRecomment>ul>li>.right{
		margin-left: 10px;
		width: 70%;
	}
	.hotRecomment>ul>li>.right>p:nth-of-type(1){
		font-size: 16px;
	}
	.hotRecomment>ul>li>.right>p:nth-of-type(2){
		font-size: 12px;
		color:#cfccd5;
		line-height: 2.5rem;
	}
	.hotRecomment>ul>li>.right>a{
		width: 6.7rem;
		line-height: 2.2rem;
		text-align: center;
		font-size: 12px;
		display: inline-block;
		color: #fff;
		background: #ff9300;
		border-radius: 5px;
	}

</style>