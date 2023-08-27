import axios from 'axios'
import store from 'store'
axios.defaults.headers.common['Authorization'] = 'Bearer' + store.state.loggedUser.token