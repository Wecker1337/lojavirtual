<form action="{{ url('suppliers/update') }}" method="POST">
    @csrf

   <input type="hidden" name="id" value="{{ $supplier['id'] }}">
    
    <label>Nome:</label><br>
    <input name="name" type="text" value="{{ $supplier['name_reason'] }}" /><br>

    <label>CPF/CNPJ:</label><br>
    <input name="description" type="text" value="{{ $supplier['cpf_cnpj'] }}" /><br>

    <label>Telefone:</label><br>
    <input name="quantity" type="number" value="{{ $supplier['phone'] }}" /><br>

    <label>Tipo de Pessoa (F ou J):</label><br>
    <input name="type" type="text" pattern="[FJfj]{1}" title="Somente F ou J" required value="{{ $supplier['type'] }}" /><br>

    <input type="submit" value="Salvar" />
</form>
