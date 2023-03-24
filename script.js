function validarCPF(cpf) {
    cpf = cpf.replace(/\D+/g, '');
  
    
    if (cpf.length !== 11) {
      alert('CPF inválido!');
      return;
    }
  
    
    let soma = 0;
    for (let i = 0; i < 9; i++) {
      soma += parseInt(cpf.charAt(i)) * (10 - i);
    }
    let resto = 11 - (soma % 11);
    let digito1 = resto < 10 ? resto : 0;
  
   
    soma = 0;
    for (let i = 0; i < 10; i++) {
      soma += parseInt(cpf.charAt(i)) * (11 - i);
    }
    resto = 11 - (soma % 11);
    let digito2 = resto < 10 ? resto : 0;
  
    
    if (cpf.charAt(9) !== digito1.toString() || cpf.charAt(10) !== digito2.toString()) {
      alert('CPF inválido!');
      return;
    }
  }