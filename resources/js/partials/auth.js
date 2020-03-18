export function registerUser(credentials){
    return new Promise((res,rej)=>{
        axios.post('/api/register', credentials)
            .then(response => {
                res(response.data);
            })
            .catch(err => {
                if(credentials.password.length < 6) {
                    rej("Password should contain at least 6 characters.")
                }
                if(credentials.password !== credentials.c_password) {

                    rej('Both passwords should match.')
                }

            })
    })
}

export function login(credentials){
    return new Promise((res,rej)=>{
        axios.post('/api/login', credentials)
            .then(response => {
                res(response.data);
            })
            .catch(err => {
                rej('Wrong Email/Password combination.')
            })
    })
}

export function getToken(){
    const userStr = localStorage.getItem('user');
    if(!userStr){
        return null
    }

    return JSON.parse(userStr);
}

