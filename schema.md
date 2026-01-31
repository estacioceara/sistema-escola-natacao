classDiagram

    Professor <--|> Aula : 1-N
    Aluno <--|> Aula : N-M
    Endereco <--|> Aluno : 1-1
    Endereco <--|> Professor : 1-1
    Aluno <--|> ResponsavelPeloAluno : N-1
    Matricula <--|> Aluno : 1-1
    Mensalidade <--|> Aluno : N-1




    class Endereco {
        + logradouro
        + numero
        + bairro
        + cidade 
        + uf
    }

    class ResponsavelPeloAluno {
        + nome 
        + cpf
        + telefone
        + endereco: Endereco
    }

    class Aluno {
        + nome: string
        + data_nascimento: Date
        + cpf: ?string
        + telefone: string
        + obs: string
        + endereco: Endereco
        + responsavel: Responsavel
        + matricula: Matricula

        matricular()
        editar()
        buscarInformacoes()
        darPresenca()
    }

    class Matricula {
        + identificador
        + data
        + status: ENUM
        + valor: float
    }
    
    class Professor {
        + nome
        + cpf
        + categoria: ENUM
        + endereco: Endereco
        + turnos: array
    }

    class Aula {
        + professor: Professor
        + nivel: ENUM
        + horario: Time
        + data: Date
        + modalidade: ENUM
        + valor: float
        + local: string

        agendar()
        editar()
        cancelar()
        buscarInformacoes()

    }

    class Desconto {
        + valor
        + descricao
    }

    class Mensalidade {
        + valor
        + aluno: Aluno
        + pago: boolean
        + data_vencimento: Date
        + data_pagamento: Date
        + competencia: string

        gerarBoleto()
        efetuarPagamento()
        multar()
        aplicarDesconto()

    }
