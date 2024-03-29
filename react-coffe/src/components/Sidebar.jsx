import useQuiosco from "../hooks/useQuiosco";
import Categoria from "./Categoria";

export default function Sidebar() {
    // Se retorna un objeto
    const { categorias } = useQuiosco();

    return (
        <aside className="md:w-72">
            <div className="p-4">
                <img className="w-40" src="img/logo.svg" alt="" />
            </div>

            <div className="mt-10">
                {categorias.map((categoria) => (
                    <Categoria key={categoria.id} categoria={categoria} />
                ))}
            </div>

            <div className="my-5 px-5">
                <button
                    type="button"
                    className="text-center bg-red-500 w-full p-3 text-white truncate font-bold"
                >
                    Cancelar Orden
                </button>
            </div>
        </aside>
    );
}
