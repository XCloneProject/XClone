import { createStore } from "vuex";

export default createStore ({
    state:{
        loggedUser : {
            username:'',
            email:'',
            password:'',
            token:''
          }
    },
    mutations:{
      setUser(state,newUser){
        state.loggedUser.email = newUser.email
        state.loggedUser.username=  newUser.username;
        state.loggedUser.password= newUser.password
        state.loggedUser.token= localStorage.getItem('token')
      }
    },
    actions:{
         async register({commit},User){
            try{
              // const response = await axios.post('register',User)
              // console.log(response)
              // commit('setUser',response.data)
              console.log(User)
              // router.push({name:'login'})
            }catch(err){
              console.log(err)
            }
          }
    },
    getters:{

    },
    modules:{

    }
})