import { Link } from 'react-router-dom';

export default function Login() {
  return (
    <>
        <h1 className="text-4xl font-black">Inicia Sesión</h1>
        <p>Para comenzar a pedir debes iniciar sesión</p>

        <div className="bg-white shadow-md rounded-md mt-10 px-5 py-10">
            <form action="">

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

                <input type="submit" value="Iniciar Sesión" className="bg-blue-700 hover:bg-blue-800 text-white w-full mt-5 p-3
                uppercase font-bold cursor-pointer rounded-md" />
            </form>
        </div>

        <nav className="mt-5">
            <Link to="/auth/registro">
                ¿No tienes cuenta? Crea una
            </Link>
        </nav>
    </>
  )
}
