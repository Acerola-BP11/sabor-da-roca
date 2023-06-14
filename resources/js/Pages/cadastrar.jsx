import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import TextInput from '@/components/TextInput';
import PrimaryButton from '@/components/PrimaryButton';

const axios = require('axios')

export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Cadastrar Marmita</h2>}
>
            <Head title="cadastrar" />

            <div>
        <TextInput type = "text" placeholder = "Preço"/>
            </div>
            <div>
        <TextInput type = "text" placeholder = "Tamanho"/>
            </div>
            <div>
        <TextInput type = "text" placeholder = "Tara"/>
            </div>
            <div>
        <TextInput type = "text" placeholder = "Detalhamento"/>
            </div>
            
            <PrimaryButton className='submit'> Enviar </PrimaryButton>
        </AuthenticatedLayout>
    );
}
