<template>
	<div class="list" @mousewheel="mousewheel">
		<header id="box">
			<p>
				<router-link to="/" class="iconfont icon-renzheng-fanhuijiantou-copy" ></router-link>
				城市选择
			</p>
			<input type="search" name="" id="" placeholder="请输入城市名或名称" @keyup="keyup"  v-model="msg"/>
		</header>
		<!--================================================-->
		<div style="position:absolute; top: 5rem; background: #fff; width: 100%;" class="show" v-show="msg">
			<ul v-for='item in ss'><li @click="chooseCity(item)">{{item}}</li></ul>
			<p v-if='ss.length==0'>暂无数据</p>
		</div>
		<!--===================================================-->
		
		<div class="city" v-show="!msg">
			<div class="block">
				<h6>当前城市</h6>
				<div class="precity">
					<span class="btn" @click="chooseCity(cityAir)">{{cityAir}}</span>
				</div>
			</div>
			
			<div class="block">
				<h6>热门城市</h6>
				<div class="precity" id="hot">
					<span v-for="item,k in city" class="btn"  @click="chooseCity(item.name)">{{item.name}}</span>
				</div>
			</div>
			
			<div class="block" id="list">
				<div v-for="(v,k,i) in mcity">
					<h6 :id="k">{{k}}</h6>
					<div class="precity">
						<span v-for="item in v" class="lan" @click="chooseCity(item.name)">{{item.name}}</span>
					</div>
				</div>
				
				
			</div>
				
		</div>
		
		<div class="right" v-show="!msg">
			<div v-for="(v,k,i) in mcity">
				<a  @click="jump(i)">{{k}}</a>
			</div>	
		</div>
		
	</div>
</template>

<script>
	import {mapState} from "vuex"
	
	export default {
  		name: 'List',
  		data(){
  			return {city:{},mcity:{},msg:'',ss:[],arrs:[]}
  		},
  		mounted(){
  			this.get();
  		},
  		computed:{
  			...mapState(['cityAir'])
  		},
  		methods:{
  			get(){
 				this.$http('../../../static/data/city.json').then((res)=>{
					this.city=res.data.data.hotCities;
					this.mcity=res.data.data.cities;
				}).catch((res)=>{
					console.log(res.status)
				})
  			},
  			chooseCity(name){	
				this.$store.dispatch('change',name);
				this.$router.push('/');
  				
  			},
  			jump(i){
  				var t1=document.getElementById("list").children[i].offsetTop;
  				var t2=parseFloat(getComputedStyle(document.getElementById("box")).height);
  				var top=t1-t2;
    			document.documentElement.scrollTop=top;
    			for(var j=0;j<document.getElementsByClassName('right')[0].children.length;j++){
    				document.getElementsByClassName('right')[0].children[j].className='';
    				document.getElementsByClassName('right')[0].children[i].className='rtbg';
    			}
    			
    			
  			},
  			first(ev,all,c){
  				var ss=[];
  				var sss=[];
  				var re=/^[\u4e00-\u9fa5]/;
  				for(var k in all){
					for(var i=0;i<all[k].length;i++){
						if(re.test(c)){
							for(var i=0;i<all[k].length;i++){
								if(all[k][i].name.indexOf(c)>-1){
									sss.push(all[k][i]);
								}
							}
						}else{
							if(c.toUpperCase()==k){
							for(var i=0;i<all[k].length;i++){
								sss.push(all[k][i])
								ss.push(all[k][i].name);
							}
						}
					}	
				}
				}
				return {ss:ss,sss:sss};
  			},
  			keyup(ev){
  				this.ss = [];//显示的数组
  				var sou = this.msg;
  				var all = this.mcity;//所有城市
  				var sss=[];//首字母相同的数组
				var re=/^[\u4e00-\u9fa5]/;
				if(re.test(sou)&&ev.keyCode==32){
					sss=this.first(ev,all,sou).sss;
					var arr=[];
					for(var i=0;i<sss.length;i++){
						if(sss[i].name.indexOf(sou)>-1){
							arr.push(sss[i].name);
						}
						console.log(sss[i])
					}
					this.ss=arr;
				}else{
					if(sou.length>1){
					var c= sou[0];
					sss=this.first(ev,all,c).sss;
					for(var i=1;i<sou.length;i++){
						var sn=[];//存储name
						var ssl=[];//存储spell
						var sss1=[];
						for(var j=0;j<sss.length;j++){
							if(sss[j].spell[i]===sou[i]){
								var obj={};
								obj["name"]=sss[j].name;
								obj["spell"]=sss[j].spell;
								sss1.push(obj);
								sn.push(sss[j].name);
								ssl.push(sss[j].spell);
							}
						}	
						if(sss1.length>0){
							sss=sss1;
						}
					}
					var pos=ssl.indexOf(sou);
					if(pos>-1){
						this.ss.push(sn[pos]);
					}else{
						this.ss=sn;
					}
				}else{
					this.ss=this.first(ev,all,sou).ss;
				}	
				}
  		},
  		mousewheel(ev){
  			var i=0;
  			 var t2=parseFloat(getComputedStyle(document.getElementById("box")).height);
  			if(this.arrs.length==0){
  				for(var k in this.mcity){
  				var t1=document.getElementById("list").children[i++].offsetTop;
  				var top=t1-t2;
  				this.arrs.push(top);
  			}
  			}

  			var t=ev.target.offsetTop-t2;
  			var arrs1=[].concat(this.arrs);
  			arrs1.push(t);
  			for(var i=0;i<arrs1.length;i++){
  				for(var j=0;j<arrs1.length;j++){
  					var ex='';
  					if(arrs1[i]<arrs1[j]){
  						ex=arrs1[i];
  						arrs1[i]=arrs1[j];
  						arrs1[j]=ex;
  					}
  				}
  			}
  			var p=arrs1.indexOf(t);
  			if(p==0){
  				p=0;	
  			}else{
  				p=p-1;
  			}
			for(var i=0;i<this.arrs.length;i++){
				document.getElementsByClassName('right')[0].children[i].className='';
				document.getElementsByClassName('right')[0].children[p].className='rtbg';
				
			}
  		}	
  		}
	}
