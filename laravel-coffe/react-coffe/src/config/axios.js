import axios from "axios";

const clienteAxios = axios.create({
    // Variable de entorno
    baseURL: import.meta.env.VITE_API_URL,
})

export default clienteAxios;