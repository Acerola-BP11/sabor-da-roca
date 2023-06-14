import { Head, useForm } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import TextInput from '@/components/TextInput';
import InputLabel from "@/components/InputLabel";
import PrimaryButton from '@/components/PrimaryButton';
import InputError from "@/components/InputError";

export default function RegisterClient({ auth }) {
  const { data, setData, post, errors } = useForm({
    nome: '',
    rua: '',
    complemento: '',
    cidade: '',
    ddd_fixo: '',
    numero_fixo: '',
    ddd_cel: '',
    numero_cel: '',
    cpf: '',
    rg: '',
    nascimento: ''
  });

  const submit = (e) => {
    e.preventDefault();

    post(route('registerclient'));
  };

  return (
    <AuthenticatedLayout
        user={auth.user}
        header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Cadastrar Cliente</h2>}
    >
    
    <Head title="Cadastrar Cliente" />
    
    <div className="flex flex-col items-center justify-center">
      <form onSubmit={submit} className="flex flex-col w-[500px] items-left justify-center mt-20 bg-white p-5">      
        <div className="flex flex-row w-full">
          <div className="mr-4 w-full">
            <InputLabel htmlFor="nome" value="Nome" />
            <TextInput
              id="nome"
              name="nome"
              value={data.nome}
              className="mt-1 block w-full"
              autoComplete="nome"
              isFocused={true}
              onChange={(e) => setData('nome', e.target.value)}
              required
            />

            <InputError message={errors.name} className="mt-2" />

            <InputLabel htmlFor="rua" value="Rua" />
            <TextInput
              id="rua"
              name="rua"
              value={data.rua}
              className="mt-1 block w-full"
              autoComplete="rua"
              isFocused={true}
              onChange={(e) => setData('rua', e.target.value)}
              required
            />

            <InputError message={errors.name} className="mt-2" />

            <InputLabel htmlFor="complemento" value="Complemento" />
            <TextInput
              id="complemento"
              name="complemento"
              value={data.comple}
              className="mt-1 block w-full"
              autoComplete="complemento"
              isFocused={true}
              onChange={(e) => setData('complemento', e.target.value)}
              required
            />

            <InputError message={errors.name} className="mt-2" />

            <InputLabel htmlFor="cidade" value="Cidade" />
            <TextInput
              id="cidade"
              name="cidade"
              value={data.cidade}
              className="mt-1 block w-full"
              autoComplete="cidade"
              isFocused={true}
              onChange={(e) => setData('cidade', e.target.value)}
              required
            />     

            <InputError message={errors.name} className="mt-2" />

            <InputLabel htmlFor="dddfixo" value="DDD Fixo" />
            <TextInput
              id="dddfixo"
              name="dddfixo"
              value={data.ddd_fixo}
              className="mt-1 block w-full"
              autoComplete="dddfixo"
              isFocused={true}
              onChange={(e) => setData('dddfixo', e.target.value)}
              required
            />

            <InputError message={errors.name} className="mt-2" />

            <InputLabel htmlFor="numerofixo" value="Numero Fixo" />
            <TextInput
              id="numerofixo"
              name="numerofixo"
              value={data.numero_fixo}
              className="mt-1 block w-full"
              autoComplete="numerofixo"
              isFocused={true}
              onChange={(e) => setData('numerofixo', e.target.value)}
              required
            /> 

            <InputError message={errors.name} className="mt-2" />
          </div>
          
          <div className="ml-4 w-full">                                   
            <InputLabel htmlFor="dddcel" value="DDD Cel" />
            <TextInput
              id="dddcel"
              name="dddcel"
              value={data.ddd_cel}
              className="mt-1 block w-full"
              autoComplete="dddcel"
              isFocused={true}
              onChange={(e) => setData('dddcel', e.target.value)}
              required
            />    

            <InputLabel htmlFor="numerocel" value="Numero Cel" />
            <TextInput
              id="numerocel"
              name="numerocel"
              value={data.numero_cel}
              className="mt-1 block w-full"
              autoComplete="numerocel"
              isFocused={true}
              onChange={(e) => setData('dddcel', e.target.value)}
              required
            />      

            <InputError message={errors.name} className="mt-2" />

            <InputLabel htmlFor="cpf" value="CPF" />
            <TextInput
              id="cpf"
              name="cpf"
              value={data.cpf}
              className="mt-1 block w-full"
              autoComplete="cpf"
              isFocused={true}
              onChange={(e) => setData('cpf', e.target.value)}
              required
            />    

            <InputError message={errors.name} className="mt-2" />

            <InputLabel htmlFor="rg" value="RG" />
            <TextInput
              id="rg"
              name="rg"
              value={data.rg}
              className="mt-1 block w-full"
              autoComplete="rg"
              isFocused={true}
              onChange={(e) => setData('rg', e.target.value)}
              required
            /> 

            <InputError message={errors.name} className="mt-2" />

            <InputLabel htmlFor="nascimento" value="Data de Nascimento" />
            <TextInput
              id="nascimento"
              name="nascimento"
              value={data.nascimento}
              className="mt-1 block w-full"
              autoComplete="nascimento"
              isFocused={true}
              onChange={(e) => setData('nascimento', e.target.value)}
              required
            />     

            <InputError message={errors.name} className="mt-2" />
          </div>
        </div>

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
