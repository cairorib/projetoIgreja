import axios from 'axios';

const api = axios.create({

    baseURL:'http://192.168.0.2/congregation/index.php/ApiControl/allDadosApi'

});

export default api;