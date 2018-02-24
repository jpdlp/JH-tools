# JH-tools ![logo](production/images/jh-tools-logo.png)
O JH-tools é uma interface Web para um conjunto de ferramentas para análise de redes de computadores. Para utilizar os serviços, o usuário deverá realizar um cadastro prévio.

Desenvolvido por:

- [João Paulo](https://duckduckgo.com/)
- [José Hermano](https://www.yandex.com)

### Pré-requisitos

Para o funcionamento do projeto, o usuário deverá ter instalado no seu sistema as ferramentas abaixo:

- [Vagrant](https://www.vagrantup.com)
- [VirtualBox](https://www.virtualbox.org/)



## Ferramentas utilizadas:
  * IPinfo
  <!-- * Dig -->
  * Traceroute
  <!-- * Network Scanner (nmap) -->

## Serviços

- [Consultar](#consultar)
- [Traceroute](#traceroute)

## Consultar

Esse serviço tem a finalidade de consultar informações dos bancos de dados de DNS sobre entidades na internet. Uma entidade na internet pode ser um nome de domínio, um endereço IP ou um AS (Sistema Autônomo).

### PARAM

```
/ipinfo.php?domain=:url
```

Param

| Name | Tipo | Descrição |
|-|-|-|
| :url | String | ... [ipinfo](https://www.unix.com/man-page/linux/1/WHOIS/) |
<!-- | :domain | String | ... |  -->

Exemplo:


```
/ipinfo.php?domain=ifpb.edu.br
```

Em caso de sucesso...

```js
{
  "as": "AS1916 Associação Rede Nacional de Ensino e Pesquisa",
  "city": "João Pessoa",
  "country": "Brazil",
  "countryCode": "BR",
  "isp": "Associação Rede Nacional de Ensino e Pesquisa",
  "lat": -7.1237,
  "lon": -34.8656,
  "org": "Associação Rede Nacional de Ensino e Pesquisa",
  "query": "200.129.79.50",
  "region": "PB",
  "regionName": "Paraíba",
  "status": "success",
  "timezone": "America/Fortaleza",
  "zip": ""
}
```

Em caso de erro...

```js
{
  "status": "consulta inválida"
}
```

### AÇÃO

Para realizar a consulta é necessário executar o comando:

```
$ whois ifpb.edu.br
```



## Traceroute

Ferramenta de diagnóstico que rastreia a rota de um pacote através de uma rede de computadores que utiliza os protocolos IP e o ICMP.

### PARAM

```
/traceroute.php?domain=:url
```

Param

| Name | Tipo | Descrição |
|-|-|-|
| :url | String | ... [traceroute](https://linux.die.net/man/8/traceroute) |
<!-- | :command | String | ... | -->

Exemplo:

```
/traceroute.php?domain=ifpb.edu.br
```

Em caso de sucesso...

```js
{
  "status":       "success"
  {
    "query": {
        "domain": "ifpb.edu.br"
    },
    "response": {
        "hops": [
            {
              "number": "1",
              "hostname": "10.0.2.2",
              "ip": "10.0.2.2",
              "rtt":  "0.098 ms"
            },
            {
              "number": "2",
              "hostname": "192.168.10.254",
              "ip": "192.168.10.254",
              "rtt":  "2.969 ms"
            },
            {
              "number": "3",
              "hostname": "bb40000b.virtua.com.br",
              "ip": "187.64.0.11",
              "rtt": "1038.644 ms"
            }
            ...
          ]
      }
  }
}
```

Em caso de erro...

```js
{
  "status": "destino inválido."
}
```

### AÇÃO

Para executar tal ação é necessário executar o comando:

```
$ traceroute ifpb.edu.br
```
