import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

const cityAir='成武';
export default new Vuex.Store({
	state:{
		cityAir:cityAir,
	},
	actions:{
		change(ctx,i){
			ctx.commit('change',i)
		}
	},
	mutations:{
		change(state,i){
			state.cityAir=i;
		}
	}
})

