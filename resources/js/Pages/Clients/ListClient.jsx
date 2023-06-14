import { Head } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import TextInput from '@/components/TextInput';
import InputLabel from "@/components/InputLabel";
import PrimaryButton from '@/components/PrimaryButton';
import TableClient from "@/components/TableClient";

export default function ListClient({ auth }) {  
  return (
    <AuthenticatedLayout
        user={auth.user}
        header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Listar Clientes</h2>}
    >
    
    <Head title="Listar Clientes" />
    
    <div className="flex flex-col items-center justify-center mt-10">
      <TableClient        
        nome="teste"
        rua="rua"
        complemento="perto"
        cidade="bauru"
        ddd_fixo="14"
        numero_fixo="1234123"
        ddd_cel="13"
        numero_cel="21321312"
        cpf="123123123"
        rg="123213"
        nascimento="12/12/12"
      />
    </div>
    
    </AuthenticatedLayout>
  );
}
