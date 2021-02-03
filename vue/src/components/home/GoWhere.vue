<template>
	<div class="goWhere">
		<h4 class="title">周末去哪儿</h4>
		<ul>
			<li v-for="item in where">
				<a href="http://127.0.0.1:8080/#/home/det">
					<div>
						<img :src="item.imgUrl"/>
					</div>
					<p>{{item.title}}</p>
					<p>{{item.desc}}</p>
				</a>
			</li>
		</ul>

	</div>
</template>

<script>
	
	export default {
  		name: 'goWhere',
  		data(){
  			return {where:[]}
  		},
  		mounted(){
  			 this.$http('../../../static/data/index.json').then((res)=>{
  			 	this.where=res.data.data.weekendList;
  			 })
  		},
  		methods:{
  			
  		},
 
	}
</script>

<style >
	.goWhere{
		width: 100%;
		box-sizing: border-box;
	}
	.goWhere .title{
		font-size: 15px;
		line-height: 3rem;
		text-indent: 1rem;
	}
	.goWhere>ul{
		width: 100%;
	}
	.goWhere>ul>li{
		height: 23rem;
		background: #fff;
	}
	.goWhere>ul>li>a{
		display: block;
	}
	.goWhere>ul>li>a>div{
		height: 18rem;
	}
	.goWhere>ul>li>a>div>img{
		width: 100%;
		height: 100%;
	}
	.goWhere>ul>li>a>p:nth-of-type(1){
		font-size: 16px;
		line-height: 2.6rem;
		text-indent: 1rem;
		color: #000;
	}
	.goWhere>ul>li>a>p:nth-of-type(2){
		font-size: 14px;
		line-height: 1.6rem;
		color: #cccccc;
		text-indent: 1rem;
	}
</style>