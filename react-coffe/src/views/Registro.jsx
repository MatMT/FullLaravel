import { createRef, useState } from 'react';
import { Link } from 'react-router-dom';
import clienteAxios from '../config/axios';
import Alerta from '../components/Alerta';

export default function Registro() {
    const nameRef = createRef();
    const emailRef = createRef();
    const passwordRef = createRef();
    const passwordConfirmationRef = createRef();

    const [errores, setErrores] = useState([]);

    const handleSubmit = async e => {
        e.preventDefault();

        // El nombre de las llaves es como las espera el backend (laravel)
        const datos = {
            name: nameRef.current.value,
            email: emailRef.current.value,
            password: passwordRef.current.value,
            password_confirmation: passwordConfirmationRef.current.value,
        }

        try {
            const respuesta = await clienteAxios.post('/api/registro', datos)
            console.log(respuesta)
        } catch (error) {
            setErrores(Object.values(error.response.data.errors));
        }
    }

    return (
        // Fragment :0
        <>
            <h1 className="text-4xl font-black">Crea tu Cuenta</h1>
            <p>Crea tu cuenta llenando el formulario</p>

            <div className="bg-white shadow-md rounded-md mt-10 px-5 py-10">
                <form
                    onSubmit={handleSubmit}
                    noValidate
                >
                    {errores ? errores.map((error, i) => <Alerta key={i}>{error}</Alerta>) : null}

                    <div className="mb-4">
                        <label htmlFor="name" className="text-slate-800">
                            Nombre:
                        </label>
                        <input
                            id="name"
                            type="text"
                            className="mt-2 w-full p-3 bg-gray-50"
                            name="name"
                            placeholder="Tu Nombre"
                            ref={nameRef}
                        />
                    </div>

                    <div className="mb-4">
                        <label htmlFor="email" className="text-slate-800">
                            Email:
                        </label>
                        <input
                            id="email"
                            type="email"
                            className="mt-2 w-full p-3 bg-gray-50"
                            name="email"
                            placeholder="Tu Email"
                            ref={emailRef}
                        />
                    </div>

                    <div className="mb-4">
                        <label htmlFor="password" className="text-slate-800">
                            Password:
                        </label>
                        <input
                            id="password"
                            type="password"
                            className="mt-2 w-full p-3 bg-gray-50"
                            name="password"
                            placeholder="Tu Password"
                            ref={passwordRef}
                        />
                    </div>

                    <div className="mb-4">
                        <label htmlFor="password_confirmation" className="text-slate-800">
                            Repetir password:
                        </label>
                        <input
                            id="password_confirmation"
                            type="password"
                            className="mt-2 w-full p-3 bg-gray-50"
                            name="password_confirmation"
                            placeholder="Repite tu Password"
                            ref={passwordConfirmationRef}
                        />
                    </div>

                    <input type="submit" value="Crear Cuenta" className="bg-blue-700 hover:bg-blue-800 text-white w-full mt-5 p-3
                uppercase font-bold cursor-pointer rounded-md" />
                </form>
            </div>

            <nav className="mt-5">
                <Link to="/auth/login">
                    ¿Ya tienes cuenta? Inicia Sesión
                </Link>
            </nav>
        </>
    )
}
