import { Head } from '@inertiajs/react';
import GuestLayout from '@/Layouts/GuestLayout';
import TableMarmitex from "@/components/TableMarmitex";

export default function ListMarmitex({marmitex }) {  
  return (
    <GuestLayout>
            {status && <div className="mb-4 font-medium text-sm text-green-600">{status}</div>}
            <Head title="Listar Marmitex" />
    
    <div className="flex flex-col items-center justify-center mt-10">
    <table className={'w-full max-w-5xl text-left'}>
      <thead>
        <tr className="bg-slate-300">
          <th>Preco</th>
          <th>Tamanho</th>
          <th>Tara</th>
          <th>Detalhamento</th>
        </tr>
      </thead>
      <tbody>
        {marmitex.map((marmita, index) => (
          <TableMarmitex  
            key={index}   
            preco={marmita.preco}
            tamanho={marmita.tamanho}
            tara={marmita.tara}
            detalhamento={marmita.detalhamento}
          />    
        ))}
      </tbody>
    </table> 
    </div>
    </GuestLayout>
  );
}