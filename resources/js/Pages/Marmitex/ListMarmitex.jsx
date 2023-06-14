import { Head } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import TableMarmitex from "@/components/TableMarmitex";

export default function ListMarmitex({ auth, marmitex }) {  
  return (
    <AuthenticatedLayout
        user={auth.user}
        header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Listar Marmitas</h2>}
    >
    
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
            id={marmita.id} 
            preco={marmita.preco}
            tamanho={marmita.tamanho}
            tara={marmita.tara}
            detalhamento={marmita.detalhamento}
          />    
        ))}
      </tbody>
    </table> 
      
    </div>
    
    </AuthenticatedLayout>
  );
}
