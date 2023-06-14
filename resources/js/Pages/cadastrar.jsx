import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import TextInput from '@/components/TextInput';
import PrimaryButton from '@/components/PrimaryButton';


export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Cadastrar Marmita</h2>}
>
            <Head title="cadastrar" />
<form method='post'>
  <label>
    Preço:
    <input type="text" name="preco" />
    Tamanho:
    <input type="text" name="tamanho" />
    Tara:
    <input type="text" name="tara" />
    Detalhamento:
    <input type="text" name="detalhamento" />
</label>
<PrimaryButton class="submit">Enviar</PrimaryButton>
</form>
        </AuthenticatedLayout>
    );
}
