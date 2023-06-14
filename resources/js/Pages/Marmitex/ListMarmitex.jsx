import { Head } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import TableMarmitex from "@/components/TableMarmitex";

export default function ListMarmitex({ auth }) {  
  return (
    <AuthenticatedLayout
        user={auth.user}
        header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Listar Marmitas</h2>}
    >
    
    <Head title="Listar Marmitex" />
    
    <div className="flex flex-col items-center justify-center mt-10">
      <TableMarmitex        
        preco="123"
        tamanho="GRANDE"
        tara="321"
        detalhamento="TESTES"
      />
    </div>
    
    </AuthenticatedLayout>
  );
}
