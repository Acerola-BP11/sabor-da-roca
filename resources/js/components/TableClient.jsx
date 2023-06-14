import UpdateIcon from '@/components/UpdateIcon'
import DeleteIcon from '@/components/DeleteIcon'
import axios from "axios"

export default function TableClient({...props }) {
  const deletar = (e, id) => {
    e.preventDefault()
    
    axios.post('clientes/delete', id)
  }

  const atualizar = (e, id) => {
    e.preventDefault()
    
  }

  return (    
    <tr className="border-b border-b-solid border-b-slate-300">
      <td>{props.nome}</td>
      <td>{props.rua}</td>
      <td>{props.complemento}</td>
      <td>{props.cidade}</td>
      <td>{props.dddfixo}</td>
      <td>{props.numerofixo}</td>
      <td>{props.dddcel}</td>
      <td>{props.numerocel}</td>
      <td>{props.cpf}</td>
      <td>{props.rg}</td>
      <td>{props.nascimento}</td>
      <td><button onClick={(e) => atualizar(e, props.id)}><UpdateIcon /></button></td>
      <td><button onClick={(e) => deletar(e, props.id)}><DeleteIcon /></button></td>      
    </tr>  
  );
}
