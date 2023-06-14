export default function TableMarmitex({ className = '', ...props }) {
  return (
    <table className={'w-full max-w-5xl text-left' + className}>
      <thead>
        <tr className="bg-slate-300">
          <th>Preco</th>
          <th>Tamanho</th>
          <th>Tara</th>
          <th>Detalhamento</th>
        </tr>
      </thead>
      <tbody>
        <tr className="border-b border-b-solid border-b-slate-300">
          <td>{props.preco}</td>
          <td>{props.tamanho}</td>
          <td>{props.tara}</td>
          <td>{props.detalhamento}</td>
        </tr>      
      </tbody>
    </table>    
  );
}
