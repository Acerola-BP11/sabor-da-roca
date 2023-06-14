export default function TableClient({ className = '', ...props }) {
  return (
    <table className={'w-full max-w-5xl text-left' + className}>
      <thead>
        <tr className="bg-slate-300">
          <th>Nome</th>
          <th>Rua</th>
          <th>Complemento</th>
          <th>Cidade</th>
          <th>DDD Fixo</th>
          <th>Numero Fixo</th>
          <th>DDD Cel</th>
          <th>Numero Cel</th>
          <th>CPF</th>
          <th>RG</th>
          <th>Data de Nascimento</th>
        </tr>
      </thead>
      <tbody>
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
        </tr>      
      </tbody>
    </table>    
  );
}
