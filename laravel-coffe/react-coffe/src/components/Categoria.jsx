import useQuiosco from "../hooks/useQuiosco";

export default function Categoria({ categoria }) {
    // Extraer funciones y datos de context
    const { handleClickCategoria, categoriaActual } = useQuiosco();
    const { icono, id, nombre } = categoria;

    // Función de categoria actual
    const resaltarActual = () =>
        categoriaActual.id === id ? "bg-amber-400" : "bg-white";

    return (
        <>
            {/* Utilización de button para eventos */}
            <button
                type="button"
                // Arrow function - Callback
                onClick={() => handleClickCategoria(id)}
                className={`${resaltarActual()}
            flex items-center gap-4 border w-full p-3 hover:bg-amber-400 cursor-pointer text-lg font-bold  truncate`}
            >
                <img
                    alt="Imagen Icono"
                    src={`/img/icono_${icono}.svg`}
                    className="w-12"
                />
                {nombre}
            </button>
        </>
    );
}
