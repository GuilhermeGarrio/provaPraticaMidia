<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termo de Responsabilidade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        h1 {
            text-align: center;
        }
        .section {
            margin: 20px 0;
        }
        .hardware-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .hardware-table, .hardware-table th, .hardware-table td {
            border: 1px solid #000;
        }
        .hardware-table th, .hardware-table td {
            padding: 10px;
            text-align: left;
        }
        .signature {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>

    <h1>Termo de Responsabilidade</h1>

    <p>Eu, {{ $user_name }}, na função {{ $user_role }}, portador do CPF: {{ $user_document }}, doravante designado Usuário, abaixo identificado e qualificado, declaro estar recebendo para o uso especificado neste termo e sem transferência de propriedade, nesta data, da empresa Midia Simples, doravante designada Empresa, um Notebook, da marca {{ $product_brand }}, modelo {{ $product_model }}, nº de série {{ $product_serial_number }} contendo a seguinte configuração padrão de hardware:</p>

    <div class="section">
        <h2>HARDWARE</h2>
        <table class="hardware-table">
            <tr>
                <th>PROCESSADOR</th>
                <td>{{ $product_processor }} Mhz</td>
            </tr>
            <tr>
                <th>MEMÓRIA</th>
                <td>{{ $product_memory }} Gb</td>
            </tr>
            <tr>
                <th>DISCO RÍGIDO</th>
                <td>{{ $product_disk }} Gb</td>
            </tr>
        </table>
    </div>

    <p>Este equipamento será destinado para a execução de minhas atribuições profissionais, mediante as condições abaixo, que são, desde já, por mim integralmente aceitas:</p>
    <p>O presente instrumento vigorará imediatamente a partir da assinatura.</p>
    <p>O Usuário se declara ciente da Política de Concessão de Equipamentos e também dos critérios de Flex Office da Empresa. Desta forma, os colaboradores usuários de notebook que não sejam elegíveis ao regime de trabalho em Flex Office não deverão se ausentar da companhia portando o notebook, salvo se para exercício de alguma atividade externa (reunião, por exemplo).</p>
    <p>Este equipamento é um bem que compõe a base de ativos imobilizados da Empresa, sendo assim, é de responsabilidade do Usuário zelar pelo bom uso do mesmo, evitando assim quebra, danos por mau uso, colagem de adesivos, exposição ao sol e outros procedimentos que inibam o bom funcionamento do mesmo.</p>
    <p>A manutenção do equipamento deverá seguir conforme descrito na Política de Concessão de Notebook, vedado qualquer intervenção técnica não autorizada.</p>
    <p>É expressamente proibida a abertura do equipamento pelo Usuário ou por terceiros não autorizados, apenas as equipes de suporte do Service Desk estão autorizadas a realizar a manutenção, upgrade ou alterações de hardware do equipamento. Em caso de dúvida ou problema, deve-se abrir um chamado. Sendo identificado alguma irregularidade no equipamento, o Usuário e superior imediato serão notificados e será aberto um incidente de Segurança Patrimonial e o Human Resources – HR Management será acionado.</p>
    <p>O Usuário se obriga a observar e cumprir, as normas, políticas e procedimentos da TIM relativos à Segurança da Informação, bem como se compromete a respeitar a propriedade intelectual referente ao equipamento que está sendo recebido.</p>
    <p>O Usuário em posse deste equipamento não poderá efetuar (ou permitir) instalações de hardware que alterem a características original da entrega. Ficando o usuário responsável por toda e qualquer instalação ilegal de hardware, acima descrito, enquanto o mesmo estiver em seu poder, isentando a Empresa de qualquer responsabilidade e/ou despesas associadas.</p>
    <p>O Usuário em posse deste equipamento não poderá efetuar (ou permitir) instalações de softwares e hardware não homologados pela área de IT (Informática) da Empresa, bem como softwares que não possuam respectiva licença do fabricante, ficando o Usuário responsável por toda e qualquer instalação ilegal de programas/softwares e/ou hardware no equipamento acima descrito, enquanto o mesmo estiver em seu poder isentando a Empresa de qualquer responsabilidade e/ou despesas associadas.</p>
    <p>O Usuário se declara ciente de que os arquivos trocados via internet por intermédio deste equipamento, bem como a instalação de quaisquer softwares poderão ser monitorados pela empresa, no decorrer da relação contratual, eis que o equipamento está sendo concedido como ferramenta de trabalho.</p>
    <p>O equipamento fica à disposição do Usuário, sendo terminantemente proibido emprestá-lo ou repassá-lo, a qualquer título, para outras pessoas;</p>
    <p>O Usuário deverá devolver o equipamento e respectivos acessórios à Empresa, a qualquer tempo, mediante simples solicitação, no prazo máximo de 24 (vinte e quatro) horas, contados após o recebimento do comunicado realizado pela área solicitante;</p>
    <p>Como este equipamento é um bem que compõe a base de ativos imobilizados da Empresa, no caso de desligamento, o Usuário deve devolver o equipamento e respectivos acessórios à Empresa no dia em que for comunicada a dispensa e/ou demissão.</p>
    <p>Quando da devolução do equipamento acima descrito à Empresa, incluindo seus acessórios, este deverá estar em perfeitas condições de uso, ressalvado o desgaste natural;</p>
    <p>A utilização deste equipamento é oferecida por liberalidade da Empresa e está reserva-se o direito de suspendê-lo a qualquer momento, sem justificativa;</p>
    <p>O suporte ergonômico, teclado e mouse externos se fazem necessários no posto de trabalho considerando-se os aspectos ergonômicos, tais como: altura do monitor e posicionamento dos membros superiores.</p>
    <p>A Empresa não será responsável pelos gastos e custos relativos ao extravio ou quebra do equipamento, quando caracterizado mau uso do mesmo. A reposição/conserto deve ser paga pelo Usuário, a menos que de outra forma seja aprovado pelo superior imediato e Human Resources – HR Management.</p>
    <p>Em caso de reposição do equipamento por perda, o valor de pagamento do equipamento deverá ter sua depreciação calculada pela função CFO - CSA – Contabilidade Geral, exceto em casos de roubo ou furto. No caso de mau uso, detectado em laudo técnico, a reposição da peça (display e teclado), o valor de pagamento será o que consta na nota fiscal de aquisição. A possibilidade, bem como a quantidade de parcelamentos, será negociada junto a HR Management.</p>
    <p>Caso não ocorra a devolução do equipamento à Empresa, no prazo e local determinados, a mesma poderá adotar imediatamente as medidas cabíveis para reaver sua posse, reconhecendo e confessando desde já o Usuário que a não devolução do equipamento implicará na obrigação de pagamento do valor de venda do equipamento nesta data, equivalente a R$ {{ $product_price }} ({{ $product_price_string }}). Esse valor a ser descontado deverá ter sua depreciação calculada pela função CFO - CSA – Contabilidade Geral, Controles Ativo Imobilizado e Estoques, conforme definido no POP.017 - Ativo Imobilizado.</p>

    <div class="signature">
        <div>
            <p>__________________________________</p>
            <p>Assinatura do Usuário</p>
        </div>
        <div>
            <p>Data: {{ $date }}</p>
        </div>
    </div>

</body>
</html>
