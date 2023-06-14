export default function TableMarmitex({...props }) {
  return (
    <tr className="border-b border-b-solid border-b-slate-300">
      <td>{props.preco}</td>
      <td>{props.tamanho}</td>
      <td>{props.tara}</td>
      <td>{props.detalhamento}</td>
    </tr>
  );
}
