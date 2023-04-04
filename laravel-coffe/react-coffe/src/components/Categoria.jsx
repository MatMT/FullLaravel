export default function Categoria({ categoria }) {
    const { icono, id, nombre } = categoria;

    return (
        <div className="flex items-center gap-4 border w-full p-3 hover:bg-amber-400 cursor-pointer">
            <img
                alt="Imagen Icono"
                src={`/img/icono_${icono}.svg`}
                className="w-12"
            />

            <p className="text-lg font-bold cursor-pointer truncate">
                {nombre}
            </p>
        </div>
    );
}
