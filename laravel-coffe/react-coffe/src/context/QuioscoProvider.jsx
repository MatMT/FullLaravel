import { createContext, useState } from "react";
import { categorias as categoriasDB } from "../data/categorias";

const QuioscoContext = createContext();

const QuioscoProvider = ({ children }) => {
    // State - contendio a variar
    const [categorias, setCategorias] = useState(categoriasDB);
    const [categoriaActual, setCategoriaActual] = useState(categorias[0]);
    const [modal, setModal] = useState(false);
    const [producto, setProducto] = useState({});

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
            }}
        >
            {children}
        </QuioscoContext.Provider>
    );
};

export { QuioscoProvider };
export default QuioscoContext;
