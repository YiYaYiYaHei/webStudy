<template>
	<div class="home">
		<Public></Public>
		<Banner></Banner>
		<Choose></Choose>
		<HotRecomment></HotRecomment>
		<GoWhere></GoWhere>
	</div>
</template>

<script>
	import Public from '../components/Public'
	import Banner from '../components/home/Banner'
	import Choose from '../components/home/Choose'
	import HotRecomment from '../components/home/HotRecomment'
	import GoWhere from '../components/home/GoWhere'
	
	
	
	export default {
  		name: 'Home',
  		components:{
  			Public,
  			Banner,
  			Choose,
  			HotRecomment,
  			GoWhere,
  		}
  		
 
}
</script>

<style>
	.home{
		width: 100%;
		background: #eeeeee;
	}
	
</style>