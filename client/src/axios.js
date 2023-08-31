import axios from 'axios'
import store from 'store'
axios.defaults.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('token')