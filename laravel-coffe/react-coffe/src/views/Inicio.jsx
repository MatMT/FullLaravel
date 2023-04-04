import { productos } from "../data/productos";
import Producto from "../components/Producto";

export default function Inicio() {
    return (
        <>
            <h1 className="text-4xl font-black">Inicio</h1>
            <p className="text-2xl my-10">
                Elige y personaliza tu pedido a continuación.
            </p>

            <div className="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                {productos.map((producto) => (
                    <Producto key={producto.imagen} producto={producto} />
                ))}
            </div>
        </>
    );
}
