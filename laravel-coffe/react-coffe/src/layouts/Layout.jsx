import { Outlet } from "react-router-dom";
import Modal from "react-modal";
import { ToastContainer } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

import Sidebar from "../components/Sidebar";
import Resumen from "../components/Resumen";
import useQuiosco from "../hooks/useQuiosco";
import ModalProducto from "../components/ModalProducto";

// Objeto con estilos Css
const customStyles = {
    content: {
        top: "50%",
        left: "50%",
        right: "auto",
        bottom: "auto",
        marginRight: "-50%",
        transform: "translate(-50%, -50%)",
    },
};

// Definición del elemento al que se agrega
Modal.setAppElement("#root");

export default function Layout() {
    const { modal } = useQuiosco();

    return (
        <>
            <div className="md:flex">
                <Sidebar />

                <main className="flex-1 h-screen overflow-y-scroll bg-gray-100 p-2.5">
                    <Outlet />
                </main>

                <Resumen />
            </div>

            {/* Cuando se abre el modal */}
            <Modal isOpen={modal} style={customStyles}>
                <ModalProducto />
            </Modal>

            {/* Aún no se manda a llamar */}
            <ToastContainer />
        </>
    );
}
