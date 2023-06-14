import { Head, useForm } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import TextInput from '@/components/TextInput';
import InputLabel from "@/components/InputLabel";
import PrimaryButton from '@/components/PrimaryButton';
import InputError from "@/components/InputError";

export default function RegisterMarmitex({ auth }) {
  const { data, setData, post, errors } = useForm({
    preco: '',
    tamanho: '',
    tara: '',
    detalhamento: '',
  });

  const submit = (e) => {
    e.preventDefault();

    post(route('registermarmitex'));
  };

  return (
    <AuthenticatedLayout
        user={auth.user}
        header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Cadastrar Marmita</h2>}
    >
    
    <Head title="Cadastrar Marmitex" />
    
    <div className="flex flex-col items-center justify-center">
      <form onSubmit={submit} className="flex flex-col w-96 items-left justify-center mt-20 bg-white p-5">   
        <InputLabel htmlFor="preco" value="Preco" />
        <TextInput
          id="preco"
          name="preco"
          value={data.preco}
          className="mt-1 block w-full"
          autoComplete="preco"
          isFocused={true}
          onChange={(e) => setData('preco', e.target.value)}
          required
        />

        <InputError message={errors.name} className="mt-2" />

        <InputLabel htmlFor="tamanho" value="Tamanho" />
        <TextInput
          id="tamanho"
          name="tamanho"
          value={data.tamanho}
          className="mt-1 block w-full"
          autoComplete="tamanho"
          isFocused={true}
          onChange={(e) => setData('tamanho', e.target.value)}
          required
        />

        <InputError message={errors.name} className="mt-2" />

        <InputLabel htmlFor="tara" value="Tara" />
        <TextInput
          id="tara"
          name="tara"
          value={data.tara}
          className="mt-1 block w-full"
          autoComplete="tara"
          isFocused={true}
          onChange={(e) => setData('tara', e.target.value)}
          required
        />

        <InputError message={errors.name} className="mt-2" />

        <InputLabel htmlFor="detalhamento" value="Detalhamento" />
        <TextInput
          id="detalhamento"
          name="detalhamento"
          value={data.detalhamento}
          className="mt-1 block w-full"
          autoComplete="detalhamento"
          isFocused={true}
          onChange={(e) => setData('detalhamento', e.target.value)}
          required
        />      

        <InputError message={errors.name} className="mt-2" />

        <PrimaryButton 
          type="submit"
          className="mt-5 justify-center flex"
        >
          Enviar
        </PrimaryButton>
      </form>
    </div>
    
    </AuthenticatedLayout>
  );
}
