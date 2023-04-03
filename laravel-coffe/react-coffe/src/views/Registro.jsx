import { Link } from 'react-router-dom';

export default function Registro() {
  return (
    // Fragment :0
    <>
        <h1 className="text-4xl font-black">Crea tu Cuenta</h1>
        <p>Crea tu cuenta llenando el formulario</p>

        <div className="bg-white shadow-md rounded-md mt-10 px-5 py-10">
            <form action="">

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
