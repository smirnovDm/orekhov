import {set} from 'vue';
const state = {
    response: {},
    cities: []
};

const getters = {
    single: ({cities}) => id => {
        return cities.find(city => city.id == id) || null;
    },
    all({cities}){
        return cities;
    },
    response({response}){
        return response;
    },
    findIndexById: ({cities}) => id => {
        return cities.findIndex(city => city.id == id);
    },
}
const mutations = {
    setResponse(state, payload){
        return state.respone = payload;
    },
    setAll(state, cities){
        return state.cities = cities;
    }
}
const actions = {
    load({commit}, payload = {}){
        return new Promise((resolve, reject) => {
            axios.get('/api/cities', {
                params: {
                    page: payload.page || 1,
                }
            })
           .then(r => {
               commit('setResponse', r.data);
               commit('setAll', r.data.data);
               resolve(r);
           })
           .catch(reject);
        })
    }
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,
}
