<!doctype html>

<?php

$contest = rand(2000, 3000);

$date = date('d/m/Y');

$result = array(rand(1, 10), rand(11, 20), rand(21, 30), rand(31, 40), rand(41, 50), rand(51, 60));

$winners = array(rand(1, 10), rand(1, 100), rand(1, 100));

$award = rand(100000000, 20000000);

$award_person = array(0, 1, 2);

$award_person[0] = ($award*0.35)/$winners[0];

$award_person[1] = ($award*0.19)/$winners[1];

$award_person[2] = ($award*0.19)/$winners[2];

?>


<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Números Aleatórios</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>

    <body>

        <div id="container">

            <div id="header">

                <h2 class="title">Resultado da Mega-Sena</h2>

                <p>
                    Concurso 
                    <?php echo "$contest ($date)"; ?>
                </p>

            </div>

            <div id="content">

                <div class="result_award">

                    <div class="result">

                        <h2>
                            <?php printf("%02d", $result[0]); ?>
                        </h2>

                        <h2>
                            <?php echo $result[1]; ?>
                        </h2>

                        <h2>
                            <?php echo $result[2]; ?>
                        </h2>

                        <h2>
                            <?php echo $result[3]; ?>
                        </h2>

                        <h2>
                            <?php echo $result[4]; ?>
                        </h2>

                        <h2>
                            <?php echo $result[5]; ?>
                        </h2>

                    </div>

                    <div class="award">

                        <h2 class="title">Arrecadação Total</h2>

                        <p>
                            <?php echo "R$", number_format($award, '2', ',', '.'); ?>
                        </p>

                    </div>
                
                </div>

                <table>

                    <tr>
                        <th>Acertos</th>
                        <th>Vencedores</th>
                        <th>Prêmio</th>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>
                            <?php echo $winners[0];?>
                        </td>
                        <td>
                            <?php echo "R$", number_format($award_person[0], '2', ',', '.');?>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>
                            <?php echo $winners[1];?>
                        </td>
                        <td>
                            <?php echo "R$", number_format($award_person[1], '2', ',', '.');?>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>
                            <?php echo $winners[2];?>
                        </td>
                        <td>
                            <?php echo "R$", number_format($award_person[2], '2', ',', '.');?>
                        </td>
                    </tr>

                </table>

                <h2>Como jogar?</h2>

                <p>A Mega-Sena paga milhões para o acertador dos 6 números sorteados. Ainda é possível ganhar prêmios ao acertar 4 ou 5 números dentre os 60 disponíveis no volante de apostas. Para realizar o sonho de ser o próximo milionário, você deve marcar de 6 a 15 números do volante, podendo deixar que o sistema escolha os números para você (Surpresinha) e/ou concorrer com a mesma aposta por 2, 4 ou 8 concursos consecutivos (Teimosinha).</p>

                <h2>Sorteios</h2>

                <p>Os sorteios da Mega-Sena são realizados duas vezes por semana, às quartas e aos sábados. Para adequar o número do concurso da Mega da Virada, que deve ter final 0 ou 5 foram criadas as Mega-Semanas que são exclusividade da Mega-Sena. Os sorteios ocorrem em datas predeterminadas ao longo do ano. Na ocasião são realizados três concursos semanais, às terças, quintas e sábados. Confira no cronograma de sorteio ou em Comunicados Importantes.</p>

                <h2>Apostas</h2>

                <p>A aposta mínima, de 6 números, custa R$ 4,50. Quanto mais números marcar, maior o preço da aposta e maiores as chances de faturar o prêmio mais cobiçado do país.</p>

                <h2>Premiação</h2>

                <p>O prêmio bruto corresponde a 43,35% da arrecadação. Dessa porcentagem:</p>

                <ul>
                    <li>
                        <p>- 35% são distribuídos entre os acertadores dos 6 números sorteados (Sena);</p>
                    </li>

                    <li>
                        <p>- 19% entre os acertadores de 5 números (Quina);</p>
                    </li>

                    <li>
                        <p>- 19% entre os acertadores de 4 números (Quadra);</p>
                    </li>

                    <li>
                        <p>- 22% ficam acumulados e são distribuídos aos acertadores dos 6 números nos concursos de final 0 ou 5.</p>
                    </li>

                    <li>
                        <p>- 5% ficam acumulados para a primeira faixa - sena - do último concurso do ano de final 0 ou 5 (Mega da Virada).</p>
                    </li>
                </ul>


                <h4>*Atenção: Estes resultados não são reais e não incentivam qualquer tipo de aposta com base nos resultados deste algoritmo.</h4>

                <h4>*Os valores são gerados aleatoriamente pela máquina e não possuem quaisquer chances e nem o objetivo de acertar os números</h4>

                <h4>*Não nos responsabilizamos por qualquer dano financeiro.</h4>

                <h4>*Apostas não são legais.</h4>

                <h2 class="signature">Desenvolvido por Pedro Luis de França Filho - Todos os Direitos Reservados - Copyright &copy; 2021</h2>

            </div>

        </div>

    </body>

</html>