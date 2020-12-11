import axios from 'axios'

const state = {
    products: [],
    categories: []

};

const getters = {
    allProducts: state => state.products,
    allCategories: state => state.categories
};

const actions = {
    async fetchProducts({commit}) {
        axios.get('/products').then(res => {
            commit('setProducts', res.data);
            console.log(res.data)
        })
    },
    async fetchCategories({commit}) {
        axios.get('/categories').then(res => {
            commit('setCategories', res.data);
            console.log(res.data)
        })
    }
};

const mutations = {
    setProducts: (state, payload) => (state.products = payload),
    setCategories: (state, payload) => (state.categories = payload),

};

export default {
    state,
    getters,
    actions,
    mutations
}
