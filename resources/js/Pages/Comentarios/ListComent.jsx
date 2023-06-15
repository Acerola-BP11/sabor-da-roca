import { Head } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import TableComentario from '@/components/TableComentario';

export default function ListComent({ auth, marmitex }) {  
  return (
    <AuthenticatedLayout
        user={auth.user}
        header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Listar comentarios</h2>}
    >
    
    <Head title="Listar Comentario" />
    
    <div className="flex flex-col items-center justify-center mt-10">
    <table className={'w-full max-w-5xl text-left'}>
      <thead>
        <tr className="bg-slate-300">
          <th>Nome</th>
          <th>email</th>
          <th>assunto</th>
          <th>comentario</th>
        </tr>
      </thead>
      <tbody>
        {marmitex.map((comentario, index) => (
          <TableComentario
            key={index}     
            id={comentario.id} 
            nome={comentario.nome}
            email={comentario.email}
            assunto={comentario.assunto}
            comentario={comentario.comentario}
          />    
        ))}
      </tbody>
    </table> 
      
    </div>
    
    </AuthenticatedLayout>
  );
}
