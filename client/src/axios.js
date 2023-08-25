import axios from 'axios'
import store from 'store'
axios.defaults.baseURL = 'http/localhost:8000/api'
axios.defaults.headers.common['Authorization'] = 'Bearer' + store.state.loggedUser.token