# Behat bdd with mink
> Repositório dedicado aos testes usando framework Behat com Mink

### Passo a passo para configuração
- Tendo o composer instalado, use-o para instalar localmente
> composer require --dev behat/behat
- Inicei o projeto de testes com o seguinte comando
> vendor/bin/behat --init
- Crie um arquivo 'name.feature' e escreva seus cenários de teste (semelhante ao Cucumber)
- Após a criação de seus cenários de teste, digite o comando:
> vendor/bin/behat --dry-run --append-snippets
- Configure seus testes
- Execute os casos de teste com o seguinte comando
> vendor/bin/behat

### Para chamadas HTTP, instale:
- composer require --dev behat/mink

### Para usar o arquivo yaml nos seus testes, faça
- composer global require behat/behat
- behat --config custom-config.yml

### Mais informações
- https://symfony.com/doc/current/form/create_custom_field_type.html