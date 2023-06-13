import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import TextInput from '@/components/TextInput';

export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Area Administrativa</h2>}
>
            <Head title="cadastrar" />

            <div>
        <TextInput type = "text" placeholder = "Preço"/>
        <TextInput placeholder = "Tamanho"/>
        <TextInput placeholder = "Tara"/>
        <TextInput placeholder = "Detalhamento"/>

            </div>
            
        </AuthenticatedLayout>
    );
}
