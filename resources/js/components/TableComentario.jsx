import DeleteIcon from '@/components/DeleteIcon'
import axios from "axios"

export default function TableComentario({...props }) {
  const deletar = (e, id) => {
    e.preventDefault()
    
    axios.get(`/clientes/delete/${id}`);  
  }


  return (    
    <tr className="border-b border-b-solid border-b-slate-300">
      <td>{props.nome}</td>
      <td>{props.email}</td>
      <td>{props.assunto}</td>
      <td>{props.comentario}</td>
      <td><button onClick={(e) => deletar(e, props.id)}><DeleteIcon /></button></td>      
    </tr>  
  );
}