</script>

<style>
	@import url("./../assets/css/base.css");
	
	.list{
		width: 100%;
		background: #eeeeee;
		box-sizing: border-box;
	}
	.blue{
		border: 1px solid #007AFF !important;
	}
	.list>header{
		height: 5.2rem;
		width: 100%;
		background: #00bcd4;
		position: fixed;
		top: 0;
		left: 0;
		box-sizing: border-box;
	}
	.list>header>p{
		font-size: 14px;
		text-align: center;
		color: #fff;
		line-height: 2.5rem;
	}
	.list>header>p>.icon-renzheng-fanhuijiantou-copy{
		position: absolute;
		left: 5px;
		display: inline-block;
		color: #fff;
	}
	.list>header>input{
		text-align: center;
		width: 90%;
		height: 2rem;
		border: none;
		color: #757575;
		border-radius: 5px;
		position: absolute;
		left: 5%;
		top: 48%;
	}
	.list .city{
		margin-top: 15%;
		width: 100%;
		box-sizing: border-box;
	}
	.list .city>.block h6{
		line-height: 3rem;
		font-size: 14px;
		color: #666666;
		text-indent: 10px;
	}
	.list .city .block .precity{
		padding: 10px;
		padding-right: 0;
		background: #fff;
		padding-bottom: 0;
		width: 100%;
		box-sizing: border-box;

	}
	.list .city  .block .precity>.btn{
		width: 30%;
		border: 1px solid #cccccc;
		border-radius: 5px;
		display: inline-block;
		text-align: center;
		line-height: 2.4rem;
		font-size: 14px;
		color: #333333;
		margin-right: 9px;
		margin-bottom: 12px;
	}
	.list .city  .block .precity>.lan,.list .show>ul>li{
		width: 100%;
		padding: 10px 0;
		border: none;
		display: block;
		color: #333;
		font-size: 14px;
		border-bottom: 1px solid #ccc;
		text-indent: 10px;
	}
	.list .city .block .pn{
		padding-left: 0;
	}
	.list .right{
		position: fixed;
		right: 2px;
		top: 10%;
	}
	.list .right>div>a{
		display: block;
		font-size: 16px;
		color: #7ed6ee;
		
	}
	a:active{
		color: #333;
	}
	.show{
		position: absolute;
		top: 8%;
		width: 100%;
	}
	.show>ul>li{
		
	}
	.rtbg{
		background:rgba(255,0,0,0.5);
	}
</style>