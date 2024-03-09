import openpyxl

def cadastrar_aluno():
    wb = openpyxl.load_workbook('alunos.xlsx')
    ws = wb.active

    novo_aluno = []

    print("Por favor, preencha os seguintes campos:")
    novo_aluno.append(input("Nome do aluno: "))
    novo_aluno.append(input("Nome Social: "))
    novo_aluno.append(input("Curso: "))
    novo_aluno.append(input("Data de Nascimento (DD/MM/AAAA): "))
    novo_aluno.append(input("CPF: "))
    novo_aluno.append(input("RG: "))
    novo_aluno.append(input("Órgão Expedidor: "))
    novo_aluno.append(input("Data de Expedição da Identidade (DD/MM/AAAA): "))
    novo_aluno.append(input("Título de Eleitor: "))
    novo_aluno.append(input("Nacionalidade: "))
    novo_aluno.append(input("Naturalidade: "))
    novo_aluno.append(input("Nome do Pai: "))
    novo_aluno.append(input("Nome da Mãe: "))
    novo_aluno.append(input("Endereço: "))
    novo_aluno.append(input("Número: "))
    novo_aluno.append(input("Bairro: "))
    novo_aluno.append(input("Município: "))
    novo_aluno.append(input("Estado: "))
    novo_aluno.append(input("CEP: "))
    novo_aluno.append(input("Telefone para contato: "))
    novo_aluno.append(input("Telefone do responsável: "))
    novo_aluno.append(input("E-mail: "))
    novo_aluno.append(input("Cadastro do Credor: "))
    novo_aluno.append(input("Alérgico(a) a remédio: "))
    novo_aluno.append(input("Alguma Deficiência: "))
    novo_aluno.append(input("Local de trabalho: "))
    novo_aluno.append(input("Cor ou raça: "))
    novo_aluno.append(input("CAD Único: "))
    novo_aluno.append(input("Participante do Programa Bolsa Família: "))

    ws.append(novo_aluno)

    wb.save('alunos.xlsx')
    print("Aluno cadastrado com sucesso!")

def main():
    while True:
        print("\n*** Cadastro de Alunos ***")
        print("1. Cadastrar novo aluno")
        print("0. Sair")
        opcao = input("Escolha uma opção: ")

        if opcao == '1':
            cadastrar_aluno()
        elif opcao == '0':
            print("Encerrando o programa.")
            break
        else:
            print("Opção inválida. Por favor, tente novamente.")

if __name__ == "__main__":
    main()
