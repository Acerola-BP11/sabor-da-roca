import { Head } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import TableClient from "@/components/TableClient";

export default function ListClient({ auth, clientes }) {    
  return (
    <AuthenticatedLayout
        user={auth.user}
        header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Listar Clientes</h2>}
    >
    
    <Head title="Listar Clientes" />
    
    <div className="flex flex-col items-center justify-center mt-10">  
      <table className={'w-full max-w-5xl text-left'}>
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
            <th></th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          {clientes.map((cliente, index) => (
            <TableClient
              key={index}
              id={cliente.id}
              nome={cliente.nome}
              rua={cliente.rua}
              complemento={cliente.complemento}
              cidade={cliente.cidade}
              ddd_fixo={cliente.ddd_fixo}
              numero_fixo={cliente.numero_fixo}
              ddd_cel={cliente.ddd_cel}
              numero_cel={cliente.numero_cel}
              cpf={cliente.cpf}
              rg={cliente.rg}
              nascimento={cliente.nascimento}              
            />
          ))}
        </tbody>

      </table>      
            
    </div>
    
    </AuthenticatedLayout>
  );
}
