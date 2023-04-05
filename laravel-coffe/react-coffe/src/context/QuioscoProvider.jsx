import { createContext, useState } from "react";
import { toast } from "react-toastify";
import { categorias as categoriasDB } from "../data/categorias";

const QuioscoContext = createContext();

const QuioscoProvider = ({ children }) => {
    // State - contendio a variar
    const [categorias, setCategorias] = useState(categoriasDB);
    const [categoriaActual, setCategoriaActual] = useState(categorias[0]);
    const [modal, setModal] = useState(false);
    const [producto, setProducto] = useState({});
    const [pedido, setPedido] = useState([]);

    // Convención - evento
    const handleClickCategoria = (id) => {
        const categoria = categorias.filter(
            (categoria) => categoria.id === id
        )[0];

        // Establecer nueva categoría con función modificadora
        setCategoriaActual(categoria);
    };

    const handleClickModal = () => {
        // Toggle de boleano
        setModal(!modal);
    };

    // Obtención del producto desde el componente
    const handleSetProducto = (producto) => {
        setProducto(producto);
    };

    // Sacar elementos de un objeto
    const handleAgregarPedido = ({ categoria_id, imagen, ...producto }) => {
        if (pedido.some((pedidoState) => pedidoState.id === producto.id)) {
            // Iterar por cada uno de los elementos
            const pedidoActualizado = pedido.map((pedidoState) =>
                pedidoState.id === producto.id ? producto : pedidoState
            );

            setPedido(pedidoActualizado);
            toast.success("Guardado Correctamente");
        } else {
            setPedido([...pedido, producto]);
            toast.success("Agregado al pedido");
        }
    };

    return (
        <QuioscoContext.Provider
            value={{
                categorias,
                categoriaActual,
                handleClickCategoria,
                modal,
                handleClickModal,
                producto,
                handleSetProducto,
                pedido,
                handleAgregarPedido,
            }}
        >
            {children}
        </QuioscoContext.Provider>
    );
};

export { QuioscoProvider };
export default QuioscoContext;
