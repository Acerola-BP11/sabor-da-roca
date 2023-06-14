import DeleteIcon from '@/components/DeleteIcon'
import axios from "axios"

export default function TableMarmitex({...props }) {
  const deletar = (e, id) => {
    e.preventDefault()
    
    axios.get(`/marmitex/delete/${id}`);  
  }
  return (
    <tr className="border-b border-b-solid border-b-slate-300">
      <td>{props.preco}</td>
      <td>{props.tamanho}</td>
      <td>{props.tara}</td>
      <td>{props.detalhamento}</td>
      <td><button onClick={(e) => deletar(e, props.id)}><DeleteIcon /></button></td>   
    </tr>
  );
}
