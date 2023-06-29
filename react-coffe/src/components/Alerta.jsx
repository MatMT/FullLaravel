export default function Alerta({ children }) {
    return (
        <div className=" text-center my-2 bg-red-600 text-white font-bold p-2 uppercase rounded-md">
            {children}
        </div>
    )
}
