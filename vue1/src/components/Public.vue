<template>
	<div class="public">
		<div class="header">
			<router-link to="/" class="iconfont icon-renzheng-fanhuijiantou-copy"></router-link>
			<input type="search" placeholder="输入城市/景点/旅游主题"/>
			<span class="iconfont icon-sousuo" ></span>
			<p>
				<span>{{cityAir}}</span>
				<a class="down" href="http://127.0.0.1:8080/#/home/list"></a>
			</p>
		</div>
	</div>
</template>

<script>
	import {mapState} from "vuex"
	
	export default {
  		name: 'Public',
  		data(){
  			return {}
  		},
  		methods:{
  			
  		},
  		computed:{
  			...mapState(['cityAir'])
  		},
 
	}
</script>

<style>
	@import url("../assets/css/base.css");
	
	.public .header{
		height: 4.5rem;
		width: 100%;
		background: #00bcd4;
		position: relative;
	}
	.public .header>input{
		height: 3rem;
		width: 72%;
		position: absolute;
		left: 9.5%;
		top: 17%;
		border: none;
		border-radius: 5px;
		font-size: 14px;
		text-indent: 3rem;	
		color: #d5cccc;
	}
	.public .header>.icon-sousuo{
		color: #d5cccc;
		text-indent: 1.2rem;
		position: absolute;
		left: 2.5rem;
		top: 17%;
		line-height: 3rem;
	}
	.public .header>.icon-renzheng-fanhuijiantou-copy{
		color: #fff;
		font-size: 20px;
		line-height: 5rem;
		margin-left: 1%;
	}
	.public .header>p{
		display: inline-block;
		color: #fff;
		font-size: 14px;
	}
	.public .header>p>span{
		position: absolute;
		right: 1.8rem;
		top: 0;
		line-height: 4.5rem;
		width: 3.5rem;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		text-align: center;

	}
	.public .header>p>.down{
		display: inline-block;
		width: 0rem;
		height: 0rem;
		border: 5px solid #fff;
		border-bottom-color: #00bcd4;
		border-right-color: #00bcd4;
		border-left-color: #00bcd4;
		position: absolute;
		right: 0.5rem;
		top: 47%;
		
		
	}
</style>