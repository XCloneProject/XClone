import { createStore } from "vuex";
import axios from 'axios'
import router from '../router/index.js'
import { useToast } from "vue-toastification";

export default createStore({
  state: {  
    loggedUser: {
      name: localStorage.getItem("NAME"),
      email: localStorage.getItem("EMAIL"),
      token: localStorage.getItem("token"),
      role: ''
    }
  },
  mutations: {
    setUser(state, newUser) {
      state.loggedUser.email = localStorage.setItem("EMAIL", newUser.user.email)
      state.loggedUser.name = localStorage.setItem("NAME", newUser.user.name)
    },
    resetUser(state) {
      state.loggedUser.email = ''
      state.loggedUser.name = ''
      state.loggedUser.password = ''
      state.loggedUser.token = ''
      localStorage.clear()
    }
  },
  actions: {

    //register
    async register({ commit }, User) {
      try {
        const response = await axios.post('http://localhost:8000/api/register', User)
        router.push({ name: 'login' })
      } catch (err) {
        const toast = useToast()
        if(User.password.length<8){
          toast.error('Password lenght must be greater than 8')
          return;
        }else if(User.password != User.password_confirmation){
          toast.error('Passwords do not match!')
          return;
        }else
        toast.error("Something went wrong ", { timeout: 3000 })
      }
    },

    //login
    async login({ commit }, User) {
      try {
        if (localStorage.getItem('token'))
          localStorage.clear()
        const response = await axios.post('http://localhost:8000/api/login', User)
        commit('setUser', response.data)
        localStorage.setItem('token', response.data.Token)
        router.push({ name: 'home' })
      } catch (err) {
        const toast = useToast()
        toast.error("Invalid credentials", { timeout: 3000 })
      }
    },
    
    //logout
    async logout({ commit }) {
      try {
        const response = await axios.post('http://localhost:8000/api/logout', null, {
          headers: {
            Authorization: `Bearer ${localStorage.getItem('token')}`
          }
        })
        commit('resetUser')
        router.push({ name: 'login' })
      } catch (err) {
        console.log(err)
      }
    }

  },
  getters: {

  },
  modules: {

  }
})